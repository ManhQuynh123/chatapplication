<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>CHAT KIỆT TAIHEN</header>
            <form action="#">
                <div class="error-txt">Tin nhắn này đã bị lỗi</div>
                    <div class="field input">
                        <label>Địa chỉ email</label>
                        <input type="text" placeholder="Hãy nhập email">
                    </div>
                    <div class="field input">
                        <label>Mật khẩu</label>
                        <input type="text" placeholder="Hãy nhập mật khẩu">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Đăng Nhập">
                    </div>
            </form>
            <div class="link">Nếu chưa có acc<a href="#">Đăng Ký Ngay</a></div>
        </section>
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
</body>
</html>