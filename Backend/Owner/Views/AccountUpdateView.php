<div class="col-md-12">  
    <div class="card card-primary">
        
        <h6 class="card-header bg-info" style="color: white">Detail</h6>
        <form method="post" action="index.php?controller=account&action=updatePost" style="margin: 25px 0;">
        	<!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%">Email</div>
                <div class="col-md-9">
                    <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" disabled>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%">Name</div>
                <div class="col-md-9">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%">Password</div>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%" style="margin-left: 3%">Phone number</div>
                <div class="col-md-9">
                    <input type="number" value="<?php echo isset($record->phonenumber)?$record->phonenumber:""; ?>" name="phonenumber" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%">CMND</div>
                <div class="col-md-9">
                    <input type="number" value="<?php echo isset($record->cmnd)?$record->cmnd:""; ?>" name="cmnd" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
             <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2" style="margin-left: 3%">Address</div>
                <div class="col-md-9">
                    <input type="text" value="<?php echo isset($record->address)?$record->address:""; ?>" name="address" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:20px;">
                <div class="col-md-2"></div>
                <div class="col-md-10" style="margin-left: 35px">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
     
    </div>
</div>