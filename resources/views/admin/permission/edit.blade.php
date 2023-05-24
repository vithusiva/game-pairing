@extends('admin.template')
@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
    <h4>Permission - {{$permission->name}}</h4>
        <p class="mg-b-0">Edit permission</p>
    </div>
</div><!-- d-flex -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('permission.index')}}">Permission</a>
    <span class="breadcrumb-item active">{{$permission->name}}</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebodys">
<div class="br-section-wrapper">
    <div class="form-layout">
    {{Form::model($permission,['route'=>['permission.update',$permission],'class'=>'permission','method'=>'patch'])}}
        @include('admin.permission.form')
        <div class="form-layout-footer pull-right">
            <a class="btn btn-secondary" href="{{ route('permission.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
            <button class="btn btn-primary">Update</button>
        </div><!-- form-layout-footer -->
    {{Form::close()}}
</div>


</div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
@stop

