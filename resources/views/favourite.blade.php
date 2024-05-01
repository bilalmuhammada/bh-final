@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
    <div class="cont-w">
        <h3 style="font-weight: bold;">My Saved Searches</h3>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Business for Sale</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Business Ideas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Export & Import Trade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu4">Franchise Opportunities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu5">Investors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu6">Investors Required</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu7">Machinery & Supplies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu8">Shares for Sale</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="cont-w tab-pane active"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6 text-left">
                            <div class="search" style="width: 300px;">
                                <div class="row">
                                    <input type="text" placeholder="Find your saved Search" class="form-control"
                                           style="border: 1px solid #E0E1E3;border-radius:6px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;"><img src="{{ asset('images/info-grey.svg')}}" alt="imge"
                                                                width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.</span>
                        </div>
                    </div>
                </div>
                <!------------------single row----------->
                <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                    <div class="row">
                        <!----1---->
                        <div class="col-md-3" style="">
                            <div class="row">
                                <div style="padding:5px;">
                                    <div class="ad-show"
                                         style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                        <div class="img">
                                            <img src="{{ asset('images/div1.avif')}}" alt="img" height="150" width="220"
                                                 style="border-radius: 5px;">
                                        </div>
                                        <div><h5><a href="" style="font-size: 11px;font-weight:bold;color:#000;">BRAND
                                                    NEW 5 BEDROOM VILLA</a><br/><a href="" class="text-muted"
                                                                                   style="font-size: 11px;">Villa/House
                                                    for Rent / Residential Units for R</a></h5>
                                            <h4 style="font-size: 14px;font-weight:bold;">AED 180,000 <span
                                                    style="margin-left: 110px;"><i class="fa fa-trash"></i></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------->
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6 text-left">
                            <div class="search" style="width: 300px;">
                                <div class="row">
                                    <input type="text" placeholder="Find your saved Search" class="form-control"
                                           style="border: 1px solid #E0E1E3;border-radius:6px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;"><img src="{{ asset('images/info-grey.svg')}}" alt="imge"
                                                                width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.</span>
                        </div>
                    </div>
                </div>
                <!------------------single row----------->
                <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                    <div class="row">
                        <!----1---->
                        <div class="col-md-3" style="">
                            <div class="row">
                                <div style="padding:5px;">
                                    <div class="ad-show"
                                         style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                        <div class="img">
                                            <img src="{{ asset('images/div1.avif')}}" alt="img" height="150" width="220"
                                                 style="border-radius: 5px;">
                                        </div>
                                        <div><h5><a href="" style="font-size: 11px;font-weight:bold;color:#000;">BRAND
                                                    NEW 5 BEDROOM VILLA</a><br/><a href="" class="text-muted"
                                                                                   style="font-size: 11px;">Villa/House
                                                    for Rent / Residential Units for R</a></h5>
                                            <h4 style="font-size: 14px;font-weight:bold;">AED 180,000 <span
                                                    style="margin-left: 110px;"><i class="fa fa-trash"></i></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-------->
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu3" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu4" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
                <!----single row ended------>
            </div>
            <div id="menu5" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu6" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu7" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="menu8" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/empty-state2.svg')}}" height="300"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;"><h4>You have no favorites yet in Business
                            Ideas</h4></div>
                    <div style="text-align: center;font-weight:bold;"><h6>Use the favorite icon to save ads that you
                            want to check later</h6></div>
                    <div style="text-align: center;font-size:12px;" class="text-muted"><p>Access your favorites anytime
                            by clicking on the favorites button in the top nav bar</p></div>
                </div>
                <div class="col-md-12 mx-auto" style="width:600px;margin-top:10px;">
                    <h5 class="mx-auto" style="font-size: 16px;font-weight:bold;text-align:center;">Start Searching</h5>
                    <div class="row mx-auto">
                        <div class="mx-auto">
                            <div class="col-md-12">
                                <div class="row">
                                @foreach($categories as $category)
                                    <!----cat start------>
                                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"
                                               class="text-dark">
                                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                                    <h6 style="font-size: 13px;">{{$category->name}}</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <!----cat  end------>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----single row ended------>
            </div>
        </div>
    </div>

@endsection
