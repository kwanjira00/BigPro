<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- js -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- icon -->
    <link rel="stylesheet" href="../icon/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/apply.css">
    <style>
        @font-face {
            font-family: "Prompt";
            src: url(../font/Prompt-Regular.ttf) format("truetype");
        }

        body {
            font-family: "Prompt";
            background-color: #FFAFC3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card p-4">
                    <form action="apply_db.php" method="post">
                        <h1 class="text-center fw-bold mb-3">สมัครสมาชิก</h1>

                        <input type="text"  placeholder="ชื่อ-นามสกุล" autofocus required name="user"/>
                        <input type="email" placeholder="อีเมล" required name="e-mail">
                        <input type="password" placeholder="รหัสผ่าน" required name="pass">
                        <input type="password" placeholder="ยืนยันรหัส" required name="cfpass">
                        <input type="text" placeholder="ชื่อผู้ใช้" required name="username">
                        <input type="tel" placeholder="เบอร์โทร" maxlength="10" required name="phone">
                        <div class="d-flex gap-2">
                            <input class="mt-3 w-100" type="submit" value="สมัครสมาชิก" name="submit"></input>
                            <a class="mt-3 w-100" type="submit"  href="../index.php">ยกเลิก</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>