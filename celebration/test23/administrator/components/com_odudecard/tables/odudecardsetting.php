<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class Tableodudecardsetting extends JTable
{
	var $id = null;

	var $from_email = null;
	var $from_name = null;
	var $subject_suffix = null;
	var $card_row = 0;
	var $card_page = 0;
	
	var $a1='';
	var $a2='';
	var $a3='';
	var $a4='';
	
	
	var $add_rec  = 0;
	var $import = 0;
	var $share = 0;
	var $watermark = 0;
	var $captcha = 0;
	var $member_restrict  = 0;
	var $point = 0;
	var $expire = 0;
	var $fbappid  = null;
	var $fbapikey = null;
	var $fbapisecret = null;
	var $canvas_page  = null;
	var $canvas_cancel_page = null;
	
	
	
	
	function Tableodudecardsetting(& $db) {
		parent::__construct('#__ecard_setting', 'id', $db);
	}
}