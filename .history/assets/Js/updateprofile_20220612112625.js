function validateupdateform() {

    var name = document.registerform.name.value;
    var err = false;

    if (name == null || name == "") {
        document.getElementById("nameue").innerHTML = "*Name Required";
        err = false;
    } else if (/^[a-zA-Z]/.test(name) === false) {
        document.getElementById("nameue").innerHTML = "Only alphabets are allowed.";
        err = false;
    } else {
        document.getElementById("nameue").innerHTML = "";
    }

    return false;
}