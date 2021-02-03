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

//to validate password
function validatePassword(password) {
    let letter = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (password.length === 0) {
        displayerror('password', 'this field cannot be empty')
        return false
    } else if (!(password.match(letter))) {
        displayerror('password', 'Pasword must be between 7 - 15 and must contain atleast one numeric value and a special character')
        return false
    }
    return true;
}

function validateAddress(add) {
    let addr = /^[a-zA-Z0-9\s,.'-]{3,}$/
    if (add.length == 0) {
        displayerror('address', 'Address cannot be empty')
        return false
    } else if (!(add.match(addr))) {
        return false
    }
    return true
}

//to validate gender
function validateGender(gender) {
    if (!gender) {
        displayerror('gender', 'Please select any one option')
        return false
    }
    return true
}
//to validate profession
function validateGame(game) {
    let all_games = [];

    game.forEach(element => {
        if (element.checked) {
            all_games.push(element.value)
        }
    });
    if (!(all_games.length)) {
        displayerror('game', 'Please choose a hobby')
        return false
    }
    return true
}

function validateAge(age) {

    if (!(age) || age < 0) {
        displayerror('age', 'Age cannot be negative or zero')
        return false
    }
    return true
}

//to validate terms and policy
// function validateTerms(terms) {
//     if (!terms) {
//         displayerror('terms', 'Please agree to our terms and policies')
//         return false
//     }
//     return true;
// }

//main validate function called during submit
function validate() {
    const name = document.forms['myform']['name'].value;
    const password = document.forms['myform']['password'].value
    const address = document.forms['myform']['address'].value
    const game = document.querySelectorAll('input[name="game[]"');
    const gender = document.forms['myform']['gender'].value;
    const age = document.forms['myform']['age'].value
    // const terms = document.forms['myform']['terms'].checked
    clearError();
    if (validateName(name) &&
        validatePassword(password) &&
        validateAddress(address) &&
        validateGame(game) &&
        validateGender(gender) &&
        validateAge(age)) {
        return true
    } else {
        return false;
    }

}