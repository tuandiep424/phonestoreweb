<?php  
		$this->fileLayout = "LayoutTrangTrong.php";	
 ?>
<main>
	<div class="danhmuc">
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
	              <li class="list-group-item" style="border:0px;">Đến &nbsp;
	                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
	              </li>
	              <li class="list-group-item" style="border:0px; text-align:center">
	                <input style="background-color: blue; border-color: blue; color: white; height: 30px; width: 100px;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;">
	              </li>
	            </ul>
			</div>
			
		</div>
		<?php 
		// ket noi csdl de truy van cau lenh sql 
		 $conn = Connection::getInstance();
	    $query = $conn->query("select * from categories where parent_id=0 order by id desc");
			  $categories = $query->fetchAll();
		 ?>	
		 <style type="text/css"></style>
		<?php foreach($categories as $rows): ?>
		<h3 ><li style="list-style-type: none;"><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li></h3>
		<?php endforeach; ?>
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
		main .giohang .giohang_content{
			position: absolute;
			border: 1px solid #ccc;
		}
		main .giohang .giohang_content table{
			margin-left: 20px;
			
		}
		main .giohang .giohang_content table tr{
			height: 50px;
		}
		main .giohang .giohang_content table tr .a{
			width: 40px;
		}
		main .giohang .giohang_content table tr .b{
			width: 200px;
		}
		main .giohang .giohang_content table tr .c{
			width: 90px;
		}
		main .giohang .giohang_content table tr .d{
			width: 110px;
		}
		main .giohang .giohang_content table tr .e{
			width: 110px;
		}
		main .giohang .giohang_content table tr .f{
			width: 90px;
		}
		main .giohang table img{
			height: 30px;
			width: 30px;
		}
		main .giohang .giohang_content table td input{
			width: 25px;
			height: 25px;
		}
		main .giohang .giohang_content table td i{
			color: red;
		}
		main .giohang .giohang_content table .xoa a{
			font-weight: 600;
			color: red;
		}
		main .giohang .giohang_content table .thaydoi_sl{
			width: 25px;
			height: 25px;
		}

	</style>
	<div class="giohang">
		<form action="index.php?controller=cart&action=update" method="post">
		<div class="chitiet">
			<a href=""><i class="fas fa-home"></i>Trang chủ</a>/chi tiết giỏ hàng
		</div>
		<div class="giohang_content" >
			<div class="giohang_title">
				<h3>GIỎ HÀNG</h3>
			</div>
				<table class="xoa"> 

					<tr>
						<td class="a"><h4>STT</h4></td>				
						<td class="b"><h4>Tên sản phẩm</h4></td>
						<td class="c"><h4>Hình ảnh</h4></td>
						<td class="d"><h4>Số lượng</h4></td>
						<td class="e"><h4>Thành tiền</h4></td>
						<td class="f"><h4>Xóa</h4></td>
						
					</tr>
					<?php foreach($_SESSION['cart'] as $key => $product): ?>
						<style type="text/css">
							.xoa .action img{width: 100px; height: 100px;}
							input{margin-left: 15px;}
						</style>
					<tr class="action">						
						<td>1</td>
						<td><a href="index.php/controller=products&action=detail&id=<?php echo $product["id"]; ?>"></a><?php echo $product["name"]; ?></td>
						<td><img src="assets/upload/Products/<?php echo $product['photo']; ?>"></td>
						<td>
							<input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống">
							
						</td>
						<td><?php echo number_format($product["price"] - ($product["number"] * $product["discount"])/100) ?></td>
						<td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"><i class="fas fa-trash"></i></a></td>
					</tr>
					<?php endforeach;  ?>
					
					<tr>
						<?php if($this->cartNumber() > 0): ?>
						<td></td>
						<td></td>
						<td></td>
						<td><h3>Tổng tiền</h3></td>
						<td><span id="total_price_product"><?php echo number_format($this->cartTotal()); ?>₫</span></td>
						<td><button class="xoahet" style="background-color: red;font-size: 16px; font-weight: 600;height: 30px; width: 40px; border-color: red; border-radius: 5px;" ><a href="index.php?controller=cart&action=destroy" style="color: black;"> Xóa</a></button></td>
						<?php endif; ?>
					</tr>		
				</table>			
				<?php if($this->cartNumber() > 0): ?>
					<div class="mua" style="margin-top: 30px; margin-left: 30px;">
						<button style="background-color: #337ab7;border-radius: 5px;height: 30px; width: 110px; border-color: #337ab7;font-size: 16px; font-weight: 600; " ><a href="index.php" style="color: black">tiep tuc mua</a></button>
						<button style="background-color: #337ab7;border-radius: 5px;height: 30px; width: 80px; border-color: #337ab7;font-size: 16px; font-weight: 600;margin-left: 140px;">cap nhat</button>
						
					</div>
					<div class="thanhtoan">
						<button>
							<a href="index.php?controller=cart&action=checkout">Thanh Toan</a>
						</button>
					</div>
				<?php endif; ?>
			</div>
			<style type="text/css">
				.thanhtoan{margin-left: 470px; margin-top: 30px; margin-bottom: 20px;}
				.thanhtoan button{background-color: #337ab7; height: 50px; width: 100px; border-color: #337ab7}
				.thanhtoan a{color: white; font-size: 16px; font-weight: 600}
			</style>
		</form>
	</div>
</main>