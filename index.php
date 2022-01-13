<?php

class plate{

    /*
     * adds stripes to plate
     * in: XXXX99 out: XX-XX-99
     * in: XX9999 out: XX-99-99
     * in: 99XX99 out: 99-XX-99
     * in: XXX99X out: XXX-99-X
     * in: XX999X out: XX-999-X
     * in: X99XXX out: X-99-XXX
     * in: X999XX out: X-999-XX
     * in: 9XXX99 out: 9-XXX-99
     * in: 99XXX9 out: 99-XXX-9 
     * X can be any charter from a to z
     * 9 can be any number from 0 to 9
     *
     * @param string $plate
     */

    public function addDashes(string $plate){

    }
}

$plate = new plate();
$string = "ABCD12";

echo 'Add dashes to make this plate complete: '.$string.'<br><br>';
echo 'Complete plate is: '.$plate->addDashes($string);

?>
