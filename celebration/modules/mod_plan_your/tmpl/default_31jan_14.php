<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_search
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

function hotellist($what="travel-agents",$where)
{
  $url='http://microcommunity.getit.in/ypxmldata.aspx?';        
   $base=basename($_SERVER['PHP_SELF']);
   if($what)
   {
$url.='&what='.urlencode($what);
}   
if($where)
{
$url.='&where='.urlencode($where);
}
    /* switch ($base)
            {
            case 'plan-your-trip':   
                $what='Hotels';
                break;
          
            }*/
            
         ///  echo $what;
             
/*            $pageno=JRequest::getVar('pageno',0);
            if(isset($what)):
                $url.='what='.urlencode($what);
            endif;
            $cat=JRequest::getVar('cat');
            if(isset($cat)){
                $url.='&cat='.urlencode($cat);
                //$pageno=0;
            }
            $subCat=JRequest::getVar('subcat');
            if(isset($subCat)){
                $url.='&subCat='.urlencode($subCat);
                //$pageno=0;
            }
            echo $where=JRequest::getVar('dest');
			if($where=="")
			{
			echo $where="Kerala";
			
			}
            if(isset($where)){
                $url.='&where='.urlencode($where);
                //$pageno=0;
              
            }*/
            // echo  $pageno;
		  $pageno=JRequest::getVar('pageno');
            $url.='&pageno='.$pageno;
            
            echo '<span style="display: none;">url: '.$url.'</span>';
            
            $action = "My.Soap.Action";
$mySOAP = <<<EOD
                    <?xml version="1.0" encoding="utf-8" ?>
                    <soap:Envelope>
                    <!-- SOAP goes here, irrelevant so wont bother writing it out -->
                    </soap:Envelope>
EOD;

                $headers = array(
                    'Content-Type: text/xml; charset=utf-8',
                    'Content-Length: '.strlen($mySOAP),
                    'SOAPAction: '.$action
                );

                // Build the cURL session
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                // Send the request and check the response
                if (($result = curl_exec($ch)) === FALSE) {
                    die('cURL error: '.curl_error($ch)."<br />\n");
                } else {
                    //echo "Success!<br />\n";
                }
                curl_close($ch);

                // Handle the response from a successful request
                $xmlobj = @simplexml_load_string($result);

                if($xmlobj->success):
                    $wsResult=$xmlobj->results;
                   
                    endif;
					?>
					<?php
						 
					 foreach($wsResult as $val){
                        foreach($val as $value)
                        {
                            $comp[]=$value;
                        }
                    }
					if($_REQUEST['cid']=="")
						{
					  foreach($comp as $val){
////                                  print_r($item);
////                                  var_dump(get_object_vars($val));
//                                  die;
//                                 $items[(string) $item->key] = (string) $item;
                                  $rowt=array('companyid'=>(string)$val->companyid,
                                      'companyname'=>(string)$val->companyname,
                                    'businessemail'=>(string)$val->businessemail,
                                      'businesstype'=>(string)$val->businesstype,
                                    'category'=>(string)$val->category,
                                      'subcategory'=>(string)$val->subcategory,
                                    'address'=>(string)$val->address,
                                      'city'=>(string)$val->city,
                                      'state'=>(string)$val->state,
                                    'pincode'=>(string)$val->pincode,
                                      'latitude'=>(string)$val->latitude,
                                      'longitude'=>(string)$val->longitude,
                                    'Degreelatitude'=>(string)$val->Degreelatitude,
                                      'Degreelongitude'=>(string)$val->Degreelongitude,
                                    'zone'=>(string)$val->zone,
                                      'webste1'=>(string)$val->webste1,
                                      'phone'=>(string)$val->phone);
                                    $rows[]=(object)$rowt;	
                            }
                        
						}
						else
						{
						
						 foreach($comp as $val){
                                        if((string)$val->companyid==$_REQUEST['cid']):
                                            $rowt=array('companyid'=>(string)$val->companyid,
                                      'companyname'=>(string)$val->companyname,
                                    'businessemail'=>(string)$val->businessemail,
                                      'businesstype'=>(string)$val->businesstype,
                                    'category'=>(string)$val->category,
                                      'subcategory'=>(string)$val->subcategory,
                                    'address'=>(string)$val->address,
                                      'city'=>(string)$val->city,
                                      'state'=>(string)$val->state,
                                    'pincode'=>(string)$val->pincode,
                                      'latitude'=>(string)$val->latitude,
                                      'longitude'=>(string)$val->longitude,
                                    'Degreelatitude'=>(string)$val->Degreelatitude,
                                      'Degreelongitude'=>(string)$val->Degreelongitude,
                                    'zone'=>(string)$val->zone,
                                      'webste1'=>(string)$val->webste1,
                                      'phone'=>(string)$val->phone);
                                    $rows[]=(object)$rowt;	
                                    else:
                                    continue;
                                    endif;
                                }
						}
						 $Result=$rows;  
						         
					

return $Result;
}

