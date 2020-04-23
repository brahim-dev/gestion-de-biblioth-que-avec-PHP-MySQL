<!DOCTYPE HTML>
<html>
<body >
<center><h2>Confirmation de votre reservation </h2></center>

<br>

<?php
include("cnx.php");



$empnumlect=$_GET['user'];
$isbn=$_GET['isbn'];

$empnum = $empnumlect+$isbn ;
$empcodelivre=$_GET['livcod'];
$date = new DateTime();
$empdate=$date->format('Y/m/d');
$date2 = new DateTime();
$date2->modify('+5 day');
$empdateret= $date2->format('Y/m/d');
$stmt=$pdo->prepare("insert into emprunts values(:empnum,:empdate,:empdateret,:empcodelivre,:empnumlect)");
$stmt->bindParam(':empnum',$empnum);
$stmt->bindParam(':empdate',$empdate);
$stmt->bindParam(':empdateret',$empdateret);
$stmt->bindParam(':empcodelivre',$empcodelivre);
$stmt->bindParam(':empnumlect',$empnumlect);
$stmt->execute();
$st=$pdo->prepare("update livres set livdejareserve=1 where livcode =:livcode");
$st->bindParam(':livcode',$empcodelivre);
$st->execute();
?>
Votre reservation est confirmé sous le numero : <b><?php echo $empnum;?> </b>
    <table>
    <tr> 
     <td>  Date de reservation     : </td>
    <td>   <h3 ><?php echo $empdate ; ?> </h3> </td>
    </tr>
      <tr> <td>  Date de retour      :</td>  <td>   <h3 style=" color:red;"><?php echo $empdateret;?> </h3> </td></tr>
  </table>    
vous pouvez revenir à la liste des livres disponible à la reservation en cliquant <a href='GestionLecteur.php'>Ici </a>

</body>
</html>
