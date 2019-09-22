
function emailValidate() {
    var x = document.forms["valid"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Error! Enter a valid email");
        return false;
    }
}