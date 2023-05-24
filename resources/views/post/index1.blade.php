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
     
  <div class="pd-l-50 bg-br- pd-y-40 pd-x-30 tx-center bg-delicate ht-1000 wd-1500 ht-1500 bd bd-5 bd-primary" align center>
         <div class="form-layout form-layout-1 bd-primary bd-2"align center>
            <div class=" pd-l-40 row mg-b-25 ">
              
              @foreach ($post as $post)
                <div class="col-lg-6">
                   <div class="card bg-reef ht-400 wd-400 ">
                       <div class="card-header  tx-white bg-primary">
                             <h4><b >{{ $post->TournamentName}}</b><h4>
                       </div>
                       
                       <div class="card-body ">
                           <h6><b> Venue :  &nbsp; &nbsp;&nbsp;  </b> {{ $post->Venue}}  </h6> 
                        
                           <h6><b>  Date :  &nbsp; &nbsp;&nbsp;  </b> {{ $post->Date}}</h6>
                        
                           <h6><b> Description :  &nbsp; &nbsp;&nbsp;  </b>{{ $post->Description}} </h6>
                        </div>
                        <p> <mark>for more information please contact our arbiter! </mark></p>
                       
                        <br>
                        <div class="  row mg-b-25 ">
                         <div class="col-lg-2">
                           <form action = "{{route('post.destroy',$post ->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                            <input type = "hidden" name = "_method" value = "delete"> 
                                {{csrf_field()}}
                               <button type="submit" class="btn btn-oblong btn-outline-primary btn-block mg-b-10 wd-60 bd bd-4 bd-gray"align center>Delete</button>
                           </form>
                           </div>   
                         
                         <div class="col-lg-2">
                        
                            <a href="{{route('post.edit',$post ->id)}}" align right><button class="btn btn-oblong btn-outline-primary btn-block mg-b-10 wd-60 bd bd-4 bg-blue">Edit</button></a>
                        
                         </div>
                        </div>
                        <br>
                        <br>
                    </div><!-- card-body -->
                </div>
                <br>
                        <br>
             @endforeach
          </div><!-- card -->
         
</div>
</div>
</div>
</div>
    </body>
</html>
@stop