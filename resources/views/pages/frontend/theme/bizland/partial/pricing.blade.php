<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pricing</h2>
      <h3>Check our <span>Pricing</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="box">
          <h3>Free</h3>
          <h4><sup>Rp</sup>2.110.000<span> / bulan</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

      @foreach ($pricing as $pricing)
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box @if($pricing->default == 1 ) featured @else @endif">
          @if($pricing->premium == 1) <span class="advanced"> Premium </span> @else @endif
          <h3> {{ $pricing->name }} </h3>
          <h4><sup>Rp</sup>{{ $pricing->price }}<span> / month</span></h4>
          {!! $pricing->description !!}
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach

      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <h3>Developer</h3>
          <h4><sup>$</sup>29<span> / month</span></h4>

          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <span class="advanced">Advanced</span>
          <h3>Ultimate</h3>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
