<?php  
		$this->fileLayout = "LayoutTrangTrong.php";	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>
<main>
	<div class="danhmuc" >
		<h3>Tìm kiếm</h3>
		<div class="timkiem">
			<div class="danhmuc1">
				<h4>Danh mục</h4>
					<select id="dienthoai">
						<option value="iphone">Iphone</option>
						<option value="samsung">Samsung</option>
						<option value="oppo">Oppo</option>
						<option value="huawei">Huawei</option>
					</select>

			</div>
			<style type="text/css">
				.gia1 ul li {
					list-style-type: none;
					margin-bottom: 20px;
				}
			</style>
			<div class="gia1" >
				<ul class="list-group" style="border:0px;">
	              <li class="list-group-item" style="border:0px;" >Giá từ 
	                <input style="margin-left: 12px;" type="number" min="0" value="0" id="fromPrice" class="form-control" />
	              </li>
	              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
	              </li>
	              <li class="list-group-item" style="border:0px; text-align:center">
	                <input style="background-color: blue; border-color: blue; color: white; height: 30px; width: 100px;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;">
	              </li>
	            </ul>
			</div>
			
		</div>
		<a href=""><h3> iPhone</h3></a>
		<a href=""><h3>Samsung</h3></a>
		<a href=""><h3>Oppo</h3></a>
		<a href=""><h3>Huawei</h3></a>
	</div>
	<style type="text/css">
		main{
	border: 1px solid #d9edf7;
	width: 300px;
	margin-top: 10px;
	display: flex;
	}
	main .danhmuc h3{
		color: blue;
		background-color: #d9edf7;
		border: 1px solid #d9edf7;
		width: 280px;
		height: 40px;
		padding-left: 20px;
		padding-top: 10px;
	}
	main a{
		text-decoration: none;
	}
	main .danhmuc1{
		display: flex;
		margin-left: 40px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	main .danhmuc1 select{
		margin-left: 20px;
		width: 120px;
		height: 20px;
		font-weight: 700;
	}
	main .gia1{
		display: flex;
		margin-left: 40px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	main .gia1 select{
		margin-left: 52px;
		width: 120px;
		height: 20px;
		font-weight: 700;
	}
	main .gia2{
		display: flex;
		margin-left: 40px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	main .gia2 select{
		margin-left: 38px;
		width: 120px;
		height: 20px;
		font-weight: 700;
	}
	main .timkiem button{
		margin-left: 100px;
		height: 35px;
		background-color: blue;
		color: white;
		font-size: 16px;
		width: 80px;	
		margin: 10px 100px;
		text-align: center;
	}
	main .giohang{
		margin-left: 10px;
	}
	main .giohang .chitiet{
		background-color: #ccc;
		height: 40px;
		width: 970px;
	}
	main .giohang .chitiet i{
		margin-top: 10px;
		margin-left: 10px;
	}

	main .giohang .giohang_title{
		background-color: #d9edf7;
		height: 30px;
		width: 970px;
		color: blue;
		margin-top: 10px;
		
	}
	main .giohang .giohang_title h3{
		margin-left: 20px;
	}
	/*---------------------*/
	main .chitiet_sp{
		display: flex;
		margin-top: 50px;
		margin-left: 40px;
	}
	main .chitiet_sp .anh img{
		height: 400px;
		width: 400px
	}	
	main .chitiet_sp .info{
		margin-left: 50px;
	}
	main .chitiet_sp .info h3{
		margin-bottom: 40px;
	}
	main .chitiet_sp .mau{
		background-color: #ccc;
	}
	main .chitiet_sp .info table tr{
		height: 30px;
	}
	main .chitiet_sp .info table tr td{
		width: 220px;
	}
	main .chitiet_sp .info button{
		margin-top: 20px;
		background-color: #277cea;
		border: solid 1px #1d72e0;
		height: 40px;
		width: 120px;
		border: 1px solid #ccc;
		border-radius: 5px;
		font-size: 17px;
	}
	main .chitiet_sp .info button a{
		color: white;

	}
	.gia{text-decoration-line: line-through; color: black}
	</style>
	<!-- ----------------------------------chuyen anh----------------------------- -->
	<style type="text/css">
		   * {box-sizing:border-box}
		/* thiết lập style cho slideshow container */
		 .slideshow-container {
		   max-width: 1000px;
		   position: relative;
		   margin: auto;
		 }
		/* ẩn hình ảnh cho phần tử slideshow */
		 .mySlides {
		   display: none;
		 }
		/* thiết kế nút mũi tên*/
		 .prev, .next {
		   cursor: pointer;
		   position: absolute;
		   top: 50%;
		   width: auto;
		   margin-top: -22px;
		   padding: 16px;
		   color: white;
		   font-weight: bold;
		   font-size: 18px;
		   transition: 0.6s ease;
		   border-radius: 0 3px 3px 0;
		   user-select: none;
		 }
		/* thiết kế nút mũi tên next nằm phía bên phải */
		 .next {
		   right: 0;
		   border-radius: 3px 0 0 3px;
		 }
		/* hiệu ứng thay đổi background khi hover vào nút mũi tên*/
		 .prev:hover, .next:hover {
		   background-color: rgba(0,0,0,0.8);
		 }
		/* Thiết lập style cho nội dung của mỗi phần tử slideshow */
		 .text {
		   color: #f2f2f2;
		   font-size: 15px;
		   padding: 8px 12px;
		   position: absolute;
		   bottom: 8px;
		   width: 100%;
		   text-align: center;
		 }
		/* Thiết lập style cho số hiển thị của phần tử */
		 .numbertext {
		   color: #f2f2f2;
		   font-size: 12px;
		   padding: 8px 12px;
		   position: absolute;
		   top: 0;
		 }
		/* thiết lập style  nút tròn điều khiển*/
		 .dot {
		   cursor: pointer;
		   height: 15px;
		   width: 15px;
		   margin: 0 2px;
		   background-color: #bbb;
		   border-radius: 50%;
		   display: inline-block;
		   transition: background-color 0.6s ease;
		 }
		.active, .dot:hover {
		   background-color: #717171;
		 }
		/* tạo hiệu ứng chuyển động fade */
		 .fade {
		   -webkit-animation-name: fade;
		   -webkit-animation-duration: 1.5s;
		   animation-name: fade;
		   animation-duration: 1.5s;
		 }
		@-webkit-keyframes fade {
		   from {opacity: .4}
		   to {opacity: 1}
		 }
		@keyframes fade {
		   from {opacity: .4}
		   to {opacity: 1}
		 }
 	</style>
 	

	<div class="giohang">
		<div class="chitiet">
			<a href=""><i class="fas fa-home"></i>Trang chủ</a>/iPhone/<?php echo $record->name; ?>
		</div>
		<div class="giohang_title">
				<h3><?php echo $record->name; ?></h3>
		</div>
		<div class="chitiet_sp">
			<fieldset style="border: solid 0.5px; color: grey; border-radius: 5px;">
				<div class="slideshow-container">
				  <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
				   <div class="mySlides fade">
				     <div class="numbertext">1 / 3</div>
				     <img src="assets/upload/products/<?php echo $record->photo; ?>">
				   
				   </div>
				  <div class="mySlides fade">
				     <div class="numbertext">2 / 3</div>
				     <img src="assets/upload/products/<?php echo $record->photo; ?>">
				   
				   </div>
				  <div class="mySlides fade">
				     <div class="numbertext">3 / 3</div>
				     <img src="assets/upload/products/<?php echo $record->photo; ?>">
				   
				   </div>
				  <!-- Nút điều khiển mũi tên-->
				   <a class="prev" onclick="plusSlides(-1)">❮</a>
				   <a class="next" onclick="plusSlides(1)">❯</a>
				 </div>
				 <br>
				<!-- Nút tròn điều khiển slideshow-->
				 <div style="text-align:center">
				   <span class="dot" onclick="currentSlide(1)"></span>
				   <span class="dot" onclick="currentSlide(2)"></span>
				   <span class="dot" onclick="currentSlide(3)"></span>
				 </div>
			</fieldset>
			<div class="info">
				<div class="giamgia" style="color: red; font-size: 24px;font-weight: 600; display: flex; position: absolute; " >
					 <?php echo number_format($record->price - ($record->price * $record->discount)/100); ?> đ
				</div>
				<div class="gia" style="margin-left: 0px; font-size: 20px; color: black; margin-left: 150px;">
				<?php echo number_format($record->price); ?>đ
				</div>				
				<table>
					<tr class="mau">
						<td>Kích thước màn hình</td>
						<td><?php echo $record->monitor; ?></td>
					</tr>
					<tr>
						<td>Hệ điều hành</td>
						<td><?php echo $record->operating_system; ?></td>
					</tr>
					<tr class="mau">
						<td>Pin</td>
						<td><?php echo $record->battery; ?></td>
					</tr>
					<tr>
						<td>Trọng lượng</td>
						<td><?php echo $record->weight; ?></td>
					</tr>
					<tr class="mau">
						<td>Công nghệ màn hình</td>
						<td><?php echo $record->screen_technology; ?></td>
					</tr>
					<tr>
						<td>Camera sau</td>
						<td><?php echo $record->rear_camera; ?></td>
					</tr>
					<tr class="mau">
						<td>Camera trước</td>
						<td><?php echo $record->front_camera; ?></td>
					</tr>
					<tr>
						<td>Chipset</td>
						<td><?php echo $record->chipset; ?></td>
					</tr>
					<tr class="mau">
						<td>Dung lượng RAM</td>
						<td><?php echo $record->ram; ?></td>
					</tr>
					<tr>
						<td>Rom</td>
						<td><?php echo $record->rom; ?></td>
					</tr>
					<tr class="mau">
						<td>Thẻ SIM</td>
						<td><?php echo $record->sim; ?></td>
					</tr>
					
				</table>
			
				<button><a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>">Thêm vào giỏ</a></button>
				
			</div>

		</div>
		<!-- rating -->
				
		      <div style="border:1px solid #dddddd; margin-top: 15px; width: 400px; margin-left: 490px; margin-top: 20px;">
		        <h4 style="padding-left: 10px;">Rating</h4>
		        <table style="width: 100%;">
		          <tr>
		            <td style=" width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"></td>
		            <td style="width: 14%; "><span class="label label-primary" style="text-align: center;"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
		          </tr>
		          <tr>
		            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
		            <td><span class="label label-warning"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
		          </tr>
		          <tr>
		            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
		            <td><span class="label label-danger"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
		          </tr>
		          <tr>
		            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
		            <td><span class="label label-info"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
		          </tr>
		          <tr>
		            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
		            <td><span class="label label-success"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
		          </tr>
		        </table>
		        <br>
		      </div>
      <!-- /rating -->
		
	</div>

</main>
<div class="middle" style="width: 1000px;margin-left: 100px;">
 	
 	
 	<p><?php  echo $record->content; ?></p>
 </div>
<script type="text/javascript">
		   var slideIndex = 1;
		 showSlides(slideIndex);
		function plusSlides(n) {
		   showSlides(slideIndex += n);
		 }
		function currentSlide(n) {
		   showSlides(slideIndex = n);
		 }
		function showSlides(n) {
		   var i;
		   var slides = document.getElementsByClassName("mySlides");
		   var dots = document.getElementsByClassName("dot");
		   if (n > slides.length) {slideIndex = 1}
		   if (n < 1) {slideIndex = slides.length}
		   for (i = 0; i < slides.length; i++) {
		       slides[i].style.display = "none";
		   }
		   for (i = 0; i < dots.length; i++) {
		       dots[i].className = dots[i].className.replace(" active", "");
		   }
		   slides[slideIndex-1].style.display = "block";
		   dots[slideIndex-1].className += " active";
		 }
 </script>