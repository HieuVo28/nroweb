<?php require("./head.php")?>
<main>
    <hr style="width: 50%; height: 2px; border-radius: 50%; margin-bottom: 25px;  margin: 0 auto;   margin-top: 25px;" class="bg-info ">

    <form class="form-signin auth" action="/dang-nhap.php" method="POST">
        <h1 class="h3 mb-3 font-weight-normal text-center">ĐĂNG NHẬP</h1>
        <input type="hidden" name="action" value="register">
        <div id="message"></div>
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input type="text" class="form-control" name="username" value="" />
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" name="password" value="" />
        </div>
        <button class="btn btn-primary w-100" type="submit">ĐĂNG NHẬP</button>
        <div class="text-center pt-2">
            <a href="mailto:teamyeucongnghe@gmail.com">Quên mật khẩu</a>
        </div>
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