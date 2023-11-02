<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./assets/index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap');
  body{
  	font-family: 'Kanit', sans-serif;

  }
</style>

<body>



<!-- สีพื้นหลัง -->


	<div class="container mt-3 bgcl " >
<nav class="navbar navbar-expand-lg bg-dark">

  <div class="container-fluid ">
<img src="upload/logo.png" width="80">
    <a class="navbar-brand " href="#">โรงเรียนวัดบางหญ้าแพรก</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ประชาสัมพันธ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">เกี่ยวกับโรงเรียน</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a></li>
            <li><a class="dropdown-item" href="#">เข้าสู่ระบบ</a></li>
            <li><a class="dropdown-item" href="index_register.php">สมัครสมาชิก</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
	<!-- รูปสไลด์ -->
	<div class="col-md-9 mt-4">	

		<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">



    	<!-- รูป1 -->  



      <div class="carousel-item active">
        <img src="upload/u1.jpg"  class="card-img-top" style="w-100"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
        
      </div>



      <!-- รูป2 -->



      <div class="carousel-item">
        <img src="upload/u2.jpg"  class="card-img-top" style="w-100"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
       
      </div>



      <!-- รูป3 -->



      <div class="carousel-item">
        <img src="upload/u3.jpg"  class="card-img-top" style="w-100"  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
       
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="row mt-4 ">
	<div class="col">
		<div class="card ">
			<div class="card-header">
				<span class="material-symbols-outlined">
campaign 
</span>      ข่าวสารประชาสัมพันธ์ 
			</div>
			<div class="card-body">
				ทดสอบ
			</div>
			
		</div>
		
	</div>
	
</div>

	</div>
	<div class="col-md-3">
		
		<!-- ผู้อำนวยการ -->

		<div class="">
			<div class="card mt-4" style="width: 280px;">
  <img src="upload/noimg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ผู้อำนวยการ</h5>
    <p class="card-text">ชื่อ-สกุล</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">รับตำแหน่งเมื่อ</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
 
</div>
		</div>
		
	</div>
</div>

	
</div>

</body>
</html>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>