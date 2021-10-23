<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Alphayo Blog</title>
    <!-- Css -->
    {{-- <link rel="stylesheet" href="style.css" /> --}}

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    @yield('head')

    {{-- Tailwind CDN --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css"> --}}

    {{-- Bootstrap --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"></head> --}}

<body>
    <div id="wrapper">
        <!-- header -->
        @yield('header')

        <!-- sidebar -->
        <div class="sidebar">
            <span class="closeButton">&times;</span>
            <p class="brand-title"><a href="">Alphayo Blog</a></p>

            <div class="side-links">
                <ul>
                    <li><a class="{{ Request::routeIs('welcome.index') ? 'active' : '' }}"
                            href="{{ route('welcome.index') }}">Home</a></li>
                    <li><a class="{{ Request::routeIs('blog.index') ? 'active' : '' }}"
                            href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a class="{{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li><a class="{{ Request::routeIs('contact.index') ? 'active' : '' }}"
                            href="{{ route('contact.index') }}">Contact</a></li>
                    @guest
                        <li><a class="{{ Request::routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                        </li>
                        <li><a class="{{ Request::routeIs('register') ? 'active' : '' }}"
                                href="{{ route('register') }}">Register</a></li>
                    @endguest

                    @auth
                        <li><a class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endauth
                </ul>
            </div>

            <!-- sidebar footer -->
            <footer class="sidebar-footer">
                <div>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>

                <small>&copy 2021 Alphayo Blog</small>
            </footer>
        </div>
        <!-- Menu Button -->
        <div class="menuButton">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!-- main -->
        @yield('main')

        <!-- Main footer -->
        <footer class="main-footer">
            <div>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            <small>&copy 2021 Alphayo Blog</small>
        </footer>
    </div>


    <!-- Click events to menu and close buttons using javaascript-->
    <script>
        document
            .querySelector(".menuButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "100%";
                document.querySelector(".sidebar").style.zIndex = "5";
            });

        document
            .querySelector(".closeButton")
            .addEventListener("click", function() {
                document.querySelector(".sidebar").style.width = "0";
            });
    </script>
    @yield('scripts')
</body>

</html>
