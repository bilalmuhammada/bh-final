<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 4px;" >
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Business Model:</b>
                <span >{!! $ad->details->business_modal ?? 'No' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Trade License:</b>
                <span >{!! $ad->details->trade_licence_type ?? 'No' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise:</b>
                <span >{!! $ad->details->premise_status ?? 'No' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Size Sq.Ft:</b>
                <span >{{ $formatted_number($ad->details->size_sqm ?? null) }}</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Employees:</b>
                <span >{{ $formatted_number($ad->details->no_of_employees ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Expected Sales:</b>
                <span >{{ $formatted_number($ad->details->expect_sale ?? null) }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Sales Frequency:</b>
                <span >{{ $formatted_number($ad->details->sale_freq ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Expected ROI %:</b>
                <span >{{ $formatted_number($ad->details->expect_roi ?? null) }}</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 0px;"><b>Contract Term:</b>
                <span >{{ $formatted_number($ad->details->contract_term ?? null) }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 0px;"><b> Contract Length:</b>
                <span >{{ $formatted_number($ad->details->contract_length ?? null) }}</span></p>
        </div>
    </div>
</div>
</div>
