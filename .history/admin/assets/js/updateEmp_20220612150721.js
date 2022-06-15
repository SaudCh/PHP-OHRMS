
function validateform() {
    var name = document.updateform.name.value;
    var department = document.updateform.department.value;
    var phone = document.updateform.phoneNum.value;
    var salary = document.updateform.salary.value;  
    // var gender = document.updateform.gender.value;
    // var email = document.updateform.email.value;
    // var password = document.updateform.password.value;
    // var address = document.updateform.address.value;

    let err = false;

    // if (name == null || name == "") {
    //     document.getElementById("nameerr").innerHTML = "*Name Required";
    //     err = false;
    // } else if (/^[a-zA-Z]/.test(name) === false) {
    //     document.getElementById("nameerr").innerHTML = "Only alphabets are allowed.";
    //     err = false;
    // } else {
    //     document.getElementById("nameerr").innerHTML = "";
    // }

    // if (phone == null || phone == "") {
    //     document.getElementById("phonerr").innerHTML = "*Phone Required";
    //     err = false;
    // } else if (/^[0-9+]+$/.test(phone) === false) {
    //     document.getElementById("phonerr").innerHTML = "Only numbers are allowed."
    //     err = false;
    // } else if (phone.length < 11) {
    //     document.getElementById("phonerr").innerHTML = "Phone Number must be 11 digits."
    //     err = false;
    // } else {
    //     document.getElementById("phonerr").innerHTML = "";
    // }

    // if (salary == null || salary == "") {
    //     document.getElementById("salaryerr").innerHTML = "*Salary Required";
    //     err = false;
    // } else if (/^[0-9]+$/.test(salary) === false) {
    //     document.getElementById("salaryerr").innerHTML = "Only numbers are allowed."
    //     err = false;
    // } else if (salary < 10000 || salary > 80000) {
    //     document.getElementById("salaryerr").innerHTML = "Salary must be between 10000 and 80000."
    //     err = false;
    // } else {
    //     document.getElementById("salaryerr").innerHTML = "";
    // }

    // if (department == null || department == "") {
    //     document.getElementById("depterr").innerHTML = "*Department Required";
    //     err = false;
    // } else {
    //     document.getElementById("depterr").innerHTML = "";
    // }

    // if (gender == null || gender == "") {
    //     document.getElementById("gendererr").innerHTML = "*Gender Required";
    //     err = false;
    // } else {
    //     document.getElementById("gendererr").innerHTML = "";
    // }

    // if (email == null || email == "") {
    //     document.getElementById("emailerr").innerHTML = "*Email Required";
    //     err = false;
    // } else if (!/\S+@\S+\.\S+/.test(email)) {
    //     document.getElementById("emailerr").innerHTML = "Invalid Email";
    // } else {
    //     document.getElementById("emailerr").innerHTML = "";
    // }

    // if (address == null || address == "") {
    //     document.getElementById("addresserr").innerHTML = "*Address Required";
    //     err = false;
    // } else {
    //     document.getElementById("addresserr").innerHTML = "";
    // }

    return err;
}