/**
 * package     Your module
 * copyright   Copyright (C) 2014 Joomla Doe
 * license     GNU General Public License version 2 or later; see LICENSE.txt
 */


(function ($) {
	$(document).on('click', 'input[type=submit]', function () {
		var value   = $('input[name=data]').val(),
			action  = $(this).attr('class'),
			request = {
					'option' : 'com_ajax',
					'module' : 'yourmodule',
					'cmd'    : action,
					'data'   : value,
					'format' : '{$format}'
				};
		$.ajax({
			type   : 'POST',
			data   : request,
			success: function (response) {
				console.log(response);
				if(response.data){
					var result = '';
					$.each(response.data, function (index, value) {
						result = result + ' ' + value;
					});

					$('.yourmodule_status').html(result);
				} else {
					$('.yourmodule_status').html(response);
				}
			},
			error: function(response) {
				var data = '',
					obj = $.parseJSON(response.responseText);
				for(key in obj){
					data = data + ' ' + obj[key] + '<br/>';
				}
				$('.yourmodule_status').html(data);
	        }
		});
		return false;
	});
})(jQuery)
