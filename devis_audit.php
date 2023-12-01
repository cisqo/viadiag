<?php 
//old version, check local files
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
	
	<title>Devis Audit Energétique - Viadiagnostic.fr</title>
	<meta name="description" content="Obtenez votre devis pour l'Audit Energétique de votre logement classé F ou G. Service gratuit et sans engagement." />
	<link rel="shortcut icon" type="image/png" href="https://www.viadiagnostic.fr/wp-content/uploads/2018/03/favicon_viadiagnostic.png"/>

	
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
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostics-immobiliers-obligatoires-vente/">Diagnostics obligatoires à la vente</a></li></ul></div>
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostics-immobiliers-obligatoires-location/">Diagnostics obligatoires à la location</a></li></ul></div>
                        <div class="col-lg-4 navy-blue col-md-12"><ul><li><a href="https://www.viadiagnostic.fr/demande-de-devis/">Identifiez vos diagnostics obligatoires</a></li></ul></div>
                      </div>

                      <div class="row mega-inner">

                        <div class="col-lg-4 col-md-12">
                          <ul class="list-unstyled">
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-amiante/"><i class="vd_icon vd_amiante"></i>Diagnostic Amiante</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-de-performance-energetique-dpe/"><i class="vd_icon vd_dpe"></i>Diagnostic DPE</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-electrique/"><i class="vd_icon vd_electrique"></i>Diagnostic Electrique</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-gaz/"><i class="vd_icon vd_gaz"></i>Diagnostic Gaz</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-loi-carrez/"><i class="vd_icon vd_carrez"></i>Diagnostic Loi Carrez</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-plomb/"><i class="vd_icon vd_plomb"></i>Diagnostic Plomb</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-termite/"><i class="vd_icon vd_termites"></i>Diagnostic Termite</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/erp-etat-des-risques-et-pollutions/"><i class="vd_icon vd_erp"></i>ERP: Etat des Risques et Pollutions</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/audit-energetique/"><i class="vd_icon vd_dpe"></i>Audit Energétique</a></li>
                          </ul>
                        </div>

                        <div class="col-lg-4 col-md-12">
                          <ul class="list-unstyled">
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-amiante/"><i class="vd_icon vd_amiante"></i>Diagnostic Amiante</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-de-performance-energetique-dpe/"><i class="vd_icon vd_dpe"></i>Diagnostic DPE</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-electrique/"><i class="vd_icon vd_electrique"></i>Diagnostic Electrique</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-gaz/"><i class="vd_icon vd_gaz"></i>Diagnostic Gaz</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-plomb/"><i class="vd_icon vd_plomb"></i>Diagnostic Plomb</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/erp-etat-des-risques-et-pollutions/"><i class="vd_icon vd_erp"></i>ERP: Etat des Risques et Pollutions</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostic-loi-boutin-surface-habitable/"><i class="vd_icon vd_boutin"></i>Le mesurage Loi Boutin, l’attestation de surface habitable</a></li>
                          </ul>
                        </div>

                        <div class="col-lg-4 col-md-12">
                          <div class="mega-btn">
                            <h6>Quels diagnostics avez vous à réaliser ?</h6>
                            <a class="btn btn-success" href="https://www.viadiagnostic.fr/demande-de-devis/">IDENTIFIER MES DIAGNOSTICS <br />OBLIGATOIRES</a>
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
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/">Sur les diagnostics</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 navy-blue col-md-12">
                          <ul>
                            <li><a href="https://www.viadiagnostic.fr/demande-de-devis/#">Guides immobilier</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 navy-blue col-md-12">
                          <ul>
                            <li><a href="https://www.viadiagnostic.fr/demande-de-devis/">Nos autres services</a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="row mega-inner">

                        <div class="col-md-4">
                          <ul class="list-unstyled">
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/tarif-diagnostic-immobilier/"><i class="vd_icon vd_tarif"></i>Tarifs des  diagnostics immoblier</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/duree-de-validite-des-diagnostics/"><i class="vd_icon vd_durre_diag"></i>Durée de  validité des diagnostics immobiliers</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/quand-realiser-les-diagnostics-immobiliers/"><i class="vd_icon vd_quand_diag"></i>Quand réaliser  les diagnostics ?</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostics-immobiliers-obligatoires-vente/"><i class="vd_icon vd_vente"></i>Diagnostics  obligatoires à la vente</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/diagnostics-immobiliers-obligatoires-location/"><i class="vd_icon vd_location"></i>Diagnostics  obligatoires à la location</a></li>
                            <li><a href="https://www.viadiagnostic.fr/diagnostic-immobilier/tous-les-autres-diagnostics/"><i class="vd_icon vd_ident_diag"></i>Tous les autres  diagnostics</a></li>
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
                  <a class="nav-link" href="https://www.viadiagnostic.fr/diagnostic-immobilier/tarif-diagnostic-immobilier/">Tarifs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.viadiagnostic.fr/actualites/">Actualités</a>
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

	
      <h1>Devis Audit Energétique</h1>
      <h2 style="font-size: 22px; font-weight: 400;">Depuis le 1er Avril 2023, L’audit énergétique est obligatoire pour tout logement proposé à la vente classé F ou G </h2>
		</br>
      <span style="font-size: 18px; display: inline-block; font-weight: 400;">Obtenez un devis gratuitement partout en France en remplissant le formulaire :</span>

      <h3>Votre bien:</h3>

      <form id="myForm"  method="post" action="result_audit.php" class="needs-validation" novalidate>
        <div class="row mb-3">
          <div class="radiovend">
            <input type="radio" class="btn-check" value="vente" name="devis_operation" id="vente" autocomplete="off"
              checked="" />
            <label class="extracssbtn btn btn-outline-primary rounded-0" style="width: 96px" for="vente">Je vends</label>
          </div>
          <div class="divou"><span>ou</span></div>
          <div class="radioloue">
            <input type="radio"  class="btn-check" value="location" value="cbx2" name="devis_operation" id="location"
              autocomplete="off" />
            <label class="extracssbtn btn btn-outline-primary rounded-0" for="location">Je loue</label>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select" name="devis_type_de_bien" id="select_bien"
              required="">
              <option value="" selected="">Type de logement?</option>
              <option value="maison individuelle">Maison individuelle</option>
              <option value="maison en copropriete">
                Maison en copropriété
              </option>
              <option value="appartement">Appartement</option>
			  <option value="autre">Autre</option>
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select" name="devis_nombre_de_pieces" id="select_pieces"
              required="">
              <option value="" selected="">Nombre de pièce?</option>
              <option value="studio">Studio</option>
              <option value="f1">F1</option>
              <option value="f2">F2</option>
              <option value="f3">F3</option>
              <option value="f4">F4</option>
              <option value="f5">F5</option>
              <option value="f6">F6</option>
              <option value="f7 et superieur">F7 et supérieur</option>
            </select>
          </div>
        </div>    

        <div class="row mb-2">
          <div class="col-md-3">
            <label for="zipcode" class="col-form-label-sm col-form-label">Code postal du bien:</label>
          </div>
          <div class="col-md-3">
            <input class="form-control" value="" maxlength="5" id="zipcode" name="devis_cp_bien" type="text" autocomplete="off"
              pattern="^[0-9]{5}$" required="" />
            <div class="invalid-feedback">Code postal invalide!</div>
          </div>
		  <label id="label_ville" style="display:none;" for="city" class="col-form-label-sm col-md-2 col-form-label">Ville du bien:</label>
		  <div id="div_ville" style="display:none;" class="col-md-4">
			<select class="form-control" name="devis_ville_bien" id="city" required="">
			  <option value="1"></option>
			</select>
		  </div>
        </div>

        <h3>Informations personnelles:</h3>

        <div class="row mb-2">
          <div class="col-md-3">
            <label for="nom" class="col-form-label-sm col-form-label">Votre Nom :</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" value="" type="text" name="devis_nom" id="nom" required="" />
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-3">
            <label for="mail" class="col-form-label-sm col-form-label">Votre Email:
            </label>
          </div>
          <div class="col-md-9">
            <input class="form-control" value="" pattern="^\S+@\S+\.\S+$" type="email" name="devis_email" id="mail"
              required="" />
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-3">
            <label for="adresse" class="col-form-label-sm col-form-label">Votre Téléphone:</label>
          </div>
          <div class="col-md-9">
            <input class="form-control" value="" pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.\-]*\d{2}){4}$"  type="tel"  name="devis_tel" id="adresse"
              required="" />
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-3">
            <label for="textarea" class="col-form-label-sm col-form-label">Commentaires:</label>
          </div>
          <div class="col-md-9">
            <textarea class="form-control" name="devis_com" id="textarea" rows="4"
              placeholder="Vous pouvez préciser ici votre demande: diagnostics déjà en votre possession, diagnostics demandés, vos disponibilités, ou simple questions..."></textarea>
          </div>
        </div>

        <div class="row my-4">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<img class="image_rgpd ls-is-cached lazyloaded" style="margin-left: 26px; margin-top: 3px;" src="images/im_rgpd.png" data-src="">
			</div>
			<div class="col-md-9 ">
				<p style="font-size: 0.8rem; line-height: 1rem;">
				<span style="font-weight: 600; line-height: 1.2rem;">Données protégées par la réglementation RGPD</span></br>
				en validant ma demande, j'accepte d'etre contacté concernant mon projet selon les <a style="text-decoration:none;" href="https://www.viadiagnostic.fr/politique-de-confidentialite/">regles de confidentialité</a>. Je dispose d'un droit opposable conformément à l'article L.223-1 du Code de la consommation
				</p>
			</div>
		</div>

		<div class="row my-4">
			<div class="col-md-3"></div>
			<div class="col-md-9 ">
				<button name="btnSubmit" type="submit" class="btn btn-outline-primary rounded-0" value="valid" required="">VALIDER MA DEMANDE DE DEVIS</button>
			</div>
		</div>

      </form>

      <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-sm-8 col-12 mt-2 mb-2">
          <div class="single-cc-footer-box">
            <h4>100% GRATUIT</h4>
            <p>
              Service 100% gratuit<br />
              et sans engagement
            </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-8 col-12 mt-2 mb-2">
          <div class="single-cc-footer-box">
            <h4>TRANQUILITÉ</h4>
            <p>
              Diagnostiqueurs certifiés<br />
              attestant de leur compétences
            </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-8 col-12 mt-2 mb-2">
          <div class="single-cc-footer-box">
            <h4>SERVICE RAPIDE</h4>
            <p>
              Moins d'une minute<br />
              pour remplir votre demande
            </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-8 col-12 mt-2 mb-2">
          <div class="single-cc-footer-box">
            <h4>PRIX RÉDUIT</h4>
            <p>
              Faites jouer la concurrence<br />
              pour obtenir le meilleur prix
            </p>
          </div>
        </div>
      </div>
	 
    </div>
  </main>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdB78ImAAAAAIOcpJ5gKgTyKhgIdGGiR-3zdBZJ"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
 <script>
		$(document).ready(function() {
			const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
			const format = '&format=json';
			let zipcode = $('#zipcode');
			let city = $('#city');
			let errorMessage = $('#error-message');
			let div_ville = document.getElementById("div_ville");
			let label_ville = document.getElementById("label_ville");
			function completeVille(e) {
				let code = $(zipcode).val();
				console.log(document.getElementById('zipcode').validity.valid)
				//console.log(code);
				let url = apiUrl + code + format;
				//console.log(url);

				fetch(url, {
					method: 'get'
				}).then(response => response.json()).then(results => {
					//console.log(results);
					$(city).find('option').remove();
					if (results.length) {
						$(errorMessage).text('').hide();
						document.getElementById('zipcode').setCustomValidity("");
						$.each(results, function(key, value) {
							//console.log(value);
							console.log(value.nom);
							$(city).append('<option value="' + value.nom + '">' + value.nom + '</option>');
							div_ville.style.display = "block";
							label_ville.style.display = "inline-block";
						});
					} else {
						if ($(zipcode).val()) {
							console.log('Erreur de code postal.');
							$(errorMessage).text('Aucune commmune avec ce code postal.').show();
							document.getElementById('zipcode').setCustomValidity("Invalid field.");
							//console.log(document.getElementById('zipcode').setCustomValidity)

						} else {
							$(errorMessage).text('').hide();
						}
					}
				}).catch(err => {
					console.log(err);
					$(city).find('option').remove();
				});
			}

			$(zipcode).on('blur', completeVille);
			$(zipcode).on('keydown', function(e) {
				if (e.which === 13) {
					e.preventDefault();
					completeVille(e);
					console.log(document.getElementById('zipcode').className);

				}
			});
			$(zipcode).on('input', function(e) {
				if (document.getElementById("zipcode").value.length === 5) {
					completeVille(e);
					console.log(document.getElementById('zipcode').className);

				}
			});

		});
	</script>
</body>

</html>
