<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$Uqbys88662110IBqSM=105692566;$XlnPL42794189WjIUo=422879944;$vADFd90266114nbMRT=480561462;$OjiMt31390381TRbCV=809455872;$muYfc71479492TiBba=441781921;$dGAhk10845947TkXnQ=907258362;$ewrCX54802246hdoJE=239103943;$ryXHs93660889HnpEu=966037415;$sDnSN62734375JlZPc=122277526;$lbnLL32335205aEYcr=236543030;$YGezV27775879gedQk=341052673;$BrAzR29368896ILxgE=966525208;$uurKq62426758utJmk=146179382;$RkfMo17261962AlFvA=408733948;$iuJpb99187012QYvZU=786407654;$fueDH18514404hfryl=810919251;$XwzBQ70556641KDYCK=513487488;$xrayY55626221rkbEA=424831116;$Irodv89035645NqQSJ=576168884;$ygbuV61097412Rklwr=499219543;$IQxWn87124024WxcCB=225201843;$PwUtM57427979qRRGr=284834533;$uYfDX87321778IhRxT=709336365;$zWthe67117920UQFei=31426086;$aTivC22128906RDlQX=280322449;$bryXa22667236OhotQ=987744202;$RJiIF94045411EaTWi=186910095;$uZVjo36575928zuZiv=406538879;$whYLD55571289DtBLR=678849304;$PlDEL41343994wfkmp=535560120;$MbKSl19206543IfRgc=7890075;$afMrk59471436AtvsB=625557922;$PEGfp97451172flPmB=421782410;$zvJeM23458252yPHMe=926282288;$aGqae42805176MrWYc=172276306;$wSgJh45804443exbIL=688483216;$fxPjw57768555NozZe=508121765;$EHZxg59010010CcHRi=161910705;$KPwkz74841309WLnWu=680068787;$pbGhh85574952NwVwI=595314758;$ZAfWs26523437XBeSZ=937867371;$ppjTQ57999268bmkhn=240445373;$wpHvp25314941foaeR=532267517;$DoQUj88782959YwZQD=346052551;$vCIou93715821qTPcc=712019226;$fPDUK20426025PXowM=162886291;$dglMv74226074gmkoL=727872498;$CNbDp55428467Baftk=939696595;$BELiz79345703atgRP=829577332;$ZfUmX36290283OORCJ=928233460;?><?php function HNUV_wZE_() { global $QYzbdvM1h, $EAYwgabkhK76_CD, $hCqPL8RwlB, $grab_parameters; $ctime = time(); if(($ctime - $hCqPL8RwlB) > 15) wJu5NxAjkFkQBpMse(); $hCqPL8RwlB = $ctime; if(!function_exists('getrusage'))return; if(!isset($EAYwgabkhK76_CD)){ $EAYwgabkhK76_CD = explode('|',$grab_parameters['xs_cpumon']); } if(!is_array($EAYwgabkhK76_CD)||!$EAYwgabkhK76_CD[0])return; $CjkPFJQ1MJyQxogX = microtime(true); if(($Frzj_1qMUec7w=$CjkPFJQ1MJyQxogX-$QYzbdvM1h[1]) < $EAYwgabkhK76_CD[3])return; $Fpei00GZKLxgY3rk = getrusage(); $KJwBTVXJeYjG = ($Fpei00GZKLxgY3rk["ru_utime.tv_sec"]*1e6 + $Fpei00GZKLxgY3rk["ru_utime.tv_usec"]) / 1e6;	 $GuFDO93OPpTOQkSZ77 = 0; if($QYzbdvM1h){ $hoWmvn1cTy_GjGL = ($KJwBTVXJeYjG - $QYzbdvM1h[0]); $GuFDO93OPpTOQkSZ77 = 100 * $hoWmvn1cTy_GjGL / $Frzj_1qMUec7w; } if($GuFDO93OPpTOQkSZ77>$EAYwgabkhK76_CD[0]) { D1tXUjHdde7g1("\n<br>CPU monitor sleep: ".number_format($GuFDO93OPpTOQkSZ77,2)."% (".number_format($hoWmvn1cTy_GjGL,2)." / ".number_format($Frzj_1qMUec7w,2)." / ".number_format($CjkPFJQ1MJyQxogX-$QYzbdvM1h[2],2)." ) ".(number_format(memory_get_usage()/1024).'K')); $QYzbdvM1h[2] = $CjkPFJQ1MJyQxogX+$EAYwgabkhK76_CD[1]; sleep($EAYwgabkhK76_CD[1]); D1tXUjHdde7g1(".. go\n<br>"); }else if($Frzj_1qMUec7w > $EAYwgabkhK76_CD[2]) { $QYzbdvM1h[0] = $KJwBTVXJeYjG; $QYzbdvM1h[1] = $CjkPFJQ1MJyQxogX; } } function wJu5NxAjkFkQBpMse()  { $nTPUGhxIWWT = array( OWNVYbuUt2KT49cveBR.kxesmZvVXn, OWNVYbuUt2KT49cveBR.av2KTAsuDctU ); foreach($nTPUGhxIWWT as $lg) { if(file_exists($lg)){ touch($lg); } } } function G99nA35xjYQh() { global $EA_T0CYlIF6tb7UtP; $EA_T0CYlIF6tb7UtP = PvFdgEcx0laOpBsp(OWNVYbuUt2KT49cveBR.'debug.log','a'); D1tXUjHdde7g1( str_repeat('=',60)."\n".date('Y-m-d H:i:s')."\n\n"); } function D1tXUjHdde7g1($PJcxuhwvrlD58h6ut3d, $ZbmgwPpRiaBbjR9P = '') { global $EA_T0CYlIF6tb7UtP,$gnFe1_ACf3THo5fSVT; $aeUWWdnqzr5WR = $_GET['ddbg'.$ZbmgwPpRiaBbjR9P]; if($aeUWWdnqzr5WR){ if($EA_T0CYlIF6tb7UtP){ fwrite($EA_T0CYlIF6tb7UtP, strip_tags($PJcxuhwvrlD58h6ut3d)); } echo $gnFe1_ACf3THo5fSVT ? strip_tags($PJcxuhwvrlD58h6ut3d) : $PJcxuhwvrlD58h6ut3d; flush(); } } function fTr9xtaaPTXU($A18lnbzsiL) { global $grab_parameters; if($grab_parameters['xs_filewmove'] && file_exists($A18lnbzsiL) ){ $x3y6JFDVKhBEE3np = tempnam("/tmp", "sgtmp"); if(file_exists($x3y6JFDVKhBEE3np))unlink($x3y6JFDVKhBEE3np); if(file_exists($A18lnbzsiL))rename($A18lnbzsiL, $x3y6JFDVKhBEE3np); return !file_exists($x3y6JFDVKhBEE3np) || unlink($x3y6JFDVKhBEE3np); }else { return unlink($A18lnbzsiL); } } function PvFdgEcx0laOpBsp($A18lnbzsiL, $DOEjLOF5SKtUYVQEkD) { global $grab_parameters; if($grab_parameters['xs_filewmove'] && file_exists($A18lnbzsiL) ){ $PoGqwMsoB = ($DOEjLOF5SKtUYVQEkD == 'a') ? file_get_contents($A18lnbzsiL) : ''; fTr9xtaaPTXU($A18lnbzsiL); $pf = fopen($A18lnbzsiL, 'w'); if($PoGqwMsoB){ fwrite($pf, $PoGqwMsoB); } return $pf; } else { $pf = fopen($A18lnbzsiL, 'w'); return $pf; } } function VQAXwSjJPIxpPDQ5i5S($A18lnbzsiL) { return md5($A18lnbzsiL); } function xn22ZOg5Ng($ZmiKZZ6x4mdoNJaJt, $aBb5M7SvBOsEIqI7t) { $QxoEWBD1O1qswq3ii = yCwTqe5GDcta . substr($ZmiKZZ6x4mdoNJaJt,0,2) . '/'; if(!file_exists($QxoEWBD1O1qswq3ii)) mkdir($QxoEWBD1O1qswq3ii, 0755); $pf = PvFdgEcx0laOpBsp($QxoEWBD1O1qswq3ii . $ZmiKZZ6x4mdoNJaJt.'.txt','w'); fwrite($pf, serialize($aBb5M7SvBOsEIqI7t)); fclose($pf); } function W5mf7Y9Huk0KaQU6($ZmiKZZ6x4mdoNJaJt) { $fl = yCwTqe5GDcta . substr($ZmiKZZ6x4mdoNJaJt,0,2) . '/' . $ZmiKZZ6x4mdoNJaJt . '.txt'; if(!file_exists($fl)) return array(); $W8VYtvwpvvwLrazVf = implode('', file($fl)); return unserialize($W8VYtvwpvvwLrazVf); } function RT9GXtyabs__A($Fpei00GZKLxgY3rk) { global $grab_parameters; if($grab_parameters['xs_dumptype'] == 'serialize') return serialize($Fpei00GZKLxgY3rk); else return var_export($Fpei00GZKLxgY3rk,1); } function PvEr4n2DQ($Fpei00GZKLxgY3rk) { global $grab_parameters; if($grab_parameters['xs_dumptype'] == 'serialize') $XIlk3ZqbSYG = unserialize($Fpei00GZKLxgY3rk); else eval ($s='$XIlk3ZqbSYG = '.$Fpei00GZKLxgY3rk.';'); return $XIlk3ZqbSYG; } function Hl4O6cWdjqldW6($i,$o2FapLT5lEQ8T7IY,$bn0GubjxW3nLmpyxamZ=false) { if($bn0GubjxW3nLmpyxamZ && $i<2) return $o2FapLT5lEQ8T7IY; return $i ? preg_replace('#(.*)\.#','$01'.$i.'.',$o2FapLT5lEQ8T7IY) : $o2FapLT5lEQ8T7IY; } function pUvA4zhAkYZK2Nd8A($A18lnbzsiL, $uneVFDEGBQ7F, $o6tTsvNFXN=OWNVYbuUt2KT49cveBR, $YPbrrsyP5iHhPWM9NQQ = false) { if($YPbrrsyP5iHhPWM9NQQ && function_exists('gzencode')){ $ICDtF9k5qRIaFX = gzencode($uneVFDEGBQ7F, 1); unset($uneVFDEGBQ7F); $uneVFDEGBQ7F = $ICDtF9k5qRIaFX; $A18lnbzsiL .= '.gz'; } $pf = PvFdgEcx0laOpBsp($o6tTsvNFXN.$A18lnbzsiL,"w"); fwrite($pf, $uneVFDEGBQ7F); fclose($pf); @chmod($o6tTsvNFXN.$A18lnbzsiL, 0666); unset($uneVFDEGBQ7F); return $A18lnbzsiL; } function FRy4YMXr_PT($A18lnbzsiL) { return implode('',file($A18lnbzsiL)); } function cVhR96lmkjBRF() { $sfFw7CUsV = array(); $pd = opendir(OWNVYbuUt2KT49cveBR); while($fn=readdir($pd)) if(preg_match('#^\d+.*?\.log$#',$fn)) $sfFw7CUsV[] = $fn; closedir($pd); sort($sfFw7CUsV); return $sfFw7CUsV; } function m0HngeVPuiULaXDb($tm) { $tm = intval($tm); $h = intval($tm/60/60); $tm -= $h*60*60; $m = intval($tm/60); $tm -= $m*60; $s = $tm; if($s<10)$s="0$s"; if($m<10)$m="0$m"; return "$h:$m:$s"; } function Mq7SpvssgXyM($BkTM7Bu3D4VxM, $FA0UpNye2M37wP7LQ) { if(strstr($FA0UpNye2M37wP7LQ, '://'))return $FA0UpNye2M37wP7LQ;
																									 if($BkTM7Bu3D4VxM[strlen($BkTM7Bu3D4VxM)-1] == '/' && $FA0UpNye2M37wP7LQ[0] == '/') $FA0UpNye2M37wP7LQ = substr($FA0UpNye2M37wP7LQ, 1); if($BkTM7Bu3D4VxM[strlen($BkTM7Bu3D4VxM)-1] == '/' && $BkTM7Bu3D4VxM[strlen($BkTM7Bu3D4VxM)-2] == '/' ) $BkTM7Bu3D4VxM = substr($BkTM7Bu3D4VxM, 0, strlen($BkTM7Bu3D4VxM)-1); return $BkTM7Bu3D4VxM . $FA0UpNye2M37wP7LQ; } function xnDpYg7WwA0($dr) { $dr = preg_replace('#\?.*#', '', $dr); $dr = preg_replace('#\#.*#', '', $dr); if($dr[strlen($dr)-1]!='/' && $dr) { $dr=str_replace('\\','/',dirname($dr)); if($dr[strlen($dr)-1]!='/')$dr.='/'; } return Mq7SpvssgXyM($dr, ''); } function zSyg85rKFKJ8zd($o6tTsvNFXN, $WkR4kDkMT) { $pd = opendir($o6tTsvNFXN); if($pd) while($fn = readdir($pd)) if(is_file($o6tTsvNFXN.$fn) && preg_match('#'.$WkR4kDkMT.'$#',$fn)) { @fTr9xtaaPTXU($o6tTsvNFXN.$fn); }else if($fn[0]!='.'&&is_dir($o6tTsvNFXN.$fn)) { zSyg85rKFKJ8zd($o6tTsvNFXN.$fn.'/', $WkR4kDkMT); @rmdir($o6tTsvNFXN.$fn); } closedir($pd); } function IHysls0Hqo9YVUNMhHR($t7fVZsI8scAQ, $FHkOOpdqGU9J4Ak) { $ws = "<xmlsitemaps_settings>"; foreach($FHkOOpdqGU9J4Ak as $k=>$v) if(strstr($k,'xs_')) $ws .= "\n\t<option name=\"$k\">$v</option>"; $ws .= "\n</xmlsitemaps_settings>"; $pf = PvFdgEcx0laOpBsp($t7fVZsI8scAQ,'w'); fwrite($pf, $ws); fclose($pf); } function fGokyqo8tR33zzFafi3($t7fVZsI8scAQ, &$FHkOOpdqGU9J4Ak, $JHGRPqNtoGHGfef4Ke = false) { $fl = @implode('', file($t7fVZsI8scAQ)); preg_match_all('#<option name="(.*?)">(.*?)</option>#is', $fl, $vkXiWiWO6, PREG_SET_ORDER); foreach($vkXiWiWO6 as $m) if(!$JHGRPqNtoGHGfef4Ke || $m[2]) { $FHkOOpdqGU9J4Ak[$m[1]] = $m[2]; } } function ZW04gbhF9A8P($cWfaKYnGGgFReLRMg, $PRKe3jTsdEw9doYFe = true) { global $grab_parameters, $wrcGK5HRvX5Hc; return str_replace(basename($grab_parameters['xs_smurl']), $grab_parameters[$cWfaKYnGGgFReLRMg],  $grab_parameters['xs_smurl']).($PRKe3jTsdEw9doYFe ? $wrcGK5HRvX5Hc : ''); } 


































































































