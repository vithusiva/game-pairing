@extends('admin.template')
@section('content')
<body>
<form action="{{route('player.show',$players->id)}}"></form>
<div class="container my-2">
    <div class="card">
        <div class="card-body">
            <div class="container my-2">
                <div class="col-md-15">
                        <table class="table table-striped table-responsive-md">
                            <tr>
                                <th>Player ID</th>
                                <th>Name with Initial</th>
                                <th>Full Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Insitution</th>
                                <th>Tournament ID</th>
                            </tr>
                           
                            <tr>
                                <td> {{$players->id}} </td>
                                <td> {{$players->namewithInitial}} </td>
                                <td> {{$players->playername}} </td>
                                <td> {{$players->dob}} </td>
                                <td> {{$players->gender}} </td>
                                <td> {{$players->insitution}} </td>
                                <td> {{$players->tournament_id}} </td>
                            </tr>
                           
                        </table>
                </div>
                </div>
        </div>
    </div>
</div><body>
<form action="{{route('player.show',$players->id)}}"></form>
<div class="container my-2">
    <div class="card">
        <div class="card-body">
            <div class="container my-2">
                <div class="col-md-15">
                        <table class="table table-striped table-responsive-md">
                            <tr>
                                <th>Player ID</th>
                                <th>Name with Initial</th>
                                <th>Full Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Insitution</th>
                                <th>Tournament ID</th>
                            </tr>
                           
                            <tr>
                                <td> {{$players->id}} </td>
                                <td> {{$players->namewithInitial}} </td>
                                <td> {{$players->playername}} </td>
                                <td> {{$players->dob}} </td>
                                <td> {{$players->gender}} </td>
                                <td> {{$players->insitution}} </td>
                                <td> {{$players->tournament_id}} </td>
                            </tr>
                           
                        </table>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection

