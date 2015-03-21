<style>
div.item_Comments
 {border:1px solid #ddd; background:#edf681;padding:16px; margin-top:10px;}
.itemCommentsCounter{ font-size:20px; font-family:Tahoma, Geneva, sans-serif; color:#000}
div.itemCommentsForm h3 {margin:0;padding:0 0 4px 0;  }
.box_comment_detail{  margin-left:48px; margin-top:8px; margin-bottom:10px;  font:  13px Tahoma, Geneva, sans-serif; color:#000; float:left; width:67px; text-align:right;}
.box_field_detail{  padding:0px; float:left; margin-left:10px;}
.box_input_detail{ width:306px; height:27px; float:left; border:none; font:13px Tahoma, Geneva, sans-serif; color:#545a66; padding-left:10px; }
.box_message_detail{ width:306px; height:57px;  float:left; border:none; font:  13px Tahoma, Geneva, sans-serif; color:#545a66; padding-bottom:10px; padding-top:10px; padding-left:10px; text-align:start;}
div.itemCommentsForm form input#submitCommentButton {display:block;margin:16px 0 0 0;padding:4px;background:#467417; color:#fff;font-size:16px;}
div.itemCommentsForm p.itemCommentsFormNotes { border:none;}

#midContainer .midRight{width:300px; float:left;margin:0 0 0 7px;}
#midContainer .midRight .hotDeals{width:300px;height:250px;margin:10px 0;}

#midContainer .midRight .receipe{width:297px;height:221px;}
#midContainer .midRight .receipeShadow{background:url(../images/ReceipeShadow.jpg) no-repeat;width:297px;height:6px;}
#midContainer .midRight .receipe .rBlock{width:100%;background:#a20208;height:31px;font-size:18px;font-weight:normal;color:#fff;line-height:31px;border-left:5px solid #000;text-indent:5px;}
#midContainer .midRight .receipe .rMid{width:100%;}
#midContainer .midRight .receipe .rMid .rIcon{width:109px;height:63px;margin-top:9px;}
#midContainer .midRight .receipe .rMid h1{font-size:12px;font-weight:bold;color:#202316;line-height:14px;padding:4px 0;}
#midContainer .midRight .receipe .rMid li{display:inline-block;width:132px;line-height:16px;margin:0 0 0 20px;}
#midContainer .midRight .receipe .rMid li:first-child{margin:0 0 0 6px;}
#midContainer .midRight .receipe .rMid .rfadeSdw{background:url(../images/reciepRightShadow.jpg) top right no-repeat;}
#midContainer .midRight .receipe .rMid a:link, #midContainer .midRight .receipe .rMid a:visited{text-decoration;underline;color:#1e220d;}
#midContainer .midRight .receipe .rMid a:hover{text-decoration;underline;color:#a20208;}

#midContainer .midRight .moments{width:295px;background:#f5f5f5;padding-bottom:16px;margin-top:14px;}
#midContainer .midRight .moments .mBlock{width:100%;background:#0f6ca6;height:31px;font-size:18px;font-weight:normal;color:#fff;line-height:31px;border-left:5px solid #000;text-indent:5px;}
#midContainer .midRight .moments .mBlock ul.mTabs{}
#midContainer .midRight .moments .mBlock ul.mTabs li{display:block;margin-top:2px;color:#000;font-size:16px;float:left;}
#midContainer .midRight .moments .mBlock ul.mTabs li a:link, #midContainer .midRight .moments .mBlock ul.mTabs li a:visited{display:block;text-decoration:none;padding:0 10px;color:#fff;}
#midContainer .midRight .moments .mBlock ul.mTabs li a:hover{display:block;text-decoration:none;background:#f5f5f5;padding:0 14px;color:#000;}
#midContainer .midRight .moments .momentsData{width:94%;margin:0 auto;}
#midContainer .midRight .moments .momentsData ul.mData{width:94%;margin:0 auto;}
#midContainer .midRight .moments .momentsData ul.mData li{}
#midContainer .midRight .moments .momentsData ul.mData li .mPic{width:68px; height:63px;float:left;margin-top:12px;}
#midContainer .midRight .moments .momentsData ul.mData li .mPicData{width:180px; height:63px;float:left;padding-left:10px;line-height:16px;margin-top:12px;}
#midContainer .midRight .moments .momentsData ul.mData li .mPicData h1{font-size:12px;font-weight:bold;color:#a20208;line-height:14px;}
#midContainer .midRight .moments .momentsData ul.mData li .mPicData a:link, #midContainer .midRight .moments .momentsData ul.mData li .mPicData a:visited{text-decoration;underline;color:#1e220d;}
#midContainer .midRight .moments .momentsData ul.mData li .mPicData a:hover{text-decoration;underline;color:#a20208;}
#midContainer .midRight .advB{width:300px; height:250px;margin:17px 0;}
#midContainer .midRight .fb{width:298px; height:200px;}
</style>
<?php
/**
 * @version		$Id: item.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>




<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->
<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;">
	<span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span>
</a>
<?php endif; ?>

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<div id="k2Container" style="margin:0px; padding:0px; border:0px;" class="itemView<?php echo ($this->item->featured) ? ' itemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">
<div class="share_text"><?php if($this->item->params->get('itemTitle')): ?>
	  <!-- Item title -->
	    <div class="ptBlock">
	  <div class="itemTitle" style="padding:0px 0px 0px 10px; margin:0px; font-size:20px; font-family:HelveticaLT Compressed; font-weight:bold; color:#fff;">
			<?php if(isset($this->item->editLink)): ?>
			<!-- Item edit link -->
			<span class="itemEditLink">
				<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
					<?php echo JText::_('K2_EDIT_ITEM'); ?>
				</a>
			</span>
			<?php endif; ?>
			
	  	<?php echo $this->item->title; ?>

	  	<?php if($this->item->params->get('itemFeaturedNotice') && $this->item->featured): ?>
	  	<!-- Featured flag -->
	  	<span>
		  	<sup>
		  		<?php echo JText::_('K2_FEATURED'); ?>
		  	</sup>
	  	</span>
	  	<?php endif; ?>
</div>
	  </div>
	  <?php endif; ?></div>
<!--<div class="share_drop"><select><option>Sort By Date</option></select></div>-->
<div class="clr"></div>
<div class="share_main_detail">
<div class="share_detail_img"><?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
	  <!-- Item Image -->
	  <div class="itemImageBlock" style="margin:0px; padding:0px;">
		  
		  	<a class="modal" rel="{handler: 'image'}" href="<?php echo $this->item->imageXLarge; ?>" title="<?php echo JText::_('K2_CLICK_TO_PREVIEW_IMAGE'); ?>">
		  		<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:195px;" />
		  	</a>
		 

		  <?php if($this->item->params->get('itemImageMainCaption') && !empty($this->item->image_caption)): ?>
		  <!-- Image caption -->
		  <span class="itemImageCaption"><?php echo $this->item->image_caption; ?></span>
		  <?php endif; ?>

		  <?php if($this->item->params->get('itemImageMainCredits') && !empty($this->item->image_credits)): ?>
		  <!-- Image credits -->
		  <span class="itemImageCredits"><?php echo $this->item->image_credits; ?></span>
		  <?php endif; ?>

		  <div class="clr"></div>
	  </div>
	  <?php endif; ?></div>
<div class="title_detail_img">
<div class="share_title">
<?php if($this->item->params->get('itemTitle')): ?>
<?php echo $this->item->title; ?>
<?php endif; ?>
</div>
<div class="review_detail">
<?php if($this->item->params->get('itemRating')): ?>
	<!-- Item Rating -->
	<div class="itemRatingBlock" style="float:left;">
		<span><?php //echo JText::_('K2_RATE_THIS_ITEM'); ?></span>
		<div class="itemRatingForm">
			<ul class="itemRatingList">
				<li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
				<li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
				<li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
				<li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
				<li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
				<li><a href="#" rel="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
			</ul>
			<div id="itemRatingLog<?php echo $this->item->id; ?>" class="deatail_rating_title"><?php echo $this->item->numOfvotes; ?>| write a review</div>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

</div>
<?php $auth_id=$this->item->created_by;
 $db = JFactory::getDBO();
$sql = "select username from #__users where id='".$auth_id."'";
$db->setQuery($sql);
$row = $db->loadAssocList(); 
//print_r($row);
?>

<div class="detail_texts_blue">upload by : <?php echo $row['0']['username'];//echo $this->item->author->name; ?>, <?php if($this->item->params->get('itemDateCreated')): ?>
		<!-- Date created -->
		<span class="itemDateCreated">
			<?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
		</span>
		<?php endif; ?></div>
		
		
<div class="itemBody" style="padding:0px; margin:0px;">

	  <!-- Plugins: BeforeDisplayContent -->
	  <?php echo $this->item->event->BeforeDisplayContent; ?>

	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  <?php echo $this->item->event->K2BeforeDisplayContent; ?>

	  

	  <?php if(!empty($this->item->fulltext)): ?>
	  <?php if($this->item->params->get('itemIntroText')): ?>
	  <!-- Item introtext -->
	  <div class="itemIntroText">
	  	<?php echo $this->item->introtext; ?>
	  </div>
	  <?php endif; ?>
	  <?php if($this->item->params->get('itemFullText')): ?>
	  <!-- Item fulltext -->
	  <div class="itemFullText" style="font-size:11px; font-family:Tahoma; color:#000; line-height:15px;">
	  	<?php echo $this->item->fulltext; ?>
	  </div>
	  <?php endif; ?>
	  <?php else: ?>
	  <!-- Item text -->
	  <div class="itemFullText" style="font-size:11px; font-family:Tahoma; color:#000; line-height:17px; padding-left:10px; padding-top:6px;">
	  	<?php echo $this->item->introtext; ?>
	  </div>
	  <?php endif; ?>

		<div class="clr"></div>

	  <?php if($this->item->params->get('itemExtraFields') && count($this->item->extra_fields)): ?>
	  <!-- Item extra fields -->
	  <div class="itemExtraFields">
	  	<h3><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></h3>
	  	<ul>
			<?php foreach ($this->item->extra_fields as $key=>$extraField): ?>
			<?php if($extraField->value): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; ?> type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
				<span class="itemExtraFieldsLabel"><?php echo $extraField->name; ?>:</span>
				<span class="itemExtraFieldsValue"><?php echo $extraField->value; ?></span>
			</li>
			<?php endif; ?>
			<?php endforeach; ?>
			</ul>
	    <div class="clr"></div>
	  </div>
	  <?php endif; ?>

		

	  <!-- Plugins: AfterDisplayContent -->
	  <?php echo $this->item->event->AfterDisplayContent; ?>

	  <!-- K2 Plugins: K2AfterDisplayContent -->
	  <?php echo $this->item->event->K2AfterDisplayContent; ?>

	  <div class="clr"></div>
  </div>		
</div>

<div class="detail_one_white">
<div class="share_msg_img"><a href="https://twitter.com/share" class="twitter-share-button" data-dnt="true">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><!--<img src="images/twitter_share.jpg" />--></div>
<div class="share_msg_img"><div class="fb-like" data-href="http://fashion.getit.in" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div></div><!--<img src="images/fb_share.jpg" />--></div>
</div>
<div class="clr"></div>
</div>
<?php //echo $this->item->comments;
 foreach ($this->item->comments as $key=>$comment): ?>	
<div class="comment_main_white">
<div class="share_title_img">
<div class="green_txt"><?php echo $comment->commentText; ?></div>
<div class="black_txt1"><?php echo $comment->userName; ?>, 
<span class="grey_txt1"><?php echo JHTML::_('date', $comment->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?></span></div>
</div>
</div>
<?php endforeach; ?>


	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>

	<div class="itemHeader">

		



	  

		<?php if($this->item->params->get('itemAuthor')): ?>
		<!-- Item Author -->
		<span class="itemAuthor">
			<?php echo K2HelperUtilities::writtenBy($this->item->author->profile->gender); ?>&nbsp;
			<?php if(empty($this->item->created_by_alias)): ?>
			<a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
			<?php else: ?>
			<?php echo $this->item->author->name; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>

  </div>

  <!-- Plugins: AfterDisplayTitle -->
  <?php echo $this->item->event->AfterDisplayTitle; ?>

  <!-- K2 Plugins: K2AfterDisplayTitle -->
  <?php echo $this->item->event->K2AfterDisplayTitle; ?>

	<?php if(
		$this->item->params->get('itemFontResizer') ||
		$this->item->params->get('itemPrintButton') ||
		$this->item->params->get('itemEmailButton') ||
		$this->item->params->get('itemSocialButton') ||
		$this->item->params->get('itemVideoAnchor') ||
		$this->item->params->get('itemImageGalleryAnchor') ||
		$this->item->params->get('itemCommentsAnchor')
	): ?>
  <div class="itemToolbar">
		<ul>
			<?php if($this->item->params->get('itemFontResizer')): ?>
			<!-- Font Resizer -->
			<li>
				<span class="itemTextResizerTitle"><?php echo JText::_('K2_FONT_SIZE'); ?></span>
				<a href="#" id="fontDecrease">
					<span><?php echo JText::_('K2_DECREASE_FONT_SIZE'); ?></span>
					<img src="<?php echo JURI::root(true); ?>/components/com_k2/images/system/blank.gif" alt="<?php echo JText::_('K2_DECREASE_FONT_SIZE'); ?>" />
				</a>
				<a href="#" id="fontIncrease">
					<span><?php echo JText::_('K2_INCREASE_FONT_SIZE'); ?></span>
					<img src="<?php echo JURI::root(true); ?>/components/com_k2/images/system/blank.gif" alt="<?php echo JText::_('K2_INCREASE_FONT_SIZE'); ?>" />
				</a>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemPrintButton') && !JRequest::getInt('print')): ?>
			<!-- Print Button -->
			<li>
				<a class="itemPrintLink" rel="nofollow" href="<?php echo $this->item->printLink; ?>" onclick="window.open(this.href,'printWindow','width=900,height=600,location=no,menubar=no,resizable=yes,scrollbars=yes'); return false;">
					<span><?php echo JText::_('K2_PRINT'); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemEmailButton') && !JRequest::getInt('print')): ?>
			<!-- Email Button -->
			<li>
				<a class="itemEmailLink" rel="nofollow" href="<?php echo $this->item->emailLink; ?>" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;">
					<span><?php echo JText::_('K2_EMAIL'); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemSocialButton') && !is_null($this->item->params->get('socialButtonCode', NULL))): ?>
			<!-- Item Social Button -->
			<li>
				<?php echo $this->item->params->get('socialButtonCode'); ?>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemVideoAnchor') && !empty($this->item->video)): ?>
			<!-- Anchor link to item video below - if it exists -->
			<li>
				<a class="itemVideoLink k2Anchor" href="<?php echo $this->item->link; ?>#itemVideoAnchor"><?php echo JText::_('K2_MEDIA'); ?></a>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemImageGalleryAnchor') && !empty($this->item->gallery)): ?>
			<!-- Anchor link to item image gallery below - if it exists -->
			<li>
				<a class="itemImageGalleryLink k2Anchor" href="<?php echo $this->item->link; ?>#itemImageGalleryAnchor"><?php echo JText::_('K2_IMAGE_GALLERY'); ?></a>
			</li>
			<?php endif; ?>

			<?php if($this->item->params->get('itemCommentsAnchor') && $this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1')) ): ?>
			<!-- Anchor link to comments below - if enabled -->
			<li>
				<?php if(!empty($this->item->event->K2CommentsCounter)): ?>
					<!-- K2 Plugins: K2CommentsCounter -->
					<?php echo $this->item->event->K2CommentsCounter; ?>
				<?php else: ?>
					<?php if($this->item->numOfComments > 0): ?>
					<a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
						<span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
					</a>
					<?php else: ?>
					<a class="itemCommentsLink k2Anchor" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
						<?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
					</a>
					<?php endif; ?>
				<?php endif; ?>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clr"></div>
  </div>
	<?php endif; ?>

	

  

	<?php /*?><?php if($this->item->params->get('itemTwitterButton',1) || $this->item->params->get('itemFacebookButton',1) || $this->item->params->get('itemGooglePlusOneButton',1)): ?>
	<!-- Social sharing -->
	<div class="itemSocialSharing">

		<?php if($this->item->params->get('itemTwitterButton',1)): ?>
		<!-- Twitter Button -->
		<div class="itemTwitterButton">
			<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"<?php if($this->item->params->get('twitterUsername')): ?> data-via="<?php echo $this->item->params->get('twitterUsername'); ?>"<?php endif; ?>><?php echo JText::_('K2_TWEET'); ?></a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
		</div>
		<?php endif; ?>
		
		<?php if($this->item->params->get('itemFacebookButton',1)): ?>
		<!-- Facebook Button -->
		<div class="itemFacebookButton">
			<div id="fb-root"></div>
			<script type="text/javascript">
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) {return;}
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#appId=177111755694317&xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemGooglePlusOneButton',1)): ?>
		<!-- Google +1 Button -->
		<div class="itemGooglePlusOneButton">	
			<g:plusone annotation="inline" width="120"></g:plusone>
			<script type="text/javascript">
			  (function() {
			  	window.___gcfg = {lang: 'en'}; // Define button default language here
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>
		<?php endif; ?>
		
		<div class="clr"></div>
	</div>
	<?php endif; ?><?php */?>

  <?php if($this->item->params->get('itemCategory') || $this->item->params->get('itemTags') || $this->item->params->get('itemAttachments')): ?>
  <div class="itemLinks">

		<?php if($this->item->params->get('itemCategory')): ?>
		<!-- Item category -->
		<div class="itemCategory">
			<span><?php echo JText::_('K2_PUBLISHED_IN'); ?></span>
			<a href="<?php echo $this->item->category->link; ?>"><?php echo $this->item->category->name; ?></a>
		</div>
		<?php endif; ?>

	  <?php if($this->item->params->get('itemTags') && count($this->item->tags)): ?>
	  <!-- Item tags -->
	  <div class="itemTagsBlock">
		  <span><?php echo JText::_('K2_TAGGED_UNDER'); ?></span>
		  <ul class="itemTags">
		    <?php foreach ($this->item->tags as $tag): ?>
		    <li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
		    <?php endforeach; ?>
		  </ul>
		  <div class="clr"></div>
	  </div>
	  <?php endif; ?>

	  <?php if($this->item->params->get('itemAttachments') && count($this->item->attachments)): ?>
	  <!-- Item attachments -->
	  <div class="itemAttachmentsBlock">
		  <span><?php echo JText::_('K2_DOWNLOAD_ATTACHMENTS'); ?></span>
		  <ul class="itemAttachments">
		    <?php foreach ($this->item->attachments as $attachment): ?>
		    <li>
			    <a title="<?php echo K2HelperUtilities::cleanHtml($attachment->titleAttribute); ?>" href="<?php echo $attachment->link; ?>"><?php echo $attachment->title; ?></a>
			    <?php if($this->item->params->get('itemAttachmentsCounter')): ?>
			    <span>(<?php echo $attachment->hits; ?> <?php echo ($attachment->hits==1) ? JText::_('K2_DOWNLOAD') : JText::_('K2_DOWNLOADS'); ?>)</span>
			    <?php endif; ?>
		    </li>
		    <?php endforeach; ?>
		  </ul>
	  </div>
	  <?php endif; ?>

		<div class="clr"></div>
  </div>
  <?php endif; ?>

  <?php /*?><?php if($this->item->params->get('itemAuthorBlock') && empty($this->item->created_by_alias)): ?>
  <!-- Author Block -->
  <div class="itemAuthorBlock">

  	<?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
  	<img class="itemAuthorAvatar" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>" />
  	<?php endif; ?>

    <div class="itemAuthorDetails">
      <h3 class="itemAuthorName">
      	<a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
      </h3>

      <?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
      <p><?php echo $this->item->author->profile->description; ?></p>
      <?php endif; ?>

      <?php if($this->item->params->get('itemAuthorURL') && !empty($this->item->author->profile->url)): ?>
      <span class="itemAuthorUrl"><?php echo JText::_('K2_WEBSITE'); ?> <a rel="me" href="<?php echo $this->item->author->profile->url; ?>" target="_blank"><?php echo str_replace('http://','',$this->item->author->profile->url); ?></a></span>
      <?php endif; ?>

      <?php if($this->item->params->get('itemAuthorEmail')): ?>
      <span class="itemAuthorEmail"><?php echo JText::_('K2_EMAIL'); ?> <?php echo JHTML::_('Email.cloak', $this->item->author->email); ?></span>
      <?php endif; ?>

			<div class="clr"></div>

			<!-- K2 Plugins: K2UserDisplay -->
			<?php echo $this->item->event->K2UserDisplay; ?>

    </div>
    <div class="clr"></div>
  </div>
  <?php endif; ?><?php */?>

  <?php if($this->item->params->get('itemAuthorLatest') && empty($this->item->created_by_alias) && isset($this->authorLatestItems)): ?>
  <!-- Latest items from author -->
	<div class="itemAuthorLatest">
		<h3><?php echo JText::_('K2_LATEST_FROM'); ?> <?php echo $this->item->author->name; ?></h3>
		<ul>
			<?php foreach($this->authorLatestItems as $key=>$item): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; ?>">
				<a href="<?php echo $item->link ?>"><?php echo $item->title; ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<?php
	/*
	Note regarding 'Related Items'!
	If you add:
	- the CSS rule 'overflow-x:scroll;' in the element div.itemRelated {…} in the k2.css
	- the class 'k2Scroller' to the ul element below
	- the classes 'k2ScrollerElement' and 'k2EqualHeights' to the li element inside the foreach loop below
	- the style attribute 'style="width:<?php echo $item->imageWidth; ?>px;"' to the li element inside the foreach loop below
	...then your Related Items will be transformed into a vertical-scrolling block, inside which, all items have the same height (equal column heights). This can be very useful if you want to show your related articles or products with title/author/category/image etc., which would take a significant amount of space in the classic list-style display.
	*/
	?>
		
  <?php if($this->item->params->get('itemRelated') && isset($this->relatedItems)): ?>
  <!-- Related items by tag -->
	<div class="itemRelated">
		<h3><?php echo JText::_("K2_RELATED_ITEMS_BY_TAG"); ?></h3>
		<ul>
			<?php foreach($this->relatedItems as $key=>$item): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; ?>">
			
				<?php if($this->item->params->get('itemRelatedTitle', 1)): ?>
				<a class="itemRelTitle" href="<?php echo $item->link ?>"><?php echo $item->title; ?></a>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedCategory')): ?>
				<div class="itemRelCat"><?php echo JText::_("K2_IN"); ?> <a href="<?php echo $item->category->link ?>"><?php echo $item->category->name; ?></a></div>
				<?php endif; ?>
				
				<?php if($this->item->params->get('itemRelatedAuthor')): ?>
				<div class="itemRelAuthor"><?php echo JText::_("K2_BY"); ?> <a rel="author" href="<?php echo $item->author->link; ?>"><?php echo $item->author->name; ?></a></div>
				<?php endif; ?>
				
				<?php if($this->item->params->get('itemRelatedImageSize')): ?>
				<img style="width:<?php echo $item->imageWidth; ?>px;height:auto;" class="itemRelImg" src="<?php echo $item->image; ?>" alt="<?php K2HelperUtilities::cleanHtml($item->title); ?>" />
				<?php endif; ?>
				
				<?php if($this->item->params->get('itemRelatedIntrotext')): ?>
				<div class="itemRelIntrotext"><?php echo $item->introtext; ?></div>
				<?php endif; ?>
				
				<?php if($this->item->params->get('itemRelatedFulltext')): ?>
				<div class="itemRelFulltext"><?php echo $item->fulltext; ?></div>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedMedia')): ?>
				<?php if($item->videoType=='embedded'): ?>
				<div class="itemRelMediaEmbedded"><?php echo $item->video; ?></div>
				<?php else: ?>
				<div class="itemRelMedia"><?php echo $item->video; ?></div>
				<?php endif; ?>
				<?php endif; ?>
				
				<?php if($this->item->params->get('itemRelatedImageGallery')): ?>
				<div class="itemRelImageGallery"><?php echo $item->gallery; ?></div>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
			<li class="clr"></li>
		</ul>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<div class="clr"></div>

  <?php if($this->item->params->get('itemVideo') && !empty($this->item->video)): ?>
  <!-- Item video -->
  <a name="itemVideoAnchor" id="itemVideoAnchor"></a>

  <div class="itemVideoBlock">
  	<h3><?php echo JText::_('K2_MEDIA'); ?></h3>

		<?php if($this->item->videoType=='embedded'): ?>
		<div class="itemVideoEmbedded">
			<?php echo $this->item->video; ?>
		</div>
		<?php else: ?>
		<span class="itemVideo"><?php echo $this->item->video; ?></span>
		<?php endif; ?>

	  <?php if($this->item->params->get('itemVideoCaption') && !empty($this->item->video_caption)): ?>
	  <span class="itemVideoCaption"><?php echo $this->item->video_caption; ?></span>
	  <?php endif; ?>

	  <?php if($this->item->params->get('itemVideoCredits') && !empty($this->item->video_credits)): ?>
	  <span class="itemVideoCredits"><?php echo $this->item->video_credits; ?></span>
	  <?php endif; ?>

	  <div class="clr"></div>
  </div>
  <?php endif; ?>

  <?php if($this->item->params->get('itemImageGallery') && !empty($this->item->gallery)): ?>
  <!-- Item image gallery -->
  <a name="itemImageGalleryAnchor" id="itemImageGalleryAnchor"></a>
  <div class="itemImageGallery">
	  <h3><?php echo JText::_('K2_IMAGE_GALLERY'); ?></h3>
	  <?php echo $this->item->gallery; ?>
  </div>
  <?php endif; ?>

  <?php if($this->item->params->get('itemNavigation') && !JRequest::getCmd('print') && (isset($this->item->nextLink) || isset($this->item->previousLink))): ?>
  <!-- Item navigation -->
  <div class="itemNavigation">
  	<span class="itemNavigationTitle"><?php echo JText::_('K2_MORE_IN_THIS_CATEGORY'); ?></span>

		<?php if(isset($this->item->previousLink)): ?>
		<a class="itemPrevious" href="<?php echo $this->item->previousLink; ?>">
			&laquo; <?php echo $this->item->previousTitle; ?>
		</a>
		<?php endif; ?>

		<?php if(isset($this->item->nextLink)): ?>
		<a class="itemNext" href="<?php echo $this->item->nextLink; ?>">
			<?php echo $this->item->nextTitle; ?> &raquo;
		</a>
		<?php endif; ?>

  </div>
  <?php endif; ?>

  <!-- Plugins: AfterDisplay -->
  <?php echo $this->item->event->AfterDisplay; ?>

  <!-- K2 Plugins: K2AfterDisplay -->
  <?php echo $this->item->event->K2AfterDisplay; ?>

  <?php if($this->item->params->get('itemComments') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))): ?>
  <!-- K2 Plugins: K2CommentsBlock -->
  <?php echo $this->item->event->K2CommentsBlock; ?>
  <?php endif; ?>

 <?php if($this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)): ?>
  <!-- Item comments -->
  <a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>

  <div class="item_Comments" style="padding:4px;">

	  <?php if($this->item->params->get('commentsFormPosition')=='above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
	  <!-- Item comments form -->
	  <div class="itemCommentsCounter">
	  	<?php echo $this->loadTemplate('comments_form'); ?>
	  </div>
	  <?php endif; ?>

	  <?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
	  <!-- Item user comments -->
	  <h3 class="itemCommentsCounter">
	  	<span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
	  </h3>

	  
	    

	  <div class="itemCommentsPagination" style="margin:0px; padding:0px;">
	  	<?php echo $this->pagination->getPagesLinks(); ?>
	  	<div class="clr"></div>
	  </div>
		<?php endif; ?>

		<?php if($this->item->params->get('commentsFormPosition')=='below' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
	  <!-- Item comments form -->
	  <div class="itemCommentsForm">
	  	<?php echo $this->loadTemplate('comments_form'); ?>
	  </div>
	  <?php endif; ?>

	  <?php $user = &JFactory::getUser(); if ($this->item->params->get('comments') == '2' && $user->guest): ?>
	  		<div><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
	  <?php endif; ?>

  </div>
  <?php endif; ?>

	<?php /*?><?php if(!JRequest::getCmd('print')): ?>
	<div class="itemBackToTop">
		<a class="k2Anchor" href="<?php echo $this->item->link; ?>#startOfPageId<?php echo JRequest::getInt('id'); ?>">
			<?php echo JText::_('K2_BACK_TO_TOP'); ?>
		</a>
	</div>
	<?php endif; ?><?php */?>

	<div class="clr"></div>
</div>
</div>
</div>
</div>
<!-- End K2 Item Layout -->
