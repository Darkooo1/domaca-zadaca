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
          Kreirati program koji za dva unesena broja ispisuje sve prim brojeve između njih.<br> <br>

          <?php
 error_reporting(0);		
 $a=$_POST['lower'];
 $b=$_POST['upper'];	
 
 ?>	
	
<br>
Unesi dva cijela broja<br><br>
<form method="post" action="primarnibr.php" name="primarni">

Prvi broj   <input type="text" name="lower" 
	 size="5" value="<?php echo $a; ?>" autofocus>
     	 	 
Drugi broj   <input type="text" name="upper" 
	 size="5" value="<?php echo $b; ?>">
<br><br>
<input type="submit" name="check" value="Ok">
     	 	 	

</form>
    



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