<!DOCTYPE HTML>
<html>
<body >
<center><h2>Validation d'un lecteur </h2></center>

<br>

<?php
include("cnx.php");
$validate =$nom=$prenom=$adresse=$ville=$zip=$motdepasse='';
if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["adresse"]) || empty($_POST["ville"])|| empty($_POST["zip"])|| empty($_POST["motdepasse"]))
    {
        $validate='0';
    }
else 
{
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$ville=$_POST["ville"];
$zip=$_POST["zip"]; 
$validate='1';
$motdepasse= $_POST["motdepasse"]; 
$stmt=$pdo->prepare("insert into lecteurs(lecnom,lecprenom,lecadresse,lecville,leccodepostal,lecmotdepasse) values(:lecnom,:lecprenom,:lecadresse,:lecville,:leccodepostal,:lecmotdepasse)");
$stmt->bindParam(':lecnom',$nom);
$stmt->bindParam(':lecprenom',$prenom);
$stmt->bindParam(':lecadresse',$adresse);
$stmt->bindParam(':lecville',$ville);
$stmt->bindParam(':leccodepostal',$zip);
$stmt->bindParam(':lecmotdepasse',$motdepasse);
$stmt->execute();

}
?>
<?php if($validate='0'){ ?>
<h3> il faut remplir tous les champs </h3>
    <?php } ?>
    <?php if($validate='1'){ ?>
    <table>
    <tr> 
     <td>  Nom      : </td>
    <td>   <h3 style=" color:#29d657 ;"><?php echo $nom ; ?> </h3> </td>
    </tr>
      <tr> <td> Prenom     : </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $prenom;?> </h3> </td></tr>
      <tr> <td> Adresse    :</td>  <td>    <h3 style=" color:#29d657 ;"> <?php echo $adresse;?> </h3></td></tr>
      <tr><td>  Ville      : </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $ville; ?></h3></td></tr>
       <tr>  <td>Code postal: </td>  <td>   <h3 style=" color:#29d657 ;"><?php echo $zip ;?></h3></td></tr>
    <?php } ?>
<br> <br>
pour faire une identifiation cliquer <a href='loginform.php '>ici  </a>
</body>
</html>
