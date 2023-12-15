<?php

include("verit.php");
include('function.php');
ob_start();
session_start();

$me = $_SESSION['user'];







?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> | World Of Education
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/university.png">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
    <!-- Favicon -->

</head>

<body>

    <main>
        <div class="layout">
            <!-- Start of Navigation -->
            <div class="navigation">
                <div class="container">
                    <div class="inside">
                        <div class="nav nav-tab menu">
                            <?php

                        
                  $users=allusers();

                            foreach ($users as $user) {
                                $adsoyad =ucwords($user["adsoyad"]);
                                if ($user["id"] == $_SESSION["user"]) {
                                        if($user["resim"]==null and $user["cinsiyet"]=="bay"){
                                            echo '<img class="avatar-xl" src="assets/img/gallery/images.jpeg" alt="avatar" title="'.$adsoyad.'" >';
                                        }
                                      else  if($user["resim"]==null and $user["cinsiyet"]=="bayan"){
                                            echo '<img class="avatar-xl" src="assets/img/gallery/imagess.png" alt="avatar" title="'.$adsoyad.'" >';
                                        }
                                        else{
                                            echo '<img class="avatar-xl" src="img/' . $user["resim"] . '" alt="avatar" title="'.$adsoyad.'" >';
                                        }




                                    
                                }
                            }    
                                

                            
?>

                            <a href="#members" data-toggle="tab"><i class="material-icons">account_circle</i></a>
                            <a href="#discussions" data-toggle="tab" class="active"><i class="material-icons active">chat_bubble_outline</i></a>
                            <a href="#notifications" data-toggle="tab" class="f-grow1"><i class="material-icons">notifications_none</i></a>
                            <button class="btn mode"><i class="material-icons">brightness_2</i></button>
                            <a href="#settings" data-toggle="tab"><i class="material-icons">settings</i></a>
                            <button class="btn power" onclick="visitPage();"><a href="logout.php"><i class="material-icons">power_settings_new</i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Navigation -->
            <!-- Start of Sidebar -->,
            
            <div class="sidebar" id="sidebar">
                <div class="container">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <!-- Start of Contacts -->
                            <div class="tab-pane fade" id="members">
                                <div class="search">
                                    <form class="form-inline position-relative">
                                        <input type="search" class="form-control" id="people" placeholder="Üyeleri Ara...">
                                        <button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
                                    </form>
                                  
                                </div>
                             
                                <div class="contacts">
                                    <h1>Kişiler</h1>
                                    <div class="list-group" id="contacts" role="tablist">



                                    <?php
        
                  $users=alluserss();

            foreach ($users as $user) {
                $adsoyad =ucwords($user["adsoyad"]);
                $bolum= mb_strtolower($user["bolum"]);
                $bolum =ucwords($bolum);
                if($user["id"] == $_SESSION["user"]){
                    continue;
       }
                            echo          '  <a href="#" class="filterMembers all online contact" data-toggle="list">';
                            if($user["resim"]==null and $user["cinsiyet"]=="bay"){
                                echo '<img class="avatar-md" src="assets/img/gallery/images.jpeg" data-toggle="tooltip" data-placement="top"  alt="avatar" title="'.$adsoyad.'" >';
                            }
                            else if($user["resim"]==null and $user["cinsiyet"]=="bayan"){
                                echo '<img class="avatar-md" src="assets/img/gallery/imagess.png" data-toggle="tooltip" data-placement="top"  alt="avatar" title="'.$adsoyad.'">';
                            }
                            else{
                             echo  ' <img class="avatar-md" src="img/'.$user['resim'].'" data-toggle="tooltip" data-placement="top" title="'.$adsoyad.'"  alt="avatar">';
                            }
                                           
                                     echo '       <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                            <div class="data">
                                                <h5>'.$adsoyad.'</h5>
                                                <p>'.$bolum.'</p>
                                            </div>
                                            <div class="person-add">
                                                <i class="material-icons">person</i>
                                            </div>
                                        </a>';
            }
            ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Contacts -->
                            <!-- Start of Discussions -->
                            <div id="discussions" class="tab-pane fade active show">
                                <div class="search">
                                    <form class="form-inline position-relative">
                                        <input type="search" class="form-control" id="conversations" placeholder="Sohbette Ara...">
                                        <button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
                                    </form>
                                   
                                </div>
                           
                                <div class="discussions">
                                    <h1>Mesajlar</h1>
                                    <div class="list-group" id="chats" role="tablist">
            <?php
        
                
     
    $users=allusers();
    

            foreach ($users as $user) {
                
$adsoyad =ucwords($user["adsoyad"]);
       if($user["id"] == $_SESSION["user"]){
                    continue;
                    
       }
  
                             
            
    
                echo '     <a href="#list-chat" class="filterDiscussions user all unread single active " id="list-chat-list" data-toggle="list" role="tab" user-id="' . $user["id"] . '">';
                                        
                       
          if($user["resim"]==null and $user["cinsiyet"]=="bay"){
            echo '<img class="avatar-md" src="assets/img/gallery/images.jpeg" data-toggle="tooltip" data-placement="top" title="'.$adsoyad.'" alt="avatar">';
          }
         else if($user["resim"]==null and $user["cinsiyet"]=="bayan"){
            echo '<img class="avatar-md" src="assets/img/gallery/imagess.png" data-toggle="tooltip" data-placement="top" title="'.$adsoyad.'"  alt="avatar" >';
          }
          else{
            echo '<img class="avatar-md" src="img/' . $user["resim"] . '" data-toggle="tooltip" data-placement="top" title="'.$adsoyad.'"  alt="avatar">';
          }
                
                echo '
                                            <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                          <div class="new bg-purple">
                                            <span>+7</span>
                                            </div>
                                            <div class="data">
                                                <h5>'.$adsoyad.'</h5>
                                                <span>Mon</span>
                                                <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                            </div>
                                        </a>';
            }

