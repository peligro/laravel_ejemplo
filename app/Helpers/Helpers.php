<?php
namespace App\Helpers;

class Helpers {
    
    public static function formatea_fecha($fecha) 
    {
            $dia=substr($fecha,8,2);
          $mes=substr($fecha,5,2);
          $anio=substr($fecha,0,4);
        switch ($mes){
          case '01':
          $mes="Enero";
          break;
          case '02':
          $mes="Febrero";
          break;
          case '03':
          $mes="Marzo";
          break;
          case '04':
          $mes="Abril";
          break;
          case '05':
          $mes="Mayo";
          break;
          case '06':
          $mes="Junio";
          break;
          case '07':
          $mes="Julio";
          break;
          case '08':
          $mes="Agosto";
          break;
          case '09':
          $mes="Septiembre";
          break;
          case '10':
          $mes="Octubre";
          break;
          case '11':
          $mes="Noviembre";
          break;
          case '12':
          $mes="Diciembre";
          break;
        }
        return $dia." de ".$mes." de ".$anio; 
    }
    public static function validaRut($rut)
    {
        $punto = strpos($rut,'.');
                                if($punto==false)
                                {
                                    //die(' no tiene punto '.$rut);
                                    $rut=$rut;
                                }else
                                {
                                    //die(' si tiene punto '.$rut.' en la posición '.$punto);
                                    $explode=explode('.',$rut);
                                    //print_r($explode);
                                    $rut_explode='';
                                    for($j=0;$j<sizeof($explode);$j++)
                                    {
                                        $rut_explode.=$explode[$j];
                                        
                                    }
                                    $rut= $rut_explode;
                                }
                                $guion = strpos($rut,'-');
                                if($guion==false)
                                {
                                    //die(' no tiene guión '.$rut);
                                    //echo strlen($rut);
                                    //6585422-8
                                    $rut=substr($rut,0,strlen($rut)-1).'-'.substr($rut,strlen($rut)-1,1);
                                    
                                    //echo $rut;
                                }else
                                {
                                    //die(' si tiene guión '.$rut.' en la posición '.$guion);
                                    $rut=$rut;
                                }
        return $rut;
    }
    public static function get_youtube_id($url)
    {
        $start = strpos($url, "v=") + 2;
        return substr($url, $start, 11);
    }
    public static function encriptarSha256($pass)
    {
        $pass_mayuscula = strtoupper($pass); // convierte la pass en mayúscula
        $hasheada= hash('sha256', $pass_mayuscula,false); // codifica la clave a sha256 bit
        return $hasheada;
    }
}