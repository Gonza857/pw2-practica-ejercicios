<?php

class Saludar
{
    private string $nombre;
    private string $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    private function saberEtapa(int $hora): string
    {
        return match (true) {
            $hora >= 5 && $hora < 13 => "buenos días",
            $hora >= 13 && $hora < 21  => "buenas tardes",
            ($hora >= 21 || $hora <= 24) || $hora < 5 => "buenas noches",
            default => "no existe esa hora"
        };
    }

    public function saludarFormal(int $horario)
    {
        // var_dump($horario);  
        return $this->saberEtapa($horario) . " " . $this->nombre . " " . $this->apellido;
    }

    public function saludarInformal(int $horario)
    {
        // var_dump($horario);  
        return "¡Hola " .  $this->nombre . "! Que tengas " . $this->saberEtapa($horario) . ".";
    }
}
