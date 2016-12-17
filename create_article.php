<!------STALE ELEMENTY---------> 
<?php
include('head.php');
accestosite();
?>
<!------STALE ELEMENTY--------->

<h1>Tworzeneie artykułu</h1>
<?php
if( isset($_POST['acces']) && isset($_POST['header']) && isset($_POST['article']) ){
	if( $_POST['acces']!='' && $_POST['header']!='' && $_POST['article']!='' ){
		date_default_timezone_set('Europe/Warsaw');
		
			$query=" INSERT INTO `articles`(`creator`, `article`, `date`, `time`, `acces`, `header`)  
				 select '".$_SESSION['login']."','".$_POST['article']."','".date("Y-m-d")."','".date("H:i:s")."','".$_POST['acces']."','".$_POST['header']."' from dual
					where 
					(select count(*) from articles where 
					`creator`='".$_SESSION['login']."' 
					and `article`='".$_POST['article']."' 
					and `acces`='".$_POST['acces']."'
					and `header`='".$_POST['header']."')=0
				
			";
			
		#echo $query;
		$conn=mysql_connector();
		if($conn){
			$result = mysqli_query($conn, $query);
			if(mysqli_affected_rows($conn)>0){
				echo '<div style="color:green;" >Dodano artykół</div>';
			}
		}
	}else{
		echo '<div style="color:red;" >Nie wszystkie pola zostały wypełnione!!!</div>';
	}
}
echo '<article>';
echo '<form method="POST" action="create_article.php" >';
	echo '<input type="radio" name="acces" value="private" >Artykuł tylko dla członkowie stowarzyszenia</br><br>';
	echo '<input type="radio" name="acces" value="public" >Artykuł publiczny</br><br>';
	echo '<div style="float:left;" >Nagłówek: </div><input  id="h_in" type="text" name="header" style="float:right;width:80%;" placeholder="Treść nagłówka..."></br><br>';
	echo '<textarea  id="a_in" name="article" rows="8" style="width:100%;" placeholder="Treść artykułu...">';
	echo '</textarea>';//onkeyup="article_test()"
	echo '<input type="submit" name="submit" value="Dodaj artykuł" style="float:right;">';
echo '</form>';
	echo '<input type="button" onclick="article_test()" value="Podgląd" style="float:left;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;">';
echo '<br><br><br>';
echo '</article>';
echo '<br><br><br>';

	
		echo '<div id="head_test"> </div>';
	
echo '<article>';
	echo '<div id="body_test"> </div>';
echo '</article>';
echo '<br><br><br>';
echo '<br><br><br>';
echo '<br><br><br>';
echo '<br><br><br>';
echo '<br><br><br>';
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
<script>
    window.onload = function () {
        tinymce.get('content').on('keyup',function(e){
            console.log(this.getContent().replace(/(<[a-zA-Z\/][^<>]*>|\[([^\]]+)\])|(\s+)/ig,''));
        });
    }
function article_test(){
	var hed=document.getElementById("h_in").value;
	document.getElementById("head_test").innerHTML = "<h1>" + hed + "</h1>";
	//var bod=document.getElementById("a_in").innerHTML;
	//document.getElementById("body_test").innerHTML = bod ;	

	document.getElementById("body_test").innerHTML = tinymce.get('a_in').getBody().innerHTML ;
}

</script>
