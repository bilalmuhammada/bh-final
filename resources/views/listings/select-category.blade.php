@extends('listing-layout.master')

<style>
    
    .color-change{
        color: black;

    }
    .color-change:hover{
        color: blue;
        text-decoration: none;

    }
    .shaking {
    display: inline-block;
    transition: transform 0.25s ease-in-out;
   }
 
  .categoryname:hover {
    animation: shakeIcon 0.5s infinite;
   }
    @keyframes shakeIcon {
  0% { transform: translateX(0); }
  25% { transform: translateX(-5px); }
  50% { transform: translateX(5px); }
  75% { transform: translateX(-5px); }
  100% { transform: translateX(0); }
}
</style>
@section('content')
    <div class="col-md-12 mx-auto" style="width:70rem;margin-top:100px;">
        <div class="row mx-auto">        
                <div class="col-md-12">
                    <div class="row">
                        @foreach($categories as $category)
                        <!----cat start------>
                        <div class="col-md-3 " style="margin-bottom:50px;" >
                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}"  class="color-change">
                                <div class="inner-div categoryname" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
                                    transition: background-color .3s;border-radius: 6px;height: 180px;width: 220px;padding-top:38px;">
                                    <img src="{{ $category->image_url }}" alt="" width="60">
                                    <h6 style="margin-top: 10px">{{$category->name}}</h6>
                                </div>
                            </a>
                        </div>
                        <!----cat  end------>
                        @endforeach
                    </div>
                </div> 
        </div>
    </div>
@endsection
