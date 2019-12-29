<?php
 include_once "views/includes/head.php";
 include_once "views/includes/logo_header.php";
 include_once "views/includes/navbar.php";
 include_once "views/includes/sidebar.php";

 ?>
		

	
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">داشبورد</h2>
								<h5 class="text-white op-7 mb-2">لورم ایپسوم متن ساختگی</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">مدریت</a>
								<a href="#" class="btn btn-secondary btn-round">اضافه کردن مشتری</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row row-card-no-pd mt--2">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-chart-pie text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">شماره</p>
												<h4 class="card-title">150GB</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">لورم ایپسوم </p>
												<h4 class="card-title"> $ 1,345 </h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-error text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">ارورها</p>
												<h4 class="card-title">23</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-twitter text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">فالوورها</p>
												<h4 class="card-title"> 45K + </h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">لورم ایپسوم </div>
										<div class="card-tools">
											<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												لورم ایپسوم 
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												چاپ
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<canvas id="statisticsChart"></canvas>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary">
								<div class="card-header">
									<div class="card-title">لورم ایپسوم </div>
									<div class="card-category">25 مارس</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4 mt-2">
										<h1>4,578.58$</h1>
									</div>
									<div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div>
								</div>
							</div>
							<div class="card card-primary bg-primary-gradient">
								<div class="card-body">
									<h4 class="mb-1 fw-bold">لورم ایپسوم </h4>
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right text-primary">5% +</div>
									<h2 class="mb-2">17</h2>
									<p class="text-muted">کاربران آنلاین</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right text-danger">3% -</div>
									<h2 class="mb-2">27</h2>
									<p class="text-muted">کاربران جدید</p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart2"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right text-warning">7% +</div>
									<h2 class="mb-2">213</h2>
									<p class="text-muted">لورم ایپسوم </p>
									<div class="pull-in sparkline-fix">
										<div id="lineChart3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<h4 class="card-title">لورم ایپسوم </h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">
										لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="table-responsive table-hover table-sales">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/id.png" alt="indonesia">
																</div>
															</td>
															<td>متن ساختگی</td>
															<td class="text-right">
																2.320
															</td>
															<td class="text-right">
																42.18%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/us.png" alt="united states">
																</div>
															</td>
															<td>آمریکا</td>
															<td class="text-right">
																240
															</td>
															<td class="text-right">
																4.36%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/au.png" alt="australia">
																</div>
															</td>
															<td>استرالیا</td>
															<td class="text-right">
																119
															</td>
															<td class="text-right">
																2.16%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/ru.png" alt="russia">
																</div>
															</td>
															<td>روسیه</td>
															<td class="text-right">
																1.081
															</td>
															<td class="text-right">
																19.65%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/cn.png" alt="china">
																</div>
															</td>
															<td>چین</td>
															<td class="text-right">
																1.100
															</td>
															<td class="text-right">
																20%
															</td>
														</tr>
														<tr>
															<td>
																<div class="flag">
																	<img src="assets/img/flags/br.png" alt="brazil">
																</div>
															</td>
															<td>برزی</td>
															<td class="text-right">
																640
															</td>
															<td class="text-right">
																11.63%
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mapcontainer">
												<div id="map-example" class="vmap"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">بهترین محصولات</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">لورم ایپسوم</h6>
											<small class="text-muted">متن ساختگی</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">17$+</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1"> لورم ایپسوم</h6>
											<small class="text-muted">لورم ایپسوم</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">300$+</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">لورم ایپسوم</h6>
											<small class="text-muted">لورم ایپسوم متن ساختگی</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">350$+</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="pull-in">
										<canvas id="topProductsChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">افراد پیشنهاد شده</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">لورم ایپسوم</div>
												<div class="status">دیزاینر گرافیک</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">چاد</div>
												<div class="status">سئو زلیف</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">تالها</div>
												<div class="status">طراح سمت کاربر</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">جان دئو</div>
												<div class="status">توسعه دهنده سمت سرور</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">تالها</div>
												<div class="status">طراح سمت کاربر</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">جیمی دنیس</div>
												<div class="status">طراح گرافیک</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-primary bg-primary-gradient">
								<div class="card-body">
									<h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">فعال کردن حساب همین حالا</h4>
									<h1 class="mb-4 fw-bold">17</h1>
									<h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">بازدید صفحه در هر دقیقه</h4>
									<div id="activeUsersChart"></div>
									<h4 class="mt-5 pb-3 mb-0 fw-bold">بهترین صفحات فعال</h4>
									<ul class="list-unstyled">
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
										<li class="d-flex justify-content-between pb-1 pt-1"><small>/product/atlantis/demo.html</small> <span>10</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">لورم ایپسوم</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">
										<li class="feed-item feed-item-secondary">
											<time class="date" datetime="9-25">25 سپتامبر</time>
											<span class="text">لورم ایپسوم <a href="#">"لورم ایپسوم"</a></span>
										</li>
										<li class="feed-item feed-item-success">
											<time class="date" datetime="9-24">24 سپتامبر</time>
											<span class="text">لورم ایپسوم <a href="#">"لورم ایپسوم"</a></span>
										</li>
										<li class="feed-item feed-item-info">
											<time class="date" datetime="9-23">23 سپتامبر</time>
											<span class="text">پیوستن به گروه <a href="single-group.php">"لورم ایپسوم"</a></span>
										</li>
										<li class="feed-item feed-item-warning">
											<time class="date" datetime="9-21">21 سپتامبر</time>
											<span class="text">لورم ایپسوم<a href="#">"لورم ایپسوم"</a></span>
										</li>
										<li class="feed-item feed-item-danger">
											<time class="date" datetime="9-18">18 سپتامبر</time>
											<span class="text">خلق نیاز <a href="#">"لورم ایپسوم"</a></span>
										</li>
										<li class="feed-item">
											<time class="date" datetime="9-17">17 سپتامبر</time>
											<span class="text">لورم ایپسوم <a href="single-event.php">"چند اتفاق جدید"</a></span>
										</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">لورم ایپسوم</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">روزانه</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">هفتگی</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">ماهانه</a>
												</li>
					</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex">
										<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">J</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">لورم ایپسوم <span class="text-warning pl-3">پرداخت</span></h6>
											<span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">8:40 بعدازظهر</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">تولید سادگی <span class="text-success pl-3">باز</span></h6>
											<span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">1 روز گذشته</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">تولید سادگی <span class="text-muted pl-3">بسته</span></h6>
											<span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2روز گذشته</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-offline">
											<span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">لورم ایپسوم  <span class="text-success pl-3">باز</span></h6>
											<span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 روز گذشته</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar avatar-away">
											<span class="avatar-title rounded-circle border border-white bg-danger">L</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">لورم ایپسوم  <span class="text-muted pl-3">بسته</span></h6>
											<span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ?</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">2 روز گذشته</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
 include_once "views/includes/footer.php";
?>			
	
		