function paget($what="travel-agents",$where)
{
  $url='http://microcommunity.getit.in/ypxmldata.aspx?';        
   $base=basename($_SERVER['PHP_SELF']);
   if($what)
   {
$url.='&what='.urlencode($what);
}   
if($where)
{
$url.='&where='.urlencode($where);
}
    /* switch ($base)
            {
            case 'plan-your-trip':   
                $what='Hotels';
                break;
          
            }*/
            
         ///  echo $what;
             
/*            $pageno=JRequest::getVar('pageno',0);
            if(isset($what)):
                $url.='what='.urlencode($what);
            endif;
            $cat=JRequest::getVar('cat');
            if(isset($cat)){
                $url.='&cat='.urlencode($cat);
                //$pageno=0;
            }
            $subCat=JRequest::getVar('subcat');
            if(isset($subCat)){
                $url.='&subCat='.urlencode($subCat);
                //$pageno=0;
            }
            echo $where=JRequest::getVar('dest');
			if($where=="")
			{
			echo $where="Kerala";
			
			}
            if(isset($where)){
                $url.='&where='.urlencode($where);
                //$pageno=0;
              
            }*/
            // echo  $pageno;
		  $pageno=JRequest::getVar('pageno');
            $url.='&pageno='.$pageno;
            
            echo '<span style="display: none;">url: '.$url.'</span>';
            
            $action = "My.Soap.Action";
$mySOAP = <<<EOD
                    <?xml version="1.0" encoding="utf-8" ?>
                    <soap:Envelope>
                    <!-- SOAP goes here, irrelevant so wont bother writing it out -->
                    </soap:Envelope>
EOD;

                $headers = array(
                    'Content-Type: text/xml; charset=utf-8',
                    'Content-Length: '.strlen($mySOAP),
                    'SOAPAction: '.$action
                );

                // Build the cURL session
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                // Send the request and check the response
                if (($result = curl_exec($ch)) === FALSE) {
                    die('cURL error: '.curl_error($ch)."<br />\n");
                } else {
                    //echo "Success!<br />\n";
                }
                curl_close($ch);

                // Handle the response from a successful request
                $xmlobj = @simplexml_load_string($result);
                 $res=$xmlobj->resultcount;
              
return $res;
}
?>
<?php 
function travellist($what="travel-agents",$where)
{
  $url='http://microcommunity.getit.in/ypxmldata.aspx?';        
   $base=basename($_SERVER['PHP_SELF']);
   if($what)
   {
$url.='&what='.urlencode($what);
}   
if($where)
{
$url.='&where='.urlencode($where);
}
    /* switch ($base)
            {
            case 'plan-your-trip':   
                $what='Hotels';
                break;
          
            }*/
            
         ///  echo $what;
             
/*            $pageno=JRequest::getVar('pageno',0);
            if(isset($what)):
                $url.='what='.urlencode($what);
            endif;
            $cat=JRequest::getVar('cat');
            if(isset($cat)){
                $url.='&cat='.urlencode($cat);
                //$pageno=0;
            }
            $subCat=JRequest::getVar('subcat');
            if(isset($subCat)){
                $url.='&subCat='.urlencode($subCat);
                //$pageno=0;
            }
            echo $where=JRequest::getVar('dest');
			if($where=="")
			{
			echo $where="Kerala";
			
			}
            if(isset($where)){
                $url.='&where='.urlencode($where);
                //$pageno=0;
              
            }*/
            // echo  $pageno;
		  $pageno=JRequest::getVar('pageno');
            $url.='&pageno='.$pageno;
            
            echo '<span style="display: none;">url: '.$url.'</span>';
            
            $action = "My.Soap.Action";
$mySOAP = <<<EOD
                    <?xml version="1.0" encoding="utf-8" ?>
                    <soap:Envelope>
                    <!-- SOAP goes here, irrelevant so wont bother writing it out -->
                    </soap:Envelope>
EOD;

                $headers = array(
                    'Content-Type: text/xml; charset=utf-8',
                    'Content-Length: '.strlen($mySOAP),
                    'SOAPAction: '.$action
                );

                // Build the cURL session
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                // Send the request and check the response
                if (($result = curl_exec($ch)) === FALSE) {
                    die('cURL error: '.curl_error($ch)."<br />\n");
                } else {
                    //echo "Success!<br />\n";
                }
                curl_close($ch);

                // Handle the response from a successful request
                $xmlobj = @simplexml_load_string($result);
 
  $cities=$xmlobj->cities;
                        $wsWhere=array();
                        foreach ($cities->City as $city){
                        
                            $wsWhere[]= (string)$city;
                            $wsWheres=(object)$wsWhere;
                        }
                      
 
 
    return $wsWheres;				
				
}
 ?>
					
			
					<style type="text/css">

    /******************************************Travel starts****************************************************/



#cboxOverlay,#cboxOverla,#cboxOver,#over_relay{background:#000; opacity: 0.7; position: fixed;z-index: 1004;top: 0px;bottom: 0px;left: 0px;right: 0px;}
#sms_pop, #sms_pop1, #sms_pop2, #show_email{left: 28%;  position: fixed;  text-align: left; top: 150px; z-index: 1000000;}#pop_up{ margin:50px; padding:0px; width:402px; background:#fafbd9; float:left;}
#sm_top{ margin:0px 8px 0 0px; padding:0px; width:402px; float:left; background: url("../images/pp_line.png") repeat-x scroll 0 0 transparent; height: 54px; }
#sms_cont{ margin:0px; padding:14px 0 0 10px; float:left; font-size:20px; color:#000; font-weight:bold; float:left; width:205px;}
#gt_logo{ margin:10px 8px 0 8px; padding:0px; float:left;}
#pop_form{ padding:0px; width:360px; margin-top:20px; float:left; }
#pop_email{ margin:0px; padding:2px 0 0 0px;  width:62px; float:left; text-align:right; font-size:12px; font-family:Tahoma, Geneva, sans-serif}
#pop_input{ margin:0px; padding:0px; float:left; width:278px;}
#pop_up_in{margin:0px 0 0 14px; padding:0px; width:278px;}
#pop_up_in_one{margin:10px 0 0 14px; padding:0px; width:278px;}
#pop_email_one{ margin:10px 0 0 0px; padding:2px 0 0 0px;  width:62px; float:left; text-align:right; font-size:12px; font-family:Tahoma, Geneva, sans-serif}
#s_end_btn{ margin:-35px 0 20px 17px; padding:0px; float:right; background: url(../media/system/images/modal/closebox.png) no-repeat center;}
#buttons{ width:250px; margin-top:10px; margin-left:80px; float:left;}
#s_submit_btn{ margin:2px 0 20px 0px; padding:0px; float:left;}

#c_lose_btn{ margin:2px 0 20px 10px; padding:0px; float:left;}
.clr{ clear:both; padding:0px; padding:0px; height:0px; display:block;}
.pop_email_input{margin:0px 0 0 14px; padding:0px; width:278px;}
.pop_phone_input{margin:10px 0 0 14px; padding:0px; width:278px;}
.pop_msgtext {
margin: 10px 0 0 14px;
padding: 0px;
width: 278px;
height: 50px;
}
#sbox-btn-close {
	position: absolute;
	width: 30px;
	height: 30px;
	right: -15px;
	top: -15px;
	background: url(../media/system/images/modal/closebox.png) no-repeat center;
	border: none;
}

/******************************************imagegallery starts**************************************************************/
</style>
<!-- css ends here--> 

<script type="text/javascript">

function ci()
    {
	  var cat=document.getElementById('dest').value;
	   window.location="http://celebration.getit.in/index.php/plan-your-trip?dest="+cat;

    }
    </script>
<script>
function ShowSms(companyname,address,city,phone){

document.forms["jos"]["sms_companyname"].value=companyname;

document.forms["jos"]["sms_address"].value=address;

document.forms["jos"]["sms_city"].value=city;

document.forms["jos"]["sms_phone"].value=phone;	

      $('#sms_pop2').css('display', 'block')
	  $('#cboxOver').css('display', 'block')
	  }
function Closesms(){
              $('#sms_pop2').css('display', 'none');
			  $('#cboxOver').css('display', 'none');
			  }
