<?php
$myemail = 'ourfutur@ourfuturethi.de';

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$birthday = $_POST['birthday'];
$straßeHausnummer = $_POST['straßeHausnummer'];
$plzStadt = $_POST['plzStadt'];
$email = $_POST['email'];
$course = $_POST['course'];

//Mail to Server
$to = "support@ourfuturethi.de";
$email_subject = "$vorname $nachname $birthday $straßeHausnummer $plzStadt $email $course";
$email_body = "$vorname\n$nachname\n$birthday\n$straßeHausnummer\n$plzStadt\n$email\n$course\n\n
REIHENFOLGE\nVorname\nNachname\nGeburtstag\nStraße und Hausnummer\nPLZ und Stadt\nE-Mail\nStudiengang";
$headers .= "Reply-To: $mymail";
mail($to,$email_subject,$email_body,$headers);

//Mail to Bewerber
$to = $email;
$email_subject = "Willkommen zu Our Future!";
+$email_body = "Hallo $vorname,\nwir heißen dich ganz herzlich Willkommen".
+    " zum Verein Our Future.\n".
+    " Unten findest du den Link um uns auf Slack beizutreten. In Slack findest".
+    " du alle Mitglieder unseren Vereins. Du kannst mit ihnen in Kontakt".
+    " treten und zusammen coole Aufgaben erledigen!\n\nMit freundlichen Grüßen,\nOur Future\n\n"
+	 " https://join.slack.com/t/ourfutureev/shared_invite/enQtODA1MzQ0NjM3OTc0LTU5ZDU4NWFlMzE1OTZiOGIyYzQyODI5YWFhMTQ1NDc2MDNhODk4MGE3OTkyNWRjMmM1YWFjZWExNTkyZmQwNDM";
$headers = "From: OurFuture@ourfuturethi.de\n";
$headers .= "Reply-To: $mymail";
mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page
header('Location: willkommen.html');
?>
