<?php 
define( 'PANTHEON_SESSIONS_ENABLED', 1 );
include('./sendgrid_2023_homemade_viadiagnostic.php');

  ?>
  <!DOCTYPE html>
<html lang="en">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JNGS1NME96"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-JNGS1NME96');
	</script>
	
<head>
  <!--meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  <!--CSS Links-->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/media.css" />

  <title>Form</title>
  

</head>
<body>

  <main>
    <div class="top-sticky">
  <?php
  
    
  if(!empty($_POST)){
	//echo '_post:</br>';
	//print_r($_POST);
	//echo '</br>';
	
		$champ_vide=0;
		//SI CHAMP VIDE OU N'appartemenant pas au champs possible -> erreur
		if (empty($_POST['devis_type_de_bien']) || !in_array($_POST['devis_type_de_bien'], array('maison individuelle','maison en copropriete','appartement', 'autre')  ))     $champ_vide=1;
		if (empty($_POST['devis_nombre_de_pieces']) || !in_array($_POST['devis_nombre_de_pieces'], array('studio','f1','f2','f3','f4','f5','f6','f7 et superieur')  ))    $champ_vide=2;
		if (empty($_POST['devis_cp_bien']) || !is_numeric($_POST['devis_cp_bien']) )     $champ_vide=3;
		if (empty($_POST['devis_ville_bien']) || !ctype_alnum($_POST['devis_cp_bien']) )      $champ_vide=4;
		if (empty($_POST['devis_nom']) || !ctype_alnum($_POST['devis_nom']))  $champ_vide=5;
		if (empty($_POST['devis_email']))    $champ_vide=6;
		if (empty($_POST['devis_tel'])) $champ_vide=7;
		if (empty($_POST['devis_operation']) || !in_array($_POST['devis_operation'], array('vente','location')  ))     $champ_vide=8;

		if ($champ_vide>=1){ echo "ERROR : tous les champs ne sont pas remplis.";
				//echo "le champ_vide=".$champ_vide;
		}
		else
		{
			$form_valide=1;
			$operation=$_POST['devis_operation'];
			$type_de_bien=($_POST['devis_type_de_bien']); 
			$cp_bien=($_POST['devis_cp_bien']); 
			$ville_bien=$_POST['devis_ville_bien']; 
			$nombre_de_pieces=($_POST['devis_nombre_de_pieces']); 
			$nom=($_POST['devis_nom']); 
			$email=($_POST['devis_email']); 
			$tel=($_POST['devis_tel']); 
			$com=($_POST['devis_com']); 

			$date=time();
			$ref_id="landing2"; 
			$key= "bf8481abb71d175a0d5ab6421c4b192a"; 
		


			$clientbrowser = getenv("HTTP_USER_AGENT"); // Do Not Touch
            $clientip = isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR']; //fonctionne pour cloudflare, car autrement on a les ip de cloudlare $_SERVER['REMOTE_ADDR']; // Do Not Touch
            $clienturl = @$_SERVER['HTTP_REFERER'];
            //Adaptation du vocabulaire viadiag à diagexperts
			
		}

	}
	else{
	echo '$_post empty';
	}
	//echo '</br>form_valide= '.$form_valide.'</br>';
  ?>
      <!-- Top bar -->
      <div class="top-bar m-top-bar">
        <button class="btn bar-btn mx-4" href="">Espace pro</button>
        <ul class="list-unstyled">
          <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
        </ul>
      </div>
      <div class="arrow-down"><button class="btn toggle-btnn" ><i class="fa-solid fa-chevron-down"></i></button></div>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light sticky-top">
        
        <div class="container">
          <a class="navbar-brand" href="https://www.viadiagnostic.fr/"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <span class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diagnostics obligatoires</a>
                  
                  <div class="dropdown-menu mega-menu showImportant" aria-labelledby="navbarDropdown">
                    <div class="container">

                      <div class="row">
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="">Diagnostics obligatoires à la vente</a></li></ul></div>
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="">Diagnostics obligatoires à la location</a></li></ul></div>
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="">Identifiez vos diagnostics obligatoires</a></li></ul></div>
                      </div>

                      <div class="row mega-inner">

                        <div class="col-lg-4 col-md-12">
                          <ul class="list-unstyled">
                            <li><a href=""><i class="vd_icon vd_amiante"></i>Diagnostic Amiante</a></li>
                            <li><a href=""><i class="vd_icon vd_dpe"></i>Diagnostic DPE</a></li>
                            <li><a href=""><i class="vd_icon vd_electrique"></i>Diagnostic Electrique</a></li>
                            <li><a href=""><i class="vd_icon vd_gaz"></i>Diagnostic Gaz</a></li>
                            <li><a href=""><i class="vd_icon vd_carrez"></i>Diagnostic Loi Carrez</a></li>
                            <li><a href=""><i class="vd_icon vd_plomb"></i>Diagnostic Plomb</a></li>
                            <li><a href=""><i class="vd_icon vd_termites"></i>Diagnostic Termite</a></li>
                            <li><a href=""><i class="vd_icon vd_erp"></i>ERP: Etat des Risques et Pollutions</a></li>
                            <li><a href=""><i class="vd_icon vd_dpe"></i>Audit Energétique</a></li>
                          </ul>
                        </div>

                        <div class="col-lg-4 col-md-12">
                          <ul class="list-unstyled">
                            <li><a href=""><i class="vd_icon vd_amiante"></i>Diagnostic Amiante</a></li>
                            <li><a href=""><i class="vd_icon vd_dpe"></i>Diagnostic DPE</a></li>
                            <li><a href=""><i class="vd_icon vd_electrique"></i>Diagnostic Electrique</a></li>
                            <li><a href=""><i class="vd_icon vd_gaz"></i>Diagnostic Gaz</a></li>
                            <li><a href=""><i class="vd_icon vd_plomb"></i>Diagnostic Plomb</a></li>
                            <li><a href=""><i class="vd_icon vd_erp"></i>ERP: Etat des Risques et Pollutions</a></li>
                            <li><a href=""><i class="vd_icon vd_boutin"></i>Le mesurage Loi Boutin, l’attestation de surface habitable</a></li>
                          </ul>
                        </div>

                        <div class="col-lg-4 col-md-12">
                          <div class="mega-btn">
                            <h6>Quels diagnostics avez vous à réaliser ?</h6>
                            <a class="btn btn-success" href="">IDENTIFIER MES DIAGNOSTICS <br />OBLIGATOIRES</a>
                          </div>
                        </div>

                      </div>

                    </div>
                    <!--  /.container  -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tout savoir
                  </a>
                  <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">

                    <div class="container">

                      <div class="row">
                        <div class="col-lg-4 navy-blue col-md-12">
                          <ul>
                            <li><a href="">Diagnostics obligatoires à la vente</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 navy-blue col-md-12">
                          <ul>
                            <li><a href="">Diagnostics obligatoires à la location</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 navy-blue col-md-12">
                          <ul>
                            <li><a href="">Identifiez vos diagnostics obligatoires</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="row mega-inner">

                        <div class="col-md-4">
                          <ul class="list-unstyled">
                            <li><a href=""><i class="vd_icon vd_tarif"></i>Tarifs des  diagnostics immoblier</a></li>
                            <li><a href=""><i class="vd_icon vd_durre_diag"></i>Durée de  validité des diagnostics immobiliers</a></li>
                            <li><a href=""><i class="vd_icon vd_quand_diag"></i>Quand réaliser  les diagnostics ?</a></li>
                            <li><a href=""><i class="vd_icon vd_vente"></i>Diagnostics  obligatoires à la vente</a></li>
                            <li><a href=""><i class="vd_icon vd_location"></i>Diagnostics  obligatoires à la location</a></li>
                            <li><a href=""><i class="vd_icon vd_ident_diag"></i>Tous les autres  diagnostics</a></li>
                          </ul>
                        </div>

                        <div class="col-md-4">
                          <ul class="list-unstyled">
                            <li><a href=""><i class="vd_icon vd_guide_vendeur"></i>Guide du  vendeur</a></li>
                            <li><a href=""><i class="vd_icon vd_guide_vendeur"></i>Guide de  l’acheteur</a></li>
                            <li><a href=""><i class="vd_icon vd_guide_bailleur"></i>Guide du  bailleur</a></li>
                            <li><a href=""><i class="vd_icon vd_guide_locataire"></i>Guide du  locataire</a></li>
                          </ul>
                        </div>

                        <div class="col-md-4">
                          <ul class="list-unstyled">
                            <li><a href=""><i class="vd_icon vd_estimation"></i>Faites  estimer votre bien</a></li>
                            <li><a href=""><i class="vd_icon vd_demenagement"></i>Devis  déménagement</a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                    <!--  /.container  -->
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tarifs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Actualités</a>
                </li>
                <li>
                  <a class="btn outline-btn" href="">Demande de devis</a>
                </li>
              </ul>
            </span>
          </div>
        </div>
      </nav>
      <!-- navbar end -->
    </div>
    <div class="cc-form-box">

      <img class="img-gratuit ls-is-cached lazyloaded" src="images/puces.png" width="100px" data-src="" />

