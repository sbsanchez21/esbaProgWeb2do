const deleteModal = document.getElementById('deleteModal')
if (deleteModal) {
  deleteModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    let idDel = button.getAttribute('idDel')
    let nom = button.getAttribute('nom')
    let ape = button.getAttribute('ape')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalBodyInput = deleteModal.querySelector('.modal-body input')
    modalBodyInput.value = idDel

    document.getElementById("nomApe").innerHTML="holaa"
  })
}


const updateModal = document.getElementById('updateModal')
if (updateModal) {
  updateModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    let id = button.getAttribute('id')
    let nom = button.getAttribute('nom')
    let ape = button.getAttribute('ape')
    let email = button.getAttribute('email')

    document.getElementById("idUpd").value=id
    document.getElementById("nomUpd").value=nom
    document.getElementById("apeUpd").value=ape
    document.getElementById("emailUpd").value=email
  })
}