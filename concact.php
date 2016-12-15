 <!------STALE ELEMENTY---------> 
<?php
include('head.php');
?>
<!------STALE ELEMENTY--------->

	<h1>Formularz kontaktowy</h1>
			
	<article>
<?php
echo '<form method="POST" action="concact.php" >';
echo 'Twój email: ';
echo '<input type="text" name="mss_email" placeholder="email@example.pl">';
echo '<br><br>';
echo '<textarea rows="7" style="width:100%" placeholder="Twoja wiadomość....">';

echo '</textarea>';
echo '<br><br>';
echo '<input type="submit" name="submit" value="Wyślij" style="float:right;">';
echo '<br><br>';
echo '</form>';
?>	
	</article>

<!------STALE ELEMENTY--------->
</section>
<?php
include('asside.php');
?>
<?php
include('foot.php');
?>
<!------STALE ELEMENTY--------->