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

jQuery("#resetUserCard").click(function(){
		console.log("worked");
		var userId = $(this).attr("data-id");
		console.log(userId);
		$.ajax({url: "/admin/users/updateUserCard",data:{userId:userId},type:"POST",success: function(result){
		if(result == true){
			alert("Card details removed");
		}
		
    }});
});
