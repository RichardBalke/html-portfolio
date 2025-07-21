<?php

namespace Models;

class Contactgegevens
{
    private string $Naam;
    private string $Bedrijf;
    private string $Email;
    private int $Telefoon;

    public function __construct($Naam, $Bedrijf, $Email, $Telefoon)
    {
        $this->Naam = htmlspecialchars($Naam);
        $this->Bedrijf = htmlspecialchars($Bedrijf);
        $this->Email = htmlspecialchars($Email);
        $this->Telefoon = (int)$Telefoon;
    }
        
}

