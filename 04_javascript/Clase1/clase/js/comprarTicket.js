// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

function calcTotal() {
    console.log("ingreso a cacltotal")

    let cant=document.getElementById("cant").value
    console.log(cant)

    if (cant>=1) {
        let total=cant*1000
        console.log(total)

        let desc=document.getElementById("desc").value
    
        total=total - (total*desc/100)
        document.getElementById("total").innerHTML=total
            
    } else {
        document.getElementById("total").innerHTML="Debe ingresar un cantidad mayor o igual a 1"
        document.getElementById("total").className="bg-danger p-1"
    }

}

function aplicarDescuento(desc, valor) {
    console.log("")
}