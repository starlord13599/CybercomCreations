const cars = ["Saab", "Volvo", "BMW"];
const numbers = ["24", "233", "2", "0"];

function checkAge(age) {
    return age > 18;
}

console.log(numbers.every(checkAge)) //false
console.log(numbers.every((age) => age > 18))


// cars.fill("Mercedes")
// numbers.fill(0)

console.log(numbers.filter(checkAge)) //['24','233']

console.log(cars.lastIndexOf("Volvo")) //1 same (as indexOf method)

const total = numbers.reduce((tot, num) => {
    return Number(tot) + Number(num)
}, 0)

console.log(total)

console.log(numbers)
console.log(cars)