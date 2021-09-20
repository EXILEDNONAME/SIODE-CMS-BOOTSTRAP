<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <h3><span>Contact Us</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>Our Address</h3>
          <p> {{ $contactus->address }} </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>Email Us</h3>
          <p> {{ $contactus->email }} </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Call Us</h3>
          <p> {{ $contactus->phone }} </p>
        </div>
      </div>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-6 ">
        <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4710.300575615101!2d107.57305386697838!3d-6.905563495976081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e675924fe861%3A0x659d23fb6e1c66a1!2sJl.%20Maleber%20Utara%2C%20Kec.%20Andir%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040184!5e0!3m2!1sen!2sid!4v1632114899343!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        MAPS DISABLED
      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>
