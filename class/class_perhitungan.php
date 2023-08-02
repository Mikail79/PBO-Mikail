<?php
class aritmatika{
        //property
        var $sisi;
        var $panjang;
        var $lebar;
        var $hasil;
        
    
        //method
        function luas_persegi($sisi){
            $hasil=$sisi*$sisi;
            return "Hasil Luas Persegi : ".$hasil."<br>";
        }
        
        function luas_persegi_panjang($sisi){
            $hasil=$panjang*$lebar;
            return "Luas Persegi panjang : ".$hasil."<br>";
        }
        
    }
    
  



?>