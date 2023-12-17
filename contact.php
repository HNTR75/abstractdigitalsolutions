<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"?>
    <body>
        <?php include "includes/navbar.php"?>
        <section class="contact-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                      <h2 class="py-1 text-black">Let's Connect!</h2>
                      <h5 class="py-1 text-black">Ready to turn your vision into reality? We're eager to hear from you! Get in touch today.</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 text-white">
                    <img class="img-fluid rounded" loading="lazy" src="assets/svg/connecting_teams.svg" alt="How can we help you?">
                    </div>
                </div>
            </div>
          </section>
<section class="contact py-3 py-md-5 py-xl-8">
  <div class="container py-5">
    <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">

      <div class="col-12 col-lg-6">
        <!-- Cards for contact details -->
        <div class="row justify-content-xl-center">
          <!-- Phone Card -->
          <div class="col-12 mb-4">
            <div class="card">
              <div>
                <h4 class="mb-2">Phone</h4>
                <p class="mb-2">Please speak with us directly.</p>
                <h4 class="link mb-0">
                  <a class="text-decoration-none" href="tel:+265 881 63 94 38">+265 881 63 94 38</a>
                </h4>
              </div>
            </div>
          </div>
          <!-- Email Card -->
          <div class="col-12 mb-4">
            <div class="card">
              <div>
                <h4 class="mb-2">Email</h4>
                <p class="mb-2">Please write to us directly.</p>
                <h4 class="link mb-0">
                  <a class="text-decoration-none" href="mailto:info@ads.com">info@ads.com</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="border overflow-hidden">
        <h4 class="p-5">Fill out the form</h4>
        <form action="#!">
          <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
            <div class="col-12">
              <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" value="" required>
              </div>
            </div>
            <div class="col-12">
              <label for="phone" class="form-label">Phone Number</label>
              <div class="input-group">
                <input type="tel" class="form-control" id="phone" name="phone" value="">
              </div>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <div class="col-12">
              <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row gy-5 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded" loading="lazy" src="assets/svg/voice.svg" alt="How can we help you?">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <h3 class="py-3">How can we help you?</h3>
            <h5 class="py-3">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</h5>
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How Do I Change My Billing Information?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To change your billing information, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Under the "Billing Information" section, click on "Edit."</li>
                      <li>Make your changes and click on "Save."</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How Does Payment System Work?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How Do I Cancel My Account?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To cancel your account, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account.</li>
                      <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                      <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                      <li>Enter your password and click on "Cancel Account."</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <?php include "includes/footer.php"?>
        <script src="/assets/js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>