
<head>

	<link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>
<body class="bgcl">

	<div class="container">

		<form class="form-box" action="./actions/signup.php" method="POST">
			<div class="form-input">
				<input type="" placeholder="ชื่อและนามสกุล" name="name" required >
			</div>
			<div class="form-input">
				<input type="" placeholder="ชื่อผู้ใช้งาน" name="username" required >
			</div>

			<div class="form-input">
				<input type="password" placeholder="รหัสผ่าน" name="password" id=pass required >
			</div>


			<div class="form-input">
				<input type="password" placeholder="ยืนยันรหัสผ่านอีกครั้ง" name="cpassword" id=cpass required >
			</div>


			<div class="form-input button">
				<input type="submit" value="สมัครสมาชิก" >	
			</div>
			<div class="form-link">
				มีบัญชีอยุ่แล้วใช่มั้ย?
				<a href="">เข้าสู่ระบบ</a>
			</div>
			<div class="form-like">
				<a href="./index.php">กลับหน้าหลัก</a>
			</div>
		</form>
	</div>

	<script>
		var pass =document.getElementById('pass');
		var cpass =document.getElementById('cpass');
		pass.onchange =  comparePasswordValid;
		cpass.oninput = comparePasswordValid;
		function comparePasswordValid(){
			console.log(pass.value, cpass.value);
			if (pass.value != cpass.value) cpass.setCustomValidity('รหัสไม่ถูกต้อง');
			else cpass.setCustomValidity('');
		}

	</script>

</body>

<?php include("footer.php"); ?>