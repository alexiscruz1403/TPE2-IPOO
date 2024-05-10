<?php
include_once 'Pasajero.php';
include_once 'VIP.php';
include_once 'NecesidadesEspeciales.php';
include_once 'Viaje.php';

//Main
$pasajero1=new Pasajero("Alexis Cruz",1,1);
$pasajero2=new VIP("Juan Perez",2,2,13,299);
$pasajero3=new NecesidadesEspeciales("Pedro Sanchez",3,3,true,true,true);
$pasajero4=new VIP("Pepe Martinez",4,4,14,301);
$pasajero5=new NecesidadesEspeciales("Pedro Sanchez",5,5,false,true,true);
$pasajero6=new NecesidadesEspeciales("Pedro Sanchez",6,6,false,false,true);
$unViaje=new Viaje(1000,0,5,array());
echo $unViaje;
$monto=$unViaje->venderPasaje($pasajero1);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible";
}
$monto=$unViaje->venderPasaje($pasajero2);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible\n";
}
$monto=$unViaje->venderPasaje($pasajero3);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible\n";
}
$monto=$unViaje->venderPasaje($pasajero4);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible\n";
}
$monto=$unViaje->venderPasaje($pasajero5);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible\n";
}
$monto=$unViaje->venderPasaje($pasajero6);
if($monto!=-1){
    echo "Total a pagar: $".$monto."\n";
}else{
    echo "No hay espacio disponible\n";
}
echo $unViaje;