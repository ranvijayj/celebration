<?php

defined('_JEXEC') or die;

//print_r($this->_item);
if(!$this->_item):
    echo '<h2 style="color: red;" >Hack attempt!</h2>';
else:
    $item=$this->_item[0];
//print_r($item);
?>
<div id="k2Container">
       <div class="deatails_main">
<div class="bigchill">
<div class="chill_logo">
	  <!-- Item extra fields -->
<img src="images/travel/no_img.jpg" />	
	  </div>
	  
	  
<div class="bigtxtmain">
<div class="bigbold">
  	<?php echo $item->companyname; ?></div>
<div class="bigchillstar">

	<!-- rating result -->
        <div class="iemRatingBlock" style="display: none;">
		<span></span>
		<div class="iemRatingForm">
			<ul class="itemRatingList">
                           <li class="itemCurrentRating" id="itemCurrentRatingU2323200P4695201L3640982" style="width:0%;"></li>
				<li><a class="one-star">1</a></li>
				<li><a class="two-stars">2</a></li>
				<li><a class="three-stars">3</a></li>
				<li><a class="four-stars">4</a></li>
				<li><a class="five-stars">5</a></li>
			</ul>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
<!-- rating result ends here-->
</div>
    <div class="clr"></div>
<div class="vasnatadd">
        <strong>Address: </strong>	<?php echo $item->address ?> <br />
        <strong>City: </strong>	<?php echo $item->city ?>            <br />
        <strong>State: </strong>	<?php echo $item->state ?>           <br />
        <strong>Pincode: </strong>	<?php echo $item->pincode ?>    	  </div>
	<div class="mobile"><img src="/images/phone.png"></div>
            <div class="telephoneno"><?php echo $item->phone ?></div>
										
	
<div class="clr"></div>
<div style="display: none;" class="otehr_branches">Other Branches in</div>
<div style="display: none;" class="other_mumbai">
<ul>
<li><a href="#">Mumbai(2)</a></li>
<li id="lastm"><a href="#">Other Cities(24)</a></li>
</ul>
</div>
<div class="clr"></div>
</div>

<div class="clicltocall_main">
<div class="clickbtnone"><img src="/images/click_tocall.gif"></div>
<div class="clickbtntwo"><a id="showSmspop" onclick="javascript::showSMS()" style="cursor: pointer;"><img src="/images/sms_mail.gif" border="0"></a></div>
<div class="clickbtntwo"><a href="/restaurant/vegetarian?id=U2323200P4695201L3640982#sendEnquiry" id=""><img src="/images/send_qauriry.gif" border="0"></a></div>
<div class="clickbtntwo"><a href="/restaurant/vegetarian?id=U2323200P4695201L3640982#commentForm"><img src="/images/write_review.gif"></a></div>
</div>	

<div class="clr"></div>
<div class="dealsin">Deals in : <span class="dealrestou"><?php echo str_replace('/',', ',($item->category)) ?></span></div>
</div>

  <a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>

  <div class="user-reviewmain" style="display: none;">

<div class="userrev_boxleft"></div>
<div class="userrev_boxmid">User Review (2) <span class="writerev">
        <a href="/restaurant/vegetarian?id=U2323200P4695201L3640982#commentForm">Write a review</a></span> <span class="revdroparrow"><img src="/images/green_arrow.png"></span></div>
<div class="userrev_boxright"></div>
<div class="clr"></div>
<div class="itemmments">
</div>
<div class="clr"></div>
<div class="handyestxt">Was it helpful to you ?</div>
<div class="handimg"><img src="/images/yes.png"></div>
<div class="handimgtxt">Yes</div>
<div class="handimg"><img src="/images/no.png"></div>
<div class="handimgtxt">No</div>
<div class="reqremovel"><img src="/images/request_removal.png"></div>
<div class="clr"></div>
</div>

  <div class="itemBackToTop" style="display: none;">
		<a class="k2Anchor" href="/restaurant/vegetarian?id=U2323200P4695201L3640982#commentForm">
			Back to top
		</a>
	</div>
  
	<!-- Social sharing -->
        <div class="itemSocialSharing" style="margin-left: 300px;">

		<!-- Twitter Button -->
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_sharethis_hcount' displayText='ShareThis'></span>
		<!-- Facebook Button -->
		<div class="clr"></div>
        
	</div>
            
<span></span>
   <span id="commentForm"></span>
<div class="itemComents">
<div class="itemCommentsForm">
<div class="boxt">
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
<div style="font-size:12px; font-weight:bold; line-height:20px;"><h3>
Leave a comment</h3></div>
<p class="itemCommentsFormNotes" style="font-size:12px; width:590px; padding:5px 0px 5px 0px;">
		Make sure you enter the (*) required information where indicated. HTML code is not allowed.	</p>
