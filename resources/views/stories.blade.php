<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>We Heal.| Stories</title>
    @include ('partials.header')
    <main>
      <a class="Sbtn mb-5"  aria-current="page"
              href="{{ asset('/newstory') }}" style="margin-left: 21rem; matgin-top:550px">Share your story</a>
      <div class="container">
        <div class="card-columns">
          <div class="card stcard">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2rem">Welcome to We Heal.</h5>
              <p class="card-text px-4" style="font-weight: 500;">On this page there are stories shared by people who suffer from mental health issues, these stories highlight hope but can also be hard to read. A grounding Activity can help you to feel calm and make it easier to read these stories.

              Do you want to try?</p>
              <button type="button" class="groundbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                YES, START THE GROUNDING ACTIVITY<button>           
              <button type="button"  onclick="myFunction()" class="noGround">NO, THANKS. I'D LIKE TO START READING </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Grounding Activity</h5>
                     
                    </div>
                    <div class="modal-body">
                      From where you are sitting, look around for things that have a texture or are nice or interesting to look at.<br/><br/>
                      Hold an object in your hand and bring your full focus to it. Look at where shadows fall on parts of it or maybe where there are shapes that form within the object.
                      Feel how heavy or light it is in your hand and what the surface texture feels like under your fingers (This can also be done with a pet if you have one).<br/><br/>
                      Take a deep breath to end.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="groundbtn" data-bs-dismiss="modal"  onclick="myFunction()">I feel grounded and ready</button>
                      <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @foreach ($stories as $story)
          <div class="card stcard loading-skeleton" id="skeleton">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 1.6rem">{{$story['title']}}</h5>
              <p class="card-text" style="font-size: 1.4rem">{{$story['desc']}}</p>
          </div>
          </div>
          @endforeach
        </div>
      </div>
    </main>
    @include('partials.footer')

    <script>
      function myFunction() {
        const allElements = document.querySelectorAll('*');
        allElements.forEach((element) => {
          element.classList.remove('loading-skeleton');
        });
    
      }

    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
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
