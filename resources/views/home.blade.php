@extends('layout.main')

@section('container')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div id="jumbotronFlex" class="d-flex">
            <div id="jumbotronContent" class="d-flex flex-column pt-5" data-aos="fade-up">
                <p id="jumbotronDesc">Hello, I'm Bagus Dermawan &#128075</p>
                <h1 id="jumbotronText" class="mt-4 mb-4"><b>UI/UX &<br>Website Development<br> Enthusiast</b></h1>
                <p id="jumbotronDesc" class="mb-4">Greetings! I am an ardent aficionado of UI/UX and website development, dedicated to crafting exquisite digital experiences that seamlessly blend aesthetics with functionality.</p>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success custom-solid-btn">Explore Now</button>
                </div>
            </div>
            <div id="jumbotronPhoto" class="d-flex flex-column pt-4" data-aos="fade-up">
                <img src="img/PhotoBagus.png" alt="">
            </div>
        </div>
        <div class="wrapper mt-5" data-aos="fade-up">
            <div class="box-container">
                <i id="icon-stats" style="color:white;font-size:2.5em;text-align:center" class="fa-solid fa-user-gear"></i>
                <span class="num-years" data-val="3">0 Years</span>
                <span class="text">Experience</span>
            </div>
            <div class="box-container">
                <i id="icon-stats" style="color:white;font-size:2.5em;text-align:center" class="fa-solid fa-folder-open"></i>
                <span class="num" data-val="10">0+</span>
                <span class="text">Projects</span>
            </div>
            <div class="box-container">
                <i id="icon-stats" style="color:white;font-size:2.5em;text-align:center" class="fa-solid fa-handshake-simple"></i>
                <span class="num" data-val="3">0+</span>
                <span class="text">Partners</span>
            </div>
            <div class="box-container">
                <i id="icon-stats" style="color:white;font-size:2.5em;text-align:center" class="fa-solid fa-building"></i>
                <span class="num" data-val="3">0+</span>
                <span class="text">Companies</span>
            </div>
        </div>

    </div>
