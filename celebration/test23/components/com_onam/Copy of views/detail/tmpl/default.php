<?php
defined('_JEXEC') or die;

//print_r($this->_item);
if(!$this->_item):
    echo '<h2 style="color: red;" >No Detail Found!</h2>';
else:
    $item=$this->_item[0];
//print_r($item);
?>
<!--<script type="text/javascript" src="http://localhost/onam/templates/onam/js/jquery-1.6.4.min.js"></script>-->
    <script type="text/javascript">
function showSMS(){
  
        $('#sms_pop').css('display', 'block')
        $('#cboxOverlay').css('display', 'block')
    }
    function CloseRegistration(){
        $('#sms_pop').css('display', 'none');
        $('#cboxOverlay').css('display', 'none');
    }
	
function showEmail(){
  
        $('#sms_pop1').css('display', 'block')
        $('#cboxOverlay').css('display', 'block')
    }
    function CloseEmail(){
        $('#sms_pop1').css('display', 'none');
        $('#cboxOverlay').css('display', 'none');
    }	
	
    
</script>

<script type="text/javascript">
$(document).ready(function(){
    	$('#showSmspop').bind('click',showSMS)
});
$(document).ready(function(){
    	$('#showEmail').bind('click',showEmail)
});
</script>

<style>
#cboxOverlay{background:#000; opacity: 0.7; position: fixed;z-index: 1004;top: 0px; bottom: 0px; left: 0px; right: 0px;}
#sms_pop,#sms_pop1{left:30%; position:fixed; text-align:left; top:150px; z-index:1000000;}
#pop_up{padding:0px; width:402px; background:#fafbd9; float:left;}
#sm_top{ margin:0px 8px 0 0px; padding:0px; width:402px; float:left; background: url("../images/pp_line.png") repeat-x scroll 0 0 transparent;height: 54px; }
#sms_cont{ margin:0px; padding:14px 0 0 10px; float:left; font-size:20px; color:#000; font-weight:bold; float:left; width:205px;}
#gt_logo{ margin:10px 8px 0 8px; padding:0px; float:left;}
#pop_form{ padding:0px; width:360px; margin-top:20px; float:left; }
#pop_email{ margin:0px; padding:2px 0 0 0px;  width:62px; float:left; text-align:right; font-size:12px; font-family:Tahoma, Geneva, sans-serif;}
#pop_input{ margin:0px; padding:0px; float:left; width:278px;}
.pop_email_input{margin:0px 0 0 14px; padding:0px; width:278px;}
.pop_phone_input{margin:10px 0 0 14px; padding:0px; width:278px;}
#pop_email_one{ margin:10px 0 0 0px; padding:2px 0 0 0px;  width:62px; float:left; text-align:right; font-size:12px; font-family:Tahoma, Geneva, sans-serif}
#s_end_btn{ margin:-35px 0 20px 17px; padding:0px; float:right;}
#buttons{ width:250px; margin-top:10px; margin-left:80px; float:left;}
#s_submit_btn{ margin:2px 0 20px 0px; padding:0px; float:left;}
#c_lose_btn{ margin:2px 0 20px 10px; padding:0px; float:left;}
.clr{ clear:both; padding:0px; padding:0px; height:0px; display:block;}

</style>
</head>

<body>

