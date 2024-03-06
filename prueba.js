let $peliculas = document.getElementById('peliculas')
let $formato = document.getElementById('formato')
let $hora = document.getElementById('hora')

let peliculas = ['Morbious', 'Ojos de fuego','Jurassic World: Dominion','Thor']
let formato = ['2D,SUB', '2D,DOB','3D,SUB','3D,DOB']
let hora = ['5:05PM',  '6:45PM', '7:50PM', '8:30PM', '6:00PM', '7:15 PM', '9.00PM','9:30PM']

function mostrarLugares(arreglo, lugar) {
    let elementos = '<option selected disables></option>'



    for(let i = 0; i < arreglo.length; i++) {
        elementos += '<option value="' + arreglo[i] +'">' + arreglo[i] +'</option>'
    }

    lugar.innerHTML = elementos
}

mostrarLugares(peliculas, $peliculas)

function recortar(array, inicio, fin, lugar) {
    let recortar = array.slice(inicio, fin)
    mostrarLugares(recortar, lugar)
}

$peliculas.addEventListener('change', function() {
    let valor = $peliculas.value

    switch(valor) {
        case 'Morbious':
            recortar(formato, 0, 2, $formato)
        break
        case 'Ojos de fuego':
            recortar(formato, 0, 3, $formato)
        break
         break
        case 'Jurassic World: Dominion':
            recortar(formato, 0, 1, $formato)
        break
        case 'Thor':
            recortar(formato, 0, 4, $formato)
        break
    }

    $hora.innerHTML = ''
})

$formato.addEventListener('change', function() {
    let valor = $formato.value


    if(valor == '2D,SUB') {
        recortar(hora, 3, 6, $hora)
    } else if(valor == 'DOB,3D') {
        recortar(hora, 4, 7, $hora)
    } else {
        recortar(hora, 7, 9, $hora)
    }
    if(valor == '3D,SUB') {
        recortar(hora, 0, 4, $hora)
    } else if(valor == '2D,DOB') {
        recortar(hora, 4, 6, $hora)
    } else {
        recortar(hora, 5, 8, $hora)
    }
})