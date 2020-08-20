<?php

class StringUtils {
    public static function secondCase($string) {
            $string = strtolower($string);
            if (strlen($string) >= 2){   // Check if the string is longer or equal to 2 characters.
            $string[1] = strtoupper($string[1]);} // Second Character will be changed to upper.
            return $string;
    }
}

// echo StringUtils::secondCase("qq");

class Pajamas {
    private $owner, $fit, $color;
    function __construct(
        $owner = "pepe",
        $fit = "fine",
        $color = "blue")
    {
        $this->owner = StringUtils::secondCase($owner);
        $this->fit = $fit;
        $this->color = $color;
    }
    public function describe() {
        return "This pajama is from $this->owner, it fits $this->fit, its color is $this->color . ";
    }
    public function setFit($new_fit) {
        $this->fit = $new_fit;
        if ($this->fit != "tight") {
            if ($this->fit != "fine") {
            } if($this->fit != "loose") {
                echo "Wrong Fit \n";
            }
        } 
    }}

        class ButtonablePajamas extends Pajamas {
            private $button_state = "unbuttoned";
            public function describe() {
                return parent::describe() . "its $this->button_state ";
            }
            public function toggleButtons() {
                if ($this->button_state === "unbuttoned") {
                    $this->button_state = "buttoned";

                }
            }
        }

        class HatPajamas extends ButtonablePajamas {
            private $hat = "trucker cap";
            public function describe() {
                return parent::describe() . ",and has a $this->hat ";
            }
            public function toggleButtons() {
                if ($this->button_state === "unbuttoned") {
                    $this->button_state = "buttoned";

                }
            }
        }





$chicken_PJs = new Pajamas("CHICKEN","yellow","fine");
$moose = new ButtonablePajamas("moose","loose","red",);
$duck = new HatPajamas("moose","loose","red","Sport Cap");


$chicken_PJs->setFit("loose");
echo $chicken_PJs->describe();
echo "\n";
$moose->toggleButtons();
echo $moose->describe();
echo "\n";
echo $duck->describe();

?>