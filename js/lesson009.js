$(document).ready(function() {
	
	$("#btn-calculator").click(function(e){
		function suma(num1, num2){
			alert("La Suma Es Igual A " + (num1 + num2));
		}

		function resta(num1, num2){
			alert("La Resta Es Igual A " + (num1 - num2));
		}

		function multiplicacion(num1, num2){
			alert("La Multiplicación Es Igual A " + (num1 * num2));
		}

		function division(num1, num2){
			alert("La División Es Igual A " + (num1 / num2));
		}

		var operacion = prompt("Que Operación Deseas Realizar?").toLowerCase();
		var n1 = parseInt(prompt("Introduce El Primer Número"));
		var n2 = parseInt(prompt("Introduce El Segundo Número"));

		if (operacion == "suma") {
			suma(n1,n2);
		}
		else if (operacion == "resta") {
			resta(n1,n2);
		}
		else if (operacion == "multiplicacion") {
			multiplicacion(n1,n2);
		}
		else if (operacion == "division") {
			division(n1,n2);
		}else{
			alert("Operación No Contemplada...");
		}
		e.preventDefault();
	});

});