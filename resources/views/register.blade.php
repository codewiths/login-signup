<!-- 

<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"></head>

<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 justify-content-center border rounded mt-5">
            <h1 class="text-center">Registration Page</h1>
            <form action="register" method="POST">
                @csrf
                <input class="form-control" type="text" name="name" placeholder="Enter your Name">
                <input  class="form-control" type="email" name="email" placeholder="Enter your Email">
                <input  class="form-control" type="password" name="password" placeholder="Enter your Password">
                <input  class="form-control" type="password" name="confirm_password" placeholder="Confirm your Password">
                <button  class="btn btn-secondary" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
    -->

<html>
<head>
    <link type="text/css" rel="stylesheet" href='{{asset("css/bootstrap.min.css")}}'>
    <link type="text/css" rel="stylesheet" href='{{asset("css/font-awesome.min.css")}}'>
    <link type="text/css" rel="stylesheet" href='{{asset("css/login.css")}}'>
</head>

<div id="particles-js"></div>
<body class="login">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="welcome">
                <h1>Signup Page</h1>
            </div>
			<form action="register" method="POST" class="form-horizontal login-form">
                @csrf
				<div class="form-group relative">
					<input id="login_username" class="form-control input-lg" type="text" name="name" placeholder="Enter your Name">
                    <span class="mt-1 text-left">@error('name'){{$message}}@enderror</span>
				</div>
				<div class="form-group relative password">
					<input id="login_password" class="form-control input-lg" type="email" name="email" placeholder="Enter your Email Address">
                    <span class="mt-1 text-left">@error('email'){{$message}}@enderror</span>
				</div>
                <div class="form-group relative password">
					<input id="login_password" class="form-control input-lg" type="password" name="password" placeholder="Enter your Password">
                    <span class="mt-1 text-left">@error('password'){{$message}}@enderror</span>
				</div>
                <div class="form-group relative password">
					<input id="login_password" class="form-control input-lg" type="password" name="confirm_password" placeholder="Confirm your Password">
                    <span class="mt-1 text-left">@error('confirm_password'){{$message}}@enderror</span>
				</div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-success btn-lg btn-block">Signup</button>
			  </div>
              
			</form>
            <div class="form-group">
			    <a href="/login" class="btn btn-success btn-lg btn-block">Login</a>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
  </body>
</html>