<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<h1>Tin tức</h1>
<style type="text/css">
  
</style>
<style type="text/css">
  
</style>
        <div class="wrapper-blog" > 
          <style type="text/css">
           .article a{text-decoration: none; color: black;}
           .article .desc{width: 330px;}
           .article h3{width: 330px;}
         </style>
          <!-- list news -->
          <div class="row" style="display: flex; width: calc(100%)/3; overflow: hidden; ">
            <?php foreach($data as $rows): ?>
            <div class="col-md-6 article" style="height: 400px; width: 500px; overflow: hidden; "> 
              <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> 
                <img src="assets/upload/news/<?php echo $rows->photo; ?>"  alt="<?php echo $rows->name ?>" title="<?php echo $rows->name ?>" class="img-responsive" style="height: 200px; " > </a>
              <h3><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
              
              <div class="desc"><?php echo "$rows->description" ?></div>
            </div>
          <?php endforeach; ?>
           
          </div>
          <!-- end list news --> 
         
          
        </div>