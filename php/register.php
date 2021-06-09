<!DOCTYPE html>
<html>
    
	<head>
		<title>Instamood SignUp</title>
		<link rel="stylesheet" href="/stylesheets/style_signup.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

	<body>
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div id="reg-title" class="justify-content-center d-flex ">
						<h2>Don't have an account?</h2>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form>
							<div class="input-group mb-4">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" id="username" class="form-control input_user" value="" placeholder="username">
							</div>
							<div class="input-group mb-4">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" id="password" class="form-control input_pass" value="" placeholder="password">
							</div>
							
								<div class="d-flex justify-content-center mt-1 login_container">
					 	<button type="button" name="button" id="signup" class="btn signup_btn">Sign Up</button>
					   </div>
						</form>
					</div>
			
				</div>
			</div>
		</div>

		<script>
			$(function(){
				$('#signup').click(function(e){
					
					var valid = this.form.checkValidity();
					if(valid){
						var username = $('#username').val();
						var password = $('#password').val();
					}

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'register_logic.php',
						data: {username: username, password:password},
					});
					setTimeout(window.location.href='login_page.php',10000);
				});
			
			});
		</script>

	</body>
</html>
