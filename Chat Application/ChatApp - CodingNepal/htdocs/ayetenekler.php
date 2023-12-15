<?php
include('verit.php');
ob_start();

 
$id=@$_GET["id"];
$data=$db ->prepare("select * from yetenekler where id=?");
$data ->execute([

 $id

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<style>
	/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --primary-color: #0E4BF1;
    --panel-color: #FFF;
    --text-color: #000;
    --black-light-color: #707070;
    --border-color: #e6e5e5;
    --toggle-color: #DDD;
    --box1-color: #4DA3FF;
    --box2-color: #FFE6AC;
    --box3-color: #E7D1FC;
    --title-icon-color: #fff;
    
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
}

body{
    min-height: 100vh;
    background-color: var(--primary-color);
}
body.dark{
    --primary-color: #3A3B3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
    --box2-color: #3A3B3C;
    --box3-color: #3A3B3C;
    --title-icon-color: #CCC;
}
/* === Custom Scroll Bar CSS === */
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
    background: #0b3cc1;
}

body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover{
    background: #3A3B3C;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}
nav.close{
    width: 73px;
}
nav .logo-name{
    display: flex;
    align-items: center;
}
nav .logo-image{
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img{
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name{
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}
nav.close .logo_name{
    opacity: 0;
    pointer-events: none;
}
nav .menu-items{
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.menu-items li{
    list-style: none;
}
.menu-items li a{
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before{
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}
body.dark li a:hover:before{
    background-color: var(--text-color);
}
.menu-items li a i{
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}
.menu-items li a .link-name{
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);    
    transition: var(--tran-05);
}
nav.close li a .link-name{
    opacity: 0;
    pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name{
    color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name{
    color: var(--text-color);
}
.menu-items .logout-mode{
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}
.menu-items .mode{
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.menu-items .mode-toggle{
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.mode-toggle .switch{
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}
.switch:before{
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}
body.dark .switch:before{
    left: 20px;
}

.dashboard{
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 100vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}
nav.close ~ .dashboard{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top{
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle{
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}
.dashboard .top .search-box{
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}
.top .search-box input{
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}
.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}
.top img{
    width: 40px;
    border-radius: 50%;
}
.dashboard .dash-content{
    padding-top: 50px;
}
.dash-content .title{
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}
.dash-content .title i{
    position: relative;
    height: 35px;
    width: 35px;
    background-color: var(--primary-color);
    border-radius: 6px;
    color: var(--title-icon-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}
.dash-content .title .text{
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}
.dash-content .boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.dash-content .boxes .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
}
.boxes .box i{
    font-size: 35px;
    color: var(--text-color);
}
.boxes .box .text{
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box .number{
    font-size: 40px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box.box2{
    background-color: var(--box2-color);
}
.boxes .box.box3{
    background-color: var(--box3-color);
}
.dash-content .activity .activity-data{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.activity .activity-data{
    display: flex;
}
.activity-data .data{
    display: flex;
    flex-direction: column;
    margin: 0 15px;
}
.activity-data .data-title{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
}
.activity-data .data .data-list{
    font-size: 18px;
    font-weight: 400;
    margin-top: 20px;
    white-space: nowrap;
    color: var(--text-color);
}

@media (max-width: 1000px) {
    nav{
        width: 73px;
    }
    nav.close{
        width: 250px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 1;
        pointer-events: auto;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 1;
        pointer-events: auto;
    }
    nav ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard{
        left: 250px;
        width: calc(100% - 250px);
    }
    nav ~ .dashboard .top{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top{
        left: 250px;
        width: calc(100% - 250px);
    }
    .activity .activity-data{
        overflow-X: scroll;
    }
}

@media (max-width: 780px) {
    .dash-content .boxes .box{
        width: calc(100% / 2 - 15px);
        margin-top: 15px;
    }
}
@media (max-width: 560px) {
    .dash-content .boxes .box{
        width: 100% ;
    }
}
@media (max-width: 400px) {
    nav{
        width: 0px;
    }
    nav.close{
        width: 73px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav ~ .dashboard{
        left: 0;
        width: 100%;
    }
    nav.close ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav ~ .dashboard .top{
        left: 0;
        width: 100%;
    }
    nav.close ~ .dashboard .top{
        left: 0;
        width: 100%;
    }
}
* {box-sizing:border-box;}

 .container {
   width: 250px !important; 
   background-color: #ddd; 
   border-radius: 20px;
   padding: 0px !important;
  
 }
.skills {
   
   padding-top: 10px; 
   padding-bottom: 10px; 
   border-radius: 20px;
   
   background-color: #0E4BF1;
 }
 .overview p{
    color:var(--text-color);
 }
 @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");




.table {
	border-spacing: 0 15px;
	border-collapse: separate;
    
}
.table th{
    color:var(--text-color);
}
.table thead tr th,
.table thead tr td,
.table tbody tr th,
.table tbody tr td {
	vertical-align: middle;
	border: none;
    
}
.table thead tr th,
.table thead tr td,
.table tbody tr th,
.table tbody tr td{
	text-align: center;
    
}
.table tbody tr {
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	border-radius: 5px;
    
}
.table tbody tr td {
	background-color: var(--panel-color);
    color: var(--text-color);

}
.table tbody tr td:nth-child(1) {
	border-radius: 5px 0 0 5px;
}
.table tbody tr td:nth-last-child(1) {
	border-radius: 0 5px 5px 0;
}



.active-circle {
	height: 10px;
	width: 10px;
	border-radius: 10px;
	margin-right: 5px;
	display: inline-block;
}


 .main {
     background-color: #FFFFFF;
     width: 400px;
     height: 400px;
     margin: 7em auto;
     border-radius: 1.5em;
     box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
     display: none;
 }

 .sign {
     padding-top: 40px;
     color: #8C55AA;
     font-family: 'Ubuntu', sans-serif;
     font-weight: bold;
     font-size: 23px;
 }

 .un {
 width: 76%;
 color: rgb(38, 50, 56);
 font-weight: 700;
 font-size: 14px;
 letter-spacing: 1px;
 background: rgba(136, 126, 126, 0.04);
 padding: 10px 20px;
 border: none;
 border-radius: 20px;
 outline: none;
 box-sizing: border-box;
 border: 2px solid rgba(0, 0, 0, 0.02);
 margin-bottom: 50px;
 margin-left: 46px;
 text-align: center;
 margin-bottom: 27px;
 font-family: 'Ubuntu', sans-serif;
 }

 form.form1 {
     padding-top: 40px;
 }

 .pass {
         width: 76%;
 color: rgb(38, 50, 56);
 font-weight: 700;
 font-size: 14px;
 letter-spacing: 1px;
 background: rgba(136, 126, 126, 0.04);
 padding: 10px 20px;
 border: none;
 border-radius: 20px;
 outline: none;
 box-sizing: border-box;
 border: 2px solid rgba(0, 0, 0, 0.02);
 margin-bottom: 50px;
 margin-left: 46px;
 text-align: center;
 margin-bottom: 27px;
 font-family: 'Ubuntu', sans-serif;
 }


 .un:focus, .pass:focus {
     border: 2px solid rgba(0, 0, 0, 0.18) !important;

 }

 .submit {
   cursor: pointer;
     border-radius: 5em;
     color: #fff;
     background: linear-gradient(to right, #ec6f66 , #f3a183
);
     border: 0;
     padding-left: 40px;
     padding-right: 40px;
     padding-bottom: 10px;
     padding-top: 10px;
     font-family: 'Ubuntu', sans-serif;
     margin-left: 35%;
     font-size: 13px;
     box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
 }

 .forgot {
     text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
     color: #E1BEE7;
     padding-top: 15px;
 }

 form .form1 a {
     text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
     color: #E1BEE7;
     text-decoration: none;
 }

 @media (max-width: 600px) {
     .main {
         border-radius: 0px;
     }}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>İdris Akgül | Computer Programming</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/FAVİCON1.png">
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">İdris Akgül</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="adminpanel.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Anasayfa</span>
                </a></li>
                <li><a href="aprojeler.php">
                    <i class="uil uil-files-landscapes" ></i>
                    <span class="link-name" >Projeler</span>
                </a></li>
                <li><a href="areferanslar.php">
                <i class="uil uil-users-alt"></i>
                    <span class="link-name">Referanslar</span>
                </a></li>
                <li><a href="amesajlar.php">
                <i class="uil uil-comments"></i>
                  
                    <span class="link-name">Mesajlar</span>
                </a></li>
                <li><a href="abloglar.php">
                <i class="uil  uil-blogger-alt"></i>
                    <span class="link-name">Bloglar</span>
                </a></li>
                <li><a href="ayetenekler.php">
                <i class="uil uil-chart" style="color:#0E4BF1 !important"></i>
                    
                    <span class="link-name" style="color:#0E4BF1 !important">Yetenekler</span>
                </a></li>
                <li><a href="aalanlar.php">
                <i class="uil uil-chart-pie-alt"></i>
                    
                    <span class="link-name">Alanlar</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
            <li><a href="aprofil.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profil</span>
                </a></li>
                <li><a href="index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <?php
if ($_POST) {
    $ad=htmlspecialchars($_POST["ad"]);
    $oran=htmlspecialchars($_POST["oran"]);
   
    if (empty($ad) || empty($oran)) {
        echo '<p class="alert alert-warning">Boş Alan Var</p>';
    }
    else{
$veriekle = $db -> prepare("INSERT INTO yetenekler SET ad=?,oran=?");
$veriekle ->execute([
$ad,
$oran



]);
if ($veriekle) {
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
    header("REFRESH:2;URL=ayetenekler.php");
}
else {
    echo '<p class="alert alert-danger">Kayıt Başarısız NO.</p>';
    header("REFRESH:2;URL=ayetenekler.php");
}
    }
}

?>

    <div class="main" id="main">
      <p class="sign" align="center">Yetenek Ekle </p>
      <form class="form1" action="" method="post">
        <input class="un " type="text" align="center" placeholder="Yetenek Adı:" name="ad">
        <input class="pass" type="text" align="center" placeholder="Yetenek Oranı:" name="oran">
        <input type="submit" value="Ekle" class="submit">
        
      </div>
   
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

         
            
        <div onclick="tıklaaç()" style="border:0px;border-radius: 50%;"><img src="img/plus.png" alt=""></a> </div>  
        <script>
            function tıklaaç(){
                var secilenID = document.getElementById('main');
         
          if (secilenID.style.display == "none") {
            secilenID.style.display = "inline-block";
          secilenID.style.position="fixed";
          secilenID.style.left="50%";
          secilenID.style.zIndex="1111";
            
    
           
          } else {
            secilenID.style.display = "none";
          }


            }
        </script>
        </div>



       
        <div class="dash-content">
            <div class="overview" >
                <div class="title">
                <i class="uil uil-chart"></i>
                    <span class="text">Yetenekler</span>
                </div>
                <table class="table">
				<thead>
					<tr>
						<th>Yetenekler</th>
						<th>Oran</th>
						<th>Bar</th>
						<th>Edit</th>
						<th>Sil</th>
						
					</tr>
				</thead>
				<tbody>
                    <?php
				$query = $db->query("select * from yetenekler ", PDO::FETCH_ASSOC);
foreach ($query as $row)
{
				echo'	<tr>
						<td>
						
								
								
									<h5 class="mb-0">'.$row["ad"].'</h5>
								
								
							
						</td>
						<td>
                        <p class="text-muted mb-0">'.$row["oran"].'%'.'</p>
						</td>
						<td><div class="container">
   <div class="skills" style="width: '.$row["oran"].'%;"></div>
 </div></td>
						
                        <td>
							<div class="dropdown open">
							<a href="ayetenekedit.php?id='.$row["id"].'" class="px-2" id="triggerId2" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
                                   <i class="fa fa-pencil mr-1"> </i>   
								</a>
							</div>
						</td>
                        <td>
							<div class="dropdown open">
								<a href="ayeteneksil.php?id='.$row["id"].'" class="px-2" id="triggerId2" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
                                        <i class="fa fa-trash mr-1"></i>
								</a>
							</div>
						</td>
					
					</tr>';
                }
                    ?>
                   
				</tbody>
			</table>
          
        </div>
    </section>
<script>
	const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

</script>
    <!--<script src="script.js"></script>-->
</body>
</html>
<?php
ob_end_flush();
?>