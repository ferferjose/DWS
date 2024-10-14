<?php
    Class Fecha{
        private array $fechas;
        private array $fechaSpliteada;
        private int $anio;
        private int $mes;
        private int $dia;

        function __construct(){
            $this->fechas = array(
                1 => array(
                    "mes" => "Enero",
                    "dias" => 31
                ),
                2 => array(
                    "mes" => "Febrero",
                    "dias" => 28
                ),
                3 => array(
                    "mes" => "Marzo",
                    "dias" => 31
                ),
                4 => array(
                    "mes" => "Abril",
                    "dias" => 30
                ),
                5 => array(
                    "mes" => "Mayo",
                    "dias" => 31
                ),
                6 => array(
                    "mes" => "Junio",
                    "dias" => 30
                ),
                7 => array(
                    "mes" => "Julio",
                    "dias" => 31
                ),
                8 => array(
                    "mes" => "Agosto",
                    "dias" => 31
                ),
                9 => array(
                    "mes" => "Septiembre",
                    "dias" => 30
                ),
                10 => array(
                    "mes" => "Octubre",
                    "dias" => 31
                ),
                11 => array(
                    "mes" => "Noviembre",
                    "dias" => 30
                ),
                12 => array(
                    "mes" => "Diciembre",
                    "dias" => 31
                )
            );
        }
        

        //Te cambia automaticamente el dia de febrero si es bisiesto y returnea true o false de si es bisiesto o no
        function esBisiesto(){
            if (($this->fechaSpliteada[0] % 4 == 0 && $this->fechaSpliteada[0] % 100 != 0) || $this->fechaSpliteada[0] % 400 == 0){
                $this->fechas[2]["dias"] = 29;
                return true;
            }
            return false;
        }
        function escanearFecha($fechaUsuario){
            $this->fechaSpliteada=explode('-', $fechaUsuario);
            $this->anio= (int) $this->fechaSpliteada[0];
            $this->mes= (int) $this->fechaSpliteada[1];
            $this->dia= (int) $this->fechaSpliteada[2];
        }

        function devolverFecha(){
            return $this->getFechaSpliteadaI(2).'/'.$this->getFechasI($this->getMes()).'/'.$this->getFechaSpliteadaI(0);
        }

        ////////////////////////////////////////////////// GETTERS AND SETTER
        public function getFechaSpliteada()
        {
            return $this->fechaSpliteada;
        }
        public function getFechaSpliteadaI($i)
        {
            return $this->fechaSpliteada[$i];
        }

        public function setFechaSpliteada($fechaSpliteada)
        {
                $this->fechaSpliteada = $fechaSpliteada;
                return $this;
        } 
        public function getFechas()
        {
                return $this->fechas;
        }
        public function getFechasI($i)
        {       
                return $this->fechas[$i]['mes'];
        }
        public function getFechasID($i)
        {       
                return $this->fechas[$i]['dias'];
        }
        public function setFechas($fechas)
        {
                $this->fechas = $fechas;

                return $this;
        }
        public function getMes()
        {
                return $this->mes;
        }
        public function setMes($mes)
        {
                $this->mes = $mes;

                return $this;
        }
    }
    
    
?>