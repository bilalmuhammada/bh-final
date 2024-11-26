<head>
    <title>BusinessHub - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="robots" content="max-image-preview:large">
    <link rel="canonical" href="">
    <meta name="generator" content="All in One SEO Pro (AIOSEO) 4.2.8 ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!---tele links---->
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
    

<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap 4 (may be customized) CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css?v2022')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css?v2022')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">

    
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
   
    <!-- Lobibox -->
    <link rel="stylesheet" href="{{asset('asset/Lobibox/css/lobibox.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/chat.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('select2/css/select2.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="{{ asset('emojionearea-master/dist/emojionearea.min.css') }}">
    <script src="{{ asset('emojionearea-master/dist/emojionearea.min.js') }}"></script>
    
</head>

<script>
 jQuery.noConflict();
jQuery(document).ready(function($) {
   
    $('.emoji-trigger').emojioneArea({
                pickerPosition: "bottom",
                events: {
            keyup: function (editor, event) {
                checkInput();
                console.log('emoji');
            },
         
            keydown: function (editor, event) {
                checkInput();
                if (event.which == 13) {
                    console.log('enter');
                 
               
                    $('#msg-send-btn').click();  
                }
                
            },
            
            change: function (editor, event) {
                checkInput();
                console.log('emoji');
            },
            paste: function (editor, event) {
                checkInput();
                console.log('emoji');
            }
            
        }

            });
});
</script>

<style>




    .iti--separate-dial-code .iti__selected-flag {
        background-color: inherit !important;
    }

    .img-flag {
        /* width: auto; */
        width: 17px;
        height: 12px;
        margin-bottom: 2px;
    }

    .select2-selection__rendered {
        font-size: 16px !important;
        outline: none !important;
        border: none !important;
    }


    .select2-results__options li {
        background: none !important;
        /* background-color:transparent !important; */
        /* background-color: rgba(0, 0, 255, .3) !important; */
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
        border: 0px solid #eee !important;
    }
 .select2-container--default .select2-selection--single .select2-selection__rendered{
        text-align:center !important;
    }

    /* //scrollbar */
::-webkit-scrollbar {
  width: 6px !important;               /* width of the entire scrollbar */
}

::-webkit-scrollbar-track {
  background: none !important;        /* color of the tracking area */
}

::-webkit-scrollbar-thumb {
  background-color: #A17A4E !important;    /* color of the scroll thumb */
  border-radius: 20px !important;       /* roundness of the scroll thumb */
  border: 0px solid orange !important;  /* creates padding around scroll thumb */
}
.hidden-div a{
    color:#0000FF !important;
}
.hidden-div a:hover{
    color:#A17A4E !important;
    /* font-weight:bold; */
}
.external a{
    color:#000 !important;
    
}
.external a:hover{
    color:blue !important;
    /* font-weight:bold; */
}
</style>
