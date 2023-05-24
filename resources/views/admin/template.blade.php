<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="Chess Web">

    <title>Administrator</title>

    <!-- vendor css -->
    <link href="/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/admin/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="/admin/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="/admin/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="/admin/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="/admin/lib/jquery-confirm/jquery-confirm.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/lib/daterangepicker/daterangepicker.min.css">
    
    <link rel="stylesheet" type="text/css" href="/admin/lib/fancybox/jquery.fancybox.css">
    
    <link href="/admin/css/custom.css" rel="stylesheet">
    {!!datatableSource('css')!!}


    @stack('css')
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/admin/css/myadmin.css">
    <link rel="stylesheet" href="/admin/css/myadmin.oreo.css">

    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="/admin/lib/jquery/jquery.js"></script>
      
  </head>

  <body class="collapsed-menu-dd">
    <div class="preloader"></div>

    
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><i>Outdoor Game Pairing</i></a></div>
    
        @include('admin.inc.nav')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
        @include('admin.inc.top-nav')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
        @include('admin.inc.right-side-nav')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel" id="wrapper">
    
        @yield('content')
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script>
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });

      
      
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
    <script src="/admin/lib/popper.js/popper.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.js"></script>
   
    <script src="/admin/lib/moment/moment.js"></script>
    <script src="/admin/lib/jquery-ui/jquery-ui.js"></script>
    <script src="/admin/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="/admin/lib/peity/jquery.peity.js"></script>
    <script src="/admin/lib/d3/d3.js"></script>
    <script src="/admin/lib/rickshaw/rickshaw.min.js"></script>
    <script src="/admin/lib/Flot/jquery.flot.js"></script>
    <script src="/admin/lib/Flot/jquery.flot.resize.js"></script>
    <script src="/admin/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="/admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="/admin/lib/echarts/echarts.min.js"></script>
    <script src="/admin/lib/select2/js/select2.full.min.js"></script>
    <script src="/admin/lib/toastr/toastr.min.js"></script>    
    <script src="/admin/lib/jquery-confirm/jquery-confirm.min.js"></script>

    <script src="/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="/admin/js/bracket.js"></script>

    <script src="/admin/lib/daterangepicker/knockout-min.js" type="text/javascript"></script>
    <script src="/admin/lib/daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/admin/lib/fancybox/jquery.fancybox.js"></script>
    <script src="/admin/lib/ckeditor/ckeditor.js"></script>
    {!!datatableSource('js')!!}
    <script src="/admin/js/common.js?v=2.3"></script>
    @stack('script')
    
    


  </body>
</html>
