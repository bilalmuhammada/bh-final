
<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 35px;margin-bottom: 10px;">
    <div class="row" style="margin-top:13px;">
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Instrested Business Models:</b>
                <span>{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6" >
            <p style="font-size: 14px;"><b>Open to Invest:</b>
                <span>{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Open for Partnership :</b>
                <span>{{ $ad->details->established_year ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Partnership Plan :</b>
                <span>{{ $ad->details->lease_term ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Communication Preferance:</b>
                <span>{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>Mobile:</b>
                <span>{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p style="font-size: 14px;"><b>WhatsApp:</b>
                <span>{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        
    </div>


</div>
<!---------->
<hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;">
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
