<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Fight</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <form action="index_post.php" method="post">
      <p>
        Nom : <input type="text" name="name" maxlength="50" />
        <input type="submit" value="Créer ce personnage" name="creer" />
      </p>
    </form>
  </body>
</html> -->
<!DOCTYPE html>
<html>
  <head>
    <title>Fight</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <form action='index_post.php' method='POST'>
      <input type="text" name="nom">
      <select name='type'>
        <option value="magicien">Magicien</option>
        <option value="guerrier">Guerrier</option>
      </select>
      <input type="submit" name="envoi">
    </form>