<?php 

Class Color
{
   public function convert($hexa)
   {
       if (preg_match('/^#[0-9A-Fa-f]{6}$/',$hexa)) {
           $hexa = str_replace('#','',$hexa);
           $tab = str_split($hexa, 2);
           $r = $this->hexToDec($tab[0]);  // ou utiliser directement la fonction php hexdec()
           $g = $this->hexToDec($tab[1]);
           $b = $this->hexToDec($tab[2]);
           return array($r, $g, $b);
       }
   }

   public function hexToDec($hexa)
   {
       $values = array (0,1,2,3,4,5,6,7,8,9, 'A','B','C','D','E','F');
       $values = array_flip($values);
       $hexa = strrev($hexa);
       $hexaTab = str_split($hexa);
       $result=$i=0;
       foreach ($hexaTab as $key=>$item) {
           $result += $values[$item]*pow(16,$key);
       }

       return $result;
   }
}
