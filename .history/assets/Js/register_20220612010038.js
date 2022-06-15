
function validateform() {
    var name = document.registerform.name.value;
    var department = document.registerform.department.value;
    var phone = document.registerform.phoneNum.value;
    var gender = document.registerform.gender.value;
    var email = document.registerform.email.value;
    var password = document.registerform.password.value;
    var address = document.registerform.address.value;

    let err = true;

    if (name == null || name == "") {
        document.getElementById("nameerr").innerHTML = "*Name Required";
        err = false;
    } else {
        document.getElementById("nameerr").innerHTML = "";
    }

    if (phone == null || phone == "") {
        document.getElementById("phonerr").innerHTML = "*Phone Required";
        err = false;
    } else {
        document.getElementById("phonerr").innerHTML = "";
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
        document.getElementById("passworderr").innerHTML = "*Password Required";
        err = false;
    } else {
        document.getElementById("passworderr").innerHTML = "";
    }

    if (address == null || address == "") {
        document.getElementById("addresserr").innerHTML = "*Address Required";
        err = false;
    } else {
        document.getElementById("addresserr").innerHTML = "";
    }

    return err;
}