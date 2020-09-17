// admin login jugaad

function checkAdminLogin() {
	var adminLogEmail = $("#adminLogEmail").val();
	var adminLogPass = $("#adminLogPass").val();
	$.ajax({
		url: "Admin/admin.php",
		method: "POST",
		data: {
			checkLogemail: "checklogmail",
			adminLogEmail: adminLogEmail,
			adminLogPass: adminLogPass
		},
		success: function (data) {
			if (data == 0) {
				$("#statusAdminLogMsg").html(
					'<small class="alert alert-danger" style="font-size:2.0vh;"> Invalid Email ID or Password !</small>'
				);
			} else if (data == 1) {
				$("#statusAdminLogMsg").html(
					'<div class="spinner-border text-success" role="status"></div>'
				);

				setTimeout(() => {
					window.location.href = "./Admin/admindashboard.php";
				}, 4000);
			}
		}
	});
}

function adcl() {
	$("#adminloginform").trigger("reset");
	$("#statusAdminLogMsg").html(" ");
}
function adcan() {
	$("#adminloginform").trigger("reset");
	$("#statusAdminLogMsg").html(" ");
}
