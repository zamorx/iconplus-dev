document.addEventListener("DOMContentLoaded", function() {
			// Initialize validation
			$("#validation-form").validate({
				focusInvalid: false,
				rules: {
					"email": {
						required: true,
						email: true
					},
					"password": {
						required: true,
						minlength: 6,
						maxlength: 20
					},
					"validation-password-confirmation": {
						required: true,
						minlength: 6,
						equalTo: "input[name=\"password\"]"
					},
					"companyname": {
						required: true,
						minlength: 6

					},
					"companyaddress": {
						required: true,
						minlength: 6,
						maxlength: 100
					},
					"companycity": {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					"companycountry": {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					"categoryid": {
						required: true
					},
					"osname": {
						required: true
					},
					"downloadname": {
						required: true,
						minlength: 6,
						maxlength: 100
					},
					"downloadpath": {
						required: true,
						url: true
					},
					"companyid": {
						required: true
					},
					"fname": {
						required: true,
						minlength: 3,
						maxlength: 50
					},
					"userrol": {
						required: true,
						minlength: 6,
						maxlength: 50
					},
					"useremail": {
						required: true,
						email: true
					},
					"userphone": {
						required: true,
						minlength: 14,
						maxlength: 15
					},
					"invoicedate": {
						required: true,
						date: true
					},
					"invoiceservice": {
						required: true,
						minlength: 6,
						maxlength: 100
					},
					"serviceprice": {
						required: true,
						number: true,
						min: 0.01,
						max: 1000000
					},
					"serviceqty": {
						required: true,
						number: true,
						min: 1,
						max: 10000
					},
					"lname": {
						required: true,
						minlength: 6,
						maxlength: 50
					},
					"username": {
						required: true,
						minlength: 6,
						maxlength: 50
					},
					"idrol": {
						required: true
					},
					"loginphone": {
						required: true,
						minlength: 14,
						maxlength: 15
					},
					"loginoccupation": {
						required: true,
						minlength: 6,
						maxlength: 100
					},
					"loginaboutme": {
						required: true,
						minlength: 10,
						maxlength: 500
					},
					"organizationname": {
						required: true,
						minlength: 3,
						maxlength: 100
					},
					"organizationaddress": {
						required: true,
						minlength: 6,
						maxlength: 100
					},
					"organizationstate": {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					"organizationcountry": {
						required: true,
						minlength: 2,
						maxlength: 50
					},
					"organizationphone": {
						required: true,
						minlength: 14,
						maxlength: 15
					},
					"organizationemail": {
						required: true,
						email: true
					},
					"organizationweb": {
						required: true,
						minlength: 9,
						maxlength: 100
					}
				},
				// Errors
				errorPlacement: function errorPlacement(error, element) {
					var $parent = $(element).parents(".error-placeholder");
					// Do not duplicate errors
					if ($parent.find(".jquery-validation-error").length) {
						return;
					}
					$parent.append(
						error.addClass("jquery-validation-error small form-text invalid-feedback")
					);
				},
				highlight: function(element) {
					var $el = $(element);
					var $parent = $el.parents(".error-placeholder");
					$el.addClass("is-invalid");
					// Select2 and Tagsinput
					if ($el.hasClass("select2-hidden-accessible") || $el.attr("data-role") === "tagsinput") {
						$el.parent().addClass("is-invalid");
					}
				},
				unhighlight: function(element) {
					$(element).parents(".error-placeholder").find(".is-invalid").removeClass("is-invalid");
				}
			});
		});