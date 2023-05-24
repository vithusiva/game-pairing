@extends('admin.template')
@push('css')
{!!datatableSource('css')!!}
<link rel="stylesheet" href="/admin/lib/jquery-confirm/jquery-confirm.min.css">
@endpush

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
        <h4>Permission</h4>
        <p class="mg-b-0">List of permission</p>
    </div>
    <div class="float-right-force">
        @can('add_permission')
            <a href="{{ route('permission.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> New Permission</a>
        @endcan
    </div>
</div><!-- d-flex -->

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('permission.index') }}">Permission</a>
        <span class="breadcrumb-item active">List</span>
    </nav>
</div><!-- br-pageheader -->


<div class="br-section-wrapper" style="padding:10px">
<div class="table-wrapper table-responsive">
    <table datatable  class="table display nowrap customer-table" style="font-size:12px">
      <thead>
          <tr>
            <th>Module</th>
            <th>Permission</th>
            <th>name</th>
            @can('edit_permission')
            <th>Action</th>
            @endcan
        </tr>
      </thead>
      <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td>{{$permission->module->name}}</td>
                <td>{{$permission->display_name}}</td>
                <td>{{$permission->name}}</td>
                 @can('edit_permission')
                <td>
                    <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="{{route('permission.destroy',$permission->id)}}" class="btn btn-sm btn-warning ajax-delete" data-set="tr"><i class="fa fa-trash"></i></a>
                </td>
                @endcan
            </tr>
        @endforeach
    
      </tbody>
  
    </table>
  </div><!-- table-wrapper -->
</div>



@push('script')
{!!datatableSource('js')!!}
<script src="/admin/lib/jquery-confirm/jquery-confirm.min.js"></script>
<script>
  $(document).ready(function(){
    $('.permission-table').DataTable();
  });
</script>
@endpush

@stop

