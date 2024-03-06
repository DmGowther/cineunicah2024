function incrementar() {
  var elemento = document.getElementById("incrementar");
  var valor = elemento.innerHTML;
  ++valor;

  console.log(valor);
  document.getElementById("incremento").innerHTML = valor;
}
