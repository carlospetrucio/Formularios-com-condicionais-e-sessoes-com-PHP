<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$catetorias  = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


print_r($categorias);
if($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
     { 
        if($categorias[$i] == 'infantil')
        echo "<h1>O nadador " .$nome. " compete na categoria " .$categorias[$i]. "</h1>";
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    { 
        if($categorias[$i] == 'adolescente')
        echo "<h1>O nadador " .$nome. " compete na categoria " .$categorias[$i]. "</h1>";
    }
}
else {
    for ($i = 0; $i <= count($categorias); $i++)
    { 
        if($categorias[$i] == 'adulto')
        echo "<h1>O nadador " .$nome. " compete na categoria " .$categorias[$i]. "</h1>";
    }
}