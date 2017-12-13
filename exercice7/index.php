<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exercice7</title>
</head>
<body>
  <?php
  if(!empty($_POST['firstname']) && !empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['file'])){
    echo 'Bonjour ' . $_POST['type'] . ' ' .  $_POST['firstname'] . ' ' . $_POST['name'] . ' votre fichier est : ' . $_POST['file'] ;
  }
  else{
    ?>
    <form action="index.php" method="post">
      <select name="type">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
      </select>
      <!-- pour chaque input je vérifie en php que le champs existe et si c'est le cas je désigne la value comme étant la dernière valeur saisi -->
      <label>Nom : <input type="texte" name="name" value="<?php if (isset($_POST['name'])){echo $_POST['name'];} ?>"></label>
      <label>Prénom : <input type="texte" name="firstname" value="<?php if (isset($_POST['firstname'])){echo $_POST['firstname'];} ?>"/></label>
      <label>Prénom : <input type="file" name="file"/></label>
      <input type="submit" name="send"/>
    </form>
    <?php
  }
  ?>
</body>
</html>
