<div class="titulo">If Else</div>

<?php
if(true) {
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?<br>";
}

if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(true) {
    if(true) {
        if(true) {

        }
    }

} else { //Bloco else e depois if é a mesma coisa que else if
    if(true){
       
    }
}

// Inicio bloco 1
if(false) {

} else {
    if(false){

    } else {
        // ponto
        echo "AQUI<br>";
    }
}
// Fim bloco 1

// Inicio bloco 2 - Funciona igual ao bloco 1 (melhor versão)
if(false) {
    
} else if(false) {

} else {
    // ponto
    echo "AQUI<br>";
}
// Fim bloco 2

if(false) {
    echo "Passo A<br>";
} else if(true) {
    echo "Passo B<br>";
} else {
    echo "Último Passo<br>";
}
echo "Fim<br>";