<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
$sql = "select * from landmark where id='A01'";
$query = mysql_query($sql);
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asiatique: The Riverfront</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">


    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-howtogo navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- howtogo Header -->
    <?php while ($result = mysql_fetch_assoc($query)) {?>
    <body class="bg"></body>
    <div class="box">
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            </div>
        </div>
    </section>
    </div>
    <header class="howtogo">
        <div class="howtogo-body">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="centerpic"><img src="img/1.jpg"></div><br>
                    <p style="text-indent: 5em;">เปิดตำนานของท่าเรือระหว่างประเทศที่แรกของสยาม
                    ย้อนกลับไปในช่วงปี 1884 ในรัชสมัยของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว
                    ที่ประเทศในเอเชียอยู่ภายใต้การคุกคามของการรุกรานจากมหาอำนาจยุโรป
                    ด้วยการมองการณ์ไกลของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว
                    ได้มีความคิดริเริ่มที่จะยกระดับสยามให้ไปถึงประเทศชั้นนำของโลกและตัดสินใจที่จะสร้างความสัมพันธ์กับประเทศเดนมาร์ก
                    รวมถึงในขั้นตอนนี้คือการก่อสร้างของท่าเรือที่เป็นของ บริษัท อีสต์เอเซียติก
                    ซึ่งทำธุรกิจที่ทุ่มเทให้กับการส่งออกไม้สัก โดยมี Mr. Hans Nille Anderson, สัญชาติเดนมาร์ก
                    เป็นเจ้าของบริษัท
                    ท่าเรือนี้ คือสัญญาณการเริ่มต้นของการทำการค้าระหว่างประเทศ ระหว่างราชอาณาจักรไทยและประเทศในยุโรป
                    และเป็นกุญแจสำคัญในการที่สยามยังคงรักษาอธิปไตยและความเป็นอิสระจวบจนทุกวันนี้
                    ปัจจุบัน พื้นที่เดียวกันนี้ที่ท่าเรืออีสต์เอเซียติกครอบครองกำลังคืนไปสู่ความรุ่งโรจน์เดิมภายใต้ชื่อ
                    "เอเชียทีคเดอะริเวอร์ฟร้อนท์"
                    ด้วยครั้งแรกและเป็นที่ที่วิถีชีวิตริมฝั่งแม่น้ำที่ใหญ่ที่สุดในเอเชีย ตั้งอยู่บนแม่น้ำเจ้าพระยา</p><br>
                    <div class="pic"><img src="img/2.jpg"></div><br>
                    <p style="text-indent: 5em;">ร้านค้าส่วนใหญ่จะเป็นการขายของ Hand Made ที่จะมีลักษณะเฉพาะแล้วมีความเป็นเอกลักษณ์ในตัวของสินค้า
                    มีร้านค้าอยู่มากมายถึง 1500 ร้านค้าทำให้คุณสามารถที่จะสำรวจหรือเดินเผื่อเลือกและตัดสินใจในการซื้อสินค้าได้อย่างจุใจ ถึงแม้ว่าจะมีขนาดที่เล็กกว่าสถานที่อื่น
                    อย่างเช่น ตลาดนัดจัตตุจัก หรือ JJ green ก็ตามแต่ก็ยังเป็นสถานที่ที่น่าสนใจในการเดินในยามค่ำคืน</p><br>
                    <div class="pic"><img src="img/3.jpg"></div><br>
                    <p style="text-indent: 5em;">ภายในร้านค้าจะมีทั้งร้านที่เป็นแบบ เปิดและร้านที่เป็นแบบปิด และยังมีร้านค้าที่ขายสินค้าประเภทยาสามัญ สมุนไพรโบราณ
                    ที่นิยมใช้กันในสมัยก่อน และยังมีสินค้าที่บางครั้งไม่สามารถหาได้จากที่อื่น</p><br>
                    <div class="pic"><img src="img/4.jpg"></div><br>
                    <p style="text-indent: 5em;">นอกจากนี้ยังมีร้านอาหารให้เราได้เลือกรับประทานกันได้อย่างจุใจ
                    ไม่ว่าจะเป็นอาหารจีน ไทย ฝรั่ง หรือขนมต่างๆ ร้านนั่งดื่ม ที่เหมาะแก่การมาพบปะสังสรรค์ยามค่ำคืน</p><br>
                    <div class="pic"><img src="img/5.jpg"></div><br>
                    <p style="text-indent: 5em;">จุดเด่นที่สำคัญนั่นก็คือ ชิงชาสวรรค์ที่มีขนายใหญ่เห็นได้ชัดจากไกล ที่มีความสูง 60 ฟุต ในราคา ผู้ใหญ่ : 300 เด็ก : 200
                    แนะนำควรขึ้นอย่างยิ่ง</p><br>
            
                    <h1 class="htg">How To Go</h1>
                    <p class="bts"><img src="img/bts.png" alt="bts" height="150" width="150">&nbsp;&nbsp;Saphan Taksin
                        -> Asiatique shuttle boat</p>
                    <p class="bus">
                        <?php echo $result['no_bus']; ?>&nbsp;&nbsp;<img src="img/bus.png" alt="bus" height="150" width="150"></p>
                    <p class="other"><img src="img/boat.jpg" alt="boat" height="150" width="150">&nbsp;&nbsp;Wat
                        rajsingkorn</p>
                        <p>ที่มา : <a href="url">https://en.wikipedia.org/wiki/Asiatique</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="url">https://www.chatuchakmarket.org/asiatique/</a></p>
                </div>
            </div>
        </div>
        
    </header>


    <?php }?>
    <!-- Contact Section -->
    <section id="contacthtg" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p><a href="mailto:haliw.hliw46@gmail.com">haliw.hliw46@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/haliw.hliw" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i>
                            <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/haliw_h/" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i>
                            <span class="network-name">instagram</span></a>
                    </li>
                </ul>
            </div>
        </div><br>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy;SDU-COMSCI 2018</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>