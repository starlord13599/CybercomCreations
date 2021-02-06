if (localStorage.getItem('admin_logged_in') != 'true') {
    document.querySelector('#title').innerHTML = 'Please Log in first'
    document.querySelector('.container').style.display = 'none';
} else {
    const username = document.querySelector('#username')
    let user_name = localStorage.getItem('admin');
    p_user_name = JSON.parse(user_name)
    username.innerHTML = `Hello,${p_user_name.name}`
}


function logout() {
    localStorage.setItem('admin_logged_in', 'false')
    window.location.href = '../login.html'

}

function getAge(dateString) {
    let today = new Date();
    let birthDate = new Date(dateString);
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m === 0 && today.getDate() == birthDate.getDate()) {
        age--;
    }
    return age;
}

const user_details = JSON.parse(localStorage.getItem('user_details'))


let teenage = 0;
let midage = 0;
let senior = 0;

user_details.forEach(el => {
    if (getAge(el.birthdate) < 18) {
        teenage++
    } else if (getAge(el.birthdate) > 18 && getAge(el.birthdate) < 50) {
        midage++
    } else {
        senior++
    }
});

document.querySelector('#one').innerHTML = `User < 18 Years Old :- ${teenage}`
document.querySelector('#two').innerHTML = `18-50 Years Old :- ${midage}`
document.querySelector('#three').innerHTML = `Users > 50 years :- ${senior}`