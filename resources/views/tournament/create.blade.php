@extends('admin.template')
@section('content')
<div class="container my-5">

@if($errors->any())
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <p>End date must be greater than or equal to start date.</p>
    </div>
@endif

    <h3>Add Tournament</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="{{route('tournament.store')}}" method="POST" class="was-validated">
                {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="name" class="col-form-label">Tournament Name</label>
                            <input type="text" field = "name" class="form-control" name = "name" id="name" placeholder="Tournament name" required>
                            <span if="fields.hasErrors('name')" errors="name" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="type" class="col-form-label">Tournament Type</label>
                            <select field="type" class="form-control" name = "type" id="type" required>
                                @foreach($tournamenttypes as $tournamenttype)
                                    <option value="{{$tournamenttype->id}}">{{$tournamenttype->typename}}</option>
                                @endforeach
                            </select>
                            <span if="fields.hasErrors('type')" errors="type" class="text-danger"></span>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="startDate" class="col-form-label">Start Date</label>
                            <input type="date" field = "startDate" name="startDate" id="startDate"  class="form-control" required>
                            <!-- <span if="fields.hasErrors('startDate')" errors="startDate" class="text-danger"></span> -->
                        </div>
                        
                        <div class="form-group col-md-8">
                            <label for="endDate" class="col-form-label">End Date</label>
                            <input type="date" field ="endDate" name = "endDate" id="endDate" class="form-control" required>
                            <!-- <span if="fields.hasErrors('endDate')" errors="endDate" class="text-danger"></span> -->
                        </div>

                        <div class="form-group col-md-8">
                            <label for="tiebreak_id" class="col-form-label">Tiebreak</label>
                            <select field="tiebreak_id" class="form-control" name = "tiebreak_id" id="tiebreak_id" required>
                                @foreach($tiebreaks as $tiebreak)
                                    <option value="{{$tiebreak->id}}">{{$tiebreak->tiebreak_name}}</option>
                                @endforeach
                            </select>
                            <span if="fields.hasErrors('tiebreak_id')" errors="tiebreak_id" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Tournament">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 