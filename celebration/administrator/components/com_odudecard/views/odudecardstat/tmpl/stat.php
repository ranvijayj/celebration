<?php defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">

<div class="col100">
Today's Date : <?php echo JFactory::getDate()->toFormat('%a %d %b %Y - %H:%M');?>

<?php

	function getSetting()
	{
	$query = "select * from #__ecard_setting";

	
	   $ecardS = array();
	   	$db =& JFactory::getDBO();
		$db->setQuery($query);
		$rows = $db -> loadObjectList();

			$ecardS['a1']=$rows[0]->a1;
			$ecardS['a2']=$rows[0]->a2;
			$ecardS['a3']=$rows[0]->a3;
			$ecardS['a4']=$rows[0]->a4;
			$ecardS['card_row']=$rows[0]->card_row;
			$ecardS['card_page']=$rows[0]->card_page;
			$ecardS['from_name']=$rows[0]->from_name;
			$ecardS['from_email']=$rows[0]->from_email;
			$ecardS['subject_suffix']=$rows[0]->subject_suffix;


			return $ecardS;

	}


$db =& JFactory::getDBO();
$query="select count(*) as cnt from #__ecard_view where status='Y'";
$db->setQuery($query);
$rows = $db -> loadObjectList();
			
		$view = $rows[0];
		$cnt=$view->cnt;
		
		echo "<br><br><h1>".$cnt." Greetings card sent.</h1>";
		
	$query="select count(*) as cnt from #__ecard_view where status='N'";
$db->setQuery($query);
$rows = $db -> loadObjectList();

		$view = $rows[0];
		$cnt=$view->cnt;

		echo "<h1>".$cnt." Greetings card wating.</h1>";
		
		$query="select count(*) as cnt from #__ecard_view where status='F' or status='X'";
$db->setQuery($query);
$rows = $db -> loadObjectList();

		$view = $rows[0];
		$cnt=$view->cnt;

		echo "<h1>".$cnt." Facebook Greetings card sent.</h1><br>";


?>

Last 50 card sent.<br />

<hr />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td width="9%">Date</td>
  <td width="10%"><strong>Sender Name</strong></td>
  <td width="18%"><strong>Sender Email</strong></td><td width="22%"><strong>Receiver Name</strong></td><td width="21%"><strong>Receiver Email</strong></td><td width="14%"><strong>Subject</strong></td><td width="6%"><strong>Status</strong></td></tr>

<?php
$ecardS=getSetting();



$db =& JFactory::getDBO();

$query="SELECT #__ecard_view.*,#__ecard_media.cat FROM `#__ecard_view`,#__ecard_media where #__ecard_view.card=#__ecard_media.id order by #__ecard_view.clock desc  limit 0,50";
$db->setQuery($query);
$rows = $db -> loadObjectList();
		for( $i=0; $i<count($rows); $i++ )
		{
			$view = $rows[$i];
		
		$id=$view->id;
		$SN=$view->SN;
		$SE=$view->SE;
		$RN=$view->RN;
		$RE=$view->RE;
		$sub=$view->sub;
		$clock=$view->clock;
		$notify=$view->notify;
		$cat=$view->cat;

		echo "<tr><td>$clock</td><td>$SN</td><td>$SE</td><td>$RN</td><td>$RE</td><td>$sub</td><td><img src=images/tick.png></td></tr>";
	}
?>

</table>




<br />
</div>


<input type="hidden" name="option" value="com_odudecard" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="odudecardedit" />
</form>
