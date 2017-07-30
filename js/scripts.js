
function changeColor(color) {
	switch(color) {
		case 'blue':
			primary_color = "#000033";
			secondary_color = "#000055";
			tertiary_color = "#AACCFF";
			break;
		case 'gray':
			primary_color = "#333333";
			secondary_color = "#555555";
			tertiary_color = "#CCCCCC";
			break;
		case 'purple':
			primary_color = "#330033";
			secondary_color = "#550055";
			tertiary_color = "#CCAACC";
			break;
	}
	document.body.style.setProperty('--primary-color', primary_color);
	document.body.style.setProperty('--secondary-color', secondary_color);
	document.body.style.setProperty('--tertiary-color', tertiary_color);
}

$(document).ready(function () {
});