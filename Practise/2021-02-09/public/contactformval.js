import ValidateUser from "./Validate.js";
const form = document.querySelector('#createform')



form.addEventListener('submit', function (e) {
    e.preventDefault()
    const name = document.querySelector('#name').value
    const email = document.querySelector('#email').value
    const phone = document.querySelector('#phone').value

    console.log(name)
    const user = new ValidateUser(name, email, phone);
    const errors = user.validate()

    if (!(Object.keys(errors).length === 0 && errors.constructor === Object)) {

        errors.name ?
            document.querySelector('#nameErr').innerHTML = errors.name :
            document.querySelector('#nameErr').innerHTML = ''

        errors.email ?
            document.querySelector('#emailErr').innerHTML = errors.email :
            document.querySelector('#emailErr').innerHTML = ''

        errors.phone ?
            document.querySelector('#phoneErr').innerHTML = errors.phone :
            document.querySelector('#phoneErr').innerHTML = ''

        return false
    } else {
        document.forms['createform'].submit()
    }

})