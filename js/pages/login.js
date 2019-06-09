$(function(){
	var loginForm = $('#loginForm');
	loginForm.parsley({
	  errorClass: 'is-invalid text-danger',
	  // successClass: 'is-valid', // Comment this option if you don't want the field to become green when valid. Recommended in Google material design to prevent too many hints for user experience. Only report when a field is wrong.
	  errorsWrapper: '<span class="form-text text-danger" style="font-size: 12px;"></span>',
	  errorTemplate: '<span></span>',
	  trigger: 'change'
	});
});