function ShowEmail(companyname,address,city,phone){

document.forms["js"]["sms_companyname2"].value=companyname;

document.forms["js"]["sms_address2"].value=address;

document.forms["js"]["sms_city2"].value=city;

document.forms["js"]["sms_phone2"].value=phone;


$('#show_email').css('display', 'block')
$('#over_relay').css('display', 'block')

}

function CloseEmail(){
$('#show_email').css('display', 'none');
$('#over_relay').css('display', 'none');
}
			  
/*$(document).ready(function(){
$('#showSmsPop2').bind('',ShowSms)
$('#showEmailPop').bind('click',ShowEmail)
});*/

</script>	
<?php 
if(isset($_POST['submit']))
{
$mess='';	

$mess  ="\n"."Company Name :".$_REQUEST['sms_companyname']."\n";

$mess .="Address:".$_REQUEST['sms_address']."\n";

$mess .="City:".$_REQUEST['sms_city']."\n";

$mess .="Phone:".$_REQUEST['sms_phone'];

$i=0;

	require_once 'getit_notifications.php';

		$objCar = new getit_notifications();
        $objGetDataKey = new SendSMSByParameters();

		//$objGetDataKey1= new SendEmail();
		$objGetDataKey->userId = 'getUser$';
		$objGetDataKey->password = 'getUser$123';
		$objGetDataKey->token = '113506789';
		$objGetDataKey->applicationId = '1';
		$objGetDataKey->vendorId = '12345';
		$objGetDataKey->phoneNo = $_POST['phone'];
		$objGetDataKey->smsBody = $_POST['message'].htmlentities($mess);

		//$objGetDataKey->providerId = 'test123';
//$objGetDataKey->strWhere = 'delhi';
		//$objGetDataKey->CategoryId=6;
       	$result_sms = $objCar->SendSMSByParameters($objGetDataKey);
		//$result1= $objCar->SendEmail($objGetDataKey1);

/*$url="http://smsservice.getit.in/GetitSMSService.asmx/SendSMS?phone=".$_POST['phone']."&mStrSmsBody=".$_POST['message']."&MethodType=GMIC111";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);  // RETURN THE CONTENTS OF THE CALL

$Rec_Data = curl_exec($ch);

curl_close($ch);*/	
$mailer =& JFactory::getMailer();
$config =& JFactory::getConfig();
$sender = array( 
    $config->getValue( 'config.mailfrom' ),
    $config->getValue( 'config.fromname' ) );
 
$mailer->setSender($sender);

$recipient=array($_POST['email']);
$mailer->addRecipient($recipient);
$body   = "Email: ".$_POST['email']."\nMobile No: ".$_POST['phone']."\nMessage:".$_POST['message'].$mess;

$mailer->setSubject('posted a sms from clebration.getit.in');
$mailer->setBody($body);

$send =& $mailer->Send();

if ( $send !== true ) {
    echo 'Error sending email';
} 

else {
     $_SESSION['msg']="Mail sent successfully!";

    
    }
} 
echo "<div style='padding-bottom:5px; font-size: 16px; font-weight: bold;'>".$_SESSION['msg']."</div>";

$_SESSION['msg']="";
?>

<?php if(isset($_POST['query']))
{
	

$mess2  ="\n"."Company Name :".$_REQUEST['sms_companyname2']."\n";

$mess2 .="Address:".$_REQUEST['sms_address2']."\n";

$mess2 .="City:".$_REQUEST['sms_city2']."\n";

$mess2 .="Phone:".$_REQUEST['sms_phone2'];

$i=0;

	require_once 'getit_notifications.php';

		$objCar = new getit_notifications();
        $objGetDataKey = new SendSMSByParameters();

		//$objGetDataKey1= new SendEmail();
		$objGetDataKey->userId = 'getUser$';
		$objGetDataKey->password = 'getUser$123';
		$objGetDataKey->token = '113506789';
		$objGetDataKey->applicationId = '1';
		$objGetDataKey->vendorId = '12345';
		$objGetDataKey->phoneNo = $_POST['mobile'];
		$objGetDataKey->smsBody = $_POST['queryy'].$mess2;

		//$objGetDataKey->providerId = 'test123';
//$objGetDataKey->strWhere = 'delhi';
		//$objGetDataKey->CategoryId=6;
       	$result_sms = $objCar->SendSMSByParameters($objGetDataKey);
		//$result1= $objCar->SendEmail($objGetDataKey1);

/*$url="http://smsservice.getit.in/GetitSMSService.asmx/SendSMS?phone=".$_POST['phone']."&mStrSmsBody=".$_POST['message']."&MethodType=GMIC111";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);  // RETURN THE CONTENTS OF THE CALL

$Rec_Data = curl_exec($ch);

curl_close($ch);*/	
$mailer =& JFactory::getMailer();
$config =& JFactory::getConfig();
$sender = array( 
    $config->getValue( 'config.mailfrom' ),
    $config->getValue( 'config.fromname' ) );
 
$mailer->setSender($sender);

$recipient=array($_POST['email']);
$mailer->addRecipient($recipient);
$body   = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMobile No: ".$_POST['mobile']."\nQuery:".$_POST['queryy'].$mess2;

$mailer->setSubject('Posted a Query from clebration.getit.in');
$mailer->setBody($body);

$send =& $mailer->Send();

if ( $send !== true ) {
    echo 'Error sending email';
} 

else {
     $_SESSION['msg']="Mail sent successfully!";

    
    }
} 
echo "<div style='padding-bottom:5px; font-size: 16px; font-weight: bold;'>".$_SESSION['msg']."</div>";

$_SESSION['msg']="";
?>

	
	<script type="text/javascript">
	

function validatesms()

{

var em=document.forms["jos"]["email"].value;

var atpos= em.indexOf("@");

var dotpos= em.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)

  {

  alert("Please enter your valid E-mail Address");
  document.forms["jos"]["email"].focus();
  return false;

  }
  
var mo=document.forms["jos"]["phone"].value;

if (mo==null || mo=="" || mo=="phone")

  {

  alert("Please enter your Mobile Number");
  document.forms["jos"]["phone"].focus();
  return false;

  }
  var mo=document.forms["jos"]["phone"].value;

if (mo.length !=10 || (isNaN(mo)) )

  {

  alert("Only numbers are allowed.\nYour Mobile Number must be 10 digits.");
   document.forms["jos"]["phone"].focus();
  return false;

  }
  
  var qr=document.forms["jos"]["message"].value;

if (qr==null || qr=="" || qr=="message")

  {

  alert("Please enter your message.");
   document.forms["jos"]["message"].focus();
  return false;

  }
  return true;

}

</script>
	
	<script type="text/javascript">
