<?php

namespace Pdf;

class Converter
{
    public function html2Pdf($html)
    {
        $html2pdf = new \HTML2PDF('P','A4','fr');
        $html2pdf->WriteHTML($html);
        return base64_encode($html2pdf->Output('', true));
    }
}