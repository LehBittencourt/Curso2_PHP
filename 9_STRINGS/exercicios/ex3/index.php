    - Transforme a string "este item está em promoção";<br>
    - Em "Este item está em PROMOÇÃO";<br>

<?php 

    $str = "este item está em ";
    $promo = "promoção";

    echo ucfirst($str) . strtoupper($promo);

?>