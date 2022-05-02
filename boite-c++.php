<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Service C++";
require_once "header.php";
require_once "function.php";
?>

<body>


    <?php
    require_once "nav-bar.php";
    ?>

    <!-- titre de la page -->
    <section class="page-title bg-primary position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white font-tertiary">Service C++</h1>
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

    <!-- section C++ -->
    <section class="section">
        <div class="container">
            <div class="row">

                <!-- tableau d'affichage C++ -->
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="onglet0" data-toggle="list" href="#introduction" role="tab" aria-controls="onglet0">Introduction</a>
                                <a class="list-group-item list-group-item-action" id="onglet1" data-toggle="list" href="#o1" role="tab" aria-controls="onglet1">Les Variables</a>
                                <a class="list-group-item list-group-item-action" id="onglet2" data-toggle="list" href="#o2" role="tab" aria-controls="onglet2">Les Bases</a>
                                <a class="list-group-item list-group-item-action" id="onglet3" data-toggle="list" href="#o3" role="tab" aria-controls="onglet3">Les Tableaux</a>
                                <a class="list-group-item list-group-item-action" id="onglet4" data-toggle="list" href="#o4" role="tab" aria-controls="onglet4">Les Structures</a>
                                <a class="list-group-item list-group-item-action" id="onglet5" data-toggle="list" href="#o5" role="tab" aria-controls="onglet5">Les Pointeurs</a>
                                <a class="list-group-item list-group-item-action" id="onglet6" data-toggle="list" href="#o6" role="tab" aria-controls="onglet6">Les Classes</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="nav-tabContent">
                                <!-- Contenu de l'onglet introduction -->
                                <div class="tab-pane fade active show" id="introduction" role="tabpanel" aria-labelledby="onglet0">
                                    <h3 style="text-align: center;">Introduction</h3>
                                    <br>
                                    <p>
                                        C++ est un langage de programmation compilé permettant la programmation sous de multiples paradigmes,
                                        dont la programmation procédurale, la programmation orientée objet et la programmation générique.
                                        Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus
                                        utilisés dans les applications où la performance est critique.
                                    </p>
                                    <br>
                                    <h4>Avantages du C++ par rapport au langage C </h4>
                                    <p>
                                        La principale différence étant le concept OOPS, C++ est un langage orienté objet alors que C est un langage procédural.
                                        <br>
                                        En-dehors de cela, il existe de nombreuses autres fonctionnalités de C ++ qui donnent à ce langage un avantage sur le langage C :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Il existe une vérification de type plus forte en C++.
                                        </li>
                                        <li class="list-group-item">
                                            Toutes les fonctionnalités OOPS en C++ comme l'abstraction, l'encapsulation, l' héritage , etc. le rendent plus digne et utile pour les programmeurs.
                                        </li>
                                        <li class="list-group-item">
                                            C++ prend en charge et autorise les opérateurs définis par l'utilisateur (c'est-à-dire la surcharge d'opérateur ) et
                                            la surcharge de fonctions y est également prise en charge.
                                        </li>
                                        <li class="list-group-item">
                                            La gestion des exceptions est présente en C++.
                                        </li>
                                        <li class="list-group-item">
                                            Le concept de fonctions virtuelles ainsi que les constructeurs et destructeurs d'objets.
                                        </li>
                                        <li class="list-group-item">
                                            Les variables peuvent être déclarées n'importe où dans le programme en C++, mais doivent être déclarées avant d'être utilisées.
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <!-- Contenu de l'onglet Les Variable -->
                                <div class="tab-pane fade active" id="o1" role="tabpanel" aria-labelledby="onglet1">
                                    <h3 style="text-align: center;">Les Variables</h3>
                                    <br>
                                    <p>
                                        Les variables sont utilisées en C++, lorsque nous avons besoin de stocker une valeur quelconque, qui changera dans le programme.
                                        <br>
                                        Les variables peuvent être déclarées de plusieurs façons, chacune ayant des besoins en mémoire et un fonctionnement différents.
                                        <br>
                                        La variable est le nom de l'emplacement mémoire alloué par le compilateur en fonction du type de données de la variable.
                                    </p>
                                    <br>
                                    <h4>Les Differents Types de Variables</h4>
                                    <p>
                                        Chaque variable lors de sa déclaration doit être dotée d'un type de données, dont dépend la mémoire affectée à la variable.
                                        <br>
                                        Les différents type de variables possibles sont :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span style="color: red;">bool</span>, pour les variables stockant des booléens (vrai/faux)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">int</span>, pour les variables stockant des entiers (0, 1, 2, 3, 4, ...)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">float</span>, pour les variables stockant des décimaux (1.1, 5.3, 6.2, 9.7, ...)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">char</span>, pour les variables stockant un caractère
                                        </li>
                                    </ul>
                                    <br>
                                    Pour utiliser des chaines de caractère, il existe 2 methodes :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            On créé un tableau de char :
                                            <br>
                                            <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                                

                                                    char Nom_du_tableau[Nombre_d_elements]
                                                    <br>
                                                    <br>
                                                    Exemple :
                                                    <br>
                                                    char Chaine[20+1];<br>

                                                    Chaine[0]= 'B';<br>
                                                    Chaine[1]= 'o';<br>
                                                    Chaine[2]= 'n';<br>
                                                    Chaine[3]= 'j';<br>
                                                    Chaine[4]= 'o';<br>
                                                    Chaine[5]= 'u';<br>
                                                    Chaine[6]= 'r';<br>
                                                    Chaine[7]= '\0';<br>
                                                
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            On import le fichier string.h pour pouvoir creer des chaines de caracteres d'un seul coup
                                            <br>
                                            <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                                #include "string.h"
                                            </div>
                                            <br>
                                            <br>
                                            Ce qui permet de creer des chaines :
                                            <br>
                                            <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                                string nom_de_la_variable = "bonjour !";
                                            </div>
                                        </li>

                                    </ul>
                                    </p>
                                </div>
                                <!-- Contenu de l'onglet Les bases -->
                                <div class="tab-pane fade" id="o2" role="tabpanel" aria-labelledby="onglet2">
                                    <h3 style="text-align: center;">Les Bases</h3>
                                    <br>
                                    <p>
                                        Les variables doivent être déclarées avant d'être utilisées. <br>
                                        En général, il est préférable de les déclarer au début du programme, mais en C++, elles peuvent également être déclarées au milieu du programme,
                                        mais doivent être déclarées avant leur utilisation.
                                        <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i; // déclaré mais non initialisé<br>
                                            char c;<br>
                                            int i, j, k; // Déclaration multiple<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    L'initialisation consiste à attribuer une valeur à une variable déjà déclarée, <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i; // déclaration<br>
                                            i = 10; // initialisation<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    L'initialisation et la déclaration peuvent également être effectuées en une seule étape, <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i=10; //initialisation et déclaration dans la même étape<br>
                                            int i=10, j=11;<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    Si une variable est déclarée et n'est pas initialisée par défaut, elle contiendra une valeur résiduelle.
                                    De même, si une variable est déclarée une fois et que l'on essaie de la déclarer à nouveau, on obtiendra une erreur de compilation.
                                    <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i,j;<br>
                                            i=10;<br>
                                            j=20;<br>
                                            int j=i+j; //erreur de compilation, ne peut pas redéclarer une variable dans la même portée<br>
                                        
                                    </div>
                                    </p>

                                    <br>
                                    <h4>Les Variables globales</h4>
                                    <br>
                                    <p>
                                        Les variables globales sont celles qui sont déclarées une fois et qui peuvent être utilisées pendant toute la durée du programme par n'importe quelle classe ou fonction.
                                        <br>
                                        Elles doivent être déclarées en dehors de la fonction main(). Si elles sont déclarées une seule fois, on peut leur attribuer des valeurs différentes à différents moments de la vie du programme.
                                        <br>
                                        Mais même s'ils sont déclarés et initialisés en même temps en dehors de la fonction main(), on peut leur attribuer n'importe quelle fonction.
                                        <br>
                                        <br>
                                        Exemple :
                                        <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            include "iostream"<br>
                                            using namespace std;<br>
                                            int x; // Variable globale déclarée<br>
                                            int main()<br>
                                            {<br>
                                            x=10; // Initialisé une seule fois<br>
                                            cout &lt;&lt;"first value of x="&lt;&lt; x;<br>
                                            x=20;                 // Initialisé à nouveau<br>
                                        cout &lt;&lt;" Initialized again with value="&lt;&lt; x;<br>
                                    }<br>
                                
                                </div>
                                    </p>
                                    <br>
                                    <h4>Les Variables locales</h4>
                                    <br>
                                    <p>
                                    Les variables locales sont les variables qui n'existent qu'entre les accolades, dans lesquelles elles sont déclarées. 
                                    <br>
                                    En dehors de ces accolades, elles ne sont pas disponibles et entraînent une erreur de compilation.
                                    <br>
                                    Exemple :
                                    <br>
                                    <div style=" border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                                
                                                    include "iostream"<br>
                                                    using namespace std;<br>
                                                    int main()<br>
                                                    {
                                                        <br>
                                                    int i=10;<br>
                                                    if( i &lt; 20) // si la condition est vrai<br>
                                                        {<br>
                                                        int n=100; // Variable locale déclarée et initialisée<br>
                                                        } // fin de la fonction if<br>
                                                        cout &lt;&lt; n; // Erreur de compilation, n non disponible ici<br>
                                                            }<br>
                                                
                                    </div>
                                    </p>
                                    <br>
                                    <h4>Quelques types particuliers de variables</h4>
                                    <p>
                                        Il y a aussi quelques mots-clés spéciaux, pour donner des caractéristiques uniques aux variables du programme.
                                        <br>
                                        <br>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span style="color: red;">Final</span>, Une fois initialisée, sa valeur ne peut être modifiée
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">Static</span>, Ces variables conservent leur valeur entre les appels de fonction
                                        </li>
                                    </ul>
                                    </p>

                                </div>
                                <!-- Contenu de l'onglet Les Tableaux -->
                                <div class=" tab-pane fade" id="o3" role="tabpanel" aria-labelledby="onglet3">
                                    En cours de création !
                                </div>
                                <!-- Contenu de l'onglet Les Structures -->
                                <div class="tab-pane fade" id="o4" role="tabpanel" aria-labelledby="onglet4">
                                    En cours de création !
                                </div>
                                <!-- Contenu de l'onglet Les Pointeurinfs -->
                                <div class="tab-pane fade" id="o5" role="tabpanel" aria-labelledby="onglet5">
                                    En cours de création !
                                </div>
                                <!-- Contenu de l'onglet Les Classes -->
                                <div class="tab-pane fade" id="o6" role="tabpanel" aria-labelledby="onglet6">
                                    En cours de création !
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    </section>



    <?php
    require_once "footer.php";
    ?>


</body>

</html>