</div>
<div class="container mt-5">
    <div data-aos="fade-up" >
        <h1 id="jumbotronText"><b>Our Outstanding <span id="gradient-text">Services</span></b></h1>
        <p id="ContentDesc" class="mb-4">Each service is designed to cater to your specific needs, ensuring high-quality results and exceptional satisfaction. Here’s a closer look at how I can help you achieve your digital goals:</p>
    </div>
    <div id="section-services" >
        <div class="skill-box" data-aos="fade-up">
            <div class="d-flex flex-column">
                <div class="d-flex flex-row align-items-start">
                    <div class="icon-box">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                </div>
                <div class="title-skill mt-3">
                    <h3>UI<br>UX</h3>
                </div>
                <div class="desc-skill">We design intuitive and visually appealing digital experiences, ensuring seamless and engaging user interactions that enhance satisfaction and drive project success.</div>
            </div>
        </div>
        <div class="skill-box" data-aos="fade-up">
            <div class="d-flex flex-column">
                <div class="d-flex flex-row align-items-start">
                    <div class="icon-box ">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                </div>
                <div class="title-skill mt-3">
                    <h3>Web<br>Development</h3>
                </div>
                <div class="desc-skill">We develop responsive, high-performance websites using cutting-edge technologies, guaranteeing optimal functionality, security, and user experience.</div>
            </div>
        </div>
        <div class="skill-box" data-aos="fade-up">
            <div class="d-flex flex-column">
                <div class="d-flex flex-row align-items-start">
                    <div class="icon-box">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                </div>
                <div class="title-skill mt-3">
                    <h3>Product<br>Management</h3>
                </div>
                <div class="desc-skill">We manage product development from concept to launch, strategically aligning with business goals and user needs to deliver successful and impactful products.</div>
            </div>
        </div>
    </div>

    <div id="hero-component" class="mt-5" data-aos="fade-up">
        <div class="hero-desc">
            <div class="mini-logo mb-3">
                <i class="fa-solid fa-car-on"></i>
            </div>
            <h1 id="jumbotronText"><b>Drive Anytime<br>Anywhere</b></h1>
            <p id="ContentDesc">Experience the freedom to go anywhere, anytime. Our rental service is designed for those who embrace spontaneity, offering a seamless and quick way to access a vehicle.</p>
            <div class="d-grid gap-2 d-md-block">
                <a href="#section-portfolio"><button class="btn btn-outline-success mt-3">View More</button></a>
            </div> 
        </div>
        <div class="image-right">
            <img src="img/Phone.png" alt="">
        </div>
    </div>

    <div id="hero-component-2" data-aos="fade-up">
        <div class="image-left">
            <img src="img/Browser.png" alt="">
        </div>
        <div class="hero-desc-2">
            <div class="mini-logo mb-3">
                <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h1 id="jumbotronText"><b>Crafting Timeless <br>Designs</b></h1>
            <p id="ContentDesc-2">Each of our projects reflects our passion for creating enduring beauty, ensuring that our designs remain relevant and inspiring for years to come.</p>
            <div class="d-grid gap-2 d-md-block">
                <a href="#section-portfolio"><button class="btn btn-outline-success mt-3">View More</button></a>
            </div> 
        </div>
    </div>
    <div id="section-portfolio" class="d-flex flex-column justify-content-center align-items-center mt-5" >
        <h1 data-aos="fade-up" id="jumbotronText"><b>Dive into <span id="gradient-text">My Portfolio</span></b></h1>
        <p data-aos="fade-up" id="ContentDesc">Within this section, you'll find a curated selection of projects that demonstrate my passion for creating seamless user experiences and visually striking digital platforms.</p>
        <ul data-aos="fade-up" class="nav nav-underline mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-uiux" type="button" role="tab" aria-controls="pills-home" aria-selected="true">UI/UX</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-website" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Website</button>
            </li>
          </ul>
          <div data-aos="fade-up" class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-uiux" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="porto-container">
                    @foreach ($porto as $item)
                    @if ($item['type'] == 1)
                    <div class="porto-item">
                        <img src="{{$item['image-project']}}" alt="">
                        <div class="subtitle-porto mt-4">
                            <h5><b>{{$item['name-project']}}</b></h5>
                            <p class="desc-section">{{$item['desc-project']}}</p>
                        </div>
                    </div> 
                    @endif    
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="porto-container">
                @foreach ($porto as $item)
                    @if ($item['type'] == 2)
                    <div class="porto-item">
                        <img src="{{$item['image-project']}}" alt="">
                        <div class="subtitle-porto mt-4">
                            <h5><b>{{$item['name-project']}}</b></h5>
                            <p class="desc-section">{{$item['desc-project']}}</p>
                        </div>
                    </div> 
                    @endif    
                    @endforeach
                </div>
            </div>
          </div>
    </div>
    <div id="section-testimonials" class="mt-4">
        <h1 data-aos="fade-up" id="jumbotronText"><b>Voices of <span id="gradient-text">Satisfaction</span></b></h1>
        <div data-aos="fade-up" class="d-flex">
            <p id="ContentDesc">From initial consultation to project completion, our clients share insights into our collaborative process, attention to detail, and commitment to excellence.</p>
        </div>
        <div data-aos="fade-up" id="testimonials">
                <div id="testimonial-item" class="d-flex flex-column">
                    <div class="stars mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc-section" >
                        “Lorem ipsum dolor sit amet conse ctetur adipiscing lectus a nunc mauris scelerisque sed egestas pharetraol quis pharetra arcu pharetra blandit.”   
                    </p>
                    <p class="client-name"><b>John Carter</b></p>
                    <p class="desc-section">Web Designer</p>
                </div>
                <div id="testimonial-item" class="d-flex flex-column">
                    <div class="stars mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc-section" >
                        “Lorem ipsum dolor sit amet conse ctetur adipiscing lectus a nunc mauris scelerisque sed egestas pharetraol quis pharetra arcu pharetra blandit.”   
                    </p>
                    <p class="client-name"><b>Matt Cannon</b></p>
                    <p class="desc-section">Lead Developer</p>
                </div>
                <div id="testimonial-item" class="d-flex flex-column">
                    <div class="stars mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="desc-section" >
                        “Lorem ipsum dolor sit amet conse ctetur adipiscing lectus a nunc mauris scelerisque sed egestas pharetraol quis pharetra arcu pharetra blandit.”   
                    </p>
                    <p class="client-name"><b>Sophie Moore</b></p>
                    <p class="desc-section">Head of Marketing</p>
                </div>
        </div>
    </div>

    <div id="contact-us" class="mt-4" data-aos="fade-up">
        <div class="d-flex flex-column">
            <h1 class="jumbotronText"><b>Get in touch today</b></h1>
            <p class="desc-section">Got something on your mind? We're all ears! Fill out the contact form below, and we’ll respond as soon as we can.</p>
            <form action="{{ route('send.email') }}" method="POST">
                @csrf

                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Name" value="{{ old('name') }}">
                    <label for="floatingInput">Name</label>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                    <label for="floatingInput">Subject</label>
                    @error('subject')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('message') }}</textarea>
                    <label for="floatingTextarea2">Please type your message here...</label>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-solid-success custom-solid-btn-dark mt-3">Send Message</button>
            </form>
        </div>
        <div class="object-right">
            <img src="img/Object.png">
        </div>
    </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });

    let valueDisplays = document.querySelectorAll(".num");
    let valueDisplaysYears = document.querySelectorAll(".num-years")
    let interval = 4000;

    valueDisplays.forEach((valueDisplay) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue + '+';
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });

    valueDisplaysYears.forEach((valueDisplaysYears) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplaysYears.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function () {
            startValue += 1;
            valueDisplaysYears.textContent = startValue + " Years";
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });

</script>


@endsection