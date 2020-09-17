<?php
include('dbconnection.php');
?>

<!-- student registration -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Modal -->
<div class="modal fade" id="registrationmodal" tabindex="-1" aria-labelledby="registrationmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationmodal">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btnclreg()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- start stu. registration form -->
                <form id="stuRegForm">
                    <div class="form-group field">
                        <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bolder">Name</label>
                        <small id="statusMsg1"></small>
                        <input type="text" class="form-control" placeholder="Your Name.." id="stuname" name="stuname">

                    </div>
                    <div class="form-group field">
                        <i class="fas fa-envelope"></i><label for="stuemail"
                            class="pl-2 font-weight-bolder">Email</label>
                        <small id="statusMsg2"></small>
                        <input type="email" class="form-control" placeholder="Your Email." id="stuemail"
                            name="stuemail">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>

                    <div class="form-group field">
                        <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bolder">Password</label>
                        <small id="statusMsg3"></small>
                        <input onkeyup="trigger()" type="password" class="form-control pass" placeholder="Password"
                            id="stupass" name="stupass">
                        <span class="showBtn">SHOW</span>

                        <div class="indicator">
                            <span class="weak"></span>
                            <span class="medium"></span>
                            <span class="strong"></span>
                        </div>
                        <div class="text">
                        </div>
                    </div>




                    <div class="g-recaptcha" style="object-fit: cover; "
                        data-sitekey="6LfGRsoZAAAAADhhDimzfq2d5OTmzmwm0AuPaKwL">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Having Some issue? Click <a
                            href="contactform.php"><b>Here</b></a></small>
                    <small id="emailHelp" class="form-text text-muted">By Clicking next You accept Our <a
                            href="termservice.php"><b>Terms Of Services</b></a></small>
                </form>
            </div>

            <div class="modal-footer">
                <span id="successMsg"></span>
                <!-- <button type="button" class="btn btn-primary" onclick="addStu()" id="signup" name="signup">Sign
                    Up</button> -->
                <button type="button" class="btn btn-primary" id="signup" onclick="addStu()"
                    name="signup">SignUp</button>

            </div>
        </div>
    </div>
</div>


<!-- end student registration -->
<style>
.status {
    font-size: 15px;
    color: green;
    padding: 15px;
}


form .field input {
    width: 100%;
    height: 100%;
    border: 1px solid lightgrey;
    padding-left: 15px;
    outline: none;
    border-radius: 5px;
    font-size: 17px;
    transition: all 0.3s;
}

form .field input:focus {
    border-color: #27ae60;
    box-shadow: inset 0 0 3px #2fd072;
}

form .field .showBtn {
    position: absolute;
    right: 28px;
    top: 53.3%;
    transform: translateY(-50%);
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    display: none;
    user-select: none;
}

form .indicator {
    height: 10px;
    margin: 10px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    display: none;
}

form .indicator span {
    position: relative;
    height: 100%;
    width: 100%;
    background: lightgrey;
    border-radius: 5px;
}

form .indicator span:nth-child(2) {
    margin: 0 3px;
}

form .indicator span.active:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    border-radius: 5px;
}

.indicator span.weak:before {
    background-color: #ff4757;
}

.indicator span.medium:before {
    background-color: orange;
}

.indicator span.strong:before {
    background-color: #23ad5c;
}

form .text {
    font-size: 20px;
    font-weight: 500;
    display: none;
    margin-bottom: -10px;
}

form .text.weak {
    color: #ff4757;
}

form .text.medium {
    color: orange;
}

form .text.strong {
    color: #23ad5c;
}
</style>

<?php
if (isset($_POST['signup'])) {
    $secretKey = '6LfGRsoZAAAAAAMAebrYObgsv-Yt8Q5D9h7_5tuD';
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_POST['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey & response= $responseKey & $ remoteip= $userIP";
    $response = file_get_contents($url);
    $response = json_decode($response);
    if ($response->success) {
        $ggg = "Registered Successfully";
    } else {
        $ggg = "Pls fill the recaptcha";
    }
}
?>


<script>
const indicator = document.querySelector(".indicator");
const input = document.querySelector(".pass");
const weak = document.querySelector(".weak");
const medium = document.querySelector(".medium");
const strong = document.querySelector(".strong");
const text = document.querySelector(".text");
const showBtn = document.querySelector(".showBtn");
let regExpWeak = /[a-z]/;
let regExpMedium = /\d+/;
let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

function trigger() {
    if (input.value != "") {
        indicator.style.display = "block";
        indicator.style.display = "flex";
        if (input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input.value
                .match(regExpStrong))) no = 1;
        if (input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input
                .value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(regExpWeak) &&
                input.value.match(regExpStrong)))) no = 2;
        if (input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input.value
            .match(regExpStrong)) no = 3;
        if (no == 1) {
            weak.classList.add("active");
            text.style.display = "block";
            text.textContent = "Your Password is too Weak..";
            text.classList.add("weak");
        }
        if (no == 2) {
            medium.classList.add("active");
            text.textContent = "Your Password Medium";
            text.classList.add("medium");
        } else {
            medium.classList.remove("active");
            text.classList.remove("medium");
        }
        if (no == 3) {
            weak.classList.add("active");
            medium.classList.add("active");
            strong.classList.add("active");
            text.textContent = "Your Password is Strong";
            text.classList.add("strong");
        } else {
            strong.classList.remove("active");
            text.classList.remove("strong");
        }
        showBtn.style.display = "block";
        showBtn.onclick = function() {
            if (input.type == "password") {
                input.type = "text";
                showBtn.textContent = "HIDE";
                showBtn.style.color = "#23ad5c";
            } else {
                input.type = "password";
                showBtn.textContent = "SHOW";
                showBtn.style.color = "#000";
            }
        }
    } else {
        indicator.style.display = "none";
        text.style.display = "none";
        showBtn.style.display = "none";
    }
}
</script>