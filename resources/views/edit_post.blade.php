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
                <h1>Edit Post</h1>
            </div>
			<form action="/editpost/<?php echo $posts[0]->id; ?>" method="POST" class="form-horizontal login-form">
                @csrf
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<div class="form-group relative">
					<input class="form-control input-lg" type="text" name="title" placeholder="Enter Post Title" value = '<?php echo $posts[0]->title; ?>'>
                    <span class="mt-1 text-left">@error('title'){{$message}}@enderror</span>
				</div>
				<div class="form-group relative password">
					<textarea class="form-control input-lg" name="description" cols="30" rows="10" placeholder="Description" ><?php echo $posts[0]->description; ?></textarea>
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