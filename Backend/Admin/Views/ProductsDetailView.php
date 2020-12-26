<div class="col-md-12">
    <div style="margin-bottom:5px;">
       <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>
    
    <div class="panel panel-primary">
        <div class="panel-heading">Products detail</div>
        <div class="panel-body">
            <!-- thong tin don hang -->
           <?php foreach($data as $rows): ?>
            <table class="table">
                
                <tr>
                    <th style="width:100px;">Name</th>
                    <td><?php echo $rows->name; ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Chủ sở hữu</th>
                    <td><?php echo $this->modelGetOwnerName($rows->owner_id); ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Category</th>
                    <td><?php echo $this->modelGetCategoryName($rows->category_id); ?></td>
                    <th style="width:100px;">Price</th>
                    <td><?php echo number_format($rows->price);?> VNĐ</td>
                </tr>
                <tr>
                    <th style="width:100px;">Location</th>
                    <td><?php echo $this->modelGetLocationName($rows->location_id); ?></td>
                    <th style="width:100px;">Address</th>
                    <td><?php echo $rows->address; ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Area</th>
                    <td><?php echo number_format($rows->area);?> m2</td>
                    
                </tr>
                <tr>
                    <th style="width:100px;">Phòng tắm</th>
                    <td><?php echo $rows->phong_tam;?></td>
                    <th style="width:100px;">Phòng Bếp</th>
                    <td><?php echo $rows->phong_bep;?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Giá điện nước</th>
                    <td><?php echo $rows->gia_dien_nuoc;?></td>
                    <th style="width:100px;">Quantities</th>
                    <td><?php echo $rows->quantities ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Chung chủ</th>
                    <td>
                        <?php if($rows->chung_chu == 1): ?>
                        <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th style="width:100px;">Điều hòa</th>
                    <td>
                        <?php if($rows->dieu_hoa == 1): ?>
                        <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th style="width:100px;">Ban công</th>
                    <td>
                        <?php if($rows->ban_cong == 1): ?>
                        <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th style="width:100px;">HOT</th>
                    <td>
                        <?php if($rows->hot == 1): ?>
                        <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>
                </tr>
                
                
                <tr>
                    <th style="width:100px;">Ngày đăng</th>
                    <td>
                        <?php  
                            $date= Date_create($rows->date);
                            echo Date_format($date, "d/m/Y");
                        ?>
                    </td>
                </tr>
                <tr>
                    <th style="width:100px;">Trạng thái</th>
                    <th>
                        <?php  
                            if($rows->active ==0){
                                echo "Bài viết chưa được kích hoạt";
                            }
                            else{
                                echo "Bài viết đã được kích hoạt";
                            }
                        ?>
                    </th>
                </tr>
            
            
            </table>
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px; text-align: center;">Photo</th>
                     <td><?php if($rows->photo != "" && file_exists('../../Assets/Upload/TitleImg/'.$rows->photo)): ?>
                      <img src="../../Assets/Upload/TitleImg/<?php echo $rows->photo; ?>" style="width:100px;">
                    <?php endif; ?></td>
                    
                </tr>
                <tr>
                    <th style="text-align: center;">Title</th>
                   
                    <td><?php echo $rows->title; ?></td>
                </tr>
                <tr>
                    <th style="text-align: center;">Mô tả</th>
                   
                    <td><?php echo $rows->description; ?></td>
                </tr>
               
            </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>