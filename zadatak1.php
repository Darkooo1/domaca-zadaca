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
          Kreirati program koji unosi 24 broja, ispisuje njihov zbroj, najmanji i  najveći uneseni broj.<br> <br>

          <?php 

function maksimum($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
  

function minimum($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 

$array = array(12, 42, 213, 434, 2345, 3, 87 ,65.5, 32, 43, 93, 32.221, 43954, 1, 98, 543, 43, 854, 123, 432.22, 1.5, 32, 555555, 54.555); 
echo '<pre>';
echo 'Uneseni brojevi su:';
echo '</pre>';
print_r($array);
echo '<pre>';
echo 'Maksimalni broj je:';
echo '</pre>';
echo(maksimum($array)); 
echo '<pre>';
echo 'Minimalni broj je:';
echo '</pre>';
echo(minimum($array)); 


echo '<pre>';
echo "Zbroj svih brojeva je: "; 
echo '</pre>';
echo array_sum($array) . "\n";


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