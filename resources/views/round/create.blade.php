@extends('admin.template')
@section('content')

<div class="container my-5">



@if($errors->any())
    <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <!-- <p>Date must be greater than or equal to current date.</p> -->

    @if ($errors->has('roundError'))
        <p>{{$errors -> first('roundError')}}</p>
    @else
        <p>{{$errors -> first('date')}}</p>
    @endif

    </div>
@endif
    <h3> Add Round</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="{{route('round.store')}}" method="POST" class="was-validated">
                {{csrf_field()}}
                    <div class="row">
                    <div class="form-group col-md-8">
                            <label for="roundNo" class="col-form-label">Round Level</label>
                            <input type="number" field = "roundNo" name="roundNo" id="roundNo"  class="form-control" required>
                            <span if="fields.hasErrors('roundNo')" errors="roundNo" class="text-danger"></span>
                        </div>
                    <div class="form-group col-md-8">
                            <label for="tournament_id" class="col-form-label">Tournament ID</label>
                            <select field="tournament_id" class="form-control" name = "tournament_id" id="tournament_id" required>
                                @foreach($tournaments as $tournament)
                                    <option value="{{$tournament->id}}">{{$tournament->name}} | {{optional($tournament->tournamentType)->typename}}</option>
                                @endforeach
                            </select>
                            <span if="fields.hasErrors('tournament_id')" errors="tournament_id" class="text-danger"></span>
                        </div>
                        <div class="form-group col-md-8" >
                            <label class="col-form-label">Gender</label> &nbsp; &nbsp; &nbsp;
                            <input type="radio"   name ="gender" id="Male" value="Male" required> <label>Male</label>&nbsp;&nbsp;&nbsp;
                            <input type="radio"   name ="gender" id="Female" value="Female" required checked> <label>Female</label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group col-md-8">
                            <label for="date" class="col-form-label" required>Date</label>
                            <input type="date" field = "date" name="date" id="date"  class="form-control" required>
                            <span if="fields.hasErrors('date')" errors="date" class="text-danger"></span>
                        </div>
                        <div class="col-md-6">
                            <input type = "submit" value ="Add Round">
                        </div>

                        <div class="form-group col-md-8"></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection