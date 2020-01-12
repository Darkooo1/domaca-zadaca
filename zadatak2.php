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
         Kreirati program koji ispisuje tablicu množenja 15x15  <br> <br>

          <?php

echo "<table border >"; //otvaranje tablice

    
    echo "<tr style='font-weight: bold;'>";
        echo "<td >15*15</td> ";
        for ($stupac=1; $stupac <= 15; $stupac++) {
            echo "<td>$stupac</td> ";
        }
    echo "</tr>";

    for ($red=1; $red <= 15; $red++) {  
        echo "<tr> ";

        //prvi stupac
        echo "<td style='font-weight: bold;'>$red</td>";

        for ($stupac=1; $stupac <= 15; $stupac++) {
            $p = $stupac * $red; 
            echo "<td>$p</td> ";
        }

        echo "</tr>";
    }
echo "</table>"; //zatvaranje tablice
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