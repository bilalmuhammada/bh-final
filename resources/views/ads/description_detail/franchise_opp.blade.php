
<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12"  style="margin-top: 4px;">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Business Model :</b>
                <span style="margin-left: 2px;">{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Fee Term :</b>
                <span style="margin-left: 15px;">{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Trade Licence :</b>
                <span style="margin-left: 2px;">{{ $ad->details->established_year ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Established Year :</b>
                <span style="margin-left: 15px;">{{ $ad->details->lease_term ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Branches :</b>
                <span style="margin-left: 2px;">{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Employees :</b>
                <span style="margin-left: 15px;">{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Status :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Premise Size Sq.Ft :</b>
                <span style="margin-left: 15px;">{{ !empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO' }}</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Lease Term :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Contract Period :</b>
                <span style="margin-left: 15px;">{{ !empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO' }}</span>
            </p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Financing Term :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Posted by :</b>
                <span style="margin-left: 15px;">{{ !empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO' }}</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Reason for Franchising :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Website :</b>
                <span style="margin-left: 15px;">{{ !empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO' }}</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Instagram :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        
    </div>
</div>
<!---------->
