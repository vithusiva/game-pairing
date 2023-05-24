@extends('admin.template')
@section('content')

<div class="pd-l-60 row row-sm mg-t-20 wd-1200 ht-650">
            <div class="col-lg-9">
              <div class="card ht-100p shadow-base widget-9">
                <div class="row no-gutters  ht-1000 wd-900">
                  <div class="col-lg-7 ht-650">
                    <img src="/admin/img/profile.jpg" class="img-fit-cover rounded-left" alt="">
                  </div><!-- col-7 -->
                  <div class="col-lg-5 ht-650 wd-400">
                    <div class="pd-x-20 pd-y-75 ">
                        @foreach($users as $user)
                    <span class="tx-11 tx-uppercase tx-gray-600 tx-mont tx-semibold d-block mg-b-5">The Arbiter</span>
                      <h4 class="tx-inverse tx-normal tx-roboto mg-b-5">{{$user->name}}</h4>
                      <p class="tx-12">
                        <a href="#" class="mg-r-10"></a>
                        <span class="mg-r-10"></span>
                        <span></span>
                      </p>

                      <div class="list-group list-group-flush mg-t-20">
                        <div class="list-group-item">
                          <div class="tx-13 tx-inverse">
                            
                            <b>Email ID : </b>{{$user->email}}
                          </div>
                          <span class="wt-time"></span>
                        </div><!-- list-group-item -->
                    </div>
                   @endforeach
                      </div><!-- list-group -->
                    </div><!-- pd-30 -->
                  </div><!-- col-5 -->
                </div><!-- row -->
              </div><!-- card -->
            </div><!-- col-9 -->
            
   
@stop