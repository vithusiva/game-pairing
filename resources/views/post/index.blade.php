@extends('admin.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/bracketplus/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 10:59:47 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="../img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="../img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>War and peice arbiter</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
  </head>

  <body>
  @if($errors->any())
 <div class="alert alert-danger">
   <ul>
     @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
</ul>
@endif
</div>
  <form action ="{{route('post.store')}}" method = "post">
     {{csrf_field()}}
  <div class="pd-l-150 bg-br- pd-y-30 pd-x-30 tx-center bg-delicate ht-1000 wd-1500 ht-1000 bd bd-5 bd-primary" align center>
         <div class="pd-l-160 form-layout form-layout-1 bd-primary bd-2"align center>
            <div class="pd-l-100 row mg-b-25 ">
              <div class="col-lg-8">
                <div class="form-group">
                  <label for = "tname" class="form-control-label">Tournament Name </label>
                  <input class="form-control bd bd-3" type="text" name="tname" id="tname" placeholder="Enter tournament name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group">
                  <label for ="date" class="form-control-label">Date </label>
                  <input name ="date" id="date" type="date" class="form-control bd bd-3" placeholder="date">
              </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group">
                  <label for = "venue"class="form-control-label">Venue </label>
                  <input class="form-control bd bd-3" type="text" name="venue" id="venue" placeholder="Enter venue">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label for = "des"class="form-control-label">Description</label>
                  <textarea rows="3" class="form-control is-valid mg-t-20 bd bd-3" name="des" id="des"placeholder="Textarea"></textarea>
                 </div>
                </div><!-- col-8 -->
           
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Post</button>
              
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
</div>
</form>

        @stop