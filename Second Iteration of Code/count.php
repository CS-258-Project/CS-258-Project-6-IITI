<!-- CS258 Project 6- IIT Indore Safety and Security Website base webpage, complete with layout changes and image placeholders.-->
<!-- Author - Mudit Maheshwari-->

<?php
	function hit_count()
	{
		$filename='count.txt';
		$handle=fopen($filename,'r');
		$current=fread($handle,filesize($filename));
		fclose($handle);
		$current_inc=$current+1;
		$handle=fopen($filename,'w');
		fwrite($handle,$current_inc);
		fclose($handle);
		echo "000".$current_inc;
	}	
?>