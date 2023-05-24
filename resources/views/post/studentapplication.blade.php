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
                                <img src="/admin/img/chesss19.jpg" width="350" height="700"/>
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-lg-6 bg-white">
                            <div class="pd-y-30 pd-xl-x-30">
                                <form action="{{route('student1.store')}}" method="POST" class="was-validated">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="playername" class="col-form-label">Full Name</label>
                                            <input type="text" field="playername" class="form-control" name = "playername" id="playername" placeholder="Full name" >
                                            <span if="fields.hasErrors('playername')" errors="playername" class="text-danger"></span>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="namewithInitial" class="col-form-label">Name with Initial or Team Name</label>
                                            <input type="text" field="namewithInitial" class="form-control" name = "namewithInitial" id="namewithInitial" placeholder="Name with Initial or Team Name" required>
                                            <span if="fields.hasErrors('namewithInitial')" errors="namewithInitial" class="text-danger"></span>
                                        
                                        </div>
                                        <div class="form-group col-md-8" >
                                            <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                                            <input type="radio"   name ="gender" id="Male" value="Male" required> <label>Male</label>&nbsp;&nbsp;&nbsp;
                                            <input type="radio"   name ="gender" id="Female" value="Female" required> <label>Female</label>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="insitution" class="col-form-label">Insitution</label>
                                            <input type="text" field="insitution" class="form-control" name="insitution" id="insitution" placeholder="Institution">
                                            <span if="fields.hasErrors('insitution')" errors="insitution" class="text-danger"></span>
                                        </div>
                                        
                                        <div class="form-group col-md-8">
                                            <label for="dob" class="col-form-label">Date of Birth</label>
                                            <input type="date" field="dob" class="form-control" name = "dob" id="dob" placeholder="DOB">
                                        <span if="fields.hasErrors('dob')" errors="dob" class="text-danger"></span>
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="tournament_id" class="col-form-label">Tournament ID</label>
                                            <input type="number" field="tournament_id" class="form-control" name = "tournament_id" id="tounament_id"required>
                                            <span if="fields.hasErrors('tournament_id')" errors="tournament_id" class="text-danger"></span> 
                                        </div>
                                  
                                        <div class="col-md-6">
                                            <input type = "submit" value ="Submit">
                                        </div>
                                        <div class="col-md-6">
                                            <a href = "{{route('student')}}" class="btn btn-sm btn-info">Back</a>
                                        </div>

                                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div><!-- modal-body -->
                    </div><!-- modal-content -->
                  </div><!-- modal-dialog -->
                </div><!-- modal -->
              </div><!-- pd-y-50 -->


@endsection