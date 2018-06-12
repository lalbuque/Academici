
<?php

$host ="localhost";
$user = "Admin";
$pass ="admin";
$banco="academici";
$con = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($con,$banco) or die (mysqli_error());

?>

<?php

$pergunta1 = $_POST ['pergunta1'];
 $pergunta2 = $_POST ['pergunta2'];
 $pergunta3 = $_POST ['pergunta3'];
$pergunta4 = $_POST ['pergunta4'];
$pergunta5 = $_POST ['pergunta5'];
$pergunta6 = $_POST ['pergunta6'];
$pergunta7 = $_POST ['pergunta7'];
 $pergunta8 = $_POST ['pergunta8'];
$pergunta9 = $_POST ['pergunta9'];
$pergunta10 = $_POST ['pergunta10'];
$pergunta11 = $_POST ['pergunta11'];
$pergunta12 = $_POST ['pergunta12'];
$pergunta13 = $_POST ['pergunta13'];
 $pergunta14 = $_POST ['pergunta14'];
  $pergunta15 = $_POST ['pergunta15'];
$pergunta16 = $_POST ['pergunta16'];
$pergunta17 = $_POST ['pergunta17'];
$pergunta18 = $_POST ['pergunta18'];
$pergunta19 = $_POST ['pergunta19'];
$pergunta20 = $_POST ['pergunta20'];
$pergunta21 = $_POST ['pergunta21'];
$pergunta22 = $_POST ['pergunta22'];
$pergunta23 = $_POST ['pergunta23'];


$result =mysqli_query($con, "INSERT INTO questionario (pergunta1, 
pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, 
pergunta9, pergunta10, pergunta11, pergunta12, pergunta13, pergunta14,
 pergunta15, pergunta16, pergunta17, pergunta18, pergunta19, pergunta20, pergunta21, pergunta22, pergunta23) VALUES ('$pergunta1','$pergunta2', 
'$pergunta3',
 '$pergunta4', '$pergunta5', '$pergunta6', '$pergunta7', '$pergunta8', '$pergunta9',
  '$pergunta10', '$pergunta11', '$pergunta12', '$pergunta13', '$pergunta14', '$pergunta15', '$pergunta16',
  '$pergunta17', '$pergunta18', '$pergunta19', '$pergunta20', '$pergunta21', '$pergunta22', '$pergunta23')");

mysqli_close($con);
?> 


