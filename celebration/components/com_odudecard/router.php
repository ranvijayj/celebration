<?php
//error_reporting(0);
function odudecardBuildRoute(&$query)
{
       $segments = array();

	  
       if( isset($query['controller']) )
       {
                $segments[] = $query['controller'];
                unset( $query['controller'] );
       };
          if( isset($query['view']) )
       {
                $segments[] = $query['view'];
                unset( $query['view'] );
       };

	   if(isset( $query['cate'] ))
       {
                $segments[] = $query['cate'];
                unset( $query['cate'] );
       };
	     if( isset($query['id']) )
       {
                $segments[] = $query['id'];
                unset( $query['id'] );
       };
	       if( isset($query['notify']) )
       {
                $segments[] = $query['notify'];
                unset( $query['notify'] );
       };
	    if( isset($query['xid']) )
       {
                $segments[] = $query['xid'];
                unset( $query['xid'] );
       };

       //unset( $query['view'] );
       return $segments;
}


function odudecardParseRoute($segments)
{
       $vars = array();
	   
       // Count segments
       $count = count( $segments );
if($segments[0]=='odudecardlist')
{
   $cate   = explode( ':', $segments[$count-1] );
   $vars['controller'] = 'odudecardlist';
   $vars['cate']   = (int) $cate[0];
   

}
else if($segments[0]=='odudecardmylist')
{
   $vars['controller'] = 'odudecardmylist';
    
    if(isset($segments[1]))
    $vars['id']   =  $segments[1];
   

}


else if($segments[0]=='odudecardshow')
{
   $cate   = explode( ':', $segments[$count-2] );
   $vars['cate']   = (int) $cate[0];
   $vars['controller'] = 'odudecardshow';
   $id   = explode( ':', $segments[$count-1] );
   $vars['id']   = (int) $id[0];

}
else if($segments[0]=='odudecardcreate')
{
   $vars['cate']   = $segments[1];
   $vars['controller'] = 'odudecardcreate';
   
  
}

else if($segments[0]=='odudecardpick')
{
   $cate   = explode( ':', $segments[$count-3] );
   $vars['cate']   = (int) $cate[0];
   $vars['controller'] = 'odudecardpick';
   $xid   = explode( ':', $segments[$count-1] );
   $vars['xid']   = (int) $xid[0];
   $notify   = explode( ':', $segments[$count-2] );
   $vars['notify']   = $notify[0];


}
else if($segments[0]=='facebook')
{

   $vars['cate'] = $segments[1];
   $vars['view'] = 'facebook';
    $vars['format'] = 'raw';
    if(isset($segments[2]))
    $vars['id']=$segments[2];



}
else if($segments[0]=='odudecardpre')
{
 $vars['controller'] = 'odudecardpre';
}
else if($segments[0]=='odudecardsend')
{
 $vars['controller'] = 'odudecardsend';
}

else
{
   $cate   = explode( ':', $segments[$count-1] );
   $vars['cate']   = (int) $cate[0];
	
}
//print_r($segments);
//print_r($vars);
return $vars;


}



?>
