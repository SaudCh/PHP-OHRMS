function validateupdateform() {

    var name = document.updateform.name.value;
    var phone = document.updateform.phoneNum.value;
    var dept = document.updateform.department.value;
    var gender = document.updateform.gender.value;
    var email = document.updateform.email.value;
    var err = true;

    console.log(name, phone, dept, gender, email);

    if (name == null || name == "") {
        document.getElementById("nameue").innerHTML = "*Name Required";
        err = false;
    } else if (/^[a-zA-Z]/.test(name) === false) {
        document.getElementById("nameue").innerHTML = "Only alphabets are allowed.";
        err = false;
    } else {
        document.getElementById("nameue").innerHTML = "";
    }

    if (phone == null || phone == "") {
        document.getElementById("phoneue").innerHTML = "*Phone Required";
        err = false;
    } else if (/^[0-9+]+$/.test(phone) === false) {
        document.getElementById("phoneue").innerHTML = "Only numbers are allowed."
        err = false;
    } else if (phone.length < 11) {
        document.getElementById("phoneue").innerHTML = "Phone Number must be 11 digits."
        err = false;
    } else {
        document.getElementById("phoneue").innerHTML = "";
    }

    if (dept == null || dept == "") {
        document.getElementById("deptue").innerHTML = "*Department Required";
        err = false;
    } else {
        document.getElementById("deptue").innerHTML = "";
    }

    if (gender == null || gender == "") {
        document.getElementById("genderue").innerHTML = "*Gender Required";
        err = false;
    } else {
        document.getElementById("genderue").innerHTML = "";
    }


    return err;
}