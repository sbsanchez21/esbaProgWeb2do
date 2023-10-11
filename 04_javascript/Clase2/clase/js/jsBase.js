let a
let b
a=3
b=4
let result=a+b

b=5
b="Nombre"
b=6
let nombre="Juan"
let apellido="Suarez"

result=a+b
result=a-b
result=a/b
result=a*b

result=nombre+apellido
result="Los datos del clientes son " + nombre + ", " + apellido
result=`Los datos del cliente son ${nombre}, ${apellido}`

result=(a==b)
result=(a!=b)
result=(a>=b)
result=(a>b)
result=(a<=b)

function calcTotal() {
    console.log("hh")

}

let user
let pass 
// user=prompt("ingrese usuario")
// pass=prompt("ingrese pass")

calcTotal()

result= (user=="jperez@gmail.com") && (pass=="1234")

let hoyLlueve
let hayPronostico

// hoyLlueve=prompt("hoy llueve?")
// hayPronostico=prompt("hay pronóstico de lluvia?")

let llevoParaguas= !(hoyLlueve=="si") || (hayPronostico=="si")

const edadMayor=18
let edad=12
if (edad>=edadMayor) {
    console.log("mayor edad")
} else {
    console.log("mayor edad")
}

for (let i = 0; i < 4; i++) {
    console.log(i)
 
}
result=suma(3,6)

function calcRaiz(a) {
    let resultado=Math.sqrt(a)
    document.getElementById("mensaje").innerHTML=resultado
    document.querySelector("#mensaje")
    document.querySelectorAll(".form-control")
}

(a) => {
    return Math.sqrt(a)
}

function suma(a, b) {
    return a+b
}



let t=3
