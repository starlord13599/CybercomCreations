/*******************************/
// JavaScript Coding Challenge 4
/*******************************/

// declaring object for Mark
const mark = {
    fullName: "Mark Jonas",
    height: 10,
    weight: 60,
    calBMI() {
        const {
            height,
            weight
        } = this;
        const bmi = (weight / (height ^ 2))
        this.bmi = bmi
        return bmi;
    },
}

//Declaring object for John
const john = {
    fullName: "John Doe",
    height: 10,
    weight: 60,
    calBMI() {
        const {
            height,
            weight
        } = this;
        const bmi = (weight / (height ^ 2))
        this.bmi = bmi
        return bmi;
    },
}
//calling the method of BMI in object
mark.calBMI()
john.calBMI()

//Comapring their BMIs
const mssge = mark.bmi === john.bmi ?
    "same as" :
    (mark.bmi > john.bmi ?
        "greater" :
        "less")

//Printing the result in console
console.log(`The BMI of ${mark.fullName} is ${mssge} than ${john.fullName}!!!`)