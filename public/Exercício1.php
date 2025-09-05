
<?php
$notas_aluno = [
   "Matemática" => 8.5,
   "Português" => 5.0,
   "História" => 7.3,
   "Geografia" => 6.0,
   "Inglês" => 4.5
];
foreach ($notas_aluno as $materia => $nota) {
   echo "Matéria: $materia - Nota: $nota - ";
   if ($nota >= 6.0) {
      echo "Aprovado";
   } else {
      echo "Reprovado";
   }
   echo "<br>";
}
?>