<?php
if($form_valide){// FORMUALAIRE OK! Enregistrement en bdd + envoi mail client + disctribution diagnostiqueur.
	
	
	//Enregistrement en base de donnée
	$connect = mysqli_connect("sqlprive-bm24311-001.eu.clouddb.ovh.net:35149","diagexperts","Cisqo21mdpbddacc","diagexperts");

	// Check connection
	if (mysqli_connect_errno()) {
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
		sendMailHomeMade('c.arslanian@gmail.com', ['c.arslanian@gmail.com'], 'pb envoi connection database_landing_audit', "Warning");
		exit();
	}

	//On check si la demande est deja en bdd
	$sql_doublon="SELECT count(*) as `count_doublon`, `id` FROM `demandedevis_audit` WHERE `email`='".$email."' AND `date`> CURRENT_DATE()-7 ORDER BY `id` DESC";

	$return_doublon=mysqli_query($connect, $sql_doublon);
	$result_doublon=mysqli_fetch_array($return_doublon, MYSQLI_BOTH);
	$nb_contact_doublon=$result_doublon['count_doublon'];
	//Si la demande est trouvé en bdd, on affichera l'id correspondant, sinon, on affectera $result_id[id];un peu plus loin 
	$id_audit=$result_doublon['id'];
	
	//echo $sql_doublon;
	//echo $nb_contact_doublon;
							
	if($nb_contact_doublon == 0){//Check si deja en DB
	
	//ENREGISTERMENT DE LA DEMANDE DE DEVIS EN BASE DE DONNEE
	$sql_newaudit="insert into `demandedevis_audit` (`type_de_bien`, `nombre_de_pieces`, `cp_bien`, `ville_bien`, `nom`, `email`, `tel`, `com`, `date`) values (
			'" . addslashes($type_de_bien) . "',
			'" . addslashes($nombre_de_pieces) . "',
			'" . addslashes($cp_bien) . "',
			'" . addslashes($ville_bien) . "',
			'" . addslashes($nom) . "',
			'" . addslashes($email) . "',
			'" . addslashes($tel) . "',
			'" . addslashes($com) . "',
			'" . date("Y-m-d H:i:s") . "'
			)";
	mysqli_query($connect, $sql_newaudit);

		$return_id = mysqli_query($connect, "SELECT id FROM demandedevis_audit ORDER BY id DESC");
		$result_id=mysqli_fetch_array($return_id, MYSQLI_BOTH);
		$id_audit=$result_id['id'];
		
		//ATTRIBUTION DE LA DEMANDE DE DEVIS
		
		//Client 1 - TEST ARS
		$liste_dep_client_1=['06','13','83'];
		$liste_dep_client_2=['84'];
		$liste_dep_client_3=['22','29','35','44','56'];

		$id_diag=0; //initialisation de id_diag


		if(in_array(substr($cp_bien, 0, -3),$liste_dep_client_1)){
			//la demande $cp_bien appartient bien à cette liste de Dep
			$prix_contact_audit=40;
			$id_diag=1000212;// TEST ARSLANIAN 
			$mail_diag="c.arslanian@gmail.com";
		}
		elseif(in_array(substr($cp_bien, 0, -3),$liste_dep_client_2)){
			//la demande $cp_bien appartient bien à cette liste de Dep
			$prix_contact_audit=50;
			$id_diag=1000628;// TESTb
			$mail_diag="c.arslanian@gmail.com";
		}
		elseif(in_array(substr($cp_bien, 0, -3),$liste_dep_client_3)){
			//la demande $cp_bien appartient bien à cette liste de Dep
			$prix_contact_audit=40;
			$id_diag=1000461;// Hatim diag xpr habitat
			$mail_diag="diag.expert.habitat@gmail.com";
		}
		
		if($id_diag!=0){
			//ENREGISTREMENT DE LA LIGNE CREDIT POUR LE diagnostiqueur
			$sql_insert="INSERT INTO `credit` (`id`, `id_diagnostiqueur`, `operation`, `montant`, `iddemande`, `idaudit`, `date_facture`, `type`) VALUES (NULL, '".$id_diag."', 'AUDIT contact ".$id_audit."', '".-$prix_contact_audit."', '0', '".$id_audit."', '".time()."', 'audit');";
			mysqli_query($connect, $sql_insert);
			$sqlsolde1="UPDATE `solde` SET solde_diag=solde_diag-".$prix_contact_audit." WHERE id_diagnostiqueur='".$id_diag."'";
			mysqli_query($connect, $sqlsolde1) or die(mysql_error()); 
			
			
			//Gestion de l'envoi du mail au Client demandeur de devis
			include('./message_html_depot_demande_audit.php');
			$sujet_client="Demande AUDIT Energetique";
			$message_client=$html;
			$from="contact@viadiagnostic.fr";
			$to_client=array($email);
			$reponse_client = sendMailHomeMade($from, $to_client, $sujet_client, $message_client, "audit");
							

			if (!$reponse_client) {
				//envoi c'est mal passé
				echo 'error send mail client';
				$err_mess= 'error hukjbuiha src viadiagnostic.fr/landing_audit/index'.$reponse_client->statusCode();
				sendMailHomeMade('c.arslanian@gmail.com', 'c.arslanian@gmail.com', 'pb envoi mail audit ', $err_mess, "Warning");
			}
			
			//Gestion de l'envoi du mail au DIAG demandeur de devis
			$sujet_diag="Demande AUDIT Energetique".$id_audit;
			$message_diag=$html_diagnostiqueur;
			$from="contact@diagnostic-experts.fr";
			$reponse_diag = sendMailHomeMade($from, array($mail_diag), $sujet_diag, $message_diag, "audit");

			if (!$reponse_diag) {
				//envoi c'est mal passé
				echo 'error send mail diag';
				$err_mess= 'error hukjbuihb src viadiagnostic.fr/landing_audit/index'.$reponse_diag->statusCode();
				sendMailHomeMade('c.arslanian@gmail.com', 'c.arslanian@gmail.com', 'pb envoi mail audit ', $err_mess, "Warning");
			}
			
			//Gestion de l'envoi du mail a moi meme pour suivi
			$sujet_diag="Demande AUDIT Energetique".$id_audit;
			$message_diag=$html_diagnostiqueur;
			$from="contact@diagnostic-experts.fr";
			$reponse_diag = sendMailHomeMade($from, ["c.arslanian@gmail.com"], $sujet_diag, $message_diag, "audit");
						
		}
	}
	else{
		//echo '</br>already in db';
		}
	
	?>
		  <h1>Devis diagnostic immobilier</h1>
		  <h2>Merci, votre demande de devis est bien enregistrée et sera traitée dans les plus brefs délais.</h2>
	<?php
}
?>
	  
    </div>
  </main>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdB78ImAAAAAIOcpJ5gKgTyKhgIdGGiR-3zdBZJ"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>