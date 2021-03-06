<div class="col-md-12" >
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=ownerUsers&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="card card-primary">
       <h6 class="card-header" style="color: white;background:#C79F32">Owner-User</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr style="text-align: center;">
                  <!-- <th scope="col">id</th> -->
                  <th scope="col">Full name</th>
                  <th scope="col" style="width: 200px;">Email</th>
                  <th scope="col" style="width: 150px;">Phone Number</th>
                  <th scope="col">CMND</th>
                  <th scope="col">Address</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr >
                  <!-- <th scope="row"><?php echo $rows->id; ?></th> -->
                  <th><?php echo $rows->name; ?></th>
                  <th><?php echo $rows->email; ?></th>
                  <th><?php echo $rows->phonenumber; ?></th>
                  <th><?php echo $rows->cmnd;?></th>
                  <th><?php echo $rows->address;?></th>
                  <td style="text-align:center;">
                    <?php if($rows->active==1): ?>
                      <a class="badge badge-primary" href="index.php?controller=ownerUsers&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                      <a class="badge badge-danger" href="index.php?controller=ownerUsers&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    <?php else: ?>
                      <a class="badge badge-success" href="index.php?controller=ownerUsers&action=setActive&id=<?php echo $rows->id;?>">Active</a>
                      <a class="badge badge-success" href="index.php?controller=ownerUsers&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    <?php endif; ?>
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
                    <a href="index.php?controller=ownerUsers&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>