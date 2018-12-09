@extends('tprofile.tprofile-layouts.tprofile-layout')

@section('content')

<br>
<br>
<br>
<div class="row" >
<div class="profile clearfix">
        <div  class="imag">
            <img src="images/team/team-member-8.jpg" class="img-cover">
            <input style="top:5%;
          right:82%"  type="submit" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </div>
        <div class="user clearfix">
            <div class="avatar">
                <img src="images/team/team-member-8.jpg"class="img-thumbnail img-profile">
                 <input style="bottom:0;
               left:22%"  type="submit" value="Update" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
            </div>
            <br>
            <div class="column width-2">
              <div class="widget" >
                  <h4 class="widget-title weight-light"><a href=""></a></h4>
              </div>
            </div>
            <div class="column width-4">
            <h2>Aqeel Ahmad khan</h2></div>
            <div class="column width-2" >
                <p></span>  <span  class="icon-circled icon-check small rounded border-green-light color-green bkg-hover-green-light color-hover-white thick"></span></p>
            </div>
        </div>
        <div class="column width-2">
            <div class="widget" >
                <h4 class="widget-title weight-light"><a href=""></a></h4>
            </div>
        </div>
          <div class="column width-4">
            <span>Rating</span>
            <div class="widget">
                <span class="rating">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </span>
            </div>
          </div>
          <div class="column width-6">
              <div class="widget" >
                  <h4 class="widget-title weight-light"><a href=""></a></h4>
              </div>
          </div>
        <div class="column width-4">
          <input type="submit" value="contact" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
       </div>
    <div class="image"style="background-color:#E7DFDD ;width:1000px;height:1200px;left: 120px;">
      <!-- Boxed Feature Columns
				<div class="section-block pb-0 bkg-grey-ultralight">-->

					<div class="row flex boxes">
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Education</h5>
								<div class="column width-2">	  <a style="" href="#" class="contains-sub-menu profile-image">
                      <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="storage/{{Auth::user()->profile_img}}" class="img-circle special-img">
                  </a></div>
              	<div class="column width-8">
                  <table class="table non-responsive">
                 <tbody>
                   <tr class="cart-subtotal">
                     <th>Degree</th>
                     <td><span class="amount">Bscs</span></td>
                   </tr>
                   <tr class="cart-order-total">
                     <th>Subjects</th>
                     <td><span class="amount">dsfs</span></td>
                   </tr>
                   <tr class="cart-order-total">
                     <th></th>
                     <td><span class="amount">sd</span></td>
                   </tr>
                 </tbody>
               </table>
             </div>
								</div>
							</div>
						</div>
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:200ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Tutors</h5>

                	<div class="column width-8">
                    <!--   <table class="table non-responsive">
                   <tbody>
                     <tr class="cart-order-total">
                       <th>T_Name</th>
                       <td><span >asdsds</span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>Location</th>
                       <td><span >abc</span></td>
                     </tr>

                   </tbody>
                 </table>-->
                 <!
					-- Products Similar -->
					<div class="row products-similar">
						<div class="column width-12">
							<hr>

							<div id="product-grid" class="grid-container products fade-in-progressively no-padding-top" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="0">
								<div class="row">
									<div class="column width-12">
										<div class="row grid content-grid-3">
											<div class="grid-item grid-sizer product design">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<span class="onsale">ABC</span>
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-1.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Aqeel
														</a>
													</h3>

													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Contactt</a>
													</div>
												</div>
											</div>
											<div class="grid-item product design identity">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<span class="outofstock">AAAAAAAAA</span>
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-2.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Mohsin
														</a>
													</h3>

													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
											</div>
											<div class="grid-item product design identity">
												<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
													<a class="overlay-link" href="single-product.html">
														<img src="images/shop/grid/large-margins/product-related-3.jpg" alt=""/>
													</a>
													<div class="product-actions center">
														<a href="#" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
												<div class="product-details center">
													<h3 class="product-title">
														<a href="#">
															Mudassar
														</a>
													</h3>

													<div class="product-actions-mobile">
														<a href="#" class="button pill add-to-cart-button medium">Contact</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Products Similar End -->

               </div>
								</div>
							</div>
						</div>
						<div class="column width-12">
							<div class="feature-column box rounded large bkg-white center horizon" data-animate-in="preset:flipInY;duration:1000ms;delay:400ms;" data-threshold="1">

								<div class="feature-text">
									<h5>Tutions</h5>
                  <div class="column width-2">	 <a style="" href="#" class="contains-sub-menu profile-image">
                        <img style="width:32px;height:32px;position:inline;top:25px;left:10px;border-radius:50%;" src="storage/{{Auth::user()->profile_img}}" class="img-circle special-img"></div>
                	<div class="column width-12">
                  <table class="table non-responsive">
                  <tbody>
                     <tr class="cart-subtotal">
                       <th>Subject</th>
                       <td><span class="amount">English</span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>Time</th>
                       <td><span class="amount"></span></td>
                     </tr>
                     <tr class="cart-order-total">
                       <th>LOcation</th>
                       <td><span class="amount">dssd</span></td>
                     </tr>
                   </tbody>
                 </table>
               </div>
								</div>
							</div>
						</div>



				<!--	</div>-->
				</div>
        <br>
        <br>
        <div class="column width-6">
          <input type="submit" value="Join a tution" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </div>
        <div class="column width-6">
         <input type="submit" value="post a review" class="form-submit button pill medium border-theme bkg-hover-theme color-theme color-hover-white">
        </div>
				<!-- Boxed Feature Columns End -->

   </div>
</div>
</div>
  @endsection
