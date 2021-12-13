<?php

$a = 5;
$b = 2;
echo $a;

echo $b;
$i = $a + $b;
echo $i; 
echo '<br>';

//  Exercice 6  
echo '<h2> Exercice 6 </h2>';
echo '<br>'; 

echo 'Saisir un nombre pour obtenir son carré';
$a = 3;
$a = $a*$a;
echo '<br>';
echo $a;
echo '<br>';

// Exercice 7 
echo '<h2> Exercice 7 </h2>';
echo '<br>'; 
$h = 3;
$t = 1.20;
$n = 4;
$pt = (($h*$t)+$h)*$n;

echo 'le prix total TTC est '. $pt;


echo '<br>';

// Exercice 8 
echo '<h2> Exercice 8 </h2>';
echo '<br>'; 

$g = -6;
if ($g >= 0) {
    echo 'ce nombre est positif';
}
 else  {echo "Ce nombre est négatif";}

echo '<br>';

//  Exercice 9 

echo '<h2> Exercice 9 </h2>';
echo '<br>'; 
$a = 6;

if ($a == 0) {
    echo 'Ce nombre est 0';
}
else if ($a > 0) {
    echo " Ce nombre est positif";}

else {
    echo "Ce nombre est négatif ";
}

//  Exercice 10

echo '<h2> Exercice 10 </h2>';
echo '<br>'; 

$a = 12;

if ($a<=7) {
    # code... 
    echo 'Poussin';
}
elseif ($a<=9) {
    # code...
    echo 'Pupille';
}
     
elseif ($a<=11) {
    # code...
    echo 'Minime';
}

else {
    echo 'Cadet';
}

//  Exercice 11

echo '<h2> Exercice 11 </h2>';
echo '<br>'; 

$h = 22;
$m = 59;

if ($m==59) { $m=0;
    if ($h==23)
     {$h=0;
        # code...
    } else {$h=$h+1;
        # code...
    }
    
} else {$m=$m+1;
    # code...
}

{
    echo 'Dans une minute, il sera '. $h.' heure '. $m. ' minutes ';
}


//  Exercice 12

echo '<h2> Exercice 12 </h2> <br> ';

$h = 22;
$m = 55;
$s = 36;

if ($s==59) {$s=0;

    if ($m==59) {$sm=0;

        if ($h==23) {$h=0;}
          
        else {$h=$h+1;}}

    else {$m=$m+1;}

    }

else {$s=$s+1;}

echo 'Dans une minute, il sera '. $h.' heure '. $m. ' minutes '. $s. ' secondes ';


// exercice 13

echo '<h2> Exercice 13 </h2> <br> ';

$np = 50;
$pt = 0;
for ($i =1; $i <=$np ; $i++) { 
   if ($i <= 10) {
       $pt= $pt +0.10;
   } elseif ($i <= 30) { 
      $pt = $pt +0.09;
   }
   else {
       $pt = $pt+0.08;
   }
}

echo "Le prix total est de ".  $pt . " €";

//  exercice 15

echo '<h2> Exercice 15 </h2> <br> ';
$n = 6;

for ($i =1 ; $i <=10 ; $i++) {
    echo ($n + $i);
}

//  exercice 16

echo '<h2> Exercice 16 </h2> <br> ';

$nb = 8;

for ($i=1; $i <=10 ; $i++) { 
    $rs= $nb* $i; 
    echo $nb . "X" . $i . "=" . $rs . '<br>';
}

//  exercice 17 

echo '<h2> Exercice 17 </h2> <br> ';


for ($i=1; $i <=10 ; $i++) { 
   echo "Saisir le nombre numéro" . $i;
   $nbr = rand(0,100);
   echo $nbr;
   echo '<br>';
 if ($i==1) {
   $nombreplusgrand = $nbr; 
}
    if  ($nbr> $nombreplusgrand) {
        $nombreplusgrand = $nbr;
    }
}
echo "Le plus grand de ces nombres est : " . $nombreplusgrand;

for ($i=1; $i <=10 ; $i++);

echo "Saisir le nombre numéro" . $i;
$nbr = rand(0,100);
echo $nbr;
echo '<br>';
if ($i=1) {
  $nombreplusgrand = $nbr; $p = $i ;
}

