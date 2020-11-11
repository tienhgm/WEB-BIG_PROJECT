<div class="col-md-12" style="margin-left: 20px;">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add products</a>
    </div>
    <div class="panel panel-primary">
       
        <div class="panel-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <!-- <th scope="col">photo</th> -->
                  <th scope="col">Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">PRICE</th>
                  <th scope="col">ADDRESS</th>
                  <th scope="col">AREA</th>
                  <th scope="col">DISCOUNT</th>
                  <th scope="col">Description</th>
                  <th scope="col">Phòngtắm</th>
                  <th scope="col">Phòngbếp</th>
                  <th scope="col">ChungChủ</th>
                  <th scope="col">Điềuhòa</th>
                  <th scope="col">Bancông</th>
                  <th scope="col">Điện_Nước</th>
                  <th scope="col">Quantities</th>
                  <!-- <th scope="col">DATE</th> -->
                  <th scope="col"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr>
                 
                  <td><?php echo $rows->name; ?></td>
                  <th><?php echo $this->modelGetCategoryName($rows->category_id); ?></th>
                  <th> <?php echo number_format($rows->price);?> VNĐ</th>
                  <td><?php echo $rows->address; ?></td>
                  <td><?php echo number_format($rows->area);?> m2</td>
                  <td><?php echo number_format($rows->discount); ?> %</td>
                  <td><?php echo $rows->description; ?></td>
                  <td><?php echo $rows->phong_tam;?></td>
                  <td><?php echo $rows->phong_bep;?></td>
                  <td style="text-align: center;"> 
                  	<?php if($rows->chung_chu == 1): ?>
                        <span class="fa fa-check"></span>
                    <?php endif; ?>
                  </td>
                  
                  <td style="text-align: center;">
                  	<?php if($rows->dieu_hoa == 1): ?>
                        <span class="fa fa-check"></span>
                    <?php endif; ?>
                  </td>
                  <td style="text-align: center;">
                  	<?php if($rows->ban_cong == 1): ?>
                        <span class="fa fa-check"></span>
                    <?php endif; ?>
                  </td>
                  <td><?php echo $rows->gia_dien_nuoc;?></td>
                  <td><?php echo $rows->quantities;?></td>
                  <!-- <td></td> -->
                  <td style="text-align:center;">
                    <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                  </td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
            
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
                .page-link{display: inline;}
                .tien tr:nth-child(even){
                    color: green;
                }
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=products&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>