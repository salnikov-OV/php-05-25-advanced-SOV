<?php

class Color {
    public function __construct(
        public int $red,
        public int $green,
        public int $blue
    )
    {
        if ($red < 0 || $red > 256) {
            $this->red = $red;
        }
        if ($green < 0 || $green > 256) {
            $this->green = $green;
        }
        if ($blue < 0 || $blue > 256) {
            $this->blue = $blue;
        }
        else echo "Значення не в діапозоні 0-255" . "<br>";
    }
//    public function setColor(string $color, int $q)
//    {
//
//        if ($color == 'green' && ($q > 0 && $q <256)) {
//            $this->green = $color;
//        }
//        if ($color == 'blue' && ($q > 0 && $q <256)) {
//            $this->blue = $color;
//        }
//        else echo "Немає такого кольору, або значення не в діапозоні 0-255";
//
//    }
    public function getColor()
    {
        echo $this->red . "<br>";
        echo $this->green . "<br>";
        echo $this->blue . "<br>";
    }
}



$color = new Color(2540, 250, 250);
//$mixedColor = $color->mix(new Color(100, 100, 100));
//$mixedColor->getRed(); // 175
//$mixedColor->getGreen(); // 175
//$mixedColor->getBlue(); // 175

echo $color->getColor();
