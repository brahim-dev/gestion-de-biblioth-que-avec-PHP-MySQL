<!DOCTYPE HTML>
<html>
<style>
.error {color: #FF0000;}
</style>
<body bgcolor="87ceeb" >
<center><h1>Gestion de lecteur</h1></center>
<?php
include("login.php");
if( !isset($_SESSION['nomL'])){
echo" le lecteur n'est pa reconnu<br>";
echo" Cliquer <a href=\"loginform.php\">Ici </a> pour tanter une nouvelle identification ";
include("LecteurForm.php");
}
else 
{
include("cnx.php");
$user=$_SESSION["codL"];
echo"le lecteur  $user est  reconu ";

$stm=$pdo->prepare("select * from livres where livdejareserve = 0 ");
$stm->execute();
$rs=$stm->fetchAll();
?>
<center><h2>Voila la liste des auvrages disponible à la reservation : </h2></center>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<?php echo " <tr>  <td> Code Livre  </td>  <td> Nom auteur </td> <td> Prenom auteur   </td>  <td> Titre </td> <td> Categorie </td>  <td> ISBN  </td> <td>  </td>  </tr>" ;

foreach($rs as $r)
{
    echo " <tr>  <td> $r[0]  </td>  <td>  $r[1] </td> <td>  $r[2]   </td>  <td>  $r[3] </td> <td> $r[4] </td>  <td>  $r[5]  </td> <td> <a href='reserv.php?livcod=".$r[0]."&auteurn=".$r[1]."&auteurp=".$r[2]."&titre=".$r[3]."&categorie=".$r[4]."&isbn=".$r[5]."&user=".$user."'>reserver</a> </td>  </tr>" ;  
}
?>
</table>
<center><h2>Voila la liste de vos reservations : </h2></center>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<?php
$stmt=$pdo->prepare("select empcodelivre,livnomaut,livprenomaut,livtitre,livcategorie,livISBN  from emprunts e,livres l where empnumlect = $user and e.empcodelivre=l.livcode ");
$stmt->execute();
$res=$stmt->fetchAll();
echo " <tr>  <td> Code Livre  </td>  <td> Nom auteur </td> <td> Prenom auteur   </td>  <td> Titre </td> <td> Categorie </td>  <td> ISBN  </td>   </tr>" ;

foreach($res as $row)
{
    echo " <tr>  <td> $row[0]  </td>  <td>  $row[1] </td> <td>  $row[2]   </td>  <td>  $row[3] </td> <td> $row[4] </td><td> $row[5] </td>   </tr>" ;  
}
?>
<?php } ?>

</body>
</html>