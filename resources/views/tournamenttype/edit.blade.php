@extends('admin.template')
@section('content')

<div class="container my-5">

    <h3> Edit Tournament Type</h3>
    <div class="card">
        <div class="card-body">
            <div class="col-md-10">
                <form action="{{route('tournamenttype.update',$tie->id)}}" method="POST" class="was-validated">
                <input type = "hidden" name = "_method" value = "put">
    
                {{csrf_field()}}
                <div class="row">
                    <div class="form-group col-md-8">
                            <label for="typename" class="col-form-label">Tournament Type</label>
                            <input type="text" field = "typename" name="typename" id="typename" value="{{$tie->typename}}" class="form-control" required>
                            <span if="fields.hasErrors('typename')" errors="typename" class="text-danger"></span>
                    </div>   
                    <div class="col-md-6">
                    <a href = "{{route('tournamenttype.index')}}" class="btn btn-sm btn-info">Back</a>
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