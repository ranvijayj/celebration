<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$oUtPr31868286lnNIu=397697632;$avrDi27396850KRAWs=495378174;$bQUbz33296509DHYAT=786224732;$YXlAz97379761aSaPg=552206055;$QyPAs42459106GrGWf=573790894;$dpnPC96347046Mhwct=132947998;$IOnij81856079zOHXQ=10146118;$PRtWM46798706AruMM=486354004;$tvjYd83987427SGFjb=344040405;$MfsIZ61234741lECOg=863174073;$rOgbD71353150xOiFx=826223755;$nYbfD72155152dCUOp=514158203;$ZYGBq66453247sRwFR=707446167;$xJPLr12059936xcQjB=688056397;$KQeau91787720XHJWj=237457641;$MNgiZ83449097JsSOS=635618652;$ZUfXv79856568dbmkI=665008179;$QWmAn38822632RXSpt=606594971;$TlGSo53159790ZVEye=241847778;$kPRyi80680542iaGwB=850735352;$tmHvR34197387GvonL=216726440;$aOGyy51522827LNZbL=618789795;$OJmCX45469360fkTWS=839394165;$oJsiU63849487QNcKE=160508300;$WplRc19475708LQeEK=361600952;$CiWbB50160522FUIrG=724640869;$ByoYz68716431lTSFY=32096801;$SuRgs32955932SpFHY=562937500;$pJUgM35691528tPomK=100631713;$pBJZq34735718ZZuwd=924148194;$nsDZE32901001TefCd=816955689;$kZgQh77999878iNZii=60022949;$ruqYg82844849BBmgP=432818726;$puvcf95248414XKdss=218311767;$kxvKb28023071vYMAw=196970825;$dBbSx18981323czPZi=649764649;$oaaQf70935669gfeXY=359161987;$XUTwF51698608CojMD=605131592;$ofqpr54082642JhCOP=170142212;$ixthH35900268IakVY=334162597;$nbPqw89963990rJDzQ=878661499;$dmlJW84086304XlZNH=86607666;$seRjc21079712Qqwfd=736469849;$PopHs38756714ABbaE=112216796;$qaNyn49929810sfFPz=992317261;$nPfRb12411499SSkdp=660739990;$JItZn19014282HAzGC=896953736;$BgHzi27550659eucyB=982927247;$HukFI40833130rVqSl=700129273;$skAbU16674194JefMt=329528564;?><?php include dlUE6X_RWe.'page-top.inc.php'; $Gd6KIqMAe4zXCC = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ pUvA4zhAkYZK2Nd8A(uCIu22Zx7O4C0vkg_,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2><a href="index.'.$ECGLM3701zfZYH0f.'?op=crawl">Return to crawler page</a>'; }else if(file_exists($fn=OWNVYbuUt2KT49cveBR.av2KTAsuDctU)&&(time()-filemtime($fn)<10*60)){ $Z9jnRFv_FmHXN=true; $Gd6KIqMAe4zXCC = 1; } if($Gd6KIqMAe4zXCC){ if($Z9jnRFv_FmHXN) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$ECGLM3701zfZYH0f.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																														<script type="text/javascript">
																														var lastupdate = 0;
																														var framegotsome = false;
																														function QoPlLvVWe()
																														{
																														var cd = new Date();
																														if(!lastupdate)return false;
																														var df = (cd - lastupdate)/1000;
																														<?php if($grab_parameters['xs_autoresume']){?>
																														var re = document.getElementById('rlog');
																														re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																														var ifr = document.getElementById('cproc');
																														var frfr = window.frames['clog'];
																														
																														var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																														if(typeof frfr != 'undefined') {
																														if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																														!frfr.pageLoadCompleted) 
																														{
																														
																														framegotsome = true;
																														doresume = false;
																														}
																														
																														if(!frfr.document.getElementById('glog')) {	
																														doresume = true;				
																														}
																														}
																														if(doresume)
																														{
																														var rle = document.getElementById('runlog');
																														lastupdate = cd;
																														if(rle)
																														{
																														rle.style.display  = '';
																														rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																														}
																														var lc = ifr.src;
																														if(lc.indexOf('resume=1')<0)
																														lc = lc + '&resume=1';
																														ifr.src = lc;
																														}
																														<?php } ?>
																														}
																														window.setInterval('QoPlLvVWe()', 1000);
																														</script>
																														<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $ECGLM3701zfZYH0f?>?op=crawlproc&bg=<?php echo $_POST['bg']?>&resume=<?php echo $_POST['resume']?>"></iframe>
																														<!--
																														<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																														-->
																														<div id="rlog" style="overflow:auto;"></div>
																														<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																														<?php }else if(!$IFy8IvAAwMb4K) { ?>
																														<div id="sidenote">
																														<?php include dlUE6X_RWe.'page-sitemap-detail.inc.php'; ?>
																														</div>
																														<div id="shifted">
																														<h2>Crawling</h2>
																														<form action="index.<?php echo $ECGLM3701zfZYH0f?>?submit=1" method="POST" enctype2="multipart/form-data">
																														<input type="hidden" name="op" value="crawl">
																														<div class="inptitle">Run in background</div>
																														<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																														<?php if(@file_exists(OWNVYbuUt2KT49cveBR.kxesmZvVXn)){ if(@file_exists(OWNVYbuUt2KT49cveBR.Jh02oPSmnHw)){ $MY9uRPqbKXzuC = @PvEr4n2DQ(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.Jh02oPSmnHw));; } if(!$MY9uRPqbKXzuC){ $QVcuW67y39PsmXB = @PvEr4n2DQ(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.kxesmZvVXn)); $MY9uRPqbKXzuC = $QVcuW67y39PsmXB['progpar']; } ?>
																														<div class="inptitle">Resume last session</div>
																														<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session 
																														<br />Updated on <?php  $RJhfKMpNS = filemtime(OWNVYbuUt2KT49cveBR.kxesmZvVXn); echo date('Y-m-d H:i:s',$RJhfKMpNS); if(time()-$RJhfKMpNS<600)echo ' ('.(time()-$RJhfKMpNS).' seconds ago) '; ?>, 
																														<?php echo	'Time elapsed: '.m0HngeVPuiULaXDb($MY9uRPqbKXzuC[0]).',<br />Pages crawled: '.intval($MY9uRPqbKXzuC[3]). ' ('.intval($MY9uRPqbKXzuC[7]).' added in sitemap), '. 'Queued: '.$MY9uRPqbKXzuC[2].', Depth level: '.$MY9uRPqbKXzuC[5]. '<br />Current page: '.$MY9uRPqbKXzuC[1].' ('.number_format($MY9uRPqbKXzuC[10],1).')'; } ?>
																														</label>
																														<div class="inptitle">Click button below to start crawl manually:</div>
																														<div class="inptitle">
																														<input class="button" type="submit" name="crawl" value="Run" style="width:150px;height:30px">
																														</div>
																														</form>
																														<h2>Cron job setup</h2>
																														You can use the following command line to setup the cron job for sitemap generator:
																														<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																														</div>
																														<?php } include dlUE6X_RWe.'page-bottom.inc.php'; 



































































































