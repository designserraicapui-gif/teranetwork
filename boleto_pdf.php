<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "
<h1>Tera Network</h1>

<p>Valor: R$ 99,90</p>

<p>Vencimento: 10/06/2026</p>
";

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("boleto.pdf");

?>