<?php
    class Fecha {
        private $diasMeses = [
            0 => ["", ""], //No hace falta definirlo, se puede empezar por el indice 1
            1 => ["Enero", 31],
            2 => ["Febrero", 28],
            3 => ["Marzo", 31],
            4 => ["Abril", 30],
            5 => ["Mayo", 31],
            6 => ["Junio", 30],
            7 => ["Julio", 31],
            8 => ["Agosto", 31],
            9 => ["Septiembre", 30],
            10 => ["Octubre", 31],
            11 => ["Noviembre", 30],
            12 => ["Diciembre", 31]
        ];
        private $mesNumeroNombre;
        private function esBisiesto($anio) {
            if ($anio % 4 == 0 && ($anio % 100 != 0 || $anio % 400 == 0)) {
                $this->diasMeses[2][1] = 29;
                //echo $this->diasMeses[2][1];
            }
        }
    
        public function mostrarFecha($fecha) {
            $fechaArray = explode('/', $fecha); // Separa las partes de la fecha
            $dia = $fechaArray[0];
            $mes = $fechaArray[1];
            $anio = $fechaArray[2];
            //echo $dia.$mes.$anio;
            $this->esBisiesto($anio);
            if($mes < 10){
                $mesMenorDiez = str_split($mes);
                $mes = $mesMenorDiez[1];
                //echo $mes.'<br>';
            }
            if (isset($this->diasMeses[$mes])) {
                $nombreMes = $this->diasMeses[$mes][0];
                $diasMes = $this->diasMeses[$mes][1];
                
    
                $resultado = $dia.'/'.$nombreMes.'/'.$anio.'<br>'.$nombreMes.' tiene '.$diasMes.' días.';
            } else {
                $resultado = "El mes ingresado es inválido.<br>";
            }
            return $resultado;
        }
    }
?>