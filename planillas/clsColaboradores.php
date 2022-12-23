<?php
 class Colaboradores{
    //Propiedades
    private $area;
    private $remuneracion;
    private $aniosServicio;
    private $sueldo;
    //Métodos
    //Método Constructor

    public function __construct($area,$aniosServicio){
      $this->area =$area;
      $this->aniosServicio=$aniosServicio;
    }

    public function calcularRemuneracionPorArea($area){
        switch($area){
         case 'marketing': 
         case 'MARKETING':{
            $this->remuneracion=3000;
            break;
         }
         case 'finanzas':
         case 'FINANZAS':{
            $this->remuneracion =4500;
            break;
         }
         case 'ventas':
         case  'VENTAS':{
            $this->remuneracion =2500;
            break;
         }
         case 'logistica':
         case 'LOGISTICA':{
            $this->remuneracion =2000;
            break;
         }
        }
        return $this->remuneracion;
    }
    
    public function calcularBonificacionPorAniosDeServicio($aniosServicio){
      if($aniosServicio<3){
         $this->bonificacion =$this->remuneracion*0.05;
      }else{
         if($aniosServicio>=3 && $aniosServicio<6){
            $this->bonificacion =$this->remuneracion*0.1;
         }else{
            $this->bonificacion =$this->remuneracion*0.15;
         }
      }
      return $this->bonificacion;
    }

    public function sueldoApagar(){
        $this->sueldo=$this->remuneracion+$this->bonificacion;
      return $this->sueldo;
    }

    //METODOS SET Y GET
    public function setArea($area){
      $this->area=$area;
    }

    public function getArea(){
      return $this->area;
    }

    public function setRemuneracion($remuneracion){
      $this->remuneracion=$remuneracion;
    }

    public function getRemuneracion(){
      return $this->remuneracion;
    }

    public function setAniosServicio($aniosServicio){
      $this->aniosServicio=$aniosServicio;
    }

    public function getAniosServicio(){
      return $this->aniosServicio;
    }
 }
?>