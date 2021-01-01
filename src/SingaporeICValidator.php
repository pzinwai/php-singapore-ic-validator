<?php 

namespace pzinwai\SingaporeICValidator;

class SingaporeICValidator
{
    public static function validateNRIC($str = "")
    {
        if (strlen($str) != 9)
        return false;

        $str = strtoupper($str);

        $icArray = array();
        for ($i = 0; $i < 9; $i++) {
          $icArray[$i] = $str[$i];
        }

        $icArray[1] = (int)($icArray[1]) * 2;
        $icArray[2] = (int)($icArray[2]) * 7;
        $icArray[3] = (int)($icArray[3]) * 6;
        $icArray[4] = (int)($icArray[4]) * 5;
        $icArray[5] = (int)($icArray[5]) * 4;
        $icArray[6] = (int)($icArray[6]) * 3;
        $icArray[7] = (int)($icArray[7]) * 2;
        
        $weight = 0;
        for ($i = 1; $i < 8; $i++) {
          $weight += $icArray[$i];
        }

        $offset = ($icArray[0] == 'T' || $icArray[0] == 'G') ? 4 : 0;
        $temp = ($offset + $weight) % 11;

        $st = ['J', 'Z', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];
        $fg = ['X', 'W', 'U', 'T', 'R', 'Q', 'P', 'N', 'M', 'L', 'K'];

        $theAlpha = '';
        if ($icArray[0] === 'S' || $icArray[0] === 'T') { $theAlpha = $st[$temp]; }
        else if ($icArray[0] === 'F' || $icArray[0] === 'G') { $theAlpha = $fg[$temp]; }

        return ($icArray[8] === $theAlpha);
    }
}