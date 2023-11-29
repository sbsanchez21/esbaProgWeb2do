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

    document.getElementById("nomApe").innerHTML=nom + " " + ape
  })
}