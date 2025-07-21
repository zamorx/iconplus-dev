<input id="toastr-title" name="toastr-title" type="hidden" class="form-control" value="¡Eliminar!">
<input type="hidden" id="toastr-type" name="toastr-type" value="error" class="form-control">
<input type="hidden" id="toastr-duration" name="toastr-duration" value="5000" class="form-control">

<script>
	document.addEventListener("DOMContentLoaded", function() {
		var toastrMessage = document.getElementById("toastr-message").value;
		var toastrTitle = document.getElementById("toastr-title").value;
		var toastrType = document.getElementById("toastr-type").value;
		var toastrDuration = document.getElementById("toastr-duration").value;

					toastr.options = {
						"closeButton": true,
						"debug": false,
						"newestOnTop": false,
						"progressBar": true,
						"positionClass": "toast-top-right",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": toastrDuration,
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					};

					toastr[toastrType](toastrMessage, toastrTitle);
					// Reset the form fields after showing the toastr message
					document.getElementById("toastr-message").value = "";
					document.getElementById("toastr-title").value = "";
					document.getElementById("toastr-type").value = "";
					document.getElementById("toastr-duration").value = "";

					// Reset the toastr options
					toastr.options = {};



	});
</script>