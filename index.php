<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT KIỆT TAIHEN</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Họ</label>
                        <input type="text" name="fname" placeholder="Nhập họ" required>
                    </div>
                    <div class="field input">
                        <label>Tên</label>
                        <input type="text" name="lname" placeholder="Nhập tên" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Địa chỉ email</label>
                        <input type="text" name="email" placeholder="Hãy nhập email" required>
                    </div>
                    <div class="field input">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" placeholder="Hãy nhập mật khẩu" required>
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Chọn Ảnh</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Tiếp tục vào Chat">
                    </div>
            </form>
            <div class="link">Bạn đã có tài khoản?<a href="#">Đăng nhập ngay</a></div>
        </section>
        
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/signup.js"></script>
</body>
</html>