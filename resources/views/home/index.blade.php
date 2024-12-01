<!DOCTYPE html>
<html lang="en">
<head>
    <title>BusinessHub - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="robots" content="max-image-preview:large">
    <link rel="canonical" href="">
    <meta name="generator" content="All in One SEO Pro (AIOSEO) 4.2.8 ">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css?v2022')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css?v2022')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('select2/css/select2.min.css')}}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    
</head>
<style>
    .hero-image {
        background: url({{asset('images/hero-image-desktop.png')}}) no-repeat center;
        background-size: cover;
        min-height: 250px;
        position: relative;
    }
    .select2-container--default .select2-selection--single{
      border: 0px solid transparent;
    }
    .hero-text {
        text-align: center;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #F5BD02;
        font-weight:bold;
    }
   
    .hero-text .main {
        font-size: 25px;
    }
    .select2-search__field{
        padding-left: 8px !important;
    }

    .btc {
        background: #fff;
        height: 100px;
        border: 1px solid #EEE;
        border-radius: 6px;
        color: #2B2D2E;
        display: -ms-flexbox;
        -js-display: flex;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .divs {
        border: 1px solid #eee;
        padding: 20px;
        margin: 20px;
        width: 100%;
        background-color: #fff;
        border-radius: 10px;
    }

    .divs:hover {
        border: 1px solid #0000FF;
    }

    .divz {
        border: 1px solid #eee;
        padding: 10px;
        margin: 5px;
        width: 100%;
        background-color: #fff;
        border-radius: 10px;

    }

    .divz:hover {
        border: 1px solid #0000FF;

    }

    .mt-15 {
        margin-top: 15px;
    }

    .select2-selection__arrow {
    display: block !important;  /* Force the arrow to display */
}
    .country-divs {
        /* width: 60%; */
        width: 70%;
        position: relative;
        top: 10px;
        margin-bottom: 10px;
    }
    .select2-container--default .select2-results>.select2-results__options {
        max-height: 178px;
    }

    .mb-50 {
        margin-bottom: 50px;
    }

    .zin {
        margin: 0px auto;
        width: 80%;
        font-size: 15px;
        line-height: 30px;
    }

    .profile-button {
        color: #000;
    }

    .cf {
        color: #0000FF !important;
        font-size: 15px !important;
    }

    .cf:hover {
        color: #F5BD02 !important;
        font-size: 16px !important;
        font-weight: bold;
    }

    .main-div {
        padding: 20px 40px;
        margin: 4px;
        width:100%;
        text-align: center;
        background: rgb(241, 227, 164, .7);
        border-radius: 6px;
    }

    .main-div-mobile {
        background: rgb(241, 227, 164, .7);
    }

    .main-div:hover {
        border: 1px solid #0000FF;
    }
a{
    width:150px;
}
    .main-div a .spans {
        /* color:#A17A4E; */
        color: #0000FF;
    }

    .main-div .spans {

        margin-left: -5px;
        margin-top: -10px;
        font-weight: bold;
        text-align:center;
        color: #0000FF;
        font-size: 18px !important;
        /* color: white; */
        font-family: "Times New Roman", Times, serif;
        position: relative;
        top: -5px;
    }

    .spacer {
        /* border:1px solid red; */
        padding: 0px 8px;
    }

    .dropdown-item {
        /* font-size: 17px !important; */
        background: rgba(0, 0, 255, .1) !important;
        color: #FFF !important;
    }

    .img-flag {
        /* width: auto; */
        width:17px;
        height: 12px;
        margin-bottom: 7px;
    }
/* start */
.select2-search__field{
    border-color: #997045 !important;
        }
        .select2-search__field:hover{
    border-color: blue !important;
        }
        .select2-results__option {
            padding: 6px !important;
        }

    /* .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable { */
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #fff !important;
        color: blue !important;
        font-size: 14px;
        font-weight: bold;
    /* } */
    }
    .select2-container--default .select2-results__option--selected {
        background-color: #fff !important;
    }
 

   
    .countrylist {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }

   .countrylist:hover{
        /* color: blue; */
        animation: shake 1.5s linear infinite;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered{
        color: blue !important;
    }

    @keyframes shake {
  0% { transform: translateX(0); }
  25% { transform: translateX(-5px); }
  50% { transform: translateX(5px); }
  75% { transform: translateX(-5px); }
  100% { transform: translateX(0); }
}
    .select2-results__options{
        margin-right: 0px;
    font-size: 14px !important;
    font-weight: bolder !important;
        padding: 6px !important;
    }
    .select2-dropdown{
        border: 1px solid transparent !important;
        background-color: #fff;
        color: #000 !important;
    }
    /* end */
    .select2-selection__rendered{
        padding-left: 12px !important;
        font-size:14px !important;
        outline:none !important;
        border:none !important;
    }
    .select2-results__option{
        /* font-size:18px !important; */
        font-weight: bold;
        /* background-color:rgba(0, 0, 255, .3) !important; */
    }
    .aaaa{
        background:none !important;
        /* background-color:transparent !important; */
        background-color:rgba(0, 0, 255, .3) !important;
    }
    .flag2{
        margin-left: -8px;
        width:40px;
       height:25px;
    }
    
    /* //scrollbar */
    ::-webkit-scrollbar {
  width: 6px !important;               /* width of the entire scrollbar */
}

::-webkit-scrollbar-track {
  background: none !important;        /* color of the tracking area */
}

::-webkit-scrollbar-thumb {
  background-color: #997045 !important;    /* color of the scroll thumb */
  border-radius: 20px !important;       /* roundness of the scroll thumb */
  border: 0px solid orange !important;  /* creates padding around scroll thumb */
}
</style>
@php
$countries = \App\Helpers\RecordHelper::getCountries();
@endphp
<body style="overflow-x: hidden;">
<div class="container" >
    <div class="row">
  
        <div class="col-md-3" style="margin-left: 3.5rem;">
                    <span style="">
                         <!-- country bar mobile start -->
                <div class="mobile-country desktop-menu-right" style="margin-top:16px !important;">
                <select class="form-control country_dropdown" name="country_dropdown" id="" style="width:150px;">
                <option value="" selected>All Countries</option>
                
                    @foreach($countries as $country)
                    <option data-flag-url="{{ $country->image_url }}" data-country-id="{{ $country->id }}" value="{{ $country->id }}">&nbsp;{{ $country->name }}</option>
                @endforeach
               </select>
                        </div>
                        <!-- country bar mobile finish -->
                    </span>
        </div>
        <div class="col-md-4" style="padding:0px 0px 0px 50px;">
            <div class="logo text-center">
                <a href="{{env('BASE_URL')}}">
                    <img src="{{asset('images/businesshub-slogan.png')}}" title="businesshub " alt="businesshub" width="200"/>
                </a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
</div>
<!-----hero section-------->
<div class="hero-image mobile-view">
    <div class="hero-text">
        <p>Welcome to Only-Businesses Focused Worldwide Platform!</p>

        <p class="text-center" style="font-size:14px;margin-top:10px;">Explore our Countries!</p>
    </div>
</div>
<!-- slider start -->
<section>
    <div class="container-fluid slider-area desktop-view">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider-images/1.jpeg')}}" alt="Los Angeles" width="100%" height="450px">
                    <div class="hero-text">
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">
                        Explore our Countries!
                        </p>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image1.jpg')}}" alt="Chicago" width="100%" height="auto">
                    <div class="hero-text">
                        <p class="main">Welcome to the World's #1 <br/>online business website!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Which country would you like
                            to explore?</p>
                    </div>
                </div> -->
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/2.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text" >
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image4.jpg')}}" alt="New York" width="100%" height="auto">
                    <div class="hero-text">
                        <p class="main">Welcome to the World's #1 <br/>online business website!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Which country would you like
                            to explore?</p>
                    </div>
                </div> -->
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/3.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text">
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image 6.jpg')}}" alt="New York" width="100%" height="auto">
                    <div class="hero-text">
                        <p class="main">Welcome to the World's #1 <br/>online business website!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Which country would you like
                            to explore?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image 7.jpg')}}" alt="New York" width="100%" height="auto">
                    <div class="hero-text">
                        <p class="main">Welcome to the World's #1 <br/>online business website!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Which country would you like
                            to explore?</p>
                    </div>
                </div> -->
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/4.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text">
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/5.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text" >
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/6.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text" >
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/7.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text" >
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/8.jpeg')}}" alt="New York" width="100%" height="450px">
                    <div class="hero-text" >
                        <p class="main">Welcome to Only-Businesses Focused Worldwide Platform!</p>
                        <p class="text-center" style="font-size:20px;margin-top:30px;">Explore our Countries!</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- slider finish -->
<!----hero section end--------->
<!-- searchbar area mobile start -->
<section class="desktop-view">
    <div class="container country-divs">
        <div class="row justify-content-md-center">
            <div class="col-lg-12" style="margin-top: 12px;">
              <div class="row">
              @foreach($countries->take(20) as $country)
                <div class="col-md-2" style="margin:10px 15px;">
                    <div class="row">


              <a class="mx-auto" href="{{env('BASE_URL') . 'home?country=' . $country->id}}" style="border:0px solid red;">
                <div class="col-md-12 main-div countrylist" class="main-div" style="border:0px solid red;">
                        <span>
                            <img src="{{asset('images/businesshub.png')}}" alt="businesshub" title="businesshub" width="60px">
                        </span>
                        <br/>
                        @php
                        // dd($country->image_url);
                        @endphp
                        <span class="spans">{{ $country->name}}</span>
                        <div>
                            <img src="{{ $country->image_url }} " alt="{{ $country->iso }}" title="{{ $country->name }}" class="flag2" width="40px">
                        </div>
                    </div>
                    </a>
                 </div>
               </div>
               @endforeach
            </div>

              </div>
            </div>
        </div>
</section>
<div>&nbsp;</div>
<!--  mobile-view start -->
<section class="mobile-view">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
            </div>
        </div>
        <div class="row">
        @foreach($countries as $country)
            <div class="col-lg-3 p-5px col-6  " style="border:0px solid #eee;">
            <a class="mx-auto" href="{{env('BASE_URL') . 'home'}}">
                <div class="col mx-auto main-div">
           <span>
            <img src="{{asset('images/businesshub.png')}}" alt="businesshub" title="businesshub" width="70px">
            </span></br>
            <span class="spans">{{ explode(' ', $country->name)[0] }}</span>
                    <div>
                    <img src="{{ $country->image_url }} " alt="{{ $country->iso }}" title="{{ $country->iso }}" class="flag2" width="40px">
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- mobile-view finish  -->
@php
    $categories = \App\Helpers\RecordHelper::getCategories();
@endphp

<div class="container">
    <h4 class="text-center desktop-view" style="color:goldenrod;font-weight:bold;">
    <b>Join Millions of Users to Buy & Sell Businesses Worldwide!
    </b>
    </h4>
    <h4 class="text-center mb-50 mobile-view">
        <b>Join Millions of Users to Buy & Sell Businesses Worldwide!</b>
    </h4>
    <div class="col-md-12" style="margin: 20px 0px 0px 32px !important;">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-3 col-md-6 mb-30 col-12 ">
                    <div class="subcategory-list">
                        <b>{{$category->name}}</b>
                        <br>
                        @foreach($category->sub_categories->take(5) as $key=>$sub_category)
                            <a link="{{env('BASE_URL') . 'ads/' . $sub_category->id}}" class="cf subcategory-name">{{$sub_category->name}}</a>
                            <br>
                        @endforeach
                    </div>
                </div>
                <!-- footer area 4 finish -->
            @endforeach
        </div>
    </div>
</div>


</body>
<!-- footer area start -->
<footer>
    <div class="container" style="margin-top: 2rem;">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="logo text-center">
                    <a href="{{env('BASE_URL')}}">
                        <img src="{{asset('images/businesshub.png')}}" title="businesshub" alt="businesshub "
                             width="150 "/>
                    </a>
                </div>
            </div>
        </div>
        <!-- footer copyright area start -->
        <div class="row copyright ">
            <div class="col-lg-12 ">
                <p style="color:#00498e;text-align:center; font-size:12px; margin-top: -10px;">© BusinessHub.com 2024, All Rights Reserved.</p>
            </div>
        </div>
        <!-- footer copyright area finish -->
    </div>
    <!------------>
</footer>
<!-- footer area finish -->
<div class="modal " id="myModal ">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-16by9 ">
                <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/x0ZL-ApVya0 "
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('js/jquery.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{asset('js/bootstrap.js')}}"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js " type="text/javascript "></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js "></script>
<script src="{{asset('slick/slick.js?v2022')}}" type="text/javascript " charset="utf-8 "></script>
<script src="{{asset('select2/js/select2.min.js')}}" type="text/javascript " charset="utf-8 "></script>
<script type="text/javascript ">
    var base_url = "{{ env('BASE_URL') }}";
    $(document).ready(function () {
        function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }

            var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute
            if (!flagUrl) {
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px; height:13px;margin-top:0px; display:none;" />' + 
        '<span style="font-size:14px; margin-left: 3px;">' + country.text + '</span>'
    );// Optional default image
    }else{
            var $country = $(
                '<img src="' + flagUrl + '" class="img-flag" / style="width:20px;height:13px;margin-top:0px;"> <span  style="font-size:14px; margin-left: 0px;">' + country.text + '</span>'
            );
            return $country;
        };
      };

        $(document).on('change', '.country_dropdown', function () {
            var country_id = $(this).data('country-id');
            var $country = $(
                '<a href="' + base_url + 'home?country=' + country_id + '" style="color:inherit;"><span class="spanz"><img src="' + flagUrl + '" class="img-flag" /> ' + country.text + '</span></a>'
            );


        });


        $(".country_dropdown").select2({
           
           
            templateSelection: formatCountry,
            templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });



        $(".country_dropdown1").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
           
        });
        $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
           
        });
        $(".langauge_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
           
        });
        
    });

    $(document).on('click', '.subcategory-name', function (e) {
        e.preventDefault();
        var link = $(this).attr('link');
        window.location.assign(link + "?country=" + $('.country_dropdown').val());
    });
