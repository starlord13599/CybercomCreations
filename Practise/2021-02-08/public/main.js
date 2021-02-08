const deletebtn = document.querySelector('#deleteBtn')
const exampleModal = document.getElementById('exampleModal')


const id = exampleModal.addEventListener('show.bs.modal', (event) => {
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
    }).then((result) => {
        let selected = document.querySelectorAll('.that')

        for (const i of selected) {
            if (i.getAttribute('data-bs-whatever') == delete_id) {
                console.log(i.getAttribute('data-bs-whatever'))
                i.style.display = 'none';
            }
        }
    }).catch((err) => {
        console.log(err)
    });

})