<?php 
if(isset($_POST['submit']))
{
$mailer =& JFactory::getMailer();
$mailer->setSender($_POST['Email']);
$recipient=array($_POST[commentEmail],'surya.bhan@astintechnology.com');
$mailer->addRecipient($recipient);
$body   = "Email: ".$_POST['email']."\nMobile No: ".$_POST['phone'];

$mailer->setSubject('posted a comment on food.getit.in');
$mailer->setBody($body);
$send =& $mailer->Send();
if ( $send !== true ) {
    echo 'Error sending email';
} else {
     $_SESSION['msg']="<dd class='message message'>
	<ul>
		<li>Mail sent successfully!</li>
	</ul>";

    
    }


}
$db = &JFactory::getDBO(); 
if(isset($_POST['comment']))
{
$itemID = JRequest::getVar('id'); 
$sql="insert into onam_ws_comment(item_id,name,email,message,date)values('".$itemID."','".$_POST['userName']."','".$_POST['commentEmail']."','".$_POST['Message']."',NOW())";
$db->setQuery($sql);
$db->query();
}
$itemID = JRequest::getVar('id');
$db = &JFactory::getDBO();
$query = "SELECT * FROM onam_ws_comment WHERE item_id ='".$itemID."'";
$db->setQuery($query);
$rs = $db->loadAssocList();
?>

<?php 
if(isset($_POST['query']))
{
$mailer =& JFactory::getMailer();
$mailer->setSender($_POST['email']);
$recipient=array($_POST['email']);
$mailer->addRecipient($recipient);
echo $body   = "Name: ".$_POST['name']."\nMobile No: ".$_POST['mobile']."\nEmail: ".$_POST['email']."\nQuery: ".$_POST['query'];

$mailer->setSubject('posted a Query on food.getit.in');
$mailer->setBody($body);
$send =& $mailer->Send();
if ( $send !== true ) {
    echo 'Error sending email';
} else {
     $_SESSION['msg']="<dd class='message message'>
	<ul>
		<li>Mail sent successfully!</li>
	</ul>";

    
    }


}
?>

<div id="sms_pop" style="display:none;">

<div id="pop_up">

<div id="sm_top">
<div id="s_end_btn"><a onClick="CloseRegistration()" id="sbox-btn-close"></a></div>
<form method="post" name="jos" action="">
<div id="sms_cont">Send SMS/Email</div>
<div id="gt_logo"><img src="images/gt_loto.png" alt=""></div>

<div class="clr"></div>
</div>
<div id="pop_form">
<div id="pop_email">Email:</div>
<div id="pop_input"><input name="email" class="pop_email_input" id="email" type="text"></div>
<div class="clr"></div>
<div id="pop_email_one">Phone:</div>
<div id="pop_input"><input name="phone" class="pop_phone_input" id="phone" type="text"></div>
<div class="clr"></div>
<div id="buttons">
<div id="s_submit_btn"><input src="images/s_nd.png" alt="send" type="image" name="submit"><input type="hidden" name="submit"></div>
<div id="c_lose_btn"><input src="images/c_losed.png" alt="close" type="image"></div>
</div>
</div>
</form>
</div>
</div>
<div id="cboxOverlay" style="display: none; "></div>

<div id="sms_pop1" style="display:none;">

<div class="looksmthngmain">

<div class="look_boxm">Looking for something? <br />
<span class="enquiry_look">Enter your query. </span></div>
<div class="cross_button" >
<a style="right:-7px; top:7px; cursor:pointer;" onClick="CloseEmail()" id="sbox-btn-close"></a></div>

<div class="clr"></div>
<form method="post" name="js">
<div class="nameinput"><input name="name" class="nameinput_len"  value="Name" onBlur="if(this.value=='')this.value='Name'" onFocus="if(this.value='Name')this.value=''" type="text"></div>
<div class="nameinput"><input name="email"  class="nameinput_len"  onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value='Email')this.value=''" value="Email" type="text"></div>
<div class="nameinput"><input name="mobile"  class="nameinput_len" onBlur="if(this.value=='')this.value='Mobile number'" onFocus="if(this.value='Mobile number')this.value=''" value="Mobile number" type="text"></div>
<div class="nameinput"><textarea name="query" style=" width: 226px; height: 79px;"  rows="3" class="nameinput_len" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Query</textarea></div>
<div class="looksubmitbtn"><input src="images/submit_button.png" value="Submit" border="0" name="query" type="image"><input type="hidden" name="query">
<span class="lookcancelbtn"><input src="images/reset_button.png" border="0" type="image"></span></div>
</div>
</form>

