@extends('listing-layout.master')
@section('content')
    <div class="col-md-5 mx-auto text-center" >
        <h4 style="font-size: 24px;font-weight:bold;">Choose the Category of your Business!</h4>
    </div>
    <div class="col-md-5 mx-auto" >
        <ul style="list-style-type:none;">
            <li style="width:350px;border-bottom:1px solid #eee;padding:5px;text-decoration: none;width:450px;">
                <a href="{{env('BASE_URL') . 'listing/select-category'. ''}}" >...</a> >
                <b class="text-muted">{{ $category->name }}</b>
            </li>
        </ul>
        <ul style="list-style-type:none;font-size:14px;" >
            @foreach($subcategories as $subcategory)
            <li style="width:350px;border-bottom:1px solid #eee;padding:15px;text-decoration: none;width:450px;">
                <a href="{{env('BASE_URL') . 'listing/' . $category_id . '/listing-title/' . $subcategory->id}}" class="text-dark">{{$subcategory->name}}
                    <i class="fa fa-chevron-right" style="float: right;text-decoration: none;"></i>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
