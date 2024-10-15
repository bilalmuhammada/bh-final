@extends('listing-layout.master')
<style>
    a:hover {
   
    text-decoration: none !important;
}
.fa-chevron-right{
color: goldenrod !important;
}

.fa-chevron-right:hover{
color: blue !important;
}
.text-muted:hover{
    color: blue !important;
}

a.text-dark1, a.text-dark1 {
    color: #121416 !important;
}
a.text-dark1:focus, a.text-dark1:hover ,.text-dark1:hover, .text-dark1:hover , .text-dark1:hover i{
        color: blue !important;
    }

   

</style>
@section('content')
    <div class="col-md-5 mx-auto text-center" >
        <h4 style="font-size: 1.55rem;font-weight:bold;">Choose the Category of your Business!</h4>
    </div>
    <div class="col-md-5 mx-auto  " style="padding-left: 4rem" >
        <ul style="list-style-type:none;margin: 0px;" class="text-dark1">
            <li style="width:350px;border-bottom:1px solid #eee;padding:2px;text-decoration: none;width:456px;"  class="text-dark1">
                <a href="{{env('BASE_URL') . 'listing/select-category'. ''}}" >...</a> >
                <b class="text-muted">{{ $category->name }}</b>
            </li>
        </ul>
        <ul style="list-style-type:none;" >
            @foreach($subcategories as $subcategory)
            <li style="width:350px;border-bottom:1px solid #eee;padding:5px;text-decoration: none;width:456px;"  class="text-dark1">
                <a href="{{env('BASE_URL') . 'listing/' . $category_id . '/listing-title/' . $subcategory->id}}" class="text-dark1">{{$subcategory->name}}
                    <i class="fa fa-chevron-right" style="float: right;text-decoration: none; "></i>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
