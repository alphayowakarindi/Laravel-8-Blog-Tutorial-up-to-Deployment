@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>{{$post->title}}</h1>

        <p class="time-and-author">
          {{$post->created_at->diffForHumans()}}
          <span>Written By {{$post->user->name}}</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset($post->imagePath)}}" alt="" />
        </div>

        <div class="about-text">
         {!!$post->body!!}
        </div>
      </section>
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/pic5.jpg')}}" alt="" loading="lazy" />
              <h4>
                12 Health Benefits Of Pomegranate Fruit
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/pushups.jpg')}}" alt="" loading="lazy" />
              <h4>
                The Truth About Pushups
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="{{asset('images/smoothies.jpg')}}" alt="" loading="lazy" />
              <h4>
                Healthy Smoothies
              </h4>
            </div>
          </a>

        </div>
      </section>
    </main>
@endsection