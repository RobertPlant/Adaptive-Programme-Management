<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="../js/highcharts.js"></script>
		
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script type="text/javascript">
		$(document).ready(function() {
			

			var options = {
				chart: {
					renderTo: 'container',
					type: 'column'
				},
				title: {
					text: 'Fruit Consumption'
				},
				xAxis: {
					categories: []
				},
				yAxis: {
					title: {
						text: 'Units'
					}
				},
				series: []
			};
			
			// Load the data from the XML file 
			$.get('data.xml', function(xml) {
				
				// Split the lines
				var $xml = $(xml);
				
				// push categories
				$xml.find('categories item').each(function(i, category) {
					options.xAxis.categories.push($(category).text());
				});
				
				// push series
				$xml.find('series').each(function(i, series) {
					var seriesOptions = {
						name: $(series).find('name').text(),
						data: []
					};
					
					// push data points
					$(series).find('data point').each(function(i, point) {
						seriesOptions.data.push(
							parseInt($(point).text())
						);
					});
					
					// add it to the options
					options.series.push(seriesOptions);
				});
				var chart = new Highcharts.Chart(options);
			});
			
			
		});
		</script>
		
	</head>
	<body>
		
		<!-- 3. Add the container -->
		<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
		
				
	</body>
</html>


