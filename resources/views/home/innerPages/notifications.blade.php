@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
    <div class="cont-w">
    <h1>Notifications</h1>
    </div>

@endsection