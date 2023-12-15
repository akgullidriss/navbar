<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<style>
		* {
  margin: 0;
  box-sizing: border-box;
}

html {
  scroll-snap-type: y mandatory;
}

body {
  color: white;
  background-color: white;
  height: 100vh;
  display: grid;
  place-items: center;
}

.app__videos {
  position: relative;
  height: 750px;
  background-color: red;
  overflow: scroll;
  width: 100%;
  max-width: 400px;
  scroll-snap-type: y mandatory;
  border-radius: 20px;
}

.app__videos::-webkit-scrollbar {
  display: none;
}

.app__videos {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.video {
  position: relative;
  height: 100%;
  width: 100%;
  background-color: black;
  scroll-snap-align: start;
}

.video__player {
  object-fit: cover;
  width: 100%;
  height: 100%;
  margin-bottom: -30px;
}

@media (max-width: 425px) {
  .app__videos {
    width: 100%;
    height: 100%;
    max-width: 100%;
    border-radius: 0;
  }
}

/* video header */

.videoHeader {
  position: absolute;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.videoHeader * {
  padding: 20px;
}

/* video footer */

.videoFooter {
  position: relative;
  bottom: 100px;
  margin-left: 20px;
}

.videoFooter__text {
  position: absolute;
  bottom: 0;
  color: white;
  display: flex;
  align-items: center;
  margin-bottom: 45px;
}

.user__avatar {
  border-radius: 50%;
  width: 50px;
  height: 50px;
}

.videoFooter__text h3 {
  margin-left: 10px;
}

.videoFooter__text h3 button {
  color: white;
  font-weight: 900;
  text-transform: inherit;
  background: rgba(0, 0, 0, 0.5);
  border: none;
  padding: 5px;
}

.videoFooter__ticker {
  width: 60%;
  margin-left: 30px;
  margin-bottom: 20px;
  height: fit-content;
}

.videoFooter__ticker marquee {
  font-size: 12px;
  padding-top: 7px;
  color: white;
}

.videoFooter__ticker .material-icons {
  position: absolute;
  left: 5px;
  color: white;
}

.videoFooter__actions {
  display: flex;
  position: absolute;
  width: 95%;
  justify-content: space-between;
  color: white;
}

.videoFooter__actionsLeft .material-icons {
  padding: 0 7px;
  font-size: 1.6em;
}

.videoFooter__actionsRight .material-icons {
  font-size: 25px;
}

.videoFooter__actionsRight {
  display: flex;
}

.videoFooter__stat {
  display: flex;
  align-items: center;
  margin-right: 10px;
}

.videoFooter__stat p {
  margin-left: 3px;
}
	</style>
 
<body style=" align-items: baseline; justify-content: baseline;padding:0px !important;">
		
<div class="app__videos">
      <div class="video">
        <!-- header starts -->
        <div class="videoHeader">
          <span class="material-icons back-icon"> arrow_back </span>
          <h3>CodedVerse</h3>
          <span class="material-icons"> camera_alt </span>
        </div>
        <!-- header ends -->

        <video class="video__player" src="#"></video>

        <!-- footer starts -->
        <div class="videoFooter">
          <div class="videoFooter__text">
            <img class="user__avatar" src="http://localhost/Php%20Projeler/ChatApp%20-%20CodingNepal/ChatApp%20-%20CodingNepal/php/images/1686939650idris.jpg" alt="" />
            <h3>idrissakgull • <button>Follow</button></h3>
          </div>

          <div class="videoFooter__ticker">
            <span class="material-icons"> music_note </span>
            <marquee>Emre Aydın-Hoşçakal</marquee>
          </div>

          <div class="videoFooter__actions">
            <div class="videoFooter__actionsLeft">
              <span class="material-icons"> favorite </span>
              <span class="material-icons"> mode_comment </span>
              <span class="material-icons"> send </span>
              <span class="material-icons"> more_horiz </span>
            </div>
            <div class="videoFooter__actionsRight">
              <div class="videoFooter__stat">
                <span class="material-icons"> favorite </span>
                <p>12</p>
              </div>
              <div class="videoFooter__stat">
                <span class="material-icons"> mode_comment </span>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer ends -->
      </div>

      <div class="video">
        <!-- header starts -->
        <div class="videoHeader">
          <span class="material-icons"> arrow_back </span>
          <h3>Reels</h3>
          <span class="material-icons"> camera_alt </span>
        </div>
        <!-- header ends -->

        <video class="video__player" src="video2.mp4"></video>

        <!-- footer starts -->
        <div class="videoFooter">
          <div class="videoFooter__text">
            <img class="user__avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
            <h3>Somanath Goudar • <button>Follow</button></h3>
          </div>

          <div class="videoFooter__ticker">
            <span class="material-icons"> music_note </span>
            <marquee>Song Name</marquee>
          </div>

          <div class="videoFooter__actions">
            <div class="videoFooter__actionsLeft">
              <span class="material-icons"> favorite </span>
              <span class="material-icons"> mode_comment </span>
              <span class="material-icons"> send </span>
              <span class="material-icons"> more_horiz </span>
            </div>
            <div class="videoFooter__actionsRight">
              <div class="videoFooter__stat">
                <span class="material-icons"> favorite </span>
                <p>12</p>
              </div>
              <div class="videoFooter__stat">
                <span class="material-icons"> mode_comment </span>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer ends -->
      </div>
       <div class="video">
        <!-- header starts -->
        <div class="videoHeader">
          <span class="material-icons"> arrow_back </span>
          <h3>Reels</h3>
          <span class="material-icons"> camera_alt </span>
        </div>
        <!-- header ends -->

        <video class="video__player" src="video2.mp4"></video>

        <!-- footer starts -->
        <div class="videoFooter">
          <div class="videoFooter__text">
            <img class="user__avatar" src="https://www.w3schools.com/howto/img_avatar.png" alt="" />
            <h3>Somanath Goudar • <button>Follow</button></h3>
          </div>

          <div class="videoFooter__ticker">
            <span class="material-icons"> music_note </span>
            <marquee>Song Name</marquee>
          </div>

          <div class="videoFooter__actions">
            <div class="videoFooter__actionsLeft">
              <span class="material-icons"> favorite </span>
              <span class="material-icons"> mode_comment </span>
              <span class="material-icons"> send </span>
              <span class="material-icons"> more_horiz </span>
            </div>
            <div class="videoFooter__actionsRight">
              <div class="videoFooter__stat">
                <span class="material-icons"> favorite </span>
                <p>12</p>
              </div>
              <div class="videoFooter__stat">
                <span class="material-icons"> mode_comment </span>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer ends -->
      </div>
    </div>

    <script>
      const videos = document.querySelectorAll('video');

      for (const video of videos) {
        video.addEventListener('click', function () {
          if (video.paused) {
            video.play();
          } else {
            video.pause();
          }
        });
      }
    </script>
	<script>
		const arry = [1, 2, 1, 3, 4, 3, 5];

const toFindDuplicates = arry => arry.filter((item, index) => arry.indexOf(item) !== index)
const duplicateElements = toFindDuplicates(arry);
console.log(duplicateElements);

// Output: [1, 3]
	</script>
		






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
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
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