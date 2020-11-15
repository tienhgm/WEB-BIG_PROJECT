<div class="col-md-12">
    <div style="margin-bottom:5px;">
       <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>
    
    <div class="panel panel-primary">
        <div class="panel-heading">Orders detail</div>
        <div class="panel-body">
            <!-- thong tin don hang -->
           <?php foreach($data as $rows): ?>
            <table class="table">
                
                <tr>
                    <th style="width:100px;">Name</th>
                    <td><?php echo $rows->name; ?></td>
                    <th style="width:100px;">Category</th>
                    <td><?php echo $this->modelGetCategoryName($rows->category_id); ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Price</th>
                    <td><?php echo number_format($rows->price);?> VNĐ</td>
                    <th style="width:100px;">Address</th>
                    <td><?php echo $rows->address; ?></td>
                </tr>
                <tr>
                    <th style="width:100px;">Area</th>
                    <td><?php echo number_format($rows->area);?> m2</td>
                    <th style="width:100px;">Discount</th>
                    <td><?php echo number_format($rows->discount); ?> %</td>
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
                    <td>4</td>
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
                    <th style="width:100px;">Ngày đăng</th>
                    <td>
                        <?php  
                            $date= Date_create($rows->date);
                            echo Date_format($date, "d/m/Y");
                        ?>
                    </td>
                </tr>
            
            </table>
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px; text-align: center;">Photo</th>
                    <th style="text-align: center;">Mô tả</th>
                    
                </tr>
                
                <tr>
                    <td><?php if($rows->photo != "" && file_exists('../Assets/Upload/Products/'.$rows->photo)): ?>
                      <img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>" style="width:100px;">
                    <?php endif; ?></td>
                    <td><?php echo $rows->description; ?></td>
                </tr>
               
            </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>