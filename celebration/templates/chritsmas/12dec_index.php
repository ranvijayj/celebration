<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<jdoc:include type="head" />

<title>christmas</title>
<link href="<?php echo $this->baseurl?>/templates/<?php echo $this->template?>/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl?>/templates/chritsmas/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl?>/templates/chritsmas/css/nivo-slider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl?>/templates/chritsmas/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl?>/templates/chritsmas/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl?>/templates/chritsmas/js/enu.js"></script>
<script type="text/javascript">
    $(window).load(function() {
       $('#slider').nivoSlider();
    });
    </script>
<!-- fb like box code -->
 <div id="fb-root"></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;

 js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- fb likebox script ends here -->
<script type="text/javascript">
<!--
function myLive() {
window.open( "https://server.iad.liveperson.net/hc/26159633/?cmd=file&file=visitorWantsToChat&site=26159633&LEAppKey=f907f2d9acd64b7f8c00b83bed3c2822&referrer=http%3A//food.getit.in/&referrer=http%3A//food.getit.in/&bId=21/", "myWindow", 
"status = 1, height = 300, width = 300, left=100, top=100, resizable = 0" );
}
//-->
</script>

</head>

<body>
<div class="topStrip">
  <div class="topMid">
  <div class="right">
    <ul id="tInfo">
	<li style="font-weight: bold; font-size:13px;"> 

	<?php $user = JFactory::getUser();
	 echo $username = $user->name;
	
	?>
	</li>
	  <li>This year : </li>
	  <li>25 December, 2012</li>
	  <li><a href="http://www.facebook.com/GetitkaFindy" target="_blank"><img src="images/fb.png" width="18" height="18" /></a></li>
	  <li><a href="http://twitter.com/#!/Getit_ka_Findy" target="_blank"><img src="images/twitter.png" width="16" height="16" /></a></li>
	  <li><a style="cursor:pointer;" onClick="myLive()">Live Chat</a></li>
	</ul>
	
	
	
	<jdoc:include type="modules" name="main_menu" />
<?php $token = JUtility::getToken();
$linkout = JRoute::_("index.php?option=com_users&task=user.logout&".$token."=1");
$user = JFactory::getUser();
if(!$user->guest):
?>

<div class="logt"><a href="<?php echo $linkout?>">logout</a></div>
<?php endif;?>
	</div>
  </div>
</div>

<!--header start here-->
<div class="header">
<div class="logo"><a href="<?php echo $this->baseurl?>">logo</a></div>
<jdoc:include type="modules" name="search" />

</div>

<!--nav start here-->
<div class="nav">
<div id="myslidemenu" class="bulletin_text jqueryslidemenu" style="z-index:10">
<jdoc:include type="modules" name="top_menu" />
</div> 
</div>
<?php  $gifturl= basename($_SERVER['PHP_SELF']); 
if($gifturl=='gift-india'){ ?>
<div> 
    <jdoc:include type="modules" name="gift_india" />
</div>
<?php }else{ ?>
<!--banner start here-->
<jdoc:include type="modules" name="top_slider" />

<!--article section start here-->
<div class="articleSection">

<jdoc:include type="modules" name="chritsmas_shopping" />
  
  <jdoc:include type="modules" name="chritsmas_events" />
 
  <jdoc:include type="modules" name="right_banner1" />
  <!--<div class="articleAdv"><img src="images/articleAdd.png" /></div>-->
</div>

<!--midcontainer start here-->
<div id="midContainer">
  <div class="midLeft">
  <div><jdoc:include type="message" /></div>
  <jdoc:include type="component" />
 <jdoc:include type="modules" name="chritsmas_special" />
  <jdoc:include type="modules" name="Middle_banner1" />  
	 
	 <div class="chrisGift">
	  <jdoc:include type="modules" name="chritsmas_gift" />
	   
	   
	   <!--Christmas Tourism start here-->
	   
	   <jdoc:include type="modules" name="chritsmas_tour" />
	  
	   
	   <!--poll and videos-->
	   <div class="pollVideos">
	   <jdoc:include type="modules" name="poll_month" />
	    
		 <jdoc:include type="modules" name="chritsmas_vedio" /> 
		
	   </div>
	 </div>
 </div>
  
  <div class="midRight">
  
    <div class="hotDeals">
	<jdoc:include type="modules" name="hotdeal" />
	 <!-- <img src="images/hotDeals.jpg" width="300" height="250" />-->
	</div>
	<jdoc:include type="modules" name="top_receipe" />
	
	
	<jdoc:include type="modules" name="moments" />
	
	<jdoc:include type="modules" name="right_banner3" />
	
	  <jdoc:include type="modules" name="right_fb" />
	
  </div>
  <div class="flexi"></div>
</div>
<?php }?>
<!--Adv Banner here-->
<jdoc:include type="modules" name="Middle_banner2" />

