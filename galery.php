 <!------STALE ELEMENTY---------> 
<?php
include('head.php');
?>
<!------STALE ELEMENTY--------->

				<h1>Galeria</h1>
<?php


	$photo_arr = scandir("galery");
	//print_r($photo_arr);
	
	echo '<br><br>';
	foreach($photo_arr as $photo){
		if($photo!='.' and $photo!='..'){
			//echo '<img src="galery/'.$photo.'"  >';
			$size = getimagesize('galery/'.$photo);
			//print_r($size);
			//echo $size[3].'<br>';
			$size[3]=str_replace('width="',"",$size[3]);
			$size[3]=str_replace('" height="',",",$size[3]);
			$size[3]=str_replace('"',",",$size[3]);
			//echo $size[3].'<br>';
			$s=explode(',',$size[3]);
			//print_r($s);
			//echo '<br>';
			echo '<img src="galery/'.$photo.'"  width="'.$s[0]/5 .'" height="'.$s[1]/5 .'" >';
		}
	}
?>				

<!------STALE ELEMENTY--------->
</section>
<?php
include('asside.php');
?>
<?php
include('foot.php');
?>
<!------STALE ELEMENTY--------->