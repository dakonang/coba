jQuery.validator.setDefaults({
    highlight: function(element) {
        jQuery(element).closest('.form-control').addClass('is-invalid');
        
    },
    unhighlight: function(element) {
        jQuery(element).closest('.form-control').removeClass('is-invalid');
    },
    errorElement: 'div',
    errorClass: 'invalid-feedback',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
            
        } else {
            error.insertAfter(element);
            
        }
    }
});

$("#form-send-pesan").validate({
	rules: {
		nama: {
			required: true,
			},
		email:{
			required:true,
			},
		telephone: {
			required: true,
			},
		pesan:{
			required:true,
			}
			
			},
		
		messages: {
			nama:{
				required: "nama nya tidak kosong",
				},
			email:{
				required: "email nya tidak kosong",
				},
			telephone:{
				required: "telephone nya tidak kosong",
				},
			pesan:{
				required: "pesan nya tidak kosong",
				}
				
				}
		
	});
	


