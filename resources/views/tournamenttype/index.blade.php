@extends('admin.template')
@section('content')
<table class="table table-striped">

<tr>
    <th>ID</th>
    <th>Tournament Type Name</th>
   
</tr>

@foreach($ties as $tie)
<tr>
    <td>  {{$tie->id}} </td>
    <td> {{$tie->typename}}</td>
    <td>
            <form action= "{{route('tournamenttype.edit',$tie->id)}}" method = "get" >
            {{csrf_field()}}
                <input type ="Submit" value = "Edit"  class="btn btn-sm btn-success">
            </form>
        </td>
    
        <td>
        <form action= "{{route('tournamenttype.destroy',$tie->id)}}" method = "post">
            <input type = "hidden" name = "_method" value = "delete">
            {{csrf_field()}}
            <input type ="Submit" value = "Delete" class="btn btn-sm btn-danger">
          </form>
        </td>
   
   
</tr>

@endforeach
<tr>
    <td>
        <form action= "{{route('tournamenttype.create')}}" method = "get">
            <input type ="Submit" value = "Add Type" />
        </form>
    </td>
   
    </tr>
</table>

@endsection