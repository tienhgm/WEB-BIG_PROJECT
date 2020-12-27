<div class="col-md-12" >
    <div style="margin-bottom:5px;">
      <?php if($this->modelGetOwnerActive($_SESSION["ownerId"])==1): ?>
        <a href="products/create" class="btn btn-primary">Add products</a>
      <?php endif; ?>
    </div>
    <div class="card card-primary">
        <h6 class="card-header bg-info" style="color: white">Products</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr style="text-align: center;">
                  <th scope="col" style="width: 100px;">photo</th>
                  <th scope="col">Name</th>
                  <th scope="col" style="width: 150px;">Category</th>
                  <th scope="col" style="width: 150px;">Price</th>
                  <th scope="col">District</th>
                  <th scope="col">Detail</th>
                  <th scope="col"style="width: 100px;"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr style="text-align: center;">
                  <td style="">
                    <?php if($rows->photo != "" && file_exists('../../Assets/Upload/TitleImg/'.$rows->photo)): ?>
                      <img src="../../Assets/Upload/TitleImg/<?php echo $rows->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                  </td>
                  <th><?php echo $rows->name; ?></th>
                  <th><?php echo $this->modelGetCategoryName($rows->category_id); ?></th>
                  <th> <?php echo number_format($rows->price);?> VNĐ</th>
                  <th><?php echo $this->modelGetLocationName($rows->location_id); ?></th>
                  
                  <td><a class="badge badge-warning" href="products/detail/<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a></td>
                  <td style="text-align:center;">
                    <?php if($rows->active==0): ?>
                    <a class="badge badge-primary" href="products/update/<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a class="badge badge-danger" href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    <?php else: ?>
                      <a class="badge badge-danger" href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    <?php endif; ?>
                  </td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
            
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
                .page-link{display: inline;}
                
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="products/page-<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>