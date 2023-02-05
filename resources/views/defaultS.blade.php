<!DOCTYPE html>
<html lang="en">
  <head>
    <title>We Heal.| Share Your Story</title>
    @livewireStyles
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/general.css" />
    <link href="{{ asset('css/wizardS.css') }}" rel="stylesheet" id="bootstrap-css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light mb-4">
      <div class="d-flex w-50 order-0">
          <a class="nav-link mr-1" href="#"><ion-icon name="arrow-back-outline"></ion-icon> Stories</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <ion-icon name="menu-outline"></ion-icon>          </button>
      </div>
      <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link " href="#"><ion-icon name="lock-closed-outline"class="g-icon"></ion-icon></a>
              </li>
          </ul>
      </div>
      <span class=" mt-1 w-50 text-right order-1 order-md-last"><a class="nav-link" href="#">Resources</a></span>
  </nav>
  </header>
        
        <div class=" mx-auto mb-4" style="max-width:90rem">
          
                <livewire:wizard2 />
            </div>
@livewireScripts
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
