<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zamans' Corp</title>
    <link rel="shortcut icon" type="image"  href="{{ asset('images/title.png') }}">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <div class="main-container">
        <header>
            <nav>
                <a href="{{ route('home') }}" class="nav-h1">Zamans' <span>Corp</span></a>
                <ul id="nav-ul">
                    <li id="home">Home</li>
                    <li id="services">Services</li>
                    <li id="portfolio">PortFolio</li>
                    <li id="about">About</li>
                    <li id="contacts">Contacts</li>
                </ul>
                <svg id="ul-toggle" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                    fill="#ffffff">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M13 13v8h8v-8h-8zM3 21h8v-8H3v8zM3 3v8h8V3H3zm13.66-1.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65z" />
                </svg>
            </nav>
        </header>
        <div class="hero-img"></div>
        <section class="hero">
            <h2 class="hero-first-msg hide">Hello</h2>
            <h2 class="hero-second-msg hide">Welcome to <span class="name-first">Zamans' </span><span
                    class="name-second">Corp</span></h2>
            <a href="#" class="learn-more hide">
                Learn More<i class="fa-solid fa-chevron-down"></i>
            </a>
        </section>
        <section class="services">
            <h2>Services</h2>
            <div class="items">
                <div class="item">
                    <img src="{{ asset('images/web_app.jpg') }}" alt="web app">
                    <h3 class="title">Web Applications</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/responsive_design.jpg') }}" alt="web app">
                    <h3 class="title">Responsive Design</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/autocad_design.jpg') }}" alt="web app">
                    <h3 class="title">Autocad Drawing</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
            </div>
        </section>
        <section class="portfolio">
            <h2>Portfolio</h2>
            <div class="items">
                <div class="item">
                    <img src="{{ asset('images/portfolio.JPG') }}" alt="">
                    <h3>Hostel Management System</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quaerat.</p>
                </div>
                <div class="item">
                    <img src="{{ asset('images/portfolio_2.JPG') }}" alt="">
                    <h3>Shop Management System</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quaerat.</p>
                </div>
            </div>
        </section>
        <section class="about">
            <h2>About</h2>
            <div class="items about-hide-right" id="item">
                <img src="{{ asset('images/about.jpg') }}" alt="">
                <h3>You wanna know about me!!</h3>
                <p></p>
                <button id="about-btn" data-href="0">Yes</button>
            </div>
        </section>
        <section class="contacts">
            <h2>Contact Me</h2>
            <form action="{{ route('send-message') }}" method="POST" id="contact-form">
                @csrf
                <legend>Send me a massage </legend>
                <div class="fields">
                    <div class="form-group" id="form-group">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="name" name="name" placeholder="enter your name">
                    </div>
                    <span class="error name-error"></span>
                    <textarea name="message" id="message" placeholder="enter your message"></textarea>
                    <span class="error message-error"></span>
                </div>
                <div class="btn-container">
                    <button type="submit">Send</button>
                    <button type="button" id="contacts-clear">Clear</button>
                </div>
            </form>
            <span>See also<i class="fa-solid fa-down-long"></i></span>
            <div class="social-icons">
                <a target="_black" href="https://www.facebook.com/heemaun"><i class="fa-brands fa-facebook-f"></i></a>
                <a target="_black" href="https://www.linkedin.com/in/heemaun/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a target="_black" href="https://github.com/heemaun"><i class="fa-brands fa-github"></i></a>
                <a target="_black" href="https://stackoverflow.com/users/13748472/md-maksuduzzaman-maun"><i class="fa-brands fa-stack-overflow"></i></a>
            </div>
        </section>
        <div class="portfolio-img-div hide" id="portfolio-img-div">
            <span id="portfolio-img-div-close"><i class="fa-regular fa-rectangle-xmark"></i></span>
            <img src="" alt="portfolio-image" id="portfolio-img">
        </div>
    </div>
    <div class="loading loading-hide"></div>
    <div class="fixed-icons">
        <div class="container">
            <span id="phone-span">+8801751430596</span>
            <a id="phone-a" target="_black" data-tooltip="+8801751430596" href="tel:+8801751430596"><i class="fa-solid fa-phone"></i></a>
        </div>
        <div class="container">
            <span id="mail-span">heemaun@gmail.com</span>
            <a id="mail-a" target="_black" data-tooltip="heemaun@gmail.com" href="mailto:heemaun@gmail.com" title="heemaun@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        </div>
    </div>
    @if (Session::has('massage_sent'))
        <div class="message-sent">
            <div class="first">
                {{-- <img src="{{ asset('images/message_sent.jpg') }}" alt=""> --}}
                <h2>You've sent me a message! WOW!</h2>
            </div>
            <div class="second">
                {{-- <img src="{{ asset('images/thank_you.jpg') }}" alt=""> --}}
            </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
