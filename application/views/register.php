<!-- Login Form -->
    <div class="container space-2">
      <form method="POST" class="js-validate w-md-75 w-lg-50 mx-md-auto" action="{{ route('register') }}">

        <!-- Title -->
        <div class="mb-7">
          <h1 class="h3 text-primary font-weight-normal mb-0">Welcome to <span class="font-weight-semi-bold">Gigamike Solutions</span></h1>
          <p>Fill out the form to get started.</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrName">Name</label>
          <input type="text" class="form-control" name="name" id="signinSrName" placeholder="Name" aria-label="Name" required
                 data-msg="Please enter a valid name."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                 value="{{ old('name') }}"
                autocomplete="name"
               autofocus>
               @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrEmail">E-Mail Address</label>
          <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                 data-msg="Please enter a valid email address."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                  autocomplete="email"
                  value="{{ old('email') }}">
           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrPassword">Password</label>

          <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                 data-msg="Your password is invalid. Please try again."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                  autocomplete="new-password">
           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
          <label class="form-label" for="signinSrConfirmPassword">Confirm Password</label>

          <input type="password" class="form-control" name="password_confirmation" id="signinSrConfirmPassword" placeholder="********" aria-label="********" required
                 data-msg="Password does not match the confirm password."
                 data-error-class="u-has-error"
                 data-success-class="u-has-success"
                autocomplete="new-password">
        </div>
        <!-- End Form Group -->

        <!-- Checkbox -->
        <div class="js-form-message mb-5">
          <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
            <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                   data-msg="Please accept our Terms and Conditions."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
            <label class="custom-control-label" for="termsCheckbox">
              <small>
                I agree to the
                <a class="link-muted" href="/terms-and-conditions" target="_blank">Terms and Conditions</a>
              </small>
            </label>
          </div>
        </div>
        <!-- End Checkbox -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
          <div class="col-5 col-sm-6">
            <span class="small text-muted">Already have an account?</span>
            <a class="small" href="/login">Login</a>
          </div>

          <div class="col-7 col-sm-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">Register</button>
          </div>
        </div>
        <!-- End Button -->
      </form>
    </div>
    <!-- End Login Form -->
