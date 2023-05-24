<html>
<head>
  <link href="../../../../../mybootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../../../mybootstrap/js/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg fixed-top ">
      <a class="navbar-brand" href="{{URL('/')}}">Home</a>
      <a class="navbar-brand">Outdoor Game Pairing</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-4">
              
              <li class="nav-item">
              <a class="nav-link" data-value="about" href="#">View Post</a>
              
              </li>
              
              <li class="nav-item">
              <a class="nav-link" data-value="Gallery" href="#">Gallery</a>
              </li>
              
              
              
          </ul>
          
          </div>
  </nav>
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Welcome to our website</h1>
      <p></p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 " style ="height:500" src="../../../../../admin/img/Chess HD Pictures19.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style ="height:500" src="../../../../../admin/img/chess-19.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"  style ="height:500" src="../../../../../admin/img/hd wallpapers chess wallpapers (6).jpg" alt="Third slide">
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="about text-center" id="about">
    <div class="container">
    <h1 class="text-center">Posts</h1>
    <div class="card-deck mb-3 ">
      <div class="row">
        @foreach ($post as $post)
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">
            {{ $post->TournamentName}}
            </div>
            <div class="card-body">
                <p class="card-text"><b> Venue :  &nbsp; &nbsp;&nbsp;  </b> {{ $post->Venue}}
            </div>
            <div class="card-body">
                <p class="card-text"><b>  Date :  &nbsp; &nbsp;&nbsp;  </b> {{ $post->Date}}
            </div>
            <div class="card-body">
                <p class="card-text"><b>  Description :  &nbsp; &nbsp;&nbsp;  </b> {{ $post->Description}}
            </div>
            <a href="{{route('student1.index')}}"> <div>
                  <p class="card-text"style="color:white"><b>click here to apply!</b></p>
              </div>
              </a>
        </div>
        @endforeach
      </div>
    </div>
    </div>
  </div>
  <div class="accordian Gallery "Style = "width:700" id="Gallery">
    <h3 class="text-center">Gallery</h3>
    <ul>
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div> 
        <a href="#">
          <img src="/admin/img/chess1.jpg" Style = "width:400"/>
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess2.jpg"Style = "width:400"/>
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess3.jpg"Style = "width:400"/>
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess4.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess5.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess6.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess7.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess8.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess9.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess11.jpg"Style = "width:400"/>
        </a>
      </li>  
      <li>
        <div class="image_title">
          <a href="#"></a>
        </div>
        <a href="#">
          <img src="/admin/img/chess12.jpg"Style = "width:400"/>
        </a>
      </li>              
    </ul>
  </div>
 </div> 
   <script type="text/javascript" src='../../../../../mybootstrap/js/jquery-3.3.1.min.js'></script>
   <script type="text/javascript" src="../../../../../mybootstrap/js/bootstrap.js"></script>
   <script type="text/javascript" src="../../../../../mybootstrap/js/style.js"></script> 
</body>
</html>