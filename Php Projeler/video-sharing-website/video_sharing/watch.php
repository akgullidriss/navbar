<?php include 'db_connect.php' ?>
<?php
 function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$upload = $conn->query("SELECT up.*,concat(u.firstname,' ',u.lastname) as name,u.avatar FROM uploads up inner join users u on u.id =up.user_id where up.code = '{$_GET['code']}' ");
foreach ($upload->fetch_array() as $k => $v) {
	$$k = $v;
}
if(isset($_SESSION['login_id'])){
	if($_SESSION['login_id'] != $user_id){
		$chk = $conn->query("SELECT * FROM views where upload_id = $id and user_id ={$_SESSION['login_id']} ")->num_rows;
		if($chk <= 0){
			$conn->query("INSERT INTO views set upload_id = $id , user_id = {$_SESSION['login_id']}");
		}
	}
}else{
	$ip = getIPAddress();
	$chk = $conn->query("SELECT * FROM views where upload_id = $id and ip_address ='$ip' ")->num_rows;
	if($chk <= 0){
		$conn->query("INSERT INTO views set upload_id = $id , ip_address = '$ip'");
	}

}
$views = $conn->query("SELECT * FROM views where upload_id = $id ")->num_rows;
$conn->query("UPDATE uploads set total_views = $views where id = $id");
 ?>
 <style type="text/css">
 	.suggested-img{
 		width: calc(30%);
 		height: 15vh;
 		display:flex;
 		justify-content: center;
 		align-items: center;
 		background: black
 	}
 	.suggested-details{
 		width: calc(70%);
 	}
 	.suggested-img video{
 		width: calc(100%);
 		height: calc(100%);
 	}
 	.suggested:hover{
 		background: #00adff1c;
 	}
 	#vid-watch{
 		max-height: 80vh
 	}
 </style>
<div class="container-fluid py-2">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<div class="d-block w-100 vid-watch-feild bg-dark border border-dark p-0" style="border-width: 2px">
							<video class="w-100" autoplay="true" controls id="vid-watch">
								<source src="<?php echo "assets/uploads/videos/".$video_path ?>">
							</video>
						</div>
						<div class="col-md-12 py-2">
							<div class="row">
								<h5 class="text-dark"><b><?php echo $title ?></b></h5>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<span class="badge badge-white"><b><?php echo date("M d, Y",strtotime($date_created)) ?></b></span>
								<span class="badge badge-primary"><b><?php echo $views.($views > 1 ? ' views':' view') ?></b></span>
							</div>
						</div>
						<hr>
						<div class="col-md-12">
							<div class="d-flex w-100 align-items-center">
								<?php if(!empty($avatar)): ?>
									<img src="assets/uploads/<?php echo $avatar ?>" class="rounded-circle" width="50px" height="50px" alt="">
								<?php else: ?>
									<span class="d-flex justify-content-center bg-primary align-items center rounded-circle border py-2 px-3" ><h3 class="text-white m-0"><b><?php echo substr($name,0,1) ?></h3></b></span>
								<?php endif; ?>
									<h6 class="mx-3"><b><?php echo $name ?></b></h6>
							</div>
							<h5><b>Description</b></h5>
							<p><?php echo str_replace(array("\n","\r"),'<br/>',$description) ?></p>
						</div>
					</div>
					<div class="col-md-4 border-left">
						<?php 
							$qry = $conn->query("SELECT * FROM uploads where id !=$id order by total_views asc,rand() limit 10");
							while($row= $qry->fetch_assoc()):
						?>
						<a class="d-flex w-100 border-bottom pb-1 suggested" href="index.php?page=watch&code=<?php echo $row['code'] ?>">
							<div class="img-thumbnail suggested-img border-dark border" poster="assets/uploads/thumbnail/<?php echo $row['thumbnail_path'] ?>">
								<video class="img-fluid" id="<?php echo $row['code'] ?>" muted>
									<source src="assets/uploads/videos/<?php echo $row['video_path'] ?>" alt="" >
								</video>
							</div>
							<div class="suggested-details px-2 py-2">
								<h6 class="truncate-2 text-dark"><b><?php echo $row['title'] ?></b></h6>
								<small class="text-muted"><i>Posted:<?php echo date("M, d Y",strtotime($row['date_created'])) ?></i></small>
							</div>
						</a>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.suggested').hover(function(){
		$(this).addClass('active')
		var vid = $(this).find('video')
		var id = vid.get(0).id;
			setTimeout(function(){
				vid.trigger('play')
				document.getElementById(id).playbackRate = 2.0
			},500)
	})
	$('.suggested').mouseout(function(){
		var vid = $(this).find('video')
			setTimeout(function(){
				vid.trigger('pause')
			},500)
	})
</script>