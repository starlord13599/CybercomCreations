export default class ValidateUser {

    errors = {};

    constructor(username, email, phone) {
        this.username = username
        this.email = email
        this.phone = phone
    }


    validate() {
        this.validateName()
        this.validateEmail()
        this.validatePhone()
        return this.errors
    }

    validateName() {
        let letters = /^[A-Za-z]+$/;

        if (this.username.length === 0) {
            this.displayError('name', 'this field cannot be empty')
            return

        } else if (!(letters.exec(this.username))) {
            this.displayError('name', 'Please enter only alphabets')
            return
        }
    }

    validateEmail() {
        let mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (this.email.length === 0) {
            this.displayError('email', 'this field cannot be empty')
            return
        } else if (!(mail.exec(this.email))) {
            this.displayError('email', 'Please enter an valid mail id')
            return
        }

    }

    validatePhone() {
        let num = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/m

        if (this.phone.length === 0) {
            this.displayError('phone', 'This field cannot be empty')
            return
        } else if (!(num.exec(this.phone))) {
            this.displayError('phone', 'The phone number should be only 10 digit number')
            return
        }

    }

    displayError(key, value) {
        this.errors[key] = value
    }

}