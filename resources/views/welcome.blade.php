@extends('layout')

@section('header')
    <!-- header -->
    <header class="header" style=" background-image: url({{asset("images/photography.jpg")}});">
      <div class="header-text">
        <h1>Alphayo Blog</h1>
        <h4>Dashboard of verified news...</h4>
      </div>
      <div class="overlay"></div>
    </header>
  
@endsection

@section('main')
    <!-- main -->
    <main class="container">
      <h2 class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img src="{{asset('images/pic1.jpg')}}" alt="" />
          <p>
            2 hours ago
            <span style="float: right">Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html"
              >Benefits of Getting Covid 19 Vaccination</a
            >
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="{{asset('images/pic2.jpg')}}" alt="" />
          <p>
            23 hours ago
            <span style="float: right">Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Top 10 Music Stories Never Told</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="{{asset('images/pic3.jpg')}}" alt="" />
          <p>
            2 days ago
            <span style="float: right">Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html"
              >WRC Safari Rally Back To Kenya After 19 Years</a
            >
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="{{asset('images/pic4.jpg')}}" alt="" />
          <p>
            3 days ago
            <span style="float: right">Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Premier League 2021/2022 Fixtures</a>
          </h4>
        </div>
      </section>
    </main>
@endsection