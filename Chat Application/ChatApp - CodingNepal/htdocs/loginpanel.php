
<?php
include('verit.php');
ob_start();
$id=1;
$data=$db ->prepare("select * from me where id=?");
$data ->execute([

 $id

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        :root {
    --body_gradient_left: #7200D0;
    --body_gradient_right: #C800C1;
    --form_bg: #ffffff;
    --input_bg: #E5E5E5;
    --input_hover: #eaeaea;
    --submit_bg: #1FCC44;
    --submit_hover: #40e263;
    --icon_color: #6b6b6b;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    /* make the body full height*/
    height: 100vh;
    /* set our custom font */
    font-family: 'Roboto',
        sans-serif;
    /* create a linear gradient*/
    background-image: linear-gradient(to right, var(--body_gradient_left), var(--body_gradient_right));
    display: flex;
}

#form_wrapper {
    width: 1000px;
    height: 700px;
    /* this will help us center it*/
    margin: auto;
    background-color: var(--form_bg);
    border-radius: 50px;
    /* make it a grid container*/
    display: grid;
    /* with two columns of same width*/
    grid-template-columns: 1fr 1fr;
    /* with a small gap in between them*/
    grid-gap: 5vw;
    /* add some padding around */
    padding: 5vh 15px;
}

#form_left {
    /* center the image */
    display: flex;
    justify-content: center;
    align-items: center;
}

#form_left img {
    width: 350px;
    height: 350px;
}

#form_right {
    display: grid;
    /* single column layout */
    grid-template-columns: 1fr;
    /* have some gap in between elements*/
    grid-gap: 20px;
    padding: 10% 5%;
}

h1,
span {
    text-align: center;
}

.input_container {
    background-color: var(--input_bg);
    /* vertically align icon and text inside the div*/
    display: flex;
    align-items: center;
    padding-left: 20px;
}

.input_container:hover {
    background-color: var(--input_hover);
}

.input_container,
#input_submit {
    height: 60px;
    /* make the borders more round */
    border-radius: 30px;
    width: 100%;
}

.input_field {
    /* customize the input tag with lighter font and some padding*/
    color: var(--icon_color);
    background-color: inherit;
    width: 90%;
    border: none;
    font-size: 1.3rem;
    font-weight: 400;
    padding-left: 30px;
}

.input_field:hover,
.input_field:focus {
    /* remove the outline */
    outline: none;
}

#input_submit {
    /* submit button has a different color and different padding */
    background-color: var(--submit_bg);
    padding-left: 0;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
}

#input_submit:hover {
    background-color: var(--submit_hover);
    /* simple color transition on hover */
    transition: background-color,
        1s;
    cursor: pointer;
}

/* shift it a bit lower */
#create_account {
    display: block;
    position: relative;
    top: 30px;
}

a {
    /* remove default underline */
    text-decoration: none;
    color: var(--submit_bg);
    font-weight: bold;
}

a:hover {
    color: var(--submit_hover);
}

i {
    color: var(--icon_color);
}

/* make it responsive */
@media screen and (max-width:768px) {

    /* make the layout  a single column and add some margin to the wrapper */
    #form_wrapper {
        grid-template-columns: 1fr;
        margin-left: 10px;
        margin-right: 10px;
    }
    /* on small screen we don't display the image */
    #form_left {
        display: none;
    }
}
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>İdris Akgül | Computer Programming</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/FAVİCON1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
</head>

<body>
    <div id="form_wrapper">
        <div id="form_left">
            <img src="img/icon.png" alt="computer icon">
        </div>
        <form action="" method="post">
        <div id="form_right">
            <h1>Admin-Panel Girişi</h1>
            <p class="text-center mb-0" style="color:black">BU GİRİŞ SADECE SİTE SAHİPLERİNE AİTTİR.</p>
            <div class="input_container" style="margin-top: 50px;">
                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="text" name="user" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="sifre" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Giriş Yap" id='input_submit' class='input_field'>

         
        </div>
        <?php
 if ($_POST) {
 $user = $_POST["user"];
 $sifre = $_POST["sifre"];


      if ($user==$_data["adminuser"] && $sifre==$_data["adminpas"])
      {
        echo '<p class="alert alert-success" style="color:green;text-align:center">Giriş Başarılı! Yönlendiriliyorsunuz....</p>';
        header("Refresh:2; url=adminpanel.php");
    }
      
      else
      {
        echo '<p class="alert alert-danger" style="color:red;text-align:center">Yanlış Bilgiler Lütfen Tekrar Deneyiniz.</p>';
        header("Refresh:2; url=loginpanel.php");
      }
  }

?>
</form>
        

    
    </div>
</body>

</html>
<?php
ob_end_flush();
?>