$(document).ready(function() {
	var n1 = Math.round(Math.random() * 10 + 1);
    var n2 = Math.round(Math.random() * 10 + 1);
    document.getElementById("aa").innerHTML=(n1 + " + " + n2 + " =" );
	
    $("#semail").click(function() {


var chech_status=validatesms();
if(!chech_status)
{
    
    return false;
}
if ((n1+n2) == $("#bb").val()) {
	
			

        } else {
           
           if($("#bb").val()=="")
          {          
            
			alert("Please Enter the captch code");
            $("#bb").focus();
			

		   return false;
		   }
           
           
           if((n1+n2) != $("#bb").val())
          {          
            
			alert("The captcha answer is incorrect");
           $("#bb").focus();
		   $("#bb").val("");
		   return false;
		   }
           
           
        }

        
    });
})

</script>
	
<div id="sms_pop2" style="display:none;">

<div id="pop_up">

<div id="sm_top">
<div class="cross_button">
<a style="right:35px; top:35px; cursor:pointer;" onClick="Closesms()" id="sbox-btn-close"></a></div>
<form method="post" name="jos" action="">

      <input type='hidden'  id='sms_companyname' name='sms_companyname' >
      <input type='hidden'  id='sms_address' name='sms_address' >
      <input type='hidden'  id='sms_city' name='sms_city'>
      <input type='hidden'  id='sms_phone' name='sms_phone'>

<div id="sms_cont">Send Email</div>
<div id="gt_logo"><img src="images/gt_loto.png" alt=""></div>

<div class="clr"></div>
<span style="margin-left:98px;">* All fields are mandatory. </span>
</div>
<div id="pop_form">
<div id="pop_email">Email:*</div>
<div id="pop_input"><input name="email" id="email" class="pop_email_input" type="text"></div>
<div class="clr"></div>
<div id="pop_email_one">Phone:*</div>
<div id="pop_input"><input name="phone" id="phone" class="pop_phone_input" type="text"></div>
<div class="clr"></div>
<div id="pop_email_one">Message:*</div>
<div id="pop_input"><textarea name="message" class="pop_msgtext"></textarea></div>
<div class="clr"></div>
<style>
.box1{margin: 0px 0px 0px 140px; height:40px; width:230px; }
</style>
<div class="box1" style="margin-left: 90px; margin-top: 20px;">
<div id="aa"  style="font-size:32px; float:left; font-family:'Courier New', Courier, monospace; font-style:italic;" ></div>
<div style="float:left; padding:3px 0px 0px 5px;"><input type="text" id="bb"  name="answer" style="font-size:32px; margin-top: -9px; height:32px; width:60px" maxlength="3"/></div>

</div>
<div id="buttons">
<div id="s_submit_btn"><input src="images/s_nd.png" alt="send" type="image" id="semail" name="submit"><input type="hidden" name="submit"></div>
<div id="c_lose_btn"><img src="images/c_losed.png" alt="close" type="image" onClick="Closesms()"></div>
</div>
</div>
</form>
</div>
</div>




<script type="text/javascript">

function validateEnquiry()

{

   
    var x=document.forms["js"]["name"].value;

if (x==null || x=="" || x=="Name")

  {

  alert("Please enter your Name.");
 document.forms["js"]["name"].focus();
  return false;

  }
  
  var letters = /^[A-Za-z]+$/;  
  if(!x.match(letters))  
      {
		alert('Only characters are allowed');  
		document.forms["js"]["name"].focus();
		return false;  	  
      }  

var em=document.forms["js"]["email"].value;

var atpos= em.indexOf("@");

var dotpos= em.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)

  {

  alert("Please enter your valid E-mail Address");
  document.forms["js"]["email"].focus();
  return false;

  }

var mo=document.forms["js"]["mobile"].value;

if (mo==null || mo=="" || mo=="Mobile number*")

  {

  alert("Please enter your Mobile Number");
  document.forms["js"]["mobile"].focus();
  return false;

  }
  var mo=document.forms["js"]["mobile"].value;

if (mo.length!=10 || (isNaN(mo)) )

  {

  alert("Only numbers are allowed.\nYour Mobile Number must be 10 digits.");
  document.forms["js"]["mobile"].focus();
  return false;

  }
var qr=document.forms["js"]["queryy"].value;

if (qr==null || qr=="" || qr=="Query*")

  {

  alert("Please enter Your Query.");
  document.forms["js"]["queryy"].focus();
  return false;

  }
  
  return true;

}

</script>
<script type="text/javascript">
$(document).ready(function() {
	var n1 = Math.round(Math.random() * 10 + 1);
    var n2 = Math.round(Math.random() * 10 + 1);
    document.getElementById("a").innerHTML=(n1 + " + " + n2 + " =" );
	
    $("#send").click(function() {


var chech_status=validateEnquiry();
if(!chech_status)
{
    
    return false;
}
if ((n1+n2) == $("#b").val()) {
	
			

        } else {
           
           if($("#b").val()=="")
          {          
            
			alert("Please Enter the captch code");
            $("#b").focus();
			

		   return false;
		   }
           
           
           if((n1+n2) != $("#b").val())
          {          
            
			alert("The captcha answer is incorrect");
           $("#b").focus();
		   $("#b").val("");
		   return false;
		   }
           
           
        }

        
    });
})

</script>

<div id="cboxOver" style="display: none; "></div>

<div id="show_email" style="display:none;">

<div class="looksmthngmain">

<div class="look_boxm">Looking for something? <br />
<span class="enquiry_look">Enter your query. </span></div>
<div class="cross_button">
<a style="right:-7px; top:7px; cursor:pointer;" onClick="CloseEmail()" id="sbox-btn-close"></a></div>

<div class="clr"></div>
<span style="margin-left:13px;"> *All fields are mandatory. </span>
<form method="post" name="js" onSubmit="return validateEnquiry();">

    <input type='hidden'  id='sms_companyname2' name='sms_companyname2' >
    <input type='hidden'  id='sms_address2'     name='sms_address2' >
    <input type='hidden'  id='sms_city2'        name='sms_city2'>
    <input type='hidden'  id='sms_phone2'       name='sms_phone2'>

<div class="nameinput"><input name="name" class="nameinput_len"  value="Name*" onBlur="if(this.value=='')this.value='Name'" onFocus="if(this.value='Name')this.value=''" type="text"></div>

<div class="nameinput"><input name="email"  class="nameinput_len"  onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value='Email')this.value=''" value="Email*" type="text"></div>

<div class="nameinput"><input name="mobile"  class="nameinput_len" onBlur="if(this.value=='')this.value='Mobile number'" onFocus="if(this.value='Mobile number')this.value=''" value="Mobile number*" type="text"></div>

