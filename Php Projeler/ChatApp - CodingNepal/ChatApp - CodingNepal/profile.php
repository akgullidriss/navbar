<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
?>
<?php include_once "header.php"; ?>
<style>
html {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
*,
*::before,
*::after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}

:root {
    --primary-bg: #171717;
    --secondary-bg: #262626;
    --accent-bg: #4f46e5;

    --primary-color: #fff;
    --secondary-color: rgba(255,255,255, 70%);
    --accent-color: #818cf8;

    --border-color: rgba(255,255,255, 30%);
    
    --username-size: 32px;
    --title-size: 28px;
    --subtitle: 24px;
}

body {
    background-image: url(/images/banner.jpg);
    background-size: cover;
	
}

/* ---------- body element's */
.container {
    height: 70vh;
    backdrop-filter: blur(20px);
    
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-card {
    width: clamp(428px, 990px, 990px);
    height: 700px;
    background-color: var(--primary-bg);
    border-radius: 0px;
    border: 2px solid var(--accent-bg);
 margin-top: 120px;
    display: grid;
    grid-template-rows: 220px auto;
    overflow: auto;
}
/* ------ profile header section */
.profile-header {
    background: url('/images/banner.jpg') center;
    background-size: cover;
    margin: 15px;
    border-radius: 30px 30px 0 0;
    position: relative;
}
    .main-profile {
        display: flex;
        align-items: center;
        position: absolute;
        inset: calc(100% - 75px) auto auto 70px;
    }
        .profile-image {
            width: 150px;
            height: 150px;
            background: url('/images/profile-image.jpg') center;
            background-size: cover;
            border-radius: 50%;
            border: 10px solid var(--primary-bg);
        }
        .profile-names {
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: var(--primary-color);
            background-color: var(--primary-bg);
            padding: 10px 30px;
            border-radius: 0 50px 50px 0;
            transform: translateX(-10px);
        }
            .page-title {
                color: var(--secondary-color);
            }

/* ------- profile body header */
.profile-body {
    display: grid;
    grid-template-columns: 150px auto;
    gap: 70px;
    padding: 70px;
}
    .profile-actions {
        display: grid;
        grid-template-rows: repeat(2, max-content) auto;
        gap: 10px;
        margin-top: 30px;
    }
    .profile-actions button {
        all: unset;
        padding: 10px;
        color: var(--primary-color);
        border: 2px solid var(--accent-bg);
        text-align: center;
        border-radius: 10px;
    }
        .profile-actions .follow {background-color: var(--accent-bg)}
    .bio {
        color: var(--primary-color);
        background-color: var(--secondary-bg);
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 10px;
        border-radius: 10px;
    }
        .bio-header {
            display: flex;
            gap: 10px;
            border-bottom: 1px solid var(--border-color);
            color: var(--secondary-color);
        }
    .account-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 2fr 1fr;
        gap: 20px;
    }
        .data {
            grid-area: 1/1/2/3;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: var(--secondary-color);
            padding: 30px;
            text-align: center;
            border: 1px solid var(--border-color);
            border-radius: 15px;
        }
            .important-data {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .other-data {
                display: flex;
                justify-content: space-between;
                align-items: center;

                background-color: var(--secondary-bg);
                padding: 15px;
                border-radius: 10px;
            }
            .data-item .value {
                color: var(--accent-color);
            }
                .important-data .value {
                    font-size: var(--title-size);
                }
                .other-data .value {
                    font-size: var(--subtitle);
                }
        .social-media {
            grid-area: 2/1/3/3;
            background-color: var(--secondary-bg);
            color: var(--secondary-color);
            padding: 15px;
            border-radius: 10px;

            display: flex;
            align-items: center;
            gap: 15px;
        }
            .media-link {
                text-decoration: none;
                color: var(--accent-color);
                font-size: var(--subtitle);
            }
        .last-post {
            grid-area: 1/3/3/4;
            border: 1px solid var(--border-color);
            background-color: var(--secondary-bg);
            border-radius: 10px;
            padding: 10px;

            display: grid;
            grid-template-rows: 70% auto max-content;
            gap: 10px;
        }
            .post-cover {
                position: relative;
                background: url('/images/last-post.jpg') center;
                background-size: cover;
                border-radius: 5px;
            }
                .last-badge {
                    position: absolute;
                    inset: 3px 3px auto auto;
                    background-color: rgba(0,0,0, 70%);
                    color: var(--primary-color);
                    padding: 5px;
                    border-radius: 3px;
                }
            .post-title {
                color: var(--primary-color);
                font-size: 18px;
            }
            .post-CTA {
                all: unset;
                text-align: center;
                border: 1px solid var(--accent-color);
                color: var(--accent-color);
                border-radius: 5px;
                padding: 5px;
            }

/* ------------ media queries */
@media screen and (max-width: 950px) {
    .last-post {
        display: none;
    }
    .data, .social-media {
        grid-column: 1/4;
    }
}


@media screen and (max-width: 768px) {
    .profile-card {
        height: 730px;
        margin-top: 200px;
        border-radius: 0;
    }
        .profile-header {
            border-radius: 0;
        }
            .main-profile {
                inset: calc(100% - 75px) auto auto 50%;
                transform: translateX(-50%);

                flex-direction: column;
                text-align: center;
            }
                .profile-names {transform: translateX(0)}
        .profile-body {
            grid-template-columns: 1fr;
            gap: 20px;
        }
            .profile-actions {
                grid-template-columns: repeat(2, 1fr);
                margin-top: 90px;
            }
                .bio {grid-column: 1/3;}

            .data {gap: 20px;}
}
::-webkit-scrollbar {
        display: none;
        visibility: hidden;
        opacity: 0
}
</style>
<body style=" align-items: baseline; justify-content: baseline;">





<div class="container">

<div class="profile-card">
	<div class="profile-header"><!-- profile header section -->
		<img src="php/images/banner.jpg" alt="" style="width: 100%;height: 200px;border-radius: 40px;">
		<div class="main-profile">
			<div class="profile-image">
				<img src="php/images/<?php echo $row['img']?>" alt="" style="width: 100%;height: 100%;border-radius: 50%;">
			</div>
			<div class="profile-names">
				<h1 class="username"><?php echo $row['fname'].$row['lname'] ?></h1>
				<small class="page-title"><?php echo $row['email']?></small>
			</div>
		</div>
	</div>

	<div class="profile-body"><!-- profile body section -->
		<div class="profile-actions">
			<button class="follow">Follow</button>
			<button class="message">Message</button>
			<section class="bio">
				<div class="bio-header">
					<i class="fa fa-info-circle"></i>
					Bio
				</div>
				<p class="bio-text">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit.
				</p>
			</section>
		</div>

		<div class="account-info">
			<div class="data">
				<div class="important-data">
					<section class="data-item">
						<h3 class="value">104</h3>
						<small class="title">Post</small>
					</section>
					<section class="data-item">
						<h3 class="value">21K</h3>
						<small class="title">Follower</small>
					</section>
					</section>
					<section class="data-item">
						<h3 class="value">51</h3>
						<small class="title">Following</small>
					</section>
				</div>
				<div class="other-data">
					<section class="data-item">
						<h3 class="value">41K</h3>
						<small class="title">Likes</small>
					</section>
					<section class="data-item">
						<h3 class="value">12K</h3>
						<small class="title">Comments</small>
					</section>
					<section class="data-item">
						<h3 class="value">2K</h3>
						<small class="title">Saved</small>
					</section>
				</div>
			</div>

			<div class="social-media" style="align-items:center;">
			
				<a href="" class="media-link"><i class="fab fa-facebook-square"></i></a>
				<a href="https://twitter.com/MammadSahragard" class="media-link"><i class="fab fa-twitter-square"></i></a>
				<a href="https://www.linkedin.com/in/mohammadsahragard/" class="media-link"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.instagram.com/mammad.sahragard/" class="media-link"><i class="fab fa-instagram-square"></i></a>
				<a href="https://github.com/MohammadSahragard" class="media-link"><i class="fab fa-github-square"></i></a>
			</div>

			<div class="last-post">
				<div class="post-cover">
				<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
 Hesap Sil
</button>
				</div>
				<h3 class="post-title">3D layer</h3>
				<button class="post-CTA">View</button>
			</div>
		</div>
	</div>
</div>

</div>




<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Hesabınızı Silmek Üzeresin Emin Misiniz!</h3>
            <?php echo ' <a href="usersdelete.php?user_id='. $row['unique_id'] .'">    <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
             Evet
                </button></a> ';?>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Hayır</button>
            </div>
        </div>
    </div>
</div>
















<div class="fixed z-50 w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-l-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <a href="home.php">
        <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            <span class="sr-only">Anasayfa</span>
</a>
        </button>
        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Anasayfa
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button data-tooltip-target="tooltip-wallet" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <a href="searchh.php"> 
        <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>   </svg>
            <span class="sr-only">Ara</span>
</a>
        </button>
        <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ara
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="flex items-center justify-center">
            <button data-tooltip-target="tooltip-new" type="button" class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"></path>
                </svg>
                <span class="sr-only">New item</span>
            </button>
        </div>
        <div id="tooltip-new" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Create new item
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button data-tooltip-target="tooltip-settings" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <a href="medya.php">
        <svg class="w-7 h-8 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>
            <span class="sr-only">Medya</span>
</a>
        </button>
        <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Medya
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
       
          <button data-tooltip-target="tooltip-profile" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-r-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
          <a href="profile.php"> 
    
          <img src="php/images/<?php echo $row['img']; ?>" alt="" style="width:30px;height:30px;border-radius:50%">
            <span class="sr-only">Profil</span>
              </a> 
        </button>

        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Profil
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        
    </div>
</div>

</body>
<html>