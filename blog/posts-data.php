<?php
$posts = [
  [
    "slug"    => "prazo-processual-perdido",
    "title"   => "Perdi um prazo processual: e agora?",
    "tag"     => "Cível",
    "date"    => "2026-08-20",
    "excerpt" => "Perder um prazo no processo não significa necessariamente perder a causa. Entenda os institutos que podem reverter — ou amenizar — a situação.",
  ],
  [
    "slug"    => "guarda-compartilhada-como-funciona",
    "title"   => "Guarda compartilhada: como funciona na prática",
    "tag"     => "Família",
    "date"    => "2026-08-10",
    "excerpt" => "A guarda compartilhada é a regra no Brasil desde 2014, mas ainda gera muitas dúvidas sobre moradia, decisões e pensão. Veja o que considerar.",
  ],
  [
    "slug"    => "clausulas-essenciais-contrato-aluguel",
    "title"   => "5 cláusulas que todo contrato de aluguel deveria ter",
    "tag"     => "Imobiliário",
    "date"    => "2026-07-28",
    "excerpt" => "Um contrato de locação malfeito custa caro para as duas partes. Veja as cláusulas que evitam a maioria dos conflitos entre locador e locatário.",
  ],
];

function formatPostDate($iso) {
  $meses = [1=>"jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez"];
  $t = strtotime($iso);
  return date("d", $t) . " de " . $meses[(int)date("n", $t)] . ". de " . date("Y", $t);
}
