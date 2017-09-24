@extends('layouts.app')

@section('content')
    <section id="homepage-banner" class="container-fluid">
        <div class="fullbrowserhight fullwidth">
            <svg class="main">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="30%">OGUZCAN</text>
                    <text text-anchor="middle" x="50%" y="70%">KARAKOC</text>
                </symbol>

                <g class="g-ants">
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                </g>
            </svg>
            <div class="block1"></div>
            <div class="block2"></div>
        </div>
    </section>
    <section class="navigation">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Oguzcan Karakoc</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills-pgr">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_form">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </section>
    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm black align-middle">
                    <div class="display-table">
                        <h2 class="about-text align-middle">About</h2>
                    </div>
                </div>
                <div class="diamond">
                    <div class="dia">
                        <img src="{{URL::asset('/images/stock/oguzcan_karakoc.jpg')}}" width="320" height="316" />
                    </div>
                </div>

                <div class="col-sm white">
                    <div style="padding: 3%; padding-left: 25%;">

                        <p>
                            Team-oriented worker with a successful mind-set and more than 2-3 years experience spanning
                            design, Web development, Web design and technologies.
                        </p>
                        <p>
                            Detailed: Employee who independently completes all its tasks and keeps a good overview of
                            all
                            adjustments that has to be done. The writing down of other possibilities for different
                            problems
                            is a standard. I work oriented and keep everyone informed when making changes and my skills
                            /
                            properties are among others to learn and adapt to new changes in society and online.
                        </p>
                        <p>
                            Team-oriented worker with a successful mind-set and more than 2-3 years experience spanning
                            design, Web development, Web design and technologies.
                        </p>
                        <p>
                            Detailed: Employee who independently completes all its tasks and keeps a good overview of
                            all
                            adjustments that has to be done. The writing down of other possibilities for different
                            problems
                            is a standard. I work oriented and keep everyone informed when making changes and my skills
                            /
                            properties are among others to learn and adapt to new changes in society and online.
                        </p>
                        <p>
                            Team-oriented worker with a successful mind-set and more than 2-3 years experience spanning
                            design, Web development, Web design and technologies.
                        </p>
                        <p>
                            Detailed: Employee who independently completes all its tasks and keeps a good overview of
                            all
                            adjustments that has to be done. The writing down of other possibilities for different
                            problems
                            is a standard. I work oriented and keep everyone informed when making changes and my skills
                            /
                            properties are among others to learn and adapt to new changes in society and online.
                        </p>
                        <p>
                            Team-oriented worker with a successful mind-set and more than 2-3 years experience spanning
                            design, Web development, Web design and technologies.
                        </p>
                        <p>
                            Detailed: Employee who independently completes all its tasks and keeps a good overview of
                            all
                            adjustments that has to be done. The writing down of other possibilities for different
                            problems
                            is a standard. I work oriented and keep everyone informed when making changes and my skills
                            /
                            properties are among others to learn and adapt to new changes in society and online.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="filter">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a href="#all">
                        <div>
                            All
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#websites">
                        <div>
                            Websites
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#designs">
                        <div>
                            Designs
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3">
                    <a href="#school">
                        <div>
                            School
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <div class="project_item">
                        <a class='inline' href="#inline_content">
                            <div class="project_img" style="background-image: url(http://www.pngall.com/wp-content/uploads/2016/05/Coming-Soon-PNG.png); background-repeat: no-repeat; background-position: center; background-size: cover;">
                                <div class="project_description">
                                    Project description coming soon
                                </div>
                            </div>
                            <div class="project_title">
                                <h2>Board game - The element (Coming soon)</h2>
                            </div>

                            <div class="project_tags">
                                <span>Design</span> <span>School</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Progress Bar -->
    <section id="skills-pgr">
        <h2>Skills</h2>
        <hr>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <span>HTML/CSS</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                <span>PHP</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                <span>JS</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                <span>Wordpress</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <span>Joomla</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">
                <span>Photoshop/ Illustrator</span>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                <span>SQL</span>
            </div>
        </div>

    </section>


    <section id="contact_form">
        <div class="section-content">
            <h1 class="section-header">
                Contact form
            </h1>
        </div>
        <div class="contact-section">
            <div class="container">
                <form class="row">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Your name</label>
                            <input type="text" class="form-control" id="exampleInputUsername" placeholder=" Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description"> Message</label>
                            <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div>

                            <button type="button" class="btn btn-default btn-lg btn-border submit">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="fluid-container">
            <div class="row text-center">
                <div class="col-sm-3 col-xs-6 first-box">
                    <div>
                        <h1><span class="glyphicon glyphicon-earphone"></span></h1>
                        <h3>Phone</h3>
                        <p>on request</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 second-box">
                    <div>
                        <h1><span class="glyphicon glyphicon-home"></span></h1>
                        <h3>Location</h3>
                        <p>The Netherlands</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 third-box">
                    <div>
                        <h1><span class="glyphicon glyphicon-send"></span></h1>
                        <h3>E-mail</h3>
                        <p>info@yourdomain.com</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 fourth-box">
                    <div>
                        <h1><span class="glyphicon glyphicon-leaf"></span></h1>
                        <h3>Web</h3>
                        <p>www.oguzcankarakoc.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style='display:none'>
        <div id='inline_content' style='padding:10px; background:#FFFFFF;'>
            <p>description coming soon</p>
            <p>
                Maecenas mattis, sem id congue venenatis, enim sem blandit quam, vel congue libero dui eu sapien. Nullam
                vitae ullamcorper lacus, et consectetur purus. Ut faucibus pharetra arcu vel egestas. Vestibulum nibh
                justo,
                fermentum eget tincidunt eget, sagittis ac velit. Pellentesque interdum lorem id nibh molestie
                hendrerit.
                Mauris malesuada diam vitae risus cursus, eget efficitur nulla aliquam. Morbi elementum felis eget
                interdum
                ultrices. Nunc elit neque, elementum vel ante nec, tincidunt rhoncus massa. Suspendisse potenti.
                Phasellus
                posuere nisi sed odio laoreet fermentum. Vestibulum aliquam, ligula ac dapibus tincidunt, nisi mi
                bibendum
                enim, non ultricies erat turpis et urna. Aliquam sit amet risus nunc. Aliquam vulputate vel risus vitae
                consectetur. Phasellus at ipsum quis mi accumsan semper.
            </p>
            <p>
                Duis sapien elit, cursus sit amet metus eu, iaculis pretium orci. Nulla posuere mauris in commodo
                vulputate.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id vulputate diam. Aliquam elementum diam
                turpis, et sodales ante tincidunt sit amet. Duis fringilla faucibus semper. Phasellus nulla libero,
                vestibulum nec dui nec, posuere luctus nunc. Ut dapibus neque elit, quis pellentesque ligula lobortis
                ac.
                Phasellus ligula dui, egestas sed vulputate non, finibus ac mi. Interdum et malesuada fames ac ante
                ipsum
                primis in faucibus. Nam tristique, orci ut tincidunt mollis, arcu eros vulputate neque, sit amet
                fermentum
                justo lectus sit amet augue. Praesent finibus ex ac tincidunt hendrerit. Donec eget lorem et massa
                ultricies
                blandit. Duis quis fermentum dolor. Suspendisse vel dolor sit amet leo semper pellentesque non ac odio.
            </p>
            <p>
                Donec elementum nisi nibh, ut consequat sem rhoncus egestas. Suspendisse leo libero, placerat non
                placerat
                ut, pellentesque non ex. Pellentesque sed commodo arcu, a fringilla augue. Aliquam porttitor ipsum a
                dolor
                rhoncus, id hendrerit arcu ornare. Etiam purus eros, iaculis at ex at, efficitur molestie risus. Etiam
                quis
                felis vitae felis vulputate faucibus ut ac leo. Vestibulum velit sem, semper sit amet porttitor eu,
                accumsan
                sit amet quam. Cras sollicitudin augue at lorem pharetra, in interdum diam viverra. In ullamcorper
                mauris
                lectus, in ultrices erat finibus faucibus. Phasellus eu libero sed enim sodales blandit. Sed dapibus
                hendrerit libero dapibus volutpat. Aliquam erat volutpat. Aliquam nec dapibus purus. Quisque sed mollis
                justo. Nunc in scelerisque lacus. Donec facilisis accumsan gravida.</p>
        </div>
    </div>
@endsection

