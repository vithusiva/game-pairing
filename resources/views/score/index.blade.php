@extends('admin.template')
@section('content')
<table class="table table-striped">

    <tr>
        <th>Tournament</th>
        <th>Team Name</th>
        <th>Game points</th>
    </tr>
    @foreach($scores as $score)
    <tr>
        <td> {{optional($score->tournament)->name}}</td>
        <td>  {{$score->namewithInitial}}</td>
        <td>  {{$score->gamepoints}}</td>
    </tr>
    @endforeach
    <tr>
    <td>
    <form action= "{{route('round.create')}}" method = "get">
        <input type ="Submit" value = "Do Next Round" />
    </form> 
    </td>
    <td>
    <form action= "{{URL('clearScore')}}" method = "post">
            {{csrf_field()}}
            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
    </td>
</tr>
@endsection