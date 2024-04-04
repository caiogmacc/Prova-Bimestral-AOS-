<?php
// 1-
     function ola () { 

    echo"Hello World";
     }
     ola();

// 2-
    $NomeRecebido = "robloxdasilva";
    function mostrar($NomeRecebido) {
        
        echo "Hello {$NomeRecebido}";
    }


// 3-
    $nomesAlunos = array(
        "nome1", "nome2", "nome3", "nome4", "nome5"
    );

    echo $nomesAlunos[4];
// 4-
    $nums = array(1,2,3,-4,-5);
// 5-
function pos_neg($nums){
    for($i=0;count($nums) > $i;$i++){
        if($nums[$i] > 0){
            echo"O numero {$nums[$i]} é positivo\n";
        }else if ($nums[$i] < 0){
            echo"O numero {$nums[$i]} é negativo\n";
        } else {
            echo"0 ou errado\n";
        }
            
        }
}
    pos_neg($nums);
// 6-
    $nomes =array("cleber", "jorge", "murilo", "pedro");
    function caracteres($nomes){ 
            for($i=0;count($nomes)>$i;$i++){
            echo $nomes[$i] . " tem ".  strlen($nomes[$i]) . " letras\n";
        }
    }
        caracteres($nomes);
// 7-
        $aluno = array(
            "nome" => "pedro",
            "idade" => 6,
            "cursoTecnico" => "Astrofisica",
        );
        foreach ($aluno as $dado => $atributos) {
        echo $atributos . "\n";
        }
// 8-
        $pessoaIdade = array(
            "nome" => "pedro",
            "idade" => 6,
        );
        function maior18($pessoaIdade){
             
            if($pessoaIdade['idade'] >= 18){
                echo"{$pessoaIdade['nome']} tem {$pessoaIdade['idade']}, logo é maior de idade\n";
            }else if ($pessoaIdade['idade'] < 18){
                echo"{$pessoaIdade['nome']} tem {$pessoaIdade['idade']}, logo não é maior de idade\n";
            }else{
                echo"Erro\n";
            }

        }
        maior18($pessoaIdade);  
// 9-
        
         function alunocurso (){
            $alunos = [
                ['cursotec' => 'games',
                'nome' => 'joao',
             ],
                ['cursotec' => 'informatica',
                'nome' => 'judas',
             ],
                ['cursotec' => 'biotech',
                'nome' => 'pedro',
             ],
                ['cursotec' => 'informatica',
                'nome' => 'miguel',
             ],
     
              ];
            for($i=0;count($alunos);$i++){
                if($alunos['cursotec'] = 'informatica'){
                    echo $alunos['nome'] . " é de informatica\n";
                }
            }
         }
         alunocurso();
        
?>