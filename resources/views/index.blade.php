@extends('layouts.frontend_layout')
@section('content')

<style> #hero { background: url({{ url($user->image) }}) }</style>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav class="nav-menu">
        <ul>
            <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="#services"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>{{ $user->name }}</h1>
        <p>I'm <span class="typed" data-typed-items="{{ $user->profession }}"></span></p>
        <div class="social-links">
            @if (count($socials) > 0)
            @foreach ($socials as $social)
            <a href="{{ $social->link }}" target="_blank" class="twitter"><i class="bx bxl-{{ $social->icon }}"></i></a>
            @endforeach
            @endif
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ url($about->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>PHP &amp; LARAVEL Developer</h3>
                    <p class="font-italic">{!! $about->description !!}</p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Facts</h2>
                <p>I keep myself constantly updated about the developments of technology applied to the web's world. So I can provide to my clients high quality standards and forefront solutions.</p>
            </div>

            <div class="row">
                @if (count($facts) > 0)
                @foreach ($facts as $fact)
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="{{ $fact->icon }}"></i>
                        <span data-toggle="counter-up">{{ $fact->number }}</span>
                        <p>{{ $fact->title1 }}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Skills</h2>
                <p>I continue to learn a lot about myself as I continue to try new things and challenge myself on regular basis with new projects and goals.</p>
            </div>

            <div class="row skills-content">
                @foreach ($skills as $skill)
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percentage }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resume</h2>
                <p>A great desire to learn...
                    Always passionate about the world of computer science, over the years I have achieved numerous training courses and a coding bootcamp based on Laravel Framework, combining creativity and personal attitudes to the Information Technologies.</p>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <h3 class="resume-title">Education</h3>
                    @if (count($educations) > 0)
                    @foreach ($educations as $education)
                    <div class="resume-item">
                        <h4>{{ $education->degree_name }}</h4>
                        <h5>{{ $education->duration }}</h5>
                        <p>{{ $education->institution }}</p>
                        <p>{{ $education->description }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>


                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @if (count($experiences) > 0)
                    @foreach ($experiences as $experience)
                    <div class="resume-item">
                        <h4>{{ $experience->designation }}</h4>
                        <h5>{{ $experience->duration }}</h5>
                        <p>{{ $experience->organization }}</p>
                        <p>{{ $experience->description }}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Here are a few projects I've done on recently.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @if (count($categories) > 0)
                        @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->category_name }}">{{ $category->category_name }}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @if (count($projects) > 0)
                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->category->category_name }}">
                    <div class="portfolio-wrap">
                        <img src="{{ url($project->thumbnail) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $project->project_name }}</h4>
                            <p>{{ $project->category->category_name }}</p>
                            <div class="portfolio-links">
                                <a href="{{ route('portfolio.details',$project->id) }}"
                                    data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Take a look at my digital services.</p>
            </div>

            <div class="row">
                @if (count($services) > 0)
                @foreach ($services as $service)

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h4><a href="">{{ $service->title }}</a></h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

                @if (count($testimonials) > 0)
                @foreach ($testimonials as $testimonial)
                <div class="testimonial-item">
                    <img src="{{ url($testimonial->image) }}" class="testimonial-img" alt="">
                    <h3>{{ $testimonial->name }}</h3>
                    <h4>{!! $testimonial->designation !!}</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {!! $testimonial->comment !!}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
                @endforeach
                @endif
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Me</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>{{ $user->location }}</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $user->email }}</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $user->phone }}</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <p>I’d love to hear from you. If you have an idea or project to launch or just to know each other and share our experiences, drop me a line and I’ll get back to you ASAP.</p>
                    <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form" id="contact-form">
                        @csrf
                        @if (Session::has('send-message'))
                            <div class="alert alert-success">
                                {{ Session::get('send-message') }}
                            </div>
                        @endif

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                    @include('alert.message')

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>{{ $user->name }}</h3>
        <p class="mb-3">Have an idea or project? Let's talk</p>
        <div class="social-links mb-3">
            @if (count($socials) > 0)
            @foreach ($socials as $social)
            <a href="{{ $social->link }}" target="_blank" class="twitter"><i class="bx bxl-{{ $social->icon }}"></i></a>
            @endforeach
            @endif
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>{{ $user->name }}</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

@endsection