<div class="nameinput"><textarea name="queryy" style=" width: 226px; height: 79px;"  rows="3" class="nameinput_len" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Query*</textarea></div>
<style>
.box1{margin: 0px 0px 0px 140px; height:40px; width:230px; }
</style>
<div class="box1" style="margin-left: 20px; margin-top: 20px;">
<div id="a"  style="font-size:32px; float:left; font-family:'Courier New', Courier, monospace; font-style:italic;" ></div>
<div style="float:left; padding:3px 0px 0px 5px;"><input type="text" id="b"  name="answer" style="font-size:32px; margin-top: -9px; height:32px; width:60px" maxlength="3"/></div>

</div>
<div class="looksubmitbtn"><input src="images/submit_button.png" value="Submit" id="send" border="0" name="query" type="image"><input type="hidden" name="query">

<span class="lookcancelbtn" style="float:left; margin:-45px 0 0 111px; "><button type="reset" style=" cursor: pointer; background:url(images/reset_button.png);width: 108px;height: 40px;border: none;" /></button>
<!--<input src="images/reset_button.png" border="0" type="image">--></span></div>
</div>
</form>

</div>

<div id="over_relay" style="display: none; "></div>	
	<div class="img_place_title_tourism">
</div>
<?php  

$id=JRequest::getVar('cid');
if($id=="")
{
?>
<div class="title_box">
<div class="featured_title"> Result</div>
<div style="float:right;">
<div class="select_box">
<div class="select_box_small"><?php //print_r($list);
?>
<form name="search" id="search" method="post">
<select style="width:143px; height:22px;" id="dest" onChange="ci(this);">
<option value="">--Destination--</option>
 <?php 
$list=travellist();
foreach($list as $filter_result){?>
<option value="<?php echo $filter_result ?>" ><?php    echo $filter_result;?></option>
 <?php } ?>

</select>
</form>
</div>
</div>

</div>
<div class="clr"></div>
</div>


   <input type="hidden" name="cat" value="<?php echo JRequest::getVar('cat') ?>" />
    <input type="hidden" name="where" value="<?php echo JRequest::getVar('where') ?>" />
    <input type="hidden" name="subCat" value="<?php echo JRequest::getVar('subCat') ?>" />
</form>
<div class="clr"></div>


<div class="clr"></div>
<?php

 $dest=JRequest::getVar('dest');
if($dest=="")
{
$dest="Delhi";
}
$what="travel-agents";

$i=0;
$list=hotellist($what,$dest);

foreach($list as $key=>$listing) :
    
	if($i=="10")
    {
       break;
    }
?>
<?php // print_r($listing) 
$dest=JRequest::getVar('dest');
?>
<div class="flower_shop_main">
<div class="spice_yellow_img">
       <a href="<?php echo Juri::base(true).'/index.php/plan-your-trip?dest='.$dest.'&cid='.$listing->companyid.'&p='.$currentPage; ?>"><img src="images/no_img.jpg" /></a>
</div>
<div class="flower_title">   <a href="<?php echo Juri::base(true).'/index.php/plan-your-trip?dest='.$dest.'&cid='.$listing->companyid.'&p='.$currentPage; ?>"><?php print ($listing->companyname) ?></a></div>
<div class="flower_texts">
    <span><?php echo $listing->address ?></span><br />
    <span><span class="flower_texts_blue_black">Deals in : </span><?php echo str_replace('/',', ',($listing->category)) ?>
        <a href="<?php echo Juri::base(true).'/index.php/plan-your-trip?dest='.$dest.'&cid='.$listing->companyid.'&p='.$currentPage; ?>">view more</a>
    </span>
</div>
<div style="padding-top: 0px;" class="Rajouri_title"><?php print $listing->companyname.', '.$listing->city ?></div>
<!--<div class="n_img"><img src="images/n_img.jpg" /></div>-->
<div class="flower_box_one">
<div class="box_title_img">
<div class="msg_img_one"><a id="showSmsPop2" onClick="return ShowSms('<?php echo $listing->companyname; ?>','<?php echo $listing->address; ?>','<?php echo $listing->city;?>','<?php echo $listing->phone; ?>');" style="cursor:pointer;">
<img src="images/mail_blue_img.jpg"></div>
<div class="box_titles">Send Email</a></div>
<div class="msg_img"><a id="showEmailPop" onClick="return ShowEmail('<?php echo $listing->companyname; ?>','<?php echo $listing->address; ?>','<?php echo $listing->city;?>','<?php echo $listing->phone; ?>');" style="cursor:pointer;">
<img src="images/send_enquiry_blue_img.jpg"></div>
<div class="box_titles">Send Enquiry</a></div>
<!--<div class="msg_img"><img src="images/seeon_map_img.jpg" /></div>-->
<!--<div class="box_titles">See on Map</div>-->
</div>
</div>
</div>
<?php $i++; endforeach;

?>

<!-- pagination starts here -->
<div class="first_prew">
<ul>
<?php 
$dest=JRequest::getVar('dest');
if($dest=="")
{
$dest="Delhi";
}
$what="travel-agents";
$page=paget($what,$dest);
$res=ceil($page/25);
///echo $res;

 $paginationUrl=JURI::base().'index.php/plan-your-trip?dest='.JRequest::getVar('dest');            
           

if(!isset($_GET['pageno']) || $_GET['pageno']==1 )
{
	$min=0;
	
}
else
{
	$page=$_GET['pageno'];
	$page--;
	$min=$max_per_page*$page;
	}
	$page1=$page+1;
	$prev=$page1-1;
	$next=$page1+1;

if($start): ?>
<li>Prev</li>
<?php else: 
if($prev==0)
	{
		$prev=1;
		}
		
 ?>    
<li><a href="<?php echo $paginationUrl.'&pageno='.$prev ?>">Prev</a></li>
<?php endif; ?>    
<?php 
$u=JRequest::getVar('pageno');
$li=$u+1;
if($res>20)
{
$li=20;
}
else
{
$li=$res;
}
for($i=1;$i<=$li;$i++)
{

?>


<li><a <?php echo ($currentPage==$i)?'class="selected"':'' ?> href="<?php echo $paginationUrl.'&pageno='.$i ?>"><?php echo $i ?></a></li>
<?php ?>
<?php } ?>
<?php if($end): ?>
<li>Next</li>
<?php else:

  if($next>$res)
	{$next=$res;
	} ?>    
<li><a href="<?php echo $paginationUrl.'&pageno='.$next ?>">Next</a></li>

<?php endif; ?>   
</ul>
</div>

<!-- pagination ends here -->
<!-- resulting ends here -->

<?php 
}
else
{

?>
<script type="text/javascript">
function showSMS(companyname,address,city,phone){

document.forms["jas"]["sms_companyname3"].value=companyname;
document.forms["jas"]["sms_address3"].value=address;
document.forms["jas"]["sms_city3"].value=city;
document.forms["jas"]["sms_phone3"].value=phone;
  
        $('#sms_pop').css('display', 'block')
        $('#cboxOverlay').css('display', 'block')
    }
    function CloseReg(){
        $('#sms_pop').css('display', 'none');
        $('#cboxOverlay').css('display', 'none');
    }
    
	function showSMS1(companyname,address,city,phone){
	
document.forms["jsp"]["sms_companyname4"].value=companyname;
document.forms["jsp"]["sms_address4"].value=address;
document.forms["jsp"]["sms_city4"].value=city;
document.forms["jsp"]["sms_phone4"].value=phone;
  
        $('#sms_pop1').css('display', 'block')
        $('#cboxOverla').css('display', 'block')
    }
    function CloseRegistration(){
        $('#sms_pop1').css('display', 'none');
        $('#cboxOverla').css('display', 'none');
    }
    

</script>



</head>

<body>
<!--<script type="text/javascript">
$(document).ready(function(){
    	$('#showSmspop').bind('click',showSMS)
});
</script>-->
<!--<script type="text/javascript">
$(document).ready(function(){
    	$('#showSmspop1').bind('click',showSMS1)
});
</script>-->
<?php

$dest=JRequest::getVar('dest');
if($dest=="")
{
$dest="Delhi";
}
$what="travel-agents";
$it=hotellist($what,$dest);
foreach($it as $item)
{
$item=$item;
}




?>

<?php 
if(isset($_POST['submitt']))
{

$mess3  ="\n"."Company Name :".$_REQUEST['sms_companyname3']."\n";
$mess3 .="Address:".$_REQUEST['sms_address3']."\n";
$mess3 .="City:".$_REQUEST['sms_city3']."\n";
$mess3 .="PHONE:".$_REQUEST['sms_phone3'];

$i=0;
		require_once 'getit_notifications.php';
		$objCar = new getit_notifications();
		

        $objGetDataKey = new SendSMSByParameters();
		//$objGetDataKey1= new SendEmail();
		
		$objGetDataKey->userId = 'getUser$';
		$objGetDataKey->password = 'getUser$123';
		$objGetDataKey->token = '113506789';
		$objGetDataKey->applicationId = '1';
		$objGetDataKey->vendorId = '12345';
		$objGetDataKey->phoneNo = $_POST['phonee'];
		$objGetDataKey->smsBody = $_POST['messagee'].$mess3;
		
       	$result_sms = $objCar->SendSMSByParameters($objGetDataKey);
		
		
		
$mailer =& JFactory::getMailer();
$config =& JFactory::getConfig();
$sender = array( 
    $config->getValue( 'config.mailfrom' ),
    $config->getValue( 'config.fromname' ) );
 
$mailer->setSender($sender);

$recipient=array($_POST['emaill']);
$mailer->addRecipient($recipient);
$body   = "Email: ".$_POST['emaill']."\nMobile No: ".$_POST['phonee']."\nMessage: ".$_POST['messagee'].$mess3;

$mailer->setSubject('posted  on celebration.getit.in');
$mailer->setBody($body);

$send =& $mailer->Send();

if ( $send !== true ) {
    echo 'Error sending email';
} 

else {
     $_SESSION['msg']="Mail sent successfully!";

    
    }
} 
echo "<div style='padding-bottom:5px; font-size: 16px; font-weight: bold;'>".$_SESSION['msg']."</div>";

$_SESSION['msg']="";
?>


<?php 
if(isset($_POST['query']))
{

$mess3  ="\n"."Company Name :".$_REQUEST['sms_companyname4']."\n";
$mess3 .="Address:".$_REQUEST['sms_address4']."\n";
$mess3 .="City:".$_REQUEST['sms_city4']."\n";
$mess3 .="PHONE:".$_REQUEST['sms_phone4'];

$i=0;
		require_once 'getit_notifications.php';
		$objCar = new getit_notifications();
		

        $objGetDataKey = new SendSMSByParameters();
		//$objGetDataKey1= new SendEmail();
		
		$objGetDataKey->userId = 'getUser$';
		$objGetDataKey->password = 'getUser$123';
		$objGetDataKey->token = '113506789';
		$objGetDataKey->applicationId = '1';
		$objGetDataKey->vendorId = '12345';
		$objGetDataKey->phoneNo = $_POST['mobilee'];
		$objGetDataKey->smsBody = $_POST['queeryy'].$mess4;
		//$objGetDataKey->providerId = 'test123';
		//$objGetDataKey->strWhere = 'delhi';
		//$objGetDataKey->CategoryId=6;
       	$result_sms = $objCar->SendSMSByParameters($objGetDataKey);
		//$result1= $objCar->SendEmail($objGetDataKey1);

$mailer =& JFactory::getMailer();
$config =& JFactory::getConfig();
$sender = array( 
    $config->getValue( 'config.mailfrom' ),
    $config->getValue( 'config.fromname' ) );
 
$mailer->setSender($sender);

$recipient=array($_POST['emaill']);
$mailer->addRecipient($recipient);
$body   = "Name: ".$_POST['name']."\nMobile No: ".$_POST['mobilee']."\nEmail: ".$_POST['emaill']."\nQuery: ".$_POST['queeryy'].$mess4;

$mailer->setSubject('posted a Query on celebration.getit.in');
$mailer->setBody($body);

$send =& $mailer->Send();

if ( $send !== true ) {
    echo 'Error sending email';
} 

else {
     $_SESSION['msg']="Mail sent successfully!";

    
    }
} 
echo "<div style='padding-bottom:5px; font-size: 16px; font-weight: bold;'>".$_SESSION['msg']."</div>";

$_SESSION['msg']="";
?>




	<script type="text/javascript">

function validatsms()

{

var em=document.forms["jas"]["emaill"].value;

var atpos= em.indexOf("@");

var dotpos= em.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)

  {

  alert("Please enter your valid E-mail Address");
  document.forms["jas"]["emaill"].focus();
  return false;

  }
  
var mo=document.forms["jas"]["phonee"].value;

if (mo==null || mo=="" || mo=="phonee")

  {

  alert("Please enter your Mobile Number");
  document.forms["jas"]["phonee"].focus();
  return false;

  }
  var mo=document.forms["jas"]["phonee"].value;

if (mo.length !=10 || (isNaN(mo)) )

  {

  alert("Only numbers are allowed.\nYour Mobile Number must be 10 digits.");
  document.forms["jas"]["phonee"].focus();
  return false;

  }
   var qr=document.forms["jas"]["messagee"].value;

if (qr==null || qr=="" || qr=="messagee")

  {

  alert("Please enter your message.");
  document.forms["jas"]["messagee"].focus();
  return false;

  }
  
  return true;

}

