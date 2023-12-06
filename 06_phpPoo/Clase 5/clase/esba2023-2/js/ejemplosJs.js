function contar() {
    console.log("ingreso a contar")

    let contador=document.getElementById("contador").value
    console.log(contador)
    console.log(contador.length)

    document.getElementById("cantCar").innerHTML=contador.length
    
}