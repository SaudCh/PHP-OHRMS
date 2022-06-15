
function validateform() {
    var name = document.registerform.name.value;
    var department = document.registerform.department.value;
    var phone = document.registerform.phoneNum.value;
    var salary = document.registerform.salary.value;
    var gender = document.registerform.gender.value;
    var email = document.registerform.email.value;
    var password = document.registerform.password.value;
    var address = document.registerform.address.value;

    let err = true;

    if (name == null || name == "") {
        document.getElementById("nameerr").innerHTML = "*Name Required";
        err = false;
    } else if (/^[a-zA-Z]/.test(name) === false) {
        document.getElementById("nameerr").innerHTML = "Only alphabets are allowed.";
        err = false;
    } else {
        document.getElementById("nameerr").innerHTML = "";
    }

    if (phone == null || phone == "") {
        document.getElementById("phonerr").innerHTML = "*Phone Required";
        err = false;
    } else if (/^[0-9+]+$/.test(phone) === false) {
        document.getElementById("phonerr").innerHTML = "Only numbers are allowed."
        err = false;
    } else if (phone.length < 11) {
        document.getElementById("phonerr").innerHTML = "Phone Number must be 11 digits."
        err = false;
    } else {
        document.getElementById("phonerr").innerHTML = "";
    }

    if (salary == null || salary == "") {
        document.getElementById("salaryerr").innerHTML = "*Salary Required";
        err = false;
    } else if (/^[0-9]+$/.test(salary) === false) {
        document.getElementById("salaryerr").innerHTML = "Only numbers are allowed."
        err = false;
    } else if (salary.length < 11) {
        document.getElementById("salaryerr").innerHTML = "Phone Number must be 11 digits."
        err = false;
    } else {
        document.getElementById("salaryerr").innerHTML = "";
    }

    if (department == null || department == "") {
        document.getElementById("depterr").innerHTML = "*Department Required";
        err = false;
    } else {
        document.getElementById("depterr").innerHTML = "";
    }

    if (gender == null || gender == "") {
        document.getElementById("gendererr").innerHTML = "*Gender Required";
        err = false;
    } else {
        document.getElementById("gendererr").innerHTML = "";
    }

    if (email == null || email == "") {
        document.getElementById("emailerr").innerHTML = "*Email Required";
        err = false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        document.getElementById("emailerr").innerHTML = "Invalid Email";
    } else {
        document.getElementById("emailerr").innerHTML = "";
    }

    if (password == null || password == "") {
        document.getElementById("passerr").innerHTML = "*Password Required";
        err = false;
    } else if (password.length < 6) {
        document.getElementById("passerr").innerHTML = "Password must greater than 6 characters";
        err = false;
    } else {
        document.getElementById("passerr").innerHTML = "";
    }

    if (address == null || address == "") {
        document.getElementById("addresserr").innerHTML = "*Address Required";
        err = false;
    } else {
        document.getElementById("addresserr").innerHTML = "";
    }

    return err;
}