
$(window).resize(function() {
	drawMediaBimestralGeralChart();
	drawMediaBimestralChart('7367b');
	drawMediaBimestralChart('7369b');
});

function drawMediaBimestralGeralChart() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', '');
	data.addColumn('number', 'Média bimestral');
	data.addColumn({type: 'string', role: 'style'});
	data.addColumn('number', 'Média da turma');
	data.addColumn({type: 'string', role: 'style'});
	data.addRows([
		['1 Bimetre', 6.8, '#4CAF50', 7.0, '#2E6830'],
		['2 Bimetre', 7.5, '#4CAF50', 7.5, '#2E6830'],
		['3 Bimetre', 5.7, '#F32617', 5.9, '#A91409'], 
		['4 Bimetre', 6.3, '#4CAF50', 6.8, '#2E6830'],
		['Média Final', 7.0, '#4CAF50', 6.9, '#2E6830']
	]);
	
	var options = {
		title: 'Média Bimestral Geral',
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
	
	new google.visualization.ColumnChart(document.getElementById("mbg"))
		.draw(data, options);
}

function drawMediaBimestralChart(materia) {
	var data = new google.visualization.DataTable();
	data.addColumn('string', '');
	data.addColumn('number', 'Média bimestral');
	data.addColumn({type: 'string', role: 'style'});
	data.addColumn('number', 'Média da turma');
	data.addColumn({type: 'string', role: 'style'});
	data.addRows([
		['1 Bimetre', 6.8, '#4CAF50', 7.0, '#2E6830'],
		['2 Bimetre', 7.5, '#4CAF50', 7.5, '#2E6830'],
		['3 Bimetre', 5.7, '#F32617', 5.9, '#A91409'], 
		['4 Bimetre', 6.3, '#4CAF50', 6.8, '#2E6830'],
		['Média Final', 7.0, '#4CAF50', 6.9, '#2E6830']
	]);
	
	var options = {
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
	
	new google.visualization.ColumnChart(document.getElementById(materia))
		.draw(data, options);
}

$(document).ready(function() {	
	google.charts.load("current", {'packages':['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawMediaBimestralGeralChart);
	google.charts.setOnLoadCallback(function() { return drawMediaBimestralChart('7367b'); });
    google.charts.setOnLoadCallback(function() { return drawMediaBimestralChart('7369b'); });
});