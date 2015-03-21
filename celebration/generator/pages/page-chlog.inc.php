<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$tSjKG34057312WCNSC=165172821;$gHGbH33409118VkeEJ=964787446;$lawiS46647644iKexB=685404022;$cRGMw20335388ntQgz=482116302;$CHdUZ36034851PnbTh=11518035;$hAvlz40308533wWcjc=428702972;$ngxxy24718933sxbUt=391264862;$rXMar25828552ZHePt=55297454;$yimKF35199890cJgFL=76394500;$tVPPs89395447jwIZP=610649750;$rIAZk89977723uGpsd=315656952;$RlFvb73509217zUvrc=346509857;$UqHrT31552429JJvmk=359802215;$HNWZI90669861WGLmE=511627777;$qmcRo62424011QZgQI=458580292;$Cnpjp73377381NKPcd=356753509;$msyYk25092468ObBIA=861741181;$gNNFf44131775CKYtq=131637054;$fFrnN32057800mLLir=820034882;$yKpGh25433044IeHJS=86028411;$LuRzP15820007pXFhR=583211395;$IBqvf39781189xCaUe=469677582;$VRDTY88879090ejnhT=401020721;$uCHwO19676208vRPwV=533334564;$hxyaM93735047feMaz=523212860;$SXIGU77618103NfBoL=526749359;$CDOVt52887878lQTSp=200537811;$qyVMv56106873fdbgU=699671967;$ouJRi78837586qCWCg=681745575;$XFZAd67642517ICxIV=302852386;$jETQv14084167NmeZX=218586151;$KjLOW44725037hfeQX=585040619;$xsnMo61127625dmcBg=59809539;$GPPIs99854432xJPyH=796986664;$XKUfT62467957dpAxP=455165741;$farrN75530701dmQLG=189440521;$MMfIM40605163lFIba=655404755;$QWtoL84253846hFFWl=11152191;$CzJfY18039245hYqzR=910276581;$LbwpH58523865nXFAh=511871674;$CikmP17270202LSkcE=470531219;$tayxc20840759leGVk=942348969;$hQBQn60798035FJQDE=584918671;$BQRwX83704529KWBMd=553334076;$pJkTk81122742GRuAD=504188934;$QiLsn89615174hETfS=593576996;$ByhBp10744323CTsJU=478092010;$eWKTz61072693rzVtM=313827728;$FDsZT52162781bwxHl=756377899;$GXXqZ20577087xhjUw=962836274;?><?php include dlUE6X_RWe.'page-top.inc.php'; $sfFw7CUsV = cVhR96lmkjBRF(); if($grab_parameters['xs_chlogorder'] == 'desc') rsort($sfFw7CUsV); $VBS8vJ12i7=$_GET['log']; if($VBS8vJ12i7){ ?>
																											<div id="sidenote">
																											<div class="block1head">
																											Crawler logs
																											</div>
																											<div class="block1">
																											<?php for($i=0;$i<count($sfFw7CUsV);$i++){ $eX2N9ADyfLy6Jg9 = @unserialize(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.$sfFw7CUsV[$i])); if($i+1==$VBS8vJ12i7)echo '<u>'; ?>
																											<a href="index.<?php echo $ECGLM3701zfZYH0f?>?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$eX2N9ADyfLy6Jg9['time'])?></a>
																											( +<?php echo count($eX2N9ADyfLy6Jg9['newurls'])?> -<?php echo count($eX2N9ADyfLy6Jg9['losturls'])?>)
																											</u>
																											<br>
																											<?php	} ?>
																											</div>
																											</div>
																											<?php } ?>
																											<div<?php if($VBS8vJ12i7) echo ' id="shifted"';?> >
																											<h2>ChangeLog</h2>
																											<?php if($VBS8vJ12i7){ $eX2N9ADyfLy6Jg9 = @unserialize(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.$sfFw7CUsV[$VBS8vJ12i7-1])); ?><h4><?php echo date('j F Y, H:i',$eX2N9ADyfLy6Jg9['time'])?></h4>
																											<div class="inptitle">New URLs (<?php echo count($eX2N9ADyfLy6Jg9['newurls'])?>)</div>
																											<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$eX2N9ADyfLy6Jg9['newurls']))?></textarea>
																											<div class="inptitle">Removed URLs (<?php echo count($eX2N9ADyfLy6Jg9['losturls'])?>)</div>
																											<textarea style="width:100%;height:300px"><?php echo @htmlspecialchars(implode("\n",$eX2N9ADyfLy6Jg9['losturls']))?></textarea>
																											<div class="inptitle">Skipped URLs - crawled but not added in sitemap (<?php echo count($eX2N9ADyfLy6Jg9['urls_list_skipped'])?>)</div>
																											<textarea style="width:100%;height:300px"><?php foreach($eX2N9ADyfLy6Jg9['urls_list_skipped'] as $k=>$v)echo @htmlspecialchars($k.' - '.$v)."\n";?></textarea>
																											<?php	 }else{ ?>
																											<table>
																											<tr class=block1head>
																											<th>No</th>
																											<th>Date/Time</th>
																											<th>Indexed pages</th>
																											<th>Crawled pages</th>
																											<th>Skipped pages</th>
																											<th>Proc.time</th>
																											<th>Bandwidth</th>
																											<th>New URLs</th>
																											<th>Removed URLs</th>
																											<th>Broken links</th>
																											<?php if($grab_parameters['xs_imginfo'])echo '<th>Images</th>';?>
																											<?php if($grab_parameters['xs_videoinfo'])echo '<th>Videos</th>';?>
																											<?php if($grab_parameters['xs_newsinfo'])echo '<th>News</th>';?>
																											<?php if($grab_parameters['xs_rssinfo'])echo '<th>RSS</th>';?>
																											</tr>
																											<?php  $dX97bmcNDOSGUSPL=array(); for($i=0;$i<count($sfFw7CUsV);$i++){ $eX2N9ADyfLy6Jg9 = @unserialize(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.$sfFw7CUsV[$i])); if(!$eX2N9ADyfLy6Jg9)continue; foreach($eX2N9ADyfLy6Jg9 as $k=>$v)if(!is_array($v))$dX97bmcNDOSGUSPL[$k]+=$v;else $dX97bmcNDOSGUSPL[$k]+=count($v); ?>
																											<tr class=block1>
																											<td><?php echo $i+1?></td>
																											<td><a href="index.php?op=chlog&log=<?php echo $i+1?>" title="View details"><?php echo date('Y-m-d H:i',$eX2N9ADyfLy6Jg9['time'])?></a></td>
																											<td><?php echo number_format($eX2N9ADyfLy6Jg9['ucount'])?></td>
																											<td><?php echo number_format($eX2N9ADyfLy6Jg9['crcount'])?></td>
																											<td><?php echo count($eX2N9ADyfLy6Jg9['urls_list_skipped'])?></td>
																											<td><?php echo number_format($eX2N9ADyfLy6Jg9['ctime'],2)?>s</td>
																											<td><?php echo number_format($eX2N9ADyfLy6Jg9['tsize']/1024/1024,2)?></td>
																											<td><?php echo count($eX2N9ADyfLy6Jg9['newurls'])?></td>
																											<td><?php echo count($eX2N9ADyfLy6Jg9['losturls'])?></td>
																											<td><?php echo count($eX2N9ADyfLy6Jg9['u404'])?></td>
																											<?php if($grab_parameters['xs_imginfo'])echo '<td>'.$eX2N9ADyfLy6Jg9['images_no'].'</td>';?>
																											<?php if($grab_parameters['xs_videoinfo'])echo '<td>'.$eX2N9ADyfLy6Jg9['videos_no'].'</td>';?>
																											<?php if($grab_parameters['xs_newsinfo'])echo '<td>'.$eX2N9ADyfLy6Jg9['news_no'].'</td>';?>
																											<?php if($grab_parameters['xs_rssinfo'])echo '<td>'.$eX2N9ADyfLy6Jg9['rss_no'].'</td>';?>
																											</tr>
																											<?php }?>
																											<tr class=block1>
																											<th colspan=2>Total</th>
																											<th><?php echo number_format($dX97bmcNDOSGUSPL['ucount'])?></th>
																											<th><?php echo number_format($dX97bmcNDOSGUSPL['crcount'])?></th>
																											<th><?php echo number_format($dX97bmcNDOSGUSPL['ctime'],2)?>s</th>
																											<th><?php echo number_format($dX97bmcNDOSGUSPL['tsize']/1024/1024,2)?> Mb</th>
																											<th><?php echo ($dX97bmcNDOSGUSPL['newurls'])?></th>
																											<th><?php echo ($dX97bmcNDOSGUSPL['losturls'])?></th>
																											<th>-</th>
																											</tr>
																											</table>
																											<?php } ?>
																											</div>
																											<?php include dlUE6X_RWe.'page-bottom.inc.php'; 



































































































