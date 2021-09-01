<?php 

function ola($texto = "mundo", $periodo="Bom dia"){

    return "Olá $texto! $periodo" ."<br>";

}

echo ola();
echo ola("Jon Lima");
echo ola("Jonathan Lima","Boa Tarde");
?>