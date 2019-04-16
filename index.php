<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Hello, world!</title>
    <!--响应式框架-->
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />

<!--图标调用-->
<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
/*特殊照片效果*/

.demo{padding: 2em 0;}
:root{
	--color_1: #fff;
	--main-color: #1dd1a1;
}
.box{
	font-family: 'Niramit', sans-serif;
	text-align: center;
	position: relative;
	overflow: hidden;
}
.box:before,
.box:after,
.box-content:before,
.box-content:after{
	content: '';
	background: linear-gradient(transparent,rgba(0,0,0,0.9));
	height: 100%;
	width: 25%;
	transform: translateY(-100%);
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	transition: all 0.3s;
}
.box:hover:before,
.box:hover:after,
.box:hover .box-content:before,
.box:hover .box-content:after{
	transform: translateY(0);
}
.box:after{ left: 25%; }
.box .box-content:before{ left: 50%; }
.box .box-content:after{ left: 75%; }
.box:hover:before{ transition-delay: 0.225s; }
.box:hover:after{ transition-delay: 0.075s; }
.box:hover .box-content:before{ transition-delay: 0.15s; }
.box:hover .box-content:after{ transition-delay: 0s; }
.box img{
	width: 100%;
	height: auto;
	transition: all 0.3s ease 0s;
}
.box:hover img{ filter: grayscale(100%); }
.box .box-content{
	width: 100%;
	height: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	transition: all 0.2s;
}
.content{
	width: 100%;
	padding: 7px 0;
	opacity: 0;
	position: absolute;
	left: 0;
	bottom: -30px;
	z-index: 2;
	transition: all 0.3s ease 0.1s;
}
.box:hover .content{
	opacity: 1;
	bottom: 5px;
}
.box .title{
	color:#fff;
	font-size: 25px;
	font-weight: 500;
	letter-spacing: 1px;
	text-transform: uppercase;
	margin: 0;
}
.box .post{
	color: var(--main-color);
	font-size: 16px;
	font-style: italic;
	text-transform: capitalize;
	letter-spacing: 1px;
	margin-bottom: 10px;
	display: block;
}
.box .icon{
	padding: 0;
	margin: 0;
	list-style: none;
	transform: translateX(-50%);
	position: absolute;
	top: 15px;
	right: -10px;
	z-index: 2;
	transition: all 0.5s ease 0.3s;
}
.box .icon li{
	opacity: 0;
	transform: scale(0) rotate(360deg);
	transition: all 400ms;
}
.box:hover .icon li{
	opacity: 1;
	transform: scale(1) rotate(0);
}
.box .icon li a{
	color: var(--color_1);
	background-color: var(--main-color);
	font-size: 20px;
	line-height: 40px;
	height: 40px;
	width: 40px;
	margin-bottom: 10px;
	border-radius: 50%;
	display: block;
	position: relative;
	transition: all 0.3s;
}
.box .icon li a:hover{
	text-decoration: none;
	color: var(--main-color);
	background-color: var(--color_1);
	border-radius: 0 20px 0 20px;
}
@media only screen and (max-width:990px){
	.box{ margin-bottom: 30px; }
}
@media only screen and (max-width:479px){
	.box .title{ font-size: 20px; }
}
@media (min-width: 1200px){
.container {
    max-width: 1229px !important;
}
}

