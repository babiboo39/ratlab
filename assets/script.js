/* Form validation */
function validate_required(field, alerttxt) {
    with(field) {
        if (value==null || value == "") {
            alert(alerttxt);
            return false;
        } else {
            return true;
        }
    }
}

function validate_form(thisform) {
    with(thisform) {
        //report form
        if (validate_required(bugname, "Bug Name can not be empty.")==false) {
            bugname.focus();
            return false;
        }
        if (validate_required(bugdesc, "Description can not be empty.")==false) {
            bugdesc.focus();
            return false;
        }
    }
}