</script>
	

<div id="sms_pop" style="display:none;">

<div id="pop_up">


<div id="sm_top">
<div id="s_end_btn"><a style="right:38px; top:34px; cursor:pointer;" onClick="CloseReg()" id="sbox-btn-close"></a></div>
<form method="post" name="jas" action="">

<input type='hidden'  id='sms_companyname3' name='sms_companyname3' >
      <input type='hidden'  id='sms_address3'name='sms_address3' >
      <input type='hidden'  id='sms_city3' name='sms_city3'>
      <input type='hidden'  id='sms_phone3' name='sms_phone3'>

<div id="sms_cont">Send Email</div>
<div id="gt_logo"><img src="images/gt_loto.png" alt=""></div>

<div class="clr"></div>
<span style="margin-left:98px;">*All fields are mandatory. </span>
</div>

<div id="pop_form">

<div id="pop_email">Email:*</div>

<div id="pop_input"><input name="emaill" id="email" class="pop_email_input" type="text"></div>

<div class="clr"></div>

<div id="pop_email_one">Phone:*</div>

<div id="pop_input"><input name="phonee" id="phone" class="pop_phone_input" type="text"></div>

<div class="clr"></div>

<div id="pop_email_one">Message:*</div>

<div id="pop_input"><textarea name="messagee" class="pop_msgtext"></textarea></div>

