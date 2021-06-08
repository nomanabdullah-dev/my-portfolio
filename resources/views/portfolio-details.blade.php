@extends('layouts.frontend_layout')
@section('content')

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">{{ $project->project_name }}</h2>
            <div class="owl-carousel portfolio-details-carousel">
                @foreach ($project->photos as $photo)
                    <img src="{{ url($photo->image) }}" class="img-fluid" alt="">
                @endforeach
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{ $project->category->category_name }}</li>
              <li><strong>Client</strong>: </li>
              <li><strong>Project date</strong>: </li>
              <li><strong>Project URL</strong>: <a href="{{ $project->url }}" target="_blank">www.github.com</a></li>
            </ul>

            <p>{{ $project->description }}</p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details -->

  </main><!-- End #main -->


@endsection
