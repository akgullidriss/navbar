
<?php
ob_start();
session_start();
include('verit.php');
include('function.php');







$me = $_SESSION['user'];
if(isset($_POST['chat'])){

    $user = $_POST['user'];

    $datauser = getuser($user);

    $msgs = mesaj($me, $user);
    $message='';
if(!$msgs)
{

        $message .= '<center>Henüz Hiçbir Sohbetiniz Yoktur...</center>';
}
else{
    foreach($msgs as $ms){
        $orgDate = $ms["mesajtime"];
   
        $newDate = date("d F  H:i", strtotime($orgDate)); 
        $ing_aylar = array("January","February","March","May","April","June","July","August","September","October","November","December");
        $tr_aylar = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
        $newDate = str_replace($ing_aylar,$tr_aylar,$newDate);
        if($ms['mesaj']!=null){
        if($ms['kimden'] == $me ){
        $message  .= '
      
    <div class="message me" >
        <div class="text-main" >
            <div class="text-group me">
                <div class="text me" style="background-color:purple">
                    <p>'.$ms["mesaj"].'</p>
                </div>
            </div>
            <span style="text-align:right;">'.$newDate.'</span>
        </div>
    </div>
';}
else{
    $message .= '
      
    <div class="message">
    <img class="avatar-md" src="img/'.$datauser['resim'].'" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
    <div class="text-main">
        <div class="text-group">
            <div class="text" style="background-color:black;color:white;">
                <p>'.$ms["mesaj"].'</p>
            </div>
        </div>
        <span style="text-align:left;">'.$newDate.'</span>
    </div>
</div>
';


}
        }
}
}


    echo '
    <div class="main">
    <div class="tab-content" id="nav-tabContent">
        <!-- Start of Babble -->
        <div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
            <!-- Start of Chat -->
            <div class="chat" id="chat1">
                <div class="top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="inside">';
                            $bolum= mb_strtolower($datauser["bolum"]);
                            $bolum =ucwords($bolum);
                            $adsoyad = ucwords( $datauser["adsoyad"]);
                           
          if($datauser["resim"]==null and $datauser["cinsiyet"]=="bay"){
            echo '<img class="avatar-md" src="assets/img/gallery/images.jpeg" alt="avatar" data-toggle="tooltip" data-placement="top" >';
          }
          else if($datauser["resim"]==null and $datauser["cinsiyet"]=="bayan"){
            echo '<img class="avatar-md" src="assets/img/gallery/imagess.png" alt="avatar" data-toggle="tooltip" data-placement="top" >';
          }
          else{
            echo ' <a href="#"><img class="avatar-md" src="img/'.$datauser["resim"].'" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"></a>';
          }
                               
                       echo '         <div class="status">
                                    <i class="material-icons online">fiber_manual_record</i>
                                </div>
                                <div class="data">
                                    <h5><a href="#">'.$adsoyad.'</a></h5>
                                    <span style="color:black;" >'.$bolum.'</span>
                                </div>
                                <button class="btn connect d-md-block d-none" name="1" style="color: purple;"><i class="material-icons md-30">phone_in_talk</i></button>
                                <button class="btn connect d-md-block d-none" name="1" style="color: purple;"><i class="material-icons md-36">videocam</i></button>
                                <button class="btn d-md-block d-none" style="color: purple;"><i class="material-icons md-30">info</i></button>
                                <div class="dropdown">
                                    <button class="btn"  style="color: purple;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons md-30">more_vert</i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                        <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                        <hr>
                                        <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                        <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                        <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                ?>
              <div class="content chat" id="contentt">
                    <div class="container">
                          <?php
        echo'      <div class="col-md-12">
                            <div class="date">
                                <hr>
                                <span>Today</span>
                                <hr>
                            </div>
                        
                           '.$message.'
                        
                        </div> ';  ?>
                    </div>
                </div>
               <div class="container">
                    <div class="col-md-12">
                        <div class="bottom">
                     
                       
                      
                         
                        <form class="position-relative w-100" method="POST">
                                <textarea class="form-control" id="send" placeholder="Bir Mesaj yazınız..." rows="1" name="mesaj"></textarea>
                                <button class="btn emoticons" style="color: purple;"><i class="material-icons">insert_emoticon</i></button>
                                <button type="submit"  class="btn send" name="kayit"  style="color: purple;"><i class="material-icons">send</i></button>
                            </form>


                            <label>
                                    <input type="file">
                                    <span class="btn attach d-sm-block d-none" style="background-color: purple;"><i class="material-icons">attach_file</i></span>
                                </label>
                        </div>
                    </div>
                </div>
            </div>

            
            <?php
        
            if(isset($_POST['kayit'])){
          

            
                           

                    }



    
          echo '  <div class="call" id="call1">
            <div class="content">
                <div class="container">
                    <div class="col-md-12">
                        <div class="inside">
                            <div class="panel">
                                <div class="participant">
                                    <img class="avatar-xxl" src="img/idris.jpg" alt="avatar">
                                    <span>Aranıyor...</span>
                                </div>
                                <div class="options">
                                    <button class="btn option"><i class="material-icons md-30">mic</i></button>
                                    <button class="btn option"><i class="material-icons md-30">videocam</i></button>
                                    <button class="btn option call-end"><i class="material-icons md-30">call_end</i></button>
                                    <button class="btn option"><i class="material-icons md-30">person_add</i></button>
                                    <button class="btn option"><i class="material-icons md-30">volume_up</i></button>
                                </div>
                                <button class="btn back" name="1"><i class="material-icons md-24">chat</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    
    ';
    
    
    
    
    
    
    

}





?>
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

<script src="jsm/function.js"></script>
