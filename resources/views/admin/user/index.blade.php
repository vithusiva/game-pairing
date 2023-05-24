@extends('admin.template')
@push('css')
{!!datatableSource('css')!!}
<link rel="stylesheet" href="/back/jquery-confirm-master/dist/jquery-confirm.min.css">
@endpush

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
        <h4>User</h4>
        <p class="mg-b-0">List of user</p>
    </div>
    <div class="float-right-force">
        @can('add_permission')
            <a href="{{ route('user.create') }}" class="btn btn-info"><i class="ion-person-add"></i> New user</a>
        @endcan
    </div>
</div><!-- d-flex -->

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('user.index') }}">user</a>
        <span class="breadcrumb-item active">List</span>
    </nav>
</div><!-- br-pageheader -->


<div class="br-section-wrapper" style="padding:10px">
<div class="table-wrapper table-responsive">
    <table datatable  class="table display nowrap customer-table" style="font-size:12px">
      <thead>
            <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Email ID</th>
            <th>Created At</th>
            @can('edit_user', 'delete_users')
                <th class="text-center">Actions</th>
            @endcan
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{$user->name}}</td>
            <td>{{ $user->roles->implode('name', ', ') }}</td>
            <td>{{$user->email}}</td>
            <td>{{ $user->created_at->toFormattedDateString() }}</td>
            @can('edit_user')
                <td>
                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-outline-primary btn-icon rounded-circle">
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



@push('script')
{!!datatableSource('js')!!}
<script src="/back/jquery-confirm-master/dist/jquery-confirm.min.js"></script>
@endpush

@stop
