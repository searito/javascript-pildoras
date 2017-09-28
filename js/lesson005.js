$(document).ready(function() {

	$("#btn-calculator").click(function(e){
		var n1 = prompt("Introduce El Primer Número");
		var n2 = prompt("Introduce El Segundo Número");

		if (!isNaN(n1) && !isNaN(n2)) {  // --- isNaN INDICA SI UNA CADENA INGRESADA NO ES NUMERICA 

			// alert(typeof(n1)); // --- MUESTRA EL TIPO DE DATO QUE CONTIENE UNA VARIABLE

			var operacion = prompt("Que Operación Deseas Hacer Suma / Resta / Multiplicación / División").toLowerCase();

			if (operacion == "suma") {
				alert(Number(n1) + parseInt(n2)); // ---- AMBOS METODOS CONVIERTEN STRING A ENTERO
			}
			else if (operacion == "resta") {
				alert(Number(n1) - parseInt(n2));	
			}
			else if (operacion == "multiplicación" || operacion == "multiplicacion") {
				alert(Number(n1) * parseInt(n2));	
			}
			else if (operacion == "división" || operacion == "division") {
				alert(Number(n1) / parseInt(n2));		
			}else{
				alert("Operación No Contemplada");
			}
		}else{
			alert("No Has Ingresado Números...");
		}

		e.preventDefault();
	});
});