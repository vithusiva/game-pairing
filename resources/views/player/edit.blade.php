@extends('admin.template')
@section('content')
<div class="container my-5">
    <h3> Edit Player</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
    <form action="{{route('player.update',$players->id)}}" method="post">
        <input type = "hidden" name = "_method" value = "put">
        {{csrf_field()}}
        <div class="row">
            <!-- <div class="form-group col-md-8">
                <label for="playername" class="col-form-label">Full Name</label>
                <input type="text"  name = "playername" id="playername" value="{{$players->playername}}" class="form-control">
            </div> -->
            <div class="form-group col-md-8">
                <label for="namewithInitial" class="col-form-label">Team Name</label>
                <input type="text" name = "namewithInitial" id="namewithInitial"   value="{{$players->namewithInitial}}" class="form-control">
            </div>
            <div class="form-group col-md-8" >
                <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                <input type="radio"   name ="gender" value="Male"   value="{{$players->gender}}"> <label>Male</label>&nbsp;&nbsp;&nbsp;
                <input type="radio"   name ="gender" value="Female" value="{{$players->gender}}"> <label>Female</label>&nbsp;&nbsp;&nbsp;
            </div>
            <div class="form-group col-md-8">
                <label for="insitution" class="col-form-label">Insitution</label>
                <input type="text" name="insitution" id="insitution" value="{{$players->insitution}}" class="form-control">
            </div>         
            <!-- <div class="form-group col-md-8">
                <label for="dob" class="col-form-label">Date of Birth</label>
                <input type="date" name = "dob" id="dob" value="{{$players->dob}}" class="form-control">
            </div> -->
            <div class="col-md-6">
                <a href = "{{route('player.index')}}"class="btn btn-oblong btn-primary btn-block mg-b-10">Back</a>
            </div>
            <div class="col-md-6">
                <input  type = "submit" value ="Update">  
            </div>
            <div class="form-group col-md-8"></div>
    </form>
    </div>
        </div>
    </div>
</div>
@endsection