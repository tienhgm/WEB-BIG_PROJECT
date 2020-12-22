<div class="col-md-12">  
    <div class="panel panel-primary">
        <h2>Edit Slider</h2>
        <div style="margin-bottom:5px;">
            <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
        </div>
        <!-- muon upload duoc anh thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Title</div>
                <div class="col-md-10">
                    <textarea id="title" class="title" name="title"><?php echo isset($record->title)?$record->title:""; ?> </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("title");    
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">
                    <textarea id="description" class="description" name="description"><?php echo isset($record->description)?$record->description:""; ?> </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");    
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Slide photo</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <br>
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