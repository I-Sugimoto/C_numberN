<?php
$s = "hogehoge";
$n = 7;
$m =strlen($s); 


    if (($n > $m) || ($n <= 0)) 
    {
    	echo $m. "以下の正の整数を入力してください。";
    }
	else
	{	
		//文字列の確認。
		$a = substr($s, $n - 1, 1);
		//結果の表示。
		echo $a;
	}	