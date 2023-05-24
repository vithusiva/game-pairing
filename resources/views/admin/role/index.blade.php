@extends('admin.template')
@push('css')
{!!datatableSource('css')!!}
<link rel="stylesheet" href="/back/jquery-confirm-master/dist/jquery-confirm.min.css">
@endpush

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
        <h4>Role</h4>
        <p class="mg-b-0">List of role</p>
    </div>
     @can('add_role')
    <div class="float-right-force">
        <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#roleModal"> <i class="glyphicon glyphicon-plus"></i> New</a>
    </div>
    @endcan
</div><!-- d-flex -->

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('role.index') }}">role</a>
        <span class="breadcrumb-item active">List</span>
    </nav>
</div><!-- br-pageheader -->


<div class="br-section-wrapper" style="padding:10px">
<div class="table-wrapper table-responsive">
    <table datatable  class="table display nowrap customer-table" style="font-size:12px">
        <thead>
            <tr>
                <th>Role</th>
                <th>Guard</th>
                @can('edit_role')
                <th>Action</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->guard_name}}</td>
                    @can('edit_role')
                    <td>
                        <a href="{{route('role.edit',$role)}}" class="btn btn-outline-primary btn-icon rounded-circle">
                            <div><i class="fa fa-pencil"></i></div>
                        </a>
                    </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
  
    </table>
  </div><!-- table-wrapper -->
</div>


  <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
        <div class="modal-dialog" role="document">
            {!! Form::open(['method' => 'post']) !!}

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!-- name Form Input -->
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <!-- Submit Form Button -->
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@push('script')
{!!datatableSource('js')!!}
<script src="/back/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
<script>
  $(document).ready(function(){
    $('.role-table').DataTable();
  });
</script>
@endpush

@stop



