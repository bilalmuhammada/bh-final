<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 5 CSS -->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('select2/css/select2.min.css')}}">

    <!-- Lobibox -->
    <link rel="stylesheet" href="{{asset('asset/Lobibox/css/lobibox.css')}}"/>
    {{--WAIT ME PLUGIN--}}
    <link rel="stylesheet" href="{{asset('waitme/waitMe.min.css')}}">
   <!-------checkout---->
   <link rel="stylesheet" href="{{ asset('css/checkout.css')}}"/>
   <link rel="stylesheet" href="{{ asset('css/chat.css')}}"/>

    <link rel="stylesheet" href="{{ asset('css/listings_form.css') }}">

    <title>Businesshub, Place an ad</title>
    <style>
        .blur-image {
    filter: blur(8px);
    -webkit-filter: blur(8px);
}
.btn-next a.btn {
        background: #A17A4E !important;
        color: #fff !important;
    }
    
    .btn-next a.btn:hover {
        background: #0000FF !important;
        color: #fff !important;
    }
    .form-control{
        border:1px solid #A17A4E !important;
    }
    .form-control:hover{
        border:1px solid #0000FF !important;
    }
    .input--file{
        border:1px solid #A17A4E !important;
    }
    .input--file:hover{
        border:1px solid #0000FF !important;
    }
    .remove-document{
    position: absolute;
    top: 5px;
    right: 45px;
    /* background-color: rgba(255, 255, 255, 0.8); */
    border-radius: 50%;
    padding: 4px;
    cursor: pointer;
    color: #e74c3c;
    /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
    font-size: 18px;
    }
    .btn-nexts a.btn {
        background: #A17A4E !important;
        color: #fff !important;
        padding:5px 60px ;
    }
    
    .btn-nexts a.btn:hover {
        background: #0000FF !important;
        color: #fff !important;
    }
    .listing-title-form-submit{
        background: #A17A4E !important;
        color: #fff !important;
        padding:5px 60px ;
    }
    .listing-title-form-submit:hover{
        background: #0000FF !important;
        color: #fff !important;
    }
    .img-thumbnail{
        padding: 0px !important;
    }
    .form-controlz{
            display: block;
            width: 100%;
            height: calc(2.4em + 0.75rem + 2px) !important;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            /* border: 1px solid #ced4da; */
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            border: 1px solid #A17A4E !important;
        }
        input:focus {
            outline: none !important;
    }
    textarea:focus {
            outline: none !important;
    }
    select{
        height :calc(1.9em + 0.75rem + 2px) !important;
    }
    select:focus {
            outline: none !important;
    }
        .form-controlz:focus{
            border:none !important;
            border: 1px solid #0000FF !important;
        }
        .select_ht{

        }
    </style>
</head>

