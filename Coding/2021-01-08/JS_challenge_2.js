/*******************************/
// JavaScript Coding Challenge 2
/*******************************/

function averageScore(arr) {
    var total = 0;
    arr.forEach(element => {
        total += element
    });
    return total / arr.length
}
var teamMark = [89, 120, 103];
var teamJohn = [116, 94, 123];

var avgMark = averageScore(teamMark)
var avgJohn = averageScore(teamJohn)

if (avgJohn === avgMark) {
    console.log("Its a DRAW")
} else if (avgJohn > avgMark) {
    console.log("JOHN'S team is the winner")
} else {
    console.log("MARK'S team is the winner")
}

/*****************************/
//EXTRA
/****************************/

//Function for calculating average score
function averageScore(arr) {
    let total = 0;
    arr.forEach(element => {
        total += element
    });
    return total / arr.length
}

//declaring scores
var teamMark = [89, 120, 103];
var teamJohn = [116, 94, 123];
var teamMary = [97, 134, 105];

//calculating average
var avgMark = averageScore(teamMark)
var avgJohn = averageScore(teamJohn)
var avgMary = averageScore(teamMary)

//calculating results of who the winner is!
if (avgJohn === avgMark && avgMark === avgMary) {
    console.log("Its a DRAW")
} else if (avgJohn > avgMark && avgJohn > avgMary) {
    console.log("JOHN'S team is the winner")
} else if (avgMark > avgJohn && avgMark > avgMary) {
    console.log("MARK'S team is the winner")
} else {
    console.log("MARY'S team is the winner")
}