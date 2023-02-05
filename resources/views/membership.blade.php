<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .hContainer {
        background: url('assets/img/Rectangle\ 60.png');
        background-size: cover;
        height: 75vh !important;
      }
    </style>
    
    <title>We Heal.| Membership</title>
    @include ('partials.header')
    <main>
      <section class="section-main">
        <div class="section-special">
          <h2 class="text-center fw-bold fs-1 bigger mb-5">
            Membership Features
          </h2>
          <div class="membership-features container text-center py-5 gap-5">
            <div class="row">
              <div class="col">
                <ion-icon
                  name="chatbox-ellipses-outline"
                  class="bigger mb-2"
                ></ion-icon>
                <h4 class="fw-bold mb-2">Q & A</h4>
                <p class="big">
                  Not only you can see answered questions by specialists, but
                  you can also ask your questions.
                </p>
              </div>
              <div class="col">
                <ion-icon name="reader-outline" class="bigger mb-2"></ion-icon>
                <h4 class="fw-bold mb-2">Blogs</h4>
                <p class="big">
                  Read blogs and articles dedicated to mental health, self-help,
                  and human development written by specialists.
                </p>
              </div>
              <div class="col">
                <ion-icon
                  name="pricetags-outline"
                  class="bigger mb-2"
                ></ion-icon>
                <h4 class="fw-bold mb-2">Therapy Offers</h4>
                <p class="big">
                  Enjoy special prices from our featured therapists, we would
                  love to contribute to your healing journey.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-path">
        <div class="d-grid container">
          <div class="row">
            <div class="col rounded membership-plan">
              <h3 class="text-center mt-4 bigger">Basic Membership</h3>
              <ul class="ml-4">
                <li>yy</li>
              </ul>
              <a class="button-link"  aria-current="page"
              href="{{ asset('/register') }}">Register</a>            </div>
            <div class="col rounded membership-plan ml-5">
              <h3 class="text-center mt-4">Premium Membership</h3>
            </div>
          </div>
        </div>
      </section>
    </main>



    @include('partials.footer')

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.sticky.js"></script>
    <script src="./js/main.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
