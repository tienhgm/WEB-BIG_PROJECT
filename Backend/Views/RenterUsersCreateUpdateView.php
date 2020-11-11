<div class="col-md-12" style="margin-left: 20px;">  
    <div class="panel panel-primary">
        <p>Edit Owner_users</p>
        
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="password" class="form-control" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phone number</div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="number" value="<?php echo isset($record->phonenumber)?$record->phonenumber:""; ?>" name="phonenumber" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10" style="margin-left: 20px;">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
     
    </div>
</div>