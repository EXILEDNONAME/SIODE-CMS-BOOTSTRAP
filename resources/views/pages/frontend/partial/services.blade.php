<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <h3>Check our <span>Services</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">

      @foreach($service as $service)
      <div class="col-lg-3 col-md-12 d-flex align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""> {{ $service->name }} </a></h4>
          <p> {{ $service->sub_title }} Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur </p>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section>
