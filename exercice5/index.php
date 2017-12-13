<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice5</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <select name="type">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
      </select>
      <label>Nom : <input type="texte" name="name"/></label>
      <label>Prénom : <input type="texte" name="firstname"/></label>
      <input type="submit" name="send"/>
    </form>
    <?php
      if(!empty($_POST['firstname']) && !empty($_POST['name']) && !empty($_POST['type'])){
        echo 'Bonjour ' . $_POST['type'] . ' ' .  $_POST['firstname'] . ' ' . $_POST['name'] ;
      }else{
      }
    ?>
  </body>
</html>
