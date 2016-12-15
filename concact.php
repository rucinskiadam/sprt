 <!------STALE ELEMENTY---------> 
<?php
include('head.php');
?>
<!------STALE ELEMENTY--------->

	<h1>Formularz kontaktowy</h1>
			
	<article>
<?php
if(isset($_POST['send'])){

    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "rucinskiadam28@gmail.com");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = rucinskiadam28@gmail.com";

    $headers = "From: rucinskiadam28@gmail.com";


    mail("Sending@provider.com", "Testing", $message, $headers);
    echo "Check your email now....<BR/>";

$to      = 'rucinskiadam28@gmail.com';
$subject = 'wiadomosc ze strony';
$message = $_POST['message'];
$headers = 'From: '.'rucinskiadam28@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}


echo '<form method="POST" action="concact.php" >';
echo 'Twój email: ';
echo '<input type="text" name="mss_email" placeholder="email@example.pl">';
echo '<br><br>';
echo '<textarea name="message" rows="7" style="width:100%" placeholder="Twoja wiadomość....">';

echo '</textarea>';
echo '<br><br>';
echo '<input type="submit" name="send" value="Wyślij" style="float:right;">';
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