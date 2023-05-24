@extends('admin.template')
@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
    <h4>User</h4>
        <p class="mg-b-0">Create a new user</p>
    </div>
</div><!-- d-flex -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('user.index')}}">user</a>
    <span class="breadcrumb-item active">Create</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebodys">
<div class="br-section-wrapper">
    <div class="form-layout">
        {{Form::open(['route'=>['user.store'],'class'=>'user'])}}
            @include('admin.user.form')
            <div class="form-layout-footer pull-right">
                <a class="btn btn-secondary" href="{{ route('user.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
                <button class="btn btn-primary">Save</button>
            </div><!-- form-layout-footer -->
        {{Form::close()}}
    </div>


</div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
@stop

