<?php  
		$this->fileLayout = "LayoutTrangTrong.php";	
 ?>
 <div class="giohang_content">
 	<div class="giohang_title">
 		
 			<table class="xoa" border="1px" style="border-collapse: collapse; width: 60%; margin: 0 auto; margin-top: 50px;">
 			<thead>
 				<tr>
 					<th style="width:200px;height: 30px">Ảnh sản phẩm</th>
 					<th style="width: 400px;">Tên sản phẩm</th>
 					<th style="width:100px;">Giá</th>
 					<th style="width: 50px;">Xóa</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php foreach($_SESSION['wishlist'] as $product): ?>
 					<style type="text/css">
 						img{height: 150px;width: 150px;}
 						tr a{text-decoration: none; text-align: center !important; font-weight: 500; font-size: 20px;}
 					</style>
 				<tr>
 					<td style="width: 200px;"><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" ></td>
 					<td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
 					<td style="text-align: center;"><?php echo number_format($product['price'] - ($product['price'] * $product['discount'])/100); ?>₫</td>
 					<td style="text-align: center;"><a href="index.php?controller=wishlist&action=delete&id=<?php echo $product['id']; ?>"><i class="fa fa-trash"></i></a></td>
 				</tr>
 				<?php endforeach; ?>
 			</tbody>
 			
 		</table>
 		
 	</div>
 </div>