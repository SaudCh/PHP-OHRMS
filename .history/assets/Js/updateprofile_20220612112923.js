function validateupdateform() {

    var name = document.updateform.name.value;
    var phone = document.updateform.phoneNum.value;
    var err = true;

    console.log(name,phone);

    if (name == null || name == "") {
        document.getElementById("nameue").innerHTML = "*Name Required";
        err = false;
    } else if (/^[a-zA-Z]/.test(name) === false) {
        document.getElementById("nameue").innerHTML = "Only alphabets are allowed.";
        err = false;
    } else {
        document.getElementById("nameue").innerHTML = "";
    }

    return err;
}