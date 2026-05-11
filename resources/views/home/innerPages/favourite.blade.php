@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
    <div class="cont-w">
  <h3 style="font-weight: bold;">My Saved Searches</h3>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" style="font-size:12px;">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#all-favs">All</a>
    </li>
    @foreach($categories as $category)
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#cat-{{ $category->id }}">{{ $category->name }}</a>
    </li>
    @endforeach
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <!-- All Favorites Tab -->
    <div id="all-favs" class="tab-pane active"><br>
        <div class="col-md-12">
            @if($favourites->flatten()->count() > 0)
                <div class="row">
                    @foreach($favourites->flatten() as $fav)
                        @include('home.innerPages.fav_card', ['fav' => $fav])
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <img src="{{ asset('images/empty-state2.svg') }}" height="200">
                    <h4 class="mt-4">You have no favorites yet</h4>
                    <p class="text-muted">Use the favorite icon to save ads that you want to check later</p>
                    <a href="{{ env('BASE_URL') . 'home' }}" class="btn btn-primary" style="background-color: #00aaff; border: none;">Start Searching</a>
                </div>
            @endif
        </div>
    </div>

    <!-- Category Tabs -->
    @foreach($categories as $category)
    <div id="cat-{{ $category->id }}" class="tab-pane fade"><br>
        <div class="col-md-12">
            @if(isset($favourites[$category->id]) && $favourites[$category->id]->count() > 0)
                <div class="row">
                    @foreach($favourites[$category->id] as $fav)
                        @include('home.innerPages.fav_card', ['fav' => $fav])
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <img src="{{ asset('images/empty-state2.svg') }}" height="200">
                    <h4 class="mt-4">No favorites in {{ $category->name }}</h4>
                    <p class="text-muted">Explore this category to find something you like</p>
                    <a href="{{ env('BASE_URL') . 'home' }}" class="btn btn-primary" style="background-color: #00aaff; border: none;">Explore Category</a>
                </div>
            @endif
        </div>
    </div>
    @endforeach
  </div>
</div>

<script>
    $(document).on('click', '.remove-fav', function(e) {
        e.preventDefault();
        var $this = $(this);
        var listingId = $this.data('listing-id');
        
        if (confirm('Are you sure you want to remove this from favorites?')) {
            $.ajax({
                url: '/ad/favorite',
                type: 'POST',
                data: {
                    listing_id: listingId,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status && response.fav_status === 'removed') {
                        // Remove the card from all places it appears
                        $('.fav-card-' + listingId).fadeOut(function() {
                            $(this).remove();
                            // If no more cards in a tab, show empty state (optional refinement)
                        });
                        
                        // Update favorite count in topbar
                        var $badge = $('#favoritesDropdown .badge-premium-green');
                        if (response.fav_count > 0) {
                            $badge.text(response.fav_count);
                        } else {
                            $badge.remove();
                        }
                    }
                }
            });
        }
    });
</script>

  @endsection  