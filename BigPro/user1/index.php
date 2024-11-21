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
    <link rel="stylesheet" href="../css/index.css">
    <style>
        @font-face {
            font-family: "Prompt";
            src: url(../font/Prompt-Regular.ttf) format("truetype");
        }

        body {
            font-family: "Prompt";
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-5">
                        <a class="nav-link active bi bi-house-door-fill" href="#"> หน้าแรก</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link bi bi-person-fill" href="#"> รายชื่อศิษย์เก่า</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link bi bi-cash-coin" href="#"> การบริจาคและสนับสนุน</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link bi bi-shop" href="#"> ร้านค้า IT Shop</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-light w-100 bi bi-box-arrow-in-left me-3" type="submit" href="../index.php"> Logout</a>
                </form>
                <a href="#" class="bi bi-cart3 me-3" style="font-size: 25px; color:#FFFFFF;"></a>
                <a href="#" class="bi bi-person-circle me-2" style="font-size: 25px; color:#FFFFFF;"></a>

            </div>
        </div>
    </nav>

    <!-- รูปวิลัย -->
    <div class="images">
        <img src="../img/Rectangle 19.png" alt="" class="img">
        <img src="../img/image 1.png" alt="" class="img">
        <div class="text ps-5 text-light ">
            <h1 class="H1 fw-bold">ยินดีต้อนรับเข้าสู่เว็บไซต์</h1>
            <h2 class="H2 w-bold">แผนกเทคโนโลยีสารสนเทศ </h2>
            <h2 class="H2 fw-bold">Information Technology </h2>
        </div>
    </div>

    <!-- ข่าวสารและกิจกรรม -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="p1 fw-bold mt-4 bi bi-newspaper"> ข่าวสารและกิจกรรม</p>
            </div>
            <div class="col-md-6">
                <a class="p2 mt-5 text-end">ดูทั้งหมด</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php include("./components/card.php"); ?>
            <?php include("./components/card.php"); ?>
            <?php include("./components/card.php"); ?>
            <?php include("./components/card.php"); ?>
        </div>
    </div>

    <!-- ศิษย์เก่าดีเด่น -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <p class="p1 fw-bold mt-4 bi bi-award-fill"> ศิษย์เก่าดีเด่น</p>
            </div>
            <div class="col-md-6">
                <a class="p2 mt-5 text-end">ดูทั้งหมด</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php include("./components/flip-card.php"); ?>
            <?php include("./components/flip-card.php"); ?>
            <?php include("./components/flip-card.php"); ?>
            <?php include("./components/flip-card.php"); ?>
        </div>
    </div>

    <footer class="mt-5" style="margin-top: 20px; ">
        <img src="../img/Logo.png" alt="" while="143" height="143" class="img-footer mt-3 ms-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="H4 fw-bold">แผนกเทคโนโลยีสารสนเทศ</h4>
                    <h4 class="H4 fw-bold">Information Technology</h4>
                    <h6 class="H4 text-white">เลขที่ 29 ถนนนเรศวร ตำบลท่าวาสุกรี
                        <br>อำเภอพระนครศรีอยุธยา
                        <br>จังหวัดพระนครศรีอยุธยา
                        <br>รหัสไปรษณีย์ 13000
                        <br>โทรศัพท์ : 0-3593-0651-4
                        <br>อีเมล : sarabun@ayuttech.ac.th
                        <br><a href="" class="bi bi-facebook" style="font-size: 30px; color:#FFFFFF;"></a>
                    </h6>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>