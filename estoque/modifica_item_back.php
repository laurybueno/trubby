<?php
include "$_SERVER[DOCUMENT_ROOT]/includes/usa_api.inc.php";
include "$_SERVER[DOCUMENT_ROOT]/includes/dependencias.inc.php";

//Verifica de POST tem algum valor
if (!empty($_POST['submitted'])) {
    
    $array_info = array(
            id_usuario => $dados_usuario[id_usuario],
            id_produto => $_POST[id_item],
            nome => $_POST[nome_item],
            quantidade => $_POST[quantidade],
            quantidade_tipo => $_POST[unidade],
            custo => $_POST[preco_unidade]
        );
        
    //print(json_encode($arrayInfo, TRUE));    

    update_estoque($array_info);
    
    header('Location: ../estoque/mostra_estoque.php');    
    
}

?>