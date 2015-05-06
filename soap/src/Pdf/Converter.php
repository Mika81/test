<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 05/05/2015
 * Time: 15:38
 */
namespace Pdf;

class Converter {
    public function html2pdf($html){
        $html2pdf = new HTML2PDF('P','A4','fr');
        $html2pdf->WriteHTML($html);
        return base64_encode($html2pdf->Output('', true));
    }
}