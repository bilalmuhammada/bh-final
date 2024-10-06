@extends('listing-layout.master')

<style>
    .categoryname:hover{
        color: blue;
        animation: shake 0.5s ease-in-out;
    }

    @keyframes shake {
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
            <div class="mx-auto">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($categories as $category)
                        <!----cat start------>
                        <div class="col-md-3 " style="margin-bottom:50px;" >
                            <a href="{{env('BASE_URL') . 'listing/select-subcategory/' . $category->id}}" class="text-dark">
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
    </div>
@endsection
