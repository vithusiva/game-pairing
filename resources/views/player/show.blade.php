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
                                 <th class="wd-15p ">Id</th>
                                <th class="wd-15p ">Team/Player Name</th>
                                <th class="wd-15p ">Gender</th>
                                <th class="wd-15p ">Insitution</th>
                                <th class="wd-15p ">Tournament Name</th>
                            </tr>
                           
                            <tr>
                            <td>  {{$players->id}}</td>
                            <td>  {{$players->namewithInitial}}</td>
                            <td>  {{$players->gender}}</td>
                            <td>  {{$players->insitution}}</td>
                            <td>  {{optional($players->tournament)->name}}</td>
                            </tr>
                           
                        </table>
                </div>
                </div>
        </div>
    </div>
</div><body>
@endsection

