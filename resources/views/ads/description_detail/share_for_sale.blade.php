
<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 4px;">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Business Model:</b>
                <span >{!! $ad->details->business_modal ?? 'No' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Share Percentage:</b>
                <span >{{ $formatted_number($ad->details->share_amount ?? null) }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Sale Revenue:</b>
                <span >{{ $formatted_number($ad->details->sale_revenue ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Trade Licence:</b>
                <span >{!! $ad->details->trade_licence ?? 'No' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Established Year:</b>
                <span >{!! $ad->details->established_year ?? 'No' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Branches:</b>
                <span >{{ $formatted_number($ad->details->branches ?? null) }}</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Employees:</b>
                <span >{{ $formatted_number($ad->details->no_of_employees ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Status:</b>
                <span >{!! $ad->details->premise_status ?? 'No' !!}</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Size Sq.Ft:</b>
                <span >{{ $formatted_number($ad->details->size_sqm ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Lease Term:</b>
                <span >{{ $formatted_number($ad->details->lease_term ?? null) }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Lease Amount:</b>
                <span >{{ $formatted_number($ad->details->lease_amount ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Share Financing:</b>
                <span >{!! $ad->details->selling_fin ?? 'No' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Reason for Sale:</b>
                <span >{!! $ad->details->reason_sale ?? 'No' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Posted by:</b>
                <span >{!! $ad->details->posted_by ?? 'No' !!}</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 0px;"><b>Website:</b>
                <span >
                    @if(!empty($ad->details->website))
                        <a href="{{ $external_link_url($ad->details->website) }}" target="_blank" class="website-link">{{ $external_link_label($ad->details->website, 'Website') }}</a>
                    @else
                        NA
                    @endif
                </span>
            </p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 0px;"><b>Instagram:</b>
                <span >
                    @if(!empty($ad->details->instagram))
                        <a href="{{ $external_link_url($ad->details->instagram) }}" target="_blank" class="instagram-link">{{ $instagram_link_label($ad->details->instagram) }}</a>
                    @else
                        NA
                    @endif
                </span>
            </p>
        </div>
    </div>
</div>
</div>
