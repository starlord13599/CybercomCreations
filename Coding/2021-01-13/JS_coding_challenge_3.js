/***********************/
// JS CODING CHALLENGE 3
/***********************/



//For calculating the tip from percentage. E.g 20% of $48
const calTip = (value, percent) => {
    return (value * percent) / (100);
}

//For calculating the grand total i.e bill+tip
function genTotal(b, t) {
    let newTotal = []
    b.forEach((n, i) => {
        newTotal.push(n + t[i])
    });
    return newTotal;
}

//Function for generating tip
// 20% --> less than 50$
//15% --> between 50$ and 200$
//10% --> if greater than 200$
function generateTip(amounts) {
    let tips = []
    amounts.forEach(el => {
        if (el < 50) {
            tips.push(calTip(el, 20))
        } else if (el <= 50 && el >= 200) {
            tips.push(calTip(el, 15))
        } else {
            tips.push(calTip(el, 10))
        }
    });
    return tips;
}


//Start of the main function

const bills = [124, 48, 268] //bill amount in $

const tip = generateTip(bills)
const total = genTotal(bills, tip)
//Printing results in console
console.log(`The total tip of each bill is ${tip[0]} ${tip[1]} and ${tip[2]} respectively`);
console.log(`The grand total to each tip is ${total[0]} ${total[1]} and ${total[2]} respectively`);