const user_details = JSON.parse(localStorage.getItem('user_details'))


let url = document.location.href
let params = url.split('?')[1].split('&')[0];
const id = params.split('=')[1]


const that_user = []
user_details.forEach((el, i, a) => {

    if (el.lastId == id) {
        document.querySelector('#username').innerHTML = `Hello,${el.name}`
        that_user.push(a[i]);
    }
});
if (getAge(that_user[0]['birthdate'])) {
    document.querySelector('#mssge').innerHTML = 'HAPPY BIRTHDAY'
}


function getAge(dateString) {
    let today = new Date();
    let birthDate = new Date(dateString);
    // let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    console.log(m)
    if (m === 0 && today.getDate() == birthDate.getDate()) {
        return true;
    }
    return false
}

function logout() {
    localStorage.setItem('admin_logged_in', 'false')
    window.location.href = '../login.html'
}