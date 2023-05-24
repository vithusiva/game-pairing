<?php
function systemValues($type='employee_type')
{
   $values = [
        'title'=>[
            'Mr'=>'Mr',
            'Ms'=>'Ms',
            'Mrs'=>'Mrs',
            'Dr'=>'Dr'
        ],
        'menu_location'=>[
            'header'=>'Header',
            'footerI'=>'Footer col one',
            'footerII'=>'Footer col two',
            'footerIII'=>'Footer col three',
        ],
        'project_category'=>[
            'ongoing'=> 'Ongoing Project',
            'completed'=> 'Completed Project',
        ],
        'social_media'=>[
            'facebook'=>'Facebook',
            'google-plus'=>'Google Plus',
            'linkedin'=>'LinkedIn',
            'youtube'=>'YouTube',
            'twitter'=>'Twitter'
        ],
        'location'=>['Ajax','Brampton','Markham','Mississauga','Pickering','Scarborough']
   ];
   return $values[$type];
}

function userID()
{
    if(!auth()->guest()){
        return auth()->user()->id;
    }
    return 0;
}

function frontDir()
{
    return 'front';
}

function frontAsset($file)
{
    return '/'.frontDir().'/'.$file;
}

function frontTemplate()
{
    return frontDir().'.template';
}

function frontInc($file)
{
    return frontDir().'.shared.'.$file;
}

function siteLogo()
{
    return '';
}


function isActiveRoute($route,$output='active')
 {      
    $resorce = [$route.'.index',$route.'.create',$route.'.edit',$route.'.show'];

    if (($pos = strpos($route, ".")) !== FALSE) { 
        $resorce = [$route];
    }
    $current = Route::currentRouteName();

    if (in_array($current,$resorce)) {
         return $output;
    }
 }

function datatableSource($value='css')
{
  $sources = [
    "css"=>'
        <link href="/admin/lib/datatables/jquery.dataTables.css" rel="stylesheet">',

    "js"=>'
      <script src="/admin/lib/datatables/jquery.dataTables.js" type="text/javascript"></script>
      <script src="/admin/lib/datatables-responsive/dataTables.responsive.js" type="text/javascript"></script>'
  ];

  return $sources[$value];
}


function extract_numbers($string,$stat = true)
{
   $numbers = preg_replace('/[^0-9]/', '', $string);
   $letters = preg_replace('/[^a-zA-Z]/', '', $string);
   if ($stat) {
      return $numbers;
   }
   return $letters;
}

function uniqueSeries()
{
   $t = microtime(true);
   $micro = sprintf("%06d",($t - floor($t)) * 1000000);
   $d = new DateTime(date('Y-m-d H:i:s.'.$micro, $t));
   $series = substr(csrf_token(),0,10).$d->format("YmdHisu");
   return $series;
}


function strDates($range)
{
    return  date('Y-m-d',strtotime($range));
}


function annual($r='start')
{
  $d = [
      'start'=>date('Y-01-01'),
      'end'=>date('Y-12-31')
  ];
  return $d[$r];
}

function all($r='start')
{
  $d = [
      'start'=>'2010-01-01',
      'end'=>date('Y-m-d')
  ];
  return $d[$r];
}

function todayR($r='start')
{
  $d = [
      'start'=>stoday(),
      'end'=>stoday()
  ];
  return $d[$r];
}

function stoday()
{
    return  strDates('today');
}

function thisMonth($r='start')
{
    $d = [
        'start'=>strDates('first day of this month'),
        'end'=>stoday()
    ];
    return $d[$r];
}

function lastMonth($r='start')
{
    $d = [
        'start'=>strDates('first day of last month'),
        'end'=>strDates('last day of last month')
    ];
    return $d[$r];
}

function thisWeek($r='start')
{
    $d = [
        'start'=>strDates('monday this week'),
        'end'=>strDates('sunday this week')
    ];
    return $d[$r];
}

function lastWeek($r='start')
{
    $d = [
        'start'=>strDates('last week monday'),
        'end'=>strDates('last week sunday')
    ];
    return $d[$r];
}


function rangeMonth($datestr,$r='start') {
    date_default_timezone_set(date_default_timezone_get());
    $dt = strtotime($datestr);
    $res['start'] = date('Y-m-d', strtotime('first day of this month', $dt));
    $res['end'] = date('Y-m-d', strtotime('last day of this month', $dt));
    return $res[$r];
}

function makeSlug($string, $separator = '-')
{
   $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
   $special_cases = array( '&' => 'and', "'" => '');
   $string = mb_strtolower( trim( $string ), 'UTF-8' );
   $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
   $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
   // $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
   $string = str_replace(" ", "$separator", $string);
   $string = preg_replace("/[$separator]+/u", "$separator", $string);
   
   return $string; 
} 


function get_extension($file) {
    $tmp = explode('.', $file);
    $file_extension = end($tmp);
    return $file_extension;
}

function isImage($filename)
{
    $image_ext = ['jpg','png','jpeg','gif'];
    $ext = get_extension($filename);
    return in_array($ext,$image_ext) ? true : false ;
}

function booleanHtml($sta = true)
{
    if($sta){
        return '<i class="fa fa-check text-success"></i>';
    }
    return '<i class="fa fa-times text-danger"></i>';
}

function get_file_without_base($file){
    return str_replace(url('/').'/','',$file);
}