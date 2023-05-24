@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/bracketplus/app/modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 11:04:48 GMT -->
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

  <title>Modal Templates and Animation Design - Bracket Plus Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="../lib/highlightjs/github.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../css/bracket.css">
</head>
<body>
<div class="pd-y-50 bg-gray-700 mg-t-20">
  <div class="modal d-block pos-static">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
        <div class="modal-body pd-0">
          <div class="row no-gutters">
            <div class="col-lg-6 bg-primary">
              <div class="pd-20" >
                <img src="/admin/img/game.png" width="350" height="400"/>
              </div>
            </div>
            <!-- col-6 -->
            <div class="col-lg-6 bg-white">
              <div class="pd-y-30 pd-xl-x-30">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="pd-x-30 pd-y-10">
                  <h3 class="tx-inverse  mg-b-5">Welcome back!</h3>
                  <p>Sign in to your account to continue</p>
                  <br>
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="email" name="email" class="form-control pd-y-12"value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                  </div>
                
                  <!-- form-group -->
                  <div class="form-group mg-b-20">
                    <input type="password" name="password" class="form-control pd-y-12" placeholder="Enter your password"required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    <a  href="{{ route('password.request') }}" class="tx-12 d-block mg-t-10">Forgot password?</a>
                  </div><!-- form-group -->

                  <button class="btn btn-primary pd-y-12 btn-block">Sign In</button>

                  <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a></div>
                </div>
              </div><!-- pd-20 -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- modal-body -->
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</div><!-- pd-y-50 -->

@endsection
