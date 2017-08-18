
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

function drawMediaBimestralChart(materia, divWidth) {
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
		width: divWidth,
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

function initializeChart(materia) {
	var div = $('.panel-heading[data-toggle="collapse"][href="#'+materia+'"]');
	div.click(function() {
		drawMediaBimestralChart(materia, div.width());
	});
}

$(document).ready(function() {	
	google.charts.load("current", {'packages':['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawMediaBimestralGeralChart);
	google.charts.setOnLoadCallback(function() { return initializeChart('7367b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('7369b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('7376b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('7377b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('7378b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('7382b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8301b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8302b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8303b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8304b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8305b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8306b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8307b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8308b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8312b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8316b'); });
	google.charts.setOnLoadCallback(function() { return initializeChart('8317b'); });
});