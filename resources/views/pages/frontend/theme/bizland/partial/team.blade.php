<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Team</h2>
      <h3>Our Hardworking <span>Team</span></h3>
      <p> We're smart, we're hard working, we're easy to talk to, and we're love a challenge.</p>
    </div>

    <div class="row">
      @foreach($team as $team)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            @if (!empty($team->image)) <img src="{{ $team->image }}" class="img-fluid" alt="">
            @else <img src="/assets/frontend/img/team/blank.jpg" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="{{ $team->social_twitter }}"><i class="icofont-twitter"></i></a>
              <a href="{{ $team->social_facebook }}"><i class="icofont-facebook"></i></a>
              <a href="{{ $team->social_instagram }}"><i class="icofont-instagram"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="text-center"> {{ $team->name }} </h4>
            <span class="text-center"> {{ $team->position }} </span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
</section>
