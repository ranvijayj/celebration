<html>

<head>

<!-- For ease i'm just using a JQuery version hosted by JQuery- you can download any version and link to it locally -->



 <style>

#hd_bg{background:url(images/ht_deal.png) no-repeat; width:300px; height:250px;}

#hd_btn{ padding-top:170px; padding-left:27px; margin:0px;}

</style>

<script>



var refreshId = setInterval(function()

{

     $('#hd_cont').fadeOut("fast").load('http://celebration.getit.in/hot.php').fadeIn("fast");

}, 10000);

</script>

<script type="text/javascript">

function add() {



	var ele = document.getElementById("responsecontainer");

	if(ele.style.display == "block") {

   		ele.style.display = "none";

		  	}

	else {

		ele.style.display = "block";

		

	}

}

</script>

<script type="text/javascript">

function hid() {



	var ele = document.getElementById("responsecontainer");

	if(ele.style.display =="block") {

	

    		ele.style.display = "none";

	

  	}

	else {

		ele.style.display = "block";

	

	}

}

</script>

</head>

<body>

 



<div class="hot_deal">

<div id="hd_cont">

</div>



</div>

</body>

