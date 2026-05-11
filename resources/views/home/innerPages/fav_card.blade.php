<div class="col-md-3 mb-4 fav-card-{{ $fav->listing->id }}">
    <div class="ad-show" style="border: 1px solid #E0E1E3; padding: 10px; border-radius: 5px; background: #fff; height: 100%;">
        <div class="img mb-2" style="position: relative;">
            <img src="{{ $fav->listing->main_image_url ?? asset('images/div1.avif') }}" alt="img" height="150" width="100%" style="border-radius: 5px; object-fit: cover;">
            <span class="remove-fav" data-listing-id="{{ $fav->listing->id }}" style="position: absolute; top: 5px; right: 5px; background: rgba(255,255,255,0.8); width: 25px; height: 25px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #ff3131;">
                <i class="fa fa-trash"></i>
            </span>
        </div>
        <div>
            <h5>
                <a href="{{ env('BASE_URL') . 'ads/detail/' . $fav->listing->id }}" style="font-size: 13px; font-weight: bold; color: #000; text-decoration: none; display: block; height: 40px; overflow: hidden;">
                    {{ $fav->listing->title }}
                </a>
                <span class="text-muted" style="font-size: 11px;">
                    {{ $fav->listing->category->name ?? '' }} / {{ $fav->listing->subcategory_name ?? '' }}
                </span>
            </h5>
            <h4 style="font-size: 16px; font-weight: bold; color: #ff3131; margin-top: 10px;">
                {{ session('app_currency', 'USD') }} {{ \App\Helpers\SiteHelper::priceFormatter($fav->listing->price) }}
            </h4>
        </div>        
    </div>
</div>
