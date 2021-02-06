if (localStorage.getItem('admin_logged_in') != 'true') {
    document.querySelector('#title').innerHTML = 'Please Log in first'
    document.querySelector('.container').style.display = 'none';
} else {
    const username = document.querySelector('#username')
    let user_name = localStorage.getItem('admim');

}

function listData(data) {

    if (data) {
        const usertab = document.querySelector('#usertable>tbody')

        data.forEach((element, ind) => {

            const newRow = usertab.insertRow(ind);
            let cell1 = newRow.insertCell(0);
            let cell2 = newRow.insertCell(1);
            let cell3 = newRow.insertCell(2);
            let cell4 = newRow.insertCell(3);
            let cell5 = newRow.insertCell(4);
            let cell6 = newRow.insertCell(5);

            cell1.innerHTML = `<strong class="id">${element.lastId}</strong>`
            cell2.innerHTML = element.name
            cell3.innerHTML = element.email
            cell4.innerHTML = element.password
            cell5.innerHTML = element.birthdate
            cell6.innerHTML = `<button id='edit' onClick='edit(this)'>Edit</button> <button id='delete'>Delete</button>`;

        });
    }

}

function edit(td) {
    document.querySelector('#adduser>a').innerHTML = "Update User"
    selected = td.parentElement.parentElement
    document.querySelector('#name').value = selected.cells[1].innerHTML
    document.querySelector('#email').value = selected.cells[2].innerHTML
    document.querySelector('#password').value = selected.cells[3].innerHTML
    document.querySelector('#birthdate').value = selected.cells[4].innerHTML
}

function clean() {
    document.querySelector('#name').value = "";
    document.querySelector('#email').value = "";
    document.querySelector('#password').value = "";
    document.querySelector('#birthdate').value = "";
}


function displayData() {
    const details = localStorage.getItem('user_details');
    const d = JSON.parse(details)
    listData(d);
}



let selected = null
let lastId = localStorage.getItem('lastId') || '0';

function insertData() {

    const user_details = localStorage.getItem('user_details') ?
        JSON.parse(localStorage.getItem('user_details')) : [];



    const name = document.querySelector('#name').value;
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;
    const birthdate = document.querySelector('#birthdate').value;


    if (name && email && password && birthdate) {

        if (selected == null) {
            let temp_data = {
                lastId,
                name,
                email,
                password,
                birthdate
            };
            user_details.push(temp_data);
            localStorage.setItem('user_details', JSON.stringify(user_details))
            lastId++;
            localStorage.setItem('lastId', lastId)
            clean()
            window.location.reload()

        } else {

            let selected_id = selected.querySelector('.id').innerHTML;
            user_details.forEach((el, ind) => {
                if (selected_id == el.lastId) {
                    user_details.splice(ind, 1)
                }
            });
            let t_data = {
                lastId: selected_id,
                name,
                email,
                password,
                birthdate
            }

            user_details.push(t_data)
            localStorage.setItem('user_details', JSON.stringify(user_details))
            const new_data = localStorage.getItem('user_details')
            window.location.reload()

        }
    }

}