<script>

function favMomentVal()

{

var x=document.forms["favMoment"]["title"].value;

if (x==null || x=="")

  {

  alert("Title must be filled out");

  return false;

  

  }

var y=document.forms["favMoment"]["file"].value;

if (y==null || y=="")

  {

  alert("Image is required");

  return false;

  }  

  

var ext = y.substring(y.lastIndexOf('.') + 1);

if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")

{

return true;

} 

else

{

alert("Upload Gif ,png or Jpg images only");

return false;

}

  

  

  

var y=document.forms["favMoment"]["text"].value;

if (y==null || y=="")

  {

  alert("Text must be filled out");

  return false;

    }



}



</script>



<?php

$user =& JFactory::getUser($id);

$user_id= $user->id;

if(!empty($_POST['save'])){

$db=JFactory::getDBO();

$text=$_POST['text'];

$intro=strip_tags($text);

$title=strip_tags($_POST['title']);

$aliaas=strtolower($title);

$alias=str_replace(" ","-",$aliaas); 



$date=date("Y-m-d h:i:s", time());



$query="insert into #__k2_items (title,alias,catid,published,introtext,extra_fields,created,created_by,access)values('".$title."','".$alias."','3','1','".$intro."','','".$date."','".$user_id."','1')";



	$query=$db->setQuery($query);

	$result=$db->query();

	

	$id = $db->insertid();

	if($_FILES['file']['tmp_name'])

	{

	$target_path = "media/k2/items";

//$filename=$_FILES['file']['name'];

// $filenm=strstr($filename,'.',true);

$fileName=md5("Image".$id).".jpg";



if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path.DS.'src'.DS.$fileName))

 {

     "The file ".  basename( $_FILES['file']['name']). 

    " has been uploaded. Your moment has been shared successfully";

 $file=$target_path.DS.'src'.DS.$fileName;

if(file_exists($file)):

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_S.jpg');

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_XS.jpg');

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_M.jpg');

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_Generic.jpg');

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_L.jpg');

		JFile::copy($file, JPATH_ROOT.DS.'media'.DS.'k2'.DS.'items'.DS.'cache'.DS.md5("Image".$id).'_XL.jpg');

endif;

/*$target_path = "media/k2/items/cache/";

$fileName=md5($id).'_M'.'.jpg';

$target_path = $target_path . $fileName; 

echo move_uploaded_file($_FILES['file']['tmp_name'], $target_path);*/





} 

else

{

    echo "There was an error uploading the file, please try again!";

}

}

}

?>





<form action="" enctype="multipart/form-data" method="post" name="favMoment" onsubmit="return favMomentVal();">

<div class="share_moment_main">	

<div class="share_moment_title_main">Share Your Moment</div> 

<div class="share_title_first_row_main">

<div class="share_title_first_row">

<div class="share_moment_title">Title</div>

<div class="share_input_box_one"><input type="text" name="title" class="share_input_box"></div>

<div class="clr"></div>

</div>



<div class="share_title_first_row">

<div class="share_moment_title">Upload</div>

<div class="share_input_box_one"><input type="file" id="file" onChange="load_image(this.id,this.value);" name="file" ></div>

<div class="clr"></div>

</div>



<div class="share_title_first_row">

<div class="share_moment_title">Describtion</div>

<div class="share_input_box_one"><textarea class="share_input_box_text_area" name="text"></textarea></div>

<div class="clr"></div>

</div>



<div class="share_title_first_row">

<div class="share_input_box_one"><input type="submit" name="save" value="Submit" class="share_submit_btn">
<input type="reset" name="reset" value="Cancel" class="share_submit_btn"></div>

<div class="clr"></div>

</div>	



 

</div>

	 

</div>

</form>