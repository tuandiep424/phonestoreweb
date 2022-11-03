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
			<div class="gia1">
				<h4>Giá từ</h4>
				<select id="giatu">
					<option value="">1.500.000</option>
					<option value="">2.000.000</option>
					<option value="">2.500.000</option>
					<option value="">3.000.000</option>
				</select>
			</div>
			<div class="gia2">
				<h4>Giá đến</h4>
				<select id="giaden">
					<option value="">7.500.000</option>
					<option value="">8.000.000</option>
					<option value="">11.500.000</option>
					<option value="">14.000.000</option>
				</select>
			</div>
			<button>Tìm kiếm</button>
		</div>
		<a href=""><h3> Iphone</h3></a>
		<a href=""><h3>Samsung</h3></a>
		<a href=""><h3>Oppo</h3></a>
		<a href=""><h3>Huawei</h3></a>
	</div>

	<div class="list">
		<div class="title1">
			<a href=""><i class="fas fa-home"></i>Trang chủ</a>/Iphone
		</div>
		<div class="list_title">
				<h3>Tim kiem san pham</h3>
		</div>
		<style type="text/css">
			.discount{position: absolute; width: 40px; line-height: 40px; text-align: center;background: black; color: white; border-radius: 50px;}
			.wishlist{position: absolute; width: 20px; line-height: 20px; text-align: center; background: blue; color: white; border-radius: 50px; right: 20px; top: 10px;}
		</style>
		<div class="list_sp">
			
			<div class="product">
				
				<?php foreach($data as $rows): ?>
				<div class="sanpham1" style="overflow: hidden;">
					<!-- ----------discount------------ -->
					<?php if($rows->discount > 0 ): ?>
					<div class="discount"><?php echo $rows->discount; ?>%</div>
					<?php endif; ?>
					<div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color: white;"><span class="fa fa-heart"></span></a></div>
					<a href=""><img src="assets/upload/products/<?php echo $rows->photo; ?>" style="width: 65%; margin-left: 30px;"></a>
					<div class="title">
						<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"></a><h3><?php echo $rows->name; ?></h3></a>
					</div>
					<div class="gia" style="text-decoration-line: line-through;">
						<?php echo number_format($rows->price); ?>
					</div>
					<div class="giamgia" style="color: red; margin-left: 20px;">
						 <?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>
					</div>
					<div class="stars">
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					  <i class="fas fa-star"></i>
					</div>
					<div class="them">
						<a href=""><i class="fas fa-shopping-cart"></i></a>
						<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><h3>Thêm giỏ hàng</h3></a>
					</div>			
				</div>
				<?php endforeach; ?>
			</div>
			
		</div>
	</div>
</main>