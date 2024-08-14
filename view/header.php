<!DOCTYPE html>
<html lang="en">
<head>	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Shop hoa quả</title>
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="view/css/dangnhap.css">
		<link rel="stylesheet" href="../css/dangki.css">
		<style>
			.top10 img{
				width: 50px;
				height: 50px;
				float: left;
				margin-right: 10px;
				border-radius: 5px;
		
			}
			.mb10{
			margin-bottom: 10px;
			}
			/* CSS cho phần top10 a.text */
		.top10 a.text {
		/* Các thuộc tính của đường dẫn văn bản */
		display: block;
		font-weight: bold;
		margin-left: 10px;
		font-size: 11px; /* Kích thước font chữ */
		color: #000;
		text-decoration: none;
		}
				/* CSS cho phần best_sellers */
		.best_sellers {
		/* Các thuộc tính của best_sellers */
		clear: both;
		animation-name: fadeInUp;
		}

		/* CSS cho phần theme_inner_title */
		.theme_inner_title h4 {
		/* Các thuộc tính của theme_inner_title */
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 20px;
		}

		/* CSS cho phần clear_fix */
		.clear_fix::after {
		/* Các thuộc tính của clear_fix */
		content: "";
		display: block;
		clear: both;
		}

		/* CSS cho phần border */
		/* CSS cho phần border */
		.border {
		/* Các thuộc tính của border */
		border: 1px solid #ccc;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px; /* Bo tròn viền */
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
		}

		/* CSS cho phần border:hover */
		.border:hover {
		/* Các thuộc tính của border khi hover */
		border-color: #ff0000; /* Màu viền khi hover */
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Hiệu ứng đổ bóng khi hover */
		}

		/* CSS cho phần float_left */
		.float_left {
		/* Các thuộc tính của float_left */
		float: left;
		}

		/* CSS cho phần top10 */
		.top10 {
		/* Các thuộc tính của top10 */
		margin-bottom: 10px;
		}

		/* CSS cho phần top10 img */
		.top10 img {
		/* Các thuộc tính của hình ảnh */
		width: 20px;
		height: auto;
		}

		/* CSS cho phần top10 a.text */
		.top10 a.text {
		/* Các thuộc tính của đường dẫn văn bản */
		display: block;
		font-weight: bold;
		margin-left: 10px;
		color: #000;
		text-decoration: none;
		}

		/* CSS cho phần top10 a.text:hover */
		.top10 a.text:hover {
		/* Các thuộc tính của đường dẫn văn bản khi hover */
		text-decoration: underline;
		}
	</style>
</head>
<body>
<header>
	<div class="top_header">
		<div class="container">
			<div class="pull-left header_left">
				<ul>
					<li><a href="#">Liên hệ số điện thoại : <span>+84 357 717 435</span></a></li>
					<li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">DTCShops@gmail.com</a></li>
				</ul>
			</div>

			<div class="pull-right header_right">
				<div class="state" id="value1">
					<ul>
						<li><i class="fa fa-user s_color" aria-hidden="true"></i><a href="index.php?act=dstk">Tài khoản</a></li>
						<li><i class="fa fa-heart s_color" aria-hidden="true"></i><a href="#">Danh sách yêu thích </a></li>
						<li><i class="fa fa-truck s_color" aria-hidden="true"></i><a href="#">Danh sách giao hàng</a></li>
					</ul>
					<div id="polyglotLanguageSwitcher">
						<form action="#">
							<select id="polyglot-language-options">
								<option id="en" value="en" selected>English</option>
								<option id="fr" value="fr">French</option>
								<option id="de" value="de">German</option>
								<option id="it" value="it">Italian</option>
								<option id="es" value="es">Spanish</option>
							</select>
						</form>
					</div>
				</div>

					
			</div>
		</div> <!-- End of .container -->
	</div> <!-- End of .top_header -->

	<div class="bottom_header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="search-box">
						<form action="index.php?act=sanpham" class="clearfix" method="post">
							<input type="text" name="kyw" placeholder="Search...">
							<button name="timkiem" value="timkiem"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
				<div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
					<div class="logo-area">
						<a href="index.php" class="pull-left logo"><img src="logohoaqua.png" alt="LOGO"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-7 col-xs-6 pdt-14">
					<div class="login_option float_left">
						<div class="login_form">
						<div class="login_form">
						<div class="login_form">
  <div class="user">
    <i class="icon-photo" id="photo-icon"></i>
  </div>

  <div class="login-info">
    <?php
    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
      ?>
      <div class="welcome">Chào mừng! <?=$user?></div>
	  <div class="g-input f1 mb-30">
  <select class="text-capitalize selectpicker"  data-width="100%" id="login-select">
    <option value="0" selected>Đăng nhập thành công</option>   
    <option value="dh">Đơn hàng</option>
    <option value="edit_taikhoan">Đổi mật khẩu</option>
    <?php if ($role == 1): ?>
      <option value="admin" >Quản trị</option>
    <?php endif; ?>
    <option value="thoat">Đăng xuất</option>
  </select>
</div>

<script>
  var selectElement = document.getElementById("login-select");
  selectElement.addEventListener("change", function() {
    var selectedValue = selectElement.value;
    var loggedIn = <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
    var role = <?php echo $role; ?>;
    
    console.log("Selected value:", selectedValue);
    console.log("Logged in:", loggedIn);
    console.log("Role:", role);

    if (!loggedIn) {
      window.location.href = "index.php?act=dangnhap";
    } else {
      if (selectedValue === "dh") {
        window.location.href = "index.php?act=dh";
      } else if (selectedValue === "edit_taikhoan") {
        window.location.href = "index.php?act=edit_taikhoan";
	  }else if (selectedValue === "thoat") {
        // Log out the user
        window.location.href = "index.php?act=thoat";
      } else if (selectedValue === "admin" && role !== 1) {
        // Xử lý truy cập không được phép vào trang quản trị
      } else {
        window.location.href = "admin/index.php";
      }
    }	
  });
</script>
      <?php
    } else {
      ?>
  <div class="g-input f1 mb-30">
  <select class="text-capitalize selectpicker"  data-width="100%" id="login-select">
    <option value="0" selected>Bạn chưa có tài khoản</option>
    <option value="1">Đăng nhập</option>
    <option value="2">Đăng ký ở đây</option>
  </select>
</div>

<script>
  var selectElement = document.getElementById("login-select");
  selectElement.addEventListener("change", function() {
    var selectedValue = selectElement.value;
    if (selectedValue === "1") {
      window.location.href = "index.php?act=dangnhap";
    } else if (selectedValue === "2") {
      window.location.href = "index.php?act=dangky";
    }
  });
</script>
      <?php
    }
    ?>
  </div>
</div>

</div>
</div>
<div class="cart_option float_left" style="margin: 0px;">
	<a href="index.php?act=listCart"><button class="cart tran3s" id="cartDropdown"><i class="fa icon-icon-32846" aria-hidden="true"></i><span class="s_color_bg p_color" id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span></button></a>
	<div class="cart-info">
		<div>Giỏ hàng của tôi</div>
		
	</div>
							
			
	</div>

	</div>

</div>

</div>
	</div> 
<!-- End of .bottom_header -->
</header>
