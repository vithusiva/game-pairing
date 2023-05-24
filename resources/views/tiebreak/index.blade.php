@extends('admin.template')
@section('content')
<table class="table table-striped">

<tr>
    <th>ID</th>
    <th>TieBreak Name</th>
   
</tr>

@foreach($ties as $tie)
<tr>
    <td>  {{$tie->id}} </td>
    <td> {{$tie->tiebreak_name}}</td>
    <td>
            <form action= "{{route('tiebreak.edit',$tie->id)}}" method = "get" >
            {{csrf_field()}}
                <input type ="Submit" value = "Edit"  class="btn btn-sm btn-success">
            </form>
        </td>
    
        <td>
        <form action= "{{route('tiebreak.destroy',$tie->id)}}" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            {{csrf_field()}}
            <input type ="Submit" value = "Delete" class="btn btn-sm btn-danger">
          </form>
        </td>
   
   
</tr>

@endforeach
<tr>
    <td>
        <form action= "{{route('tiebreak.create')}}" method = "get">
            <input type ="Submit" value = "Add TieBreak" />
        </form>
    </td>
   
    </tr>
</table>

@endsection