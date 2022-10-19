<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="{{route('home')}}" class="nav-h1">Zamans' <span>Corp</span></a>
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
        <form action="" id="contact-form">
            <legend>Send me a massage</legend>
            <div class="fields">
                <div class="form-group" id="form-group">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="name" name="name" placeholder="enter your name" onfocus="nameFocus()">
                </div>
                <textarea name="body" id="body" placeholder="enter your mail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laboriosam natus porro facilis iusto a, dolorem aspernatur neque at quis, sint ullam esse perferendis fugit dolore. Ea quae voluptates at ipsum omnis nostrum dolor, recusandae consequatur illum! Voluptatem earum tempore vero aliquid blanditiis quo, reiciendis doloribus. Saepe ea neque praesentium!</textarea>
            </div>
            <div class="btn-container">
                <button type="submit">Send</button>
                <button type="button" id="contacts-clear">Clear</button>
            </div>
        </form>
        <span>Sell also<i class="fa-solid fa-down-long"></i></span>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-stack-overflow"></i></a>
        </div>
    </section>
    <div class="portfolio-img-div hide" id="portfolio-img-div">
        <span id="portfolio-img-div-close"><i class="fa-regular fa-rectangle-xmark"></i></span>
        <img src="{{asset('images/thank_you.jpg')}}" alt="portfolio-image" id="portfolio-img">
    </div>
    @if (Session::has('massage_sent'))
        <div class="message-sent">
            <div class="first">
                <img src="{{ asset('images/message_sent.jpg') }}" alt="">
                <h2>You've sent me a message! WOW!</h2>
            </div>
            <div class="second">
                <img src="{{ asset('images/thank_you.jpg') }}" alt="">
            </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
