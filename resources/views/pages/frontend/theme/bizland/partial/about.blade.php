<section id="about" class="about section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>About</h2>
      <h3> {!! $about->title !!} </h3>
      <p> {{ $about->sub_title }} </p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
        <img src="/assets/frontend/bizland/img/about.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <h3> {{ $about->content_title }} </h3>
        <p class="font-italic">
          {{ $about->content_description_1 }}
        </p>
        <ul>
          <li>
            <i class="bx bx-store-alt"></i>
            <div>
              <h5> {{ $about->content_1_title }} </h5>
              <p> {{ $about->content_1_description }} </p>
            </div>
          </li>
          <li>
            <i class="bx bx-images"></i>
            <div>
              <h5> {{ $about->content_2_title }} </h5>
              <p> {{ $about->content_2_description }} </p>
            </div>
          </li>
        </ul>
        <p>
          {{ $about->content_description_2 }}
        </p>
      </div>
    </div>

  </div>
</section>
