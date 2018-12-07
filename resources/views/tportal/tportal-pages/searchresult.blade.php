@extends('tportal.tportal-layouts.forsearchresults')

@section('content')
<!-- Product Details -->
               <br><br><br>


<div class="container-fluid">

<aside class="column width-3 sidebar " style="float:left">
  <div class="sidebar-inner">
    <div class="widget">
      <h1 class="widget-title">Filter tutor by type</h1>
	 <form method="POST" action="./advancesearch">
		{{csrf_field()}}
        {{-- <div class="column width-12">
           <div class="column width-12">
               <input id="radio-1" class="form-element radio" name="role" type="radio" value="1" checked required>
               <label for="radio-1" class="radio-label">Home</label>
           </div>
           <div class="column width-12">
               <input id="radio-2" class="form-element radio" name="role" type="radio" value="2">
               <label for="radio-2" class="radio-label">Academy</label>
           </div>
           <div class="column width-12">
               <input id="radio-3" class="form-element radio" name="role" type="radio" value="3">
               <label for="radio-3" class="radio-label">school</label>
           </div>
           <div class="column width-12">
               <input id="radio-4" class="form-element radio" name="role" type="radio" value="4">
               <label for="radio-4" class="radio-label">Tutor Place</label>
           </div>
           <div class="column width-12">
               <input id="radio-5" class="form-element radio" name="role" type="radio" value="5">
               <label for="radio-5" class="radio-label">Online</label>
           </div> 
       </div> --}}

    <fieldset>
		
    <legend>Filter By Subject</legend>
    <select class="form-control dropdown" id="education" name="subject">
		 <option value="" selected="selected" disabled="disabled">-- select one --</option>
@foreach($courses as $course)		 
         <option value="{{$course->id}}">{{$course->course_name}}</option>
@endforeach
     </select>
   </fieldset>
   <fieldset>
   <legend>Filter By Class</legend>
   <select class="form-control dropdown" id="education" name="education">
        <option value="" selected="selected" disabled="disabled">-- select one --</option>
        <option value="No formal education">1</option>

    </select>
  </fieldset>
  <fieldset>
  <legend>Filter By city</legend>
  <select class="form-control dropdown" id="education" name="city">
		<option value="" selected="selected" disabled="disabled">-- select one --</option>
@foreach($cities as $city)
       
	   <option value="{{$city->city}}">{{$city->city}}</option>
@endforeach
   </select>
 </fieldset>

 <fieldset>
	<legend>Filter By Gender</legend>
	<select class="form-control dropdown" id="education" name="gender">
		 <option value="" selected="selected" disabled="disabled">-- select one --</option>
		 <option  value="male">Male</option>
		 <option  value="female">Female</option>
  
	 </select>
   </fieldset>
   <input type="submit" value='Search'></input>

</form>


    </div>
    <!-- <div class="widget">
      <h3 class="widget-title">Search Tips</h3>
      <p>Lorem ipsum dolor sit amet, consectetur elit portavolutpat quis porta non, vulputate id diam. Lorem et ipsum dolor sit amet, consectetur adipiscing elit.<p>
    </div> -->
  </div>
</aside>
@if(isset($data))
 <div id="general" class="column width-9">
					<h3 class="mb-30 color-grey inline pull-left">Displaying {{count($data)}} results</h3>
				</div> 

@foreach($data as $user)
		<div class="column width-9" style="float:right;">

		<div class="  bkg-white">
			<div class="row">

				{{-- <div id="general" class="column width-9">
					<h3 class="mb-30 color-grey inline pull-left">Displaying 3 results</h3>
				</div> --}}

				<div class="column width-12">
					<div class="search-result box large bkg-grey-ultralight">
											


									<div class="column width-3">
									<div class="product-images">

											<div class="thumbnail product-thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#000000" data-hover-bkg-opacity="0.1">
												<a class="overlay-link lightbox-link" data-group="product-lightbox-gallery" href="images/shop/single/product-1.jpg">
													<img src="images/shop/single/product-1.jpg" alt=""/>
														<li>  <span >{{$user->age}} years</span></li>
														<li><a href="#">Lives in {{$user->city}}</a></li>
													<span class="overlay-info">
														<span>
															<span>
																<span class="icon-plus large"></span>
															</span>
														</span>
													</span>
												</a>
											</div>
									</div>
									</div>



									
				<div class="column width-9 offset-.5">
				<div class="product-summary">

					<h1 class="product-title">{{$user->name}}</h1>
						<div class="column width-1" >
							<p></span>  <span  class="icon-circled icon-check small rounded border-green-light color-white bkg-hover-green-light color-hover-white thick"></span></p>
						</div>
								<hr>
									<div class="product-rating">
										<span class="star-rating"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-outlined"></span></span>
										<a href="#reviews" class="product-review-link scroll-link tab-trigger-click" data-offset="-80" data-target-tab="#reviews">(3 reviews)</a>
									</div>

								<div class="product-price price"><ins><span class="amount">Last Login:5 Months Ago</span></ins></div>

								<div class="product-description">
									<p> I have completed My Bs From Comsats Wah Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloraperiam, eaque ipsa quae ab illo inventore veritatis.</p>
								</div>

								<div class="product-cart">
									<div class="form-select form-element medium pull-right">
										<span>Teaches:</span><br>
										<span>qualification:</span><br>
										<span>Experience</span>
									</div>

								<div class="column width-2"><a href=""></a></div>
									<button class="button pill add-to-cart-button">View Profile</button>
								</div>
								<hr>
								<div class="product-meta">
									<span class="sku-container">Email: <span class="sku"><a href="">Verified</a></span></span>
									<span class="posted-in">Phone: <a href="#">Verified</a></span>
									<span class="tagged-as">Cnic: <a href="#">Verified</a></span>
									<span class="tagged-as">Degree: <a href="#">Verified</a></span>
									<span class="tagged-as">Address: <a href="#">Verified</a></span>
								</div>
								<hr>

								<hr class="hide show-on-mobile">
							</div>
						</div>
										
										
										
										
					</div>
										
				</div>
			</div>
			</div>
			</div>

