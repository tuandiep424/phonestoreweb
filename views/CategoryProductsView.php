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
			
			<!-- <button class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;"/>Tìm kiếm</button> -->
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

	<div class="list">
		<div class="title1">
			<a href=""><i class="fas fa-home"></i>Trang chủ</a>/
			<?php $category = $this->modelGetCategory($category_id);
			echo $category->name ?>
		</div>
		<div class="list_title">
				<h3><?php $category = $this->modelGetCategory($category_id);
				echo isset($category->name) ? $category->name : "";
				 ?></h3>
		</div>
		<div class="sapxep" style="width: 150px;margin-left: 850px;">
			<?php 
				$order = isset($_GET["order"]) ? $_GET["order"] : ""
			 ?>
			<select class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;"  >
				
	          <option value="0" style="font-size: 16px;">Sắp xếp</option>
	          <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc" >Giá tăng dần</option>
	          <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
	          <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
	          <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>

	        </select>
		</div>
		 <style type="text/css">
					option{font-size: 18px;}
				</style>

		<div class="list_sp" >
			
			<div class="product" style="display: flex; flex-wrap: wrap;">
				<style type="text/css">
					.discount{position: absolute; width: 40px; line-height: 40px; text-align: center;background: black; color: white; border-radius: 50px;}
					.wishlist{position: absolute; width: 20px; height: 20px; line-height: 20px; text-align: center; background: blue; color: white; border-radius: 50px; right: 20px; top: 10px;}
					 .sanpham1{
						width: 1280px;
						position: absolute;
						height: 900px;
						width: 245px;
						border: 1px solid #ccc;
						margin-right: 103px;
					}
		
				</style>
				<?php foreach($data as $rows): ?>
				<div class="sanpham1" style="width: calc(100%/5); margin-bottom: 30px; width: 214px;">
					 <style type="text/css">
					 	.sanpham1 a img{height: 150px; margin-left: 20px;}
					 	.sanpham1 .them{position: absolute; bottom: 20px;}
					 	.giamgia{color: red; margin-left: 25px;}
					 	.gia{text-decoration-line: line-through;}
					 </style>
					<!-- ----------discount------------ -->
					<?php if($rows->discount > 0 ): ?>
					<div class="discount"><?php echo $rows->discount; ?>%</div>
					<div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color: white;"><span class="fa fa-heart"></span></a></div>
					<?php endif; ?>

					<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>"></a>
					<div class="title">
						<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><h3><?php echo $rows->name; ?></h3></a>
					</div>
					<div class="gia">
						<?php echo number_format($rows->price); ?>
					</div>
					<div class="giamgia">
						 <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>
					</div>
					<div class="stars">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					</div>
					<div class="them" style="background-color: #5bc0de;">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
						<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><h3>Thêm giỏ hàng</h3></a>
					</div>			
				</div>
				<?php endforeach; ?>
			</div>
			
		</div>
	</div>
</main>