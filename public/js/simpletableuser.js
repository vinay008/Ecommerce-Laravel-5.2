$(document).ready(function()
{
	$('#myTable').DataTable( {
		"bPaginate": true,
	    "bFilter": false,
	    "bInfo":false,
		"bLengthChange": false,
		"dom": '<ip<t>lf>',
    } );
});