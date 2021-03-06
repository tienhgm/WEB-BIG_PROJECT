<div class="col-md-12" >
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=location&action=create" class="btn btn-primary">Add Location</a>
    </div>
    <div class="card card-primary">
        <h6 class="card-header" style="color: white;background:#C79F32">Categories</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <?php foreach($listRecord as $rows): ?>
              <tbody>
                <tr>
                  <td><?php echo $rows->name; ?></td>
                  <td style="text-align:center;">
                      <a class="badge badge-primary" href="index.php?controller=location&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a class="badge badge-danger" href="index.php?controller=location&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <a href="index.php?controller=location&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