?>


                      
                                    </div>
                                </div>
                            </div>
                          
                            <div id="notifications" class="tab-pane fade">
                                <div class="search">
                                    <form class="form-inline position-relative">
                                        <input type="search" class="form-control" id="notice" placeholder="Bildirim Ara...">
                                        <button type="button" class="btn btn-link loop"><i class="material-icons filter-list">filter_list</i></button>
                                    </form>
                                </div>
                            
                                <div class="notifications">
                                    <h1>Bildirimler</h1>
                                    <div class="list-group" id="alerts" role="tablist">
  <a href="#" class="filterNotifications all latest notification" data-toggle="list">
                                            <img class="avatar-md" src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
                                            <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                            <div class="data">
                                                <p>idris akgül World of Education Platformunu kurdu</p>
                                                <span>Jan 17, 2023</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Notifications -->
                            <!-- Start of Settings -->
                            <div class="tab-pane fade" id="settings">
                                <div class="settings">
                                <?php
        
             echo'    <div class="profile">';
     
        $users=alluserss();
        
    
                foreach ($users as $user) {
                    if($user["id"] == $_SESSION["user"]){
    $adsoyad =ucwords($user["adsoyad"]);
    $bolum =ucwords($user["bolum"]);
             
              if($user["resim"]==null){
              echo'  <img class="avatar-xl" src="assets/img/gallery/images.jpeg" alt="avatar">';
              }
              else{
                echo'  <img class="avatar-xl"  src="img/' . $user["resim"] . '" alt="avatar">';
              }
                    
                    echo '
                                   
                    
                      
                                        
                                        <h1><a href="#">'.$adsoyad.'</a></h1>
                                        <span>'.$bolum.'</span>
                    
                    ';
                    }
                else{
                    continue;
                }
                
                
                }
    
    ?>
                                 
<?php


