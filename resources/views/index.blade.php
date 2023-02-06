<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>We Heal.</title>
    @include ('partials.header')

    
    <main>
      <section class="section-hero">
        <div class="colored"></div>
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">We Heal.</h1>
            <p class="hero-description">
              Providing a safe space for</br>
              survivors of various mental</br>
              health issues to share their</br>
              experiences.
            </p>
            <a href="#cta" class="primary-btn">SHARE YOUR STORY</a>

            <a href="#how" class="secondery-btn">READ STORIES</a>
          </div>
          <div class="hero-img-box">
            <img
              src="assets/img/hero-landing.png"
              class="hero-img"
              alt="Three women putting their heads on top of each other"
            />
          </div>
        </div>
      </section>
      <section class="section-numbers container">
        <h3 class="animated-heading">Someone you know suffers
          from a mental health condition</h3>
          <div class="content">
            <div class="content__container">
              
              <ul class="content__container__list">
                <li class="content__container__list__item">284,000,000
          people suffering from anxiety disorder
          </li>
                <li class="content__container__list__item">264,000,000
          people suffering from depression</li>
                <li class="content__container__list__item">46,000,000
          people suffering from bipolar disorder</li>
                <li class="content__container__list__item">16,000,000
          people suffering from eating disorders</li>
              </ul>
            </div>
          </div>
        <div class="animated-links"><a class="more-link" href="newstory.html">You matter, you can help <ion-icon name="arrow-forward" class="g-icon"></ion-icon></a></div>
      </section>
      <section class="flip-cards">
        <div class="boxesContainer container">

          <div class="cardBox">
            <div class="fcard">
              <div class="front">
                <h3>Our Story</h3>
              </div>
              <div class="back">
                <p>One of the most underestimated problems in today's world is mental health. The stigma associated with mental illness needs to be eliminated more than ever.<br/>
                We are here to start a conversation about mental health, from one fighter to another.</p>
              </div>
            </div>
          </div>
        
          <div class="cardBox">
            <div class="fcard">
              <div class="front">
                <h3>The Problem</h3>
              </div>
              <div class="back">
                <p>It might be difficult and intimidating to discuss a problem with another person. And far too frequently, people don't share their struggles with others.<br/>
                Survivors may be forced to internalize these emotional experiences if they aren't given a means of solace and assistance.</p>
              </div>
            </div>
          </div>
        
          <div class="cardBox">
            <div class="fcard">
              <div class="front">
                <h3>Our Solution</h3>
              </div>
              <div class="back">
                <p>By sharing personal experiences, anyone may use We Heal. to talk about mental health. By doing so, they may discover resources, feel empowered, and relize they're not alone.<br/>
                When reading the stories, one finds illustrations, pictures, and personal stories intended to uplift, decrease stigma, change how people see mental health, and encourage people to seek help when they feel ready.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="features">
      <div class="container">
        <div class="row gx-5 justify-content-evenly gy-5">
          <div class="col-md-6">
            <img src="assets/img/screen1.PNG" alt="screenshot from the stories page"/>
          </div>
          <div class="col-md-6">
            <div class="featureText">
            <h5><ion-icon name="flash-outline"></ion-icon></h5>
            <h5>Your stories are powerful.</h5>
            <p>You should not have to go through this alone. Our goal is to offer a secure environment where people may engage with one another and share their experiences in order to highlight hope and start the healing process.</p>
            <a href="what">WHAT WE DO <span><ion-icon name="arrow-forward-outline" class="fix"></ion-icon></span></a>
            </div>
          </div>
        </div>
        <div class="row gx-5 justify-content-evenly gy-5">
          <div class="col-md-6">
            <div class="featureText">

            <h5><ion-icon name="lock-closed-outline"></ion-icon></h5>
            <h5>Your stories are safe.</h5>
            <p>Anonymity and safety are our primary priorities, and each story is handled with care and transparency. Without your consent, we will never contact you or share your story.</p>
            <a href="what">OUR PRIVACY POLICY <span><ion-icon name="arrow-forward-outline" class="fix"></ion-icon></span></a>
            </div>
          </div>
          <div class="col-md-6">
            <img src="assets/img/screen2.PNG" alt="screenshot from the new story page"/>
          </div>
        </div>
        <div class="row gx-5 justify-content-evenly gy-5">
          <div class="col-md-6">
            <img src="assets/img/screen3.PNG" alt="screenshot for our strong voices"/>
          </div>
          <div class="col-md-6">
            <div class="featureText">
              <h5><ion-icon name="heart-outline"></ion-icon></h5>
              <h5>Your stories make a difference.</h5>
              <p>We believe in the impact of words. With the help of our partners, we aim to use stories to break the stigma and shed some light on mental health issues and encourage your healing process.</p>
              <a href="how">HOW TO HELP <span><ion-icon name="arrow-forward-outline" class="fix"></ion-icon></span></a>
            </div>
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
