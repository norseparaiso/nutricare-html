<!doctype html>
<html lang="en">
	<head>
		<?php include "includes/head.php"; ?>
		</head>
    <body>
		<div id="app">
			<div class="mainwrap">
				<header id="adminmenu">
					<?php include 'includes/navigation.php';?>
				</header>
				<section id="admincontent">
					<?php include 'includes/adminbar.php';?>
					<div id="jmofybody">
						<div class="white-wrap mb-4">
							<div class="d-flex justify-content-between flex-wrap">
								<h4 class="px-24 pt-4 pb-2 my-auto">Main Page Traffic</h4>
								<div class="my-auto px-24 pt-4 pb-2">
									<div class="stat-filter mt-auto right-orient">
										<div class="dropdown">
											<button class="dropdown-toggle" type="button" id="traffic_range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Last 7 Days
											</button>
											<div class="dropdown-menu keep-open" aria-labelledby="traffic_range">
												<a class="dropdown-item" href="#">As of Today</a>
												<a class="dropdown-item active" href="#">Last 7 Days</a>
												<a class="dropdown-item" href="#">Last 30 Days</a>
												<a class="dropdown-item" href="#">This Year</a>
												<a class="dropdown-item" href="#">Select Date Range</a>
												<a class="dropdown-item" href="#">All Time</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="filter-wrap pt-4">
								<div class="table-filters px-24">
									<div class="d-block d-md-flex flex-wrap">
										<label class="my-auto" for="viewdata">View Data</label>
										<div class="filter-dropdown my-auto">
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" id="viewdata" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													All
												</button>
												<div class="dropdown-menu keep-open w-200 p-start" aria-labelledby="viewdata">
													<div class="options">
														<div class="checkbox">
															<input id="view_all" type="checkbox" name="view" value="All" checked>
															<label for="view_all">All</label>
															<span></span>
														</div>
														<div class="checkbox">
															<input id="view_unique" type="checkbox" name="view" value="unique">
															<label for="view_unique">Unique Visitors</label>
															<span></span>
														</div>
														<div class="checkbox">
															<input id="view_usersignups" type="checkbox" name="view" value="user signups">
															<label for="view_usersignups">User Signups</label>
															<span></span>
														</div>
														<div class="checkbox">
															<input id="view_pageviews" type="checkbox" name="view" value="pageviews">
															<label for="view_pageviews">Page VIews</label>
															<span></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center top-label">May 18 - May 24, 2020 - Last 7 Days</h5>
							<div class="px-24 py-3">
								<p>No. of Visitors</p>
								<div class="area-chart">
									<canvas id="chart_1"></canvas>
								</div>
								<p class="text-center bottom-label mb-3 mx-3">
									<span class="chart-label-detail">Year 2020</span>
									<span class="legends text-right mb-0">
										<span class="box green">Unique Visitors</span>
										<span class="box yellow">User Signups</span>
										<span class="box blue">Page Views</span>
									</span>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-lg-7 mb-4">
								<div class="white-wrap h-100">
									<div class="d-flex justify-content-between flex-wrap">
										<h4 class="px-24 pt-4 pb-2 my-auto">Popular Pages</h4>
										<div class="my-auto px-24 pt-4 pb-2">
											<div class="stat-filter mt-auto right-orient">
												<div class="dropdown">
													<button class="dropdown-toggle" type="button" id="popularpages_range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														As of Today
													</button>
													<div class="dropdown-menu keep-open" aria-labelledby="popularpages_range">
														<a class="dropdown-item active" href="#">As of Today</a>
														<a class="dropdown-item" href="#">Last 7 Days</a>
														<a class="dropdown-item" href="#">Last 30 Days</a>
														<a class="dropdown-item" href="#">This Year</a>
														<a class="dropdown-item" href="#">Select Date Range</a>
														<a class="dropdown-item" href="#">All Time</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="px-24 py-3">
										<div class="percentage-chart pt-4 pb-2">
											<p class="mb-1">Find Jobs Page</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:89.2%"></div>
												</div>
												<span class="my-auto percent-label">89.2%</span>
											</div>
											<p class="mb-1">Marketplace Page</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:80.5%"></div>
												</div>
												<span class="my-auto percent-label">80.5%</span>
											</div>
											<p class="mb-1">Homepage</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:66.67%"></div>
												</div>
												<span class="my-auto percent-label">66.67%</span>
											</div>
											<p class="mb-1">Talents Page</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:47.31%"></div>
												</div>
												<span class="my-auto percent-label">47.31%</span>
											</div>
											<p class="mb-1">Support Page</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:28.12%"></div>
												</div>
												<span class="my-auto percent-label">28.12%</span>
											</div>
											<p class="mb-1">Companies</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:8.05%"></div>
												</div>
												<span class="my-auto percent-label">8.05%</span>
											</div>
											<p class="mb-1">Talents Page</p>
											<div class="percent-wrap d-flex mb-3">
												<div class="percent my-auto flex-grow-1">
													<div class="percent-bar" style="width:8.05%"></div>
												</div>
												<span class="my-auto percent-label">8.05%</span>
											</div>
											<p class="text-center bottom-label mt-4 mx-3 mb-0 pt-1">
												<a href="#" class="view-all">View All Pages</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-5 mb-4">
								<div class="white-wrap h-100">
									<div class="d-flex justify-content-between flex-wrap">
										<h4 class="px-24 pt-4 pb-2 my-auto">Top Countries Visits</h4>
										<div class="my-auto px-24 pt-4 pb-2">
											<div class="stat-filter mt-auto right-orient">
												<div class="dropdown">
													<button class="dropdown-toggle" type="button" id="countries_range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														As of Today
													</button>
													<div class="dropdown-menu keep-open" aria-labelledby="countries_range">
														<a class="dropdown-item active" href="#">As of Today</a>
														<a class="dropdown-item" href="#">Last 7 Days</a>
														<a class="dropdown-item" href="#">Last 30 Days</a>
														<a class="dropdown-item" href="#">This Year</a>
														<a class="dropdown-item" href="#">Select Date Range</a>
														<a class="dropdown-item" href="#">All Time</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="px-24 py-3">
										<div class="table-responsive">
											<table class="table table-borderless table-sm">
												<thead>
													<tr>
														<th><span class="green-text">Country</span></th>
														<th class="text-center"><span class="green-text">No. of Visits</span></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag de d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Germany</span>
															</div>
														</td>
														<td class="text-center align-middle">2,302</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag ph d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Philippines</span>
															</div>
														</td>
														<td class="text-center align-middle">1,812</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag se d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Sweden</span>
															</div>
														</td>
														<td class="text-center align-middle">1,203</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag no d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Norway</span>
															</div>
														</td>
														<td class="text-center align-middle">935</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag pl d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Poland</span>
															</div>
														</td>
														<td class="text-center align-middle">489</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag by d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Belarus</span>
															</div>
														</td>
														<td class="text-center align-middle">103</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag au d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Australia</span>
															</div>
														</td>
														<td class="text-center align-middle">89</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag us d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">USA</span>
															</div>
														</td>
														<td class="text-center align-middle">50</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag ca d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Canada</span>
															</div>
														</td>
														<td class="text-center align-middle">23</td>
													</tr>
													<tr>
														<td class="align-middle">
															<div class="d-flex">
																<span class="my-auto">
																	<span class="flag my d-inline-block mr-2">&nbsp;</span>
																</span>
																<span class="align-middle d-inline-block my-auto">Malaysia</span>
															</div>
														</td>
														<td class="text-center align-middle">8</td>
													</tr>
												</tbody>
											</table>
										</div>
										<p class="text-center bottom-label mx-3 mb-0">
											<a href="#" class="view-all">View All Countries</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="white-wrap mb-4">
							<div class="d-flex justify-content-between flex-wrap">
								<h4 class="px-24 pt-4 pb-2 my-auto">Number of Page Visits Per Visitor</h4>
								<div class="my-auto px-24 pt-4 pb-2">
									<div class="stat-filter mt-auto right-orient">
										<div class="dropdown">
											<button class="dropdown-toggle" type="button" id="pagevisitpervisitor_range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Last 7 Days
											</button>
											<div class="dropdown-menu keep-open" aria-labelledby="pagevisitpervisitor_range">
												<a class="dropdown-item" href="#">As of Today</a>
												<a class="dropdown-item active" href="#">Last 7 Days</a>
												<a class="dropdown-item" href="#">Last 30 Days</a>
												<a class="dropdown-item" href="#">This Year</a>
												<a class="dropdown-item" href="#">Select Date Range</a>
												<a class="dropdown-item" href="#">All Time</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center top-label">May 18 - May 24, 2020 - Last 7 Days</h5>
							<div class="px-24 py-3">
								<p>No. of Visitors</p>
								<div class="bar-chart">
									<div id="chart_2"></div>
								</div>
								<p class="text-center bottom-label mb-3 mx-3 mt-1">
									<span class="chart-label-detail">No. of Page Visits</span>
								</p>
							</div>
						</div>
						<div class="white-wrap h-100 mb-4">
							<div class="d-flex justify-content-between flex-wrap">
								<h4 class="px-24 pt-4 pb-2 my-auto">Sources of Visits</h4>
								<div class="my-auto px-24 pt-4 pb-2">
									<div class="stat-filter mt-auto right-orient">
										<div class="dropdown">
											<button class="dropdown-toggle" type="button" id="source_range" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Last 7 Days
											</button>
											<div class="dropdown-menu keep-open" aria-labelledby="source_range">
												<a class="dropdown-item" href="#">As of Today</a>
												<a class="dropdown-item active" href="#">Last 7 Days</a>
												<a class="dropdown-item" href="#">Last 30 Days</a>
												<a class="dropdown-item" href="#">This Year</a>
												<a class="dropdown-item" href="#">Select Date Range</a>
												<a class="dropdown-item" href="#">All Time</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="stat-filter-tabs">
								<a href="#" class="stat-filter-tab active">Websites / Social Media</a>
								<a href="#" class="stat-filter-tab">Devices</a>
								<a href="#" class="stat-filter-tab">Browsers</a>
							</div>
							<h5 class="text-center top-label">May 18 - May 24, 2020 - Last 7 Days</h5>
							<div class="px-24 py-3">
								<div class="donut-chart left-labels">
									<div id="chart_3"></div>
								</div>
								<p class="text-center bottom-label mb-3 mx-3">
									<span class="chart-label-detail">Websites / Social Media</span>
								</p>
							</div>
						</div>
					</div>
				</section>
            </div>
        </div>

        <?php include "includes/footer.php"; ?>

		<!-- Graphs using a combination of Chart JS & Google visualization API -->
		<!-- chart JS -->
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="js/chartjs-plugin-style.min.js"></script>
		<!-- Google chart api -->
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script>
			/** ===== Main page traffic - CHART JS **/
			var chart_1 = document.getElementById("chart_1"); //canvas element
			// For drawing the lines
			var trafficChartData = {
				labels: ["May 18", "May 19", "May 20", "May 21", "May 22", "May 23", "May 24"], // Our labels along the x-axis
				datasets: [{
					data: [123,456,320,789,998,400,840], //values
					label: "Unique Visitors",
					borderColor: "rgba(12,186,82,1)",
					backgroundColor: "rgba(12,186,82,0.4)",
					fill: 'origin'
				},{
					data: [Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40)),Math.floor((Math.random()*(500-40)+40))], //values
					label: "User Signups",
					borderColor: "rgba(232,169,10,1)",
					backgroundColor: "rgba(232,169,10,0.4)",
					fill: 'origin'
				},{
					data: [Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500)),Math.floor((Math.random()*(1500-500)+500))], //values
					label: "Page Views",
					borderColor: "rgba(7,150,230,1)",
					backgroundColor: "rgba(7,150,230,0.4)",
					fill: 'origin'
				}]
			},
			trafficChartOption = {
				responsive: true,
				maintainAspectRatio: false,
				tooltips: {
					callbacks: {
						labelTextColor: function(tooltipItem, chart) {
							return  '#505050';
						}
					},
					mode: 'index',
					intersect: false,
					backgroundColor: '#FFFFFF',
					opacity: 1,
					titleFontColor: "#505050",
					shadowOffsetX: 3,
					shadowOffsetY: 3,
					shadowBlur: 10,
					shadowColor: 'rgba(0, 0, 0, 0.3)'
				},
				hover: {
					mode: 'index',
					intersect: false
				},
				legend: {
					display: false
				}
			};
			// start here:
			var trafficChart = new Chart(chart_1, {
				type: 'line',
				data: trafficChartData,
				options: trafficChartOption
			});
			/** ===== Main page traffic - CHART JS END **/

			/** ===== Number of Page Visits Per Visitor - GOOGLE CHART - column  chart START **/
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawMaterial);
			function drawMaterial() {
				var data = google.visualization.arrayToDataTable([
					['', 'No. of Visitors', { role: 'style' }],
					['1 Page', 1898, '#09BA52'],
					['2 Pages', 1100, '#09BA52'],
					['3 Pages', 959, '#09BA52'],
					['4 Pages', 1254, '#09BA52'],
					['5-10 Pages', 654, '#09BA52'],
					['10-20 Pages', 250, '#09BA52'],
					['20-50 Pages', 120, '#09BA52'],
					['50-100 Pages', 0, '#09BA52'],
					['Over 100 Pages', 0, '#09BA52']
				]);
				var options = {
					legend: { position: "none" },
					bar: {groupWidth: "40"},
					chartArea:{ width:'90%',height:'80%'}
				};
				var barChart = new google.visualization.ColumnChart(document.getElementById('chart_2'));
				barChart.draw(data, options);
			}
			/** ===== Number of Page Visits Per Visitor - GOOGLE CHART - column  chart END **/

			/** ===== Sources of visit - GOOGLE CHART - donut  chart START **/
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Source', 'Visits'],
					['Direct Website URL', 856],
					['Facebook', 434],
					['Twitter', 227],
					['Others', 205]
				]);
				var options = {
					pieHole: 0.5,
					pieSliceTextStyle: {
						color: 'black',
					},
					legend: {
						position: 'left',
						alignment: 'left'
					},
					colors: ["#0CBA52","#1E78BA","#64C9FF","#FFD15D","#F85C5D","#0796E6","#37E57F"],
					pieStartAngle: 180,
					chartArea: {width: '96%', height: '96%',top: '2%'},
				};
				var chart = new google.visualization.PieChart(document.getElementById('chart_3'));
				chart.draw(data, options);
				
				// dynamic update data demo:
				$(".stat-filter-tabs > a").click(function(e){
					e.preventDefault();
					$(".stat-filter-tabs > a").removeClass("active");
					$(this).addClass("active");
					$(this).closest(".white-wrap").find(".bottom-label .chart-label-detail").text($(this).text());
					switch($(this).text()){
						case "Websites / Social Media":
							data = google.visualization.arrayToDataTable([
								['Source', 'Visits'],
								['Direct Website URL', 856],
								['Facebook', 434],
								['Twitter', 227],
								['Others', 205]
							]);
							break;
						case "Devices":
							data = google.visualization.arrayToDataTable([
								['Source', 'Visits'],
								['Mobile', 340],
								['Desktop', 700],
								['Tablet', 50]
							]);
							break;
						case "Browsers":
							data = google.visualization.arrayToDataTable([
								['Source', 'Visits'],
								['Safari', 440],
								['Chrome', 624],
								['Firefox', 22],
								['Edge', 120],
								['IE', 40],
								['Opera', 22],
								['Android Web View', 105]
							]);
							break;
					}
					chart.draw(data, options);
				});
			}
			/** ===== Sources of visit - GOOGLE CHART - donut  chart END **/
		</script>
    </body>
</html>