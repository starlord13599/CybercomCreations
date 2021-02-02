//to display the error
function displayerror(id, mssge) {
    const ele = document.getElementById(id).getElementsByClassName('error')[0]
    ele.innerHTML = mssge
}

//to clear all error
function clearError() {
    let clear = document.getElementsByClassName('error')
    for (const i of clear) {
        i.innerHTML = ""
    }
}

//to validate name
function validateName(name) {
    let letters = /^[A-Za-z]+$/;
    if (name.length === 0) {
        displayerror('name', 'this field cannot be empty')
        return false;
    } else if (!(name.match(letters))) {
        displayerror('name', 'Please enter only alphabets')
        return false
    }
    return true;
}

//to validate email
function validateEmail(email) {
    let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (email.length === 0) {
        displayerror('email', 'this field cannot be empty')
        return false
    } else if (!(email.match(mail))) {
        displayerror('email', 'Please enter an valid mail id')
        return false
    }
    return true;
}

//to validate email
function validateGender(gender) {
    if (!gender) {
        displayerror('gender', 'Please select any one option')
        return false
    }
    return true
}
//to validate profession
function validateProff(proff) {
    if (proff == 0) {
        displayerror('proff', 'Please select a profession')
        return false
    }
    return true
}
//to validate terms and policy
function validateTerms(terms) {
    if (!terms) {
        displayerror('terms', 'Please agree to our terms and policies')
        return false
    }
    return true;
}

//main validate function called during submit
function validate() {
    const name = document.forms['myform']['name'].value;
    const email = document.forms['myform']['email'].value
    const gender = document.forms['myform']['gender'].value;
    const proff = document.forms['myform']['proff'].value
    const terms = document.forms['myform']['terms'].checked
    clearError();
    if (validateName(name) && validateEmail(email) &&
        validateGender(gender) && validateProff(proff) &&
        validateTerms(terms)) {
        return true
    } else {
        return false;
    }

}