<div class="clr"></div>

<div id="buttons">

<div id="s_submit_btn"><input src="images/s_nd.png" alt="send" type="image" name="submitt" onClick="return validatsms();"><input type="hidden" name="submitt"></div>



<div id="c_lose_btn"><img src="images/c_losed.png" alt="close" type="image" onClick="CloseReg()"></div>
</div>
</div>
</form>
</div>
</div>

<script type="text/javascript">

function validateEnquiryy()

{

   
    var x=document.forms["jsp"]["namee"].value;

if (x==null || x=="" || x=="Name")

  {

  alert("Name cannot be empty");
   document.forms["jsp"]["namee"].focus();
  return false;

  }
  var letters = /^[A-Za-z]+$/;  
  if(!x.match(letters))  
      {
		alert('Only characters are allowed');
		document.forms["jsp"]["namee"].focus(); 
		return false;  	  
      }  

var em=document.forms["jsp"]["emaill"].value;

var atpos= em.indexOf("@");

var dotpos= em.lastIndexOf(".");

if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)

  {

  alert("Please enter your valid E-mail Address.");
  document.forms["jsp"]["emaill"].focus();
  return false;

  }

var mo=document.forms["jsp"]["mobilee"].value;

if (mo==null || mo=="" || mo=="Mobile number*")

  {

  alert("Please enter your Mobile Number.");
  document.forms["jsp"]["mobilee"].focus();
  return false;

  }
  var mo=document.forms["jsp"]["mobilee"].value;

if (mo.length !=10 || (isNaN(mo)) )

  {

  alert("Only numbers are allowed.\nYour Mobile Number must be 10 digits.");
   document.forms["jsp"]["mobilee"].focus();
  return false;

  }
var qr=document.forms["jsp"]["queeryy"].value;

if (qr==null || qr=="" || qr=="Query*")

  {

  alert("Please enter your Query.");
  document.forms["jsp"]["queeryy"].focus();
  return false;

  }
  
  return true;

}

</script>

<div id="cboxOverlay" style="display: none; "></div>

<!-- Query form---->
<div id="sms_pop1" style="display:none;">

<div class="looksmthngmain">

<div class="look_boxm">Looking for something? <br />
<span class="enquiry_look">Enter your query. </span></div>
<div class="cross_button" >
<a style="right:-7px; top:7px; cursor:pointer;" onClick="CloseRegistration()" id="sbox-btn-close"></a></div>

<div class="clr"></div>
<span style="margin-left:13px;"> *All fields are mandatory. </span>
<form method="post" name="jsp" action="" onSubmit="return validateEnquiryy();">

<input type='hidden'  id='sms_companyname4' name='sms_companyname4' >
      <input type='hidden'  id='sms_address4'name='sms_address4' >
      <input type='hidden'  id='sms_city4' name='sms_city4'>
      <input type='hidden'  id='sms_phone4' name='sms_phone4'>


<div class="nameinput"><input name="namee" class="nameinput_len"  value="Name*" onBlur="if(this.value=='')this.value='Name'" onFocus="if(this.value='Name')this.value=''" type="text"></div>

<div class="nameinput"><input name="emaill"  class="nameinput_len"  onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value='Email')this.value=''" value="Email*" type="text"></div>

<div class="nameinput"><input name="mobilee"  class="nameinput_len" onBlur="if(this.value=='')this.value='Mobile number'" onFocus="if(this.value='Mobile number')this.value=''" value="Mobile number*" type="text"></div>

<div class="nameinput"><textarea name="queeryy" style=" width: 226px; height: 79px;"  rows="3" class="nameinput_len" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Query*</textarea></div>

<div class="looksubmitbtn"><input src="images/submit_button.png" value="Submitt" border="0" name="query" type="image"><input type="hidden" name="query">

<span class="lookcancelbtn"><span class="lookcancelbtn" style="float:left; margin:-45px 0 0 111px; "><button type="reset" style=" cursor: pointer; background:url(images/reset_button.png);width: 108px;height: 40px;border: none;" /></button><!--<input src="images/reset_button.png" border="0" type="image" >--></span></div>
</form>
</div>


</div>

<div id="cboxOverla" style="display: none; "></div>
<!-- End Query form---->


<div class="deatails_main">
<div class="bigchill">
<div class="chill_logo"><img src="images/logo_80X80.png"></div>
<div class="bigtxtmain">
<div class="bigbold"><?php echo $item->companyname; ?></div>


<div class="clr"></div>
<div class="vasnatadd"><?php echo $item->address ?>,<?php echo $item->city ?> ,<?php echo $item->state ?>  ,<?php echo $item->pincode ?>   </div>
<div class="landmark">Landmark : <span class="landmarktxt">Near TV Tower</span></div>
<div class="mobile"><img src="images/phone.png"></div>
<div class="telephoneno"><?php echo $item->phone ?>  </div>
<!--<div class="mobile1"><img src="images/view.png"></div>
<div class="mobview"><a href="#">View website </a></div>-->
<div class="bigchillstar">
<!--<ul>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/green_star.png" border="0"></a></li>
<li><a href="#"><img src="images/green_star.png" border="0"></a></li>
</ul>-->
</div>
<div class="bigchillreview"><!--43 review --></div>
<div class="clr"></div>


