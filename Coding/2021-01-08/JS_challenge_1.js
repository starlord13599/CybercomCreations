/*******************************/
// JavaScript Coding Challenge 1
/*******************************/

// declaring Mark and John height and mass
const mark = {
    height: 10,
    weight: 60
}

const john = {
    height: 18,
    weight: 65
}

//calculating their BMIs
const markBMI = mark.weight / (mark.height ^ 2);
const johnBMI = john.weight / (john.height ^ 2);

//calculating boolean(Is Marks bmi greater than Johns bmi)
const isGreater = markBMI > johnBMI;

//Printing result
console.log("Is Mark's BMI greater than John's BMI?" + " " + isGreater + "!!");