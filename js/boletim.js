
$(window).resize(function(){
  drawMediaBimestralGeralChart();
});

function drawMediaBimestralGeralChart() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', '');
	data.addColumn('number', 'Média bimestral');
	data.addColumn('number', 'Média da turma');
	data.addRows([
		['1 Bimetre', 6.8, 7.0],
		['2 Bimetre', 7.5, 7.5],
		['3 Bimetre', 7.2, 6.3], 
		['4 Bimetre', 6.3, 6.8],
		['Média Final', 7.0, 6.9]
	]);

	var options = {
		chart: {
			title: 'Média Bimestral Geral',
			subtitle: 'Soma de todas as médias gerais dividido pela quantidade de matérias',
		},
        vAxis: {
			viewWindowMode : 'explicit',
			viewWindow: {
				min: 0,
				max: 10
			}
		}
	};
	new google.charts.Bar(document.getElementById('mbg'))
		.draw(data, google.charts.Bar.convertOptions(options));
}

function drawMediaBimestralChart() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', '');
	data.addColumn('number', 'Média bimestral');
	data.addRows([
		['1 Bimetre', 6.8],
		['2 Bimetre', 7.5],
		['3 Bimetre', 7.2], 
		['4 Bimetre', 6.3],
		['Média Final', 7.0]
	]);

	var options = {
		chart: {
			title: 'Gestão de Negócios II'
		},
		height: 300,
        vAxis: {
			viewWindowMode : 'explicit',
			viewWindow: {
				min: 0,
				max: 10
			}
		},
		legend: {
			position: 'none'
		}
	};
	new google.charts.Bar(document.getElementById('7367b'))
		.draw(data, google.charts.Bar.convertOptions(options));
}

$(document).ready(function() {	
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawMediaBimestralGeralChart);
      google.charts.setOnLoadCallback(function() {return drawMediaBimestralChart('7367b'); });
});