if (localStorage.getItem('admin')) {

    let title = document.querySelector('#title')
    let regform = document.querySelector('#regform')

    regform.classList.add('hidden')
    title.innerHTML = 'Admin already exsists'
}


function register() {

    const name = document.querySelector('#name').value;
    const email = document.querySelector('#email').value;
    const password1 = document.querySelector('#password').value;
    const password2 = document.querySelector('#confpassword').value;
    const city = document.querySelector('#city').value;
    const state = document.querySelector('#state').value;
    const check = document.querySelector('#check').checked;

    if (name && email && password1 && password2 && city && state && check) {

        if ((password1 === password2)) {
            const admin_details = {
                name,
                email,
                password1,
                city,
                state,
                check
            }
            localStorage.setItem('admin', JSON.stringify(admin_details))
            localStorage.setItem('admin_logged_in', false)
            window.location.href = "../login.html"

        } else {
            alert('The password didnt match');
        }
    } else {
        alert("Please fill all the fields below correctly")
    }

}