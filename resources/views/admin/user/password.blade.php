@extends('admin.template')
@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
    <h4>Password Reset</h4>
        <p class="mg-b-0">{{$user->name}}</p>
    </div>
</div><!-- d-flex -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('user.index')}}">user</a>
        <span class="breadcrumb-item active">Reset Password</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebodys">
    @include('admin.inc.info')
    <div class="br-section-wrapper">
        <div class="form-layout">
        {{Form::model($user,['route'=>'password.update'])}}
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="name" class="control-label">Old Password</label>
                        <input id="name" type="password" class="form-control" name="old_password" required autofocus>

                        @if ($errors->has('old_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('old_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label for="name" class="control-label">New Password</label>
                        <input id="name" type="password" class="form-control" name="password" required autofocus>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label for="name" class="control-label">Confirm Password</label>
                        <input id="name" type="password" class="form-control" name="password_confirmation" required autofocus>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            </div>

        <div class="form-layout-footer pull-right">
            <a class="btn btn-secondary" href="{{ route('dashboard.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
            <button class="btn btn-primary">Reset</button>
        </div><!-- form-layout-footer -->
    {{Form::close()}}
</div>


</div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
@stop

