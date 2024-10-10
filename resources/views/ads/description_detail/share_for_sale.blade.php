<div class="col-lg-12 col-md-12 col-12" style="border-top: 1px solid #eee;border-bottom: 1px solid #eee;margin-top: 35px;margin-bottom: 10px;">
    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Business Model:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Share Percentage:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Sale Revenue:</b>
                <span>{{ $ad->details->established_year ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Trade Licence:</b>
                <span>{{ $ad->details->lease_term ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Established Year:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Branches#:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Employees #:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Premise Status:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Premise Size Sq.Ft #:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Lease Term:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Lease Amount:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Share Financing:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Lease Amount:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Share Financing:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Reason for Sale:</b>
                <span>{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Open for Partnership:</b>
                <span>{{ !empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO' }}</span>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Website:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Instagram:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>


</div>
<!---------->
<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;border-bottom: 1px solid #eee;">
    <h4><b>Products & Services Offered</b></h4>
    <p style="font-size: 14px; margin-bottom: 7px;">{{ $ad->details->products_and_services_offered ?? '....' }} this is one line</p>
</div>

<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;border-bottom: 1px solid #eee;">
    <h4><b>Description</b></h4>
    <p style="font-size: 14px;margin-bottom: 7px;">{{ $ad->description }} this is description</p>

</div>
<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;border-bottom: 1px solid #eee;">

