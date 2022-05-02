<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Stage 2ème année";
require_once "./header.php";
require_once "./function.php";
?>

<body>
	<?php
	require_once "./nav-bar.php";
	?>

	<!-- titre de la page -->
	<section class="page-title bg-primary position-relative">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="text-white font-tertiary">Stage de 2ème année</h1>
				</div>
			</div>
		</div>
		<!-- image d'arriere plan -->
		<img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
		<img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
		<img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
		<img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
		<img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
		<img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
		<img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
	</section>
	<!-- /titre de la page -->


	<section class="section">
		<div class="container">
			<div class="row">
				<!-- presentation -->
				<div class="container">
					<h3 style="text-align: center;"><strong> Dignamik, Digne-les-bains</strong></h3>
					<h4><strong>Présentation de l'entreprise</strong></h4>
					<p>
						Dignamik est une petite start-up créée en juin 2019, se basant sur une activité de communication à travers
						les réseaux sociaux pour mettre en avant les commerçants locaux<br>
						souhaitant avoir une meilleure visibilité.
					</p>
					<p>
						Cette start-up est une pionnière de cette pratique en France, visant à augmenter la visibilité des commerçants locaux suivant votre localisation.<br>
						Pour cela, elle prend appui sur Facebook et Instagram principalement pour proposer du contenu personnalisé et unique pour chaque commerçant, vous permettant<br>
						de découvrir des nouveautés chaque jour !
					</p>
					<p>
						Vous pouvez retrouver leur projet <a href="https://www.viemaville.fr" target="_blank">ici</a> !
					</p>
					<div style="display: inline-block;">
						<p>
							Actuellement, ils sont présents dans 11 viles des Alpes-de-Haute-Provence :
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Digne-les-bains</li>
							<li class="list-group-item">Sisteron</li>
							<li class="list-group-item">Manosque</li>
							<li class="list-group-item">Oraison</li>
							<li class="list-group-item">Moyenne Durance</li>
							<li class="list-group-item">Vallée de la Blanche</li>
							<li class="list-group-item">Vallée de l'Ubaye</li>
							<li class="list-group-item">Gréoux-les-Bains</li>
							<li class="list-group-item">Laragne-Montéglin</li>
							<li class="list-group-item">Riez</li>
							<li class="list-group-item">Forcalquier</li>
						</ul>
					</div>
					<br>
					</p>
				</div>

				<!-- objectif -->
				<div class="container">
					<br>
					<h4><strong>Déroulement du Stage</strong></h4>
					<p>
						Au cours de ce stage de 5 semaines, du 31 mai au 2 juillet, les objectifs de réalisations étaient :
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Automatisation de la récupération et du traitement de données Facebook, Instagram et du site web pour être capable de les stocker</li>
						<li class="list-group-item">Récolte et mise en forme des données afin d'en faciliter la lecture, la compréhension et l'utilisation</li>
					</ul>
					<br>
					</p>
				</div>

				<!-- travail effectué -->
				<div class="container">
					<h4><strong>Travail Effectué</strong></h4>
					<p>
					<h5>Récupération des données</h5>
					<p>
						Cette partie est celle qui a nécessité le plus de temps d'investissement, notamment en termes de recherche et de lecture de documentation.
						<br>
						La première idée que l'on a mise en œuvre a été celle d'utiliser <a href="https://www.integromat.com/en" target="_blank">IntegroMath</a>, un service en ligne permettant de gérer et de programmer des taches,
						grâce a l'utilisation d'API.
						<br>
						Par exemple, on peut programmer que lorsqu'on recoit un mail d'une certainne personne, ce mail est rangé dans un dossier de la boite mail et une notification nous est envoyée.
						<br>
						Nous avions pour idée de nous servir de ce service afin de programmer l'exécution mensuelle d'un call API a celle de Facebook et Instagram, afin de récupérer le contenu de ces calls et de les stocker.
						<br>
						Cependant, l'API Facebook est complexe, et j'ai trouvé dans la foulée un autre service web génial, nommé <a href="https://www.dataddo.com" target="_blank">Dataddo</a>, qui permet de récupérer les données depuis une ou plusieurs sources et de les transférer dans un fichier ou service externe, tel un fichier google sheet ou une base de données.
						<br>
						En profitant de cet outils, nous avons stocké toute les données de tous les comptes facebook et instagram depuis leurs creation, et nous les avons tranféré dans un Google Sheet créé pour l'occasion. (Le fichier fait alors plus de 10 000 lignes par onglet, sur plusieurs onglets)
						<br>
						<br>
						Ce service étants payant à la fin de la période d'essai, nous avons opté pour un autre service web nommé <a href="https://www.zoho.com/fr/" target="_blank">Zoho</a> proposant une partie gratuite, et proposant une formule similaire, mais dans un fichier créé à chaque fois, obligeant l'action de copier le contenu du fichier et de le coller dans notre propre fichier adapté pour l'occasion.
						<br>

					<h6><strong>Compte Rendu :</strong></h6>
					Ce fût une partie longue, où le plus dur à été de trouver quel outil est le plus efficace et rentable, est-ce que c'est utilisé de payer pour ceci ou cela, etc ...
					<br>
					Elle m'a tout de même obligé à réfléchir à mes choix et à remettre en doute ce que j'ai effectué, afin de vraiment trouver la solution la plus utile et efficace.
					</p>
					</p>

					<br>
					<br>
					<h5>Traitement des données</h5>
					<p>
						Cette partie a été celle qui m'a mis les nerfs à rude épreuve 😂
						<br>
						La cause étant que grâce au travail effectué en amont (expliqué ci-dessus), nous avions 3 onglets de 10 000 lignes d'informations.
						<br>
						Et ça requiert une connexion internet solide et inexistante pour moi.
						<br>
						Vient la partie où je dois organiser les données pour les rendre plus claires, et permettre de le faire automatiquement pour que les données rajoutées chaque mois soient prisent en compte. <br>
					</p>
					C'est pourquoi j'ai pensé à 2 solutions :
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							Faire un graphique directement sur le fichier Google Sheet
						</li>
						<li class="list-group-item">
							Utiliser Google studio pour faire un rapport
						</li>
					</ul>
					<p>
						La 2e solution m'a paru être la meilleure, et de loin : Google Studio permet de créer des rapports clairs, structurés et personnalisables, avec la possibilité d'y mettre des filtres suivant les informations qu'on lui donne. (date, nom d'entreprise, nombre de vue ...)
						<br>
						J'ai ainsi fait un rapport que j'ai présenté a léo, mon patron, et il a aimé l'idée et la présentation, mais
						trouvait qu'on pouvait faire mieux. Il m'a alors demandé de trier les données dans le fichier Google Sheet contenant les données de base, et d'y séparer les informations pour pouvoir y mettre des filtres par la suite.
						<br>
						On a donc réorganise les données grace a des formules de somme et sélection de caractère, et pouvoir trier suivant le nom de l'entreprise concerné a été possible grâce à une longue formule. <br>
						<br>
						Cette fonction permet de récupérer la chaîne de caractère comprise entre 2 caractères indiqués (ici 🛍):
					<div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
						=SI(OU(C2="";STXT(C2;1;2)&lt;&gt;"🛍");"";STXT(SI(NBCAR(C2)-NBCAR(SUBSTITUE(C2;"🛍";""))&lt;2;"";SUPPRESPACE(STXT(C2;TROUVE("🛍";C2)+1;TROUVE("🛍";C2;TROUVE("🛍";C2)+1)-TROUVE("🛍";C2)-1)));3;NBCAR(C2))) </div>

								</p>
								<br>
								<p>
									Grâce à cette formule, on a pu récupérer le nom de l'entreprise de toutes les lignes récupère et la comparer avec la base de données de Dignamik afin de relier ces articles avec des noms, adresse mail, et numéro de téléphone.
									<br>
									Suite à cela, on a pu obtenir 2 jolis tableaux finals comptant le nombre de vue, de clic, et autre information pour chaque client, un pour le total des 30 derniers jours et un pour le total depuis leur inscription.
									<br>
									<br>
									Il ne restait plus qu'à programmer l'envoi d'un mail préconçu aux clients dont on a l'adresse mail, avec leurs chiffres associés, pour faire un récapitulatif des 30 derniers jours.

								</p>
					</div>
				</div>
				<br>
				<br>
				<hr style="background-color: #41228e;">
				<p style="text-align: center;">
				Je tiens à remercier Léo pour m'avoir offert la possibilité d'effectuer mon stage dans son entreprise et de m'avoir fait confiance une deuxième fois, malgré ces temps difficiles.😁😘
                <br>
                Je remercie toute l'équipe qui m'a encore une fois accueilli de la meilleure des manières, dans une ambiance dynamique et joyeuse 😁
            </p>

			</div>
	</section>

	<?php
	require_once "./footer.php";
	?>


</body>

</html>