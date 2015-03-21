<?php

/**

 * @package		Joomla.Site

 * @subpackage	mod_search

 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;

?><div class="credential">

<form id="find_form" method="post" >





<div class="find">Find</div>

<div class="findInput"><input id="find" type="text" onfocus="if(this.value=='Enter Keyword'){this.value=''}" onblur="if(this.value==''){this.value='Enter Keyword'}"  name="find" class="findinpt_length" style="width:194px"></div>

<div class="In">In</div>

<div class="InInput"><input id="in" type="text" onfocus="if(this.value=='City'){this.value=''}" onblur="if(this.value==''){this.value='City'}" onfocus="if(this.value=='City'){this.value=''}" name="in" class="findinpt_length" style="width:194px"></div>

<div class="sBtn"id="btnFind"><img src="images/sBtn.png" width="63" height="29" /></div>







<div class="flexi"></div></form>

</div>

<!-- find script -->

  <script type="text/javascript">

       $(document).ready(function() {

    function redirect() {

	

      var find = $('#find').val();

      var inn = $('#in').val();


  var loc = 'http://www.getit.in/' + inn+ "/" + find ;

                        if(find==""){

                            alert('Please enter correct keyword.');

                            $('#in').val()=inn;

                            return false;

                        }else if(inn==""){

                            alert('Please enter correct location.');

                            $('#find').val()=find;

                            return false;

                        }

                        window.open(loc);

    }

    $("#btnFind").click(function() {// alert('u clicked!!!'); 

                        redirect();

                });

    });

  </script>

  