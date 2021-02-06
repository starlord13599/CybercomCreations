if (localStorage.getItem('admin_logged_in') != 'true') {
    document.querySelector('#title').innerHTML = 'Please Log in first'
    document.querySelector('.container').style.display = 'none';
}