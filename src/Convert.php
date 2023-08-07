<?php 

namespace Hakhant\Converter;

use Hakhant\Converter\Helpers\HasDate;
use Hakhant\Converter\Helpers\HasNumber;

class Convert
{
     use HasDate;
     use HasNumber;

     public function regions()
     {
          return config('convert.regions');
     }

     public function citizens()
     {
         return config('convert.citizens');
     }

     public function townships()
     {
         return config('convert.townships');
     }

     public function nrcNumber($number)
     {
         return $this->mm($number);
     }

     public function fullNrc($region, $citizen, $township, $number)
     {
         return $region .'/'.$township.'('.$citizen.')'.$this->mm($number); 
     }
}
