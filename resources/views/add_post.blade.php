<!-- <h1>Add Posts</h1>

<form action="add_post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Post Title"><br><br>
    <input type="text" name="description" placeholder="Enter the Description"><br><br>
    <button type="submit">Add Post</button>
</form> -->

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
                <h1>New Post</h1>
            </div>
			<form action="add_post" method="POST" class="form-horizontal login-form">
                @csrf
				<div class="form-group relative">
					<input class="form-control input-lg" type="text" name="title" placeholder="Enter Post Title">
                    <span class="mt-1 text-left">@error('title'){{$message}}@enderror</span>
				</div>
				<div class="form-group relative password">
					<textarea class="form-control input-lg" name="description" cols="30" rows="30" placeholder="Description"></textarea>
				</div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-success btn-lg btn-block">Add Post</button>
			  </div>
              
			</form>
		</div>
	</div>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
  </body>
</html>