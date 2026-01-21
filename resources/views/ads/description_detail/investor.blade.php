
<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 4px;">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Instrested Business Models :</b>
                <span style="margin-left: 2px;">{{ $ad->details->business_type ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Open to Invest :</b>
                <span style="margin-left: 15px;">{{ $ad->details->trade_licence_type ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Open for Partnership :</b>
                <span style="margin-left: 2px;">{{ $ad->details->established_year ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Partnership Plan :</b>
                <span style="margin-left: 15px;">{{ $ad->details->lease_term ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Communication Preferance :</b>
                <span style="margin-left: 2px;">{{ $ad->details->size_sqm ?? '....' }}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Mobile :</b>
                <span style="margin-left: 15px;">{{ $ad->details->no_of_employees ?? '....' }}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>WhatsApp :</b>
                <span style="margin-left: 2px;">{{ $ad->details->reason_for_sale ?? '....' }}</span></p>
        </div>
        
    </div>
</div>
<!---------->
