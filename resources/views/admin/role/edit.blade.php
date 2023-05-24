@extends('admin.template')
@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-people"></i>
    <div>
    <h4>Role - {{$role->name}}</h4>
        <p class="mg-b-0">Edit role</p>
    </div>
</div><!-- d-flex -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="/">Home</a>
        <a class="breadcrumb-item" href="{{ route('role.index')}}">role</a>
    <span class="breadcrumb-item active">{{$role->name}}</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebodys">
<div class="br-section-wrapper">
    <div class="form-layout">
  {!! Form::model($role, ['method' => 'PUT', 'route' => ['role.update',  $role->id ]]) !!}
  <div id="accordion6" class="accordion accordion-head-colored accordion-info mg-t-20" role="tablist" aria-multiselectable="true">
           

    @foreach($modules as $module)

        <div class="card">
            <div class="card-header" role="tab" id="">
                  <h6 class="mg-b-0">
                      <a class="collapsed transition" data-toggle="collapse" data-parent="#accordion6" href="#my-collapse-{{$module->id}}" aria-expanded="false" aria-controls="collapseThree6">
                    {{$module->name}}
                </a>
            </h6>
        </div>
            <div id="my-collapse-{{$module->id}}" class="collapse" role="tabpanel" aria-labelledby="">
                <div class="card-block pd-20">
                    <div class="row">
                        @foreach($module->permissions as $perm)
                        
                        <?php
                                $per_found = null;
                                if( isset($role) ) {
                                    $per_found = $role->hasPermissionTo($perm->name);
                                }

                                if( isset($user)) {
                                    $per_found = $user->hasDirectPermission($perm->name);
                                }
                            ?>

                            <div class="col-sm">

                                <label class="ckbox">
                                     {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : []) !!}
                                    <span> {{ $perm->display_name }}</span>
                                </label>
                                
                            </div>
                        @endforeach
                        </div>
                </div>
            </div><!-- collapse -->
        </div><!-- card -->

        @endforeach
        
        </div><!-- accordion -->
        
    <br>
    <div class="form-layout-footer pull-right">
    <a class="btn btn-secondary" href="{{ route('role.index') }}"> <i class="ion-ios-arrow-thin-left"></i> Back</a>
        @can('edit_role')
        <button class="btn btn-primary">Update</button>
        @endcan
    </div><!-- form-layout-footer -->
    {{Form::close()}}
</div>


</div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->
@stop
