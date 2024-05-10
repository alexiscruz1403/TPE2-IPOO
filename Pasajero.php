<?php

class Pasajero{
    private $nombre; //String
    private $nroAsiento; //Int
    private $nroTicket; //Int

    //Constructor
    public function __construct($unNombre,$unNroAsiento,$unNroTicket){
        $this->nombre=$unNombre;
        $this->nroAsiento=$unNroAsiento;
        $this->nroTicket=$unNroTicket;
    }

    //Observadores
    public function getNombre(){
        return $this->nombre;
    }
    public function getNroAsiento(){
        return $this->nroAsiento;
    }
    public function getNroTicket(){
        return $this->nroTicket;
    }
    public function __toString(){
        return "Nombre: ".$this->getNombre()."\n".
                "Numero de asiento: ".$this->getNroAsiento()."\n".
                "Numero de ticket: ".$this->getNroTicket()."\n";
    }

    //Modificadores
    public function setNombre($unNombre){
        $this->nombre=$unNombre;
    }
    public function setNroAiento($unNroAsiento){
        $this->nroAsiento=$unNroAsiento;
    }
    public function setNroTicket($unNroTicket){
        $this->nroTicket=$unNroTicket;
    }

    //Propios

    /**
     * Retorna el procentaje de incremento a aplicarse en una venta
     * @return int
     */
    public function darPorcentajeIncremento(){
        return 10;
    }

    /**
     * Verifica si la instancia es de tipo estandar
     * @return boolean
     */
    public function esEstandar(){
        return true;
    }

    /**
     * Verifica si la instancia es de tipo estandar
     * @return boolean
     */
    public function esVIP(){
        return false;
    }

    /**
     * Verifica si la instancia es de tipo estandar
     * @return boolean
     */
    public function esEspecial(){
        return false;
    }
}