@extends('admin.template')
@section('content')

<h3> Add Team/Player</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="{{route('player.store')}}" method="POST" class="was-validated">
                {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label for="namewithInitial" class="col-form-label">Team/Player Name</label>
                            <input type="text" field="namewithInitial" class="form-control" name = "namewithInitial" id="namewithInitial" placeholder="Name with Initial or Team Name" required>
                            <span if="fields.hasErrors('namewithInitial')" errors="namewithInitial" class="text-danger"></span>
                           
                        </div>
                        <div class="form-group col-md-8" >
                            <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                            <input type="radio"   name ="gender" id="Male" value="Male" required> <label>Male</label>&nbsp;&nbsp;&nbsp;
                            <input type="radio"   name ="gender" id="Female" value="Female" required> <label>Female</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group col-md-8">
                            <label for="insitution" class="col-form-label">Insitution</label>
                            <input type="text" field="insitution" class="form-control" name="insitution" id="insitution" placeholder="Institution" >
                            <span if="fields.hasErrors('insitution')" errors="insitution" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="tournament_id" class="col-form-label">Tournament Name</label>
                            <select field="tournament_id" class="form-control" name = "tournament_id" id="tournament_id" required>
                            @foreach($tournaments as $tournament)
                                    <option value="{{$tournament->id}}">{{$tournament->name}} | {{optional($tournament->tournamentType)->typename}}</option>
                                @endforeach
                            </select>
                            
                            <span if="fields.hasErrors('tournament_id')" errors="tournament_id" class="text-danger"></span> 
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Team/Player">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection