$(function() {
	$('.dropdown').click(function(){
	    return; //do nothing
	});

	// top nav dropdown menu
	$(window).on('click', function(event){

		if(event.target.className == 'topnav-btn') {
			if($(event.target).parent().hasClass('open')) {
				$(event.target).find('.fa').addClass('fa-angle-down');
				$(event.target).find('.fa').removeClass('fa-angle-up');
				$('.dropdown').removeClass('open');
			} else {
				$(event.target).find('.fa').removeClass('fa-angle-down');
				$(event.target).find('.fa').addClass('fa-angle-up');
				$('.dropdown').removeClass('open');
				$(event.target).parent().toggleClass('open');
			}
		} else {
			$('.dropdown').removeClass('open');
		}

	});

	$('#mobile-menu-button').click(function(){
		$('#menu-overlay-bg').fadeIn();
		$('.main-nav').animate({ width:'toggle' }, 333);
	});
	$('#close-mobile-menu').click(function(){
		$('#menu-overlay-bg').fadeOut();
		$('.main-nav').animate({ width:'toggle' }, 333);
	});


	$('.future-calendar').datepicker({
		language: 'en',
		dateFormat: 'dd.mm.yyyy',
		autoClose: true,
		//position: 'center bottom',
		//todayButton: new Date()
		minDate: new Date(),
	});

	// assistant
	/*$('#assistant-container').on('mouseover', '.assistant-membership-box', function() {
		$(this).find('.assistant-membership-promo').show();
		$(this).find('h4').hide();
	});
	$('#assistant-container').on('mouseout', '.assistant-membership-box', function() {
		$(this).find('.assistant-membership-promo').hide();
		$(this).find('h4').show();
	});*/

	var getAboTypes = function(course_type) {
		$.post('/members/memberships/assistant/get_abo_list', { 'data': course_type })
			.done(function(data) {
				var parsedData = JSON.parse(data);

				$('#select-abo-type').html(parsedData['abo_types']);
				//$('#select-course').html(parsedData['courses_list']);
			});
	}
	$('#select-course-type').on('change', function() {
		getAboTypes($(this).val());
	});
	if($('#select-course-type').val() != undefined && $('#select-course-type').val() != 0) {
		getAboTypes($('#select-course-type').val());
	}

	$('#select-course').on('change', function() {

		$.post('/members/memberships/assistant/get_course_based_on', { 'data': $(this).val() })
			.done(function(data) {
				$('.based-on').hide();
				$('#continue-button').show();

				switch (data) {
					case '1':
						$('#step-3-tablink').hide();
						$('#course-only').show();
						$('#continue-button').hide();
						$('#submit-button').show();
					break;
					case '2':
						$('#step-3-tablink').show();
						$('#lesson-only').show();
						$('#continue-button').show();
						$('#submit-button').hide();
					break;
					case '3':
						$('#course-or-lesson').show();
						if($('#select-course-or-lesson').val() == 'lesson') {
							$('#step-3-tablink').show();
							$('#continue-button').show();
							$('#submit-button').hide();
						} else {
							$('#step-3-tablink').hide();
							$('#continue-button').hide();
							$('#submit-button').show();
						}
					break;
				}
			});

	});

	$('#select-course-or-lesson').on('change', function() {
		if($(this).val() == 'lesson') {
			$('#step-3-tablink').show();
			$('#continue-button').show();
			$('#submit-button').hide();
		} else {
			$('#step-3-tablink').hide();
			$('#continue-button').hide();
			$('#submit-button').show();
		}
	});

	$('#select-payment-method').on('change', function() {

		$('.payment-method').hide();

		switch($(this).val()) {
			case 'invoice':
				$('#invoice-payment-method').show();
			break;

			case 'online':
				$('#online-payment-method').show();
			break;
		}
	});

});
