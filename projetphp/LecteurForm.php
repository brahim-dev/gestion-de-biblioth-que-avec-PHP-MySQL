<!DOCTYPE HTML>
<html>
<style>
.error {color: #FF0000;}
</style>
<body bgcolor="87ceeb">
<center><h2>Enrigistrement d'un lecteur</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->

<form action="ValideLecteur.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Nom :</td>
<td> <input type="text" name="nom" size="38">   </td>
</tr>
<tr>
<td> Prénom :</td>
<td> <input type="text" name="prenom" size="38">   </td>
</tr>
<tr>
<td> Adresse :</td>
<td> <input type="text" name="adresse" size="38">   </td>
</tr>
<tr>
<td> Ville :</td>
<td> <input type="text" name="ville" size="38">   </td>
</tr>
<tr>
<td> Code postale: </td>
<td> <input type="text" name="zip" size="38">   </td>
</tr>
<tr>
<td> mot de passe : </td>
<td> <input type="passeword" name="motdepasse" size="38">   </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="Enregistrer">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>