function validateForm() {
    var x = document.forms["myForm"]["task"].value;
    if ( x == null || x == "" ) {
       alert("You must fill in the task and date");
       return false;
    }
 }