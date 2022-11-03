<?php 
	$this->fileLayout = "LayoutTrangChu.php";
 ?>
 <main>
 <h2>SẢN PHẨM BÁN CHẠY</h2>
 	
	<div class="product" >
		<style type="text/css">
			.discount{position: absolute; width: 40px; line-height: 40px; text-align: center;background: black; color: white; border-radius: 50px;}
			.wishlist{position: absolute; width: 20px; line-height: 20px; text-align: center; background: blue; color: white; border-radius: 50px; right: 20px; top: 10px;}
			 .sanpham1{
				width: 1280px;
				position: absolute;
				height: 900px;
				width: 214px;
				border: 1px solid #ccc;
				margin-right: 103px;
			}
			h4{
				margin-left: 25px;
				margin-top: 20px;
			}
			.sanpham1 a img{height: 150px; margin-left: 20px;}
		 	.sanpham1 .them{position: absolute; bottom: 20px;}
		 	.sanpham1 hover{position: relative; border: 1px solid red;}
		 	.sanpham1 .title a{text-decoration: none; color: black;}
		 	.gia{text-decoration-line: line-through;}
		</style>
		<?php 
		// tu view co the goi truc tiep tat ca cac ham trong HomeController hoac HomModel
		$hotProduct = $this->modelHotProduct(); ?>
		 <?php foreach($hotProduct as $rows): ?>
		
		<div class="sanpham1">
			<!-- ----------discount------------ -->
			<?php if($rows->discount > 0 ): ?>
			<div class="discount"><?php echo $rows->discount; ?>%</div>
			<?php endif; ?>
			<!-- whishlist -->
			<div class="wishlist"><a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color: white;"><span class="fa fa-heart"></span></a></div>
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
			<style type="text/css">
				.stars a{text-decoration: none; color: yellow;}
			</style>
			<div class="stars">
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fas fa-star"></i></a>
			</div>
			<div class="them" >
				<a href=""><i class="fas fa-shopping-cart"></i></a>
				<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><h3>Thêm giỏ hàng</h3></a>
			</div>			
		</div>
		<?php endforeach; ?>
	</div>
<!-- ----------------2 -->
	
	<h2>SẢN PHẨM MỚI NHẤT</h2>
	<?php 
	// ket noi csdl de truy van cau lenh sql 
	 $conn = Connection::getInstance();
    $query = $conn->query("select * from categories where parent_id=0 ");
		  $categories = $query->fetchAll();
	 ?>

	<?php $categories = $this->modelCategories() ?>
	<?php foreach($categories as $itemCategories): ?>
		<h3 style="margin-top: 30px; margin-bottom: 10px; font-size: 22px; margin-left: 20px;"><?php echo $itemCategories->name; ?></h3>
	<div class="product">

		<?php 
			// tu view co the goi truc tiep tat ca cac ham trong HomeController hoac HomModel
		$products = $this->modelProducts($itemCategories->id); ?>
		
		 <?php foreach($products as $rows): ?>

		<div class="sanpham1" style="width: 214px;">
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
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fas fa-star"></i></a>
			  <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fas fa-star"></i></a>
			</div>
			<div class="them">
				<a href=" "><i class="fas fa-shopping-cart"></i></a>
				<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><h3>Thêm giỏ hàng</h3></a>
			</div>			
		</div>
		<?php endforeach; ?>
		
	</div>
<?php endforeach; ?>
<!-- ----------------2 -->
<h2>HOT NEWS</h2>
	<div class="product1">
		<?php $news = $this->modelHotNews(); ?>
		<?php foreach($news as $rows): ?>
		<div class="sanpham1" style="width: 214px;">
			<a href="index.php?controller=news&&action=detail&id=<?php echo $rows->id; ?>">
				<img src="assets/upload/news/<?php echo $rows->photo; ?>"></a>
				<h4><p class="desc"><?php  echo $rows->name; ?></p></h4>
			
			<style type="text/css">
				img{width: 80%;}
			</style>
		</div>
		<?php endforeach; ?>
	</div>
</main>