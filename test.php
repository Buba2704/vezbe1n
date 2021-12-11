<?php
$ime = "Ljubica";
$odgovor = "Logovani korisnik je $ime"; // Mora preko dvostrukih navodnika,  kod jednostrukih ime se ne bi videlo kao Ljubica
$odgovor2 = 'Logovani korisnik je ' .$ime; // Ovo je jedino ispravno za jednostruke navodnike
echo $odgovor2;


?>