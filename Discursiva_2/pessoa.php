<?php
    class Pessoa{
        protected $nome;
        protected $sexo;
        protected $dataNascimento;
        protected $altura;
        protected $peso;
        
        // ------------------------------ getter e setter Nome ----------------------------------
        function getNome(){
            return $this->nome;
        }
        function setNome($sNome){
            $this->nome = $sNome;
        }
        // ------------------------------ getter e setter Sexo ----------------------------------        
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sSexo){
            $this->sexo = $sSexo;
        }
        // ------------------------------ getter e setter Data ----------------------------------
        function getDataNascimento(){
            return $this->dataNascimento;
        }
        function setDataNascimento($sDataNascimento){
            $this->dataNascimento = $sDataNascimento;
        }
        // ------------------------------ getter e setter Altura ----------------------------------
        function getAltura(){
            return $this->altura;
        }
        function setAltura($sAltura){
            $this->altura = $sAltura;
        }
        // ------------------------------ getter e setter Peso ----------------------------------
        function getPeso(){
            return $this->peso;
        }
        function setPeso($sPeso){
            $this->peso = $sPeso;
        }
    }
?>