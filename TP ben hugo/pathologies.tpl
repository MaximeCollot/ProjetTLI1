<!DOCTYPE html>
<html lang="fr"> 

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="desktop.css" media="screen and (min-width: 641px)">
  <link rel="stylesheet" href="print.css" media="print" />
  <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 640px)">
  <title>Pathologies acupuncture</title>
</head>

<table>

  <header>
 
    <nav>

      <a href="index.php?item=home" tabindex="1">Accueil</a>
      <a href="index.php?item=patho" tabindex="2" accesskey="2">Pathologies</a>
      <a href="index.php?item=info" tabindex="3">Informations</a>

    </nav>
  </header>

  
  <form action="login.php">
    <label for="login">Login&nbsp;:</label>
    <input type="text" title="login" placeholder="Login" required>
    <label for="password">Mot de passe&nbsp;:</label>
    <input type="password" title="password" placeholder="Mot de passe" required>
    <input type="submit" value="Submit">
  </form> 

  <a href="createaccount.html" tabindex="3">Créer un compte</a>



  <h1>Pathologies</h1>

  {foreach from=$list_patho item=patho}
    <strong>{$patho}</strong><br />

  {/foreach}
  <footer>
    Copyright TALBOT-NARDIN 2017
  </footer>

</body>



</html>