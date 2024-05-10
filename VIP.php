<?php

class VIP extends Pasajero{
    //Atributos
    private $nroViajeroFrecuente;
    private $cantidadMillas;

    //Constructor
    public function __construct($unNombre,$unNroAsiento,$unNroTicket,$unNroViajero,$unaCantidadMillas){
        parent::__construct($unNombre,$unNroAsiento,$unNroTicket);
        $this->nroViajeroFrecuente=$unNroViajero;
        $this->cantidadMillas=$unaCantidadMillas;
    }

    //Observadores
    public function getNroViajero(){
        return $this->nroViajeroFrecuente;
    }
    public function getCantidadMillas(){
        return $this->cantidadMillas;
    }
    public function __toString(){
        $cadena=parent::__toString();
        $cadena.="Numero de viajero frecuente: ".$this->getNroViajero()."\n".
                "Cantidad de millas acumuladas: ".$this->getCantidadMillas()."\n";
        return $cadena;
    }

    //Modificadores
    public function setNroViajero($unNroViajero){
        $this->nroViajeroFrecuente=$unNroViajero;
    }
    public function setCantidadMillas($unaCantidadMillas){
        $this->cantidadMillas=$unaCantidadMillas;
    }

    //Propios

    /**
     * Retorna el procentaje de incremento a aplicarse en una venta
     * @return int
     */
    public function darPorcentajeIncremento(){
        ($this->getCantidadMillas()>300) ? $porcentaje=30 : $porcentaje=35;
        return $porcentaje;
    }

    /**
     * Verifica si la instancia es de tipo estandar
     * @return boolean
     */
    public function esEstandar(){
        return false;
    }

    /**
     * Verifica si la instancia es de tipo estandar
     * @return boolean
     */
    public function esVIP(){
        return true;
    }
}