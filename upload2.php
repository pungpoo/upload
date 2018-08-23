<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload รูปภาพ</title>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<style>
txtred{
  
}
</style>
</head>
<body>
    <div class="container">
        <div class="row py-5">
            <div class="offset-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Upload Result
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">*</h5>
                        <p class="card-text">****</p>
                        <?php
                        for($i=0;$i<count($_FILES['pic']['name']);$i++){
                           $pic_tmp=$_FILES['pic']['tmp_name'][$i];
                           $pic_name=$_FILES['pic']['name'][$i];
                           $ext=strtolower(end(explode(".",$pic_name)));

                    
                           if($ext=="jpg" or $ext=="jpeg" or $ext=="png") {
                              copy($pic_tmp,"img/".$pic_name);
                              echo "<img src='img/$pic_name' class='img-thumbnail' >";
                              echo "นำ URL ด้านล่างไปใช้งาน";
                              echo "<p> http://localhost/upload/img/"."$pic_name"."</p>";
                           }
                        unlink($pic_tmp);
                         }
                        ?>
                        <div class="py-3"><a href="index.html" class="btn btn-info"> Upload รูปภาพอื่น </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>

</body>
</html>