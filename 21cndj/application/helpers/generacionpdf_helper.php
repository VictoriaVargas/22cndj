<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function pdf_create($html, $filename, $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->set_paper("letter", "portrait" );
    $dompdf->render(); 
    $dompdf->stream($filename . ".pdf", array("Attachment"=> 0));

}


function pdf_create_horizontal($html, $filename, $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);    
    $dompdf->set_paper("letter", "landscape" );    
    $dompdf->render(); 
    $dompdf->stream($filename . ".pdf", array("Attachment"=> 0));

}


function pdf_save_horizontal($html, $filename, $path, $stream=TRUE) {
    require_once("dompdf/dompdf_config.inc.php");
    $folder = $path.$filename;     
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);    
    $dompdf->set_paper("letter", "landscape" );    
    $dompdf->render(); 
    file_put_contents($folder, $dompdf->output());
}



function pdf_save($html, $filename, $path, $stream=TRUE) {
    require_once("dompdf/dompdf_config.inc.php");
    $folder = $path.$filename; 
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->set_paper("a4", "portrait" );
    $dompdf->render();
	file_put_contents($folder, $dompdf->output());

}
?>  