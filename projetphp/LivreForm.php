<!DOCTYPE HTML>
<html>
<style>
.error {color: #FF0000;}
select, option {
    width: 277px;
    height:25px;
}

option {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
</style>
<body bgcolor="87ceeb">
<center><h2>Enrigistrement d'un livre</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->

<form action="ValideLivre.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Nom de l'auteur :</td>
<td> <input type="text" name="auteurn" size="38">   </td>
</tr>
<tr>
<td> Prennom de l'auteur :</td>
<td> <input type="text" name="auteurp" size="38">   </td>
</tr>
<tr>
<td> Titre :</td>
<td> <input type="text" name="titre" size="38">   </td>
</tr>
<tr>
<td> Categorie :</td>
<td >
<select name="categorie" > 
<option value="Roman">Roman</option>
<option value=" Science-fiction"> Science-fiction</option>
<option value="Policier">Policier</option> 
</select>
 </td>
</tr>
<tr>
<td> Numero ISBN :</td>
<td> <input type="text" name="isbn" size="38">   </td>
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