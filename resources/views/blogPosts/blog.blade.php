@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
        <h2 class="header-title">All Blog Posts</h2>
        @if (session('status'))
            <p
                style="color: #fff; width:100%;font-size:18px;font-weight:600;text-align:center;background:#5cb85c;padding:17px 0;margin-bottom:6px;">
                {{ session('status') }}</p>
        @endif
        <div class="searchbar">
            <form action="">
                <input type="text" placeholder="Search..." name="search" />

                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>

            </form>
        </div>
        <div class="categories">
            <ul>
                <li><a href="">Health</a></li>
                <li><a href="">Entertainment</a></li>
                <li><a href="">Sports</a></li>
                <li><a href="">Nature</a></li>
            </ul>
        </div>
        <section class="cards-blog latest-blog">
            @forelse($posts as $post)
                <div class="card-blog-content">
                    @auth
                        @if (auth()->user()->id === $post->user->id)
                            <div class="post-buttons">
                                <a href="{{ route('blog.edit', $post) }}">Edit</a>
                                <form action="{{ route('blog.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value=" Delete">
                                </form>
                            </div>
                        @endif
                    @endauth
                    <img src="{{ asset($post->imagePath) }}" alt="" />
                    <p>
                        {{ $post->created_at->diffForHumans() }}
                        <span>Written By {{ $post->user->name }}</span>
                    </p>
                    <h4>
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </h4>
                </div>
                @empty
                <p>Sorry, currently there is no blog post related to that search!</p>
            @endforelse

        </section>
        <!-- pagination -->

        {{-- <div class="pagination">
            
            <a href="">&laquo;</a>

            <a class="active" href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>

            <a href="">&raquo;</a>
        </div> --}}



        {{$posts->links('pagination::default')}}
        <br>
    @endsection
