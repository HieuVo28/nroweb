<?php require('/conn.php');?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NRO PRIVATE</title>
    <meta name="keywords" content="Chú Bé Rồng Online,ngoc rong mobile, game ngoc rong, game 7 vien ngoc rong, game bay vien ngoc rong" />
    <meta name="description" content="Website chính thức của Chú Bé Rồng Online – Game Bay Vien Ngoc Rong Mobile nhập vai trực tuyến trên máy tính và điện thoại về Game 7 Viên Ngọc Rồng hấp dẫn nhất hiện nay!" />
    <link rel="icon" href="./js/nro.png" type="image/png">
    <link href="./js/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./js/all.min.css">
    <link rel="stylesheet" href="./js/dataTables.bootstrap5.min.css">
    <script type="text/javascript" async="" src="./js_files/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-DeC+ATyYrRw1wN361YR251I8W6i3tt5FbF1znwjfQKMMisEM7Gy55q41G6WhDtnp"></script>
    <script src="./js_files/jquery.min.js.tải xuống"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="./js/sweetalert2@11"></script>
    <script src="./js/api.js" async="" defer=""></script>
</head>

<body>
    <div class="wrapper d-flex flex-column">
        <header class="header border-bottom">
            <nav class="navbar navbar-expand-sm navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="/images/nro.png" alt="logo web">
						
					</a>
					
					<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#siteNav">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="siteNav">
						<div class="d-flex justify-content-center ml-sm-auto mx-n1 my-2">
						    <!-- <a class="p-2 text-dark" data-toggle="modal" data-target="#modalDownload">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
									</svg>
									<span >Tải Game</span>
								</a> -->
															<nav class="my-2 my-md-0 mr-md-3">
								<!-- <a class="btn btn-outline-success" href="/dang-nhap.php"> 
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
									</svg>
									<span>Đăng nhập</span>
								</a>-->
								<a class="btn btn-outline-danger" href="/dang-ky.php">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="18" height="18">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
									</svg>
									<span>Đăng ký</span>
								</a>
														
						</div>
					</div>
				</div>
				 <div class="modal fade" id="modalDownload" tabindex="-1" style="display: none;" aria-hidden="true"> 
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">Tải Game</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="list-group">
									<a href="" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Phiên bản JAVA (Sắp có)</a>
									<a href="/taive/Dragonboy_vn_v225.rar" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho PC</a>
									<a href="/taive/Dragonboy_vn_v225.apk" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản Android(Sắp có)</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
        </header>