@extends('layout')

@section('main')
    <div class="categories-list">
        <h1>Categories List</h1>
           
       @foreach ($categories as $category )
       <div class="item">
        <p>{{$category->name}}</p>
        <div>
            <a href="">Edit</a>
        </div>
        <form action="" method="">
            <input type="submit" value="Delete">
        </form>
    </div>
       @endforeach
        <div class="index-categories">
            <a href="{{route('categories.create')}}">Create category<span>&#8594;</span></a>
        </div>
    </div>
@endsection
