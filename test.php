<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload รูปภาพ</title>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row py-5">
            <div class="offset-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Upload  รูปภาพ
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">เลือกรูปภาพ</h5>
                        <p class="card-text">** maximum 2MB. Type .jpg .png</p>
                        <form name="frmFile" id="frmFile" method="post" action=""  onSubmit="return validate();">
                            <div><input type="file" name="file" id="file" class="demoInputBox" /> <span id="file_error"></span></div>
                            <div><input type="submit" id="btnSubmit" value="Upload"/></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
function validate() {
	$("#file_error").html("");
	$(".demoInputBox").css("border-color","#F0F0F0");
	var file_size = $('#file')[0].files[0].size;
	if(file_size>2097152) {
		$("#file_error").html("File size is greater than 2MB");
		$(".demoInputBox").css("border-color","#FF0000");
		return false;
	} 
	return true;
}
</script>
</body>
</html>