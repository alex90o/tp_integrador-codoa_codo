

let categoria = document.getElementById('categoria');
let cantidad = document.getElementById('cantidad');
let totalapagar = document.getElementById('totalapagar');
let botonresumen = document.getElementById('botonresumen');
let resultado = document.getElementById('resultado');
/*
console.log(categoria.value);
console.log(categoria.textContent)
console.log(categoria.innerHTML)

console.log(cantidad.value);
console.log(cantidad.textContent)
console.log(cantidad.innerHTML)

console.log(botonresumen.value);
console.log(botonresumen.textContent)
console.log(botonresumen.innerHTML)

console.log(totalapagar.value);
console.log(totalapagar.textContent)
console.log(totalapagar.innerHTML)
*/
function calcularTotal(){
   //console.log("probando")

   //console.log(cantidad.value);
   //console.log(categoria.value);
   let total ="";
   //1 Estudiante -- 2 Junior -- 3 Trainee
   switch (categoria.value) {
      case "1":
         total= (200 - (200*0.8))*cantidad.value;

         break;
      case "2":
            total= (200 - (200*0.5))*cantidad.value;
   
         break;   
         case "3":
            total=(200 - (200*0.15))*cantidad.value;
   
            break;   
   
  
   }

 //  console.log(total);
  resultado.innerHTML ="  "+total;
 

}

function borrarTotal(){
   resultado.innerHTML ="";
}




function validarTextoEntrada(input, patron) {
   var texto = input.value
   var letras = texto.split("")
   for (var x in letras) {
       var letra = letras[x]
       if (!(new RegExp(patron, "i")).test(letra)) {
           letras[x] = ""
       }
   }
   input.value = letras.join("")
}

var txtnombre = document.getElementById("txtnombre")
txtnombre.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})


var txtapellido = document.getElementById("txtapellido")
txtapellido.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

/*para validar que sean solo letras solo numeros y numeros con letas con js 
https://aprendiendocondomingo.wordpress.com/2020/05/20/como-validar-texto-de-entrada-en-input-solo-numeros-solo-letras-y-personalizado-con-javascript/
*/








