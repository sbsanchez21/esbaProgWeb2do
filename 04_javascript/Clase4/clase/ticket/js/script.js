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
    const precio=1000
    console.log("Ingreso a calcTotal")

    let cant=document.getElementById("cant").value
    console.log(cant)

    if (cant>=1) {
        let total=cant*precio
        console.log(total)

        let desc=document.getElementById("desc").value
        total=total - (total*desc/100)
    
        // document.getElementById("total").style.color="red"
        document.getElementById("total").className="bg-info p-1"
        document.getElementById("total").innerHTML=total
            
    } else {
        document.getElementById("total").className="bg-danger p-1"
        document.getElementById("total").innerHTML="La cantidad de tickets debe ser mayor o igual a 1"
        
    }


    
}