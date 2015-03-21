<?php
$url="http://61.12.27.165/hotdeal/MicroSitesDeals.asmx/GetDealData";
$xml = @simplexml_load_file($url);
$dealsArr = array();

foreach($xml->children() as $i => $child){
        $dealsArr[]='
        <div class="deal_title">'.substr((string)$child->Title, 0, 22).'</div>
        <div class="deal_img">
            <a href="http://hotdeals.getit.in/latest/">
            <img id="imgDeals" style="border:0px;" width="163" height="60" src="'.(string)$child->DealImage.'" /></a>
        </div>
        <div class="deal_desc">'.substr((string)$child->Description, 0, 55).'..</div>
        <div class="get_deal_img"><a href="http://hotdeals.getit.in/latest/"><img src="./modules/mod_hot_deals/assets/img/getiti.jpg"></a></div>    
';
}
$rand_keys = array_rand($dealsArr, 3);
?>
<style type="text/css">
.main_hot_deal{
    width: 298px;
    height: 252px;
    margin: auto;
    padding: 0px 0 0 15px;
    background: url('./modules/mod_hot_deals/assets/img/hotdeal_bg.jpg') no-repeat;
}
.deal_title{
    color: #f00;
    font-size: 14px;
    font-family: Arial;
    font-weight: bold;
    padding: 64px 5px 10px 0;
}
.deal_desc{
    font-size: 12px;
    height: 35px;
}
.deal_img{
    border: 2px solid #FFF;
    width: 163px;
    height: 60px;
}
.get_deal_img{
    width: 166px;
      text-align: center;  
}
</style>
<div class="main_hot_deal">
    <div style="width: 175px"> 
        <?php echo $dealsArr[$rand_keys[0]]; ?>
    </div>
</div>