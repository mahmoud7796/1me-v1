<?php

namespace App\Helper;

use phpDocumentor\Reflection\Types\Mixed_;

class Getname {
    public $fName;
    public $mName;
    public $lName;
    public $fullName;

    public function fullName($name)
    {
          $pieces = explode(" ", $name);
        $threeName = array_slice($pieces, 0, 3);
        if (count($threeName) === 1) {
            $this->fName = $threeName[0];
        } elseif (count($threeName) === 2) {
            $this->fName = $threeName[0];
            $this->mName = $threeName[1];
        } elseif (count($threeName) === 3) {
            $this->fName = $threeName[0];
            $this->mName = $threeName[1];
            $this->lName = $threeName[2];
        } else {
            echo 'error';
        }
    }

        public function getFullName() : string
        {
            $fullName = $this->fName.' '.$this->mName.' '.$this->lName;
            $this->fullName = $fullName;
            return $this->fullName;
        }

}