</script>
<script type="text/javascript ">
    $(document).on('ready', function () {

        $(".regular ").slick({
            // dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            variableWidth: true
        });
        $(".regular-1 ").slick({
            // dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            variableWidth: true
        });
        $(".blog-home ").slick({
            // dots: true,
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true
        });

        $(".buy ").slick({
            // dots: true,
            infinite: true,

            variableWidth: true
        });

    });
</script>
<script type="text/javascript ">
    $(document).ready(function () {
        $('#showmenu').click(function () {
            $('.menu').slideToggle("fast ");
        });
        $('#showmenu1').click(function () {
            $('.menu1').slideToggle("fast ");
        });
        $('#showmenu2').click(function () {
            $('.menu2').slideToggle("fast ");
        });
        $('#showmenu3').click(function () {
            $('.menu3').slideToggle("fast ");
        });
        $('#showmenu4').click(function () {
            $('.menu4').slideToggle("fast ");
        });
        $('#showmenu5').click(function () {
            $('.menu5').slideToggle("fast ");
        });
        $('#showmenu6').click(function () {
            $('.menu6').slideToggle("fast ");
        });
        $('#showmenu7').click(function () {
            $('.menu7').slideToggle("fast ");
        });
        $('#showmenu8').click(function () {
            $('.menu8').slideToggle("fast ");
        });
        $('#showmenu9').click(function () {
            $('.menu9').slideToggle("fast ");
        });
        $('#showmenu10').click(function () {
            $('.menu10').slideToggle("fast ");
        });

    });
</script>
<script>
    $(function () {

        $(".progress ").each(function () {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progress-left .progress-bar');
            var right = $(this).find('.progress-right .progress-bar');

            if (value > 0) {
                if (value <= 55) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 55) + 'deg)')
                }
            }

        })

        function percentageToDegrees(percentage) {

            return percentage / 100 * 360

        }

    });
</script>

</html>
