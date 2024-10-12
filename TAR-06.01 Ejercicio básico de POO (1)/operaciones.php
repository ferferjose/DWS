<?php
    Class Operaciones{
        private int $n1;
        private int $n2;
        //Los resultados no los guardo porque son simples calculos matemáticos
        function __construct($num1, $num2){ //Solo me permite un constructor por lo que lo hago parametrizado. $num1 siempre será el mayor
            $this->n1=$num1;
            $this->n2=$num2;
        }
        ////////Metodos
        function tipoOperacion($i){
            switch ($i) { //Switch que depende de lo que haya elegido en el select el usuario pues hara uno de los métodos
                case 1:
                    $this->suma();
                    break;
                
                case 2:
                    $this->resta();
                    break;
                case 3:
                    $this->multiplicacion();
                    break;
                
                case 4:
                    $this->division();
                    break;
            }
        }
        function suma(){
            echo '<p>'.($this->n1)+($this->n2).'</p>'; //Esto muestra directamente el resultado.
        }
        function resta(){
            echo '<p>'.$this->n1-$this->n2.'</p>';
        }
        function multiplicacion(){
            echo '<p>'.$this->n1*$this->n2.'</p>';
        }
        function division(){
            echo '<p>'.$this->n1/$this->n2.'</p>';
        }
        

        ///////////////// Getters and setters
        public function getN1()
        {
                return $this->n1;
        } 
        public function setN1($n1)
        {
                $this->n1 = $n1;

                return $this;
        }
        public function getN2()
        {
                return $this->n2;
        }
        public function setN2($n2)
        {
                $this->n2 = $n2;

                return $this;
        }
    }
?>
