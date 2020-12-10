<?php

// headers para json api
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$filesAvailable = array();
$fileList = glob('../../ftp/*');
foreach($fileList as $filename){
    //Use the is_file function to make sure that it is not a directory.
    if(is_file($filename)){
        if (strpos($filename, '.txt')) {
            $filesAvailable['file'][] = $filename; 
            $filesAvailable['img'][] = str_replace('testeimage','teste1image',str_replace('txt','jpg',($filename))); 
        }
    }   
}
foreach($filesAvailable['file'] as $filename) {
    $fp = fopen($filename, 'r');
    while ( !feof($fp) )
    {
        $line = fgets($fp, 2048);
        if($line !== false){
            $data = explode(',',str_replace(';',',',$line));
            $filesAvailable['length'][] = $data['6'] * 1 /10;
            $filesAvailable['width'][] = $data['7'] * 1 / 10;
            $filesAvailable['height'][] = $data['8'] * 1 /10;
            $filesAvailable['weigth'][] = $data['3'] * 1 /1000;
        }
        
    } 
    fclose($fp);
}

$table = '
<table border="solid">
    <tr>
        <th>Arquivo</th>
        <th>Comprimento</th>
        <th>Largura</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>Foto</th>
    </tr>

';
for($i=0;$i <sizeof($filesAvailable['file']); $i++){
    $table .= '
    <tr>
        <td>'.($filesAvailable['file'][$i]).'</td>
        <td>'.($filesAvailable['length'][$i]).' cm</td>
        <td>'.($filesAvailable['width'][$i]).' cm</td>
        <td>'.($filesAvailable['height'][$i]).' cm</td>
        <td>'.($filesAvailable['weigth'][$i]).' kg</td>
        <td><img style="max-height: 150px;"src="'.str_replace('testeimage','teste1image',str_replace('txt','jpg',($filesAvailable['file'][$i]))).'"/></td>
    </tr>
    ';
}

$table .= '
</table>
';

// echo $table;

echo json_encode($filesAvailable);