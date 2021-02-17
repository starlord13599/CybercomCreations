// const deletebtnCustomer = document.querySelector('#deleteBtnCustomer')
// const deletebtn = document.querySelector('#deleteBtn')
const exampleModal = document.getElementById('exampleModal')


exampleModal.addEventListener('show.bs.modal', (event) => {
    let button = event.relatedTarget
    let recipient = button.getAttribute('data-bs-whatever')
    let modalTitle = exampleModal.querySelector('.modal-title')
    modalTitle.textContent = `Delete #${recipient}?`
    localStorage.setItem('id', recipient)
})