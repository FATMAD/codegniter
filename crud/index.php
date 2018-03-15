
<!DOCTYPE html>
<html>
<body>
<?php
$tab= array('nom' => 'fatma'  , 'prenom'=> 'dhibi' ,'age' => array('A' =>5 , 'f'=> 30));
$dir    = 'temp';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
$m ="FATMA";
//var_dump(isset($m));


//$s=print_r($files1);
//$d=print_r($files2);
var_dump(isset($m));
$ss=var_export($tab);
?>

<h1>
<?php
var_dump(isset($m));
var_dump($tab);

echo "My first PHP script!" . $ss ."djghghf". $d . "hhh";
?>
 </h1>
 <pre>
 	<?php 

 	print_r($m);
 	?>
  </pre>

</body>
</html>