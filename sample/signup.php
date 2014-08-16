<?php 
$months = array(
	'january'   => 'January',
	'febuary'   => 'Febuary',
	'march'     => 'March',
	'april'     => 'April',
	'may'       => 'May',
	'june'      => 'June',
	'july'      => 'July',
	'august'    => 'August',
	'september' => 'September',
	'october'   => 'October',
	'november'  => 'November',
	'december'  => 'December'
);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Social Network | SignUp</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php include('includes/header.php'); ?>
		<div style="margin-top:32px;margin-bottom:32px;" class="container">
		<div class="row">
			<div style="background:#f6f6f6;box-shadow:0px 1px 8px rgba(0,0,0,0.1);border:1px solid #eee;" class="col-md-7">
				<h2 class="form-head">Sign Up</h2>
				<form method="post" id="signup" style="padding-top:50px;" class="form-horizontal" role="form">
			<div class="form-group">
			    <label for="firstname" class="col-sm-2  col-md-offset-2 control-label">First Name</label>
				<div class="col-sm-6">
			    	<input type="text" name="data[Member][firstname]" class="form-control" id="firstname" placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
			    <label for="lastname" class="col-sm-2 col-md-offset-2 control-label">Last Name</label>
				<div class="col-sm-6">
			    	<input type="text" name="data[Member][lastname]" class="form-control" id="lastname" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 col-md-offset-2 control-label">Email</label>
				<div class="col-sm-6">
			    	<input type="email" name="data[Member][email]" class="form-control" id="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 col-md-offset-2 control-label">Password</label>
				<div class="col-sm-6">
					<input type="password" name="data[Member][password]" class="form-control" id="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 col-md-offset-1 control-label">Confirm Password</label>
				<div class="col-sm-6">
					<input type="password" name="data[Member][confirm_password]" class="form-control" id="confirm_password" placeholder="Confirm Password">
				</div>
			</div>
			<div class="form-inline">
				<label for="inputPassword3" class="col-sm-3 col-md-offset-1 control-label">Birthday</label>
				<div class="form-group">
					<div class="col-md-2">
						<select name="data[Member][month]" class="form-control" required>
							<?php foreach($months as $key => $month): ?>
								<option value="<?php echo $key; ?>"><?php echo $month; ?></option>
								<?php endforeach; ?>
						</select>
					</div>	
				</div>	
				<div class="form-group">
					<div class="col-md-2">
						<select name="data[Member][day]" class="form-control">
							<?php for($i=1;$i<=31;$i++): ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php endfor; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<select name="data[Member][year]" class="form-control">
							<?php  for($i=1900;$i<=date('Y');$i++): ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php endfor; ?>
						</select>
					</div>
				</div>
			</div>	
		  <div class="form-group">
		    <div class="col-sm-offset-4 col-sm-10">
		    	<label class="radio-inline">
  					<input type="radio" name="data[Member][male]" id="male" value="male"> Male
				</label>
				<label class="radio-inline">
  					<input type="radio" name="data[Member][female]" id="female" value="female"> Female
				</label>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-4 col-sm-10">
		      <input type="submit" class="btn btn-default" value="Sign Up">
		    </div>
		  </div>
		</form>
		</div>	
			</div>
			<div class="col-md-4"></div>
			</div>	
		<!-- <h3 style="text-align:center;">Sign Up</h3> -->
		
		
		<?php include('includes/footer.php'); ?>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script>
		$(function(){
			$("#signup").validate(
			{
				rules:
				{ 
					"data[Member][firstname]":
					{
						required:true
					},
					"data[Member][lastname]":
					{
						required:true
					},
					"data[Member][email]":
					{
						required:true,
						email:true
					},
					"data[Member][password]":
					{
						required:true,
						minlength:6
					},
					"data[Member][confirm_password]":
					{
						required:true,
						equalTo: "#password"
					},
					"data[Member][month]":
					{
						required:true
					},
					"data[Member][day]":
					{
						required:true
					},
					"data[Member][year]":
					{
						required:true
					}
				},
				message:
				{
					"data[Member][firstname]":
					{
						required:'This is field is required'
					}
				}
			});
		});
		</script>
	</body>
</html>  
