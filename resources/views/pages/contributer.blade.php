@extends('layouts.frontend.app')

@section('head')
    <style>
        .body {
            margin: 0;
            padding: 0;
            width: 100%;
            font-family: 'Lato', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1000px;
            width: 100%;
            padding: 20px;
        }


        .section {
            width: 100%;
            text-align: center;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            flex-basis: 300px;
            height: 440px;
            background: #fff;
            border: 2px solid #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.6);
            cursor: pointer;
            transition: all 0.5s cubic-bezier(.8, .5, .2, 1.4);
            overflow: hidden;
            position: relative;
            border-radius: 10px;
            transform: scale(1);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s cubic-bezier(.8, .5, .2, 1.4);
        }

        .descriptions {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            height: 100%;
            transition: all 0.7s ease-in-out;
            padding: 20px;
            box-sizing: border-box;
            clip-path: circle(0% at 0% 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card:hover .descriptions {
            clip-path: circle(75%);
        }

        .card:hover {
            transform: scale(0.97);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.6);
        }

        .card:hover img {
            transform: scale(1.6) rotate(20deg);
            filter: blur(3px);
        }

        .divider {
            width: 100%;
            height: 2px;
            background-color: #000000;
            margin: 40px 0;
        }

        .social-icons {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            font-size: 24px;
            color: #333;
            transition: transform 0.5s cubic-bezier(.8, .5, .2, 1.4), color 0.5s cubic-bezier(.8, .5, .2, 1.4);
        }

        .card:hover .social-icons a {
            transform: scale(1.3);
            color: #0077b5;
        }

        .corner-social-icons {
            position: absolute;
            bottom: 15px;
            left: 15px;
            display: flex;
            gap: 10px;
            z-index: 2;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s cubic-bezier(.8, .5, .2, 1.4);
            transition-delay: 0.2s;
        }

        .corner-social-icons a {
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .corner-social-icons a:hover {
            background-color: rgba(0, 119, 181, 0.9);
            transform: scale(1.2);
        }

        .card:hover .corner-social-icons {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .cards {
                flex-direction: column;
                align-items: center;
            }

            h2 {
                font-size: 3rem;
            }
        }
    </style>
@endsection

@section('content')
    <section class="">
        <div class="body !font-sans ">
            <div class="wrapper">
                <div class="section">
                    <h2 class="mb-8 text-5xl">Developers</h2>
                    <div class="cards">
                        <div class="card">
                            <img src="{{ asset('images/contributer/kamal.jpg') }}" alt="Kamal Joshi">
                            <div class="corner-social-icons">
                                <a href="https://www.facebook.com/profile.php?id=100015047167786" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/Paracetamol77" target="_blank"><i class="fab fa-github"></i></a>
                            </div>
                            <div class="descriptions">
                                <h3 class="text-xl font-semibold">Kamal Joshi</h3>
                                <p>Fullstack Developer</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/contributer/robin.jpeg') }}" alt="Robin Maharjan">
                            <div class="corner-social-icons">
                                <a href="https://www.instagram.com/robin.mahz/" target="_blank"
                                    class="text-white transition-all duration-300 delay-100 transform rounded-full bg-white/10 backdrop-blur-sm hover:bg-gradient-to-tr from-yellow-500 via-pink-600 to-purple-700 hover:text-white group-hover:translate-x-0 group-hover:delay-200">
                                    <i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/robin-maharjan-57947a283/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/robinmahz" target="_blank"
                                    class="text-white transition-all duration-300 transform rounded-full bg-white/10 backdrop-blur-sm hover:bg-gray-800 ">
                                    <i class="fab fa-github"></i></a>
                            </div>
                            <div class="descriptions">
                                <h3 class="text-xl font-semibold">Robin Maharjan</h3>
                                <p>Fullstack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="section ">
                    <h2 class="mb-8 text-5xl">Contributors</h2>
                    <div class="cards">
                        <div class="card">
                            <img src="{{ asset('images/contributor1.jpg') }}" alt="Alex Brown">
                            <div class="corner-social-icons">
                                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                            </div>
                            <div class="descriptions">
                                <h3 class="text-xl font-semibold">Alex Brown</h3>
                                {{-- <p>UI/UX Designer</p> --}}
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/contributor2.jpg') }}" alt="Emma Wilson">
                            <div class="corner-social-icons">
                                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                            </div>
                            <div class="descriptions">
                                <h3 class="text-xl font-semibold">Emma Wilson</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
