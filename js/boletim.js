
$(document).ready(function() {	
	google.charts.load('current', {'packages':['bar']});
	google.charts.setOnLoadCallback(function() {
	var data = google.visualization.arrayToDataTable([
	  ['', 'Média Bimestral', 'Média da Turma'],
	  ['1 Bimetre', 6, 7],
	  ['2 Bimetre', 8, 8],
	  ['3 Bimetre', 7, 6],
	  ['4 Bimetre', 7.7, 7],
	  ['Média Final', 0, 0]
	]);
	
	var options = {
	  chart: {
		title: '',
		subtitle: '',
	  }
	};
	
	new google.charts.Bar(document.getElementById('columnchart_material'))
		.draw(data, google.charts.Bar.convertOptions(options))});
});