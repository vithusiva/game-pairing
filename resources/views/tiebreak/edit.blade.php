@extends('admin.template')
@section('content')

<div class="container my-5">

    <h3> Edit Tie Break</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="{{route('tiebreak.update',$tie->id)}}" method="POST" class="was-validated">
                <input type = "hidden" name = "_method" value = "put">
    
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8">
                            <label for="tiebreak_name" class="col-form-label">Tie break Name</label>
                            <input type="text" field = "tiebreak_name" name="tiebreak_name" id="tiebreak_name" value="{{$tie->tiebreak_name}}" class="form-control" required>
                            <span if="fields.hasErrors('tiebreak_name')" errors="tiebreak_name" class="text-danger"></span>
                    </div>    
                    <div class="col-md-6">
                            <input type = "submit" value ="Update">
                    </div>               
                </form>
                   
            </div>
        </div>
    </div>
</div>

@endsection