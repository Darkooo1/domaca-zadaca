
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
           Rezultat:  

 <?php
if(isset($_POST['check']))
{
$a=$_POST['lower'];
$b=$_POST['upper'];
$c=0;
for($a;$a<$b;$a++)
{
for($j=2;$j<$a;$j++)
{
if($a%$j==0)
{
$c=1;
}
}
if($c==0)
{
echo " ".$a." ";
}
$c=0;
}
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

