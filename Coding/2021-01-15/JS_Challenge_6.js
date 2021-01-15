/***************************/
// JS CODING CHALLENGE 6
/***************************/

// var looping = function (n) {
//     var a = 0,
//         b = 1,
//         f = 1;
//     for (var i = 2; i <= n; i++) {
//         f = a + b;
//         a = b;
//         b = f;
//     }
//     return f;
// };

function iteraFibonnaci(n) {

    let fib = [0, 1]
    for (let i = 0; i < n - 2; i++) {
        fib[i + 2] = fib[i + 1] + fib[i]
    }
    return fib.join(',')
}

console.log(iteraFibonnaci(20))