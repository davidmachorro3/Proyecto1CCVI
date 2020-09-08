<?php

    $orden = $_GET["orden"];
    $tienda = $_GET["tienda"];
    $formato = $_GET["formato"];
    
    $dbconn = pg_connect("host=localhost dbname=Proyecto1CC6 user=postgres password=12345")
    or die('No se ha podido conectar: ' . pg_last_error());

    if(strtoupper($formato) == "XML"){
         $xml = new SimpleXMLElement('<orden/>');
         $courrier = $xml->addChild('courrier', "mcqueen");
         $ord = $xml->addChild('orden', strval($orden));
        $query = "SELECT estado from Envio WHERE codigo='$orden' AND tienda='$tienda'";
        $result = pg_query($query);
        if(pg_num_rows($result) > 0){
        while($line = pg_fetch_assoc($result)){
            $estado = $line["estado"];
         $est = $xml->addchild('status', strval($estado));
        }
       
        Header('Content-type: text/xml');
        print($xml->asXML());
    }else{



    }

    }else if(strtoupper($formato) == "JSON"){
        $est=0;
        $query = "SELECT estado from Envio WHERE codigo='$orden' AND tienda='$tienda'";
        $result = pg_query($query);
        if(pg_num_rows($result) > 0){
        while($line = pg_fetch_assoc($result)){
            $est = $line["estado"];
        }
        $lleva = new stdClass();
        $lleva->orden = array("courier"=>"mcqueen", "orden"=>strval($orden)  ,"status" => strval($est));

        $json = json_encode($lleva);
        
        print($json);
    }else{
        
    }
    }

?>
