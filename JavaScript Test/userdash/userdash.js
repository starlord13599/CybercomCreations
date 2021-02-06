function logout() {
    localStorage.setItem('admin_logged_in', 'false')
    window.location.href = '../login.html'

}