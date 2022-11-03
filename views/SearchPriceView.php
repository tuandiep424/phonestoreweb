<?php  
		$this->fileLayout = "LayoutTrangTrong.php";	
 ?>
 <main>
	<div class="danhmuc">
		<h3>Tim Kiem</h3>
		<div class="timkiem">
			<div class="danhmuc1">
				<h4>Danh mục</h4>
					<select id="dienthoai">
						<option value="iphone"></option>
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
		<a href=""><h3> Iphone</h3></a>
		<a href=""><h3>Samsung</h3></a>
		<a href=""><h3>Oppo</h3></a>
		<a href=""><h3>Huawei</h3></a>
	</div>

	<div class="list">
		<div class="title1">
			<a href=""><i class="fas fa-home"style="color: black" ></i>Trang chủ</a>/Iphone
		</div>
		<div class="list_title">
				<h3>Tim kiem san pham Gia tu <?php echo number_format($fromPrice); ?> VND <?php echo number_format($toPrice); ?> VND</h3>
		</div>

		<div class="list_sp">
			
			<div class="product">
				<style type="text/css">
					.gia{color: red;font-weight: 600;text-decoration-line: line-through}
					.giamgia{color: red; margin-left: 24px;font-weight: 600}
					.stars{ position: absolute;}
					.fas{color: yellow;}
					.discount{position: absolute; width: 40px; line-height: 40px; text-align: center;background: black; color: white; border-radius: 50px;}
					.wishlist{position: absolute; width: 20px; line-height: 20px; text-align: center; background: blue; color: white; border-radius: 50px; right: 20px; top: 10px;}
				</style>
				<?php foreach($data as $rows): ?>
				<div class="sanpham1" style="overflow: hidden;">
					<!-- ----------discount------------ -->
					<?php if($rows->discount > 0 ): ?>
					<div class="discount"><?php echo $rows->discount; ?>%</div>
					<div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color: white;"><span class="fa fa-heart"></span></a></div>
					<?php endif; ?>
					<a href=""><img src="assets/upload/products/<?php echo $rows->photo; ?>"style="width: 60%; margin-left: 30px;" ></a>
					<div class="title">
						<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"></a><h3><?php echo $rows->name; ?></h3></a>
					</div>
					<div class="gia">
						<?php echo number_format($rows->price); ?>
					</div>
					<div class="giamgia">
						 <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>
					</div>
					<div class="stars">
					 <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fas fa-star"></i></a>
					  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fas fa-star"></i></a>
					  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fas fa-star"></i></a>
					  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fas fa-star"></i></a>
					  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fas fa-star"></i></a>
					</div>
					<div class="them"style="position: absolute; bottom: 20px;background-color: #5bc0de; ">
						<a href=""><i class="fas fa-shopping-cart" style="color: white;"></i></a>
						<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" ><h3>Thêm giỏ hàng</h3></a>
					</div>			
				</div>
				<?php endforeach; ?>
			</div>
			
		</div>
	</div>
</main>