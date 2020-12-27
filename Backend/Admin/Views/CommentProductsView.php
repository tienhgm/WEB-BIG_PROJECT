<div class="col-md-12" >
    <div class="card card-primary">
       <h6 class="card-header" style="color: white;background:#C79F32">Slide</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr style="text-align: center;">
                  <!-- <th scope="col">id</th> -->
                  <th scope="col" style="width: 200px;">Người dùng</th>
                  <th scope="col" style="width: 290px;" >Bài viết</th>
                  <th scope="col" style="width: 100px;" >Điểm</th>
                  <th scope="col" style="width:200px;">Comment</th>
                  <th scope="col" style="width:180px;">Ngày đăng</th>
                  <th scope="col" style="width: 100px;"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr style="text-align: center;">
                  <th>
                   	<?php echo $this->modelGetNameRenter($rows->renter_users_id); ?>
                  </th>
                  <th>
                  	<?php echo $this->modelGetNameProduct($rows->product_id); ?>
                  </th>
                  <th>
                  	<?php echo number_format($rows->star); ?>    
                  </th>
                  	
                  <th>
                    <?php echo $rows->comment; ?>
                  </th>
                  <th>
                  	<?php 
                  		$date=date_create($rows->date);
                  		echo date_format($date,"d/m/Y");
                  	 ?>
                  </th>
                  <td><a class="badge badge-danger" href="index.php?controller=commentProducts&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <a href="index.php?controller=commentProducts&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>