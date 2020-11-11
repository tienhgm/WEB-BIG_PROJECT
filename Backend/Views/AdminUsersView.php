<div class="col-md-12" style="margin-left: 20px;">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=adminUsers&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="panel panel-primary">
       
        <div class="panel-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Full name</th>
                  <th scope="col">Email</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $rows->id; ?></th>
                  <td><?php echo $rows->name; ?></td>
                  <td><?php echo $rows->email; ?></td>
                  
                  <td style="text-align:center;">
                    <a href="index.php?controller=adminUsers&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a href="index.php?controller=adminUsers&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <a href="index.php?controller=adminUsers&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>