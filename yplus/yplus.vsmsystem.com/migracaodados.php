<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL);
ini_set('display_errors', 1);

function obterTipoDadoPDO($valor) {
    if (is_null($valor)) {
        return PDO::PARAM_NULL;
    } elseif (is_bool($valor)) {
        return PDO::PARAM_BOOL;
    } elseif (is_int($valor)) {
        return PDO::PARAM_INT;
    } else {
        return PDO::PARAM_STR;
    }
}


class Banco1 {
    public static function getConexao(){
        define("DB_HOST1","proficio.vsmsystem.com");
        define("DB_USER1","valhay");
        define("DB_PASSWORD1","Cyberian@23");
        define("DB_SCHEMA1", "proficio_yplus");

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        return new PDO("mysql:host=".DB_HOST1.";dbname=".DB_SCHEMA1,DB_USER1, DB_PASSWORD1, $options);
    }
    
}

class Banco2 {
    public static function getConexao(){
        define("DB_HOST2","qayplus.vsmsystem.com");
        define("DB_USER2","vsmlw2");
        define("DB_PASSWORD2","Cyberian@1");
        define("DB_SCHEMA2", "qayplus");

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        return new PDO("mysql:host=".DB_HOST2.";dbname=".DB_SCHEMA2,DB_USER2, DB_PASSWORD2, $options);
    }
    
}

$banco1 = Banco1::getConexao();
$banco2 = Banco2::getConexao();
 
 $stmt = $banco1->query("SELECT * FROM proficio_yplus.lancamentosFinanceirosItens");
 while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
     // $stmt2->bindParam(':name',$dados["name"])
     //echo "<hr>".json_encode($dados);
     $insert = "INSERT INTO qayplus.financial_transactions_items 
   (
    id_financial_transaction,
    name,
    code,
    quantity,
    quantity_type,
    unit_value,
    amount)
   VALUES
   (
    :idLancamentoFinanceiro,
    :nome,
    :codigo,
    :quantidade,
    :tipoQuantidade,
    :valorUnitario,
    :valor
   )";
    $stmt2 = $banco2->prepare($insert);
    $stmt2->bindParam(':idLancamentoFinanceiro',$dados["idLancamentoFinanceiro"],obterTipoDadoPDO($dados["idLancamentoFinanceiro"]));
    $stmt2->bindParam(':nome',$dados["nome"],obterTipoDadoPDO($dados["nome"]));
    $stmt2->bindParam(':codigo',$dados["codigo"],obterTipoDadoPDO($dados["codigo"]));
    $stmt2->bindParam(':quantidade',$dados["quantidade"],obterTipoDadoPDO($dados["quantidade"]));
    $stmt2->bindParam(':tipoQuantidade',$dados["tipoQuantidade"],obterTipoDadoPDO($dados["tipoQuantidade"]));
    $stmt2->bindValue(':valorUnitario',($dados["valorUnitario"]*100),obterTipoDadoPDO($dados["valorUnitario"]));
    $stmt2->bindValue(':valor',($dados["valor"]*100),obterTipoDadoPDO($dados["valor"]));
    $stmt2->execute();
    //echo "<hr>".$insert;
    //echo json_encode($dados);
   echo "<hr>".$banco2->lastInsertId();
 }
 //$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
 //header("content-type: application/json");
 //echo json_encode($resultado);

 /*
 is_null($valor) ? PDO::PARAM_NULL : PDO::PARAM_STR;
id_financial_transaction,
name,
code,
quantity,
quantity_type,
unit_value,
amount

:idLancamentoFinanceiro,
:nome,
:codigo,
:quantidade,
:tipoQuantidade,
:valorUnitario,
:valor

`id`  =  `id` 
`idLancamentoFinanceiro` = `id_financial_transaction`  
`nome` = `name` 
`codigo` = `code` 
`quantidade` = `quantity` 
`tipoQuantidade` = `quantity_type` 
`valorUnitario` = `unit_value` 
`valor` = `amount` 

*/