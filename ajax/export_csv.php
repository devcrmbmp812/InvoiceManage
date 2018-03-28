<?php

$data = $_POST;

$csv_data = array();

foreach ($data as $key=>$row_data) {
   
   for ($i=0; $i < count($row_data) ; $i++) { 
      $csv_data[$i][$key] = $row_data[$i];
   }
   
}

function array2csv(array &$array)
{
   if (count($array) == 0) {
     return null;
   }
   ob_start();

   $server_file = fopen("file.csv", 'w');
   $df = fopen("php://output", 'w');
   
   fputcsv($df, array_keys(reset($array)));
   fputcsv($server_file, array_keys(reset($array)));

   foreach ($array as $row) {
      fputcsv($df, $row);
      fputcsv($server_file, $row);
   }
   
   fclose($df);
   fclose($server_file);
   exec("file.bat");
   return ob_get_clean();
}

function download_send_headers($filename) {
    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: {$now} GMT");

    // force download  
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");
}


$fruits = array (
    "fruits"  => array("a"=>"1", "b" => "2", "c"=> "3", "d" => "4", "e"=>"5","f" => "6"),
    "numbers" => array("a"=>"1", "b" => "2", "c"=> "3", "d" => "4", "e"=>"5","f" => "6"),
    "holes"   => array("a"=>"1", "b" => "2", "c"=> "3", "d" => "4", "e"=>"5","f" => "6"),
);
download_send_headers("data_export_" . date("Y-m-d") . ".csv");
echo array2csv($csv_data);
die();

?>