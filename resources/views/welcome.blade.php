@extends('layouts.footer')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Sticky Navbar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            font-family: "Helvetica Neue", sans-serif;
            font-weight: lighter;
        }

        header {
            width: 100%;
            height: 70vh;
            background: url(https://lonelyplanetimages.imgix.net/a/g/hi/t/4325bdf24da8cb3d129a26d3a77ecba2-amman.jpg?sharp=10&vib=20&w=1200) no-repeat 25% 25%;
            background-size: cover;
        }

        .content {
            width: 94%;
            margin: 4em auto;
            font-size: 20px;
            line-height: 30px;
            text-align: justify;
        }

        .logo {
            line-height: 60px;
            position: fixed;
            float: left;
            margin: 16px 46px;
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 2px;
        }

        nav {
            position: fixed;
            width: 100%;
            line-height: 60px;
        }

        nav ul {
            line-height: 60px;
            list-style: none;
            background: rgba(0, 0, 0, 0);
            overflow: hidden;
            color: #fff;
            padding: 0;
            text-align: right;
            margin: 0;
            padding-right: 40px;
            transition: 1s;
        }

        nav.black ul {
            background: #000;
        }

        nav ul li {
            display: inline-block;
            padding: 16px 40px;;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }

        .menu-icon {
            line-height: 60px;
            width: 100%;
            background: #000;
            text-align: right;
            box-sizing: border-box;
            padding: 15px 24px;
            cursor: pointer;
            color: #fff;
            display: none;
        }

        @media (max-width: 786px) {

            .logo {
                position: fixed;
                top: 0;
                margin-top: 16px;
            }

            nav ul {
                max-height: 0px;
                background: #000;
            }

            nav.black ul {
                background: #000;
            }

            .showing {
                max-height: 34em;
            }

            nav ul li {
                box-sizing: border-box;
                width: 100%;
                padding: 24px;
                text-align: center;
            }

            .menu-icon {
                display: block;
            }

        }


    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                Local Guide

            </div>
            <div class="menu">
                <ul>
                    @Auth
                        <li><a href="{{ url('/Userinfo') }}">Profile</a></li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    @else

                        {{--                            can add router--}}

                        {{--                            <li><a href="/place/{place_id}">{{ __('place') }}</a></li>--}}
                        {{--to here --}}
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                        <a> {{ Auth::user()->name }} <span class="caret"></span></a>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <div class="content">
        <p>
            Local Guides is a global community of explorers who write reviews, share photos, answer questions, add or
            edit places, and check facts on Google Maps. Millions of people rely on contributions like yours to decide
            where to go and what to do. </p>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>
@section('footer')
</body>
</html>
@endsection
