   <!DOCTYPE html>
<html lang="en">
  <head>
    <title>We Heal.| Forgot Password </title>
    @include ('partials.header')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 <main class="login-form mx-auto">
      <h3 class="form-heading mb-4 text-center">FORGOT PASSWORD</h3>
    <div class="mb-4 text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email" :value="__('Email')">Email</label>
            <input id="email" class="form-control rounded" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="btn btn-block mb-4 btn-form">
                {{ __('Email Password Reset Link') }}
            </button>
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