</div>
@endforeach
{{-- {!! $data->render() !!} --}}
{{$data->links()}}
@else
{{$message}}
@endif

	
					
					<!-- Product Details End -->



<div class="section-block pb-80 clearfix">
					<div class="row">

						<!-- Content Inner -->
						<div class="column width-9 content-inner blog-single-post">

							<!-- Search Section -->
							<!-- <div class="section-block no-padding">
								<div class="row">
									<div class="column width-12">
										<h3 class="mb-30 color-grey">Search Again</h3>
										<div class="search-form-container site-search">
											<form action="#" method="get" novalidate>
												<div class="row">
													<div class="column width-12">
														<div class="field-wrapper">
															<input type="text" name="search" class="form-search form-element" placeholder="Serach Tutor  &amp; students...">
															<span class="border"></span>
														</div>
													</div>
												</div>
											</form>
											<div class="form-response"></div>
										</div>
									</div>
								</div>
							</div> -->
							<!-- Search Section End -->

							<!-- Search Results Section -->
							<div class="section-block pt-80 pb-0 bkg-white">
								<div class="row">
									<div id="general" class="column width-12">
										<h3 class="mb-30 color-grey inline pull-left">Displaying 3 results</h3>
									</div>
									<div class="column width-12">
										<div class="search-result box large bkg-grey-ultralight">
											<h4>Tutor1</h5>
											<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
											<hr>
											<a href="#" class="read-more"><span class="icon-right-open-mini"></span> More</a>
										</div>
										<div class="search-result box large bkg-grey-ultralight">
											<h4>Tutor2</h5>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
											<hr>
											<a href="#" class="read-more"><span class="icon-right-open-mini"></span> More</a>
										</div>
										<div class="search-result box large bkg-grey-ultralight">
											<h4>Tutor3</h5>
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
											<hr>
											<a href="#" class="read-more"><span class="icon-right-open-mini"></span> More</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Search Results Section End -->

						</div>
						<!-- Content Inner End -->

						<!-- Sidebar -->
						<!-- <aside class="column width-3 sidebar right">
							<div class="sidebar-inner">
								<div class="widget">
									<h3 class="widget-title">Introduction</h3>
									<ul>
										<li><a href="#">I am Aqeel</a></li>
										<li><a href="#">Studyin in Comsats</a></li>
										<li><a href="#">Live in Islamabad</a></li>
										<li><a href="#">Worked For</a></li>
										<li><a href="#">Design</a></li>
										<li><a href="#">Conceptual</a></li>
										<li><a href="#">Music</a></li>
									</ul>
								</div>
								<div class="widget">
									<h3 class="widget-title">Search Tips</h3>
									<p>Lorem ipsum dolor sit amet, consectetur elit porta. Vestibulum ante justo, volutpat quis porta non, vulputate id diam. Lorem et ipsum dolor sit amet, consectetur adipiscing elit.<p>
								</div>
							</div>
						</aside> -->
						<!-- Sidebar End -->

					</div>
				</div>

				<!-- Pagination Section 3 -->
				<div class="section-block pagination-3 pt-0">
					<div class="row">
						<div class="column width-9">
							<ul>
								<li><a class="pagination-previous icon-left-open" href="#"><span class="icon-left-open-mini"></span></a></li>
								<li><a class="current" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a class="pagination-next disabled" href="#"><span class="icon-right-open-mini"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Pagination Section 3 End -->

				<!-- Search Modal End -->
				<div id="search-modal" class="hide">
					<div class="row">
						<div class="column width-12 center">
							<div class="search-form-container site-search">
								<form action="#" method="get" novalidate>
									<div class="row">
										<div class="column width-12">
											<div class="field-wrapper">
												<input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
												<span class="border"></span>
											</div>
										</div>
									</div>
								</form>
								<div class="form-response"></div>
							</div>
							<a href="#" class="tml-aux-exit">Close</a>
						</div>
					</div>
				</div>
				<!-- Search Modal End -->

			</div>
			<!-- Content End -->

  @endsection
