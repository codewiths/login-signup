<!-- <div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 justify-content-center border rounded mt-5">
        <h1 class="mt-3 text-center">Login Page</h1>
            <form class="p-5" action="user" method="POST">
                @csrf
                <input class="form-control" type="text" name="user" placeholder="Enter your Name">
                <span class="mt-1 text-left text-danger">@error('user'){{$message}}@enderror</span>
                <input class="mt-3 form-control" type="password" name="password" placeholder="Enter your Password">
                <span class="mt-1 text-left text-danger">@error('password'){{$message}}@enderror</span>
                <div class="mt-3 text-center"><button class="btn btn-secondary w-75" type="submit">Login</button></div>
            </form>
        </div>
    </div>
</div> -->

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
                <h1>Login Page</h1>
            </div>
			<form action="user" method="POST" class="form-horizontal login-form">
                @csrf
				<div class="form-group relative">
					<input id="login_username" class="form-control input-lg" type="text" name="user" placeholder="Enter your Name">
                    <span class="mt-1 text-left">@error('user'){{$message}}@enderror</span>
				</div>
				<div class="form-group relative password">
					<input id="login_password" class="form-control input-lg" type="password" name="password" placeholder="Enter your Password">
                    <span class="mt-1 text-left">@error('password'){{$message}}@enderror</span>
				</div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
			  </div>
              
			</form>
            <div class="form-group">
			    <a href="/register" class="btn btn-success btn-lg btn-block">Signup</a>
			  </div>
		</div>
	</div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
  </body>
</html>