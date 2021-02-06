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

    const user = localStorage.getItem('user_details') || null;
    const user_details = JSON.parse(user) || [];



    if (email && password) {
        if ((email == admin_email) && (password == admin_password)) {
            localStorage.setItem('admin_logged_in', true);
            window.location.href = 'dashboard/dashboard.html'
            // alert('The password you entered is either invalid or you are not registered');
        } else {

            user_details.forEach((el) => {
                if ((email == el.email) && (password == el.password)) {
                    window.location.href = `./userdash/userdash.html?lastId=${el.lastId}`
                    throw new Error('Kill all the code below me')
                }
            });
            alert('The Email or password didnt match');

        }
    } else {
        alert('Please enter the credintials correctly');
    }
}