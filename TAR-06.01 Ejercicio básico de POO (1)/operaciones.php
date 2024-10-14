<?php
    Class Operaciones{
        private int $n1;
        private int $n2;
        //Los resultados no los guardo porque son simples calculos matemáticos
        function __construct($num1, $num2){ //Solo me permite un constructor por lo que lo hago parametrizado. $num1 siempre será el mayor
            if ($num1>$num2) {
                $this->n1=$num1;
                $this->n2=$num2;
            }else{
                $this->n1=$num2;
                $this->n2=$num1;
            }
            
        }
        ////////Metodos
        function tipoOperacion($i){
            switch ($i) { //Switch que depende de lo que haya elegido en el select el usuario pues hara uno de los métodos
                case 1:
                    return $this->suma();
                    break;
                
                case 2:
                    return $this->resta();
                    break;
                case 3:
                    return $this->multiplicacion();
                    break;
                
                case 4:
                    return $this->division();
                    break;
            }
        }
        function suma(){
            return ($this->n1)+($this->n2); //Esto muestra directamente el resultado.
        }
        function resta(){
            return ($this->n1)-($this->n2);
        }
        function multiplicacion(){
            return ($this->n1)*($this->n2);
        }
        function division(){
            return ($this->n1)/($this->n2);
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
