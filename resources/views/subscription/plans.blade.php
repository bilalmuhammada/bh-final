@extends('layout.master')
@section('content')

    <section style="padding-bottom:40px;">
        <div class="container">
            <h2 class="terms-h text-center">Subscription Plans</h2>
            <!------->
            <div class="col-md-12">
                <div class="row">
                    @foreach($plans as $plan)
                    <div class="col-md-4 mx-auto mt-1">
                        <div class="mx-auto"
                             style="border:2px solid #A17A4E;padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
                            <div class="mx-auto text-center p-2">
                                <span class="plan-h">{{ $plan->name }}</span>
                                <div class="mx-auto"
                                     style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
                                @if ($plan->rank == "standard")
                                    <h6 style="padding-top:10px;">{{ $plan->price_formatted }}</h6>
                                @else
                                    <h6 style="padding-top:10px;">{{ $plan->actual_price_formatted }} - {{ $plan->_price_formatted }} <b>(Save {{ $plan->discount_per }}%)</b></h6>
                                @endif
                                <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month
                                </div>
                            </div>
                            <hr>
                            <ul class="circle-check" style="list-style-type:none;height:200px;">
                                <li><i class="fa fa-check-circle"></i> Active: <b>{{ $plan->period }} days</b></li>
                                <li><i class="fa fa-check-circle"></i> Auto-Refresh: <b>{{ $plan->auto_refresh_times }} time</b></li>
                                <li><i class="fa fa-check-circle"></i> Images Upload: <b>{{ $plan->allowed_images }}</b></li>
{{--                                <li><i class="fa fa-check-circle"></i> Link: <b>Video URL</b></li>--}}
                                @if ($plan->rank == "standard")
                                    <li><i class="fa fa-times-circle text-danger"></i> Featured Days: <b>{{ $plan->featured_days }}</b></li>
                                    @else
                                    <li><i class="fa fa-check-circle"></i> Featured Days: <b>{{ $plan->featured_days }}</b></li>
                                @endif
                            </ul>
                            <div class="mx-auto" style="text-align:center;">
                                <a href="{{ env('BASE_URL') . "subscription/user-details?plan_id=" . $plan->id }}">
                                    <button class="btn bt-plan">SELECT PLAN</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-------->
        </div>
    </section>


@endsection
