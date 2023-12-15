<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapperr">
    <section  class="form login">
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
      <header >Coded-Chat</header>
        <div class="error-text"></div>
        <div class="field input">
        <!--  <label>E-mail</label> -->
          <input type="text" name="email" placeholder="E-mail" required>
        </div>
        <div class="field input">
       <!--     <label>Şifre:</label> -->
          <input type="password" name="password" placeholder="Şifre" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="CodedVerse'e Giriş Yap">
        </div>
      
      <div class="link">Hesabınız Yokmu? <a href="index.php">Kayıt Olun!</a></div>
      </form>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