<div class="clr"></div>
</div>
<div class="clicltocall_main">
<div class="clickbtnone"><img src="images/click_tocall.gif"></div>
<div class="clickbtntwo"><a id="showSmspop" onClick="return showSMS('<?php echo $item->companyname; ?>','<?php echo $item->address; ?>','<?php echo $item->city;?>','<?php echo $item->phone; ?>');"  style="cursor: pointer;"><img src="images/sms_mail.gif"></a></div>
<div class="clickbtntwo"><a id="showSmspop1" onClick="return showSMS1('<?php echo $item->companyname; ?>','<?php echo $item->address; ?>','<?php echo $item->city;?>','<?php echo $item->phone; ?>');"  style="cursor: pointer;"><img src="images/send_qauriry.gif"></a></div>
<div class="clickbtntwo"><a href="<?php echo $_SERVER['REQUEST_URI'];?>#review"><img src="images/write_review.gif"></a></div>
</div>
<div class="clr"></div>
<!--<div class="dealsin">Other Branches in <span class="dealrestou"><a href="#">Mumbai(2)</a></span> | <span class="dealrestou"><a href="#">Other Cities(24)</a></span></div>-->

<div class="dealsin">Deals in : <span class="dealrestou"><?php echo str_replace('/',', ',($item->category)) ?></span></div>
</div>
     <script type="text/javascript">
function validateComment()
{
    var x=document.forms["comm"]["userName"].value;
if (x==null || x=="" || x=="enter your name...")
  {
  alert("Name cannot be empty");
  document.forms["comm"]["userName"].focus();
  return false;
  }
var em=document.forms["comm"]["commentEmail"].value;
var atpos= em.indexOf("@");
var dotpos= em.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)
  {
  alert("Not a valid e-mail address");
  document.forms["comm"]["commentEmail"].focus()
  return false;
  }
var ct=document.forms["comm"]["commentText"].value;
if (ct==null || ct=="" || ct=="enter your message here...")
  {
  alert("Query cannot be empty");
  document.forms["comm"]["commentText"].focus();
  return false;
  }
  return true;
}
</script>
<?php 
$db = &JFactory::getDBO(); 
if(isset($_POST['comment']))
{
   $itemID = JRequest::getVar('cid'); 
 $sql="insert into onam_ws_comment(item_id,name,email,message,date)values('".$itemID."','".$_POST['userName']."','".$_POST['commentEmail']."','".$_POST['Message']."',NOW())";

	 $db->setQuery($sql);
	  $db->query();


}
$itemID = JRequest::getVar('cid');
                $db = &JFactory::getDBO();
  $query = "SELECT * FROM onam_ws_comment WHERE item_id ='".$itemID."'";
                $db->setQuery($query);
		$rs = $db->loadAssocList();
?>
<div class="user-reviewmain">

<div class="userrev_boxmid">User Review <span class="writerev"><a href="<?php echo $_SERVER['REQUEST_URI'];?>#review">Write a review</a></span> <span class="revdroparrow"><img src="images/green_arrow.png"></span></div>
<div class="userrev_boxright"></div>
<div class="clr"></div>

<?php foreach($rs as $result){

//print_r($result);

?>
<div class="userpreview_main">
<div class="userprevimgmn">
<div class="userprevimg"><img src="images/girls.png"></div><div class="userprevimgtxt"></div>
</div>
<div class="userdescrition_main">
<div class="dummytxt"><?php echo $result['name'];?> <span class="dummydate"><?php echo $result['date'];?></span></div>
<div class="user_star">
<ul>
<li><img src="images/star.png"></li>
<li><img src="images/star.png"></li>
<li><img src="images/star.png"></li>
<li><img src="images/star.png"></li>
<li><img src="images/star.png"></li>
</ul>
</div>
<div class="clr"></div>
<div class="txtdecrip"><?php echo $result['message'];?> </div>
<div class="handyestxt">Was it helpful to you ? </div>
<div class="handimg"><img src="images/up.png"></div>
<div class="handimgtxt">Yes</div>
<div class="handimg"><img src="images/down.png"></div>
<div class="handimgtxt">No</div>
<div class="reqremovel"><img src="images/request_removal.png"></div>
<div class="clr"></div>
</div>
</div>
<?php }?>
<div class="login_form" id="review">
<div class="plan_your_title">Leave a comment</div>
<div class="texts_comment_detail">Make sure you enter the (*) required information where indicated. HTML code is not allowed. 
</div>
<form method="post" name="comm" action="" onSubmit="return validateComment();">

	<div class="box_comment_detail"><label for="" >Name *</label></div>
	<div class="box_field_detail"><input class="box_input_detail" type="text" name="userName" onBlur="if(this.value=='')this.value='enter your name...'" onFocus="if(this.value='enter your name...')this.value=''" value="enter your name..."/></div>
	<div class="clr"></div>
	<div class="box_comment_detail"><label  for="Email">Email *</label></div>
	<div class="box_field_detail"><input class="box_input_detail" type="text" name="commentEmail"  onblur="if(this.value=='')this.value='enter your name...'" onfocus="if(this.value='enter your Email...')this.value=''" value="enter your Email..." value="enter your Email..." /></div>
	<div class="clr"></div>
    	<div class="box_comment_detail"><label  for="Email">Message *</label></div>
	<div class="box_field_detail"><textarea name="Message" rows="20" cols="10" class="box_message_detail" value="enter your message here..."  onblur="if(this.value=='')this.value='enter your message here...'" onFocus="if(this.value='enter your message here...')this.value=''"  ></textarea>
    
    
</div>
	<div class="clr"></div>


  
  
  <div class="submit_comment"><input type="image" src="images/submit_button.png" name="comment"/><input type="hidden" name="comment"></div>
<div class="reset_comment" style="float:left; margin:0px 0 0 14px; "><button type="reset" style=" cursor: pointer; background:url(images/reset_button.png);width: 100px;height: 40px;border: none;" /></button></div><!--<a href="#"><img src="images/reset_button.png" /></a></div>-->
<div class="clr"></div>
 
   </form>
  
   
</div>
<div class="clr"></div>
<div class="userbdr"></div>
</div>
<div class="user_paging"><!--< Prev 1 2 Next >--></div>
</div>



<?php
}
?>