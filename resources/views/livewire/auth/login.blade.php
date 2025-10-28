<div id="auth-left">
    <div class="auth-logo">
        <a href="/"><img src="..." alt="Logo"></a>
    </div>

    <h1 class="auth-title">Log in</h1>
    <p class="auth-subtitle mb-5">
        Log in with your data that you entered during registration.
    </p>

    <form wire:submit.prevent="login">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" wire:model="email" class="form-control form-control-xl" placeholder="Email">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" wire:model="password" class="form-control form-control-xl" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" id="flexCheckDefault">
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
            </label>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Log in
        </button>
    </form>

    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
        </p>
        <p>
            <a class="font-bold" href="#">Forgot password?</a>.
        </p>
    </div>
</div>
