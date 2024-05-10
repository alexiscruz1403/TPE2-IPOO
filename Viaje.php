<?php

class Viaje{
    //Atributos
    private $costoVaije;  //Float
    private $totalAbonado;  //Float
    private $colObjPasajero;  //Coleccion Objeto Pasajero
    private $cantidadMaximaPasajeros;  //Int

    //Constructor
    public function __construct($elCosto,$elTotalAbonado,$unaCantidadMaxima,$colPasajeros){
        $this->costoVaije=$elCosto;
        $this->totalAbonado=$elTotalAbonado;
        $this->cantidadMaximaPasajeros=$unaCantidadMaxima;
        $this->colObjPasajero=$colPasajeros;
    }

    //Observadores
    public function getCostoViaje(){
        return $this->costoVaije;
    }
    public function getTotalAbonado(){
        return $this->totalAbonado;
    }
    public function getColeccionPasajeros(){
        return $this->colObjPasajero;
    }
    public function getCantidadMaximaPasajeros(){
        return $this->cantidadMaximaPasajeros;
    }
    public function __toString(){
        return "Costo del viaje: $".$this->getCostoViaje()."\n".
                "Total abonado: $".$this->getTotalAbonado()."\n".
                "Cantidad maxima de pasajeros: ".$this->getCantidadMaximaPasajeros()."\n".
                "Cantidad actual de pasajeros: ".count($this->getColeccionPasajeros())."\n";
    }

    //Modificadores
    public function setCostoViaje($elCosto){
        $this->costoVaije=$elCosto;
    }
    public function setTotalAbonado($elTotalAbonado){
        $this->totalAbonado=$elTotalAbonado;
    }
    public function setColeccionPasajeros($colPasajeros){
        $this->colObjPasajero=$colPasajeros;
    }
    public function setCantidadMaximaPasajeros($unaCantidadMaxima){
        $this->cantidadMaximaPasajeros=$unaCantidadMaxima;
    }

    //Propios

    /**
     * Verifica si hay espacio para mas pasajeros en la coleccion
     * Devuelve true si hay espacio o false en caso contrario
     * @return boolean
     */
    public function hayPasajesDisponibles(){
        $cantidadActual=count($this->getColeccionPasajeros());
        $cantidadMaxima=$this->getCantidadMaximaPasajeros();
        return $cantidadActual<$cantidadMaxima;
    }

    /**
     * Incorpora un pasajero a la coleccion de pasajeros
     * Actualiza el total abonado
     * Retorna el costo que debe abonar el pasajero
     * Antes verifica que haya espacio para un pasajero en la coleccion
     * Si no hay espacio disponible devuelve -1
     * @param Pasajero $unPasajero
     * @return float
     */
    public function venderPasaje($unPasajero){
        $precioFinal=-1;
        if($this->hayPasajesDisponibles()){
            $colPasajeros=$this->getColeccionPasajeros();
            $colPasajeros[]=$unPasajero;
            $this->setColeccionPasajeros($colPasajeros);
            $costoVaije=$this->getCostoViaje();
            $incremento=$unPasajero->darPorcentajeIncremento();
            $adicional=$costoVaije*($incremento/100);
            $precioFinal=$costoVaije+$adicional;
            $this->setTotalAbonado($this->getTotalAbonado()+$precioFinal);
        }
        return $precioFinal;
    }

}