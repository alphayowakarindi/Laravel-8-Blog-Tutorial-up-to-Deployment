@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>Benefits of Covid Vaccination</h1>

        <p class="time-and-author">
          2 hours ago
          <span>Written By Alphayo Wakarindi</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/pic1.jpg')}}" alt="" />
        </div>

        <div class="about-text">
          <p>
            Vaccination is the most
            effective way to protect against infectious diseases. Vaccines
            strengthen your immune system by training it to recognise and
            fight against specific viruses. When you get vaccinated, you are
            protecting yourself and helping to protect the whole community.
            <br><br>
            A COVID-19 vaccine might:
          <ul>
            <li> Prevent you from getting COVID-19 or from
              becoming seriously ill or dying due to COVID-19 </li>
            <li>Prevent you from
              spreading the COVID-19 virus to others </li>
            <li> Add to the number of people
              in the community who are protected from getting COVID-19 — making
              it harder for the disease to spread and contributing to herd
              immunity </li>
            <li> Prevent the COVID-19 virus from spreading and
              replicating, which allows it to mutate and possibly become more
              resistant to vaccines</li>
          </ul>
          </p>
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