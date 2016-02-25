$(document).ready(function(){

$( document ).ajaxStart(function() {
  $( "#msgalert" ).modal('show');
});
$(document).ajaxError(function(){
    $('#sf').addClass('alert-danger');
	$('#salert').html('Message Sending Failed!');
});

var months = new Array(12);
	months[0] = "January";
	months[1] = "February";
	months[2] = "March";
	months[3] = "April";
	months[4] = "May";
	months[5] = "June";
	months[6] = "July";
	months[7] = "August0";
	months[8] = "September";
	months[9] = "October";
	months[10] = "November";
	months[11] = "December";

	var current_date = new Date();
	var day = current_date.getDay();
    if(day == 0){
    	day = 'Sunday';
    }else if(day == 1){
    	day = 'Monday';
    }else if(day == 2){
    	day = 'Tuesday';
    }else if(day == 3){
    	day = 'Wednesday';
    }else if(day == 4){
    	day = 'Thursday';
    }else if(day == 5){
    	day = 'Friday';
    }else if(day == 6){
    	day = 'Saturday';
    }
	current_date.setDate(current_date.getDate());
	month_value = current_date.getMonth();
	day_value = current_date.getDate();
	year_value = current_date.getFullYear();

	//document.write("The current date is " + months[month_value] + " " + day_value + ", " + year_value);
	$('#date').html(day +" -  "+ months[month_value] + " " + day_value + ", " + year_value + " ");
	function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
	//hour minute second
	var myVar=setInterval(function(){myTimer()},1000);
	function myTimer() {
	var d = new Date();
    $('#time').html(d.toLocaleTimeString());
	}






	$('#send').click(function(){

	var phone = $('#pnum').val();
	var message = $('#msg').val();
	var one = phone.charAt(0);
	var two = phone.charAt(1);
	if(phone.length == 0){
		$('#palert').html('Phone number must not be empty!');
	}else if(isNaN(phone)){
		$('#palert').html('Please Enter a Correct Phone Number!');	
	}else if(phone.length != 11){
		$('#palert').html('Oh uh! I think you entered an invalid Phone Number.');
	}else if(one != 0 && two != 9){
		$('#palert').html('Phone Number should start with 09');
	}else{

			$.ajax({
				type : 'POST',
				url : 'sql.php',
				dataType: 'json',
				data : {
					pnum : phone,
					msg : message
				},
				success : function(data){

					if(data.alert == 'Message Sent!'){
						$('#sf').addClass('alert-success');
						$('#salert').html('Message Successfully Sent!');
					}else{
						$('#sf').addClass('alert-danger');
						$('#salert').html('Sending Message Failed!');
					}

					$('#pnum').val('');
					$('#msg').val('');
				}
			});
		}
		});


}); // end of document ready function
//7043162156034 IP LOGGER ID


















