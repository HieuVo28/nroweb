<?php require("./head.php")?>
<?php
error_reporting(0);
@session_start();
include('conn.php');
if(isset($_POST)){
	$username = $_POST[username];                
		$password = $_POST[password];   
     	$account = mysql_fetch_assoc(mysql_query("SELECT * FROM `account` WHERE `username`='".$_POST[username]."'"));
    if(empty($password) or empty($username)) {
     	} else
    if($account[id] >0) {
        $error = 'Tài khoản này đã tồn tại.';
        } else {
    mysql_query("INSERT INTO `account` SET `username`='{$username}', `password`='{$password}'");
        $error = 'Đăng ký  thành công';
}
?><?PHP } ?>
<main>
<?php if($error){ ?>

	<h4><?php echo $error; ?></h4>

<?php } ?>
<hr style="width: 50%; height: 2px; border-radius: 50%; margin-bottom: 25px;  margin: 0 auto;   margin-top: 25px;" class="bg-info ">

<form class="form-signin auth" action="/dang-ky.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal text-center">ĐĂNG KÝ TÀI KHOẢN</h1>
    <input type="hidden" name="action" value="register">
    <div id="message"></div>
    
	<div class="form-group">
        <label>Tài khoản</label>
        <input type="text" class="form-control" name="username" value="" />
    </div>
    <div class="form-group">
        <label>Mật khẩu</label>
        <input type="password" class="form-control" name="password" value="" />
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" class="form-control" name="sdt" value="" />
    </div>
    <button class="btn btn-primary w-100" value="Đăng ký" name="submit" />ĐĂNG KÝ</button>
</form>
<style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-group {
            padding-bottom: 0.5rem;
        }
    </style>
</main>
<?php require ('/foot.php');?>