<!--fotter start here-->
<div class="footer_bg">

<div class="footer_part">
<div class="footer_in">

<div class="footer_browse">
<div class="footer_browsebold">Browse Christmas</div>
<div class="brwse_left">
<jdoc:include type="modules" name="footer1" />

</div>

<div class="flexi"></div>
</div>

<div class="footer_morestuff">
<div class="footer_browsebold">More Stuff</div>
<div class="brwse_left">
<jdoc:include type="modules" name="footer2" />

</div>
<div class="flexi"></div>
</div>

<div class="footer_other">
<div class="footer_browsebold">Others</div>
<div class="brwse_left">
<jdoc:include type="modules" name="footer3" />
</div>
<div class="flexi"></div>
</div>

<div class="footer_contact">
<div class="footer_browsebold">Contact Us</div>


<div class="fb_bot">
<jdoc:include type="modules" name="footer_social_menu" />
</div>

</div>
<div class="flexi"></div>
</div>



</div> 
<div class="flexi"></div>

<div class="flexi"></div>
<jdoc:include type="modules" name="footer_getit_network" />

<div class="flexi"></div>
<div class="copyright">
<div class="copyright_txt">
&copy; GETIT Infoservices Pvt. Ltd. 2011-2012
</div></div>
<div class="flexi"></div>
</div>
</div>
<jdoc:include type="modules" name="hidden" />
<script>
var arrowimages={down:['downarrowclass', '<?php echo $this->baseurl ?>/images/down.gif', 23], right:['rightarrowclass', '<?php echo $this->baseurl ?>/images/right.gif']}

var jqueryslidemenu={

animateduration: {over: 200, out: 100}, //duration of slide in/ out animation, in milliseconds

buildmenu:function(menuid, arrowsvar){
	jQuery(document).ready(function($){
		var $mainmenu=$("#"+menuid+">ul")
		var $headers=$mainmenu.find("ul").parent()
		$headers.each(function(i){
			var $curobj=$(this)
			var $subul=$(this).find('ul:eq(0)')
			this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
			this.istopheader=$curobj.parents("ul").length==1? true : false
			$subul.css({top:this.istopheader? this._dimensions.h+"px" : 0})
			$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
				'<img src="'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
				+'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
				+ '" style="border:0;" />'
			)
			$curobj.hover(
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					this._offsets={left:$(this).offset().left, top:$(this).offset().top}
					var menuleft=this.istopheader? 0 : this._dimensions.w
					menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
					if ($targetul.queue().length<=1) //if 1 or less queued animations
						$targetul.css({left:menuleft+"px", width:this._dimensions.subulw+'px'}).slideDown(jqueryslidemenu.animateduration.over)
				},
				function(e){
					var $targetul=$(this).children("ul:eq(0)")
					$targetul.slideUp(jqueryslidemenu.animateduration.out)
				}
			) //end hover
			$curobj.click(function(){
				$(this).children("ul:eq(0)").hide()
			})
		}) //end $headers.each()
		$mainmenu.find("ul").css({display:'none', visibility:'visible'})
	}) //end document.ready
}
}

//build menu with ID="myslidemenu" on page:
jqueryslidemenu.buildmenu("myslidemenu", arrowimages)

</script>
</body>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10585126-24']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
</html>