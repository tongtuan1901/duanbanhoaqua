<!-- Menu ******************************* -->
<div class="theme_menu color1_bg">
				<div class="container">
				  <nav class="menuzord pull-left" id="main_menu">
					<ul class="menuzord-menu">
					  <li><a href="index.php">Trang chủ</a></li>
					  <li><a href="index.php?act=shop">Cửa Hàng</a></li>
					  <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
					  <li><a href="index.php?act=lienhe">Liên hệ</a></li>
					</ul> <!-- End of .menuzord-menu -->
				  </nav> <!-- End of #main_menu -->


				   <!-- ******* Cart And Search Option ******** -->
				   <div class="nav_side_content pull-right">
				   		<ul class="icon_header">
							<li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
				   </div> <!-- End of .nav_side_content -->
				     
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->
            <!-- Our Service ****************************** -->
			<div class="our_farmer">
				<div class="container">
					<div class="theme_title center">
						<h2>About Us</h2>
					</div>
					
					<div class="row">
						<div class="service_slider owl-carousel owl-theme">
							
								<div class="item center">
									<div class="img_holder">
										<img src="images/team/1.jpg" alt="images">
										<div class="overlay tran3s">
											<div class="inner-box">
												<ul>
				                        			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
				                        		</ul>
											</div>
				                        </div>
									</div>
									<div class="text">
										<h4>Rebecca Garzany</h4>
										<a href="turnaround.html"><h5>Pastoral Farmer</h5></a>
										<p> Praising pain was born and I will give you a <br>complete account of the system.</p>
									</div>
								</div> <!-- End of .item -->

								<div class="item center">
									<div class="img_holder">
										<img src="images/team/2.jpg" alt="images">
										<div class="overlay tran3s">
											<div class="inner-box">
												<ul>
				                        			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
				                        		</ul>
											</div>
										</div>
									</div>
									<div class="text">
										<h4>George William</h4>
										<a href="turnaround.html"><h5>Arable Farmer</h5></a>
										<p> Praising pain was born and I will give you a <br>complete account of the system.</p>
									</div>
								</div> <!-- End of .item -->

								<div class="item center">
									<div class="img_holder">
										<img src="images/team/3.jpg" alt="images">
										<div class="overlay tran3s">
											<div class="inner-box">
												<ul>
				                        			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
				                        		</ul>
											</div>
												
										</div>
									</div>
									<div class="text">
										<h4>Giana Fernando</h4>
										<a href="turnaround.html"><h5>Farm Manager</h5></a>
										<p> Praising pain was born and I will give you a <br>complete account of the system.</p>
									</div>
								</div> <!-- End of .item -->


						</div> <!-- End of .service_slider -->
					</div>
				</div>
			</div> <!-- End of .our_service -->



	
			
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
