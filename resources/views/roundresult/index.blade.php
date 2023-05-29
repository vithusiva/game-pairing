@extends('admin.template')
@section('content')
<table class="table table-striped">

<tr>
    <th>Tournament Name</th>
    <th>Round Level</th>
    <th>Team Name</th>
    <th>Team Score</th>
    <th>Opponent Team Name</th>
    <th>Opponent Score</th>
</tr>

@foreach($roundresults as $roundresult)
<tr>
    <td>  {{$roundresult->tournament->name}} </td>
    <td> {{optional($roundresult->roundLevel)->roundNo}}</td>
    <td>  {{$roundresult->playername}}</td>
    <td>  {{$roundresult->playerscore}}</td>
    <td>  {{$roundresult->opponentname}}</td>
    <td>  {{$roundresult->opponentscore}}</td>
</tr>

@endforeach
</table>
<div>
        <form action= "{{URL('clearRoundResult')}}" method = "post">
            {{csrf_field()}}
            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
        
</div>
@endsection