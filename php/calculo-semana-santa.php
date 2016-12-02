<?php
	$xc = '<h1>Cálculo de fechas de semana santa de 1970 a 2037</h1>';
	$xc .= '<h2>Código</h2>';
	
	$xc .= '<div class="code_c">';
	$xc .= highlight_string('<?php

    $diff1Day = new DateInterval(\'P1D\');
    $diff1Day->invert = 1;
    $minYear = 1970;
    $maxYear = 2037;

	$dates = null;
    $dates[0][0] = \'1979-10-10\';
    $dates[0][1] = \'PCID\';

    for ($i = $minYear; $i <= $maxYear; $i++) {
        $dt = new DateTime((date ( \'Y-m-d\', easter_date($i))));
        $ar = NULL;
        $ar[][0] = $dt->format(\'Y-m-d\');
        $ar[count($ar) - 1][1] = \'Domingo de Resurrección\';
        for ($j = 1; $j < 4; $j++) {
            $dt->add($diff1Day);
            $ar[][0] = $dt->format(\'Y-m-d\');
            switch($j)
            {
                case 1 : $ar[count($ar) - 1][1] = \'Sábado Santo\';  break;
                case 2 : $ar[count($ar) - 1][1] = \'Viernes Santo\';  break;
                case 3 : $ar[count($ar) - 1][1] = \'Jueves Santo\';  break;
                default:break;
            }

        }
        $dates = array_merge($dates, array_reverse($ar));
    }
	
	array_splice($dates, 0, 1);
    
	$xc = \'<h1>Cálculo de fechas de semana santa de 1970 a 2037</h1>\';
	$xc .= \'<table width="100%" cellspacing="2" cellpadding="12">\';
		$xc .= \'<thead><tr><td width="100">FECHA</td><td>DESCRIPCIÓN</td></tr></thead>\';
		$xc .= \'<tbody>\';
			foreach($dates as $item) $xc .= \'<tr><td>\' . $item[0] . \'</td><td>\' . $item[1] . \'</td></tr>\';
		$xc .= \'</tbody>\';
	$xc .= \'</table>\';
	echo $xc;    
?>
', true);	
	$xc .= '</div>';

    $diff1Day = new DateInterval('P1D');
    $diff1Day->invert = 1;
    $minYear = 1970;
    $maxYear = 2037;

	$dates = null;
    $dates[0][0] = '1979-10-10';
    $dates[0][1] = 'PCID';

    for ($i = $minYear; $i <= $maxYear; $i++) {
        $dt = new DateTime((date ( 'Y-m-d', easter_date($i))));
        $ar = NULL;
        $ar[][0] = $dt->format('Y-m-d');
        $ar[count($ar) - 1][1] = 'Domingo de Resurrección';
        for ($j = 1; $j < 4; $j++) {
            $dt->add($diff1Day);
            $ar[][0] = $dt->format('Y-m-d');
            switch($j)
            {
                case 1 : $ar[count($ar) - 1][1] = 'Sábado Santo';  break;
                case 2 : $ar[count($ar) - 1][1] = 'Viernes Santo';  break;
                case 3 : $ar[count($ar) - 1][1] = 'Jueves Santo';  break;
                default:break;
            }

        }
        $dates = array_merge($dates, array_reverse($ar));
    }
	
	array_splice($dates, 0, 1);
    
	$xc .= '<h2>Resultado</h2>';
	$xc .= '<div class="result_c">';
	$xc .= '<table cellspacing="2">';
		$xc .= '<thead><tr><td width="100">FECHA</td><td>DESCRIPCIÓN</td></tr></thead>';
		$xc .= '<tbody>';
			foreach($dates as $item) $xc .= '<tr><td>' . $item[0] . '</td><td>' . $item[1] . '</td></tr>';
		$xc .= '</tbody>';
	$xc .= '</table>';
	echo $xc;    
?>

<style type="text/css">
	h1, h2, h3	{ font-size:1em; padding:0; font-weight:normal; margin:0; }
	*			{	margin: 0; padding: 0;}
	body		{	line-height:1.1; background:#FFFFFF; font-family: verdana, helvetica, FreeSans, sans-serif; }
	h1 { background-color:#333; color:#FFF; padding:4px 0px 4px 0px; font-size:2em; }
	h2 { margin-top:5px; margin-bottom:5px; font-size:1.4em; }
	table { width:100%; }
	table thead tr { background-color:#333; color:#FFF; }
	table tbody tr:hover { background-color:#069; color:#FFF; }
	td { padding:12px; }
	.code_c { width:98%; height:40%; overflow:auto; padding:5px 0px 5px 5px; border:1px solid #333;  background-color:#F0F0F0; }	
	.result_c { width:98%; height:40%; overflow:auto; padding:5px 0px 0px 0px; }	
</style>	