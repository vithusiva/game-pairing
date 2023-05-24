  <div class="row row-sm">
    <div class="col-sm-2">
      <div class="bg-info rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Customers</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$totalCustomer}}</p>
          </div>
        </div>
        <div id="ch1" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-4 mg-sm-t-0">
      <div class="bg-purple rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20 col-sm">
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Surveys</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$totalSurvey}}</p>
            
          </div>

          <div class="mg-l-20 col-sm">
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Unique</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$uniqueSurvey}}</p>
          </div>
        </div>
        <div id="ch3" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-3 mg-xl-t-0">
      <div class="bg-teal rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Positive Responses</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$positiveResponse}}</p>
          </div>
        </div>
        <div id="ch2" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
    <div class="col-sm-3 mg-xl-t-0">
      <div class="bg-primary rounded overflow-hidden">
        <div class="pd-x-20 pd-t-20 d-flex align-items-center">
          <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Nagative Response</p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$negativeResponse}}</p>
          </div>
        </div>
        <div id="ch4" class="ht-50 tr-y-1"></div>
      </div>
    </div><!-- col-3 -->
  </div><!-- row -->

  <div class="row row-sm mg-t-20">
    <div class="col-sm">
      <div class="card bd-0 shadow-base">
        <div class="d-md-flex justify-content-between pd-25">
          <div>
            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Product feedbacks</h6>
            {{-- <p>Past 30 Days — Last Updated Oct 14, 2017</p> --}}
          </div>
         
        </div><!-- d-flex -->
        <div class="pd-l-25 pd-r-15 pd-b-25">
            {!! $product->html() !!}
            {!! $product->script() !!}
        </div>
      </div><!-- card -->
    </div><!-- col-8 -->

     <div class="col-sm">
      <div class="card bd-0 shadow-base">
        <div class="d-md-flex justify-content-between pd-25">
          <div>
            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Service feedbacks</h6>
            {{-- <p>Past 30 Days — Last Updated Oct 14, 2017</p> --}}
          </div>
        </div><!-- d-flex -->

        <div class="pd-l-25 pd-r-15 pd-b-25">
          {!! $service->html() !!}
          {!! $service->script() !!}
        </div>
      </div><!-- card -->
    </div><!-- col-8 -->
    
  </div><!-- row -->

   <div class="row row-sm mg-t-20">
     <div class="col-sm">
      <div class="card bd-0 shadow-base">
        <div class="d-md-flex justify-content-between pd-25">
          <div>
            <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Service feedbacks</h6>
          </div>
          <div class="wd-200">

            {{Form::open(['route'=>'dashboard','method'=>'get','class'=>'filter-form'])}}

              @foreach($_GET as $key => $value)
                @if($key != 'range')
                {{Form::hidden($key,$value)}}
                @endif
              @endforeach
              @php $range = isset($_GET['range']) ? $_GET['range'] : '' @endphp
              
              <select class="form-control" data-placeholder="Choose location" name="range" onchange="$(this).closest('form').submit()">
                <option value="">Please Select</option>
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
              </select>
            {{Form::close()}}
          </div>
        </div><!-- d-flex -->

        <div class="pd-l-25 pd-r-15 pd-b-25">
           <div id="service_survey" class="bar-chart">
             {!! $con_chart->html() !!}

            {!! $con_chart->script() !!}
           </div>
        </div>
      </div><!-- card -->
    </div><!-- col-8 -->
    
  </div><!-- row -->