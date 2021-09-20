<section id="clients" class="clients section-bg">
  <div class="container" data-aos="zoom-in">

    <div class="row">

      @foreach($client as $client)
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ $client->image }}" class="img-fluid" alt="{{ $client->name }}" title="{{ $client->name }}">
      </div>
      @endforeach

    </div>

  </div>
</section>
