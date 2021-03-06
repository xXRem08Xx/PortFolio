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
                                        C++ est un langage de programmation compil?? permettant la programmation sous de multiples paradigmes,
                                        dont la programmation proc??durale, la programmation orient??e objet et la programmation g??n??rique.
                                        Ses bonnes performances, et sa compatibilit?? avec le C en font un des langages de programmation les plus
                                        utilis??s dans les applications o?? la performance est critique.
                                    </p>
                                    <br>
                                    <h4>Avantages du C++ par rapport au langage C </h4>
                                    <p>
                                        La principale diff??rence ??tant le concept OOPS, C++ est un langage orient?? objet alors que C est un langage proc??dural.
                                        <br>
                                        En-dehors de cela, il existe de nombreuses autres fonctionnalit??s de C ++ qui donnent ?? ce langage un avantage sur le langage C :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Il existe une v??rification de type plus forte en C++.
                                        </li>
                                        <li class="list-group-item">
                                            Toutes les fonctionnalit??s OOPS en C++ comme l'abstraction, l'encapsulation, l' h??ritage , etc. le rendent plus digne et utile pour les programmeurs.
                                        </li>
                                        <li class="list-group-item">
                                            C++ prend en charge et autorise les op??rateurs d??finis par l'utilisateur (c'est-??-dire la surcharge d'op??rateur ) et
                                            la surcharge de fonctions y est ??galement prise en charge.
                                        </li>
                                        <li class="list-group-item">
                                            La gestion des exceptions est pr??sente en C++.
                                        </li>
                                        <li class="list-group-item">
                                            Le concept de fonctions virtuelles ainsi que les constructeurs et destructeurs d'objets.
                                        </li>
                                        <li class="list-group-item">
                                            Les variables peuvent ??tre d??clar??es n'importe o?? dans le programme en C++, mais doivent ??tre d??clar??es avant d'??tre utilis??es.
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <!-- Contenu de l'onglet Les Variable -->
                                <div class="tab-pane fade active" id="o1" role="tabpanel" aria-labelledby="onglet1">
                                    <h3 style="text-align: center;">Les Variables</h3>
                                    <br>
                                    <p>
                                        Les variables sont utilis??es en C++, lorsque nous avons besoin de stocker une valeur quelconque, qui changera dans le programme.
                                        <br>
                                        Les variables peuvent ??tre d??clar??es de plusieurs fa??ons, chacune ayant des besoins en m??moire et un fonctionnement diff??rents.
                                        <br>
                                        La variable est le nom de l'emplacement m??moire allou?? par le compilateur en fonction du type de donn??es de la variable.
                                    </p>
                                    <br>
                                    <h4>Les Differents Types de Variables</h4>
                                    <p>
                                        Chaque variable lors de sa d??claration doit ??tre dot??e d'un type de donn??es, dont d??pend la m??moire affect??e ?? la variable.
                                        <br>
                                        Les diff??rents type de variables possibles sont :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span style="color: red;">bool</span>, pour les variables stockant des bool??ens (vrai/faux)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">int</span>, pour les variables stockant des entiers (0, 1, 2, 3, 4, ...)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">float</span>, pour les variables stockant des d??cimaux (1.1, 5.3, 6.2, 9.7, ...)
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">char</span>, pour les variables stockant un caract??re
                                        </li>
                                    </ul>
                                    <br>
                                    Pour utiliser des chaines de caract??re, il existe 2 methodes :
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            On cr???? un tableau de char :
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
                                        Les variables doivent ??tre d??clar??es avant d'??tre utilis??es. <br>
                                        En g??n??ral, il est pr??f??rable de les d??clarer au d??but du programme, mais en C++, elles peuvent ??galement ??tre d??clar??es au milieu du programme,
                                        mais doivent ??tre d??clar??es avant leur utilisation.
                                        <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i; // d??clar?? mais non initialis??<br>
                                            char c;<br>
                                            int i, j, k; // D??claration multiple<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    L'initialisation consiste ?? attribuer une valeur ?? une variable d??j?? d??clar??e, <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i; // d??claration<br>
                                            i = 10; // initialisation<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    L'initialisation et la d??claration peuvent ??galement ??tre effectu??es en une seule ??tape, <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i=10; //initialisation et d??claration dans la m??me ??tape<br>
                                            int i=10, j=11;<br>
                                        
                                    </div>
                                    <br>
                                    <br>
                                    Si une variable est d??clar??e et n'est pas initialis??e par d??faut, elle contiendra une valeur r??siduelle.
                                    De m??me, si une variable est d??clar??e une fois et que l'on essaie de la d??clarer ?? nouveau, on obtiendra une erreur de compilation.
                                    <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            int i,j;<br>
                                            i=10;<br>
                                            j=20;<br>
                                            int j=i+j; //erreur de compilation, ne peut pas red??clarer une variable dans la m??me port??e<br>
                                        
                                    </div>
                                    </p>

                                    <br>
                                    <h4>Les Variables globales</h4>
                                    <br>
                                    <p>
                                        Les variables globales sont celles qui sont d??clar??es une fois et qui peuvent ??tre utilis??es pendant toute la dur??e du programme par n'importe quelle classe ou fonction.
                                        <br>
                                        Elles doivent ??tre d??clar??es en dehors de la fonction main(). Si elles sont d??clar??es une seule fois, on peut leur attribuer des valeurs diff??rentes ?? diff??rents moments de la vie du programme.
                                        <br>
                                        Mais m??me s'ils sont d??clar??s et initialis??s en m??me temps en dehors de la fonction main(), on peut leur attribuer n'importe quelle fonction.
                                        <br>
                                        <br>
                                        Exemple :
                                        <br>
                                    <div style="border: 1px solid silver;background-color: lightgray;display: inline-block;">
                                        

                                            include "iostream"<br>
                                            using namespace std;<br>
                                            int x; // Variable globale d??clar??e<br>
                                            int main()<br>
                                            {<br>
                                            x=10; // Initialis?? une seule fois<br>
                                            cout &lt;&lt;"first value of x="&lt;&lt; x;<br>
                                            x=20;                 // Initialis?? ?? nouveau<br>
                                        cout &lt;&lt;" Initialized again with value="&lt;&lt; x;<br>
                                    }<br>
                                
                                </div>
                                    </p>
                                    <br>
                                    <h4>Les Variables locales</h4>
                                    <br>
                                    <p>
                                    Les variables locales sont les variables qui n'existent qu'entre les accolades, dans lesquelles elles sont d??clar??es. 
                                    <br>
                                    En dehors de ces accolades, elles ne sont pas disponibles et entra??nent une erreur de compilation.
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
                                                        int n=100; // Variable locale d??clar??e et initialis??e<br>
                                                        } // fin de la fonction if<br>
                                                        cout &lt;&lt; n; // Erreur de compilation, n non disponible ici<br>
                                                            }<br>
                                                
                                    </div>
                                    </p>
                                    <br>
                                    <h4>Quelques types particuliers de variables</h4>
                                    <p>
                                        Il y a aussi quelques mots-cl??s sp??ciaux, pour donner des caract??ristiques uniques aux variables du programme.
                                        <br>
                                        <br>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <span style="color: red;">Final</span>, Une fois initialis??e, sa valeur ne peut ??tre modifi??e
                                        </li>
                                        <li class="list-group-item">
                                            <span style="color: red;">Static</span>, Ces variables conservent leur valeur entre les appels de fonction
                                        </li>
                                    </ul>
                                    </p>

                                </div>
                                <!-- Contenu de l'onglet Les Tableaux -->
                                <div class=" tab-pane fade" id="o3" role="tabpanel" aria-labelledby="onglet3">
                                    En cours de cr??ation !
                                </div>
                                <!-- Contenu de l'onglet Les Structures -->
                                <div class="tab-pane fade" id="o4" role="tabpanel" aria-labelledby="onglet4">
                                    En cours de cr??ation !
                                </div>
                                <!-- Contenu de l'onglet Les Pointeurinfs -->
                                <div class="tab-pane fade" id="o5" role="tabpanel" aria-labelledby="onglet5">
                                    En cours de cr??ation !
                                </div>
                                <!-- Contenu de l'onglet Les Classes -->
                                <div class="tab-pane fade" id="o6" role="tabpanel" aria-labelledby="onglet6">
                                    En cours de cr??ation !
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