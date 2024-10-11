
<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 35px;margin-bottom: 10px;">
    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Business Model:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Trade License:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Premise:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Premise Size Sq.Ft:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>
    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Employees #:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Expected Sales:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Sales Frequency #:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Expected ROI %:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>
    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Contract Term:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b> Contract Length:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    

    


</div>
<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
<!---------->
<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
    <h4><b>Products & Services Offered</b></h4>
    <p style="font-size: 14px; margin-bottom: 7px;">{{ $ad->details->products_and_services_offered ?? '....' }} this is one line</p>
</div>

<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
    <h4><b>Description</b></h4>
    <p style="font-size: 14px;margin-bottom: 7px;">{{ $ad->description }} this is description</p>

</div>
<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">