$blm = $_SESSION['blm'];
$a= $db->query("select * from üyeler where bolum='$blm'");
 $a= $a->rowCount(); 
 $b= $db->query("select  * from mesajlar");
 $b= $b->rowCount(); 
 $c= $db->query("select  * from üyeler");
 $c= $c->rowCount(); 


                         echo             '  <div class="stats">
                                            <div class="item">
                                                <h2>'.$a.'</h2>
                                                <h3>Bölüm</h3>
                                            </div>
                                            <div class="item">
                                                <h2>'.$c.'</h2>
                                                <h3>Kişi</h3>
                                            </div>
                                            <div class="item">
                                                <h2>'.$b.'</h2>
                                                <h3>Mesaj</h3>
                                            </div>
                                        </div>
                                    </div>';
                                    
                                    ?>
                                    <div class="categories" id="accordionSettings">
                                        <h1>Ayarlar</h1>
                                        <!-- Start of My Account -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="material-icons md-30 online">person_outline</i>
                                                <div class="data">
                                                    <h5>My Account</h5>
                                                    <p>Update your profile details</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionSettings">
                                                <div class="content">
                                                    <div class="upload">
                                                        <div class="data">
                                                            <img class="avatar-xl" src="dist/img/avatars/avatar-male-1.jpg" alt="image">
                                                            <label>
																	<input type="file">
																	<span class="btn button">Upload avatar</span>
																</label>
                                                        </div>
                                                        <p>For best results, use an image at least 256px by 256px in either .jpg or .png format!</p>
                                                    </div>
                                                    <form>
                                                        <div class="parent">
                                                            <div class="field">
                                                                <label for="firstName">First name <span>*</span></label>
                                                                <input type="text" class="form-control" id="firstName" placeholder="First name" value="Michael" required>
                                                            </div>
                                                            <div class="field">
                                                                <label for="lastName">Last name <span>*</span></label>
                                                                <input type="text" class="form-control" id="lastName" placeholder="Last name" value="Knudsen" required>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <label for="email">Email <span>*</span></label>
                                                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" value="michael@gmail.com" required>
                                                        </div>
                                                        <div class="field">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" id="password" placeholder="Enter a new password" value="password" required>
                                                        </div>
                                                        <div class="field">
                                                            <label for="location">Location</label>
                                                            <input type="text" class="form-control" id="location" placeholder="Enter your location" value="Helena, Montana" required>
                                                        </div>
                                                        <button class="btn btn-link w-100">Delete Account</button>
                                                        <button type="submit" class="btn button w-100">Apply</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of My Account -->
                                        <!-- Start of Chat History -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                <i class="material-icons md-30 online">mail_outline</i>
                                                <div class="data">
                                                    <h5>Chats</h5>
                                                    <p>Check your chat history</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionSettings">
                                                <div class="content layer">
                                                    <div class="history">
                                                        <p>When you clear your conversation history, the messages will be deleted from your own device.</p>
                                                        <p>The messages won't be deleted or cleared on the devices of the people you chatted with.</p>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="same-address">
                                                            <label class="custom-control-label" for="same-address">Hide will remove your chat history from the recent list.</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="save-info">
                                                            <label class="custom-control-label" for="save-info">Delete will remove your chat history from the device.</label>
                                                        </div>
                                                        <button type="submit" class="btn button w-100">Clear blah-blah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Chat History -->
                                        <!-- Start of Notifications Settings -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <i class="material-icons md-30 online">notifications_none</i>
                                                <div class="data">
                                                    <h5>Notifications</h5>
                                                    <p>Turn notifications on or off</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionSettings">
                                                <div class="content no-layer">
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Desktop Notifications</h5>
                                                            <p>You can set up Swipe to receive notifications when you have new messages.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Unread Message Badge</h5>
                                                            <p>If enabled shows a red badge on the Swipe app icon when you have unread messages.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Taskbar Flashing</h5>
                                                            <p>Flashes the Swipe app on mobile in your taskbar when you have new notifications.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Notification Sound</h5>
                                                            <p>Set the app to alert you via notification sound when you have unread messages.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Vibrate</h5>
                                                            <p>Vibrate when receiving new messages (Ensure system vibration is also enabled).</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Turn On Lights</h5>
                                                            <p>When someone send you a text message you will receive alert via notification light.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Notifications Settings -->
                                        <!-- Start of Connections -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                <i class="material-icons md-30 online">sync</i>
                                                <div class="data">
                                                    <h5>Connections</h5>
                                                    <p>Sync your social accounts</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionSettings">
                                                <div class="content">
                                                    <div class="app">
                                                        <img src="dist/img/integrations/slack.svg" alt="app">
                                                        <div class="permissions">
                                                            <h5>Skrill</h5>
                                                            <p>Read, Write, Comment</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="app">
                                                        <img src="dist/img/integrations/dropbox.svg" alt="app">
                                                        <div class="permissions">
                                                            <h5>Dropbox</h5>
                                                            <p>Read, Write, Upload</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="app">
                                                        <img src="dist/img/integrations/drive.svg" alt="app">
                                                        <div class="permissions">
                                                            <h5>Google Drive</h5>
                                                            <p>No permissions set</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="app">
                                                        <img src="dist/img/integrations/trello.svg" alt="app">
                                                        <div class="permissions">
                                                            <h5>Trello</h5>
                                                            <p>No permissions set</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Connections -->
                                        <!-- Start of Appearance Settings -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                <i class="material-icons md-30 online">colorize</i>
                                                <div class="data">
                                                    <h5>Appearance</h5>
                                                    <p>Customize the look of Swipe</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionSettings">
                                                <div class="content no-layer">
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Turn Off Lights</h5>
                                                            <p>The dark mode is applied to core areas of the app that are normally displayed as light.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round mode"></span>
															</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Appearance Settings -->
                                        <!-- Start of Language -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                <i class="material-icons md-30 online">language</i>
                                                <div class="data">
                                                    <h5>Language</h5>
                                                    <p>Select preferred language</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionSettings">
                                                <div class="content layer">
                                                    <div class="language">
                                                        <label for="country">Language</label>
                                                        <select class="custom-select" id="country" required>
																<option value="">Select an language...</option>
																<option>English, UK</option>
																<option>English, US</option>
															</select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Language -->
                                        <!-- Start of Privacy & Safety -->
                                        <div class="category">
                                            <a href="#" class="title collapsed" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                <i class="material-icons md-30 online">lock_outline</i>
                                                <div class="data">
                                                    <h5>Privacy & Safety</h5>
                                                    <p>Control your privacy settings</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                            <div class="collapse" id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionSettings">
                                                <div class="content no-layer">
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Keep Me Safe</h5>
                                                            <p>Automatically scan and delete direct messages you receive from everyone that contain explict content.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>My Friends Are Nice</h5>
                                                            <p>If enabled scans direct messages from everyone unless they are listed as your friend.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Everyone can add me</h5>
                                                            <p>If enabled anyone in or out your friends of friends list can send you a friend request.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Friends of Friends</h5>
                                                            <p>Only your friends or your mutual friends will be able to send you a friend reuqest.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox" checked>
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Data to Improve</h5>
                                                            <p>This settings allows us to use and process information for analytical purposes.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                    <div class="set">
                                                        <div class="details">
                                                            <h5>Data to Customize</h5>
                                                            <p>This settings allows us to use your information to customize Swipe for you.</p>
                                                        </div>
                                                        <label class="switch">
																<input type="checkbox">
																<span class="slider round"></span>
															</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Privacy & Safety -->
                                        <!-- Start of Logout -->
                                        <div class="category">
                                            <a href="sign-in.php" class="title collapsed">
                                                <i class="material-icons md-30 online">power_settings_new</i>
                                                <div class="data">
                                                    <h5>Power Off</h5>
                                                    <p>Log out of your account</p>
                                                </div>
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                        </div>
                                        <!-- End of Logout -->
                                    </div>
                                </div>
                            </div>
                            <!-- End of Settings -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar -->
            <!-- Start of Add Friends -->
           
            <!-- End of Add Friends -->
            <!-- Start of Create Chat -->
        
            <!-- End of Create Chat -->
           
            <div class="main">
                
                <div class="tab-content" id="nav-tabContent">
                    
                    <div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
                      
                        <div class="chat" id="chat1">
                      
                            <div class="top">
                            <center style="margin-top: 200px;">
                            
                            
                            <img src="img/World of-photoaidcom-cropped (5).png" style="width: 150px;height: 150px;margin-bottom: 50px;">
                            <p>WOE CHAT'i İLE KENDİ BÖLÜMÜNÜZDEN ÜYELER BULUP SOHBET ETMEYE BAŞLAYIN!!!</p>
                            <p style="font-size: 13px;">WOE CHAT İLE İLGİLİ İSTEK,ŞİKAYET VE ÖNERİLERİNİZİ EĞİTİM DOSTUNUZ'A YAZINIZ..</p>


                            </center>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="inside">
                                       
                                       
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="content chat" id="content">
                                
                                <div class="container">
                         
                                    <div class="col-md-12">
                                        
                                        <div class="date">
                                            <hr>
                                           
                                            <hr>
                                        </div>
                                       
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!--
                                        <div class="message">
                                            <img class="avatar-md" src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                            <div class="text-main">
                                                <div class="text-group">
                                                    <div class="text">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>09:46 AM</span>
                                            </div>
                                        </div>
                                        <div class="message me">
                                            <div class="text-main">
                                                <div class="text-group me">
                                                    <div class="text me">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>11:32 AM</span>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <img class="avatar-md " src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                            <div class="text-main">
                                                <div class="text-group">
                                                    <div class="text">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>02:56 PM</span>
                                            </div>
                                        </div>
                                        <div class="message me">
                                            <div class="text-main">
                                                <div class="text-group me">
                                                    <div class="text me">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <div class="text-group me">
                                                    <div class="text me">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>10:21 PM</span>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <img class="avatar-md" src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                            <div class="text-main">
                                                <div class="text-group">
                                                    <div class="text">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>11:07 PM</span>
                                            </div>
                                        </div>
                                        <div class="date">
                                            <hr>
                                            <span>Today</span>
                                            <hr>
                                        </div>
                                        <div class="message me">
                                            <div class="text-main">
                                                <div class="text-group me">
                                                    <div class="text me">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span>10:21 PM</span>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <img class="avatar-md" src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                            <div class="text-main">
                                                <div class="text-group">
                                                    <div class="text">
                                                        <div class="attachment">
                                                            <button class="btn attach"><i class="material-icons md-18">insert_drive_file</i></button>
                                                            <div class="file">
                                                                <h5><a href="#">excel dersleri.pdf</a></h5>
                                                                <span>24kb Document</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>11:07 PM</span>
                                            </div>
                                        </div>
                                        <div class="message me">
                                            <div class="text-main">
                                                <div class="text-group me">
                                                    <div class="text me">
                                                        <p>Herkese merhaba Ben world of education kurucusuyum...</p>
                                                    </div>
                                                </div>
                                                <span><i class="material-icons">check</i>10:21 PM</span>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <img class="avatar-md" src="img/idris.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                            <div class="text-main">
                                                <div class="text-group">
                                                    <div class="text typing">
                                                        <div class="wave">
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="bottom">
                                        <form class="position-relative w-100">
                                            <textarea class="form-control" id="send" placeholder="Bir Mesaj yazınız..." rows="1"></textarea>
                                            <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                            <button type="submit" onclick="kayit()" class="btn send"><i class="material-icons">send</i></button>
                                        </form>
                                        <label>
												<input type="file">
												<span class="btn attach d-sm-block d-none"><i class="material-icons">attach_file</i></span>
											</label>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                
                    </div>
                  
                  
                  
                        <!-- End of Chat -->
                    </div>
                    <!-- End of Babble -->
                </div>
            </div>
        </div>
        <!-- Layout -->
    </main>
    <!-- Bootstrap/Swipe core JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/swipe.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
        function scrollToBottom(el) {
            el.scrollTop = el.scrollHeight;
        }
        scrollToBottom(document.getElementById('content'));
    </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="jsm/function.js"></script>


</body>


</html>