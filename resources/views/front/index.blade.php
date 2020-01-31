<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Istanbul - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link type="text/css" media="all" href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" media="all" href="{{asset('front/css/jquery.animatedheadline.css')}}" rel="stylesheet">
    <link type="text/css" media="all" href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link type="text/css" media="all" href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link type="text/css" media="all" href="{{asset('front/css/skins/blue.css')}}" rel="stylesheet">

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('front/css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('front/css/skins/goldrenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('front/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('front/css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('front/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('front/css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('front/css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('front/css/skins/yellowgreen.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/styleswitcher.css')}}" />

</head>

<body class="dark bgimage">
<div class="page">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="{{asset('front/img/styleswitcher/blue.png')}}" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="{{asset('front/img/styleswitcher/red.png')}}" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="{{asset('front/img/styleswitcher/goldenrod.png')}}" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="{{asset('front/img/styleswitcher/magenta.png')}}" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="{{asset('front/img/styleswitcher/yellowgreen.png')}}" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="{{asset('front/img/styleswitcher/orange.png')}}" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="{{asset('front/img/styleswitcher/green.png')}}" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="{{asset('front/img/styleswitcher/yellow.png')}}" alt="yellow" /></a>
                </li>
            </ul>

            <br>

            <a href="#" class="waves-effect waves-light btn font-weight-600 purchase hoverable"> <span><i class="fa fa-shopping-cart"></i> PURCHASE</span></a>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    <header id="header">
        <div class="nav-container">
            <div>
                <!-- Mobile Navigation Starts -->
                <ul id="nav" class="navigation">
                    <li class="active">
                        <div>
                            <a id="link-home" href="#home" class="active">
                                <i class="fa fa-home"></i><span>Home</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a id="link-about" href="#about">
                                <i class="fa fa-user"></i><span>About me</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a id="link-work" href="#work">
                                <i class="fa fa-briefcase"></i><span>my Portfolio</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a id="link-contact" href="#contact">
                                <i class="fa fa-envelope-open"></i><span>get in touch</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a id="link-blog" href="#blog">
                                <i class="fa fa-comments"></i><span>my Blog</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Mobile Navigation Ends -->
            </div>
        </div>
        <!-- Stretchy Navigation Starts -->
        <div class="cd-stretchy-nav">
            <a class="cd-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul class="stretchy-nav">
                <li class="active"><a href="#home"><span>Home</span></a></li>
                <li><a href="#about"><span>About</span></a></li>
                <li><a href="#works"><span>Portfolio</span></a></li>
                <li><a href="#contact"><span>Contact</span></a></li>
                <li><a href="#blog"><span>Blog</span></a></li>
            </ul>
            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </div>
        <!-- Stretchy Navigation Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <main id="main">
        <!-- Back To Home Starts [ONLY MOBILE] -->
        <span class="back-mobile" id="back-mobile"><i class="fa fa-arrow-left"></i></span>
        <!-- Back To Home Ends [ONLY MOBILE] -->
        <!-- Home Section Starts -->
        <section id="home" class="active">
            <!-- Text Rotator Starts -->
            <div class="main-text-container">
                <img class="leftimagepicture" src="img/leftimage-dark.jpg" alt=""/>
                <div class="main-text" id="selector">
                    <h3>Hi there !</h3>
                    <h1 class="ah-headline">
                        I'm
                        <span class="ah-words-wrapper">
							<b class="is-visible">daria taylor</b>
							<b>a web designer</b>
							<b>a blogger</b>
							<b>a freelancer</b>
						</span>
                    </h1>
                    <p>I'm a Freelance UI/UX Designer and Developer based in London, England. I strives to build immersive and beautiful web applications through carefully crafted code and user-centric design.</p>
                    <div class="call-to-actions-home">
                        <div class="text-left">
                            <a href="#about" class="btn link-portfolio-one"><span><i class="fa fa-user"></i>more about me</span></a>
                            <a href="#work" class="btn btn-secondary link-portfolio-two"><span><i class="fa fa-suitcase"></i>portfolio</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text Rotator Ends -->
        </section>
        <!-- Home Section Ends -->
        <!-- About Section Starts -->
        <section id="about">
            <!-- Main Heading Starts -->
            <div class="container page-title text-center">
                <h2 class="text-center">about <span>me</span></h2>
                <span class="title-head-subtitle">I design and code beautiful things, and I love what I do.</span>
            </div>
            <!-- Main Heading Ends -->
            <div class="container infos">
                <div class="row personal-info">
                    <!-- Personal Infos Starts -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="image-container">
                            <img class="img-fluid d-block" src="{{asset('front/img/leftimage-dark.jpg')}}"  alt="" />
                        </div>
                        <p  class="d-block d-md-none">I'm a Freelance UI/UX Designer and Developer based in London, England. I strives to build immersive and beautiful web applications through carefully crafted code and user-centric design.</p>
                    </div>
                    <div class="row col-xl-6 col-lg-6 col-md-12">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <ul class="list-1">
                                <li>
                                    <h6><span class="font-weight-600">First Name</span>Daria</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Last Name</span>Taylor</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Birthdate</span>21 june 1990</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Nationality</span>English</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Experience</span>7 years</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Address</span>Istanbul</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <ul class="list-2">
                                <li>
                                    <h6><span class="font-weight-600">Freelance</span>Available</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Langages</span>English</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Phone</span>+34 21 18 40 10</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Email</span>you@you.com</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Skype</span>daria.taylor</h6>
                                </li>
                                <li>
                                    <h6><span class="font-weight-600">Dribbble</span>taylor.dribbble</h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 resume-btn-container">
                            <a href="#" class="btn btn-resume"><span><i class="fa fa-download"></i>download my cv</span></a>
                        </div>
                    </div>
                    <!-- Personal Infos Ends -->
                </div>
            </div>
            <!-- Download CV Starts -->
            <div class="container col-12 mx-auto text-center">
                <hr class="about-section" />
            </div>
            <!-- Download CV Ends -->
            <!-- Resume Starts -->
            <div class="resume-container">
                <div class="container">
                    <div class="row">
                        <!-- Experience Starts -->
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <h2 class="font-weight-600 uppercase title-section">experience</h2>
                            <div class="resume-items">
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2017 - 2019</span>
                                            <span class="d-block font-weight-400 uppercase">
												web designer
												<span class="separator"></span>
                                                <span class="font-weight-700">Envato</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2014 - 2017</span>
                                            <span class="d-block font-weight-400 uppercase">
												web developer
												<span class="separator"></span>
                                                <span class="font-weight-700">Twitter</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2010 - 2014</span>
                                            <span class="d-block font-weight-400 uppercase">
												Consultant
												<span class="separator"></span>
                                                <span class="font-weight-700">Google</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                            </div>

                        </div>
                        <!-- Experience Ends -->
                        <!-- Education Starts -->
                        <div class="col-xl-6 col-lg-6 col-md-6 skills-container">
                            <h2 class="font-weight-600 uppercase title-section">Education</h2>
                            <div class="resume-items">
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2007 - 2010</span>
                                            <span class="d-block font-weight-400 uppercase">
												Engineering Degree
												<span class="separator"></span>
                                                <span class="font-weight-700">Istanbul University</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2005 - 2007</span>
                                            <span class="d-block font-weight-400 uppercase">
												Masters Degree
												<span class="separator"></span>
                                                <span class="font-weight-700">Paris University</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                                <!-- Item Starts -->
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="card">
                                        <div class="card-header">
                                            <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-right"></i>2001 - 2005</span>
                                            <span class="d-block font-weight-400 uppercase">
												Bachelor Degree
												<span class="separator"></span>
                                                <span class="font-weight-700">Moscow High School</span>
                                                </span>
                                        </div>
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet diam nonummy.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Ends -->
                            </div>
                        </div>
                        <!-- Education Ends -->
                    </div>
                    <!-- Skills Starts -->
                    <div class="row">
                        <!-- Skill Bar Starts -->
                        <div class="col-12">
                            <h2 class="font-weight-600 uppercase title-section skills-title">skills</h2>
                        </div>
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">html</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="80" style="width: 80%;"></span>
                                <span class="percent" style="right: calc(20% - 21px);">80%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">javascript</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="60" style="width: 60%;"></span>
                                <span class="percent" style="right: calc(40% - 21px);">60%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">css</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="75" style="width: 75%;"></span>
                                <span class="percent" style="right: calc(25% - 21px);">75%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">jquery</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="65" style="width: 65%;"></span>
                                <span class="percent" style="right: calc(35% - 21px);">65%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">wordpress</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="90" style="width: 90%;"></span>
                                <span class="percent" style="right: calc(10% - 21px);">90%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">angular js</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="85" style="width: 85%;"></span>
                                <span class="percent" style="right: calc(15% - 21px);">85%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">illustrator</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="60" style="width: 60%;"></span>
                                <span class="percent" style="right: calc(40% - 21px);">60%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">after effects</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="75" style="width: 75%;"></span>
                                <span class="percent" style="right: calc(25% - 21px);">75%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->

                        <!-- Skill Bar Starts -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <span class="skill-text">photoshop</span>
                            <div class="chart-bar">
                                <span class="item-progress" data-percent="80" style="width: 80%;"></span>
                                <span class="percent" style="right: calc(20% - 21px);">80%<div class="arrow"></div></span>
                            </div>
                        </div>
                        <!-- Skill Bar Ends -->
                    </div>
                    <!-- Skills Starts -->
                </div>

                <!-- Resume Ends -->
            </div>
        </section>
        <!-- About Section Ends -->
        <!-- Portfolio Section Starts -->
        <section id="work">
            <div class="portfolio-container">
                <!-- Main Heading Starts -->
                <div class="container page-title text-center">
                    <h2 class="text-center">my <span>portfolio</span></h2>
                    <span class="title-head-subtitle">a few recent design and coding projects. Want to see more? Email me.</span>
                </div>
                <!-- Main Heading Ends -->
                <div class="portfolio-section">
                    <div class="container cd-container">
                        <div>
                            <!-- Portfolio Items Starts -->
                            <ul class="row" id="portfolio-items">
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-1">
                                        <img src="{{asset('front/img/projects/project-1.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-2">
                                        <img src="{{asset('front/img/projects/project-2.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Youtube Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-3">
                                        <img src="{{asset('front/img/projects/project-8.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Slider Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-4">
                                        <img src="{{asset('front/img/projects/project-6.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Video Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-5">
                                        <img src="{{asset('front/img/projects/project-5.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-6">
                                        <img src="{{asset('front/img/projects/project-4.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-7">
                                        <img src="{{asset('front/img/projects/project-7.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-8">
                                        <img src="{{asset('front/img/projects/project-3.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                                <!-- Portfolio Item Starts -->
                                <li class="col-12 col-md-6 col-lg-4">
                                    <a href="#0" data-type="project-9">
                                        <img src="{{asset('front/img/projects/project-9.jpg')}}" alt="Project" class="img-fluid">
                                        <div><span>Image Format</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- Portfolio Item Ends -->
                            </ul>
                            <!-- Portfolio Items Ends -->
                        </div>
                    </div>
                </div>
                <!-- PORTFOLIO OVERLAY STARTS -->
                <div class="portfolio-overlay"></div>
                <!-- PORTFOLIO OVERLAY ENDS -->
            </div>
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-1">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-1.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-2">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <div class="videocontainer">
                        <iframe class="youtube-video" src="https://www.youtube.com/embed/7e90gBu4pas?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Youtube Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-3">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('front/img/projects/project-8.jpg')}}" alt="slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('front/img/projects/project-7.jpg')}}" alt="slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('front/img/projects/project-5.jpg')}}" alt="slide 3">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slider" data-slide="prev"> <span class="fa fa-chevron-left carousel-controls"></span>
                        </a>
                        <a class="carousel-control-next" href="#slider" data-slide="next"> <span class="fa fa-chevron-right carousel-controls"></span>
                        </a>
                    </div>
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Slider Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->

            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-4">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <video id="video" class="responsive-video" controls poster="{{asset('front/img/projects/project-6.jpg')}}">
                        <source src="{{asset('front/img/projects/video.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Video Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-5">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-5.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-6">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-4.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-7">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-7.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-8">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-3.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <!-- Portfolio Project Content Starts -->
            <div class="project-info-container project-9">
                <!-- Main Content Starts -->
                <div class="project-info-main-content">
                    <img src="{{asset('front/img/projects/project-9.jpg')}}" alt="Project Image">
                </div>
                <!-- Main Content Ends -->
                <!-- Project Details Starts -->
                <div class="projects-info row">
                    <div class="col-12 col-sm-6 p-none">
                        <h3 class="font-weight-600 uppercase">Image Format</h3>
                        <ul class="project-details">
                            <li><i class="fa fa-file-text-o"></i><span class="font-weight-400 project-label"> Project </span>: <span class="font-weight-600 uppercase">Website</span>
                            </li>
                            <li><i class="fa fa-user-o"></i><span class="font-weight-400 project-label"> Client </span>: <span class="font-weight-600 uppercase">Envato</span>
                            </li>
                            <li><i class="fa fa-hourglass-o"></i><span class="font-weight-400 project-label"> Duration </span>: <span class="font-weight-600 uppercase">3 months</span>
                            </li>
                            <li><i class="fa fa-code"></i> <span class="font-weight-400 project-label"> Technologies</span> : <span class="font-weight-600 uppercase">html, javascript</span>
                            </li>
                            <li><i class="fa fa-money"></i> <span class="font-weight-400 project-label"> Budget</span> : <span class="font-weight-600 uppercase">1550 USD</span>
                            </li>
                        </ul>
                        <a href="#" class="btn"><span><i class="fa fa-external-link"></i>preview</span></a>
                    </div>
                    <div class="col-6 p-none text-right">
                        <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i>Close</span></a>
                    </div>
                </div>
                <!-- Project Details Ends -->
            </div>
            <!-- Portfolio Project Content Ends -->
            <span class="back-mobile close-project"><i class="fa fa-arrow-left"></i></span>
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Contact Section Starts -->
        <section id="contact">
            <div class="contact-container">
                <!-- Main Heading Starts -->
                <div class="container page-title text-center">
                    <h2 class="text-center">get <span>in touch</span></h2>
                    <span class="title-head-subtitle">I’m always open to discussing product design work or partnerships.</span>
                </div>
                <!-- Main Heading Ends -->
                <div class="container">
                    <div class="row contact">
                        <!-- Contact Infos Starts -->
                        <div class="col-12 col-md-4 col-xl-4 leftside">
                            <ul class="custom-list">
                                <li>
                                    <h6 class="font-weight-600"> <span class="contact-title">Phone</span><i class="fa fa-whatsapp"></i><span class="contact-content">+216 21 184 010</span></h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-600"> <span class="contact-title">email</span><i class="fa fa-envelope-o fs-14"></i><span class="contact-content">info@daria.ua</span></h6>

                                </li>
                                <li>
                                    <h6 class="font-weight-600"><span class="contact-title">instagram</span><i class="fa fa-instagram"></i><span class="contact-content">daria.198</span></h6>

                                </li>
                                <li>
                                    <h6 class="font-weight-600"><span class="contact-title">Dribbble </span><i class="fa fa-dribbble"></i><span class="contact-content">daria.dribble</span></h6>
                                </li>
                            </ul>

                            <!-- Social Media Profiles Starts -->

                            <div class="social">
                                <h6 class="font-weight-600 uppercase">Social Profiles</h6>
                                <ul class="list-inline social social-intro text-center p-none">
                                    <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Contact Infos Ends -->
                        <!-- Contact Form Starts -->
                        <div class="col-12 col-md-8 col-xl-8 rightside">
                            <p>
                                If you have any suggestion, project or even you want to say Hello.. please fill out the form below and I will reply you shortly.
                            </p>
                            <form class="contactform" method="post" action="http://slimhamdi.net/istanbul/demos/php/process-form.php">
                                <div class="row">
                                    <!-- Name Field Starts -->
                                    <div class="form-group col-xl-6"> <i class="fa fa-user prefix"></i>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="YOUR NAME" required>
                                    </div>
                                    <!-- Name Field Ends -->
                                    <!-- Email Field Starts -->
                                    <div class="form-group col-xl-6"> <i class="fa fa-envelope prefix"></i>
                                        <input id="email" type="email" name="email" class="form-control" placeholder="YOUR EMAIL" required>
                                    </div>
                                    <!-- Email Field Ends -->
                                    <!-- Comment Textarea Starts -->
                                    <div class="form-group col-xl-12"> <i class="fa fa-comments prefix"></i>
                                        <textarea id="comment" name="comment" class="form-control" placeholder="YOUR MESSAGE" required></textarea>
                                    </div>
                                    <!-- Comment Textarea Ends -->
                                </div>
                                <!-- Submit Form Button Starts -->
                                <div class="submit-form">
                                    <button class="btn button-animated" type="submit" name="send"><span><i class="fa fa-send"></i> Send Message</span></button>
                                </div>
                                <!-- Submit Form Button Ends -->
                                <div class="form-message"> <span class="output_message text-center font-weight-600 uppercase"></span>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form Ends -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ends -->
        <!-- Blog Section Starts -->
        <section id="blog">
            <div class="container page-title text-center">
                <h2 class="text-center">latest <span>posts</span></h2>
                <span class="title-head-subtitle">tips, insights, and best practices about web design and developpment</span>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Article Starts -->
                    <div class="col-12 col-sm-6">
                        <article>
                            <!-- Figure Starts -->
                            <figure class="blog-figure">
                                <a href="blog-post.html">
                                    <img class="img-fluid" src="{{asset('front/img/blog/blog-post-4.jpg')}}" alt="">
                                </a>
                                <div class="post-date"> <span>23</span>
                                    <span>JUN</span>
                                </div>
                            </figure>
                            <!-- Figure Ends -->
                            <a href="blog-post.html">
                                <h4>create a wordpress theme from scratch</h4>
                            </a>
                            <!-- Excerpt Starts -->
                            <div class="blog-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ...</p>
                                <a href="blog-post.html" class="btn readmore"><span>Read more</span></a>
                            </div>
                            <!-- Excerpt Ends -->
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-sm-6">
                        <article>
                            <!-- Figure Starts -->
                            <figure class="blog-figure">
                                <a href="blog-post.html">
                                    <img class="img-fluid" src="{{asset('front/img/blog/blog-post-1.jpg')}}" alt="">
                                </a>
                                <div class="post-date"> <span>18</span>
                                    <span>aug</span>
                                </div>
                            </figure>
                            <!-- Figure Ends -->
                            <a href="blog-post.html">
                                <h4>Effective Marketing Strategy tips</h4>
                            </a>
                            <!-- Excerpt Starts -->
                            <div class="blog-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ...</p>
                                <a href="blog-post.html" class="btn readmore"><span>Read more</span></a>
                            </div>
                            <!-- Excerpt Ends -->
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-sm-6">
                        <article>
                            <!-- Figure Starts -->
                            <figure class="blog-figure">
                                <a href="blog-post.html">
                                    <img class="img-fluid" src="{{asset('front/img/blog/blog-post-3.jpg')}}" alt="">
                                </a>
                                <div class="post-date"> <span>01</span>
                                    <span>mar</span>
                                </div>
                            </figure>
                            <!-- Figure Ends -->
                            <a href="blog-post.html">
                                <h4>free psd and sketch ressouces</h4>
                            </a>
                            <!-- Excerpt Starts -->
                            <div class="blog-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ...</p>
                                <a href="blog-post.html" class="btn readmore"><span>Read more</span></a>
                            </div>
                            <!-- Excerpt Ends -->
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-12 col-sm-6">
                        <article>
                            <!-- Figure Starts -->
                            <figure class="blog-figure">
                                <a href="blog-post.html">
                                    <img class="img-fluid" src="{{asset('front/img/blog/blog-post-2.jpg')}}" alt="">
                                </a>
                                <div class="post-date"> <span>01</span>
                                    <span>mar</span>
                                </div>
                            </figure>
                            <!-- Figure Ends -->
                            <a href="blog-post.html">
                                <h4>How to become a successful freelancer</h4>
                            </a>
                            <!-- Excerpt Starts -->
                            <div class="blog-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris Lorem ...</p>
                                <a href="blog-post.html" class="btn readmore"><span>Read more</span></a>
                            </div>
                            <!-- Excerpt Ends -->
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <!-- Link To Blog Starts -->
                    <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 allposts"> <a href="blog.html" class="btn btn-secondary"><span><i class="fa fa-comments"></i>All posts</span></a>
                    </div>
                    <!-- Link To Blog Ends -->
                </div>
            </div>
        </section>
        <!-- Blog Section Ends -->
    </main>
</div>
<!-- Main Content Ends -->
<!-- Preloader Starts -->
<div class="preloader">
    <div class="preloader-container">
        <h1>daria</h1>
        <div id="progress-line-container">
            <div class="progress-line"></div>
        </div>
        <h1>taylor</h1>
    </div>
</div>
<!-- Preloader Ends -->

<!-- Template JS Files -->
<script src="{{asset('front/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('front/js/jquery.animatedheadline.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/transition.js')}}"></script>
<!-- Live Style Switcher JS File - only demo -->
<script src="{{asset('front/js/styleswitcher.j')}}s"></script>
<!-- Main JS Initialization File -->
<script src="{{asset('front/js/custom.js')}}"></script>
</body>


<!-- Mirrored from slimhamdi.net/istanbul/demos/index-left-image-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jan 2020 16:23:50 GMT -->
</html>
