@extends('admin.template')
@section('content')
<table class="table table-striped">

    <tr>
        
        <th>Round Level</th>
        <th>Tournament Name</th>
        <th>Gender</th>
        <th>Date</th>
    </tr>
    @foreach($rounds as $round)
    <tr>
        
        <td>  {{$round->roundNo}}</td>
        <td>  {{optional($round->tournament)->name}}</td>
        <td>  {{$round->gender}}</td>
        <td>  {{$round->date}}</td>
        <td>
            @if($loop->last)
            <a href="{{url('pair')}}?id={{$round->id}}" class="btn">Add Score</a>
            @endif
        </td>
    </tr>
    @endforeach
    <tr>
    
    </tr>
    <tr>
        
    <td>
        <form action= "{{route('round.create')}}" method = "get">
            <input type ="Submit" value = "Add Round" />
        </form>
    </td>
    <td>
        <form action= "{{URL('clearRound')}}" method = "post">
            {{csrf_field()}}
            <input type ="Submit" value = "Clear All" class="btn btn-sm btn-primary">
          </form>
        </td>
    </tr>
    <div>
        
        </div>
@if($errors->any())
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <p>You should enter the results for the existing round.</p>
    </div>
@endif
@endsection