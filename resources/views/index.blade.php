<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <body>
        <header>
            <nav>
                <h1>Zamans' <span>Corp</span></h1>
                <ul>
                    <li>Home</li>
                    <li>Services</li>
                    <li>PortFolio</li>
                    <li>About</li>
                    <li>Contacts</li>
                </ul>
            </nav>
        </header>
        <section class="hero">
            <div class="hero-img"></div>
            {{-- <img src="{{asset('images/user_picture.jpg')}}" alt="user picture" class="hero-image"> --}}
            <h2 class="hero-first-msg hide">Hello</h2>
            <h2 class="hero-second-msg hide">Welcome to Zamans' <span>Corp</span></h2>
            <a href="#" class="learn-more hide">Learn More</a>
        </section>
        <section class="services">
            <img src="{{asset('images/services.png')}}" alt="services">
            <div class="cards">
                <div class="card">
                    <img src="{{asset('images/web_app.jpg')}}" alt="web app">
                    <h3 class="title">Web Applications</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
                <div class="card">
                    <img src="{{asset('images/responsive_design.jpg')}}" alt="web app">
                    <h3 class="title">Responsive Design</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
                <div class="card">
                    <img src="{{asset('images/autocad_design.jpg')}}" alt="web app">
                    <h3 class="title">Autocad Drawing</h3>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, est.</p>
                </div>
            </div>
        </section>
        <section class="portfolio">
            <div class="card">
                <h3>Hostel Management System</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quaerat.</p>
                <img src="{{asset('images/portfolio.JPG')}}" alt="">
            </div>
            <div class="card">
                <h3>Shop Management System</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quaerat.</p>
                <img src="{{asset('images/portfolio_2.JPG')}}" alt="">
            </div>
        </section>
        <section class="about">
            <div class="first">
                <img src="{{asset('images/about.jpg')}}" alt="">
                <h3>You wanna know about me!!</h3>
            </div>
            <div class="second">
                <img src="{{asset('images/start.jpg')}}" alt="">
                <h3>Start</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloremque repellat molestiae sint, animi officia.</p>
            </div>
            <div class="third">
                <img src="{{asset('images/start.jpg')}}" alt="">
                <h3>Then</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloremque repellat molestiae sint, animi officia.</p>
            </div>
            <div class="forth">
                <img src="{{asset('images/start.jpg')}}" alt="">
                <h3>Now</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloremque repellat molestiae sint, animi officia.</p>
            </div>
        </section>
        <section class="contact">
            <form action="">
                <div class="fields">
                    <div class="left">
                        <label for="">Name</label>
                        <input type="text" name="name">
                        <label for="">Phone</label>
                        <input type="phone" name="phone">
                        <label for="">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="right">
                        <textarea name="" id=""></textarea>
                    </div>
                </div>
                <div class="btn-container">
                    <button type="submit">Send</button>
                </div>
            </form>
        </section>
        @if (Session::has('massage_sent'))
        <div class="message-sent">
            <div class="first">
                <img src="{{asset('images/message_sent.jpg')}}" alt="">
                <h2>You've sent me a message! WOW!</h2>
            </div>
            <div class="second">
                <img src="{{asset('images/thank_you.jpg')}}" alt="">
            </div>
        </div>
        @endif
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
