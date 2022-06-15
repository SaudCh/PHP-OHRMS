function validateupdateform(scope) {
    var name = document.updateform.name.value;
    var department = document.updateform.department.value;
    var phone = document.updateform.phoneNum.value;
    var gender = document.updateform.gender.value;
    var email = document.updateform.email.value;
    var address = document.updateform.address.value;

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
            err = false;
        } else {
            document.getElementById("emailerr").innerHTML = "";
        }

    // if (password == null || password == "") {
    //     document.getElementById("passworderr").innerHTML = "*Password Required";
    //     err = false;
    // } else if (password.length < 6) {
    //     document.getElementById("passworderr").innerHTML = "Password must greater than 6 characters";
    //     err = false;
    // } else {
    //     document.getElementById("passworderr").innerHTML = "";
    // }

    if (address == null || address == "") {
        document.getElementById("adderr").innerHTML = "*Address Required";
        err = false;
    } else {
        // document.getElementById("adderr").innerHTML = "";
    }

    alert(err)
    return err;
}