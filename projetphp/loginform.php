<!DOCTYPE HTML>
<html>
<style>
.error {color: #FF0000;}
</style>
<body bgcolor="87ceeb">
<center><h2>Authentification de lecteur</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<?php $nameErr=""; ?>
<form action="login.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Nom de lecteur :</td>
<td> <input type="text" name="nomL" size="38" required>   </td>
</tr>
<tr>
<td> mot de passe :</td>
<td> <input type="text" name="passe" size="38" required>   </td>
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