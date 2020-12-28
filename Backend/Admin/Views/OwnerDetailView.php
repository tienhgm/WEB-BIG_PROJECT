

<div class="col-md-12" >
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add products</a>
    </div>
    <div class="card card-primary">
        <h6 class="card-header" style="color: white;background:#C79F32">Products</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr style="text-align: center;">
                  <th scope="col" style="width: 100px;">photo</th>
                  <th scope="col">Name</th>
                  <th scope="col" style="width: 150px;">Category</th>
                  <th scope="col" style="width: 150px;">Price</th>
                  <th scope="col">District</th>
                  <th scope="col" style="width: 80px;">Discount</th>
                  <th scope="col">Detail</th>
                  <th scope="col"style="width: 100px;"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr style="text-align: center;">
                  <td style="">
                    <?php if($rows->photo != "" && file_exists('../.../Assets/Upload/Products/'.$rows->photo)): ?>
                      <img src="../../Assets/Upload/Products/<?php echo $rows->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                  </td>
                  <th><?php echo $rows->name; ?></th>
                  <th><?php echo $this->modelGetCategoryName($rows->category_id); ?></th>
                  <th> <?php echo number_format($rows->price);?> VNĐ</th>
                  <th><?php echo $this->modelGetLocationName($rows->location_id); ?></th>
                  <th><?php echo number_format($rows->discount); ?> %</th>
                  
                  <td><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id;?>" class="label label-success">Chi tiết</a></td>
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