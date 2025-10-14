<?php include 'services/session.php'; ?>
<?php
$_SESSION['error'] = null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (strlen($email) == 0) {
        $_SESSION['error'] = "Please enter a email";
        $_POST['email'] = null;
    } 
    }


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login/Register | Edurock - Education LMS Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("is_dark");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.documentElement.classList.remove("is_dark");
        }
    </script>
    <script>
    // Lock scroll on page load
    document.addEventListener('DOMContentLoaded', function () {
        document.body.style.overflow = 'hidden';
        document.documentElement.style.overflow = 'hidden';
    });

    // Optional: Unlock scroll after 5 seconds (for testing)
    setTimeout(function () {
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
    }, 5000);
</script>

</head>


<body class="body__wrapper">
<!-- pre loader area start -->
<div id="back__preloader">
    <div id="back__circle_loader"></div>
    <div class="back__loader_logo">
        <img loading="lazy" src="img/pre.png" alt="Preload">
    </div>
</div>
</div>
<!-- pre loader area end -->

<!-- Dark/Light area start -->
<div class="mode_switcher my_switcher">
    <button id="light--to-dark-button" class="light align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512">
            <path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                  d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/>
            <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-miterlimit="10" stroke-width="32"/>
        </svg>

        <span class="light__mode">Light</span>
        <span class="dark__mode">Dark</span>
    </button>
</div>
<!-- Dark/Light area end -->

<main class="main_wrapper overflow-hidden">


    <!-- topbar__section__stert -->
    <div class="topbararea">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="topbar__left">
                        <ul>
                            <li>
                                Call Us: +1 800 123 456 789
                            </li>
                            <li>
                                - Mail Us: Itcroc@mail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="topbar__right">
                        <div class="topbar__icon">
                            <i class="icofont-location-pin"></i>
                        </div>
                        <div class="topbar__text">
                            <p>684 West College St. Sun City, USA</p>
                        </div>
                        <div class="topbar__list">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar__section__end -->

    <div class="breadcrumbare">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                        <br>
                            <h2 class="heading">Log In</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Log In</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png"
                 alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png"
                 alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png"
                 alt="photo">
            <img loading="lazy" class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png"
                 alt="photo">
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->

    <!-- login__section__start -->
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 offset-md-2" data-aos="fade-up">
                    <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab"
                                    data-bs-target="#projects__one" type="button">Login
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two"
                                    type="button">Sign up
                            </button>
                        </li>
                    </ul>
                </div>


                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel"
                         aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Login</h5>
                                    <p class="login__description">Don't have an account yet? <a href="#"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#registerModal">Sign
                                            up for free</a></p>
                                </div>


                                <form method="POST">
                                    <div class="login__form">
                                        <label class="form__label">
                                            Email</label>
                                        <input class="common__login__input" type="email"
                                               placeholder="Enter your email" name="email"
                                               value="<?php echo($_POST['email'] ?? "demo@customer.com") ?>">
                                        <span class="text-danger"><?php echo $_SESSION['error'] ?></span>
                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" type="password" placeholder="Password">

                                    </div>
                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="forgot" type="checkbox">
                                            <label for="forgot"> Remember me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button">Log In</button>
                                    </div>
                                </form>

                                <div class="login__social__option">
                                    <p>or Log-in with</p>

                                    <ul class="login__social__btn">
                                        <li><a class="default__button login__button__1" href="#"><i
                                                        class="icofont-facebook"></i> Gacebook</a></li>
                                        <li><a class="default__button" href="#"><i class="icofont-google-plus"></i>
                                                Google</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                        <div class="col-xl-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Sing Up</h5>
                                    <p class="login__description">Already have an account? <a href="#"
                                                                                              data-bs-toggle="modal"
                                                                                              data-bs-target="#registerModal">Log
                                            In</a></p>
                                </div>


                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">First Name</label>
                                                <input class="common__login__input" type="text"
                                                       placeholder="First Name">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Last Name</label>
                                                <input class="common__login__input" type="password"
                                                       placeholder="Last Name">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Username</label>
                                                <input class="common__login__input" type="password"
                                                       placeholder="Username">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Email</label>
                                                <input class="common__login__input" type="password"
                                                       placeholder="Your Email">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Password</label>
                                                <input class="common__login__input" type="password"
                                                       placeholder="Password">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Re-Enter Password</label>
                                                <input class="common__login__input" type="password"
                                                       placeholder="Re-Enter Password">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="accept_pp" type="checkbox"> <label for="accept_pp">Accept the
                                                Terms and Privacy Policy</label>
                                        </div>

                                    </div>
                                    <div class="login__button">
                                        <a class="default__button" href="#">Log In</a>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>


                </div>

            </div>

            <div class=" login__shape__img educationarea__shape_image">
                <img loading="lazy" class="hero__shape hero__shape__1" src="img/education/hero_shape2.png" alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__2" src="img/education/hero_shape3.png" alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__3" src="img/education/hero_shape4.png" alt="Shape">
                <img loading="lazy" class="hero__shape hero__shape__4" src="img/education/hero_shape5.png" alt="Shape">
            </div>


        </div>
    </div>

    <!-- login__section__end -->


</main>


<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/scroll-lock.js"></script>

<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.getElementById("light--to-dark-button")?.classList.add("dark--mode");
    }
    if (localStorage.getItem("theme-color") === "light") {
        document.getElementById("light--to-dark-button")?.classList.remove("dark--mode");
    }
</script>


</body>

</html>