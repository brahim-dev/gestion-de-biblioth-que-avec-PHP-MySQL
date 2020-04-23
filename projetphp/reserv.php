<?php

$auteurn=$auteurp=$titre=$categorie=$isbn=$livcod=$user='';

    $livcod=$_GET['livcod'];
    $auteurn=$_GET['auteurn'];
    $auteurp=$_GET['auteurp'];
    $titre=$_GET['titre'];
    $categorie=$_GET['categorie'];
    $isbn=$_GET['isbn'];
    $user=$_GET['user'];


   

?>

<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb" >
<center><h2>Reservation d'un livre </h2></center>

<br>
vous desirez reserver le livre suivant : 

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> code de livre  :</td>
<td>  <?php echo $livcod; ?> </td>
</tr>
<tr>
<td> Nome de l'auteur :</td>
<td>  <?php echo $auteurn; ?>  </td>
</tr>
<tr>
<td> Prenom de l'auteur :</td>
<td>  <?php echo $auteurp; ?> </td>
</tr>
<tr>
<td> Titre :</td>
<td>  <?php echo $titre ; ?> </td>
</tr>
<tr>
<td> Categorie:</td>
<td>  <?php echo $categorie ;?> </td>
</tr>
<tr>
<td> ISBN :</td>
<td>  <?php  echo $isbn; ?>  </td>
</tr>

</table>
<div align="center">
 <a href='confirm.php?livcod=<?php echo $livcod;?>&user=<?php echo $user;?>&isbn=<?php echo $isbn;?>'>
  <button>Confirmer</button>
 </a>
</div>

</body>
</html>
