$(function() {

	$('.default-calendar').datepicker({
		language: 'en',
		dateFormat: 'dd.mm.yyyy',
		autoClose: true,
		//position: 'center bottom',
		//todayButton: new Date()
		minDate: new Date(),
	});

	$('.future-calendar').datepicker({
		language: 'en',
		dateFormat: 'dd.mm.yyyy',
		autoClose: true,
		//position: 'center bottom',
		//todayButton: new Date()
		minDate: new Date(),
	});

	var yesterday = new Date();
	yesterday.setDate(yesterday.getDate()-1);

	$('.future-calendar-yesterday').datepicker({
		language: 'en',
		dateFormat: 'dd.mm.yyyy',
		autoClose: true,
		minDate: yesterday,
	});

});
