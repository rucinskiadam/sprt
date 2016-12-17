<?php


include("function.php");
$conn=mysql_connector();
session_start();
	if(isset($_POST['login']) && isset($_POST['password'])){


if($conn){
	$query="SELECT id,login,password,name,surname,permissions FROM users where login='".$_POST['login']."' and password='".$_POST['password']."'  limit 1";
	$result = mysqli_query($conn, $query);
	if ($result->num_rows > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['login'] = $row["login"];
			$_SESSION['password'] = $row['password'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['surname'] = $row['surname'];
			$_SESSION['permissions']=$row['permissions'];
			echo '<div style="color:green;">';
				echo "Zalogowano pomyślnie";
			echo '</div>';
		}
	}else {
		echo '<div style="color:red;">';
			echo "Błędny login lub hasło!!";
		echo '</div>';
	}
	mysqli_close($conn);
} 

	
}else if(isset($_POST['logout'])  ){
	//unset($_SESSION['login']);
	//unset($_SESSION['password']);
	session_destroy();
	header("Refresh:0");
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Stowarzyszenie Przyjaciół Rzeki Turki i Tatarki</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index, follow">
		<link rel="shortcut icon" href="gfx/favicon.png">
		<link rel="stylesheet" href="style.css" type="text/css">
		<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
		 <script src="tinymce/tinymce.min.js"></script>
		<script>
				tinymce.init({
  selector: 'textarea'  // change this value according to your HTML
});
		</script>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php" title="" class="home">Strona główna</a></li>
					<!--<li><a href="#" title="">O nas</a></li>-->
					<li><a href="articles.php" title="">Artykuły</a></li>
					<li><a href="galery.php" title="">Galeria</a></li>
					<!--<li><a href="#" title="">Oferta</a></li>-->
					<!--<li><a href="#" title="">Nasi Klienci</a></li>-->
					<li><a href="concact.php" title="">Kontakt</a></li>
<?php
					/*if(isset($_SESSION['login']) && isset($_SESSION['password'])){
						echo '<form method="POST" action="index.php" >';
							echo '<input type="hidden" name="logout" value="1" >';
							echo '<li><a href="#" onclick="this.form.submit();" >Wyloguj</a></li>';
							echo '<input type="submit" value="as" >';
						echo '</form>';
					}*/
?>					
					
				</ul>
			</nav>
			<section>
				<a href="index.php" title="">
					Stowarzyszenie Przyjaciół
					<span>Rzeki Turki i Tatarki</span>
				</a>
			</section>
		</header>
		
		<hr>
		
		<main>
			<section>
			<?php
			if(isset($_SESSION['login']) && isset($_SESSION['password'])){
				echo '<nav class="breadcrumbs">';
					echo '<div style="width:130px;float:left;display: inline-block;padding: 10px">';
						echo '<form method="POST" action="create_article.php" >';
							echo '<input type="submit" name="submit" value="Dodaj artykuł" >';
						echo '</form>';
					echo '</div>';
					
					echo '<div style="width:130px;float:left;display: inline-block;padding: 10px">';
						echo '<form method="POST" action="edit_articles.php" >';
							echo '<input type="submit" name="submit" value="Edycja artykułów" >';
						echo '</form>';
					echo '</div>';
				echo '</nav>';
				
				echo '<br><br>';
				echo '<br><br>';
				echo '<br><br>';
			}	
			?>
	