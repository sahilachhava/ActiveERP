<?php

function amt($number){
   $decimal = round($number - ($no = floor($number)), 2) * 100; 
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');

   while( $i < $digits_length ) 
    {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) 
	{
            $plural = (($counter = count($str)) && $number > 9) ? '' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } 
	else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    if($decimal==11)
    {
	$paise = ($decimal) ? " and " . $words[11]  . ' Paise' : '';
    }
     elseif($decimal==12)
    {
	$paise = ($decimal) ? " and " . $words[12]  . ' Paise' : '';
    }
    elseif($decimal==13)
    {
	$paise = ($decimal) ? " and " . $words[13]  . ' Paise' : '';
    }
    elseif($decimal==14)
    {
	$paise = ($decimal) ? " and " . $words[14]  . ' Paise' : '';
    }
    elseif($decimal==15)
    {
	$paise = ($decimal) ? " and " . $words[15]  . ' Paise' : '';
    }
    elseif($decimal==16)
    {
	$paise = ($decimal) ? " and " . $words[16]  . ' Paise' : '';
    }
    elseif($decimal==17)
    {
	$paise = ($decimal) ? " and " . $words[17]  . ' Paise' : '';
    }
    elseif($decimal==18)
    {
	$paise = ($decimal) ? " and " . $words[18]  . ' Paise' : '';
    }
    elseif($decimal==19)
    {
	$paise = ($decimal) ? " and " . $words[19]  . ' Paise' : '';
    }
    else
    {
	$paise = ($decimal) ? " and " . ($words[floor($decimal / 10) * 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    }
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
 }
?>