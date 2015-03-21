<?php

defined('_JEXEC') or die;



$list=$this->_result;





if(!empty($this->_cat)){

    $cat=$this->_cat;

}else{

    $cat=array('Air Travel- Chartered','Hotels & Accommodation','Road Travel','Sea Travel','Ticketing','Tourism Services','Tourist Needs & Services','Travel & Tourism- Domestic','Travel & Tourism- International');

}



if(!empty($this->_subCat)){

    $subCat=$this->_subCat;

}else{

    $subCat=array(	'Airports',

	'Chartered Aircrafts',

	'Chartered Helicopters',

	'Beach Houses & Cottages',

	'Bed & Breakfast Hotels',

	'Boarding Houses',

	'Dharamsala',

	'Dormitories',

	'Guest Houses',

	'Hostels',

	'Hotels(Outstation)',

	'Hotels- Budget',

	'Hotels- Luxury',

	'Lodges',

	'Motels',

	'Paying Guest Accommodations',

	'Resorts',

	'Service Apartments',

	'Tourists Homes',

	'Bus Express Service',

	'Buses- Charter',

	'Car Hiring Services',

	'Caravan Services',

	'Chauffeur Services',

	'Taxi & Cab Services',

	'Cruise Liners',

	'Ships & Boats- Travel',

	'Yacht Travel',

	'Ticketing Agencies- Air',

	'Ticketing Agencies- Bus',

	'Ticketing Agencies- Cruise Liners',

	'Ticketing Agencies- Rail',

	'Ticketing- Online',

	'Transport Agents',

	'Transportation Consultants',

	'Travel Bureaus',

	'Travel Consultants',

	'Travel Contractors',

	'Embassy & Consulate',

	'Guided Tours/Guides',

	'Immigration Consultants',

	'Interpreters & Translators',

	'Money Changers',

	'Money Wiring',

	'Passport Office',

	'Passport Visa Agents',

	'Tourist Information Centres',

	'Tourist Maps',

	'Travel Insurance',

	'Travel Portals',

	'Travel Publications',

	'Travelogues',

	'Domestic Tourism- Beach Vacations & Water Sports',

	'Domestic Tourism- Cultural',

	'Domestic Tourism- Fairs & Festivals',

	'Domestic Tourism- Healing & Holistic',

	'Domestic Tourism- Heritage',

	'Domestic Tourism- Hill',

	'Domestic Tourism- Medical',

	'Domestic Tours - Wild Life Safari & Bird Watching',

	'Domestic Tours- Adventure',

	'Domestic Tours- Business & Promotion',

	'Domestic Tours- Camping',

	'Domestic Tours- Pilgrimage',

	'Healing & Holistic Care Tourism',

	'Honeymoon Packages- Domestic',

	'Tourism- Domestic Destination',

	'Tours & Travel Operators- Domestic',

	'Bollywood Tourism',

	'Honeymoon Packages- International',

	'International Tourism- Beach Vacations',

	'International Tourism- Destination',

	'International Tourism- Fairs & Festivals',

	'International Tourism- Heritage',

	'International Tours- Adventure',

	'International Tours- Business & Promotion',

	'International Tours- Educational',

	'International Tours- Pilgrimage',

	'International Tours- Wild Life Safari & Bird Watching',

	'Tour & Travel Operators- International',

	'Tours- Cruise Liners');

}

if($this->_where){

    $wheres=$this->_where;

}else{

    $wheres=array('delhi');

}



?>



<?php

$currentPage=JRequest::getVar('pageno');

$start=($currentPage==0)?TRUE:FALSE;

$end=($currentPage==9)?TRUE:FALSE;

// print_r($this)// ?>



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

<?php  

$cat=JRequest::getVar('cat');

$subcat=JRequest::getVar('subcat');

$pageno=JRequest::getVar('pageno');

$where=JRequest::getVar('where');
$what=JRequest::getVar('what');

