function validateForm() {
    var a = document.getElementById("username").value.trim();
    var b = document.getElementById("password").value.trim();
    var c = document.getElementById("email").value.trim();
    var d = document.getElementById("contact").value.trim();

    if (a == "") {
        alert("Username must be filled out");
        return false;
    }

    if (b == "") {
        alert("Password must be filled out");
        return false;
    }

    if (c == "") {
        alert("Email must be filled out");
        return false;
    }

    if (d == "") {
        alert("Contact No. must be filled out");
        return false;
    } else {
        return CheckPassword();
    }
}

function CheckPassword() {
    var password = document.getElementById("password");
    var password2 = /^[A-Za-z0-9]{7,20}$/;
    if (password.value.trim().match(password2)) {
        return CheckNumber();
    } else {
        alert('Password must contain (at least) 1 Numeric value, 1 Uppercase letter, 1 Lowercase letter');
        return false;
    }
}
/*
function CheckEmail() {
    var x = document.getElementById("email").value.trim();
    var check1 = x.includes("@");
    var check2 = x.includes(".");
    if (check1) {
        if (check2) {
            return CheckNumber();
        }
    } else {
        alert('Email is not valid');
    }
}*/

function CheckNumber() {
    var num = document.getElementById("contact");
    var num2 = /^[0-9]{11}$/;
    if (num.value.trim().match(num2)) {
        return true;
    } else {
        alert('Invalid Number');
        return false;
    }

}