const deletebtn = document.querySelector('#deleteBtn')


deletebtn.addEventListener('click', () => {
    const delete_id = JSON.parse(localStorage.getItem('id'));
    localStorage.clear()

    axios.post('http://localhost/Project/?c=customer&a=delete', {
        'id': delete_id
    }).then((r) => {
        console.log(r)
        let selected = document.querySelectorAll('.that')

        for (const i of selected) {
            if (i.getAttribute('data-bs-whatever') == delete_id) {
                let remove = i.parentElement.parentElement
                remove.style.display = 'none';
            }
        }

    }).catch((err) => {
        console.log(err)
    });

})