<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice4-user</title>
  </head>
  <body>
    <?php
      if(!empty($_POST['firstname']) && !empty($_POST['name'])){
        echo 'Bonjour ' . $_POST['firstname'] . ' ' . $_POST['name'] ;
      }else{
        echo 'données mal saisis';
      }
    ?>
  </body>
</html>
