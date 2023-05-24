@extends('admin.template')
@section('content')

<table class="table table-striped">

    <tr>
        <th>Tournament ID</th>
        <th>Tournament Name</th>
        <th>Tournament Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Tiebreak</th>
        <th colspan="3">Actions</th>
    </tr>
    @foreach($tournament as $tournament)
    <tr>
        <td> {{$tournament->id}} </td>
        <td> {{$tournament->name}} </td>
        <td> {{optional($tournament->tournamentType)->typename}} </td>
        <td> {{$tournament->startDate}} </td>
        <td> {{$tournament->endDate}} </td>
        <td> {{optional($tournament->tiebreak)->tiebreak_name}} </td>
      <td>
          <form action= "{{route('tournament.destroy',$tournament->id)}}" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            {{csrf_field()}}
            <input type ="Submit" value = "Delete" class="btn btn-sm btn-danger" >
          </form>
        </td>
        <td>
            <form action= "{{route('tournament.edit',$tournament->id)}}" method = "get" >
            {{csrf_field()}}
                <input type ="Submit" value = "Edit" class="btn btn-sm btn-success" >
            </form>
        </td>
        <td>
            <a href = "{{route('tournament.show',$tournament->id)}}" class="btn btn-sm btn-primary">Show</a>
        </td>

    </tr>
    @endforeach
    </table>
    <br><br>
        <form action= "{{route('tournament.create')}}" method = "get">
            {{csrf_field()}}
            <input  type ="Submit" value = "Add Tournament" />
        </form>
@endsection