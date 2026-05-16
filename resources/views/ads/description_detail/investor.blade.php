
<hr style="border-color: #eee; width: 97%; margin:0px 0px 0px 12px;">
<div class="col-lg-12 col-md-12 col-12" style="margin-top: 4px;">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-5" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Interested Business Models:</b>
                <span >{!! $ad->details->int_bus_mdl ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7" >
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Open to Invest:</b>
                <span >{!! $ad->details->open_to_invest ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Open for Partnership:</b>
                <span >{!! $ad->details->open_for_partnership ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Partnership Plan:</b>
                <span >{!! $ad->details->ptn_plan ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Communication Preference:</b>
                <span >{!! $ad->details->communication_pre ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
        <div class="col-lg-7 col-md-7 col-7">
            <p style="font-size: 14px; margin-bottom: 5px;"><b>Mobile:</b>
                <span >{!! $ad->details->phone ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-5">
            <p style="font-size: 14px; margin-bottom: 0px;"><b>WhatsApp:</b>
                <span >{!! $ad->details->whatsapp ?? '<small style="font-size: 11px;">No</small>' !!}</span></p>
        </div>
    </div>
</div>
</div>
<!---------->
