 			<aside>
			
				<section>
	<?php
	$f;
		if(isset($_SERVER['HTTP_REFERER'])){
			$file=explode('/',$_SERVER['HTTP_REFERER']);
			$file[sizeof($file)-1];
			if($file[sizeof($file)-1]==''){
				$f='index.php';
			}else{
				$f=$file[sizeof($file)-1];
			}
		}else{
			$f='index.php';
		}
	if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){

		echo '<h3>Logowanie</h3>';
		echo '<form method="POST" action="'.$f.'" >';
		echo '<table>';
		echo '<tr >';
		echo '<td height="40" width="50">';
		echo 'Email:'; ;
		echo '</td>';
		echo '<td height="40">';
		echo '<input type="text" name="login" placeholder="email" >';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td height="40">';
		echo 'Hasło';
		echo '</td>';
		echo '<td>';
		echo '<input type="password" name="password" placeholder="Hasło" >';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td colspan="2">';
		echo '<input type="submit" name="submit" value="Zaloguj" style="float:right;">';
		echo '</td>';
		echo '</tr>';
		echo '</table>';
		echo '</form>';
	}else{
		echo '<div style="width:130px;">';
		echo 'Witaj!'.'<br>';
		echo 'Zalogowano jako: '.$_SESSION['name'].' '.$_SESSION['surname'];
		echo '</div>';
		/*echo '<div style="width:130px;">';
		echo '<form method="POST" action="index.php" >';
			echo '<input type="hidden" name="logout" value="1" >';
			echo '<input type="submit" name="submit" value="Wyloguj" style="width:130px;">';
		echo '</form>';
		echo '</div>';*/
	}
	?>
			</section>
			<section>	
			<?php
			if(isset($_SESSION['login']) && isset($_SESSION['password'])){
				echo '<nav class="breadcrumbs">';
					echo '<div style="width:130px;display: block;padding: 2px;">';
						echo '<form method="POST" action="create_article.php" >';
							echo '<input type="submit" name="submit" value="Dodaj artykuł" >';
						echo '</form>';
					echo '</div>';
					
					echo '<div style="width:130px;display: block;padding: 2px;">';
						echo '<form method="POST" action="edit_articles.php" >';
							echo '<input type="submit" name="submit" value="Edycja artykułów" >';
						echo '</form>';
					echo '</div>';
				
				
				echo '<div style="width:130px;display: block;padding: 2px;">';
				echo '<form method="POST" action="index.php" >';
					echo '<input type="hidden" name="logout" value="1" >';
					echo '<input type="submit" name="submit" value="Wyloguj" >';
				echo '</form>';
				
				
				echo '</nav>';
				echo '</div>';
				echo '<br><br>';
				echo '<br><br>';
				echo '<br><br>';
			}	
			?>
			</section>	
				<section>
					<h3>Godziny otwarcia</h3>
					<p>
						Poniedziałek - piątek: 8<sup>30</sup> - 20<sup>00</sup>
						<br>
						Sobota: 10<sup>30</sup> - 18<sup>45</sup>
						<br>
						Niedziela: nieczynne
					</p>
				</section>
					
				<section>
					<h3>Adres gabinetu</h3>
					<p>
						<strong>Nazwa firmy</strong>
						<br>
						Imię Nazwisko
						<br>
						Ul. Bardzo Ładna 55/77 (II piętro)
						<br>
						11-222 Nazwa Miejscowości
					</p>
				</section>
					
			</aside>