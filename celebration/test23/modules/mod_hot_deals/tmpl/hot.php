<?php
$url="http://119.226.135.78/hotdealswebservice/hotdealsservice.asmx?op=GetHotDealsData";
$xml = @simplexml_load_file($url);

//$dealsArr = array();
//foreach($xml->children() as $i => $child){
//    $dealsArr[]="
//       <div class='deal_title'>".$child->CategoryName."</div>
//      <div class='deal_img'>
//           <a href='http://hotdeals.getit.in/latest/'>
//           <img id='imgDeals' style='border:0px;' width='163' height='60' src=".$child->DealImage." /></a>
//      </div>
//        <div class='deal_desc'>".$child->Title."</div>
//       ";
//	   // <div class='get_deal_img'><a href='http://hotdeals.getit.in/latest/'><img src=".$child->DealImage."></a></div>    
//}
//$rand_keys = count($dealsArr);
//$rand_keys =rand(0,30);

?>


<?php
 $count=count($xml);

if($count>1)
{
$dealsArr = array();
foreach($xml->children() as $i => $child){

 $dealsArr[]="<div class='hot_deal_img'><img src=".$child->DealImage." style='width:143px;height:86px;' alt='' /></div>
<div class='hot_deals_texts'>
".$child->Title."</div>

<div class='hot_deal_btn'><a href='#'><img src='images/hot_deals_btn.jpg' border='0'/></a></div>
<div class='visit_link'><a href='#'>visit getithotdeals.in</a></div>
</div>

<div class='clr'></div>";
}
$rand_keys = count($dealsArr);
$rand_keys =rand(0,30);
}
?>

        <?php
        if(($count=="0")||($count=="1"))
		{
		?>
   <!--     <p id="second">Second Life Resorts</p>
<div id="hd_img_main">
<div id="hd_img"><img src="images/bt_mg.png" alt="" /></div>
<p  id="hd_condition">Condition Apply</p>
</div>
<div id="hd_sml_cont">
Get 70% off on  a 1N/2D stay
in rishikesh with rafting, buffet
meals & more
<p id="hd_gt_btn"><a href="http://getithotdeals.in/" target="_blank"><img src="images/get_this.png" alt="" border="0" /></a></p>
</div>
<div class="clr"></div>-->
<?php 
$arr = array(array('Second Life Resorts','Get 70% off on  a 1N/2D stay
in rishikesh with rafting, buffet
meals & more','http://fashion.getit.in/images/life_resort.jpg'),array('New Look Unisex Salon','Get 50% off on  hair rebonding,hair spa sessions,menicure,pedicure and haircut','http://fashion.getit.in/images/salon.jpg'),array('Dolpin Travel','Get 20% discount on all tour packages in india','http://fashion.getit.in/images/dolphin_tavel.jpg'));
$dealsArr=array();
foreach($arr as $child){

 $dealsArr[]="
 <div class='hot_deal_container'>
 <div class='hot_deal_img'><img src=".$child['2']." style='width:143px;height:86px;' alt='' /></div>
<div class='hot_deals_texts'>
".substr($child['1'],0,60)."
</div>
</div>
<div class='hot_deal_btn'><a href='http://getithotdeals.in/' target='_blank'><img src='images/hot_deals_btn.jpg' border='0'/></a></div>
<div class='visit_link'><a href='#'>visit getithotdeals.in</a></div>
</div>

<div class='clr'></div>";

}
$rand_keys = count($dealsArr);
$rand_keys =rand(0,2);
echo  $dealsArr[$rand_keys]; 
?>
        <?php
		}
		else{
				echo  $dealsArr[$rand_keys]; 
		}	
	?>
  