$(function(){
	var data = "data to be sent in this view url for your case $manager";
	$('#modalButton').click(function (){
		$('#modal').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
	});
});
