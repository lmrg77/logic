<?php 
function rutina($cadena){
    $arr1 = str_split($cadena);
    $posicionNumeros = '';
    $posicionSignos = '';
    for($i = 0; $i < count($arr1); $i++){
        switch ($arr1[$i]) {
            case '0':
            case '1':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '2':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '3':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '4':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '5':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '6':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '7':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '8':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
            case '9':
                $posicionNumeros = $posicionNumeros.$i.',';
                break;
        }
        if($arr1[$i] === "?"){
            $posicionSignos = $posicionSignos.$i.',';
        }
    }
    $valida = 0;
    $posicionNumeros = explode(",", $posicionNumeros);
    $vacio1 = array_pop($posicionNumeros);
    $posicionSignos = explode(",", $posicionSignos);
    $vacio2 = array_pop($posicionSignos);
    $valoresSumados = '';
    $tamanoPosicionNumeros = count($posicionNumeros);
    $tamanoPosicionSignos = count($posicionSignos);
    if($tamanoPosicionNumeros%2!=0){
        $tamanoPosicionNumeros--;
    }
    for($i = 0; $i < $tamanoPosicionNumeros; $i++){
        if($i+1<$tamanoPosicionNumeros){
            $valoresSumados = $valoresSumados.($arr1[$posicionNumeros[$i]] + $arr1[$posicionNumeros[$i+1]]).',';
        } 
    }
    $valoresSumadosArray = explode(",", $valoresSumados);
    $vacio3 = array_pop($valoresSumadosArray);
    $k = 0;
    $salir = false;
    for($i = 0; $i < count($valoresSumadosArray); $i++){
        $sumaCondicion = 0;
        if($valoresSumadosArray[$i] == 10){
            for($j = 0; $j < $tamanoPosicionNumeros; $j++){
                if(($j+1<$tamanoPosicionNumeros) && ($k+1<$tamanoPosicionSignos) && ($k+2<$tamanoPosicionSignos)){
                    if($posicionNumeros[$j] < $posicionSignos[$k]){
                        $sumaCondicion = $arr1[$posicionNumeros[$j]] + $arr1[$posicionNumeros[$j+1]];
                        if($posicionNumeros[$j] < $posicionSignos[$k] && $posicionSignos[$j] < $posicionSignos[$k+1] && $posicionSignos[$j+1] < $posicionSignos[$k+2] && $posicionSignos[$k+2] < $posicionNumeros[$j+1] && $sumaCondicion == 10){
                            $valida = 1;
                            $salir = true;
                        }
                    }else{
                        for($l = 0; $l < $tamanoPosicionNumeros; $l++){
                            if(($j+1<$tamanoPosicionNumeros) && ($k+1<$tamanoPosicionSignos) && ($k+2<$tamanoPosicionSignos)){
                                
                                if($salir == false){
                                    if($posicionNumeros[$j] < $posicionSignos[$k] 
                                    && $posicionSignos[$j] < $posicionSignos[$k+1] && 
                                    $posicionSignos[$j+1] 
                                    < $posicionSignos[$k+2] && 
                                    $posicionSignos[$k+2] < $posicionNumeros[$j+1]){
                                        $valida = 1;
                                        $salir = true;
                                    }
                                }
                                $k++;
                            }
                        }
                    }
                }
                $k++;
            }
        }
    }
    return $valida;
}
$valor = rutina("acc?7??sss?3rr1??????5");
if($valor){
    echo("True");
}else{
    echo("False");
}
?>
<script>
    let str = "divertido1&!##! divertido2";
    let str2 = str.replace(/&!##!/g,'');
    let palabras = str2.split(" ");
    console.log(palabras);
    let totales  = [];
    for(let palabra of palabras) {
        totales.push(palabra.length);
    }

    let maximo = Math.max.apply(null, totales);

    for (let elemento of palabras) {
        if (elemento.length === maximo) {
        console.log(elemento);
        break;
        }
    }
</script>;