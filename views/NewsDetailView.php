<?php 
	$this->fileLayout = "LayoutTrangTrong.php"
 ?>
 <style type="text/css">
 	.middle{margin-left: 100px; }
 	img{width: 800px;}
 	p{}
	h2{margin-top: 50px; margin-bottom: 100px;}
 </style>
 <div class="middle">
 	<h2><?php  echo $record->name; ?></h2>
	 <img src="assets/upload/news/<?php echo $record->photo; ?>"  alt="<?php echo $rows->name ?>" title="<?php echo $rows->name ?>" 
	 class="img-responsive"  >

 	<p><?php  echo $record->description; ?></p>
 	<p><?php  echo $record->content; ?></p>
 </div>