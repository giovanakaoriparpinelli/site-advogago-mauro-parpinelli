<?php
require __DIR__ . "/posts-data.php";
$title = "Perdi um prazo processual: e agora?";
$description = "Perder um prazo no processo não significa necessariamente perder a causa. Entenda os institutos que podem reverter ou amenizar a situação.";
$active = "blog";
include __DIR__ . "/../partials/header.php";
?>

<section class="section">
  <div class="container">
    <article class="post" data-reveal>
      <span class="post-tag">Cível</span>
      <h1>Perdi um prazo processual: e agora?</h1>
      <p class="post-card__meta" style="margin-bottom:24px;">Publicado em <?php echo formatPostDate("2026-08-20"); ?></p>

      <p>Receber a notícia de que um prazo processual passou é, sem dúvida, um dos momentos de maior aflição para quem está envolvido em uma ação judicial. A primeira reação costuma ser de pânico — mas, na prática, perder um prazo nem sempre significa perder a causa. Existem instrumentos jurídicos criados justamente para lidar com esse tipo de situação.</p>

      <h2>Por que os prazos são tão rígidos?</h2>
      <p>O processo judicial funciona por etapas, e cada uma delas tem um prazo específico para que as partes se manifestem — contestar, recorrer, apresentar provas, entre outros. Essa rigidez existe para garantir previsibilidade e igualdade entre as partes: se os prazos pudessem ser ignorados livremente, o processo se arrastaria indefinidamente.</p>

      <h2>O que pode acontecer quando um prazo é perdido</h2>
      <p>As consequências variam de acordo com o tipo de prazo e a fase processual. Em linhas gerais, alguns cenários possíveis são:</p>
      <ul>
        <li><strong>Preclusão:</strong> a parte perde o direito de praticar aquele ato específico — mas isso não encerra necessariamente o processo inteiro.</li>
        <li><strong>Revelia:</strong> em alguns casos, a ausência de resposta dentro do prazo (como na contestação) pode levar à presunção de veracidade dos fatos alegados pela outra parte.</li>
        <li><strong>Perda de recurso:</strong> se o prazo perdido for o de um recurso, a decisão anterior pode se tornar definitiva.</li>
      </ul>

      <h2>Existe alguma saída?</h2>
      <p>Sim, em diversas situações. Alguns caminhos possíveis — que devem ser avaliados caso a caso por um advogado — incluem:</p>
      <ul>
        <li><strong>Justa causa:</strong> a lei processual permite a prática do ato fora do prazo quando há motivo legítimo que impediu a parte de agir a tempo (um problema de saúde grave, por exemplo).</li>
        <li><strong>Nulidade por falha na intimação:</strong> se a parte não foi devidamente comunicada sobre o prazo — por erro no endereço, por exemplo — isso pode ser questionado.</li>
        <li><strong>Instrumentos recursais específicos:</strong> dependendo da fase, ainda pode ser possível utilizar outros mecanismos processuais para reverter ou minimizar o efeito da perda do prazo.</li>
      </ul>

      <h2>O que fazer imediatamente</h2>
      <p>Se você identificou que um prazo passou, o mais importante é agir rápido. Reúna toda a documentação do processo, anote a data em que tomou conhecimento da situação e procure orientação jurídica o quanto antes — quanto mais cedo o caso for analisado, maiores as chances de encontrar uma solução viável.</p>

      <div class="disclaimer">
        Este conteúdo tem caráter informativo e não substitui a análise individual de um advogado sobre o seu caso específico. Cada processo tem particularidades que podem mudar completamente a estratégia recomendada.
      </div>

      <div class="text-center" style="margin-top:40px;">
        <a class="btn btn--primary" target="_blank" rel="noopener"
           href="<?php echo waLink($whatsappNumber, 'Olá! Perdi um prazo processual e gostaria de orientação.'); ?>">
          Falar sobre meu caso no WhatsApp
        </a>
      </div>
    </article>
  </div>
</section>

<?php include __DIR__ . "/../partials/footer.php"; ?>
