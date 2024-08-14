                                     
								
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
			                    <h1>sản phẩm</h1>
			                    <h4>Chào mừng bạn đến với nhà cung cấp sản phẩm trực tuyến được chứng nhận</h4>
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
				                    <li>SẢN PHẨM</li> 
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

		


			<!-- Shop Page Content************************ -->
	        <div class="shop_page featured-product">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-9 col-md-8 col-sm-12 col-sx-12">
	        					        			
		        			<div class="row">
				            
								<?php
                        		$i = 0;
							    $spshop=loadall_sanpham_shop();
                        		foreach ($spshop as $sp) :
                            	extract($sp);
								$linksp="index.php?act=sanphamct&idsp=".$id;
                            	$hinh=$img_path.$img;
								?>
					            <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
					                <div class="inner-box">
					                    <div class="single-item center">
											
					                        <figure class="image-box"><img src="<?php echo $hinh ?>" alt=""><div class="product-model new">New</div></figure>
					                        <div class="content">
					                        	<h3><a href="#"><?php echo $name ?>'</a></h3>
					                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
					                            <div class="price"><?php echo number_format($price) ?><u>đ</u><span class="prev-rate">13.000 <u>đ</u></span></div>
					                        </div>
											
					                        <div class="overlay-box">
					                        	<div class="inner">
													
						                        	<div class="top-content">
														<!-- <form action="index.php?act=addtocart" method="post" class="fa"> -->
						                        		<ul>
						                        			<li><a href="<?php echo $linksp ?>"><span class="fa fa-eye"></span></a></li>
															
						                        			<li class="tultip-op">
																<!-- <span class="tultip"> -->
															
																<!-- <i class="fa fa-sort-desc"></i><button type="submit" name="addtocart" value="Add to cart" style="width: 110px; color: green;" > -->
																<button data-id="<?= $id ?>"  style="width: 42px;" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)"><span class="icon-icon-32846"></span></button>
																
															
															</li>
						                        		</ul>
														<!-- </form> -->
						                        	</div>
						                        	<div class="bottom-content">
						                        		<h4><a href="#">It Contains:</a></h4>
						                        		<p>35% of organic raisins 55% of oats and 10% of butter. </p>
						                        	</div>
					                        	</div>
					                        </div>
											
						                </div>
					                </div>
					            	</div>
									<?php
									$i += 1;
									endforeach;
									?>
					            
					            
					            <!--Default Item-->
					            <!-- <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
					                <div class="inner-box">
					                   <div class="single-item center">
					                        <figure class="image-box"><img src="images/shop/15.png" alt=""></figure>
					                        <div class="content">
					                        	<h3><a href="">Turmeric Powder</a></h3>
					                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
					                            <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
					                        </div>
					                        <div class="overlay-box">
					                        	<div class="inner">
						                        	<div class="top-content">
						                        		<ul>
						                        			<li><a href="chitietsp.html"><span class="fa fa-eye"></span></a></li>
						                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
																
															</li>
						                        			
						                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
						                        		</ul>
						                        	</div>
						                        	<div class="bottom-content">
						                        		<h4><a href="#">It Contains:</a></h4>
						                        		<p>35% of organic raisins 55% of oats and 10% of butter. </p>
						                        	</div>
					                        	</div>
					                        </div>
						                </div>
					                </div>
					            </div> -->
					            
			        		</div>
			        	</div>

						<!-- _______________________ SIDEBAR ____________________ -->
	        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
	        				<div class="wrapper">
	        					<div class="sidebar_search">
	        						<form action="#">
	        							<input style="font-size:14px;" type="text" placeholder="Search" >
	        							<button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
	        						</form>
	        					</div> <!-- End of .sidebar_styleOne -->

	        					<div class="sidebar_categories">
	        						<div class="theme_inner_title">
										<h4>Danh mục sản phẩm</h4>
									</div>
									<ul>
									    <?php
										    foreach ($dsdm as $dm){
												extract($dm);
												$linkdm="index.php?act=sanpham&iddm=".$id;
												echo '<li><a style="font-size:14px;" href="'.$linkdm.'">'.$name.'</a></li>';
											}
										?>	
									<!-- <li><a href="#" class="tran3s">Vegetables   (15)</a></li>
										<li><a href="#" class="tran3s">Fruits & Drinks   (06)</a></li>
										<li><a href="#" class="tran3s">Fresh Meat   (12)</a></li>
										<li><a href="#" class="tran3s">Beauty Care   (14)</a></li> -->
									</ul>
	        					</div> <!-- End of .sidebar_categories -->

	        				 

								
										</div>					

	        				</div> <!-- End of .wrapper -->
	        			</div> <!-- End of .sidebar_styleTwo -->
	        		</div> <!-- End of .row -->
	        	</div> <!-- End of .container -->
	        </div> <!-- End of .shop_page -->
			
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