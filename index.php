<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Create PDF file from form</title>
		<link href="style.css" rel="stylesheet"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	
	<body>
		<div class="container">	
			<div class="row col-sm-12 col-md-12 col-lg-12">
				<div class="modal-body">
					<p>Please fill in your details below.</p>
					<form action="generatePdf.php" method="post" enctype="multipart/form-data" class="form-horizontal style-form">
						<div class="form-group">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<input type="text" class="form-control" name="fullname" value="Enter Your Full Name" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">		
							</div>	
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<input type="text" class="form-control" name="email" value="Enter Your Email Address" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">		
							</div>	
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<input type="text" class="form-control" name="contactno" value="Enter Your Contact No" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">		
							</div>	
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<textarea onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" class="form-control" name="comments" rows="10">Enter Your Comments</textarea>		
							</div>	
						</div>
						<div class="form-group">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<input class="btn btn-success" type="submit" value="Submit">
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>