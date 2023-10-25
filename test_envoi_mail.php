<?php

include('./sendgrid_2023_homemade_viadiagnostic.php');


$sujet_client="Demande AUDIT Energetique";
$message_client="blabla";
$from="contact@viadiagnostic.fr";
$to_client=["c.arslanian@gmail.com"];
$reponse_client = sendMailHomeMade($from, $to_client, $sujet_client, $message_client, "audit");
			
			echo "ok!";
			?>