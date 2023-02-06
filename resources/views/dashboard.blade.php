    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}



      <!DOCTYPE html>
      <html lang="en">
        <head>
          <title>We Heal.| Profile</title>
          @include ('partials.header')
              <main>
        <div class="s-grid">
          <div class="first-col">
            <div class="profile-img-box">
              <img
                alt="user"
                class="user-img"
                src="https://randomuser.me/api/portraits/women/18.jpg"
              />
            </div>
            <div class="profile-name">
              <h4 class="user-name">{{ Auth::user()->name }}</h4>
            </div>
            <div class="profile-actions">
              <ul class="profile-list">
                <li><ion-icon name="home"></ion-icon></li>
                <br />
                <li><ion-icon name="book"></ion-icon></li>
                <br />
                <li><ion-icon name="settings"></ion-icon></li>
                <br />
                <li><ion-icon name="log-out"></ion-icon></li>
              </ul>
              <ul class="profile-list real">
                <li>
                  <a class="profile-links" href="/">Home</a>
                </li>
                <br />
                <li>
                  <a class="profile-links" href="stories">Stories</a>
                </li>
                <br />
                <li>
                  <a class="profile-links" href="profile">Settings</a>
                </li>
                <br />
                <li>
                  <a class="profile-links" href="{{route('logout')}}">Sign Out</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="second-col">
            <h1 class="profile-content">Welcome, {{ Auth::user()->name }}!</h1>
          </div>
        </div>
      </main>
          @include('partials.footer')
      
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
      