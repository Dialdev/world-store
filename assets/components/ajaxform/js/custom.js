var AjaxForm={initialize:function(afConfig){if(!jQuery().ajaxForm){document.write('<script src="'+afConfig['assetsUrl']+'js/lib/jquery.form.min.js"><\/script>');}$(document).on('submit',afConfig['formSelector'],function(e){$(this).ajaxSubmit({dataType:'json',data:{pageId:afConfig['pageId']},url:afConfig['actionUrl'],beforeSerialize:function(form){form.find(':submit').each(function(){if(!form.find('input[type="hidden"][name="'+$(this).attr('name')+'"]').length){$(form).append($('<input type="hidden">').attr({name:$(this).attr('name'),value:$(this).attr('value')}));}})},beforeSubmit:function(fields,form){if(typeof(afValidated)!='undefined'&&afValidated==false){return false;}form.find('.popup__error-field').html('');form.find('._invalid').removeClass('_invalid');form.find('input,textarea,select,button').attr('disabled',true);return true;},success:function(response,status,xhr,form){form.find('input,textarea,select,button').attr('disabled',false);response.form=form;$(document).trigger('af_complete',response);if(!response.success){if(response.data){var key,value,focused;for(key in response.data){if(response.data.hasOwnProperty(key)){var input=form.find('[name="'+key+'"]');if(!focused){input.focus();focused=true;}value=response.data[key];input.addClass('_invalid').next().html(value);}}}}else{form.find('._invalid').removeClass('_invalid');form[0].reset();if(typeof(grecaptcha)!='undefined'){grecaptcha.reset();}$('.popup__thank-you-text').html('Сообщение успешно отправлено!');}}});e.preventDefault();return false;});$(document).on('keypress change','._invalid',function(){$(this).removeClass('_invalid').next().html('');});$(document).on('reset',afConfig['formSelector'],function(){$(this).find('._invalid').html('');});}};