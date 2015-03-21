<?php include("nusoap.php");
class HotDealFilters
{
 public $What;
  public $City;
    public $IsFeatured;
  public $PageIndex; 
      public $DealFreshness;
  public $DealRank; 
	}
	$a=array("Delhi"=>"Delhi","Ernakulam"=>"Ernakulam");
 $city=array_rand($a,1);

$HotDealFilters = new HotDealFilters();

$HotDealFilters->What = "Shopping";
$HotDealFilters->City = "Delhi";
$HotDealFilters->IsFeatured = "true";
$HotDealFilters->PageIndex = "0";
$HotDealFilters->DealFreshness = "Normal";
$HotDealFilters->DealRank = "Normal";

 
$client = new SoapClient("http://119.226.135.78/HotDealWAP/HotDealsService.asmx?WSDL");
//$city=$client->GetCities();
//print_r($city);



$result = $client->GetHotDealsData(array('objHotDeal' =>$HotDealFilters));
 $row=$result->GetHotDealsDataResult->TotalRows;//change was made here
$result=$result->GetHotDealsDataResult->Results;

if($row=="0")
{
	
	
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
<div class='hot_deal_btn'><a href='http://getithotdeals.in/{$HotDealFilters->City}/category/{$HotDealFilters->What}' target='_blank'><img src=''http://onam.getit.in/images/hot_deals_btn.jpg' border='0'/></a></div>
<div class='visit_link'><a href='http://getithotdeals.in/{$HotDealFilters->City}/category/{$HotDealFilters->What}'>visit getithotdeals.in</a></div>
</div>

<div class='clr'></div>";

$rand_keys =rand(0,30);


				echo  $dealsArr[$rand_keys];
}

	
}
else
{
	
?>

<?php
		
function object_2_array($result) 
{ 
    $array = array(); 
    foreach ($result as $key=>$value) 
    { 
       # if $value is an array then 
        if (is_array($value)) 
        { 
            #you are feeding an array to object_2_array function it could potentially be a perpetual loop. 
            $array[$key]=object_2_array($value); 
        } 

       # if $value is not an array then (it also includes objects) 
        else 
        { 
       # if $value is an object then 
        if (is_object($value)) 
        { 
            $array[$key]=object_2_array($value); 
        } else { 

            $array[$key]=$value; 
} 
        } 
    } 
    return $array; 
}  
foreach($result as $re)
{
	
$rs=$re;
}
	
$cit=object_2_array($rs);
$dealsArr = array();


foreach($cit as $child){

 $dealsArr[]="<div class='hot_deal_container'><div class='hot_deal_img'><a href='http://getithotdeals.in/deal/{$child['ShortURL']}' target='_blank'><img src=http://getithotdeals.in/image/getFirstImage/".$child['DealID']." style='width:143px;height:86px;' alt='' /></a></div>
<div class='hot_deals_texts'>
<a href='http://getithotdeals.in/deal/{$child['ShortURL']}' target='_blank'>".$child['Title']."</a></div>
</div>
<div class='hot_deal_btn'><a href='http://getithotdeals.in/deal/{$child['ShortURL']}'target='_blank'><img src='http://onam.getit.in/images/hot_deals_btn.jpg' border='0'/></a></div>
<div class='visit_link'><a href='http://getithotdeals.in/deal/{$child['ShortURL']}' target='_blank'>visit getithotdeals.in</a></div>
</div>

<div class='clr'></div>";
}
$rand_keys = count($dealsArr);
	$rand_keys=$rand_keys-1;
$rand_keys =rand(0,$rand_keys);


				echo  $dealsArr[$rand_keys]; 
}
  
?>