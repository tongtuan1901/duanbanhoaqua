                                     
								
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

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
                            <h1>Contact us</h1>
			                <h4>Welcome to certified online organic products suppliersr</h4>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="breadcrumb-bottom-area">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-8 col-md-5 col-sm-5">
				                <ul>
				                    <li><a href="index.php">Home</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#">Gallery</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li>Contact us</li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
</section>
 <div>
			<section class="single-contact_us">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="left_contact">
								<h5>Get In Touch</h5>
								<ul class="list catagories">
		                            <li><a href="#"><i class="fa fa-home color1"></i>No 271, Red Cross Building, Modern Street, Newyork City, USA.</a></li>
		                            <li><a href="#"><i class="fa fa-envelope color1"></i><span>Organicstore@gmail.com</span><br>customersupport@organic.com</a></li>
		                            <li><a href="#"><i class="fa fa-phone color1"></i>+91 (321) 758 142 5698 <br>1800-8692-258-1547</a></li>
		                        </ul>

		                        <div class="border-area">
			                        <h6>Woriking Hours</h6>
									<div class="list Business">
			                            <p>Monday - Friday: 09.00am to 07.00pm <br>Saturday: 10.00am to 05.00pm <br>Sunday: <span>Closed</span></p>
			                        </div>
		                        	
		                        </div>

		                        
							</div>
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12">
			                <div class="contact_in-box">
				                <div class="theme-title ">
				                    <h2>send us massege</h2>
				                </div>
				                <form action="http://st.ourhtmldemo.com/template/organic_store/inc/sendmail.php">
				                	<div class="row">
					                    <div class="col-md-6">
					                        <input type="text" placeholder="Your Name*">
					                    </div>
					                    <!-- /.col-md-6 -->
					                    <div class="col-md-6">
					                        <input type="text" placeholder="Your Email*">
					                    </div>
					                    <!-- /.col-md-6 -->
					                    <div class="col-md-6">
					                        <input type="text" placeholder="Phone">
					                    </div>
					                    <!-- /.col-md-6 -->
					                    <div class="col-md-6">
					                        <input type="text" placeholder="Subject">
					                    </div>
					                    <!-- /.col-md-6 -->

					                    <div class="col-md-12">
					                        <textarea placeholder="Comments"></textarea>
					                    </div>
					                    <!-- /.col-md-12 -->
					                    <div class="col-md-12">
					                        <button type="submit" class="color1_bg">Post Comment</button>
					                    </div>
					                    <!-- /.col-md-12 -->
					                </div>
					                <!-- /.row -->
				                </form>
					                
				            </div> 
			            </div>
					</div>
				</div>
			</section>

			<!-- Google map************************ -->
			<section id="google-map-area">
				<div class="google-map-home" id="google-map" data-map-lat="40.717873" data-map-lng="-73.563033" data-icon-path="images/logo/map.png" data-map-title="Awesome Place" data-map-zoom="11"></div>
	   		</section>
			
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


 </div>