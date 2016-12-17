<!------STALE ELEMENTY--------->
<?php
include('head.php');
?>
<!------STALE ELEMENTY--------->



				<h1>Artykuły</h1>
			
			<?php
				$query="SELECT  articles.`article`, articles.`date`, articles.`time`, articles.`acces`, articles.`header`, users.name,users.surname FROM articles join users 
						ON
						articles.creator = users.login
						order by date,time
					";
				$result = mysqli_query($conn, $query);
				if ($result->num_rows > 0) {
					//$h=10;
					while($row = mysqli_fetch_assoc($result)) {
						
						if(	$row['acces']=='public' || isset($_SESSION['permissions']) ){
							echo '<div style="background-color:rgb(244, 242, 242); border-radius:20px;padding:20px;" >';
								echo '<div style="line-height: 2;">';
									echo '<div style="font-size: 20px;font-weight: bold;" >';
										//echo '<h'.$h .'>';
											echo $row['header'];
										//echo '</h'.$h++ .'>';
									echo '</div>';
								echo '</div>';
								
								echo '<div style="font-size: 9px; color: rgb(109, 107, 107);font-style: italic;">Dodano: '.$row['date'].' '.$row['time'].' przez '.$row['name'].' '.$row['surname'].'</div>';
								
								echo '<hr style="color: rgb(130, 124, 124); background: rgb(109, 107, 107); width: 100%; height: 1px;">';
								echo '<article>';
										echo '<p>';
											echo $row['article'];
										echo '</p>';
									echo '</div>';
								echo '</article>';
							echo '</div>';
							echo '<br>';
						}
					}
					echo '<br></br>';echo '<br></br>';echo '<br></br>';
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