<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
        <!-- muon upload duoc file thi trong the form phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">&nbsp;&nbsp;Sản phẩm nổi bật</label>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">% giảm giá</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->discount)?$record->discount:""; ?>" name="discount" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <?php 
                        $categories = $this->modelCategories();
                     ?>
                    <select name="category_id" class="form-control" style="width:200px;">
                        <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->category_id)&&$record->category_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                            <?php 
                                $categoriesSub = $this->modelCategoriesSub($rows->id);
                             ?>
                             <?php foreach($categoriesSub as $rowsSub): ?>
                                <option <?php if(isset($record->category_id)&&$record->category_id == $rowsSub->id): ?> selected <?php endif; ?> value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                             <?php endforeach; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Kích thước màn hình</div>
                <div class="col-md-10">
                    <input type="text" name="monitor" value="<?php echo isset($record->monitor)?$record->monitor:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Hệ điều hành</div>
                <div class="col-md-10">
                    <input type="text" name="operating_system" value="<?php echo isset($record->operating_system)?$record->operating_system:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Pin</div>
                <div class="col-md-10">
                    <input type="text" name="battery" value="<?php echo isset($record->battery)?$record->battery:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Trọng lượng</div>
                <div class="col-md-10">
                    <input type="text" name="weight" value="<?php echo isset($record->weight)?$record->weight:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Công nghệ màn hình</div>
                <div class="col-md-10">
                    <input type="text" name="screen_technology" value="<?php echo isset($record->screen_technology)?$record->screen_technology:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Camera sau</div>
                <div class="col-md-10">
                    <input type="text" name="rear_camera" value="<?php echo isset($record->rear_camera)?$record->rear_camera:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Camera trước</div>
                <div class="col-md-10">
                    <input type="text" name="front_camera" value="<?php echo isset($record->front_camera)?$record->front_camera:""; ?>" class="form-control" >
                </div>
            </div>

            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Chipset</div>
                <div class="col-md-10">
                    <input type="text" name="chipset" value="<?php echo isset($record->chipset)?$record->chipset:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Dung lượng RAM</div>
                <div class="col-md-10">
                    <input type="text" name="ram" value="<?php echo isset($record->ram)?$record->ram:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Rom</div>
                <div class="col-md-10">
                    <input type="text" name="rom" value="<?php echo isset($record->rom)?$record->rom:""; ?>" class="form-control" >
                </div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Thẻ SIM</div>
                <div class="col-md-10">
                    <input type="text" name="sim" value="<?php echo isset($record->sim)?$record->sim:""; ?>" class="form-control" >
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giới thiệu</div>
                <div class="col-md-10">
                    <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                    
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Chi tiết</div>
                <div class="col-md-10">
                    <textarea name="content"><?php echo isset($record->content)?$record->content:""; ?></textarea>
                   
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>