<?php
require __DIR__ . "/posts-data.php";
$title = "Guarda compartilhada: como funciona na prática";
$description = "A guarda compartilhada é a regra no Brasil desde 2014, mas ainda gera muitas dúvidas sobre moradia, decisões e pensão. Veja o que considerar.";
$active = "blog";
include __DIR__ . "/../partials/header.php";
?>

<section class="section">
  <div class="container">
    <article class="post" data-reveal>
      <span class="post-tag">Família</span>
      <h1>Guarda compartilhada: como funciona na prática</h1>
      <p class="post-card__meta" style="margin-bottom:24px;">Publicado em <?php echo formatPostDate("2026-08-10"); ?></p>

      <p>Desde 2014, a legislação brasileira estabelece a guarda compartilhada como regra em casos de separação envolvendo filhos menores, mesmo quando não há consenso entre os pais. Apesar disso, ainda é comum a confusão entre "guarda compartilhada" e "guarda alternada" — e dúvidas sobre como a rotina da família se organiza na prática.</p>

      <h2>Guarda compartilhada não é o mesmo que moradia dividida</h2>
      <p>Esse é provavelmente o ponto de maior confusão. A guarda compartilhada diz respeito à <strong>responsabilidade sobre as decisões</strong> da vida do filho — educação, saúde, religião, entre outras — que passam a ser tomadas em conjunto pelos dois pais. Isso não significa, obrigatoriamente, que a criança precise morar metade do tempo com cada um.</p>
      <p>Na maioria dos casos, define-se uma <strong>residência principal</strong>, geralmente com o pai ou a mãe que tem melhores condições práticas no dia a dia (proximidade da escola, rotina de trabalho, etc.), enquanto o convívio com o outro genitor é organizado por meio de um regime de visitas ou tempo de convivência.</p>

      <h2>Como as decisões são tomadas</h2>
      <p>Na guarda compartilhada, decisões importantes sobre a vida do filho devem ser discutidas entre os pais. Isso inclui, por exemplo:</p>
      <ul>
        <li>Escolha ou mudança de escola;</li>
        <li>Tratamentos de saúde não emergenciais;</li>
        <li>Viagens ao exterior;</li>
        <li>Questões religiosas relevantes.</li>
      </ul>
      <p>Decisões do cotidiano (o que a criança vai comer, quando vai dormir, atividades do dia a dia) normalmente ficam a cargo de quem está com a criança naquele momento.</p>

      <h2>E a pensão alimentícia?</h2>
      <p>A guarda compartilhada não elimina, por si só, a obrigação de pagar pensão alimentícia. O valor e a necessidade de pensão dependem da situação financeira de cada um dos pais e de como as despesas da criança estão sendo efetivamente divididas — não apenas do tipo de guarda estabelecido.</p>

      <h2>O que fazer quando não há acordo entre os pais</h2>
      <p>Mesmo em casos de conflito, a lei prevê a guarda compartilhada como regra — cabendo ao juiz, quando necessário, definir os detalhes práticos (tempo de convívio, residência, calendário de feriados) de forma a atender ao melhor interesse da criança. Nessas situações, contar com orientação jurídica é essencial para que o processo seja conduzido com foco no que realmente importa: o bem-estar dos filhos.</p>

      <div class="disclaimer">
        Este conteúdo tem caráter informativo e não substitui a análise individual de um advogado sobre o seu caso específico. Questões de família envolvem particularidades que merecem atenção dedicada.
      </div>

      <div class="text-center" style="margin-top:40px;">
        <a class="btn btn--primary" target="_blank" rel="noopener"
           href="<?php echo waLink($whatsappNumber, 'Olá! Gostaria de orientação sobre guarda compartilhada.'); ?>">
          Falar sobre meu caso no WhatsApp
        </a>
      </div>
    </article>
  </div>
</section>

<?php include __DIR__ . "/../partials/footer.php"; ?>
