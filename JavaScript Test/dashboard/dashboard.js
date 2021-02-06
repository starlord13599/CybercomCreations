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