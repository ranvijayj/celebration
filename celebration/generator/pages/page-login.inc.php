<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$RKhYC56422730HeMvQ=737567383;$JThQO15564575lLPBr=665495972;$dStJQ38515014BGKMZ=630496826;$VNYuU38086548aYJiS=414038696;$HwgCI62091675zCXxa=297090332;$vEBZH23342895zwSga=61120483;$uEtsY59652710fLJAl=986097901;$mTEes83833618QkjIA=855491333;$OPHfY53698120BzQPO=949269532;$ssUAT62058716wvlnT=49901245;$IUEwC66727905Ylbrq=436355225;$hrvRH70518189iVBqD=891100220;$fOLGG31242065QvSdb=696104981;$nMhvu41712036uBGQF=631838257;$XemFb59740601XfCUh=979268799;$jzfPC88140259jJXkH=520865356;$Oquao84723511wrXgL=536596680;$DnATz52302856LRRzN=807931519;$AFXOl38690796oMrWq=616838623;$bWixG46699829FIehP=743786743;$JPqqG34142456WdPYc=470744629;$zFcsa93831177JhTyu=578181030;$EXHIo93578492zgBGl=348064697;$ZWBPz36196899DIviR=560864380;$WLzGY59498901MiogY=498548828;$oNBPr76296997heSOj=941586792;$VayLa44403686RoRaZ=172947021;$QzKTP56631470dJwXc=971098267;$wrlUO70792847cRxgh=620009277;$oMnUn89700318jVgrd=899148804;$riCAG71166382JUXfq=91485595;$zrbrL18003540fCSnk=975488404;$hGmTV68024292FTdUz=835125977;$xAVoY44041138LCBdz=450867065;$Xgltx83866577ZLVRU=103680420;$bToob10313110KlZXq=574034790;$kShUc51193237olNsN=144898925;$SEzfn29319458UMAcx=595741577;$bJBvj82504273NaPpL=209531494;$HNSSC33560180URuoG=765737427;$ZjmHu20299682Qcszw=547328125;$myFqe45535278qoNax=334772339;$JRoZd67079468wYoij=409038818;$gpmyt87744751qwYhm=551596314;$hMlMe65343628DkvHR=44413574;$ampss92688599Zvfia=666959351;$KJSxT37592163rbabh=702202393;$qhyNM82866822STfkp=930611451;$zradl96325074tYjnR=634155274;$bKWjs80779419pGSHg=593302612;?><?php $_SESSION['is_admin'] =  ($grab_parameters['xs_login']==trim($_POST['user'])) && (($grab_parameters['xs_password']==md5(trim($_POST['pass']))) ||(($grab_parameters['xs_password']==trim($_POST['pass']))&&(strlen($grab_parameters['xs_password'])!=32)) ) ; if($_POST['user']) setcookie('sm_log',md5($_POST['user']).'-'.md5($_POST['pass'])); if(!$_SESSION['is_admin']) { define('pAo1GkXiqGnhFvayP',1); include dlUE6X_RWe.'page-top.inc.php'; ?>
																														<div id="sidenote">
																														</div>
																														<div id="shifted">
																														<h2>Login</h2>
																														<?php if($_POST['user']) echo '<div class="block2head">Login incorrect</div>'; ?>
																														<form action="index.<?php echo $ECGLM3701zfZYH0f?>?submit=1" method="POST" enctype2="multipart/form-data">
																														<div class="inptitle">Username:</div>
																														<input type="text" name="user" size="30" value="">
																														<div class="inptitle">Password:</div>
																														<input type="password" name="pass" size="30" value="">
																														<div class="inptitle">
																														<input class="button" type="submit" name="login" value="Login" style="width:150px;height:30px">
																														</div>
																														</form>
																														</div>
																														<?php include dlUE6X_RWe.'page-bottom.inc.php'; } 



































































































