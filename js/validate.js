$(function() {

		$('#form-rg').validate({
			rules : {
				name : {
					required : true,
					minlength : 6
				},
				email : {
					required : true,
					email : true
				},
				pass : {
					required : true,
					minlength : 6
				},
				passConf : {
					required : true,
					equalTo : "#pass"
				}
			},
			messages : {
				name : {
					required : "Your name không được để trống",
					minlength : "Your name phải có ít nhất 6 ký tự"
				},
				email : {
					required : "Email không được để trống",
					email : "Email không đúng định dạng",
				},
				pass : {
					required : "Mật khẩu không được để trống",
					minlength : "Mật khẩu phải có ít nhất 6 ký tự",
				},
				passConf : {
					required : "Mật khẩu nhập lại không được để trống",
					equalTo : "Mật khẩu nhập lại không khớp"
				}

			}
		});

		
	});

