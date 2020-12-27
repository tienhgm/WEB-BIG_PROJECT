<div class="col-md-12" >
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=slide&action=create" class="btn btn-primary">Add Slider</a>
    </div>
    <div class="card card-primary">
       <h6 class="card-header" style="color: white;background:#C79F32">Slide</h6>
        <div class="card-body">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr style="text-align: center;">
                  <!-- <th scope="col">id</th> -->
                  <th scope="col" style="width: 200px;">Slide photo</th>
                  <th scope="col" >Title</th>
                  <th scope="col" >Content</th>
                  <th scope="col" style="width:200px;"></th>
                </tr>
              </thead>
              <?php foreach($listRecordSlide as $rows): ?>
              <tbody>
                <tr >
                  
                  <td>
                    <?php if($rows->photo != "" && file_exists('../../Assets/Upload/Slides/'.$rows->photo)): ?>
                      <img src="../../Assets/Upload/Slides/<?php echo $rows->photo; ?>" style="width:200px;">
                    <?php endif; ?>
                  </td>
                  <th><?php echo $rows->title;?></th>
                  <th><?php echo $rows->description;?></th>
                  
                  <td style="text-align:center;">
                    <a class="badge badge-primary" href="index.php?controller=slide&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                    <a class="badge badge-danger" href="index.php?controller=slide&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <a href="index.php?controller=slide&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>