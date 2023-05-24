@extends('admin.template')
@section('content')

<div class="container my-5">
    <h3> Edit Tournament</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
           
    <form action="{{route('tournament.update',$tournament->id)}}" method="post">
        <input type = "hidden" name = "_method" value = "put">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-8">
                <label for="name" class="col-form-label">Tournament Name</label>
                <input type="text"  name = "name" id="name" value="{{$tournament->name}}" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label for="type" class="col-form-label">Tournament Type</label>
                <select field="type" class="form-control" name = "type" id="type" required>
                    @foreach($tournamenttypes as $tournamenttype)
                        <option value="{{$tournamenttype->id}}">{{$tournamenttype->typename}}</option>
                    @endforeach
                </select>
            </div>
            
            
            <div class="form-group col-md-8">
                <label for="startDate" class="col-form-label">Start Date</label>
                <input type="date" name="startDate" id="startDate" value="{{$tournament->startDate}}" class="form-control {{ $errors->has('startDate') ? 'is-invalid' : '' }}">
                @if($errors->has('startDate'))
                    <span class="has-error">{{ $errors->first('startDate') }}</span>
                @endif
            </div>
                        
            <div class="form-group col-md-8">
                <label for="endDate" class="col-form-label">End Date</label>
                <input type="date" name = "endDate" id="endDate" value="{{$tournament->endDate}}" class="form-control">
            </div>
            <div class="form-group col-md-8">
                <label for="tiebreak_id" class="col-form-label">Tiebreak</label>
                <select field="tiebreak_id" class="form-control" name = "tiebreak_id" id="tiebreak_id">
                    @foreach($tiebreaks as $tiebreak)
                        <option value="{{$tiebreak->id}}">{{$tiebreak->tiebreak_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <a href = "{{route('tournament.index')}}" class="btn btn-sm btn-info">Back</a>
            </div>
            <div class="col-md-6">
                <input type = "submit" value ="Update Tournament">
            </div>
            <div class="form-group col-md-8"></div>
    </form>
    </div>
        </div>
    </div>
</div>
@endsection