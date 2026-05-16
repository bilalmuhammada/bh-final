
<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12"  style="margin-top: 4px;">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Business Model:</b>
                <span >{!! $ad->details->business_model ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Sales Revenue:</b>
                <span >{!! $ad->details->sales_revenue ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Trade Licence:</b>
                <span >{!! $ad->details->trade_licence_type ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Established Year:</b>
                <span >{!! $ad->details->established_year ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Branches:</b>
                <span >{!! $ad->details->branches ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Employees:</b>
                <span >{!! $ad->details->employees ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Status:</b>
                <span >{!! $ad->details->premise_status ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Size Sq.Ft:</b>
                <span >{!! $ad->details->size_sqm ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Lease Term:</b>
                <span >{!! $ad->details->lease_term ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Lease Amount:</b>
                <span >{!! $ad->details->least_amt ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Contract Period:</b>
                <span >{!! $ad->details->contract_period ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Expected ROI %:</b>
                <span >{!! $ad->details->expected_roi ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Posted by:</b>
                <span >{!! $ad->details->posted_by ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Reason for Investment:</b>
                <span >{!! $ad->details->reason_investment ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 0px;"><b>Website:</b>
                <span >
                    @if(!empty($ad->details->website))
                        <a href="{{ $ad->details->website }}" target="_blank" style="color: #c5a059;">Visit Site</a>
                    @else
                        <small style="font-size: 11px;">No</small>
                    @endif
                </span>
            </p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 0px;"><b>Instagram:</b>
                <span >
                    @if(!empty($ad->details->instagram))
                        <a href="{{ $ad->details->instagram }}" target="_blank" style="color: #c5a059;">View Profile</a>
                    @else
                        <small style="font-size: 11px;">No</small>
                    @endif
                </span>
            </p>
        </div>
    </div>
</div>
</div>
<!---------->

