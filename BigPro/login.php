<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="./icon/bootstrap-icons.css">

    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/login.css">

    <style>
        @font-face {
            font-family: "Prompt";
            src: url(./font/Prompt-Light.ttf) format("truetype");
        }

        body {
            font-family: "Prompt";
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col">
                <div class="card p-4 shadow">
                    <form action="login_db.php" method="post">
                        <h1 class="text-center fw-bold mb-3">เข้าสู่ระบบ</h1>

                        <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn">ครู/เจ้าหน้าที่</button>
                            <button type="button" class="btn">ศิษย์เก่า</button>
                            <button type="button" class="btn">บุคคลทั่วไป</button>
                        </div>

                        <br>
                        <label for="personalid"><i class="bi bi-envelope-at-fill"></i>  อีเมล </label>
                        <input type="text" name="mail" placeholder="อีเมล" class="">

                        <label for="born"><i class="bi bi-key-fill"></i> รหัสผ่าน </label>
                        <input type="password" name="pass" placeholder="รหัสผ่าน" class="mb-3">


                        <div class="d-flex justify-content-center gap-2">
                            <input type="submit" class="w-50" name="submit" value="เข้าสู่ระบบ">  </input>
                        </div>
                        <a type="submit" class="w-50" href="./user1/apply.php"> สมัครสมาชิก </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>