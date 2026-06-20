(function ($) {
    var pendingFavourites = {};
    var favouriteChannel = window.BroadcastChannel ? new BroadcastChannel('listing-favourites') : null;

    function favouriteElements(listingId) {
        return $('.favourite-btn[ad-id="' + listingId + '"], .similar-listing-heart[data-listing-id="' + listingId + '"]');
    }

    function setFavouriteState(listingId, isFavourite) {
        favouriteElements(listingId).each(function () {
            var $element = $(this);
            var $icon = $element.hasClass('fa') ? $element : $element.find('i');

            $element.toggleClass('favorited', isFavourite);
            $element.attr('is-favourite', isFavourite ? '1' : '0');
            $icon.toggleClass('fa-heart', isFavourite).toggleClass('fa-heart-o', !isFavourite);

            if ($element.hasClass('heart-icon')) {
                $icon.css('color', isFavourite ? '#ff3131' : '#fff');
            }
        });
    }

    function updateFavouriteBadge(count) {
        var $badge = $('#favoritesDropdown .badge-premium-green');

        if (count > 0) {
            var displayCount = count > 99 ? '99' : count;

            if ($badge.length) {
                $badge.text(displayCount);
            } else {
                $('#favoritesDropdown').append('<span class="badge-premium-green">' + displayCount + '</span>');
            }
        } else {
            $badge.remove();
        }
    }

    function broadcastFavouriteState(listingId, isFavourite, count) {
        if (favouriteChannel) {
            favouriteChannel.postMessage({
                listingId: listingId,
                isFavourite: isFavourite,
                count: count
            });
        }
    }

    if (favouriteChannel) {
        favouriteChannel.onmessage = function (event) {
            setFavouriteState(event.data.listingId, event.data.isFavourite);

            if (typeof event.data.count !== 'undefined') {
                updateFavouriteBadge(event.data.count);
            }
        };
    }

    $(document).on('click.fastFavourite', '.favourite-btn, .similar-listing-heart', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        if (!checkIfUserLoggedIn()) {
            $('#loginModal').modal('show');
            return;
        }

        var $element = $(this);
        var $icon = $element.hasClass('fa') ? $element : $element.find('i');
        var listingId = $element.attr('ad-id') || $element.data('listing-id');

        if (!listingId || pendingFavourites[listingId]) {
            return;
        }

        var wasFavourite = $icon.hasClass('fa-heart') || $element.hasClass('favorited');
        var optimisticState = !wasFavourite;

        pendingFavourites[listingId] = true;
        setFavouriteState(listingId, optimisticState);
        broadcastFavouriteState(listingId, optimisticState);

        $.ajax({
            url: '/ad/favorite',
            type: 'POST',
            data: {
                listing_id: listingId,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.status) {
                    setFavouriteState(listingId, response.fav_status === 'added');
                    updateFavouriteBadge(response.fav_count);
                    broadcastFavouriteState(listingId, response.fav_status === 'added', response.fav_count);
                } else {
                    setFavouriteState(listingId, wasFavourite);
                    broadcastFavouriteState(listingId, wasFavourite);
                    alert(response.message);
                }
            },
            error: function () {
                setFavouriteState(listingId, wasFavourite);
                broadcastFavouriteState(listingId, wasFavourite);
                alert('Something went wrong. Please try again.');
            },
            complete: function () {
                delete pendingFavourites[listingId];
            }
        });
    });
})(jQuery);
