<?php
/*************************************************
 * Micro News
 *
 * Version: 1.0
 * Date: 2007-07-12
 *
 *
 ****************************************************/

if (!isset($_POST['submit'])) {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Micro News</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   <script language="javascript" type="text/javascript" src="js/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",

});
</script>
</head>

<body>
  <div id="main">
    <div id="caption">Micro News - Add news</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        News title:<br/>
        <input type="text" name="title" size="40"/><br/><br/>
        Content:<br/>
        <textarea name="newstext" rows="15" cols="67"></textarea><br/>
        <center><input type="submit" name="submit" value="Save" /></center>
     </form> 
     
 	 <div id="source">Micro News 1.0</div>
  </div>
</body>   

<?php } else {
   $newsTitel   = isset($_POST['title']) ? $_POST['title'] : 'Untitled';
   $submitDate  = date('Y-m-d g:i:s A');
   $newsContent = isset($_POST['newstext']) ? $_POST['newstext'] : 'No content';
   
   $filename = date('YmdHis');
   $f = fopen('news/'.$filename.".txt","w+");         
   fwrite($f,$newsTitel."\n");
   fwrite($f,$submitDate."\n");
   fwrite($f,$newsContent."\n");
   fclose($f);

   header('Location:index.php');   
}
?>