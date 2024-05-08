<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../STYLE/style1.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Connexion à mon gestionnaire</header>
        <form action="../CONFIGURATION/traitement.php" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" required placeholder="Login" name="login">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Mot de passe" name="password">
          </div>
          <div class="pass">
            <a href="#">Mot de passe oublé ?</a>
          </div>
          <div class="field">
            <input type="submit" value="Se connecter">
          </div>
        </form>
        <div class="login">Or login with</div>
        <div class="links">
          <div class="facebook">
            <i class="fab fa-facebook-f"><span>Facebook</span></i>
          </div>
          <div class="instagram">
            <i class="fab fa-instagram"><span>Google</span></i>
          </div>
        </div>
        <div class="signup">Vous n'avez pas de compte ?
          <a href="#">Inscrivez-vous maintenant</a>
        </div>
      </div>
    </div>

  </body>
</html>
