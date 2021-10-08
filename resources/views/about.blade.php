@extends('layout')

@section('main')
  
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/photography.jpg')}}" alt="" />
        </div>

        <div>
          <p class="about-text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, ut
            tempore repellat molestias a distinctio fuga molestiae eaque
            laborum vero eos, maiores fugit culpa porro delectus aliquam
            adipisci nisi voluptas sequi odit, numquam architecto officia?
            Corrupti recusandae beatae sint quasi iste libero maiores commodi
            odio molestias vel fugit, omnis nobis consectetur harum veritatis
            necessitatibus asperiores officiis. Dolores nemo voluptates.
            <br /><br />
            Adipisicing elit. Illum reprehenderit sapiente at ab amet, nobis
            porro pariatur similique dicta nisi velit fugiat reiciendis, quos
            fuga nemo aliquam aspernatur est vel. Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Omnis non ad veritatis. Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor
            sit.
          </p>
        </div>
      </section>
    </main>
@endsection