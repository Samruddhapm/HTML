<html>
<?php
$names = array("athiraa","swathi","anu","meena","sneha");
asort($names);
echo"<h3>ascending order(asort):</h3>";
foreach($names as $n){ 
echo $n."<br>";
}
arsort($names);
echo"<h3>descending order(asort):</h3>";
foreach($names as $n){
 echo $n."<br>";
 }

?>
</html>
