<!doctype html>
<html lang="en">
  <head>
  	<title>Login|Mtaa Digital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href={{ asset('authsource/assets/css/style.css') }}>

	</head>
    <body class="img js-fullheight" style="background-image: url('<?= asset('authsource/assets/images/mta.png') ?>')">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
  <a href="{{ route('welcome.route') }}" class="gold-glow-link">
    <h1 class="heading-section">
      <b>Mtaa Digital</b>
    </h1>
  </a>
</div>

<style>
  .gold-glow-link {
    text-decoration: none;
  }
  .gold-glow-link:hover, .gold-glow-link:active {
    text-shadow: 0 0 10px gold;
  }
</style>

<script>
  document.addEventListener('touchstart', function(event) {
    if (event.target.classList.contains('gold-glow-link')) {
      event.target.classList.add('gold-glow');
    }
  });
  document.addEventListener('touchend', function(event) {
    if (event.target.classList.contains('gold-glow-link')) {
      event.target.classList.remove('gold-glow');
    }
  });
</script>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Welcome Back!!</h3>
    <!-- validator -->
 
<form method="POST" action="{{ route('login.route') }}">
    @csrf

    <!-- Username/Email Input -->
    <div class="form-group">
        <input type="text" name="login" class="form-control" placeholder="Username or Email" required>
    </div>

    <!-- Password Input -->
    <div class="form-group">
        <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    </div>

    <!-- Remember Me Checkbox -->
    <div class="form-group">
        <label class="checkbox-wrap checkbox-primary">Remember Me
            <input type="checkbox" name="remember">
            <span class="checkmark"></span>
        </label>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary submit px-3">Log In</button>
    </div>

    <!-- Links for Forgot Password and Registration -->
    <div class="form-group d-md-flex">
        <div class="w-50 text-md-left">
            <a href="{{ route('passwordreset.route') }}" style="color: #fff">Forgot Password</a>
        </div>
        <div class="w-50 text-md-right">
            <a href="#" style="color:yellow;">Don’t have an account?</a>
        </div>
    </div>
</form>


    <p class="w-100 text-center">&mdash; #free mind, no more stress &mdash;</p>
		      </div>
				</div>
			</div>
		</div>
	</section>
</div>
	<script src={{ asset('authsource/assets/js/jquery.min.js') }}></script>
  <script src={{ asset('authsource/assets/js/popper.js') }}></script>
  <script src={{ asset('authsource/assets/js/bootstrap.min.js') }}></script>
  <script src={{ asset('authsource/assets/js/main.js') }}></script>

	</body>
</html>