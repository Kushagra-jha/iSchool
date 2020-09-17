$(document).ready(function () {
	$("#stuemail").on("keypress blur", function () {
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)[A-Z]{2,4}$/i;
		var stuemail = $("#stuemail").val();
		$.ajax({
			url: "student/addstudent.php",
			method: "POST",
			data: {
				checkemail: "checkmail",
				stuemail: stuemail
			},

			success: function (data) {
				// console.log(data);
				if (data != 0) {
					$("#statusMsg2").html(
						'<small style="color:red;">Email ID Already Used</small>'
					);
					$("#signup").attr("disabled", true);
				} else if (data == 0 && reg.test(stuemail)) {
					$("#statusMsg2").html(
						'<small style="color:green;">There You Go!</small>'
					);
					$("#signup").attr("disabled", false);
				} else if (!reg.test(stuemail)) {
					$("#statusMsg2").html(
						'<small style="color:red;"> Please Enter a valid Email like---> example@mail.com</small>'
					);
					$("#signup").attr("disabled", false);
				}
				if ((stuemail = "")) {
					$("#statusMsg2").html(
						'<small style="color:red;">Please Enter Email.</small>'
					);
				}
			}
		});
	});
});

function addStu() {
	var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)[A-Z]{2,4}$/i;
	var stuname = $("#stuname").val();
	var stuemail = $("#stuemail").val();
	var stupass = $("#stupass").val();
	var stuphone = $("#stuphone").val();

	if (stuname.trim() == "") {
		$("#statusMsg1").html(
			'<small style="color:red;"> Please Enter Your Name</small>'
		);
		$("#stuname").focus();
		return false;
	} else if (stuemail.trim() == "") {
		$("#statusMsg2").html(
			'<small style="color:red;"> Please Enter Email</small>'
		);
		$("#stuemail").focus();
		return false;
	} else if (stuemail.trim() != "" && !reg.test(stuemail)) {
		$("#statusMsg2").html(
			'<small style="color:red;"> Please Enter a valid Email like---> example@mail.com</small>'
		);
		$("#stuemail").focus();

		return false;
	} else if (stupass.trim() == "") {
		$("#statusMsg3").html(
			'<small style="color:red;"> Please Enter Password</small>'
		);
		$("#stupass").focus();

		return false;
	} else {
		$.ajax({
			url: "student/addstudent.php",
			method: "POST",
			dataType: "json",
			data: {
				stusignup: "stusignup",
				stuname: stuname,
				stuemail: stuemail,
				stupass: stupass
			},
			success: function (data) {
				console.log(data);
				if (data == "OK") {
					$("#successMsg").html(
						"<span class='alert alert-success'>Registration Successful😊</span>"
					);

					clearStuRegField();
				} else if (data == "Failed") {
					$("#successMsg").html(
						"<span class='alert alert-danger'>Unable to Register😞</span>"
					);
				}
			}
		});
	}
}

// empty all fields

function clearStuRegField() {
	$("#stuRegForm").trigger("reset");
	$("#statusMsg1").html(" ");
	$("#statusMsg2").html(" ");
	$("#statusMsg3").html(" ");
	$("#statusMsg4").html(" ");
}
function clearStuLogField() {
	$("#stuLogForm").trigger("reset");
}

function checkStuLog() {
	var stuLogEmail = $("#stuLogemail").val();
	var stuLogPass = $("#stuLogpass").val();
	$.ajax({
		url: "student/addstudent.php",
		method: "POST",
		data: {
			checkLogemail: "checklogmail",
			stuLogEmail: stuLogEmail,
			stuLogPass: stuLogPass
		},
		success: function (data) {
			if (data == 0) {
				$("#statusLogMsg").html(
					'<small class="alert alert-danger" style="font-size:1.5vh;"> Invalid Email ID or Password !</small>'
				);
				clearStuLogField();
			} else if (data == 1) {
				$("#statusLogMsg").html(
					'<div class="spinner-border text-success" role="status"></div>'
				);
				clearStuLogField();
				setTimeout(() => {
					window.location.href = "index.php";
				}, 4000);
			}
		}
	});
}

function EmpCheckStuReg() {
	$("#stuRegForm").trigger("reset");
	$("#statusMsg1").html(" ");
	$("#statusMsg2").html(" ");
	$("#statusMsg3").html(" ");
	$("#statusMsg4").html(" ");
	$("#successMsg").html(" ");
}

function EmpCheckStuLog() {
	$("#statusLogMsg").html(" ");
	$("#stuLogForm").trigger("reset");
}
function btncl() {
	$("#statusLogMsg").html(" ");
	$("#stuLogForm").trigger("reset");
}
function btnclreg() {
	$("#stuRegForm").trigger("reset");
	$("#statusMsg1").html(" ");
	$("#statusMsg2").html(" ");
	$("#statusMsg3").html(" ");
	$("#statusMsg4").html(" ");
	$("#successMsg").html(" ");
}
