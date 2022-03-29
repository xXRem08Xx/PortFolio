CREATE TABLE `Document`(`numeroDocument` INTEGER  NOT NULL AUTO_INCREMENT,`titreProjet` VARCHAR(50),`lien` VARCHAR(1000),`dateInsertion` DATE,`description` VARCHAR(2000),`lien_publication` VARCHAR(1000),primary key(`numeroDocument`));

CREATE TABLE `MotCle`(`numeroMotCle` INTEGER  NOT NULL AUTO_INCREMENT,`libelle` VARCHAR(25),primary key(`numeroMotCle`));

CREATE TABLE `Appartient`(`numeroMotCle` INTEGER NOT NULL AUTO_INCREMENT,`numeroDocument` INTEGER NOT NULL, foreign key (`numeroMotCle`) references MotCle(`numeroMotCle`), foreign key (`numeroDocument`) references Document(`numeroDocument`),primary key(`numeroMotCle`,`numeroDocument`));

CREATE TABLE `Commentaire`(`numeroCommentaire` INTEGER  NOT NULL AUTO_INCREMENT,`message` VARCHAR(500),`nom` VARCHAR(30),`prenom` VARCHAR(30),`email` VARCHAR(100),`numeroDocument` INTEGER NOT NULL, foreign key (`numeroDocument`) references Document(`numeroDocument`),primary key(`numeroCommentaire`));

INSERT INTO Document VALUES (1, "Inscription des Producteurs", "https://docs.google.com/document/d/1B2SWLEST26TSzouq9gkdH6OU3-tfrY2wssOfPZMiTM8/edit#", "2022-03-28", "Ceci est la deuxième partie du projet NewWorld, où nous avons pour objectif de créer un formulaire d'inscription.
Pour les producteurs en sécurisant au maximum les champs de saisie, et les valeurs rentrées. Des contraintes tel que l'auto-complétion des code postal et des adresse via la base de données de l'état ont été mise en place.", "https://docs.google.com/document/d/e/2PACX-1vQOl4X8GPZ6W7aLWxVtC_BQMoJZXp6bhXRa65WKGjCYBd1f40M10ruqCVDDaBKgrNtRhCTcWlxwSWvy/pub?embedded=true");