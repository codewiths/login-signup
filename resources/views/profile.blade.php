<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
<body>
  <div class="content-profile-page">
    <div class="profile-user-page card">
      <div class="img-user-profile">
        <img class="profile-bgHome" src="https://37.media.tumblr.com/88cbce9265c55a70a753beb0d6ecc2cd/tumblr_n8gxzn78qH1st5lhmo1_1280.jpg" />
        <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
      </div>
      <div class="user-profile-data p-5">
        <h1>{{session('user')}}</h1>
        <a class="btn btn-secondary" href="http://127.0.0.1:8000/home">back</a>
        <a class="btn btn-danger" href="/logout">Logout</a>  
      </div> 
    </div>
  </div>
</body>
</html>