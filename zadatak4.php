<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
 <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>DOMAĆA ZADAĆA</h1>

<?php require_once 'predlozak/izbornik.php'; ?>

<!-- Početak tijela -->
<div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
          Keirati program koji unosi dvije matrice 4x4 te ispisuje njihov zbroj <br> <br>

          <?php 

function zbroj(&$a, &$b, &$c) 
{ 
    $N = 4; 
    for ($i = 0; $i < $N; $i++) 
    { 
        for ($j = 0; $j < $N; $j++) 
        { 
            $c[$i][$j] = 0; 
            for ($k = 0; $k < $N; $k++) 
                $c[$i][$j] += $a[$i][$k] +  
                                $b[$k][$j]; 
        } 
    } 
} 
  

$a = [[1, 2, 3, 4], 
              [2, 3, 4, 2], 
              [33, 21, 11, 13], 
              [3, 44, 32, 78]]; 
              echo 'Prva matrica:';
              echo '<pre>';
              print_r($a);
              echo '</pre>';
  
$b = [[12, 1, 32, 12], 
              [87, 56, 3, 5], 
              [4, 5, 6, 8], 
              [8, 8, 4, 3]]; 
              echo 'Druga matrica:';
              echo '<pre>';
              print_r($b);
              echo '</pre>';
  
zbroj($a, $b, $c); 
$N = 4; 
echo ("Zbroj 4x4 matrica je: \n"); 
for ($i = 0; $i < $N; $i++) 
{ 
    for ($j = 0; $j < $N; $j++) 
    { 
        echo ($c[$i][$j]); 
        echo(" "); 
    } 
    echo ("\n"); 
} 

?> 


          </div>
        </div>
      </div>


<!-- Kraj tijela -->
<?php require_once 'predlozak/podnozje.php'; ?>
        </div>
      </div>

    </div>
    <?php require_once 'predlozak/skripte.php'; ?>
  </body>
</html>