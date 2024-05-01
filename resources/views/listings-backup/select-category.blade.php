@extends('listing-layout.master')
@section('content')
    <div class="col-md-12 mx-auto" style="width:1000px;margin-top:100px;">
        <div class="row mx-auto">
            <div class="mx-auto">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($categories as $category)
                        <!----cat start------>
                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}" class="text-dark">
                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                    <img src="{{ $category->image_url }}" alt="" width="40">
                                    <h6>{{$category->name}}</h6>
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
@endsection