</div>

<div class="deatails_main">
<div class="bigchill">
<div class="chill_logo"><img src="images/logo_80X80.png"></div>
<div class="bigtxtmain">
<div class="bigbold"><?php echo $item->companyname; ?></div>


<div class="clr"></div>
<div class="vasnatadd"><?php echo $item->address ?>,<?php echo $item->city ?> ,<?php echo $item->state ?>  ,<?php echo $item->pincode ?>   </div>
<!--<div class="landmark">Landmark : <span class="landmarktxt">Near TV Tower</span></div>
<div class="telephone"><!--<img src="images/mobile.png"></div>
<div class="telephoneno"></div>-->
<div class="mobile"><img src="images/phone.png"></div>
<div class="telephoneno"><?php echo $item->phone ?>  </div>
<div class="mobile1"><!--<img src="images/view.png">--></div>
<div class="mobview"><!--<a href="#">View website </a>--></div>
<div class="bigchillstar">
<!--<ul>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/star.png" border="0"></a></li>
<li><a href="#"><img src="images/green_star.png" border="0"></a></li>
<li><a href="#"><img src="images/green_star.png" border="0"></a></li>
</ul>-->
</div>
<div class="bigchillreview"></div>
<div class="clr"></div>
</div>
<div class="clicltocall_main">
<div class="clickbtnone"><img src="images/click_tocall.gif"></div>
<div class="clickbtntwo"><a id="showSmspop" onClick="return showSMS();"  style="cursor: pointer;"><img src="images/sms_mail.gif"></a></div>
<div class="clickbtntwo"><a id="showEmail" onClick="return showEmail();"  style="cursor: pointer;">
<img src="images/send_qauriry.gif"></a></div>
<div class="clickbtntwo"><a href="#review"><img src="images/write_review.gif"></a></div>
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
  return false;
  }
var em=document.forms["comm"]["commentEmail"].value;
var atpos= em.indexOf("@");
var dotpos= em.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>= em.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var ct=document.forms["comm"]["commentText"].value;
if (ct==null || ct=="" || ct=="enter your message here...")
  {
  alert("Query cannot be empty");
  return false;
  }
  return true;
}
</script>
<div class="user-reviewmain">

<div class="userrev_boxmid">User Review <!--(23)--> <span class="writerev"><a href="#rev">Write a review</a></span> <span class="revdroparrow"><img src="images/green_arrow.png"></span></div>
<div class="userrev_boxright"></div>
<div class="clr"></div>

<?php foreach($rs as $result){

//print_r($result);

?>
<div class="userpreview_main">
<div class="userprevimgmn">
<div class="userprevimg"><img src="images/girls.png"></div><div class="userprevimgtxt">Review : 2</div>
</div>
<div class="userdescrition_main">
<div class="dummytxt"><?php echo $result['name'];?> <span class="dummydate"><?php echo $result['date'];?></span></div>
<a href="#rev">click</a>
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
<div class="handimg"><img src="images/yes.png"></div>
<div class="handimgtxt">Yes</div>
<div class="handimg"><img src="images/no.png"></div>
<div class="handimgtxt">No</div>
<div class="reqremovel"><img src="images/request_removal.png"></div>
<div class="clr"></div>
</div>
</div>
<?php }?>
<a name="rev"></a>
<div class="login_form">
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
<div class="reset_comment"><a href="#"><img src="images/reset_button.png" /></a></div>
<div class="clr"></div>
 
   </form>
  
   
</div>
<div class="clr"></div>
<div class="userbdr"></div>
</div>
<div class="user_paging"><!--< Prev 1 2 Next >--></div>
</div>




<!--<div class="attract_name_img_main">
<div class="attract_name">The Big Florist</div>
<div class="attract_name_texts">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
</div>
<div class="attract_name_img"><img src="images/detail_1.jpg" /></div>


</div>-->

<?php
endif;
?>

    
    