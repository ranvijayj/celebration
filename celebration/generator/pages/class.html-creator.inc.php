<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$otKnK11332092wJSpx=557297394;$SRZUT22373352ypcAu=448641510;$olRUl68395081WbsIR=619003204;$BpDZA28459778SccLH=475226227;$buihd96629944tQZOl=922654328;$bkTkX61968079FUEKN=369131256;$jyOIs28536682MlPmE=719000763;$YVvBB55398254kttoq=380106598;$DzcwQ66615296mJqzA=257792511;$OTUgf31250305aehfi=757902252;$ckYIt53365784DcuRz=787779572;$Acxmo12024230vJasY=753268219;$gAQJf11288146jbjfa=560711945;$nPqDF20220031JvTTO=615954498;$PExYc52882385MtISe=825339630;$LYLQb78337708QakjR=595711090;$SEnvP20648498dYRbL=832412629;$AmKDz28877258NGmTW=942287995;$wtqWs27086487mhhsR=831680939;$iWaMS74338684cVOAA=906435212;$mbhyI94696351HhMFX=73894561;$SqFgr57221985eyMdJ=737902741;$mAnvA65978089sZMrV=806803498;$posVd90027161omKlm=686440582;$jTCJk53431702WaQxV=283157745;$vhkkS15254211NzyHf=2798736;$wAFfN79557190ENFqi=750707306;$DWPaX35403137Hqzhb=934727204;$tVxsz76854553IVypF=461202179;$YkNUK82973938JIFVl=734975983;$OeBuP67823792tWLop=663392365;$eTajR90466614pQYwG=652295075;$qmKCi74964905yMFlW=608027863;$zXrmP80381165aArDb=936434479;$xnBVM30777893NEPEr=544858673;$AxzYd75217591nNvWb=838144196;$egXbm47762756CmYvt=723634796;$JfWSJ97475892FrBcw=607174225;$kuFLZ58419495peGiD=395106232;$hXJvp79656067YxZJb=493274567;$ogCBv85248108emmXm=808022980;$LcdIX44258118ykvJB=746195221;$iMmvz60748596HwNBx=214135040;$gubKu13782043RFXPF=616686188;$zmHvB97420960EVnRJ=861192414;$jhbVi10727844jamGj=354497467;$irqib37765198PbjMD=1945098;$ZrQmp57595520zoQsQ=209379059;$PVnZt84281311xAEnS=883143097;$xDCPm86885071kboEA=431080963;?><?php echo 'Creating HTML sitemap...<div id="percprog2"></div>';flush(); $Xm5TKOzcDly01EH2 = $grab_parameters['xs_initurl']; if(substr_count($Xm5TKOzcDly01EH2,'/')>2) $Xm5TKOzcDly01EH2 = substr($Xm5TKOzcDly01EH2, 0, strrpos($Xm5TKOzcDly01EH2,'/')); $oApTmRC5HPu= ''; $hf9XRbEeY5Kx6GFPKr = array(); $DGsLKvCm27eV = 0; $G0Qn3BFpb4= ceil(count($urls_completed) / $grab_parameters['xs_htmlpart']); $KCZQduSVvXZZGY28 = intval($ndwxwUINtLIx81E['istart']); if($ndwxwUINtLIx81E) { $DGsLKvCm27eV = $ndwxwUINtLIx81E['curpage']; } $aSzeQB2V8mI9JsaPdj=$yMBs2OPLVVuAK=$voaV8zBrRtNis7_qna=array(); for($i=0;$i<count($urls_completed);$i++){ if($grab_parameters['xs_memsave']) { $cu = W5mf7Y9Huk0KaQU6($urls_completed[$i]); }else $cu = &$urls_completed[$i]; if(!is_array($cu)) $cu = @unserialize($cu); Nm21UoK4Q2QYWx7O($cu); if($i%100 == 0){ HNUV_wZE_(); D1tXUjHdde7g1(" / $i / ".(time()-$_tm)); $_tm=time(); } } function Nm21UoK4Q2QYWx7O($ur){ global $aSzeQB2V8mI9JsaPdj,$yMBs2OPLVVuAK,$sc_VvX5jelp2,$Xm5TKOzcDly01EH2,$grab_parameters; $AwcDkUITo4cg = str_replace($Xm5TKOzcDly01EH2,'', $ur['link']); $AwcDkUITo4cg = preg_replace('#\?.*#', '', $AwcDkUITo4cg); for($i=0;$i<count($sc_VvX5jelp2);$i++) if(preg_match('#'.$sc_VvX5jelp2[$i].'#',$AwcDkUITo4cg)){ $yMBs2OPLVVuAK['elem'][$sc_VvX5jelp2[$i]]['cnt']++; $yMBs2OPLVVuAK['tcnt']++; break; } $jJtl7VMEXWLDURcm9 = &$aSzeQB2V8mI9JsaPdj; $ECiIdFEhSN3p79 = $AwcDkUITo4cg; $lv = 0; if($grab_parameters['xs_htmlstruct']==2) { $ns = 'Sitemap'; $jJtl7VMEXWLDURcm9 = &$jJtl7VMEXWLDURcm9['elem'][$ns]; $jJtl7VMEXWLDURcm9['tcnt']++; }else if($grab_parameters['xs_htmlstruct']==1) { $ns = substr($AwcDkUITo4cg,0,strrpos($AwcDkUITo4cg,'/')); $jJtl7VMEXWLDURcm9 = &$jJtl7VMEXWLDURcm9['elem'][$ns]; $jJtl7VMEXWLDURcm9['tcnt']++; } else while(($ps=strpos($AwcDkUITo4cg,'/'))!==false){ $ns = substr($AwcDkUITo4cg,0,$ps+1); $jJtl7VMEXWLDURcm9 = &$jJtl7VMEXWLDURcm9['elem'][$ns]; $jJtl7VMEXWLDURcm9['tcnt']++; $AwcDkUITo4cg = substr($AwcDkUITo4cg,$ps+1); } $jJtl7VMEXWLDURcm9['cnt']++; $jJtl7VMEXWLDURcm9['pages'][] = $ur; } function iRDSo8Ka5xIhzQ($sk,$eTOHJxXXzq_3x0t,$VJrkoghoW,$VH_xpFhmDF6bO5F) {                $VH_xpFhmDF6bO5F = "<table>\n".$VH_xpFhmDF6bO5F."\n</table>"; return " <tr valign=\"top\">". str_repeat("\n<td class=\"lbullet\">&nbsp;&nbsp;&nbsp;&nbsp;</td>",$VJrkoghoW)." <td class=\"lpart\" colspan=\"".(100-$VJrkoghoW)."\"><div class=\"lhead\">$sk <span class=\"lcount\">".$eTOHJxXXzq_3x0t." pages</span></div> $VH_xpFhmDF6bO5F </td> </tr> "; } function LDd7bqg5_C($a, $b) { global $grab_parameters, $LwDUDx9css267qOr; if(($GLOBALS['_iter']++ %100) == 0){ D1tXUjHdde7g1(" / ".$GLOBALS['_iter']." / ".(time()-$_tm)); $_tm=time(); HNUV_wZE_(); } $at = is_array($a)?($a['t']?$a['t']:$a['link']):$a; $bt = is_array($b)?($b['t']?$b['t']:$b['link']):$b; if($grab_parameters['xs_htmlsort'] == 3) { if(!$LwDUDx9css267qOr)$LwDUDx9css267qOr=rand(1E10,1E12); $at = md5($at.$LwDUDx9css267qOr); $bt = md5($bt.$LwDUDx9css267qOr); } if ($at == $bt) { return 0; } $rs = ($at < $bt) ? -1 : 1; if($grab_parameters['xs_htmlsort'] == 2)$rs = -$rs; return $rs; } function Zq0MnQmsD6T2lLLfU($sl,$VJrkoghoW=0,&$chfKQ2jb8QOC){ global $oavbxuq1ZeJr, $grab_parameters, $oApTmRC5HPu, $hf9XRbEeY5Kx6GFPKr, $DGsLKvCm27eV, $urls_completed, $KCZQduSVvXZZGY28, $qZBDe0ba3gtSA0a; $UfCbPMkJL7hFdCsb = ''; if($grab_parameters['xs_htmlsort']) { D1tXUjHdde7g1("sorting.."); @uksort($sl, 'LDd7bqg5_C'); } $ls = $VJrkoghoW*2; if(is_array($sl)) foreach($sl as $sk=>$sn){ $VH_xpFhmDF6bO5F = ""; if(($GLOBALS['_iter']++ %100) == 0){ D1tXUjHdde7g1(" / ".$GLOBALS['_iter']." / ".(time()-$_tm)); $_tm=time(); HNUV_wZE_(); } $sr6xk3MKAMAoDi=array(); if(is_array($sn['pages'])) { if($grab_parameters['xs_htmlsort']) { D1tXUjHdde7g1("sorting.."); @usort($sn['pages'], 'LDd7bqg5_C'); } foreach($sn['pages'] as $pg) { $chfKQ2jb8QOC++; if($chfKQ2jb8QOC<=$KCZQduSVvXZZGY28)continue; $t = $pg['t'] ? $pg['t'] : basename($pg['link']); $sr6xk3MKAMAoDi[] = array ( 'link'=>$pg['link'], 'title'=>$t, 'desc'=>$pg['d'], 'title_clean'=>str_replace('&amp;amp;', '&amp;',htmlspecialchars($t)), 'file'=>basename($pg['link']) ); $VH_xpFhmDF6bO5F .= "\n<tr><td class=\"lpage\"><a href=\"".$pg['link']."\" title=\"".str_replace('&amp;amp;', '&amp;',htmlspecialchars($t))."\">".$t."</a></td></tr>"; if($chfKQ2jb8QOC%10==0) AdSeH3KPw4(array( 'cmd'=> 'info', 'id' => 'percprog2', 'text'=> number_format($chfKQ2jb8QOC*100/count($urls_completed),0).'%' )); if(($chfKQ2jb8QOC%$grab_parameters['xs_htmlpart'])==0) { $oApTmRC5HPu .= iRDSo8Ka5xIhzQ($sk,$sn['cnt'],$VJrkoghoW,$VH_xpFhmDF6bO5F); $hf9XRbEeY5Kx6GFPKr[] = array ( 'folder' => str_replace('/',' ',$sk), 'cnt' => $sn['cnt'], 'cntmulti' => $sn['cnt']>1, 'level' => $VJrkoghoW, 'alevel' => $VJrkoghoW ? range(1,$VJrkoghoW) : array(), 'level100' => 100-$VJrkoghoW, 'pages' => $sr6xk3MKAMAoDi ); $VH_xpFhmDF6bO5F='';     $sr6xk3MKAMAoDi=array(); lPT6M7drPhQPL($oApTmRC5HPu, $hf9XRbEeY5Kx6GFPKr); $DGsLKvCm27eV++; $oApTmRC5HPu='';$hf9XRbEeY5Kx6GFPKr=array(); pUvA4zhAkYZK2Nd8A($qZBDe0ba3gtSA0a,RT9GXtyabs__A(array('istart'=>$chfKQ2jb8QOC,'curpage'=>$DGsLKvCm27eV))); } } } if($VH_xpFhmDF6bO5F) { $oApTmRC5HPu.=iRDSo8Ka5xIhzQ($sk,$sn['cnt'],$VJrkoghoW,$VH_xpFhmDF6bO5F); $hf9XRbEeY5Kx6GFPKr[]=array( 'folder'=>str_replace('/',' ',$sk), 'cnt'=>$sn['cnt'], 'cntmulti'=>$sn['cnt']>1, 'level'=>$VJrkoghoW, 'alevel'=>$VJrkoghoW?range(1,$VJrkoghoW):array(), 'level100'=>100-$VJrkoghoW, 'pages'=>$sr6xk3MKAMAoDi); } if($sn['elem']) Zq0MnQmsD6T2lLLfU($sn['elem'],$VJrkoghoW+1,$chfKQ2jb8QOC); } if($VJrkoghoW == 0 && $oApTmRC5HPu) lPT6M7drPhQPL($oApTmRC5HPu, $hf9XRbEeY5Kx6GFPKr); } $chfKQ2jb8QOC=0; Zq0MnQmsD6T2lLLfU($aSzeQB2V8mI9JsaPdj['elem'],0,$chfKQ2jb8QOC); include dlUE6X_RWe.'class.templates.inc.php'; AdSeH3KPw4(array('cmd'=> 'info','id' => 'percprog2','')); function lPT6M7drPhQPL($ht, $hv) { global $grab_parameters, $Xm5TKOzcDly01EH2, $urls_completed, $DGsLKvCm27eV, $G0Qn3BFpb4, $cQoR0fgPz1Mn; $QIOl3WsIB_0Qmtft = new gYT2DH5A_("pages/mods/"); $QIOl3WsIB_0Qmtft->WOhaMyP5Ou1gzA6c('sitemap_tpl2.html', 'sitemap_tpl.html'); $o2FapLT5lEQ8T7IY = $grab_parameters['xs_htmlname']; $aWQSGn6KWTk7x4HBX3 = basename($grab_parameters['xs_htmlname']); $mUFi_j4mv4J = ''; $eA1uPQAzcVCQ8=array(); if($G0Qn3BFpb4>1) { for($i1=0;$i1<$G0Qn3BFpb4;$i1++) { $wUBAvDKke4zaEU = Hl4O6cWdjqldW6($i1+1,$aWQSGn6KWTk7x4HBX3,true); $mUFi_j4mv4J .= ($i1==$DGsLKvCm27eV)?' ['.($i1+1).']': ' <a href="'.$wUBAvDKke4zaEU.'">'.($i1+1).'</a>'; $eA1uPQAzcVCQ8[]=array('current'=>($i1==$DGsLKvCm27eV),'link'=>$wUBAvDKke4zaEU,'num'=>$i1+1); } $mUFi_j4mv4J = '<span class="pager">'.$mUFi_j4mv4J.'</span>'; } $PaHAdHXyU_QJd4 = "<table cellpadding=\"0\" border=\"0\">\n".$ht."\n</table>\n"; $QIOl3WsIB_0Qmtft->CIob_g5skJ('slots',$hv); $QIOl3WsIB_0Qmtft->CIob_g5skJ('LASTUPDATE',date($grab_parameters['xs_dateformat']?$grab_parameters['xs_dateformat']:'Y, F j')); $QIOl3WsIB_0Qmtft->CIob_g5skJ('NOBRAND',$grab_parameters['xs_nobrand']?1:0); $QIOl3WsIB_0Qmtft->CIob_g5skJ('TOPURL',$Xm5TKOzcDly01EH2); $QIOl3WsIB_0Qmtft->CIob_g5skJ('PAGE',$G0Qn3BFpb4?' Page '.($DGsLKvCm27eV+1):''); $QIOl3WsIB_0Qmtft->CIob_g5skJ('PAGES',$mUFi_j4mv4J); $QIOl3WsIB_0Qmtft->CIob_g5skJ('APAGER',$eA1uPQAzcVCQ8); $QIOl3WsIB_0Qmtft->CIob_g5skJ('TOTALURLS',count($urls_completed)); $YC3JfNZl8Dgi = $QIOl3WsIB_0Qmtft->parse(); $YC3JfNZl8Dgi = preg_replace( array('#%SITEMAP%#', '#%LASTUPDATE%#', '#%TOPURL%#', '#%PAGE%#', '#%PAGER%#', '#%TOTALURLS%#'), array($PaHAdHXyU_QJd4, date('Y, F j'), $Xm5TKOzcDly01EH2, $G0Qn3BFpb4?' Page '.($DGsLKvCm27eV+1):'', $mUFi_j4mv4J, count($urls_completed)), $YC3JfNZl8Dgi); $wUBAvDKke4zaEU = $G0Qn3BFpb4>1 ? Hl4O6cWdjqldW6($DGsLKvCm27eV+1, $o2FapLT5lEQ8T7IY, true) : $o2FapLT5lEQ8T7IY; $pf = PvFdgEcx0laOpBsp($wUBAvDKke4zaEU, 'w'); if(!$pf) $cQoR0fgPz1Mn[] = $wUBAvDKke4zaEU; fwrite($pf, $YC3JfNZl8Dgi); fclose($pf); } 



































































































