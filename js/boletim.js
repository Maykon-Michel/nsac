
$(window).resize(function(){
  drawMediaBimestralGeralChart();
});

function drawMediaBimestralGeralChart(mb, mt) {
	var data = new google.visualization.DataTable();
	data.addColumn('string', '');
	data.addColumn('number', 'Média bimestral');
	data.addColumn('number', 'Média da turma');
	data.addRows([
		['1 Bimetre', 1, 2],
		['2 Bimetre', 1, 2],
		['3 Bimetre', 1, 4], 
		['4 Bimetre', 1, 2],
		['Média Final', 2, 1]
	]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('media_bimestral_geral'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

$(document).ready(function() {	
	 // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart', 'bar']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawMediaBimestralGeralChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Callback that draws the pie chart for Sarah's pizza.
      

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 2],
          ['Onions', 2],
          ['Olives', 2],
          ['Zucchini', 0],
          ['Pepperoni', 3]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'How Much Pizza Anthony Ate Last Night'};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('gestao_de_negocios_ii'));
        chart.draw(data, options);
      }
});