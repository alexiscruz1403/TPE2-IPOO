<?php

class NecesidadesEspeciales extends Pasajero{
    //Atributos
    private $requiereSillaRuedas; //Boolean
    private $requiereAsistencia; //Boolean
    private $requiereComidaEspecial; //Boolean

    //Constructor
    public function __construct($unNombre,$unNroAsiento,$unNroTicket,$necesitaSillaRuedas,$necesitaAsistencia,$necesitaComidaEspecial){
        parent::__construct($unNombre,$unNroAsiento,$unNroTicket);
        $this->requiereSillaRuedas=$necesitaSillaRuedas;
        $this->requiereAsistencia=$necesitaAsistencia;
        $this->requiereComidaEspecial=$necesitaComidaEspecial;
    }

    //Observadores
    public function getRequiereSillaRuedas(){
        return $this->requiereSillaRuedas;
    }
    public function getRequiereAsistencia(){
        return $this->requiereAsistencia;
    }
    public function getRequiereComidaEspecial(){
        return $this->requiereComidaEspecial;
    }
    public function __toString(){
        $cadena=parent::__toString();
        $cadena.="Requiere silla de ruedas: ";
        if($this->getRequiereSillaRuedas()){
            $cadena.="Si\n";
        }else{
            $cadena.="No\n";
        }
        $cadena.="Requiere asistencias: ";
        if($this->getRequiereAsistencia()){
            $cadena.="Si\n";
        }else{
            $cadena.="No\n";
        }
        $cadena.="Requiere comida especial: ";
        if($this->getRequiereComidaEspecial()){
            $cadena.="Si\n";
        }else{
            $cadena.="No\n";
        }
        return $cadena;
    }

    //Modificadores
    public function setRequiereSillaRuedas($unEstado){
        $this->requiereSillaRuedas=$unEstado;
    }
    public function setRequiereAsistencia($unEstado){
        $this->requiereAsistencia=$unEstado;
    }
    public function setRequiereComidarequiereComidaEspecial($unEstado){
        $this->requiereComidaEspecial=$unEstado;
    }

    //Propios

    /**
     * Retorna el procentaje de incremento a aplicarse en una venta
     * @return int
     */
    public function darPorcentajeIncremento(){
        $cantidad=0;
        $porcentaje=15;
        if($this->getRequiereSillaRuedas()){
            $cantidad++;
        }
        if($this->getRequiereAsistencia()){
            $cantidad++;
        }
        if($this->getRequiereComidaEspecial()){
            $cantidad++;
        }
        if($cantidad!=1){
            $porcentaje=30;
        }
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
    public function esEspecial(){
        return true;
    }
}