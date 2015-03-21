<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php
JHTML::stylesheet('default.css', 'components/com_odudecard/include/');
require_once ( JPATH_BASE .DS.'components'.DS.'com_odudecard'.DS.'include'.DS.'lib.php' );
$setting=getSetting();
$mymenuitem = JRequest::getVar('Itemid', 0, 'request', 'int');
?>
<style>
table.fancy {
  margin: 1em 1em 1em 0;
  background: #F5F5F5;
  border-collapse: collapse;
}
table.fancy tr:hover {
   background: #DDEEFF !important;
}
table.fancy th, table.fancy td {
  border: 1px silver solid;
  padding: 0.2em;
}
table.fancy th {
  background: gainsboro;
  text-align: left;
}
table.fancy caption {
  margin-left: inherit;
  margin-right: inherit;
}
.box {

	border: 1px solid <?php echo $this->a2 ?>;
	width:100%; float:none;
}

</style>
<?php


                          

  		$id = JRequest::getVar('id', 0, 'request', 'int');
		$SN=JRequest::getVar('SN', 0, 'request');
		$SE=JRequest::getVar('SE', 0, 'request');
		$body=JRequest::getVar('body', 0, 'request');
		$sub=JRequest::getVar('title', 0, 'request');
		//	$body=cleanuserinput(JRequest::getVar('body', 0, 'request'));
		//$sub=cleanuserinput(JRequest::getVar('title', 0, 'request'));
		$name = JRequest::getVar('name', 0, 'request');
		
		$email = JRequest::getVar('email', 0, 'request');
		$cate=JRequest::getVar('cate', 0, 'request');
		$clock = JRequest::getVar('date1', 0, 'request');
		$send = JRequest::getVar('send', 0, 'request');
		$notify = JRequest::getVar('notify', 0, 'request');
		$point = JRequest::getVar('point', 0, 'request');

		$recipients= JRequest::getVar('recipients', '', 'post', 'string', JREQUEST_ALLOWRAW);
		if($notify!='Y')
		$notify='N';


		$tab="";

				$model =& $this->getModel();
     	         $ecardS = $model->getSetting();


			$x=0;
			if(!preg_match('/([a-zA-z0-9\.\-]+)@([a-zA-Z0-9\.\-]+)\.([a-zA-Z]{2,3})/',$SE))
			{
				echo JText::_('COM_ODUDECARD_ECARD_SENDER_EMAIL_ERROR').": $SE<br>";
				$x++;
			}
			if($SN==null || $SN=="")
			{
				echo JText::_('COM_ODUDECARD_ECARD_SENDER_BLANK')."<br>";
				$x++;
			}
			if($x==0)
			{
 

  
                    echo "<center><h1>".JText::_('COM_ODUDECARD_ECARD_SENT')."</h1> <strong>".JText::_('COM_ODUDECARD_ECARD_CHECK_STATUS')."</strong><br><table border=0 width=99% class=fancy>";
					echo "<tr align=left><th>".JText::_('COM_ODUDECARD_ECARD_SNO')."</th><th>".JText::_('COM_ODUDECARD_ECARD_REC')."</th><th>".JText::_('COM_ODUDECARD_ECARD_REC_EMAIL')."</th><th>".JText::_('COM_ODUDECARD_ECARD_STATUS')."</thd></tr>";

                    for ($i=0; $i<count($name); $i++)
					{

                 
                    	$status="";

						if(!preg_match('/([a-zA-z0-9\.\-]+)@([a-zA-Z0-9\.\-]+)\.([a-zA-Z]{2,3})/',$email[$i]))
						$status="<b><font color=red>X</font></b>";
						else
						$status="<b>O</b>";


                        if(!preg_match('/([a-zA-z0-9\.\-]+)@([a-zA-Z0-9\.\-]+)\.([a-zA-Z]{2,3})/',$email[$i]))
						$st="<img src=\"".JURI::base()."components/com_odudecard/include/cross.png\">";
						else
            $st="<img src=\"".JURI::base()."components/com_odudecard/include/tick.png\">";

						$a=$i+1;

						if($email==null)
						{
						echo "<tr><td color=#FFFFCC size=2 align=left><b>".$a."</b></td><td align=left>".$name[$i]."&nbsp;</td><td align=left>".$email[$i]."&nbsp;</td><td><b><font color=red>X</font></b></td></tr>";
						}
						else
						{


						echo "<tr><td color=#FFFFCC size=2 align=left width=5%><b>".$a."</b></td><td align=left>".$name[$i]."&nbsp;</td><td align=left>".$email[$i]."&nbsp;</td><td align=center> &nbsp;";



                        echo "$st</td></tr>";

                       //  echo "<h1>Checking Status</h1>";
                        

                           
                            	$clock1=JFactory::getDate()->toFormat('%Y-%m-%d');
								$xid=time()+$a;
								$db =& JFactory::getDBO();
								//$query =  "insert into #__ecard_view values('$xid','$SN','$SE','".cleanuserinput($name[$i])."','$email[$i]','$clock1','$sub','$body','$notify','Y','$id')";
								$query =  "insert into #__ecard_view values('$xid','$SN','$SE','".$name[$i]."','$email[$i]','$clock1','$sub','$body','$notify','Y','$id')";
								$db->setQuery($query);
								$result = $db->query();

								$from = $ecardS['from_email'];
								$fromname = $SN;
								$recipient = $email[$i];
								$subject = $ecardS['subject_suffix'];
								$replyto = $SE;
								$replytoname = $SN;


								$u =& JURI::getInstance();
								$linc=$u->getScheme()."://".$u->getHost().JRoute::_("index.php?option=com_odudecard&amp;xid=$xid&amp;controller=odudecardpick&amp;notify=$notify&amp;cate=$cate&amp;Itemid=$mymenuitem");
								$body1 = JText::_('COM_ODUDECARD_ECARD_HELLO')." $name[$i],<br><br>".JText::_('COM_ODUDECARD_ECARD_I_HAVE')."<br>".JText::_('COM_ODUDECARD_ECARD_PICK')."<br><br><a href=".$linc.">".$linc."</a><br><br>".JText::_('COM_ODUDECARD_ECARD_THANK')."<br>$SN";
                
               $mode = 1;
						//	echo "<b>$body1 </b>";
							//	echo $linc."<hr>";

								//JUtility::sendMail($from, $fromname, $recipient, $subject, $body1, $mode,'','','',$replyto, $replytoname);
           
           $mailer =& JFactory::getMailer();
           $config =& JFactory::getConfig();
           $sender = array($from,$fromname);
           $mailer->setSender($sender);
           $mailer->addRecipient($recipient);
           $mailer->setSubject($subject);
           $mailer->setBody($body1);
           $mailer->isHTML(true);
           
           try
           {
           $send =& $mailer->Send();
           }
           catch (Exception $e)
           {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
           }
                
                
                
                            	

							

						}
					}



					echo "</table></center><br><img src=\"components/com_odudecard/include/tick.png\"> = ".JText::_('COM_ODUDECARD_ECARD_OK_MSG')."<br><img src=\"components/com_odudecard/include/cross.png\"> = ".JText::_('COM_ODUDECARD_ECARD_X')."<br><br><br><br><a href=".JRoute::_("index.php?option=com_odudecard&Itemid=$mymenuitem")." class=\"css_button_example\" style=\"clear:none;\"><strong>".JText::_('COM_ODUDECARD_ECARD_NEW')."</strong></a>";


			}
			else
			{
				echo "<br>".JText::_('COM_ODUDECARD_ECARD_CANNOT')." <a href=javascript:history.back() class=\"css_button_example\" style=\"clear:none;\" >".JText::_('COM_ODUDECARD_ECARD_BACK')."</a>";


			}

echo $tab;
?>