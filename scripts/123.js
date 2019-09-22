function validateForm() {
    var x = document.forms["myform"]["accnofold"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}