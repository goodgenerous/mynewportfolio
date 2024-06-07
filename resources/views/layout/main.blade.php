<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagus Dermawan - Portfolio</title>
    <link rel="icon" href="img/LogoBD.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="img/LogoBD.png" alt="Bootstrap" width="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-testimonials">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <button class="btn btn-solid-success custom-solid-btn-dark" type="submit">Contact</button>
                </form>
            </div>
        </nav>
    @yield('container')

    <footer style="background: black">
        <div class="container mt-5 pt-5">
            <div class="row mb-4">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-text pull-left">
                        <div class="d-flex mb-4">
                            <img src="img/LogoWithName.png" width="30%" >
                        </div>
                        <div class="social mt-2 mb-3">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <i class="fa-brands fa-instagram"></i> 
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <a class="nav-footer" href="/">Home</a>                 
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <a class="nav-footer" href="#section-services">Services</a>             
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <a class="nav-footer" href="#section-portfolio">Portfolio</a>                  
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <a class="nav-footer" href="#section-testimonials">Testimonials</a>                   
                </div>
            </div>
            <hr class="hr-footer">
            <div class="divider mb-4"> </div>
            <div class="row" style="font-size:10px;">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-left" style="color: white">
                        <p><i class="fa fa-copyright"></i> Bagus Dermawan @2024. All rights reserved.</p>
                    </div>
                </div>
                
            </div>
        </div>
</footer>
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
   document.querySelector('.navbar-toggler').addEventListener('click', function() {
    const navbar = document.querySelector('.navbar');
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    if (isExpanded) {
        navbar.classList.add('navbar-scrolled');
        this.setAttribute('aria-expanded', 'true');
    } else {
        navbar.classList.remove('navbar-scrolled');
        this.setAttribute('aria-expanded', 'true'); 
    }
});

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});


    </script>

</body>

</html>
