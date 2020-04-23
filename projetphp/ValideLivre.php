<!DOCTYPE HTML>
<html>
<body >
<center><h2>Validation d'un livre </h2></center>

<br>

<?php
include("cnx.php");
$validate =$auteurn=$auteurp=$titre=$categorie=$isbn=$livcod='';
if (empty($_POST["auteurn"]) || empty($_POST["auteurp"]) || empty($_POST["titre"]) || empty($_POST["isbn"]))
    {
        $validate='0';
    }
else 
{
$auteurn=$_POST["auteurn"];
$auteurp=$_POST["auteurp"];
$titre=$_POST["titre"];
$categorie=$_POST["categorie"];
$isbn=$_POST["isbn"]; 
$livcod=substr($auteurn, 0,2).substr($auteurp, 0,2).substr($categorie, 0,2).substr($isbn, -2);
$validate='1';
$stmt=$pdo->prepare("insert into livres(livcode,livnomaut,livprenomaut,livtitre,livcategorie,livISBN) values(:livcode,:livnomaut,:livprenomaut,:livtitre,:livcategorie,:livISBN)");
$stmt->bindParam(':livcode',$livcod);
$stmt->bindParam(':livnomaut',$auteurn);
$stmt->bindParam(':livprenomaut',$auteurp);
$stmt->bindParam(':livtitre',$titre);
$stmt->bindParam(':livcategorie',$categorie);
$stmt->bindParam(':livISBN',$isbn);
$stmt->execute();

}
?>
<?php if($validate='0'){ ?>
<h3> il faut remplir tous les champs </h3>
    <?php } ?>
    <?php if($validate='1'){ ?>
    <table>
    <tr> 
     <td>  Nom  de l'auteur    : </td>
    <td>   <h3 style=" color:#29d657 ;"><?php echo $auteurn ; ?> </h3> </td>
    </tr>
      <tr> <td> Prenom de l'auteur     : </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $auteurp;?> </h3> </td></tr>
      <tr> <td> titre    :</td>  <td>    <h3 style=" color:#29d657 ;"> <?php echo $titre;?> </h3></td></tr>
      <tr><td>  Categorie      : </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $categorie; ?></h3></td></tr>
       <tr>  <td>isbn: </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $isbn ;?></h3></td></tr>
    <?php } ?>

</body>
</html>
