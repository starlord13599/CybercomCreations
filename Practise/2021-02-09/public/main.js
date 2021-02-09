const deletebtn = document.querySelector('#deleteBtn')
const exampleModal = document.getElementById('exampleModal')


exampleModal.addEventListener('show.bs.modal', (event) => {
    let button = event.relatedTarget
    let recipient = button.getAttribute('data-bs-whatever')
    let modalTitle = exampleModal.querySelector('.modal-title')
    modalTitle.textContent = `Delete #${recipient}?`
    localStorage.setItem('id', recipient)
})

deletebtn.addEventListener('click', () => {
    const delete_id = JSON.parse(localStorage.getItem('id'));

    axios.post('../database_queries/delete.php', {
        'id': delete_id
    }).then(() => {
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