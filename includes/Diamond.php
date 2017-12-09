<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

Class Diamond extends Shape {

    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    public function displayName()
    {
        echo $this->name;
    }

    public function draw()
    {
        for ($i = 1; $i < $this->sideLength; $i+=2) {
            $countPixel = ($this->sideLength-1) - $i / 2;
            echo $this->padding($countPixel);
            for($k = 0; $k < $i; $k++) {
                if($k == 0)
                    echo $this->pixel;

                if($k > 1 && $k < $this->sideLength)
                    echo $this->padding(1);    

                if($k == ($i-1) && $i != 1)
                    echo $this->pixel;    
            }
            $this->newLine();
        }

        
        for ($i = $this->sideLength-3; $i > 0; $i-=2) {
            $countPixel = ($this->sideLength-1) - $i / 2;
            echo $this->padding($countPixel);
            for($k = 0; $k < $i; $k++) {
                if($k == 0)
                    echo $this->pixel;

                if($k > 1 && $k < $this->sideLength)
                    echo $this->padding(1);    

                if($k == ($i-1) && $i != 1)
                    echo $this->pixel;    
            }
            $this->newLine();
        }


    }

}