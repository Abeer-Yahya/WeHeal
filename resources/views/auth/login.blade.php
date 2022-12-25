<!DOCTYPE html>
<html lang="en">
  <head>
    <title>We Heal.| Login</title>
    @include ('partials.header')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 <main class="login-form mx-auto">
      <h3 class="form-heading mb-4 text-center">LOGIN</h3>
      <form action="{{ route('login') }}" method="POST">
        @csrf

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="email" :value="__('Email')">Email</label>
          <input type="email" id="email" name="email" :value="old('email')" class="form-control rounded" required />
        </div>


         <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="password" :value="__('Password')">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            class="form-control rounded"
            required autocomplete="current-password"
          />
        </div>
        <div class="grid mb-4">
        <div class="row">
        <!-- Remember Me -->
        <div class="block mt-4 col">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class=" block col" style="margin-top:1.7rem;">
            @if (Route::has('password.request'))
            <div>
                <a class="button-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
            @endif
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-block mb-4 btn-form"> {{ __('Log in')}}</button>
              <!-- Register buttons -->
        <div class="text-center">
          <p>
            Not a member?
            <a class="button-link"  aria-current="page"
            href="{{ asset('/register') }}">Register</a>
          </p>
        </div>
    </form>
      </main>
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
