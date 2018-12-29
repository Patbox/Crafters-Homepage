<?php
/*************************************************
 * Micro News
 *
 * Version: 1.0
 * Date: 2007-07-12
 *
 * Usage:
 *
 ****************************************************/

// This function reads all available news
function getNewsList(){
	
   $fileList = array();
   
	// Open the actual directory
	if ($handle = opendir("news/news")) {
		// Read all file from the actual directory
		while ($file = readdir($handle))  {
		    if (!is_dir($file)) {
		       $fileList[] = $file;
      	}
		}
	}	
	
	rsort($fileList);
	
	return $fileList;
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/news.css"">
</head>
<body>
    <?php
      $list = getNewsList();
      foreach ($list as $value) {
      	$newsData = file("news/news/".$value);
      	$newsTitle  = $newsData[0];
         $submitDate = $newsData[1];	
         unset ($newsData['0']);
         unset ($newsData['1']);
      	
         $newsContent = "";
         foreach ($newsData as $value) {
    	       $newsContent .= $value;
         }
      	
      	echo "<h2 align='left'>$newsTitle</h2>";
      	echo "<p colspan='2'>".$newsContent."</p>";
		echo "<h4 align='right'>$submitDate</h4>";
		echo "<hr>";
      }
    ?>
	 <div id="copyright">Micro News 1.0 (modded)</div>
</body>   
