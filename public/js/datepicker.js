	$(document).ready(function()
	{	
			$('#date').datepicker();
			$('#date1').datepicker({
				useCurrent: false //Important! See issue #1075
			});
			$("#date").on("dp.change", function (e) {
				$('#date1').data("DateTimePicker").minDate(e.date);
			});
			$("#date").on("dp.change", function (e) {
				$('#date1').data("DateTimePicker").maxDate(e.date);
			});

		});
