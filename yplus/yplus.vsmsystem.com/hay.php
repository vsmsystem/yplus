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
 
 $stmt = $banco1->query("SELECT * FROM proficio_yplus.lancamentosFinanceiros");
 while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
     // $stmt2->bindParam(':name',$dados["name"])
     //echo "<hr>".json_encode($dados);
     $insert = "INSERT INTO qayplus.financial_transactions 
   (
    url,
    cnpj_cpf,
    organization_name,
    address,
    issue_date,
    amount,
    status_revision,
    id_user,
    id_resource,
    barcode)
   VALUES
   (
    :url,
    :cnpj,
    :estabelecimento,
    :endereco,
    :dataEmissao,
    :valorTotal,
    :statusProcessamento,
    :idUsuario,
    :idConta,
    :codigoBarras
   )";
    $stmt2 = $banco2->prepare($insert);
    $stmt2->bindParam(':url',$dados["url"],obterTipoDadoPDO($dados["url"]));
    $stmt2->bindParam(':cnpj',$dados["cnpj"],obterTipoDadoPDO($dados["cnpj"]));
    $stmt2->bindParam(':estabelecimento',$dados["estabelecimento"],obterTipoDadoPDO($dados["estabelecimento"]));
    $stmt2->bindParam(':endereco',$dados["endereco"],obterTipoDadoPDO($dados["endereco"]));
    $stmt2->bindParam(':dataEmissao',$dados["dataEmissao"],obterTipoDadoPDO($dados["dataEmissao"]));
    $stmt2->bindValue(':valorTotal',($dados["valorTotal"]*100),obterTipoDadoPDO($dados["valorTotal"]));
    $stmt2->bindParam(':statusProcessamento',$dados["statusProcessamento"],obterTipoDadoPDO($dados["statusProcessamento"]));
    $stmt2->bindParam(':idUsuario',$dados["idUsuario"],obterTipoDadoPDO($dados["idUsuario"]));
    $stmt2->bindParam(':idConta',$dados["idConta"],obterTipoDadoPDO($dados["idConta"]));
    $stmt2->bindParam(':codigoBarras',$dados["codigoBarras"],obterTipoDadoPDO($dados["codigoBarras"]));
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
 `cnpj` = `cnpj_cpf`
`estabelecimento` = `organization_name`
`endereco` =  `address`
`dataEmissao` = `issue_date`
`valorTotal` = `amount`
`statusProcessamento` = `status_revision` 
`idUsuario`= `id_user`
`idConta` = `id_resource`
`codigoBarras` = `barcode`
*/