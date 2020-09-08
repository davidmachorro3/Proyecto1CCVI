<?php
    $destino = $_GET["destino"];
    $formato = $_GET["formato"];
    if (strtoupper($formato) == "JSON") {
        header("Content-Type: text/json");
    } else if($formato == "xml") {
        header("Content-Type: text/xml");
    }
	
    $dbconn = pg_connect("host=localhost dbname=Proyecto1CC6 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());
    $query = "SELECT costo FROM destino WHERE codigo = '$destino'";
    $result = pg_query($query);
	$mod = rand(1,300);
	
    if(strtoupper($formato) == "XML"){
        $xml = new SimpleXMLElement('<consultaprecio/>');
        $courrier = $xml->addChild('courrier', "mcqueen");
        $dest = $xml->addChild('destino', $destino);
        if(pg_num_rows($result) > 0){
            $costo = pg_fetch_assoc($result)[strval('costo')];
            $cobertura = $xml->addchild('cobertura', "TRUE");
            $cost = $xml->addchild('costo', $costo + $mod);
        }else{
            $cobertura = $xml->addchild('cobertura', "FALSE");
            $cost = $xml->addchild('costo', "0");
        }
        print($xml->asXML());
    }else if(strtoupper($formato) == "JSON"){
        $preciojson = new stdClass();
        if(pg_num_rows($result) > 0){
            $costo = pg_fetch_assoc($result)['costo'];
            $preciojson->consultaprecio = array("courrier"=>"mcqueen", "destino"=>$destino  ,"cobertura" => "TRUE", "costo"=> strval($costo + $mod));
        }else{
            $preciojson->consultaprecio = array("courrier"=>"mcqueen", "destino"=>$destino  ,"cobertura" => "FALSE", "costo"=> "0");
        }
        $json = json_encode($preciojson);
        print($json);
    }
?>