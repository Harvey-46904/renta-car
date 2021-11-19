<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN - RENTACAR PASTO</title>
    <link href="{!! asset('dash/css/style-login.css') !!}" rel="stylesheet">
	<link rel="icon" href="{!! asset('webpage/img/icon-webpage.png') !!}" />
</head>

<body>
    
	
	<font style = "font-family:arial;">
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><img src="{!! asset('dash/images/logo2.jpg') !!}" width=400 height=290></span>
				
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2 align=center>INICIAR SESIÓN</h2>
					</div>
					<div class="row">
						<form control="" class="form-group">
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Usuario">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Contraseña">
							</div>
							
							<div class="row">
								<!--
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Remember Me!</label>
								-->
							</div>
							<div class="row" align=center>
								<input type="submit" value="INGRESAR" class="btn">
							</div>
						</form>
					</div>
					<!--
					<div class="row">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="container-fluid text-center footer">
		
	</div>
</font>
</body>
</html>