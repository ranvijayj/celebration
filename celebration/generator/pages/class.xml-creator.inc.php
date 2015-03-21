<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$qrdFz73869019IORys=380990723;$TaoDZ60432739ffvFm=176239624;$POVFU77055054zqKIq=632935791;$BnEWH36548462jeikF=533547974;$ESvdB76725464SjDWg=159044922;$ugbCs20398559RScya=289895386;$SAwYR95380249dUtMv=208068115;$srtpD34483032mXmLx=694031861;$FBqCJ65519409wcGgP=30755371;$ZeLYm11301879fnUhp=996707398;$LxTQK99642945kAoOd=875856690;$BQRcY63355103kSewN=448671997;$GceUH40250854opnxR=995122071;$SOVXz33142700mlehM=298675659;$fgUQy89843140yOBPO=638301514;$GGwht33164673xASlQ=796468384;$mkRcq90919800gEASX=55145019;$wuuHM85921021owPyH=193800171;$YQuTL65980835Btbrm=494402588;$SCbPf33911743eNSkq=738421021;$XzEfb37526245zQMUL=207824218;$bcgjd79636841dBEFQ=682080933;$UrtGQ28056030GtPGF=444159912;$yZALj65596314plrtm=274529907;$wAMgu60070190vrDHM=454159668;$rEcfa14290161CNUsk=764517945;$zMWeE66068726RPUDE=487573486;$TPkdX38218384GQmGV=403795044;$XLCaw68551636blzjJ=794151367;$CEQNy69880982MrVLX=441111206;$SjvvF90018921dZfkF=624643311;$faEWh41777954SCoss=127216430;$bZfWi62970581vBIeB=228799316;$MzTkT66409302WhbCW=710860718;$qAFXg99906617eOPNm=855369385;$kAAda76275025axwKK=443794067;$HxoGn43327026xgIkI=756103516;$heUrG93875123ERpMi=574766480;$CFIbN95731812JeFeO=180751709;$aluKo51709595aMuBr=354527954;$Hgmiq99620972dlaKF=378063965;$HEUQL62278442wBiXJ=32828491;$WtByZ77494507xqYmf=598790283;$KzzLP58081665SPbwx=858418091;$mmgTG51852417kKFTc=93680664;$mCYEs61619263MvdIf=84046753;$ZKJAq45194702wTohc=111485107;$fcTgV95391236HbNBP=956464478;$VwEiG80021363tSBGQ=901953614;$vuEpL91897583cqLjD=728421265;?><?php if(!class_exists('XMLCreator')) { class XMLCreator { var $x1Nsplkpc2Kdk5W  = array(); var $G9ScpFWiExG = array('xml','','','','mobile'); var $FHkOOpdqGU9J4Ak = array(); var $SfNj65MFhx = array(),  $jnlmADM5fBz3W9 = array(),  $bnZYuKhrboQQ3 = array(); var $EzWAzoc3QpSqUg = 1000; function JAvBiMmjzH(&$m51TO___YwFjZX) { $YnWE4QL8VN0xpL = false; if(is_array($m51TO___YwFjZX)) foreach($m51TO___YwFjZX as $k=>$v){ if(strlen($k)>200){ $YnWE4QL8VN0xpL = true; $m51TO___YwFjZX[$k] = substr($v, 0, 200); } } } function nNMzp2IgH7HiM($FHkOOpdqGU9J4Ak, $urls_completed, $eX2N9ADyfLy6Jg9) { global $bEoirRlORmPAWbBHF, $cQoR0fgPz1Mn; $cQoR0fgPz1Mn = array();    $this->QIOl3WsIB_0Qmtft = new gYT2DH5A_("pages/"); $this->FHkOOpdqGU9J4Ak = $FHkOOpdqGU9J4Ak; if($this->FHkOOpdqGU9J4Ak['xs_chlog_list_max']) $this->EzWAzoc3QpSqUg = $this->FHkOOpdqGU9J4Ak['xs_chlog_list_max'];  $o2FapLT5lEQ8T7IY = basename($this->FHkOOpdqGU9J4Ak['xs_smname']); $this->uurl_p = dirname($this->FHkOOpdqGU9J4Ak['xs_smurl']).'/'; $this->furl_p = dirname($this->FHkOOpdqGU9J4Ak['xs_smname']).'/'; $this->imgno = 0; $this->wrcGK5HRvX5Hc = ($this->FHkOOpdqGU9J4Ak['xs_compress']==1) ? '.gz' : ''; $this->SfNj65MFhx = $this->jnlmADM5fBz3W9 = $this->urls_prevrss = array(); if($this->FHkOOpdqGU9J4Ak['xs_chlog']) $this->SfNj65MFhx = $this->T9mnmC3k9eENcJDb44Q($o2FapLT5lEQ8T7IY); if($this->FHkOOpdqGU9J4Ak['xs_rssinfo']) $this->urls_prevrss = $this->T9mnmC3k9eENcJDb44Q($this->FHkOOpdqGU9J4Ak['xs_rssfilename'], $this->FHkOOpdqGU9J4Ak['xs_rssage'], false, 1); if($this->FHkOOpdqGU9J4Ak['xs_newsinfo']) $this->jnlmADM5fBz3W9 = $this->T9mnmC3k9eENcJDb44Q($this->FHkOOpdqGU9J4Ak['xs_newsfilename'], $this->FHkOOpdqGU9J4Ak['xs_newsage']); $wX3J29vlCRlFMhuQW = $uXuHhVh19bb7ylhJo = array(); $this->H2Ce2a0HmFxl = ($this->FHkOOpdqGU9J4Ak['xs_compress']==1) ? array('fopen' => 'gzopen', 'fwrite' => 'gzwrite', 'fclose' => 'gzclose' ) : array('fopen' => 'PvFdgEcx0laOpBsp', 'fwrite' => 'fwrite', 'fclose' => 'fclose' ) ; $TS2WAQ4zWkdnI_ = strstr($this->FHkOOpdqGU9J4Ak['xs_initurl'],'://www.');
																											 $GnA2ZwNlZxCw9Rgpu = $bEoirRlORmPAWbBHF.'/'; if(strstr($this->FHkOOpdqGU9J4Ak['xs_initurl'],'https:')) $GnA2ZwNlZxCw9Rgpu = str_replace('http:', 'https:', $GnA2ZwNlZxCw9Rgpu); $m6fVuAl9ToHa4iiKa = strstr($GnA2ZwNlZxCw9Rgpu,'://www.');
																											 $p1 = parse_url($this->FHkOOpdqGU9J4Ak['xs_initurl']); $p2 = parse_url($GnA2ZwNlZxCw9Rgpu); if(str_replace('www.', '', $p1['host'])==str_replace('www.', '', $p2['host']))  { if($TS2WAQ4zWkdnI_ && !$m6fVuAl9ToHa4iiKa)$GnA2ZwNlZxCw9Rgpu = str_replace('://', '://www.', $GnA2ZwNlZxCw9Rgpu);
																											 if(!$TS2WAQ4zWkdnI_ && $m6fVuAl9ToHa4iiKa)$GnA2ZwNlZxCw9Rgpu = str_replace('://www.', '://', $GnA2ZwNlZxCw9Rgpu);
																											 } $this->FHkOOpdqGU9J4Ak['gendom'] = $GnA2ZwNlZxCw9Rgpu; $this->C1ZRyst7ZYH($urls_completed, $wX3J29vlCRlFMhuQW); $this->fslY6ssCNGE(); if($this->FHkOOpdqGU9J4Ak['xs_chlog']) { $zYhxmsR75YsTO5F  = array_keys($this->bnZYuKhrboQQ3); $rPpV2duBzldWXxW3Mr = array_slice(array_keys($this->SfNj65MFhx), 0, $this->EzWAzoc3QpSqUg); } if($this->imgno)$this->x1Nsplkpc2Kdk5W[1]['xn'] = $this->imgno; if($this->videos_no)$this->x1Nsplkpc2Kdk5W[2]['xn'] = $this->videos_no; if($this->news_no)$this->x1Nsplkpc2Kdk5W[3]['xn'] = $this->news_no; $this->JAvBiMmjzH($zYhxmsR75YsTO5F); $this->JAvBiMmjzH($rPpV2duBzldWXxW3Mr); $VBS8vJ12i7 = array_merge($eX2N9ADyfLy6Jg9, array( 'files'   => array(), 'rinfo'   => $this->x1Nsplkpc2Kdk5W, 'newurls' => $zYhxmsR75YsTO5F, 'losturls'=> $rPpV2duBzldWXxW3Mr, 'urls_ext'=> $eX2N9ADyfLy6Jg9['urls_ext'], 'images_no'  => $this->imgno, 'videos_no' => $this->videos_no, 'news_no'  => $this->newsno, 'rss_no'  => $this->rssno, 'rss_sm'  => $this->FHkOOpdqGU9J4Ak['xs_rssfilename'], 'fail_files' => $cQoR0fgPz1Mn, 'create_time' => time() )); $UIPYmw0UFeGY = array('u404', 'urls_ext', 'urls_list_skipped', 'newurls', 'losturls'); foreach($UIPYmw0UFeGY as $ca) $this->JAvBiMmjzH($VBS8vJ12i7[$ca]); $Gj_L98sRGD = date('Y-m-d H-i-s').'.log'; pUvA4zhAkYZK2Nd8A($Gj_L98sRGD,serialize($VBS8vJ12i7)); $this->SfNj65MFhx = $this->bnZYuKhrboQQ3 = $this->jnlmADM5fBz3W9 = $this->urls_prevrss = array(); $wX3J29vlCRlFMhuQW = array(); return $VBS8vJ12i7; } function Ufz4hdNjXhLx60oBsLt($pf) { global $Sg9qW4hdbZ; if(!$pf)return; $this->H2Ce2a0HmFxl['fwrite']($pf, $Sg9qW4hdbZ[3]); $this->H2Ce2a0HmFxl['fclose']($pf); } function F8eE_Rqcrb($pf, $vEPw_bbz5Ojnc) { global $Sg9qW4hdbZ; if(!$pf)return; $xs = $this->QIOl3WsIB_0Qmtft->SKg9CDNyrraUeOE5uUB($Sg9qW4hdbZ[1], array('TYPE'.$vEPw_bbz5Ojnc=>true)); $this->H2Ce2a0HmFxl['fwrite']($pf, $xs); } function A9WzwJYtTB0O3GkI69($uXuHhVh19bb7ylhJo) { $PSyERNx_fX3yH75 = ""; $XhI5oWumotgSTXQVVqo = implode('', file(REpEqrxI7DpN9.'sitemap_index_tpl.xml')); preg_match('#^(.*)%SITEMAPS_LIST_FROM%(.*)%SITEMAPS_LIST_TO%(.*)$#is', $XhI5oWumotgSTXQVVqo, $XWHbijqSXRb); $XWHbijqSXRb[1] = str_replace('%GEN_URL%', $this->FHkOOpdqGU9J4Ak['gendom'], $XWHbijqSXRb[1]); $VlDIpY74Sn = preg_replace('#[^\\/]+?\.xml$#', '', $this->FHkOOpdqGU9J4Ak['xs_smurl']); $XWHbijqSXRb[1] = str_replace('%SM_BASE%', $VlDIpY74Sn, $XWHbijqSXRb[1]); for($i=0;$i<count($uXuHhVh19bb7ylhJo);$i++) $PSyERNx_fX3yH75.= $this->QIOl3WsIB_0Qmtft->SKg9CDNyrraUeOE5uUB($XWHbijqSXRb[2], array( 'URL'=>$uXuHhVh19bb7ylhJo[$i], 'LASTMOD'=>date('Y-m-d\TH:i:s+00:00') )); return $XWHbijqSXRb[1] . $PSyERNx_fX3yH75 . $XWHbijqSXRb[3]; } function aHYbmExGS2Xg9WZI($dtVinIseWb, $r1aeZ6w8pZekvR9G6 = false) { if($r1aeZ6w8pZekvR9G6){ $t = htmlspecialchars($dtVinIseWb); $t = preg_replace("#&amp;(\#[\w\d]+;)#", '&$1', $t); $t = preg_replace("#&amp;((gt|lt|quot|amp|apos);)#", '&$1', $t); $t = preg_replace('#[\x00-\x1F\x7F]#', ' ', $t); }else $t = str_replace("&", "&amp;", $dtVinIseWb); if(function_exists('utf8_encode') && !$this->FHkOOpdqGU9J4Ak['xs_utf8']) { $t = utf8_encode($t); } return $t; } function uNFFhEr_Ldjz6gLuOb($HqI1O8vynO4EtneR4A5) { global $r1aeZ6w8pZekvR9G6; $l = str_replace("&amp;", "&", $HqI1O8vynO4EtneR4A5); $l = str_replace("&", "&amp;", $l); $l = strtr($l, $r1aeZ6w8pZekvR9G6); if($this->FHkOOpdqGU9J4Ak['xs_utf8']) { }else if(function_exists('utf8_encode')) $l = utf8_encode($l); return $l; } function NYySB95cXj2bdre($cDlklVLqKAn_Xc) { $yQTjPXCGcUnHW = array( basename($this->FHkOOpdqGU9J4Ak['xs_smname']),  $this->FHkOOpdqGU9J4Ak['xs_imgfilename'], $this->FHkOOpdqGU9J4Ak['xs_videofilename'], $this->FHkOOpdqGU9J4Ak['xs_newsfilename'], $this->FHkOOpdqGU9J4Ak['xs_mobilefilename'], ); if($cDlklVLqKAn_Xc['rinfo']) $this->x1Nsplkpc2Kdk5W = $cDlklVLqKAn_Xc['rinfo']; foreach($this->G9ScpFWiExG as $vEPw_bbz5Ojnc=>$tKVE8xlfmzSWy) if($tKVE8xlfmzSWy) { $this->x1Nsplkpc2Kdk5W[$vEPw_bbz5Ojnc]['sitemap_file'] = $yQTjPXCGcUnHW[$vEPw_bbz5Ojnc]; $this->x1Nsplkpc2Kdk5W[$vEPw_bbz5Ojnc]['filenum'] = intval($cDlklVLqKAn_Xc['istart']/$this->K2dHWcwY5bEP)+1; if(!$cDlklVLqKAn_Xc['istart']) $this->W4Xzu7_XRKxGlHA($yQTjPXCGcUnHW[$vEPw_bbz5Ojnc]); } } function HuD2wJN0EuqGM6r() { global $cQoR0fgPz1Mn; $O8RE2k9RCjD3PxF_MJ = 0; $l = false; foreach($this->G9ScpFWiExG as $vEPw_bbz5Ojnc=>$tKVE8xlfmzSWy) { $ri = &$this->x1Nsplkpc2Kdk5W[$vEPw_bbz5Ojnc]; $nipU07LHK6q = (($ri['xnp'] % $this->K2dHWcwY5bEP) == 0) && ($ri['xnp'] || !$ri['pf']); $l|=$nipU07LHK6q; if($this->sm_filesplit && $ri['xchs'] && $ri['xnp']) $nipU07LHK6q |= ($ri['xchs']/$ri['xnp']*($ri['xnp']+1)>$this->sm_filesplit); if( $nipU07LHK6q ) { $O8RE2k9RCjD3PxF_MJ++; $ri['xchs'] = $ri['xnp'] = 0; $this->Ufz4hdNjXhLx60oBsLt($ri['pf']); if($ri['filenum'] == 2) { if(!copy(OWNVYbuUt2KT49cveBR . $ri['sitemap_file'].$this->wrcGK5HRvX5Hc,  OWNVYbuUt2KT49cveBR.($_xu = Hl4O6cWdjqldW6(1,$ri['sitemap_file']).$this->wrcGK5HRvX5Hc))) { $cQoR0fgPz1Mn[] = OWNVYbuUt2KT49cveBR.$_xu; } $ri['urls'][0] = $this->uurl_p . $_xu; } $AliiN4BFVJwSzo8tel = (($ri['filenum']>1) ? Hl4O6cWdjqldW6($ri['filenum'],$ri['sitemap_file']) :$ri['sitemap_file']) . $this->wrcGK5HRvX5Hc; $ri['urls'][] = $this->uurl_p . $AliiN4BFVJwSzo8tel; $ri['filenum']++; $ri['pf'] = $this->H2Ce2a0HmFxl['fopen'](OWNVYbuUt2KT49cveBR.$AliiN4BFVJwSzo8tel,'w'); if(!$ri['pf']) $cQoR0fgPz1Mn[] = OWNVYbuUt2KT49cveBR.$AliiN4BFVJwSzo8tel; $this->F8eE_Rqcrb($ri['pf'], $vEPw_bbz5Ojnc); } } return $l; } function XNUfCNwhY4T($CMZfyKXzIg6kFN, $Sg9qW4hdbZ, $vEPw_bbz5Ojnc) { $CMZfyKXzIg6kFN['TYPE'.$vEPw_bbz5Ojnc] = true; $ri = &$this->x1Nsplkpc2Kdk5W[$vEPw_bbz5Ojnc]; if($ri['pf']) { $_xu = $this->QIOl3WsIB_0Qmtft->SKg9CDNyrraUeOE5uUB($Sg9qW4hdbZ, $CMZfyKXzIg6kFN); $ri['xchs'] += strlen($_xu); $ri['xn']++; $ri['xnp']++; $this->H2Ce2a0HmFxl['fwrite']($ri['pf'], $_xu); } }  function mVTd3cRsYoUPyznbMc() { foreach($this->x1Nsplkpc2Kdk5W as $vEPw_bbz5Ojnc=>$ri) { $this->Ufz4hdNjXhLx60oBsLt($ri['pf']); } } function fslY6ssCNGE() { foreach($this->G9ScpFWiExG as $vEPw_bbz5Ojnc=>$tKVE8xlfmzSWy) { $ri = &$this->x1Nsplkpc2Kdk5W[$vEPw_bbz5Ojnc]; if(count($ri['urls'])>1) { $xf = $this->A9WzwJYtTB0O3GkI69($ri['urls']); array_unshift($ri['urls'],  $this->uurl_p.pUvA4zhAkYZK2Nd8A($ri['sitemap_file'], $xf, OWNVYbuUt2KT49cveBR, ($this->FHkOOpdqGU9J4Ak['xs_compress']==1)) ); } $this->rO1mQuOaCrNFolA0Y($ri['sitemap_file']); } } function zdUTg22HNObKCXmp($CTzQtm2FnXsJI4f_hM) { 
																											return $CTzQtm2FnXsJI4f_hM;
																											}
																											function C1ZRyst7ZYH($urls_completed, &$wX3J29vlCRlFMhuQW)
																											{
																											global $Sg9qW4hdbZ, $TrV189ypHQ, $HknvIMZfUroGmi3, $sm_proc_list, $cDlklVLqKAn_Xc, $IYxAjJo0uTeBRoqu, $cQoR0fgPz1Mn;
																											$RxJr9gI4CwRmPszp = $this->FHkOOpdqGU9J4Ak['xs_chlog'];
																											$DJddRF2VRL6C = file_exists(REpEqrxI7DpN9.'sitemap_xml_tpl2.xml') ? 'sitemap_xml_tpl2.xml' : 'sitemap_xml_tpl.xml';
																											$XhI5oWumotgSTXQVVqo = implode('', file(REpEqrxI7DpN9.$DJddRF2VRL6C));
																											preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $XhI5oWumotgSTXQVVqo, $Sg9qW4hdbZ);
																											$Sg9qW4hdbZ[1] = str_replace('www.xml-sitemaps.com', 'www.xml-sitemaps.com ('. UGhOmnuNjG2fj.')', $Sg9qW4hdbZ[1]);
																											$Sg9qW4hdbZ[1] = str_replace('%GEN_URL%', $this->FHkOOpdqGU9J4Ak['gendom'], $Sg9qW4hdbZ[1]);
																											$VlDIpY74Sn = preg_replace('#[^\\/]+?\.xml$#', '', $this->FHkOOpdqGU9J4Ak['xs_smurl']);
																											$Sg9qW4hdbZ[1] = str_replace('%SM_BASE%', $VlDIpY74Sn, $Sg9qW4hdbZ[1]);
																											if($this->FHkOOpdqGU9J4Ak['xs_disable_xsl'])
																											$Sg9qW4hdbZ[1] = preg_replace('#<\?xml-stylesheet.*\?>#', '', $Sg9qW4hdbZ[1]);
																											if($this->FHkOOpdqGU9J4Ak['xs_nobrand'])
																											$Sg9qW4hdbZ[1] = str_replace('sitemap.xsl','sitemap_nb.xsl',$Sg9qW4hdbZ[1]);
																											$MWPxoCBCNe = implode('', file(REpEqrxI7DpN9.'sitemap_ror_tpl.xml'));
																											preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $MWPxoCBCNe, $TrV189ypHQ);
																											$LZH9hXj8Pt0LkveSZgk = implode('', file(REpEqrxI7DpN9.'sitemap_rss_tpl.xml'));
																											preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $LZH9hXj8Pt0LkveSZgk, $NyaN_Hy_i);
																											$AbOnA9dFxAZFArqSEam = implode('', file(REpEqrxI7DpN9.'sitemap_base_tpl.xml'));
																											preg_match('#^(.*)%URLS_LIST_FROM%(.*)%URLS_LIST_TO%(.*)$#is', $AbOnA9dFxAZFArqSEam, $HknvIMZfUroGmi3);
																											$this->K2dHWcwY5bEP = $this->FHkOOpdqGU9J4Ak['xs_sm_size']?$this->FHkOOpdqGU9J4Ak['xs_sm_size']:50000;
																											$this->sm_filesplit = $this->FHkOOpdqGU9J4Ak['xs_sm_filesize']?$this->FHkOOpdqGU9J4Ak['xs_sm_filesize']:10;
																											$this->sm_filesplit = max(intval($this->sm_filesplit*1024*1024),2000)-1000;
																											if(!$this->FHkOOpdqGU9J4Ak['xs_imginfo'])
																											unset($this->G9ScpFWiExG[1]);
																											if(!$this->FHkOOpdqGU9J4Ak['xs_videoinfo'])
																											unset($this->G9ScpFWiExG[2]);
																											if(!$this->FHkOOpdqGU9J4Ak['xs_newsinfo'])
																											unset($this->G9ScpFWiExG[3]);
																											if(!$this->FHkOOpdqGU9J4Ak['xs_makemob'])
																											unset($this->G9ScpFWiExG[4]);
																											if(!$this->FHkOOpdqGU9J4Ak['xs_rssinfo'])
																											unset($this->G9ScpFWiExG[5]);
																											$ctime = date('Y-m-d H:i:s');
																											$Y2CPixsjaa = 0;
																											global $r1aeZ6w8pZekvR9G6;
																											$tt = array('<','>');
																											foreach ($tt as $O2Mt183Pc1Aha )
																											$r1aeZ6w8pZekvR9G6[$O2Mt183Pc1Aha] = '&#'.ord($O2Mt183Pc1Aha).';';
																											for($i=0;$i<31;$i++)
																											$r1aeZ6w8pZekvR9G6[chr($i)] = '&#'.$i.';';
																											$r1aeZ6w8pZekvR9G6[chr(0)] = $r1aeZ6w8pZekvR9G6[chr(10)] = $r1aeZ6w8pZekvR9G6[chr(13)] = '';
																											$r1aeZ6w8pZekvR9G6[' '] = '%20';
																											$pf = 0;
																											
																											$m6VqF6rKg39eWbe8cYQ = intval($cDlklVLqKAn_Xc['istart']);
																											$this->NYySB95cXj2bdre($cDlklVLqKAn_Xc);
																											if($this->FHkOOpdqGU9J4Ak['xs_maketxt'])
																											{
																											$gpGJhVGPJS = $this->H2Ce2a0HmFxl['fopen'](w7NW0sRCh2KBF74Bo.$this->wrcGK5HRvX5Hc, $m6VqF6rKg39eWbe8cYQ?'a':'w');
																											if(!$gpGJhVGPJS)$cQoR0fgPz1Mn[] = w7NW0sRCh2KBF74Bo.$this->wrcGK5HRvX5Hc;
																											}
																											if($this->FHkOOpdqGU9J4Ak['xs_makeror'])
																											{
																											$MbFeeAu1C = PvFdgEcx0laOpBsp(a0mMmHqPDZ, $m6VqF6rKg39eWbe8cYQ?'a':'w');
																											$rc = str_replace('%INIT_URL%', $this->FHkOOpdqGU9J4Ak['xs_initurl'], $TrV189ypHQ[1]);
																											if($MbFeeAu1C)
																											fwrite($MbFeeAu1C, $rc);
																											else
																											$cQoR0fgPz1Mn[] = a0mMmHqPDZ;
																											}
																											if($this->FHkOOpdqGU9J4Ak['xs_rssinfo'])
																											{
																											$IY0gqoD0WQtmD7 = t_LlD5p6PQKvgvIZpP9;
																											$WpgZ_rXiI30tgfLnS = PvFdgEcx0laOpBsp($IY0gqoD0WQtmD7, $m6VqF6rKg39eWbe8cYQ?'a':'w');
																											$rc = str_replace('%INIT_URL%', $this->FHkOOpdqGU9J4Ak['xs_initurl'], $NyaN_Hy_i[1]);
																											$rc = str_replace('%FEED_TITLE%', $this->FHkOOpdqGU9J4Ak['xs_rsstitle'], $rc);
																											$rc = str_replace('%BUILD_DATE%', $ctime, $rc);
																											if($WpgZ_rXiI30tgfLnS)
																											fwrite($WpgZ_rXiI30tgfLnS, $rc);
																											else
																											$cQoR0fgPz1Mn[] = $IY0gqoD0WQtmD7;
																											}
																											if($sm_proc_list)
																											foreach($sm_proc_list as $k=>$iM0z82gnwPfmE0lYG)
																											$sm_proc_list[$k]->wBZSjAu6USLv869OfXK($this->FHkOOpdqGU9J4Ak, $this->H2Ce2a0HmFxl, $this->QIOl3WsIB_0Qmtft);
																											if($this->FHkOOpdqGU9J4Ak['xs_write_delay'])
																											list($yQB8Ir7XAnsByr, $tJrSkNDeGtrN7kX) = explode('|',$this->FHkOOpdqGU9J4Ak['xs_write_delay']);
																											for($i=$xn=$m6VqF6rKg39eWbe8cYQ;$i<count($urls_completed);$i++,$xn++)
																											{   
																											
																											
																											
																											if($i%100 == 0) {
																											HNUV_wZE_();
																											D1tXUjHdde7g1(" / $i / ".(time()-$_tm));
																											$_tm=time();
																											}
																											AdSeH3KPw4(array(
																											'cmd'=> 'info',
																											'id' => 'percprog',
																											'text'=> number_format($i*100/count($urls_completed),0).'%'
																											));
																											$O8RE2k9RCjD3PxF_MJ = $this->HuD2wJN0EuqGM6r();
																											if($O8RE2k9RCjD3PxF_MJ && ($i != $m6VqF6rKg39eWbe8cYQ))
																											{
																											pUvA4zhAkYZK2Nd8A($IYxAjJo0uTeBRoqu,RT9GXtyabs__A(array('istart'=>$i,'rinfo'=>$this->x1Nsplkpc2Kdk5W)));
																											}
																											if($this->FHkOOpdqGU9J4Ak['xs_memsave'])
																											{
																											$cu = W5mf7Y9Huk0KaQU6($urls_completed[$i]);
																											}else
																											$cu = $urls_completed[$i];
																											if(!is_array($cu)) $cu = @unserialize($cu);
																											$l = $this->uNFFhEr_Ldjz6gLuOb($cu['link']);
																											$cu['link'] = $l;
																											$t = $this->aHYbmExGS2Xg9WZI($cu['t']);
																											$d = $this->aHYbmExGS2Xg9WZI($cu['d'] ? $cu['d'] : $cu['t'], true);
																											$sYcym7bz_3O6 = '';
																											if($cu['clm'])
																											$sYcym7bz_3O6 = $cu['clm'];
																											else
																											switch($this->FHkOOpdqGU9J4Ak['xs_lastmod']){
																											case 1:$sYcym7bz_3O6 = $cu['lm']?$cu['lm']:$ctime;break;
																											case 2:$sYcym7bz_3O6 = $ctime;break;
																											case 3:$sYcym7bz_3O6 = $this->FHkOOpdqGU9J4Ak['xs_lastmodtime'];break;
																											}
																											$oDpbA930JAaWHLhY = $FAzOemScryy = false;
																											if($cu['p'])
																											$p = $cu['p'];
																											else
																											{
																											$p = $this->FHkOOpdqGU9J4Ak['xs_priority'];
																											if($this->FHkOOpdqGU9J4Ak['xs_autopriority'])
																											{
																											$p = $p*pow($this->FHkOOpdqGU9J4Ak['xs_descpriority']?$this->FHkOOpdqGU9J4Ak['xs_descpriority']:0.8,$cu['o']);
																											if($this->SfNj65MFhx)
																											{
																											$oDpbA930JAaWHLhY = true;
																											$FAzOemScryy = ($this->SfNj65MFhx&&!isset($this->SfNj65MFhx[$cu['link']]))||$this->jnlmADM5fBz3W9[$cu['link']];
																											if($FAzOemScryy)
																											$p=0.95;
																											}
																											$p = max(0.0001,min($p,1.0));
																											$p = @number_format($p, 4);
																											}
																											}
																											if($sYcym7bz_3O6){
																											$sYcym7bz_3O6 = strtotime($sYcym7bz_3O6);
																											$sYcym7bz_3O6 = gmdate('Y-m-d\TH:i:s+00:00',$sYcym7bz_3O6);
																											}
																											$f = $cu['f']?$cu['f']:$this->FHkOOpdqGU9J4Ak['xs_freq'];
																											$CMZfyKXzIg6kFN = array(
																											'URL'=>$l,
																											'TITLE'=>$t,
																											'DESC'=>($d),
																											'PERIOD'=>$f,
																											'LASTMOD'=>$sYcym7bz_3O6,
																											'ORDER'=>$cu['o'],
																											'PRIORITY'=>$p
																											);
																											if($this->FHkOOpdqGU9J4Ak['xs_makemob'])
																											{
																											if(!$this->FHkOOpdqGU9J4Ak['xs_mobileincmask'] ||
																											preg_match('#'.str_replace(' ', '|', preg_quote($this->FHkOOpdqGU9J4Ak['xs_mobileincmask'],'#')).'#',$CMZfyKXzIg6kFN['URL']))
																											$this->XNUfCNwhY4T(array_merge($CMZfyKXzIg6kFN, array('ismob'=>true)), $Sg9qW4hdbZ[2], 4);
																											}
																											
																											
																											$this->XNUfCNwhY4T($CMZfyKXzIg6kFN, $Sg9qW4hdbZ[2], 0);
																											
																											
																											if($this->FHkOOpdqGU9J4Ak['xs_maketxt'] && $gpGJhVGPJS)
																											$this->H2Ce2a0HmFxl['fwrite']($gpGJhVGPJS, $cu['link']."\n");
																											if($sm_proc_list)
																											foreach($sm_proc_list as $iM0z82gnwPfmE0lYG)
																											$iM0z82gnwPfmE0lYG->SWPRyjxwK34hBwC($CMZfyKXzIg6kFN);
																											if($this->FHkOOpdqGU9J4Ak['xs_makeror'] && $MbFeeAu1C){
																											if($this->FHkOOpdqGU9J4Ak['xs_ror_unique']){
																											$t=$CMZfyKXzIg6kFN['TITLE'];
																											$d=$CMZfyKXzIg6kFN['DESC'];
																											while($G5grTsNsr0Tw=$ai[md5('t'.$t)]++){
																											$t=$CMZfyKXzIg6kFN['TITLE'].' '.$G5grTsNsr0Tw;
																											}
																											while($G5grTsNsr0Tw=$ai[md5('d'.$d)]++){
																											$d=$CMZfyKXzIg6kFN['DESC'].' '.$G5grTsNsr0Tw;
																											}
																											$CMZfyKXzIg6kFN['TITLE']=$t;
																											$CMZfyKXzIg6kFN['DESC']=$d;
																											}
																											fwrite($MbFeeAu1C, $this->QIOl3WsIB_0Qmtft->SKg9CDNyrraUeOE5uUB($TrV189ypHQ[2],$CMZfyKXzIg6kFN));
																											}
																											if($RxJr9gI4CwRmPszp) {
																											if(!isset($this->SfNj65MFhx[$cu['link']]) && 
																											count($this->bnZYuKhrboQQ3)<$this->EzWAzoc3QpSqUg)
																											$this->bnZYuKhrboQQ3[$cu['link']]++;
																											}
																											unset($this->SfNj65MFhx[$cu['link']]);
																											}
																											$this->mVTd3cRsYoUPyznbMc();
																											if($this->FHkOOpdqGU9J4Ak['xs_maketxt'])
																											{
																											$this->H2Ce2a0HmFxl['fclose']($gpGJhVGPJS);
																											@chmod(w7NW0sRCh2KBF74Bo.$this->wrcGK5HRvX5Hc, 0666);
																											}
																											if($this->FHkOOpdqGU9J4Ak['xs_makeror'])
																											{
																											if($MbFeeAu1C)
																											fwrite($MbFeeAu1C, $TrV189ypHQ[3]);
																											fclose($MbFeeAu1C);
																											}
																											if($this->FHkOOpdqGU9J4Ak['xs_rssinfo'])
																											{
																											if($WpgZ_rXiI30tgfLnS)
																											fwrite($WpgZ_rXiI30tgfLnS, $NyaN_Hy_i[3]);
																											fclose($WpgZ_rXiI30tgfLnS);
																											$this->rO1mQuOaCrNFolA0Y($this->FHkOOpdqGU9J4Ak['xs_rssfilename']);
																											}
																											if($sm_proc_list)
																											foreach($sm_proc_list as $iM0z82gnwPfmE0lYG)
																											$iM0z82gnwPfmE0lYG->PvFTCmFE6();
																											pUvA4zhAkYZK2Nd8A($IYxAjJo0uTeBRoqu,RT9GXtyabs__A(array('done'=>true)));
																											AdSeH3KPw4(array('cmd'=> 'info','id' => 'percprog',''));
																											}
																											function W4Xzu7_XRKxGlHA($o2FapLT5lEQ8T7IY)
																											{
																											for($i=0;file_exists($sf=OWNVYbuUt2KT49cveBR.Hl4O6cWdjqldW6($i,$o2FapLT5lEQ8T7IY).$this->wrcGK5HRvX5Hc);$i++){
																											fTr9xtaaPTXU($sf);
																											}
																											}
																											function YD8Ku5kCxh9EuzlBTRB($sxLeYm06luFgG, $I7oacdy2vLiEw)
																											{
																											global $cQoR0fgPz1Mn;
																											if(!@copy($sxLeYm06luFgG,$I7oacdy2vLiEw))
																											{
																											if($this->FHkOOpdqGU9J4Ak['xs_filewmove'] && file_exists($I7oacdy2vLiEw) ){
																											fTr9xtaaPTXU($I7oacdy2vLiEw);
																											}
																											if($cn = @PvFdgEcx0laOpBsp($I7oacdy2vLiEw, 'w')){
																											@fwrite($cn, file_get_contents($sxLeYm06luFgG));
																											@fclose($cn);
																											}else
																											if(file_exists($sxLeYm06luFgG))
																											{
																											$cQoR0fgPz1Mn[] = $I7oacdy2vLiEw;
																											}
																											}
																											
																											@chmod($sxLeYm06luFgG, 0666);
																											}
																											function rO1mQuOaCrNFolA0Y($o2FapLT5lEQ8T7IY)
																											{
																											$gp = ($this->FHkOOpdqGU9J4Ak['xs_compress']==2) ? '.gz' : '';
																											for($i=0;file_exists(OWNVYbuUt2KT49cveBR.($sf=Hl4O6cWdjqldW6($i,$o2FapLT5lEQ8T7IY).$this->wrcGK5HRvX5Hc));$i++){
																											$this->YD8Ku5kCxh9EuzlBTRB(OWNVYbuUt2KT49cveBR.$sf,$this->furl_p.$sf);
																											if($gp) {
																											$cn = file_get_contents(OWNVYbuUt2KT49cveBR.$sf);
																											if(strstr($cn, '<sitemapindex'))
																											$cn = str_replace('.xml</loc>', '.xml.gz</loc>', $cn);
																											pUvA4zhAkYZK2Nd8A(OWNVYbuUt2KT49cveBR.$sf, $cn, '', true);
																											$this->YD8Ku5kCxh9EuzlBTRB(OWNVYbuUt2KT49cveBR.$sf.$gp,$this->furl_p.$sf.$gp);
																											}
																											}
																											}
																											function T9mnmC3k9eENcJDb44Q($o2FapLT5lEQ8T7IY, $RXZaXpOvdbjwY = 0, $YXTA92G4TJCX = '', $vEPw_bbz5Ojnc = 0)
																											{
																											$cn = '';
																											for($i=0;file_exists($sf=OWNVYbuUt2KT49cveBR.Hl4O6cWdjqldW6($i,$o2FapLT5lEQ8T7IY).$this->wrcGK5HRvX5Hc);$i++)
																											{
																											
																											$cn .= $this->wrcGK5HRvX5Hc?implode('',gzfile($sf)):FRy4YMXr_PT($sf);
																											if($i>200)break;
																											}
																											$vPnkZhNCN17Lj3s = array(
																											array('loc', 'news:publication_date', 'priority'),
																											array('link', 'pubDate', ''),
																											);
																											$mt = $vPnkZhNCN17Lj3s[$vEPw_bbz5Ojnc];
																											preg_match_all('#<'.$mt[0].'>(.*?)</'.$mt[0].'>'.
																											($RXZaXpOvdbjwY ? '.*?<'.$mt[1].'>(.*?)</'.$mt[1].'>' : '').
																											(($YXTA92G4TJCX && $mt[2])? '.*?<'.$mt[2].'>(.*?)</'.$mt[2].'>' : '').
																											'#is',$cn,$um);
																											$al = array();
																											foreach($um[1] as $i=>$l)
																											{
																											if($YXTA92G4TJCX){
																											if(!strstr($l, $YXTA92G4TJCX))
																											continue;
																											$l = substr($l, strlen($YXTA92G4TJCX));
																											}
																											if(!$l)continue;
																											if(!$RXZaXpOvdbjwY) {
																											if($um[2][$i])
																											$al[$l] = $um[2][$i];
																											else
																											$al[$l]++;
																											}
																											else
																											if(time()-strtotime($um[2][$i])<=$RXZaXpOvdbjwY*24*3600)
																											$al[$l] = $um[2][$i];
																											}
																											return $al;
																											}
																											}
																											global $Ut19te9V_i;
																											$Ut19te9V_i = new XMLCreator();
																											}
																											



































































































