@extends('layouts.app')

@section('content')

    <div class="page-content bg-white">

        <div class="main-bnr-one">
            <div class="banner-inner" style="background-image: url(assets/images/banner.png)">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7">
                            <div class="banner-content">
                                <div class="top-content">
                                    <h1 class="title wow fadeInUp" data-wow-delay="0.2s">Lorem ipsum dolor, sit amet consecte</h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet enim voluptas reprehenderit odbus ad similique qui optio.</p>
                                    <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.6s">
                                        <a href="" class="btn btn-skew btn-lg btn-primary shadow-primary"><span>Contactez-Nous</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-5">
                            <div class="banner-media media1 anm wow fadeInRight" data-wow-delay="1s" data-speed-x="-2" data-speed-scale="-1">
                                <img src="assets/images/hero.png" class="main-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content-inner  about-wrapper2"  style=background-image:url(assets/images/bg_about.png);background-position:center;background-size:cover>
            <div class="container">
                <div class="row about-bx2 align-items-center">
                    <div class="col-lg-6 about-content m-b30">
                        <div class="section-head m-0">
                            <span class="sub-title wow fadeInUp" data-wow-delay="0.2s">A PROPOS DE NOUS</span>
                            <h2 class="title wow fadeInUp" data-wow-delay="0.4s">laborum, maiores ad</h2>
                            <p class="m-0 wow fadeInUp" data-wow-delay="0.6s">We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose weight</p>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <ul class="nav nav-tabs style-1 m-b20 m-t30">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabMission">
                                        <span>Notre mission</span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabVision">
                                        <span>Notre vision</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content m-sm-b30 m-b40 p-r30" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabMission" role="tabpanel">
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam incidunt ipsam porro facere nesciunt illo omnis, sequi neque laudantium qui necessitatibus explicabo totam tempore magni optio nobis facilis similique debitis?</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabVision" role="tabpanel">
                                    <div class="content">
                                        <p>Nunc vulputate urna ut erat posuere accumsan. Curabitur ut commodo mauris, ac volutpat dui. Nullam eget enim ut mi bibendum ultrices. Pellentesque non feugiat nisi. Nam aliquam accumsan ante, ut accumsan risus together.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-us wow fadeInUp" data-wow-delay="1.2s">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                            <div class="content">
                                <span>Contacts</span>
                                <h4 class="number">+225 0707572125</h4>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 m-b30">
                        <div class="dz-media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="image-box">
                                <div class="video-bx1 h-auto w-auto overflow-visible">
                                    <img src="assets/images/about-1.jpg" alt="">
                                </div>

                            </div>
                            <div class="image-box">
                                <img src="assets/images/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="content-inner about-wrapper1 about-bx1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 m-b30">
                        <div class="dz-media ">
                            <img src="assets/images/why_us.png" alt="" class="wow fadeInUp" data-wow-delay="0.6s">

                            <svg viewBox="0 0 596 803" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M300.08 326.885L5.89685 422.456V367.302L300.08 271.746V326.885Z" fill="url(#paint0_linear_53_55)"/>
                                <path d="M594.417 371.718L154.49 514.145V435.989L594.417 293.562V371.718Z" fill="var(--primary)"/>
                                <path d="M533.277 239.231L92.5232 382.16V376.355L533.277 233.426V239.231Z" fill="var(--primary)"/>
                                <path d="M592.417 134.076L151.663 277.02V271.215L592.417 128.271V134.076Z" fill="var(--primary)"/>
                                <path d="M593.356 109.22L107.549 266.762V260.365L593.356 102.823V109.22Z" fill="url(#paint1_linear_53_55)"/>
                                <path d="M587.358 216L3.2937 400.915L0.690552 388.073L584.755 203.158L587.358 216Z" fill="white"/>
                                <path d="M595 334.44L242.565 448.733L242.674 440.158L595 325.912V334.44Z" fill="white"/>
                                <path d="M585.356 284.285L45.7017 459.289V437.952L585.356 262.949V284.285Z" fill="var(--primary)"/>
                                <path d="M401.917 216.712L33.7017 336.125V321.574L401.917 202.161V216.712Z" fill="url(#paint2_linear_53_55)"/>
                                <path d="M595.356 178.583L74.377 347.532V326.927L595.356 157.993V178.583Z" fill="url(#paint3_linear_53_55)"/>
                                <path d="M593.387 233.927L142.253 380.233V358.896L593.387 212.606V233.927Z" fill="url(#paint4_linear_53_55)"/>
                                <path d="M437.55 288.331L65.4284 409.005V404.103L437.55 283.429V288.331Z" fill="var(--primary)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_53_55" x1="5.90132" y1="347.096" x2="300.081" y2="347.096" gradientUnits="userSpaceOnUse">
                                        <stop offset="<some value you need to decide on>" stop-color="var(--primary-dark)"/>
                                        <stop offset="1" stop-color="var(--primary)"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_53_55" x1="107.547" y1="184.797" x2="593.358" y2="184.797" gradientUnits="userSpaceOnUse">
                                        <stop offset="<some value you need to decide on>" stop-color="var(--primary-dark)"/>
                                        <stop offset="1" stop-color="var(--primary)"/>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_53_55" x1="33.7026" y1="269.142" x2="401.918" y2="269.142" gradientUnits="userSpaceOnUse">
                                        <stop offset="<some value you need to decide on>" stop-color="var(--primary-dark)"/>
                                        <stop offset="1" stop-color="var(--primary)"/>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_53_55" x1="74.3779" y1="252.758" x2="595.358" y2="252.758" gradientUnits="userSpaceOnUse">
                                        <stop offset="<some value you need to decide on>" stop-color="var(--primary-dark)"/>
                                        <stop offset="1" stop-color="var(--primary)"/>
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_53_55" x1="142.26" y1="296.413" x2="593.388" y2="296.413" gradientUnits="userSpaceOnUse">
                                        <stop offset="<some value you need to decide on>" stop-color="var(--primary-dark)"/>
                                        <stop offset="1" stop-color="var(--primary)"/>
                                    </linearGradient>
                                </defs>
                            </svg>

                            <ul>
                                <li><span>CHELSEA</span></li>
                                <li><span>TAEKWONDO</span></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30 about-content">
                        <div class="section-head">
                            <span class="sub-title wow fadeInUp" data-wow-delay="0.2s">Accédez à l'entraînement parfait pour vous !</span>
                            <h2 class="title wow fadeInUp text-uppercase" data-wow-delay="0.4s">vulputate urna ut erat posuere</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Nunc vulputate urna ut erat posuere accumsan. Curabitur ut commodo mauris, ac volutpat dui. Nullam eget enim ut mi bibendum ultrices. Pellentesque non feugiat nisi. Nam aliquam accumsan ante, ut accumsan risus.</p>
                        </div>
                        <div class="row m-t40 m-sm-b20 m-b30">
                            <div class="col-sm-6 m-sm-b20 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-bx-wraper style-2">
                                    <div class="icon-bx">
                                        <span class="icon-cell">
                                            <img src="assets/images/icon1.png" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dz-title">Tapis d'entrainement</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-sm-b20 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-bx-wraper style-2">
                                    <div class="icon-bx">
                                        <span class="icon-cell">
                                            <img src="assets/images/icon2.png" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dz-title">Tapis d'entrainement</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-sm-b20 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-bx-wraper style-2">
                                    <div class="icon-bx">
                                        <span class="icon-cell">
                                            <img src="assets/images/icon3.png" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dz-title">Tapis d'entrainement</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 m-sm-b20 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-bx-wraper style-2">
                                    <div class="icon-bx">
                                        <span class="icon-cell">
                                            <img src="assets/images/icon4.png" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dz-title">Tapis d'entrainement</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-wrapper1">
            <div class="container">
                <div class="counter-inner bg-dark">
                    <div class="row">
                        <div class="col-sm-4 col-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="counter-box">
                                <h3 class="title">+<span class="counter">20</span></h3>
                                <p>Ceintures Noires</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="counter-box">
                                <h3 class="title">+<span class="counter">100</span></h3>
                                <p>Pratiquants</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12 m-b30 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="counter-box">
                                <h3 class="title">+<span class="counter">20</span></h3>
                                <p>vulputate</p>
                            </div>
                        </div>
                    </div>
                    <svg class="triangle1" width="250" height="70" viewBox="0 0 250 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M250 32L0 70L40 0L250 32Z" fill="url(#paint0_linear_58_264)"/>
                        <defs>
                            <linearGradient id="paint0_linear_58_264" x1="131.123" y1="34.448" x2="-0.36495" y2="34.448" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="var(--primary-dark)"/>
                                <stop offset="1" stop-color="var(--primary)"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <svg class="triangle2" width="250" height="71" viewBox="0 0 250 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 38.3735L250 0.373535L210 70.3735L0 38.3735Z" fill="url(#paint0_linear_58_261)"/>
                        <defs>
                            <linearGradient id="paint0_linear_58_261" x1="118.877" y1="35.9255" x2="250.365" y2="35.9255" gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="var(--primary-dark)"/>
                                <stop offset="1" stop-color="var(--primary)"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </section>



    </div>

    <button class="scroltop fa fa-chevron-up" ></button>

@endsection
