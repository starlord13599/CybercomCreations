const regbutt = document.querySelector('#registration');
if (localStorage.getItem('admin')) {
    regbutt.classList.add('hidden')
}

function login() {
    const email = document.querySelector('#email').value || null;
    const password = document.querySelector('#password').value || null;

    const admin_details = localStorage.getItem('admin') || null;
    const admin_email = admin_details ? JSON.parse(admin_details).email : null
    const admin_password = admin_details ? JSON.parse(admin_details).password1 : null;

    if (email && password) {
        if ((email === admin_email) && (password === admin_password)) {
            localStorage.setItem('admin_logged_in', true);
            window.location.href = 'dashboard/dashboard.html'
        } else {
            alert('The password you entered is either invalid or you are not registered');
        }
    } else {
        alert('Please enter the credintials correctly');
    }
}