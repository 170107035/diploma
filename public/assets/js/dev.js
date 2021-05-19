function phone_mask(){
	$('[name="phone"]').mask('+9 999 999 9999');
}

function ajax(url,data,callback){
	$.ajax({
		url: url,
		data: data,
		type: "POST",
		dataType:'json',
		success: function(response){
			callback(response);
		}
	});
}

$(function(){
	$(document).on('submit','.contact-form',function(){
		var $form = $(this);
		var $data = $form.serialize();

		ajax('/mail',$data,function(response){
			if(response.status == 'error'){
				$form.notify(response.message,'error');
				return;
			}

			$form.notify(response.message,'success');
		});
		return false;
	});

	phone_mask();
});