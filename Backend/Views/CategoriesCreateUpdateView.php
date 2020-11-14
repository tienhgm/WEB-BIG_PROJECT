<div class="col-md-12">  
    <div class="card card-primary">
        
        <h6 class="card-header bg-info" style="color: white">Create-Edit AdminUser</h6>
        <form method="post" action="<?php echo $action; ?>" style="margin: 20px 0;">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-1" style="margin-left: 2%">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            
           
            <!-- rows -->
            <div class="row" style="margin-top:20px;">
                <div class="col-md-2"></div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
     
    </div>
</div>