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
    } else if () {

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

    // if (address == null || address == "") {
    //     // document.getElementById("addresserr").innerHTML = "*Address Required";
    //     err = false;
    // } else {
    //     // document.getElementById("addresserr").innerHTML = "";
    // }

    return err;
}