if($what=="SWEETS")
{
$what="SWEETS&SNACKS";
}
if($what=="FRUITS")
{
 $what="FRUITS&NUTS";
}

?>

<script type="text/javascript">



function ci()

    {

	

	  var cat=document.getElementById('dest').value;

	 window.location="<?php echo Juri::base(true).'/index.php/shopping?view=shopping&what='.$what.'&cat='.$cat.'&subcat='.$subcat.'&where=';?>"+cat;



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

input{width:auto;}

</style>

<?php 

if(isset($_POST['submit']))

{

$mailer =& JFactory::getMailer();

$mailer->setSender($_POST['Email']);

$recipient=array($_POST[commentEmail]);

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

if(isset($_POST['query']))

{

$mailer =& JFactory::getMailer();

$mailer->setSender($_POST['email']);

$recipient=array($_POST['email']);

$mailer->addRecipient($recipient);

 $body   = "Name: ".$_POST['name']."\nMobile No: ".$_POST['mobile']."\nEmail: ".$_POST['email']."\nQuery: ".$_POST['query'];



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

<form method="post" name="jos" action="">

<div id="sm_top">

<div id="s_end_btn"><a onClick="CloseRegistration()" id="sbox-btn-close"></a></div>



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



</form>

</div>

</div>

<!-- css ends here--> 

<?php 

$db = JFactory::getDBO();

$catname=JRequest::getVar('subcat');

$sq="select * from #__k2_categories where name='".$catname."'";

$sqc=$db->setQuery($sq);

$cmdc=$db->loadAssoc();

$sql="select * from #__k2_items where catid='".$cmdc['id']."' and published='1' order by id DESC limit 0,6";

$sql=$db->setQuery($sql);

$cmd=$db->loadAssocList();

?>

<div class="img_place_title_tourism">

<?php

$count=1;

foreach($cmd as $li):

$url=urlencode($li['extra_fields_search']);?>

<div style=" float:left; margin:0px 0px 7px 15px;">

<div class="img_tourism"><a href="<?php echo Juri::Base('true');?>/index.php/gifts-online?url=<?php echo $url;?>"><img src="media/k2/items/cache/<?php echo md5("Image".$li['id']);?>_XS.jpg" width="161px" height="85px;" /></a></div>

<div class="title_tourism" style="text-align:center;"><a href="<?php echo Juri::Base('true');?>/index.php/gifts-online?url=<?php echo $url;?>"><?php echo strtoupper($li['title']);?></a></div>

<div class="title_tourism" style="text-align:center;"><?php echo $li['introtext'];?></a></div>

</div>

<?php if($count%3=="0"):?>

<div class="clr"></div>

<?php 

endif;

$count++;

endforeach;?></div>

<div class="title_box">

<div class="featured_title"> Featured Companies</div>

<div style="float:right;">

<div class="select_box">

<div class="select_box_small"><?php //print_r($list);

?>

<form method="post" name="form1" action="">

<select style="width:143px; height:22px;" id="dest" onChange="ci(this);">

<option value="">--Destination--</option>

 <?php 

/*			

$property_types = array();

 foreach($list as $city){

    if ( in_array($city->city, $property_types) ) {

        continue;

    }

    $property_types[] = $city->city;

	*/

$cit=$this->_whe;



foreach($cit as $ci)

{

	

 ?>

<option value="<?php echo $ci; ?>" <?php echo (JRequest::getVar('where')==$ci)?'selected="selected"':''; ?> ><?php    echo $ci;

 ?></option>

        <?php } ?>



</select>

</form>

</div>

</div>



</div>

<div class="clr"></div>

</div>



<div class="clr"></div>

<?php if($list) : ?>

<?php $i=0;

foreach($list as $listing) :

    if($i=="9")

    {

        break;

    }

?>

<?php // print_r($listing) ?>

<div class="flower_shop_main">

<div class="spice_yellow_img">

       <a href="<?php echo Juri::base(true).'/index.php/detail?option=com_onam&view=detail&id='.$listing->companyid.'&what='.JRequest::getVar('what').'&cat='.JRequest::getVar('cat').'&subCat='.JRequest::getVar('subCat').'&p='.$currentPage; ?>"><img src="images/no_img.jpg" /></a>

</div>

<div class="flower_title">   <a href="<?php echo Juri::base(true).'/index.php/detail?option=com_onam&view=detail&id='.$listing->companyid.'&what='.JRequest::getVar('what').'&cat='.JRequest::getVar('cat').'&subCat='.JRequest::getVar('subCat').'&p='.$currentPage; ?>"><?php print ($listing->companyname) ?></a></div>

<div class="flower_texts">

    <span><?php echo $listing->address ?></span><br />

    <span><span class="flower_texts_blue_black">Deals in : </span><?php echo str_replace('/',', ',($listing->category)) ?>

        <a href="<?php echo Juri::base(true).'/index.php/detail?option=com_onam&view=detail&id='.$listing->companyid.'&what='.JRequest::getVar('what').'&cat='.JRequest::getVar('cat').'&subCat='.JRequest::getVar('subCat').'&p='.$currentPage; ?>">view more</a>

    </span>

</div>

<div style="padding-top: 0px;" class="Rajouri_title"><?php print $listing->companyname.', '.$listing->city ?></div>

<div class="clr"></div>

<!--<div class="n_img"><img src="images/n_img.jpg" /></div>-->

<div class="flower_box_one">

<div class="box_title_img">

<div class="msg_img_one"><a id="showSmspop" onClick="return showSMS();"  style="cursor: pointer;">

<img src="images/mail_blue_img.jpg" /></div>

<div class="box_titles">SMS/Email</a></div>

<div class="msg_img"><a id="showEmail" onClick="return showEmail();"  style="cursor: pointer;">

<img src="images/send_enquiry_blue_img.jpg" /></div>

<div class="box_titles">Send Enquiry</a></div>

<!--<div class="msg_img"><img src="images/seeon_map_img.jpg" /></div>-->

<!--<div class="box_titles">See on Map</div>-->

</div>

</div>

</div>

<?php $i++; endforeach;

$res=$this->_rescount;



$json  = json_encode($res);

$res = json_decode($json, true);



$res=$res['0'];



$max_per_page=6;

$res=ceil($res/25);



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

?>



<!-- pagination starts here -->

<div class="first_prew">

<ul>

<?php

 if($start): ?>

<li>Prev</li>

<?php else:



if($prev==0)

	{

		$prev=1;

		} ?>    

<li><a href="<?php echo $this->_paginationUrl.$prev ?>">Prev</a></li>

<?php endif; ?>    

<?php 

$u=JRequest::getVar('pageno');



$li=$u+1;

if($res>9)

{

$li=9;

}

else

{

$li=$res;

}

for($i=1;$i<=$li;$i++){

	

	 ?>

<?php if($currentPage==$i): ?>

<li <?php  echo ($currentPage==$i)?'class="selected"':'' ?> href="<?php echo $this->_paginationUrl.$i ?>"><?php echo $i ?></li>

<?php else: ?>

<li><a <?php echo ($currentPage==$i)?'class="selected"':'' ?> href="<?php echo $this->_paginationUrl.$i ?>"><?php echo $i ?></a></li>

<?php endif; ?>

<?php } ?>

<?php if($end): ?>

<li>Next</li>

<?php else: 

 

  if($next>$res)

	{$next=$res;

	}

	///echo $next;?>    

<li><a href="<?php echo $this->_paginationUrl.$next?>">Next</a></li>



<?php endif; ?>   

</ul>

</div>



<!-- pagination ends here -->

<!-- resulting ends here -->

<?php else: ?>

<h3>No result found!</h3>

<?php endif; ?>

<!-- sms/email popup div -->



<!-- sms/email popup div ends here-->



<!-- send enquiry popup div -->



<!-- send enquiry popup div ends here-->

