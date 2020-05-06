<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <body>
  

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#presentation">presentation</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">contact<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">rendez-vous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#article">nous articles</a>
      </li>
    </ul>
   
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row">


<div class="col-md-6">
<form action="">
<div class="form-group">
  <label for="email">email</label>
  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
  <small id="emailHelpId" class="form-text text-muted">Help text</small>
</div>
<div class="form-group">
  <label for="object"object>object</label>
  <input type="text" class="form-control" name="object" id="object" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<div class="form-group">
  <label for="message">message</label>
  <textarea class="form-control" name="message" id="message" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102367.51648106081!2d4.005478728478939!3d36.69890098720289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128dc7dfbffd090b%3A0x27cd9a20dc200804!2sTizi%20Ouzou!5e0!3m2!1sen!2sdz!4v1578506242434!5m2!1sen!2sdz" width="650" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
</div>


<div id="article">
<div class="row">

 @foreach($MyPosts as $POST)
 
 <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="{{asset('/storage/'.$POST->image)}}">
    <div class="card-body">
      <h4 class="card-title">{{$POST->title}}</h4>
      <p class="card-text">{{str_limit($POST->excerpt,100)}}</p>
    </div>
  </div>
  </div>
  

 @endforeach
</div>
<li class="nav-item">
  <Switcher 
      link-en="{{ route(Route::currentRouteName())}}"
      link-fr="{{ route(Route::currentRouteName())}}"
  ></Switcher>
</li>
</div>







    <script src="{{asset('js/jquery-3.4.1.min.js')}}">

    </script>
    <script src="{{asset('js/bootstrap.min.js')}}">

    </script>
  </body>
</html>