/*特殊照片效果結束*/


    .parallax {
  /* The image used */
  background-image: url("img/best-italian-espresso-machine1.jpg");

  /* Set a specific height */
  min-height: 718px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    .upbackground{
            width:98%;
            height:auto;
            margin-left: 1%;
            margin-right: 1%;
            margin-top: 58px;
            opacity: 0.9;
  /* position: fixed;  */
    }
    .navbar{
            position:fixed;
            z-index:2;
            width:100%;
            /* padding:上 右 下 左; */
            padding:5px 0px 5px 5px;
            font-size:29px;
            /* padding-top:5px;
            padding-right:0px;
            padding-bottom:5px;
            padding-left:5px;
           */
        
    }

    /* 回到最上方css */
 
    /* 回到最上方css結束 */
    </style>
  </head>
  <body>


<!-- preloader -->
          <div class="preloader">
    <img src="img/preloader.gif" alt="preloader" class="preloader__item">
  </div>

<script>
window.addEventListener("load",function(){

    document.querySelector(".preloader").style.display="none";
})

</script>

  <!-- end preloader -->
      <!-- nav 最上方欄位-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      <!-- nav end  最上方選擇欄結束-->
    <!-- 背景圖-->
    <div class="parallax" style="" >

    <!-- <img class="upbackground" src="img/best-italian-espresso-machine1.jpg" alt="sroll img" title=""> -->


    </div>
    <!-- 特殊css效果 -->
    <div class="demo">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-1.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web developer</span>
							<h3 class="title">Steve Thomas</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-2.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web designer</span>
							<h3 class="title">Kristina</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="box">
					<img src="img/img-3.jpg" alt="">
					<div class="box-content">
						<div class="content">
							<span class="post">Web designer</span>
							<h3 class="title">Williamson</h3>
						</div>
						<ul class="icon">
							<li><a href="#"><i class="fa fa-search"></i></a></li>
							<li><a href="#"><i class="fa fa-link"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- 特殊css效果結束 -->
    
    <!-- 暫時文字開始 -->
 <div style="color:#008080;background-color:white ">   
<p>
今天，就是全人類見證宇宙黑洞的一刻！事件視界望遠鏡計畫於今（10）日召開全球連線記者會，發布人類史上第一張「黑洞剪影」照片，與地球一樣大的虛擬洲際望遠鏡拍下了位於 M87 星系中心的超大質量黑洞。你必須知道這次的成就有兩大重要意義：第一，科學家首次以「直接證據」證明黑洞存在；第二，愛因斯坦繼續屹立不搖。




黑洞是個全暗物體，基本上融入在同樣全黑的宇宙背景中，我們無法直接看見黑洞在哪兒，加上黑洞一旦形成就會開始吸取附近所有物質、光線、電磁波，因此尋找黑洞是一件相當困難的工作。

過去，天文學家尋找黑洞都是透過間接證據，比如發現圍繞著黑洞的吸積盤、黑洞噴出的相對論性噴流、重力波、或恆星運動等去推測，儘管這些間接證據都很有力，但不是直接拍下黑洞，科學家心底總是會對未知事物存疑。

而事件視界望遠鏡（EHT）計畫要做的工作，就是將分布在地球各地的電波望遠鏡以特長基線干涉技術連接起來，變成一個和地球一樣大的巨型虛擬望遠鏡，使儀器的角解析度精確到足以直接觀測黑洞事件視界（Event Horizon），也就是黑洞的邊界。

在美國華盛頓、台灣中研院、聖地牙哥、布魯塞爾、日本東京、中國上場等全球 6 場連線記者會中，天文學家們終於發布了第一張黑洞事件視界影像，是位於距離地球 5,500 萬光年、M87 星系中心質量達地球 65 億倍的超大質量黑洞。

在此次觀測計畫中所使用的 8 座電波望遠鏡，有 3 座是由台灣中研院支援運轉（SMA、ALMA、JCMT），表明台灣對此次研究的重大貢獻，這次成果發表在科學上的重要性有三點，第一：揭開活躍星系中心的超大質量黑洞神秘面紗；第二，探索極限條件下重力理論的新工具；第三，成為研究黑洞相關天文物理（比如電漿物理）的先鋒。

（後續將持續更新）

（首圖來源：中研院提供）
</p>
<p>
今天，就是全人類見證宇宙黑洞的一刻！事件視界望遠鏡計畫於今（10）日召開全球連線記者會，發布人類史上第一張「黑洞剪影」照片，與地球一樣大的虛擬洲際望遠鏡拍下了位於 M87 星系中心的超大質量黑洞。你必須知道這次的成就有兩大重要意義：第一，科學家首次以「直接證據」證明黑洞存在；第二，愛因斯坦繼續屹立不搖。




黑洞是個全暗物體，基本上融入在同樣全黑的宇宙背景中，我們無法直接看見黑洞在哪兒，加上黑洞一旦形成就會開始吸取附近所有物質、光線、電磁波，因此尋找黑洞是一件相當困難的工作。

過去，天文學家尋找黑洞都是透過間接證據，比如發現圍繞著黑洞的吸積盤、黑洞噴出的相對論性噴流、重力波、或恆星運動等去推測，儘管這些間接證據都很有力，但不是直接拍下黑洞，科學家心底總是會對未知事物存疑。

而事件視界望遠鏡（EHT）計畫要做的工作，就是將分布在地球各地的電波望遠鏡以特長基線干涉技術連接起來，變成一個和地球一樣大的巨型虛擬望遠鏡，使儀器的角解析度精確到足以直接觀測黑洞事件視界（Event Horizon），也就是黑洞的邊界。

在美國華盛頓、台灣中研院、聖地牙哥、布魯塞爾、日本東京、中國上場等全球 6 場連線記者會中，天文學家們終於發布了第一張黑洞事件視界影像，是位於距離地球 5,500 萬光年、M87 星系中心質量達地球 65 億倍的超大質量黑洞。

在此次觀測計畫中所使用的 8 座電波望遠鏡，有 3 座是由台灣中研院支援運轉（SMA、ALMA、JCMT），表明台灣對此次研究的重大貢獻，這次成果發表在科學上的重要性有三點，第一：揭開活躍星系中心的超大質量黑洞神秘面紗；第二，探索極限條件下重力理論的新工具；第三，成為研究黑洞相關天文物理（比如電漿物理）的先鋒。

（後續將持續更新）

（首圖來源：中研院提供）
</p>
<p>
今天，就是全人類見證宇宙黑洞的一刻！事件視界望遠鏡計畫於今（10）日召開全球連線記者會，發布人類史上第一張「黑洞剪影」照片，與地球一樣大的虛擬洲際望遠鏡拍下了位於 M87 星系中心的超大質量黑洞。你必須知道這次的成就有兩大重要意義：第一，科學家首次以「直接證據」證明黑洞存在；第二，愛因斯坦繼續屹立不搖。




黑洞是個全暗物體，基本上融入在同樣全黑的宇宙背景中，我們無法直接看見黑洞在哪兒，加上黑洞一旦形成就會開始吸取附近所有物質、光線、電磁波，因此尋找黑洞是一件相當困難的工作。

過去，天文學家尋找黑洞都是透過間接證據，比如發現圍繞著黑洞的吸積盤、黑洞噴出的相對論性噴流、重力波、或恆星運動等去推測，儘管這些間接證據都很有力，但不是直接拍下黑洞，科學家心底總是會對未知事物存疑。

而事件視界望遠鏡（EHT）計畫要做的工作，就是將分布在地球各地的電波望遠鏡以特長基線干涉技術連接起來，變成一個和地球一樣大的巨型虛擬望遠鏡，使儀器的角解析度精確到足以直接觀測黑洞事件視界（Event Horizon），也就是黑洞的邊界。

在美國華盛頓、台灣中研院、聖地牙哥、布魯塞爾、日本東京、中國上場等全球 6 場連線記者會中，天文學家們終於發布了第一張黑洞事件視界影像，是位於距離地球 5,500 萬光年、M87 星系中心質量達地球 65 億倍的超大質量黑洞。

在此次觀測計畫中所使用的 8 座電波望遠鏡，有 3 座是由台灣中研院支援運轉（SMA、ALMA、JCMT），表明台灣對此次研究的重大貢獻，這次成果發表在科學上的重要性有三點，第一：揭開活躍星系中心的超大質量黑洞神秘面紗；第二，探索極限條件下重力理論的新工具；第三，成為研究黑洞相關天文物理（比如電漿物理）的先鋒。

（後續將持續更新）

（首圖來源：中研院提供）
</p>
<p>
今天，就是全人類見證宇宙黑洞的一刻！事件視界望遠鏡計畫於今（10）日召開全球連線記者會，發布人類史上第一張「黑洞剪影」照片，與地球一樣大的虛擬洲際望遠鏡拍下了位於 M87 星系中心的超大質量黑洞。你必須知道這次的成就有兩大重要意義：第一，科學家首次以「直接證據」證明黑洞存在；第二，愛因斯坦繼續屹立不搖。




黑洞是個全暗物體，基本上融入在同樣全黑的宇宙背景中，我們無法直接看見黑洞在哪兒，加上黑洞一旦形成就會開始吸取附近所有物質、光線、電磁波，因此尋找黑洞是一件相當困難的工作。

過去，天文學家尋找黑洞都是透過間接證據，比如發現圍繞著黑洞的吸積盤、黑洞噴出的相對論性噴流、重力波、或恆星運動等去推測，儘管這些間接證據都很有力，但不是直接拍下黑洞，科學家心底總是會對未知事物存疑。

而事件視界望遠鏡（EHT）計畫要做的工作，就是將分布在地球各地的電波望遠鏡以特長基線干涉技術連接起來，變成一個和地球一樣大的巨型虛擬望遠鏡，使儀器的角解析度精確到足以直接觀測黑洞事件視界（Event Horizon），也就是黑洞的邊界。

在美國華盛頓、台灣中研院、聖地牙哥、布魯塞爾、日本東京、中國上場等全球 6 場連線記者會中，天文學家們終於發布了第一張黑洞事件視界影像，是位於距離地球 5,500 萬光年、M87 星系中心質量達地球 65 億倍的超大質量黑洞。

在此次觀測計畫中所使用的 8 座電波望遠鏡，有 3 座是由台灣中研院支援運轉（SMA、ALMA、JCMT），表明台灣對此次研究的重大貢獻，這次成果發表在科學上的重要性有三點，第一：揭開活躍星系中心的超大質量黑洞神秘面紗；第二，探索極限條件下重力理論的新工具；第三，成為研究黑洞相關天文物理（比如電漿物理）的先鋒。

（後續將持續更新）

（首圖來源：中研院提供）
</p>
</div>
<!--回到最上方按鈕 -->
<button class="toTop-arrow" id="BackTop" ></button> 
<!--回到最上方按鈕結束-->
<script>
    // 回到最上方代碼

</script>
<!--  底部 all right &  contact us -->
<!-- <?php  include 'footer.php'; ?> -->
<!-- 暫時文字結束 -->
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="js/app.js"></script> -->

</body>
</html>