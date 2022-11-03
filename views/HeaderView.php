<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jQuery/2.1.3/jQuery.min.js"></script>
	
	<!-- link fonawesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<header>
	<div class="header">
		<style type="text/css">
			.logo img{color: red;}
		</style>
		<div class="logo">
			<a href=""><i><img style="width: 440px;" src="assets/frontend/images/logo6.png"></i></a>
		</div>
		<div class="banner">
			<a href=""><img src="assets/frontend/images/banner2.jpg"></a>
		</div>
	</div>
</header>	

<nav>
	<style type="text/css">
		nav .menu .home{
	background-color: #4c66a4;
	z-index: 1;
	padding: -5px 14px 0px 10px;

	margin-top: -5px;
	}
	</style>
	<div class="menu">
		<div class="home">
			<a href="index.php"><i class="fas fa-home"></i>HOME</a>
		</div>
			<ul class="root">
				<li><a href="index.php?controller=wishlist">Ưa Thích</a></li>
				<li><a href="index.php?controller=news">Tin Tuc</a></li>
				<li><a href="#">Điện thoại</a>					
					<ul class="submenu" style="z-index: 1">
						<?php 
						// ket noi csdl de truy van cau lenh sql 
						 $conn = Connection::getInstance();
            		    $query = $conn->query("select * from categories where parent_id=0 order by id desc");
	          			  $categories = $query->fetchAll();
						 ?>
						<?php foreach($categories as $rows): ?>
						<li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
						 <?php 
				          $querySub = $conn->query("select * from categories where parent_id={$rows->id} order by id desc");
				          $categoriesSub = $querySub->fetchAll();
				         ?>
				         <?php foreach($categoriesSub as $rowsSub): ?>
						<li><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
						 <?php endforeach; ?>
						<?php endforeach; ?>
					</ul>
				</li>
				<li><a href="index.php?controller=contact">Lien He</a></li>
			</ul>		
		</div>
		<div class="input">
			<input class="input-control" type="text" autocomplete="off" onkeypress="searchForm(event);" name="" placeholder="Tìm kiếm" id="key">
			<button style="margin-top:5px; background-color: blue; border-color: blue; height: 30px;" type="submit"><i class="fas fa-search" onclick="return search();"></i></button>
			<div class="smart-search">
				<ul>
					<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"></a>
				</ul>
			</div>
		</div>
	<style type="text/css">
      .input{position: relative;}
      .smart-search{position: absolute; width: 100%; background: white; height: 350px;
        overflow: scroll; z-index: 1; display: none; font-size: 14px;}
      .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
      .smart-search ul li{border-bottom: 1px solid #dddddd;} 
      .smart-search img{width: 50px; margin-right: 5px; }
    </style>
	<script type="text/javascript">
      function searchForm(event){
        //bat phim enter tu ban phim (phim enter co keyCode = 13)
        if(event.keyCode == 13){
          //lay gia tri cua the html co id=key
          let key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
      function search(){
        //lay gia tri cua the html co id=key
        let key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //---
      //de thuc hien cac dong code ben duoi, website can phai load thu vien jquery
      /*
        de kiem tra xem website da load thu vien jquery chua thi thuc hien test bang doan code sau
      */
      // $(document).ready(function(){ alert('Jquery da duoc load '); });
      $(".input-control").keyup(function(){
      	
        var strKey = $("#key").val();
        if(strKey.trim() == ""){
          $(".smart-search").attr("style","display:none;");
        }else{
          $(".smart-search").attr("style","display:block");
          //---
          //lay du lieu bang ajax
          $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
            
            //clear cac the li ben trong ul
            $(".smart-search ul").empty();
            //them du lieu vao ul
            $(".smart-search ul").append(data);
          });
          //---
        }
      });
      //---
    </script>
	<div class="login">
		<ul>
			<li>
				<a href="index.php?controller=cart"></i>Giỏ Hàng</a>
			</li>
			 <?php if(isset($_SESSION['customer_email'])): ?>
				<li><a href=""> <?php echo $_SESSION['customer_email']; ?></a></li>
				<li><a href="index.php?controller=account&action=logout">Dang xuat</a></li>
			<?php else: ?>
			<li><a href="index.php?controller=account&action=login">Đăng nhập</a></li>
		
			<?php endif; ?>
		</ul>
	</div>

</nav>

