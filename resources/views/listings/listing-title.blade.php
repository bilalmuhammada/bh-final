@extends('listing-layout.master')
<style>
   .form-focus {
    height: 58px;
    position: relative;
}
.floating:focus{
        border: 1px solid blue !important;
    box-shadow: 0 0 0 .2rem rgb(255 255 255 / 25%) !important; 
    }

.form-focus .focus-label {
    font-size: 14px;
    font-weight: 400;
    pointer-events: none;
    /* border-color: #0071DC; */
    position: absolute;
    -webkit-transform: translate3d(0, 22px, 0) scale(1);
    -ms-transform: translate3d(0, 22px, 0) scale(1);
    -o-transform: translate3d(0, 22px, 0) scale(1);
    transform: translate3d(0, 22px, 0) scale(1);
    transform-origin: left top;
    transition: 240ms;
    left: 12px;
    top: -6px;
    z-index: 1;
    color: #000;
    margin-bottom: 0;
}

.form-focus.focused .focus-label {
    opacity: 1;
    top: -18px;
    font-size: 12px;
    z-index: 1;
}

.form-focus .form-control:focus~.focus-label,
.form-focus .form-control:-webkit-autofill~.focus-label {
    opacity: 1;
    font-weight: 400;
    top: -18px;
    font-size: 12px;
    z-index: 1;
}

.form-focus .form-control {
    height: 51px;
    padding: 21px 12px 6px;
/* border: 1px solid #2d11e7;
    box-shadow: 1px 1px 1px 1px #eee; */
}

.form-focus .form-control::-webkit-input-placeholder {
    color: transparent;
    transition: 240ms;
}

.form-focus .form-control:focus::-webkit-input-placeholder {
    transition: none;
}

.form-focus.focused .form-control::-webkit-input-placeholder {
    /* color: blue; */
}

.form-focus.select-focus .focus-label {
    opacity: 1;
    font-weight: 300;
    top: -20px;
    font-size: 12px;
    z-index: 1;
}

.form-focus .select2-container .select2-selection--single {
    border: 1px solid #e3e3e3;
    height: 50px;
}

.form-focus .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 48px;
    right: 7px;
}

.form-focus .select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #ccc transparent transparent;
    border-style: solid;
    border-width: 6px 6px 0;
    height: 0;
    left: 50%;
    margin-left: -10px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.form-focus .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #ccc;
    border-width: 0 6px 6px;
}

.form-focus .select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 30px;
    padding-left: 12px;
    padding-top: 10px;
}

.form-focus .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #676767;
    font-size: 14px;
    font-weight: normal;
    line-height: 38px;
}

.form-focus .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #fc6075;
}

.packages {
    margin: 20px 10px 60px 10px;
}

.packages .main-heading {
    padding: 20px;
}

.packages .main-heading .ul {
    /* padding: 10px; */
    margin: 0px auto;
}



</style>
@section('content')
    <form class="listing-title-form">
        <input name="category_id" type="hidden" value="{{$category_id}}">
        <input name="subcategory_id" type="hidden" value="{{$subcategory_id}}">
        <div class="col-md-4 mx-auto text-center">
            <h5 style="font-size: 25px;font-weight:bold; ">
                Enter a short title to describe your listing
            </h5>
            <p>Make your title informative and attractive</p>
        </div>
        <div class="col-md-4 mx-auto  " style="margin-top: 20px;">
           
            {{-- <div class="inputContainer">
                <input type="text" class="inputText" name="title" required>
                <span class="floating-label">e.g. Business for Sale</span>
            </div> --}}
        
            <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="title">
                <label class="focus-label">Business for Sale</label>
            </div>
        
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;text-align:center;">
            <a class="btn listing-title-form-submit">
                <b>Let's go!</b>
            </a>
        </div>
    </form>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        $(document).on('click', '.listing-title-form-submit', function (e) {
            e.preventDefault();
            var formData = new FormData($('.listing-title-form')[0]);

            $.ajax({
                url: api_url + 'listing/save-listing-title',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {

                        setTimeout(function () {
                            window.location.assign(`${base_url}listing/place-ad/${response.listing_id}`);
                        }, 600);

                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });

   
//      $(document).ready(function () {
//     if ($('.floating').length > 0) {
//         $('.floating').on('focus blur', function (e) {
//             $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
//         }).trigger('blur');
//     }
// });

    </script>

@endsection


