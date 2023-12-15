
<?php
include("verit.php");




function allusers(){

    global $db;
    $sql = "select * from üyeler ";
    $users = $db->prepare($sql);
    $users->execute();
    return $users->fetchAll();
}

function alluserss(){

    global $db;
    $sql = "select * from üyeler order by adsoyad asc";
    $users = $db->prepare($sql);
    $users->execute();
    return $users->fetchAll();
}
function allmessage(){

    global $db;
    $sql = "select * from mesajlar ";
    $users = $db->prepare($sql);
    $users->execute();
    return $users->fetchAll();
}
function busers(){
    $blm = $_SESSION['blm'];
    global $db;
    $sql = "select * from üyeler where bolum = '$blm' order BY adsoyad asc";
    $users = $db->prepare($sql);
    $users->execute();
    return $users->fetchAll();
    
    


    
}


function getuser($user){

    global $db;
    $sql = "select * from üyeler where id=?";
    $users = $db->prepare($sql);
    $users->execute([$user]);
    return $users->fetch();
}


function mesaj($me,$user){

    global $db;
    $sql = "select * from mesajlar where kimden=? and kime=? or kimden=? and kime=? " ;
    $mscs = $db->prepare($sql);
    $mscs->execute([$me,$user,$user,$me]);
    return $mscs->fetchAll();
}





?>