<form action="" method="post" name="comm" onsubmit="return validateComment();">
        	<!-- Item Rating -->
                <div style="font-size: 12px; color: #000;" class="catItemRatingBlock">
		<span style="color:#000000; padding-top:2px;">Rate this item</span>
                <div class="itemRatingForm" id="restaurantRating">
			<ul class="itemRatingList">
				<li class="itemCurrentRating" id="itemCurrentRatingU2323200P4695201L3640982" style="width:0%;"></li>
				<li><a href="#" rel="U2323200P4695201L3640982" title="1 star out of 5" class="one-star">1</a></li>
				<li><a href="#" rel="U2323200P4695201L3640982" title="2 stars out of 5" class="two-stars">2</a></li>
				<li><a href="#" rel="U2323200P4695201L3640982" title="3 stars out of 5" class="three-stars">3</a></li>
				<li><a href="#" rel="U2323200P4695201L3640982" title="4 stars out of 5" class="four-stars">4</a></li>
				<li><a href="#" rel="U2323200P4695201L3640982" title="5 stars out of 5" class="five-stars">5</a></li>
			</ul>
                    <div class="itemRatingLog" style="margin:0px 0px 0px 4px; color:#E75900;" id="itemRatingLogU2323200P4695201L3640982">(0 votes)</div>
                        <div class=""></div>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
              <!-- Item Rating ends here -->  
    <label class="formName emailtxt" for="userName">Name *</label>
	<input class="inputbox inpt" style="width:450px; margin-top:5px; font-family:Arial, Helvetica, sans-serif;" type="text" name="userName" id="userName" value="enter your name..." onblur="if(this.value=='') this.value='enter your name...';" onfocus="if(this.value=='enter your name...') this.value='';">
	<div class="clr"></div>
    <label class="formEmail emailtxt" for="commentEmail">Email *</label>
    <input class="inputbox inpt" style="width:450px; margin-top:10px; font-family:Arial, Helvetica, sans-serif;" type="text" name="commentEmail" id="commentEmail" value="enter your e-mail address..." onblur="if(this.value=='') this.value='enter your e-mail address...';" onfocus="if(this.value=='enter your e-mail address...') this.value='';">
<div class="clr"></div>
		<label class="formComment emailtxt" for="commentText">Message *</label>
	<textarea rows="5" cols="10" style="width:452px; margin-top:10px; height:100px; padding-left:2px; font-family:Arial, Helvetica, sans-serif;" class="inputbox" onblur="if(this.value=='') this.value='enter your message here...';" onfocus="if(this.value=='enter your message here...') this.value='';" name="commentText" id="commentText">enter your message here...</textarea>
<!--	<input type="submit" class="button" value="Submit comment" />-->
        <br><input type="image" style="margin-left:77px; padding:0px;" src="/images/submit.png" border="0" value="Submit">

	<span id="formLog"></span>
<!---->
	<input type="hidden" name="option" value="com_webservices">
	<input type="hidden" name="view" value="webservices">
	<input type="hidden" name="task" value="addComment">
	<input type="hidden" name="itemID" value="U2323200P4695201L3640982">
    <input type="hidden" name="url" value="food.getit.in/restaurant/vegetarian?id=U2323200P4695201L3640982">
    <input type="hidden" name="1a5aab156d23a053f5e164311c1f617e" value="1"></form>
</div>

<script type="text/javascript">
$(document).ready(function(){
    
       function getVotesPercentage(){
                return '0';
    }
    function alreadyRated(){
                return ;
    }
          // Rating
        $('#restaurantRating a').click(function(event){
            
                event.preventDefault();
                var itemID = $(this).attr('rel');
                var log = $('#itemRatingLog' + itemID).empty().addClass('formLogLoading');
                var rating = $(this).html();
                if(alreadyRated()==true){
                    log.removeClass('formLogLoading');
                    log.html('You have already rated.');
                    return false;
                }
                $.ajax({
                        url: K2SitePath+"index.php?option=com_webservices&view=webservices&task=vote&user_rating=" + rating + "&itemID=" + itemID,
                        type: 'get',
                        success: function(response){
//                            alert('rate ho gaya');
                                log.removeClass('formLogLoading');
                                log.html('Thanks for rating!');
                                $.ajax({
                                        url: K2SitePath+"index.php?option=com_webservices&view=webservices&task=getVotesPercentage&itemID=" + itemID,
                                        type: 'get',
                                        success: function(percentage){
//                                            alert('percentage retrrd');

                                                  var percentage= getVotesPercentage();
//                                                  alert(percentage);
                                                $('#itemCurrentRating' + itemID).css('width', percentage + "%");
                                                setTimeout(function(){
                                                        $.ajax({
                                                                url: K2SitePath+"index.php?option=com_webservices&view=webservices&task=getVotesNum&itemID=" + itemID,
                                                                type: 'get',
                                                                success: function(response){
                                                                        log.html('You have successfully voted');
//                                                                        alert('show ho gaya');
                                                                }
                                                        });
                                                }, 1000);
                                        }
                                });
                        }
                });
        });
});
</script>

</div>
</div>
</div>
</div>
<?php
endif;
?>