<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$EfHis23298950TKjcd=64535034;$JOlWD57499390VVXTJ=154410888;$MVaqE68320923NZESs=62827758;$vyIVl13576049Yddkn=70754394;$JHBwV76077271jEXjt=958659546;$eXLYc33637085GscBR=10511962;$eeGbH69067993UMEAS=4780395;$AhUDO50182495Lgvqf=223433593;$ieyQh69793091xnJVS=447940308;$tnOFk85712281YaIOZ=959269288;$fwpnP10752563HlHKd=539889282;$MHrFs72726441HDgiR=469769043;$GljRf94446412MnSnE=530377319;$Dzyrh33724975xBTKU=3682861;$FSEts73374634aQlvH=669154419;$STMZk81207886GNSUd=809760742;$Upsjr60037232rTuSk=206970581;$gIqbQ57675171iihuZ=140752685;$QmZgK76934204cCANo=392575806;$cGzes75626831HLybW=244408691;$PqcmE56565552UGIrZ=476720093;$njzCN67562866ZVIAR=371478760;$vMptF21431274VcJaE=709153443;$LfjfO55983276KeyYk=771712891;$NPbsJ84031372Urzum=340625854;$zpknO63388062RfJBJ=695861084;$RsbmY86865845VqSYX=619887329;$KoROk22277221INDuz=393673340;$nlbGO52434692ynswr=797687867;$MnWuR45150757kgRzz=114899658;$VWLnu93237915cLiPk=124777465;$bzayM64508667EmjNM=109290039;$pEvDf51775513rBQGU=848906128;$sydZL12850952ASyim=626594483;$QECez40547485snPYQ=222823852;$XVUIN92677613cYxot=917562989;$uHzvI82053833mWCzi=494280640;$xtRLe56488647bqzhr=232945556;$dvtks18794555JsvzH=914026490;$rSagp16784057jdhLI=820492188;$fDgOK53269653zpQDU=732811402;$ocgIY86063843wHaKy=931952881;$sijMw27979126UfcNM=200385376;$BrRwY16828003eYATP=817077637;$OLomQ55422974JBayt=565498413;$OrnOx11576538RyeWU=725616455;$RKaav68101196NzYvp=79900512;$EOjSj92809449DQoDp=907319336;$hvwXw88513794RFxkW=991341675;$ZtuFx13026733rebPY=612936279;?><?php class SiteCrawler { function nue1JSywc(&$a, $DOgZUqwUCl, $SQEm27RfvIaD6r, $I71RznY8Z2MK4au, $e1WQ3uEw36W8, $QFUVsYC4MD0X8x = '') { global $grab_parameters; $iFfOUCk1sFztqp = parse_url($e1WQ3uEw36W8); if($iFfOUCk1sFztqp['scheme'] && ($iFfOUCk1sFztqp['scheme']!='http')&& ($iFfOUCk1sFztqp['scheme']!='https')) { $UDWzqkbDps6LuIKb = 1; }else { if($iFfOUCk1sFztqp['scheme'] && substr($a, 0, 2) == '//') 
																												 $a = $iFfOUCk1sFztqp['scheme'].':'.$a; $a = str_replace(':80/', '/', $a); if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$DOgZUqwUCl).$a; if($grab_parameters['xs_inc_ajax'] && ($a[0] == '#')){ $I71RznY8Z2MK4au = preg_replace('#\#.*$#', '', $I71RznY8Z2MK4au); $a = $I71RznY8Z2MK4au . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $DOgZUqwUCl).$a; } if(preg_match('#^https?(:|&\#58;)#is',$a)){ if(preg_match('#://[^/]*$#is',$a)) 
																												 $a .= '/'; } else if($a&&$a[0]=='/')$a = $SQEm27RfvIaD6r.$a; else $a = $I71RznY8Z2MK4au.$a; $a=str_replace('/./','/',$a); if(substr($a,-2) == '..')$a.='/'; if(strstr($a,'../')){ preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa); 
																												 do{ $ap = $aa[2]; $aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1); }while($aa[2]!=$ap); $a = $aa[1].$aa[2]; } $a = preg_replace('#/\./#','/',$a); $a = str_replace('&#38;','&',$a); $a = str_replace('&#038;','&',$a); $a = str_replace('&amp;','&',$a); $a = preg_replace('#\#'.($grab_parameters['xs_inc_ajax']?'[^\!]':'').'.*$#','',$a); $a = preg_replace('#^([^\?]*[^/\:]/)/+#','\\1',$a); $a = preg_replace('#[\r\n]+#s','',$a); $UDWzqkbDps6LuIKb = (strtolower(substr($a,0,strlen($e1WQ3uEw36W8)) ) != strtolower($e1WQ3uEw36W8)) ? 1 : 0; if($UDWzqkbDps6LuIKb && $QFUVsYC4MD0X8x) { $YyBIyE8gG1eQSuo = preg_replace('#[\r\n]+#is', '|', trim($QFUVsYC4MD0X8x)); if($YyBIyE8gG1eQSuo && preg_match('#('.$YyBIyE8gG1eQSuo.')#', $a)) $UDWzqkbDps6LuIKb = 2; } } D1tXUjHdde7g1("<br/>($a - $UDWzqkbDps6LuIKb - $DOgZUqwUCl - $I71RznY8Z2MK4au - $SQEm27RfvIaD6r)<br>\n",2); return $UDWzqkbDps6LuIKb; } function AUsclCf2r5Z($FHkOOpdqGU9J4Ak,&$urls_completed) { global $grab_parameters,$Kg85Ttrs41sWuz; error_reporting(E_ALL&~E_NOTICE); @set_time_limit($grab_parameters['xs_exec_time']); if($FHkOOpdqGU9J4Ak['bgexec']) { ignore_user_abort(true); } register_shutdown_function('kEM8KMpb9E'); if(function_exists('ini_set')) { @ini_set("zlib.output_compression", 0); @ini_set("output_buffering", 0); } $J8NZ8Rx5Xj8oKk = explode(" ",microtime()); $eZRyAbLmbUJaHYYv = $J8NZ8Rx5Xj8oKk[0]+$J8NZ8Rx5Xj8oKk[1]; $starttime = $f3rjBPjAjA5g2vr3_l = time(); $AfrvOmU2Ccm9JZj = $nettime = 0; $kCPGNzrIjuQgkoxBRP = $FHkOOpdqGU9J4Ak['initurl']; $ByzJ33WTH1 = $FHkOOpdqGU9J4Ak['maxpg']>0 ? $FHkOOpdqGU9J4Ak['maxpg'] : 1E10; $bXB74SJYMX2s6phkekL = $FHkOOpdqGU9J4Ak['maxdepth'] ? $FHkOOpdqGU9J4Ak['maxdepth'] : -1; $tUOd0ODXTNxNVUNnX9o = $FHkOOpdqGU9J4Ak['progress_callback']; $HF6NqOcvPqnbh7 = preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($grab_parameters['xs_excl_urls']),'*')?$s:preg_quote($s,'#'))); $kgQxFsRGfcjLoo9_ = preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($grab_parameters['xs_incl_urls']),'*')?$s:preg_quote($s,'#'))); $NCzIEhBxs5f = $CmZLfMuLMSEZIiTevcX = array(); $vQG590i8y = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']); $AxQrHpWAhbF = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#'; if($grab_parameters['xs_memsave']) { if(!file_exists(yCwTqe5GDcta)) mkdir(yCwTqe5GDcta, 0777); else if($FHkOOpdqGU9J4Ak['resume']=='') zSyg85rKFKJ8zd(yCwTqe5GDcta, '.txt'); } foreach($vQG590i8y as $ia) if($ia) { $is = explode(',', $ia); if($is[0][0]=='$') $S6zsGHiQqbyS93wtuJ = substr($is[0], 1); else $S6zsGHiQqbyS93wtuJ = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#')); $CmZLfMuLMSEZIiTevcX[] = $S6zsGHiQqbyS93wtuJ; $NCzIEhBxs5f[str_replace(array('^','$'),array('',''),$is[0])] =  array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]); } if($CmZLfMuLMSEZIiTevcX) $dREpFQ5xuzJSkbpu7AS = implode('|',$CmZLfMuLMSEZIiTevcX); $EeBf1fWg43a = parse_url($kCPGNzrIjuQgkoxBRP); if(!$EeBf1fWg43a['path']){$kCPGNzrIjuQgkoxBRP.='/';$EeBf1fWg43a = parse_url($kCPGNzrIjuQgkoxBRP);} $UctMc3aHZAuo_n49obA = $Kg85Ttrs41sWuz->fetch($kCPGNzrIjuQgkoxBRP,0,true);// the first request is to skip session id 
																												 $bgOU73TJ7jwvdKa5Vq = !preg_match($AxQrHpWAhbF,$UctMc3aHZAuo_n49obA['code']); if($bgOU73TJ7jwvdKa5Vq) { $bgOU73TJ7jwvdKa5Vq = ''; foreach($UctMc3aHZAuo_n49obA['headers'] as $k=>$v) $bgOU73TJ7jwvdKa5Vq .= $k.': '.$v.'<br />'; return array( 'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$kCPGNzrIjuQgkoxBRP.''. ($UctMc3aHZAuo_n49obA['errormsg']?'<br><b>Error message:</b> '.$UctMc3aHZAuo_n49obA['errormsg']:''). '<br><b>HTTP Code:</b><br>'.$UctMc3aHZAuo_n49obA['protoline']. '<br><b>HTTP headers:</b><br>'.$bgOU73TJ7jwvdKa5Vq. '<br><b>HTTP output:</b><br>'.$UctMc3aHZAuo_n49obA['content'] , ); } $kCPGNzrIjuQgkoxBRP = $UctMc3aHZAuo_n49obA['last_url']; $urls_completed = array(); $urls_ext = array(); $urls_404 = array(); $SQEm27RfvIaD6r = $EeBf1fWg43a['scheme'].'://'.$EeBf1fWg43a['host'].((!$EeBf1fWg43a['port'] || ($EeBf1fWg43a['port']=='80'))?'':(':'.$EeBf1fWg43a['port'])); 
																												 $pn = $tsize = $retrno = 0; $e1WQ3uEw36W8 = Mq7SpvssgXyM($SQEm27RfvIaD6r.'/', xnDpYg7WwA0($EeBf1fWg43a['path'])); $IGMXvCIH5 = preg_replace('#^.+://[^/]+#', '', $e1WQ3uEw36W8); 
																												 $PTs_k_pSWM2EJfY = $Kg85Ttrs41sWuz->fetch($kCPGNzrIjuQgkoxBRP,0,true,true); $NEd4p7VjgbWpEWv8 = str_replace($e1WQ3uEw36W8,'',$kCPGNzrIjuQgkoxBRP); $urls_list_full = array($NEd4p7VjgbWpEWv8=>1); if(!$NEd4p7VjgbWpEWv8)$NEd4p7VjgbWpEWv8=''; $urls_list = array($NEd4p7VjgbWpEWv8=>1); $urls_list2 = $urls_list_skipped = array(); $cLGNu3fjIGa = array(); $links_level = 0; $UjJeTQ6FRwpvLO78QmN = $ref_links = $ref_links2 = array(); $qrvwvVGeoFhqprwrW2 = 0; $LetZQ92FyBq0 = $ByzJ33WTH1; if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20; if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt']) { $iwe5WfZrZZ6OjkL1yFV = $Kg85Ttrs41sWuz->fetch($SQEm27RfvIaD6r.'/robots.txt'); if($SQEm27RfvIaD6r.'/' != $e1WQ3uEw36W8) { $d_ZPoolAGnzklRH = $Kg85Ttrs41sWuz->fetch($e1WQ3uEw36W8.'robots.txt'); $iwe5WfZrZZ6OjkL1yFV['content']  .= "\n".$d_ZPoolAGnzklRH['content']; } $ra=preg_split('#user-agent:\s*#im',$iwe5WfZrZZ6OjkL1yFV['content']); $A1D6v6ZnT2du=array(); for($i=1;$i<count($ra);$i++){ preg_match('#^(\S+)(.*)$#s',$ra[$i],$K4v1BKjLwk2MbkhbF); if($K4v1BKjLwk2MbkhbF[1]=='*'||strstr($K4v1BKjLwk2MbkhbF[1],'google')){ preg_match_all('#^disallow:[^\r\n\S](\S*)#im',$K4v1BKjLwk2MbkhbF[2],$rm); for($pi=0;$pi<count($rm[1]);$pi++) if($rm[1][$pi]) $A1D6v6ZnT2du[] =  str_replace('\\$','$', str_replace('\\*','.*', preg_quote($rm[1][$pi],'#') )); } } for($i=0;$i<count($A1D6v6ZnT2du);$i+=200) $QmKaHsN_mnHEfYSpTEg[]=implode('|', array_slice($A1D6v6ZnT2du, $i,200)); }else $QmKaHsN_mnHEfYSpTEg = array(); if($grab_parameters['xs_inc_ajax']) $grab_parameters['xs_proto_skip'] = str_replace( '\#', '\#[^\!]', $grab_parameters['xs_proto_skip']); $nU8Mj5ZUWIEjvw = $grab_parameters['xs_exc_skip']!='\\.()'; $C8YeeJvXHpz7ff = $grab_parameters['xs_inc_skip']!='\\.()'; $grab_parameters['xs_inc_skip'] .= '$'; $grab_parameters['xs_exc_skip'] .= '$'; if($grab_parameters['xs_debug']) { $_GET['ddbg']=1; G99nA35xjYQh(); } $PfbhgdTernTpzDj = 0; $url_ind = 0; $cnu = 1; $pf = PvFdgEcx0laOpBsp(OWNVYbuUt2KT49cveBR.uCIu22Zx7O4C0vkg_,'w');fclose($pf); $enMwI73r5aUx3amju = false; if($FHkOOpdqGU9J4Ak['resume']!=''){ $QVcuW67y39PsmXB = @PvEr4n2DQ(FRy4YMXr_PT(OWNVYbuUt2KT49cveBR.kxesmZvVXn)); if($QVcuW67y39PsmXB) { $enMwI73r5aUx3amju = true; echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$QVcuW67y39PsmXB['time']).')'."\n"; extract($QVcuW67y39PsmXB); $eZRyAbLmbUJaHYYv-=$ctime; $PfbhgdTernTpzDj = $ctime; unset($QVcuW67y39PsmXB); } } $bgPaFIl40lb3Ty4 = 0; if(!$enMwI73r5aUx3amju){ if($grab_parameters['xs_moreurls']){ $mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']); foreach($mu as $hhpOPvD3FyvIjyMCBEE){ $hhpOPvD3FyvIjyMCBEE = str_replace($e1WQ3uEw36W8, '', $hhpOPvD3FyvIjyMCBEE); if(!strstr($hhpOPvD3FyvIjyMCBEE, '://')) 
																												 $urls_list[$hhpOPvD3FyvIjyMCBEE]++; } } if($grab_parameters['xs_prev_sm_base']){ global $Ut19te9V_i; $o2FapLT5lEQ8T7IY = basename($grab_parameters['xs_smname']); $Ut19te9V_i->wrcGK5HRvX5Hc = ($grab_parameters['xs_compress']==1) ? '.gz' : ''; $K08dPkTModx = $Ut19te9V_i->T9mnmC3k9eENcJDb44Q($o2FapLT5lEQ8T7IY, 0, $e1WQ3uEw36W8); if(!$grab_parameters['xs_prev_sm_base_min'] ||  (count($K08dPkTModx)>$grab_parameters['xs_prev_sm_base_min'])) { $urls_list = array_merge($urls_list, $K08dPkTModx); } unset($K08dPkTModx); } $bgPaFIl40lb3Ty4 = count($urls_list); $urls_list_full = $urls_list; $cnu = count($urls_list); } $RaAoF6Bm0 = explode('|', $grab_parameters['xs_force_inc']); sleep(1); @fTr9xtaaPTXU(OWNVYbuUt2KT49cveBR.uCIu22Zx7O4C0vkg_); if($urls_list) do { list($DOgZUqwUCl, $bwhMehtk1) = each($urls_list); $JxsQWbvuZdjq9Bnq = ($bwhMehtk1>0 && $bwhMehtk1<1) ? $bwhMehtk1 : 0; $url_ind++; D1tXUjHdde7g1("\n[ $url_ind - $DOgZUqwUCl, $bwhMehtk1] \n"); unset($urls_list[$DOgZUqwUCl]); $fqxdyrTNEz = VQAXwSjJPIxpPDQ5i5S($DOgZUqwUCl); $g9O9SeHS367Ji = false; $oFc4jrnPZGNmGhxz = ''; $UctMc3aHZAuo_n49obA = array(); $cn = ''; if(isset($cLGNu3fjIGa[$DOgZUqwUCl])) $DOgZUqwUCl=$cLGNu3fjIGa[$DOgZUqwUCl]; $f = $nU8Mj5ZUWIEjvw && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$DOgZUqwUCl); if($HF6NqOcvPqnbh7&&!$f)$f=$f||preg_match('#('.$HF6NqOcvPqnbh7.')#',$DOgZUqwUCl); if($QmKaHsN_mnHEfYSpTEg&&!$f) foreach($QmKaHsN_mnHEfYSpTEg as $bm) { $f = $f||preg_match('#^('.$bm.')#',$IGMXvCIH5.$DOgZUqwUCl); } $f2 = false; if(!$f) { $f2 = $C8YeeJvXHpz7ff && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$DOgZUqwUCl); if($kgQxFsRGfcjLoo9_&&!$f2) $f2 = $f2||(preg_match('#('.$kgQxFsRGfcjLoo9_.')#',$DOgZUqwUCl)); if($grab_parameters['xs_parse_only'] && !$f2 && $DOgZUqwUCl!='/') { $f2 = $f2 || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_parse_only'],'#')).'#',$DOgZUqwUCl); } } do{ $rgUMQZOC8 = count($urls_list)+count($urls_list2)+count($urls_completed);         $f3 = $RaAoF6Bm0[2] && ( ($LetZQ92FyBq0*$RaAoF6Bm0[2]+1000)< ($lrwvB0xvcXXumi3V-$url_ind-$bgPaFIl40lb3Ty4)); if(!$f && !$f2) { $HxBreJLE_R = ($RaAoF6Bm0[1] &&  ( (($ctime>$RaAoF6Bm0[0]) && ($pn>$ByzJ33WTH1*$RaAoF6Bm0[1])) || $f3));	 $KNwxeaqj_2WsX8w0 = ($RaAoF6Bm0[3] && $ByzJ33WTH1 && (($rgUMQZOC8>$ByzJ33WTH1*$RaAoF6Bm0[3]))); if($RaAoF6Bm0[3] && $ByzJ33WTH1 && (($pn>$ByzJ33WTH1*$RaAoF6Bm0[3]))){ $urls_list=$urls_list2=array(); $cnu=0; } if($bXB74SJYMX2s6phkekL<=0 || $links_level<$bXB74SJYMX2s6phkekL) { $eOThR9i3EU = Mq7SpvssgXyM($e1WQ3uEw36W8,$DOgZUqwUCl); D1tXUjHdde7g1("<h4> { $eOThR9i3EU } </h4>\n"); $JtLwsGHOAgAKL7G=0; $xvFrf391xp7S2I=array_sum(explode(' ', microtime())); do { $UctMc3aHZAuo_n49obA = $Kg85Ttrs41sWuz->fetch($eOThR9i3EU, 0, 0); if(($UctMc3aHZAuo_n49obA['code']==403)||!$UctMc3aHZAuo_n49obA['code']) { $JtLwsGHOAgAKL7G++; sleep($grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1); } else $JtLwsGHOAgAKL7G=5; }while($JtLwsGHOAgAKL7G<3); $yIjmVkxO05cWS5gTB53 = array_sum(explode(' ', microtime()))-$xvFrf391xp7S2I; $nettime+=$yIjmVkxO05cWS5gTB53; D1tXUjHdde7g1("<hr>\n[[[ ".$UctMc3aHZAuo_n49obA['code']." ]]] - ".number_format($yIjmVkxO05cWS5gTB53,2)."s (".number_format($Kg85Ttrs41sWuz->XnUbn0PvStizD,2).' + '.number_format($Kg85Ttrs41sWuz->QcR_wuGxkDyfpHas7TL,2).")\n".var_export($UctMc3aHZAuo_n49obA['headers'],1)); $HcbfVH7j0 = is_array($UctMc3aHZAuo_n49obA['headers']) ? strtolower($UctMc3aHZAuo_n49obA['headers']['content-type']) : ''; $Qv8G6NWw9S0ZcPxVV = strstr($HcbfVH7j0,'text/html') || strstr($HcbfVH7j0,'/xhtml') || !$HcbfVH7j0; if($HcbfVH7j0 && !$Qv8G6NWw9S0ZcPxVV && (!$grab_parameters['xs_parse_swf'] || !strstr($HcbfVH7j0, 'shockwave-flash')) ){ if(!$HxBreJLE_R){ $oFc4jrnPZGNmGhxz = $HcbfVH7j0; continue; } } $UCLXWT4Aa = array(); if($UctMc3aHZAuo_n49obA['code']==404){ if($links_level>0) if(!$grab_parameters['xs_chlog_list_max'] || count($urls_404) < $grab_parameters['xs_chlog_list_max']) { $urls_404[]=array($DOgZUqwUCl,$ref_links2[$DOgZUqwUCl]); } } if($grab_parameters['xs_canonical']) if(($eOThR9i3EU == $UctMc3aHZAuo_n49obA['last_url']) && preg_match('#<link[^>]*rel="canonical"[^>]href="([^>]*?)"#', $cn, $WFYPUhXuj)) $UctMc3aHZAuo_n49obA['last_url'] = $WFYPUhXuj[1]; $mWZ5i5d3fAL = preg_replace('#^.*?'.preg_quote($e1WQ3uEw36W8,'#').'#','',$UctMc3aHZAuo_n49obA['last_url']); if(($eOThR9i3EU != $UctMc3aHZAuo_n49obA['last_url']) && ($eOThR9i3EU != $UctMc3aHZAuo_n49obA['last_url'].'/')) { $cLGNu3fjIGa[$DOgZUqwUCl]=$UctMc3aHZAuo_n49obA['last_url']; $io=$DOgZUqwUCl; if(!$urls_list_full[$mWZ5i5d3fAL]) { $urls_list2[$mWZ5i5d3fAL]++; if(count($ref_links[$mWZ5i5d3fAL])<max(1,intval($grab_parameters['xs_maxref']))) $ref_links[$mWZ5i5d3fAL][] = $DOgZUqwUCl; } $oFc4jrnPZGNmGhxz = 'lu'; if(!$HxBreJLE_R)continue; } if($AxQrHpWAhbF && !preg_match($AxQrHpWAhbF,$UctMc3aHZAuo_n49obA['code'])){ $oFc4jrnPZGNmGhxz = $UctMc3aHZAuo_n49obA['code']; continue; } $cn = $UctMc3aHZAuo_n49obA['content']; $tsize+=strlen($cn); $retrno++; if($GemKMfObNXtkeAmJ = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn)) $cn = $GemKMfObNXtkeAmJ; preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm); if(isset($bm[1])&&$bm[1]) $I71RznY8Z2MK4au = xnDpYg7WwA0($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-')); 
																												 else $I71RznY8Z2MK4au = xnDpYg7WwA0($e1WQ3uEw36W8.$DOgZUqwUCl); if($HxBreJLE_R||$KNwxeaqj_2WsX8w0) { $Qv8G6NWw9S0ZcPxVV = false; } if(strstr($HcbfVH7j0, 'shockwave-flash') && $grab_parameters['xs_parse_swf']) { include_once dlUE6X_RWe.'class.pfile.inc.php'; $am = new SWFParser(); $am->fweJBhwTM1h($cn); $JcUJ6noUPUWESUgG = $am->h8i3gNivayoQQtqpLY(); }else if($Qv8G6NWw9S0ZcPxVV) { $YGXNP4q99 = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; preg_match_all('#<(?:a|area|go)\s(?:[^>]*?\s)?href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+)).*?>#is'.$YGXNP4q99, $cn, $am);
																												
																												
																												preg_match_all('#<i?frame\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $PGvQRa41twTzn3);
																												
																												preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$YGXNP4q99, $cn, $a1WM9_ZFATayi);
																												
																												if($grab_parameters['xs_parse_swf'])
																												
																												preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$YGXNP4q99, $cn, $JcUJ6noUPUWESUgG);
																												
																												else $JcUJ6noUPUWESUgG = array(array(),array());
																												
																												
																												$UCLXWT4Aa = array();
																												
																												for($i=0;$i<count($am[1]);$i++)
																												
																												{
																												
																												if( !preg_match('#rel=["\']nofollow#i', $am[0][$i]) ) 
																												
																												$UCLXWT4Aa[] = $am[1][$i];
																												
																												}
																												
																												$UCLXWT4Aa = @array_merge(
																												
																												$UCLXWT4Aa,
																												
																												
																												$am[2],$am[3],  
																												
																												$PGvQRa41twTzn3[1],$a1WM9_ZFATayi[1],
																												
																												$JcUJ6noUPUWESUgG[1]);
																												
																												}
																												
																												$UCLXWT4Aa = array_unique($UCLXWT4Aa);
																												
																												
																												
																												$nn = $nt = 0;
																												
																												reset($UCLXWT4Aa);
																												
																												if(preg_match('#<meta name="robots" content="[^"]*?nofollow#is',$cn))
																												
																												$UCLXWT4Aa = array();
																												
																												foreach($UCLXWT4Aa as $i=>$ll)
																												
																												if($ll)
																												
																												{                    
																												
																												$a = $sa = trim($ll);
																												
																												
																												if($grab_parameters['xs_proto_skip'] && 
																												
																												(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																												
																												($nU8Mj5ZUWIEjvw && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																												
																												preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																												
																												))
																												
																												continue;
																												
																												
																												if(strlen($a) > 2048) continue;
																												
																												$UDWzqkbDps6LuIKb = $this->nue1JSywc($a, $DOgZUqwUCl, $SQEm27RfvIaD6r, $I71RznY8Z2MK4au, $e1WQ3uEw36W8);
																												
																												if($UDWzqkbDps6LuIKb == 1)
																												
																												{
																												
																												if($grab_parameters['xs_extlinks'] &&
																												
																												(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																												
																												)
																												
																												{
																												
																												if(!$urls_ext[$a] && 
																												
																												(!$grab_parameters['xs_ext_skip'] || 
																												
																												!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																												
																												)
																												
																												)
																												
																												$urls_ext[$a] = $eOThR9i3EU;
																												
																												}
																												
																												continue;
																												
																												}
																												
																												$mWZ5i5d3fAL = $UDWzqkbDps6LuIKb ? $a : substr($a,strlen($e1WQ3uEw36W8));
																												
																												$mWZ5i5d3fAL = str_replace(' ', '%20', $mWZ5i5d3fAL);
																												
																												if($grab_parameters['xs_cleanurls'])
																												
																												$mWZ5i5d3fAL = @preg_replace($grab_parameters['xs_cleanurls'],'',$mWZ5i5d3fAL);
																												
																												if($grab_parameters['xs_cleanpar'])
																												
																												{
																												
																												do {
																												
																												$AbiyTr9Cb6H08SemlUw = $mWZ5i5d3fAL;
																												
																												$mWZ5i5d3fAL = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+$#i','',$mWZ5i5d3fAL);
																												
																												$mWZ5i5d3fAL = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+&#i','$1',$mWZ5i5d3fAL);
																												
																												}while($mWZ5i5d3fAL != $AbiyTr9Cb6H08SemlUw);
																												
																												}
																												
																												if($urls_list_full[$mWZ5i5d3fAL] || ($mWZ5i5d3fAL == $DOgZUqwUCl))
																												
																												continue;
																												
																												if($grab_parameters['xs_exclude_check'])
																												
																												{
																												
																												$_f=$_f2=false;
																												
																												$_f=$HF6NqOcvPqnbh7&&preg_match('#('.$HF6NqOcvPqnbh7.')#',$mWZ5i5d3fAL);
																												
																												if($QmKaHsN_mnHEfYSpTEg&&!$_f)
																												
																												foreach($QmKaHsN_mnHEfYSpTEg as $bm)
																												
																												$_f = $_f||preg_match('#^('.$bm.')#',$IGMXvCIH5.$mWZ5i5d3fAL);
																												
																												
																												
																												if($_f)continue;
																												
																												}
																												
																												D1tXUjHdde7g1("<u>[$mWZ5i5d3fAL]</u><br>\n",3);//exit;
																												
																												$urls_list2[$mWZ5i5d3fAL]++;
																												
																												if($grab_parameters['xs_maxref'] && count($ref_links[$mWZ5i5d3fAL])<$grab_parameters['xs_maxref'])
																												
																												$ref_links[$mWZ5i5d3fAL][] = $DOgZUqwUCl;
																												
																												$nt++;
																												
																												}
																												
																												unset($UCLXWT4Aa);
																												
																												}
																												
																												}
																												
																												
																												
																												if($grab_parameters['xs_incl_only'] && !$f)
																												
																												$f = $f || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_incl_only'],'#')).'#',$e1WQ3uEw36W8.$DOgZUqwUCl);
																												
																												if(!$f) {
																												
																												$f = $f||preg_match('#<meta name="robots" content="[^"]*?noindex#is',$cn);
																												
																												if($f)$oFc4jrnPZGNmGhxz = 'mrob';
																												
																												}
																												
																												if(!$f)
																												
																												{
																												
																												$G5grTsNsr0Tw = array(
																												
																												
																												'link'=>preg_replace('#//+$#','/', preg_replace('#^([^/\:\?]/)/+#','\\1',$e1WQ3uEw36W8.$DOgZUqwUCl))
																												
																												);
																												
																												if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo'])
																												
																												{
																												
																												preg_match('#<title>([^<]*?)</title>#is', $UctMc3aHZAuo_n49obA['content'], $UKtncM2wyxnKIuvU);
																												
																												$G5grTsNsr0Tw['t'] = strip_tags($UKtncM2wyxnKIuvU[1]);
																												
																												}
																												
																												if($grab_parameters['xs_metadesc'])
																												
																												{
																												
																												preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $F9VsKsac910);
																												
																												if($F9VsKsac910[1])
																												
																												$G5grTsNsr0Tw['d'] = $F9VsKsac910[1];
																												
																												}
																												
																												if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																												
																												$G5grTsNsr0Tw['o'] = max(0,$links_level);
																												
																												if($JxsQWbvuZdjq9Bnq)
																												
																												$G5grTsNsr0Tw['p'] = $JxsQWbvuZdjq9Bnq;
																												
																												if(preg_match('#('.$dREpFQ5xuzJSkbpu7AS.')#',$e1WQ3uEw36W8.$DOgZUqwUCl,$UIcNE7i_HnCy))
																												
																												{
																												
																												$G5grTsNsr0Tw['clm'] = $NCzIEhBxs5f[$UIcNE7i_HnCy[1]]['lm'];
																												
																												$G5grTsNsr0Tw['f'] = $NCzIEhBxs5f[$UIcNE7i_HnCy[1]]['f'];
																												
																												$G5grTsNsr0Tw['p'] = $NCzIEhBxs5f[$UIcNE7i_HnCy[1]]['p'];
																												
																												}
																												
																												
																												
																												
																												
																												if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																												
																												{
																												
																												$UctMc3aHZAuo_n49obA = $Kg85Ttrs41sWuz->fetch($eOThR9i3EU, 0, 1, false, "", array('req'=>'HEAD'));
																												
																												
																												}
																												
																												if(!$G5grTsNsr0Tw['lm'] && isset($UctMc3aHZAuo_n49obA['headers']['last-modified']))
																												
																												$G5grTsNsr0Tw['lm']=$UctMc3aHZAuo_n49obA['headers']['last-modified'];
																												
																												D1tXUjHdde7g1("\n((include ".$G5grTsNsr0Tw['link']."))<br />\n");
																												
																												$g9O9SeHS367Ji = true;
																												
																												if($grab_parameters['xs_memsave'])
																												
																												{
																												
																												xn22ZOg5Ng($fqxdyrTNEz, $G5grTsNsr0Tw);
																												
																												$urls_completed[] = $fqxdyrTNEz;
																												
																												}else
																												
																												$urls_completed[] = serialize($G5grTsNsr0Tw);
																												
																												$LetZQ92FyBq0 = $ByzJ33WTH1 - count($urls_completed);
																												
																												}
																												
																												}while(false);// zerowhile
																												
																												if($url_ind>=$cnu)
																												
																												{
																												
																												unset($urls_list);
																												
																												$url_ind = 0;
																												
																												$urls_list = $urls_list2;
																												
																												$urls_list_full = array_merge($urls_list_full,$urls_list);
																												
																												$cnu = count($urls_list);
																												
																												unset($ref_links2);
																												
																												$ref_links2 = $ref_links;
																												
																												unset($ref_links); unset($urls_list2);
																												
																												$ref_links = array();
																												
																												$urls_list2 = array();
																												
																												$links_level++;
																												
																												D1tXUjHdde7g1("\n<br>NEXT LEVEL:$links_level<br />\n");
																												
																												}
																												
																												if(!$g9O9SeHS367Ji){
																												
																												
																												D1tXUjHdde7g1("\n({skipped ".$DOgZUqwUCl."})<br />\n");
																												
																												if(!$grab_parameters['xs_chlog_list_max'] ||
																												
																												count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																												
																												$urls_list_skipped[$DOgZUqwUCl]=$oFc4jrnPZGNmGhxz;
																												
																												}
																												
																												}
																												
																												$pn++;
																												
																												$J8NZ8Rx5Xj8oKk=explode(" ",microtime());
																												
																												$ctime = $J8NZ8Rx5Xj8oKk[0]+$J8NZ8Rx5Xj8oKk[1] - $eZRyAbLmbUJaHYYv;
																												
																												HNUV_wZE_();
																												
																												$pl=min($cnu-$url_ind,$LetZQ92FyBq0);
																												
																												if( ($cnu==$url_ind || $pl==0||$pn==1 || ($pn%$grab_parameters['xs_progupdate'])==0)
																												
																												|| ($ctime - $Toy1DGI3eNLNBNIr > 5)
																												
																												|| count($urls_completed)>=$ByzJ33WTH1)
																												
																												{
																												
																												
																												$Toy1DGI3eNLNBNIr = $OG_mULAWKT_xD4fsdPN;
																												
																												if(strstr($PTs_k_pSWM2EJfY['content'],'header'))break;
																												
																												global $m8;
																												
																												$mu = function_exists('memory_get_usage') ? memory_get_usage() : '-';
																												
																												$AfrvOmU2Ccm9JZj = max($AfrvOmU2Ccm9JZj, $mu);
																												
																												if($mu>$m8+1000000){
																												
																												$m8 = $mu;
																												
																												$cc = ' style="color:red"';
																												
																												}else $cc='';
																												
																												if(intval($mu))
																												
																												$mu = number_format($mu/1024,1).' Kb';
																												
																												D1tXUjHdde7g1("\n(<span".$cc.">memory".($cc?' up':'').": $mu</span>)<br>\n");
																												
																												$Zul57HOZFkqdgOyF8 = (count($urls_completed)>=$ByzJ33WTH1) || ($url_ind>=$cnu);
																												
																												$progpar = array(
																												
																												$ctime, // 0. running time
																												
																												str_replace($kCPGNzrIjuQgkoxBRP, '', $DOgZUqwUCl),  // 1. current URL
																												
																												$pl,                    // 2. urls left
																												
																												$pn,                    // 3. processed urls
																												
																												$tsize,                 // 4. bandwidth usage
																												
																												$links_level,           // 5. depth level
																												
																												$mu,                    // 6. memory usage
																												
																												count($urls_completed), // 7. added in sitemap
																												
																												count($urls_list2),     // 8. in the queue
																												
																												$nettime,	// 9. network time
																												
																												$yIjmVkxO05cWS5gTB53, // 10. last net time
																												
																												);
																												
																												if($FHkOOpdqGU9J4Ak['bgexec'])
																												
																												pUvA4zhAkYZK2Nd8A(av2KTAsuDctU,RT9GXtyabs__A($progpar));
																												
																												if($tUOd0ODXTNxNVUNnX9o && !$f)
																												
																												$tUOd0ODXTNxNVUNnX9o($progpar);
																												
																												
																												}else
																												
																												{
																												
																												$tUOd0ODXTNxNVUNnX9o(array('cmd'=>'ping', 'bg' => $FHkOOpdqGU9J4Ak['bgexec']));
																												
																												}
																												
																												if($grab_parameters['xs_savestate_time']>0 &&
																												
																												( 
																												
																												($ctime-$PfbhgdTernTpzDj>$grab_parameters['xs_savestate_time'])
																												
																												|| $Zul57HOZFkqdgOyF8
																												
																												)
																												
																												)
																												
																												{
																												
																												$PfbhgdTernTpzDj = $ctime;
																												
																												D1tXUjHdde7g1("(saving dump)<br />\n");
																												
																												$QVcuW67y39PsmXB = compact('url_ind',
																												
																												'urls_list','urls_list2','cnu',
																												
																												'ref_links','ref_links2',
																												
																												'urls_list_full','urls_completed',
																												
																												'urls_404',
																												
																												'nt','tsize','pn','links_level','ctime', 'urls_ext',
																												
																												'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																												
																												'imlist', 'progpar'
																												
																												);
																												
																												$QVcuW67y39PsmXB['time']=time();
																												
																												$nN_MyPZ1AC80Xlga=RT9GXtyabs__A($QVcuW67y39PsmXB);
																												
																												pUvA4zhAkYZK2Nd8A(kxesmZvVXn,$nN_MyPZ1AC80Xlga);
																												
																												unset($QVcuW67y39PsmXB);
																												
																												unset($nN_MyPZ1AC80Xlga);
																												
																												}
																												
																												if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																												
																												(($pn%$grab_parameters['xs_delay_req'])==0))
																												
																												{
																												
																												sleep($grab_parameters['xs_delay_ms']);
																												
																												}
																												
																												if($PftdNZ9fEP0Z1yoaR=file_exists($Su4TnWFte=OWNVYbuUt2KT49cveBR.uCIu22Zx7O4C0vkg_)){
																												
																												if(@fTr9xtaaPTXU($Su4TnWFte))
																												
																												break;
																												
																												else
																												
																												$PftdNZ9fEP0Z1yoaR=0;
																												
																												}
																												
																												if($grab_parameters['xs_exec_time'] && 
																												
																												((time()-$f3rjBPjAjA5g2vr3_l) > $grab_parameters['xs_exec_time']) ){
																												
																												$PftdNZ9fEP0Z1yoaR = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$f3rjBPjAjA5g2vr3_l);
																												
																												break;
																												
																												}
																												
																												}while(!$Zul57HOZFkqdgOyF8);
																												
																												D1tXUjHdde7g1("\n\n<br><br>Crawling completed<br>\n");
																												
																												if($_GET['ddbgexit'])exit;
																												
																												return array(
																												
																												'u404'=>$urls_404,
																												
																												'starttime'=>$starttime,
																												
																												'topmu' => $AfrvOmU2Ccm9JZj,
																												
																												'ctime'=>$ctime,
																												
																												'tsize'=>$tsize,
																												
																												'retrno' => $retrno,
																												
																												'nettime' => $nettime,
																												
																												'errmsg'=>'',
																												
																												'initurl'=>$kCPGNzrIjuQgkoxBRP,
																												
																												'initdir'=>$e1WQ3uEw36W8,
																												
																												'ucount'=>count($urls_completed),
																												
																												'crcount'=>$pn,
																												
																												'time'=>time(),
																												
																												'params'=>$FHkOOpdqGU9J4Ak,
																												
																												'interrupt'=>$PftdNZ9fEP0Z1yoaR,
																												
																												'urls_ext'=>$urls_ext,
																												
																												'urls_list_skipped' => $urls_list_skipped,
																												
																												'max_reached' => count($urls_completed)>=$ByzJ33WTH1
																												
																												);
																												
																												}
																												
																												}
																												
																												$zAWJdA8vkogW = new SiteCrawler();
																												
																												function kEM8KMpb9E(){
																												
																												@fTr9xtaaPTXU(OWNVYbuUt2KT49cveBR.Jh02oPSmnHw);
																												
																												if(@file_exists(OWNVYbuUt2KT49cveBR.av2KTAsuDctU))
																												
																												@rename(OWNVYbuUt2KT49cveBR.av2KTAsuDctU,OWNVYbuUt2KT49cveBR.Jh02oPSmnHw);
																												
																												}
																												
																												



































































































