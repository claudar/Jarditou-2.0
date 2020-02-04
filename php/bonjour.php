<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
  
  // require('fonc.php');

//     $bonjour = "Bonjour le monde"; 
	
//     echo "<b>$bonjour\n</b>"; 
//     echo "$bonjour\n"; 
    
//     $a = "Winter"; 
	
// echo $a . " is coming !"; 

// $couleur[] = "red";
	
// $couleur[] = "blue";
	
// $couleur[] = "white";
	
// $couleur[] = "black";

// echo $couleur[0];

	
 
	
// function somme() { 
	
//   global $a, $b; 
	
//   $b = $a + $b; 
	
// } 
	
 
	
// somme(); 
	
 
	
// echo $b."<br>";  

// function bonjour($prenom, $nom) 
// {
//    echo "Bonjour ".$prenom." ".$nom;
// }

 
// bonjour("dave", "loper");

// function addition($entier1, $entier2) 
// {
//     $resultat = $entier1 + $entier2;
//    return $resultat;
// }

// $resultat = addition(1, 2);
 
// echo $resultat; // affichera 3

// $age = 19;

// echo ismineur($age);

// function calculPrix($prix_ht, $remise) 
// {                 
//     $base_ht = $prix_ht - $remise;
//     $prix_ttc = $base_ht * 1.20; 
//     $retour = array($base_ht, $prix_ttc);
 
//     return $retour; 
// }   
//  $retour = function calculPrix(110, 10);
 
// echo"- Base HT : ".$retour["base_ht"]." €<br>"; // affiche 100 €
// echo"- Prix TTC : ".$retour["prix_ttc"]." €<br>"; // affiche 120 € 


// excercice calculette

// $nbr1 = 10;
//     $nbr2 = 5;
//     $op = "*"; //ici je choisi l'operateur + mais j'aurais pu choisir un autre operateur en fonction de l'operation que je veux effectuer 
   
//     echo calculator($nbr1, $nbr2, $op);


<form action="fonc.php" method="post">
   Votre e-mail : <input type="text" name="email">
   <input type="hidden" name="secret" value="valeur cachée">
   <input type="submit" value="Envoyer">
</form> 

?> 
</body>
</html>