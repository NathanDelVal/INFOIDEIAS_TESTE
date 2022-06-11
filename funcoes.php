<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        if($ano / 100 <= 1) {
            return 1;
        }
        elseif ($ano % 100 == 0) {
            return $ano / 100;
        } else {
            return ceil($ano/100);       
        }
    }    
        

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        for($counter = $numero -1; $counter >= 2; $counter--) {
            if($counter == 2 || $counter == 3 || $counter == 5 || $counter == 7) {
                return $counter;
            }
            elseif($counter % 2 != 0 && $counter % 3 != 0 && $counter % 5 != 0 && $counter % 7 != 0) {
                return $counter;
            }
        }
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        for($i = 0; $i < count($arr); $i++) {
            $arr[$i] = max($arr[$i]);
        }
        rsort($arr);
        return $arr[1];
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): bool {
        for($i = 0; $i < count($arr); $i++) {
            $temp_arr = $arr;
            unset($temp_arr[$i]);
            $sorted_arr = $temp_arr;
            sort($sorted_arr);
            if($temp_arr == $sorted_arr) { 
                for($j = 0; $j < count($temp_arr) - 1; $j++) {
                    if($temp_arr[$j] >= $temp_arr[$j + 1]) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }
        }
        return false;
    }
}