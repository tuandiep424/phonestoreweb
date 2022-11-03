<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Anh</th>
                    <th>Name</th>
                    <th style="width:200px;">Category</th>
                    <th style="width:50px;">Hot</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                    <tr>
                        <td>
                            <?php
                                if($rows->photo != ""&& file_exists("../assets/upload/products/".$rows->photo)):
                            ?>

                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">;
                            <?php endif; ?>
                        </td>
                        <td><?php echo $rows->name; ?></td>
                        <td>
                            <?php 
                            //co the truy cap truc tiep csdl tu view
                                $conn = Connection::getInstance();
                                $query = $conn->query("select name from categories where id=$rows->category_id");
                                $categories = $query->fetch();
                                echo isset($categories->name) == true ? $categories->name : "";

                            ?>
                        </td>
                        <td style="text-align:center;">
                            <?php if(isset($rows->hot)): ?>

                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                        </td>
                        <td style="text-align:center;">
                            <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                            <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
             <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>