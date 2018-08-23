<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload รูปภาพ</title>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
function validate() {
	$("#file_error").html("");
	$(".demoInputBox").css("border-color","#F0F0F0");
	var file_size = $('#pic')[0].files[0].size;
	if(file_size>2097152) {
		$("#file_error").html("<font color='#F31616'>รูปภาพของท่านมีขนาดใหญ่เกิน 2 MB</font>");
		$(".demoInputBox").css("border-color","#FF0000");
		return false;
	} 
	return true;
}
</script>

<style>
.txtred{
    color: #F31616;
}
</style>
</head>

<body>
    <div class="container">
        <div class="row py-5">
            <div class="offset-3 col-md-6">
                <div class="card">
                    <div class="card-header ">
                       <h2> Upload  รูปภาพ </h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">เลือกรูปภาพ</h5>
                        <p class="card-text">** maximum 2MB. Type .jpg .png</p>
                        <form class="form-control" action="upload.php" method="post" enctype="multipart/form-data" onSubmit="return validate();">
                            <input type="file" name="pic[]" id="pic"  required="required" /> 
                            <input type="submit" value="อัพโหลดไฟล์ภาพ" />
                            <span id="file_error"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>