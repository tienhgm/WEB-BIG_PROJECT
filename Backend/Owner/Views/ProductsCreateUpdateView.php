<div class="col-md-12">  
    <div class="panel panel-primary">
        <h2>Edit product</h2>
        <!-- muon upload duoc anh thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-8" >
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select class="form-control" style="width: 200px;" name="category_id">
                        <?php 
                            //lay cac danh muc cha
                            $categories = $this->modelGetCategories();
                         ?>
                         <?php foreach($categories as $rows): ?>
                            <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Location</div>
                <div class="col-md-10">
                    <select class="form-control" style="width: 200px;" name="location_id">
                        <?php 
                            //lay cac danh muc cha
                            $location = $this->modelGetLocation();
                         ?>
                         <?php foreach($location as $rows): ?>
                            <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
             <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Price</div>
                <div class="col-md-8">
                    <input type="number" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price"  class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-8" >
                    <input type="text" value="<?php echo isset($record->address)?$record->address:""; ?>" name="address" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">AREA</div>
                <div class="col-md-8" >
                    <input type="number" value="<?php echo isset($record->area)?$record->area:""; ?>" name="area" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Discount</div>
                <div class="col-md-8" >
                    <input type="number" value="<?php echo isset($record->discount)?$record->discount:""; ?>" name="discount" class="form-control" >
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">
                    <textarea id="description" name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phòng tắm</div>
                <div class="col-md-8" >
                    <input type="text" value="<?php echo isset($record->phong_tam)?$record->phong_tam:""; ?>" name="phong_tam" class="form-control" required> (có hay không? kín hay chung?)
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phòng bếp</div>
                <div class="col-md-8" >
                    <input type="text" value="<?php echo isset($record->phong_bep)?$record->phong_bep:""; ?>" name="phong_bep" class="form-control" required> (có hay không? kín hay chung?)
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-3">Chung chủ</div>
                <div class="col-md">
                    <input type="checkbox" <?php if(isset($record->chung_chu)&&$record->chung_chu == 1): ?> checked <?php endif; ?> name="chung_chu" > 
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-3">Điều hòa</div>
                <div class="col-md">
                    <input type="checkbox" <?php if(isset($record->dieu_hoa)&&$record->dieu_hoa == 1): ?> checked <?php endif; ?> name="dieu_hoa"> 
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-3">Ban công</div>
                <div class="col-md">
                    <input type="checkbox" <?php if(isset($record->ban_cong)&&$record->ban_cong == 1): ?> checked <?php endif; ?> name="ban_cong"> 
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Giá điện nước</div>
                <div class="col-md-8" >
                    <input type="text" value="<?php echo isset($record->gia_dien_nuoc)?$record->gia_dien_nuoc:""; ?>" name="gia_dien_nuoc" class="form-control" required > 
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">quantities</div>
                <div class="col-md-8" >
                    <input type="number" value="<?php echo isset($record->quantities)?$record->quantities:""; ?>" name="quantities" class="form-control" required> 
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <br>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
     
    </div>
</div>