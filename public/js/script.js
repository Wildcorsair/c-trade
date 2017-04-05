
$(document).ready(function(){


	/* ---- Countdown timer ---- */

	$('#counter').countdown({
		timestamp : (new Date()).getTime() + 11*24*60*60*1000
	});


	/* ---- Animations ---- */

	$('#links a').hover(
		function(){ $(this).animate({ left: 3 }, 'fast'); },
		function(){ $(this).animate({ left: 0 }, 'fast'); }
	);

	$('footer a').hover(
		function(){ $(this).animate({ top: 3 }, 'fast'); },
		function(){ $(this).animate({ top: 0 }, 'fast'); }
	);

	/* ---- Events ---- */

/*	$('#login-button-submit').on('click', function() {
		var regBlock = $('.tab-1 .register'),
			email = regBlock.find('input[name="email"]').val(),
			password = regBlock.find('input[name="password"]').val(),
			token = regBlock.find('input[name="_token"]').val(),
			data;
		// console.log(email + ' ' + password);
		data = {
			email: email,
			password: password,
			_token: token
		};
		$.post(
			'/login',
			data,
			function(data) {
				console.log(data);
		});
	});*/

/* 	$('#register-button-submit').on('click', function() {
 		var regBlock = $('.tab-2 .register');
			fullName = regBlock.find('input[name="full_name"]').val();
			email = regBlock.find('input[name="email"]').val();
			password = regBlock.find('input[name="password"]').val();
			confirmPassword = regBlock.find('input[name="confirm_password"]').val();
		console.log(fullName + ' ' + email + ' ' + password + ' ' + confirmPassword);
 	});*/


});
