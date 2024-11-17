<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password|Mtaa Digital</title>
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
		      	<h3 class="mb-4 text-center">Let`s Reset your password 🔐</h3

    <form  method="POST" action="{{ route('passwordreset.route') }}">
        @csrf

       
        <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Your Email" required>
		      		</div>
		      		<!---- start of password ---->
	               <div class="form-group">
    <input id="password-field" type="password" class="form-control" placeholder="Password" required autocomplete="new-password" minlength="8">
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    <div id="password-strength" class="mt-2"></div>
</div>


<div class="form-group">
    <input id="confirm-password-field" type="password" class="form-control" placeholder="Confirm Password" required autocomplete="new-password" minlength="8">
    <span toggle="#confirm-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    <div id="confirm-password-strength" class="mt-2"></div>
</div>

<script>
    document.querySelector('.toggle-password').addEventListener('click', function (e) {
        const passwordField = document.querySelector('#password-field');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    document.querySelector('#password-field').addEventListener('input', function () {
        const strengthMeter = document.querySelector('#password-strength');
        const value = this.value;
        let strength = 'Weak🙄';
        if (value.length >= 8) {
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])/;
            if (regex.test(value)) {
                strength = 'Strong💪';
            } else if (value.length >= 8) {
                strength = 'Medium ⚖';
            }
        }
        strengthMeter.textContent = `Password Strength: ${strength}`;
    });
// for password check 
    const passwordField = document.getElementById('password-field');
const confirmPasswordField = document.getElementById('confirm-password-field');

confirmPasswordField.addEventListener('input', () => {
    if (passwordField.value !== confirmPasswordField.value) {
        confirmPasswordField.setCustomValidity('Passwords do not match');
    } else {
        confirmPasswordField.setCustomValidity('');
    }
});
</script>
<!----end of password ---->
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">reset password</button>
	            </div>
	            
    </form>
    <p class="w-100 text-center">&mdash; #free mind, no more stress &mdash;</p>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src={{ asset('authsource/assets/js/jquery.min.js') }}></script>
  <script src={{ asset('authsource/assets/js/popper.js') }}></script>
  <script src={{ asset('authsource/assets/js/bootstrap.min.js') }}></script>
  <script src={{ asset('authsource/assets/js/main.js') }}></script>

	</body>
</html>
