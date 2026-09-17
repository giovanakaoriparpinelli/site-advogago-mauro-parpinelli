<?php
require __DIR__ . "/posts-data.php";
$title = "5 cláusulas que todo contrato de aluguel deveria ter";
$description = "Um contrato de locação malfeito custa caro para as duas partes. Veja as cláusulas que evitam a maioria dos conflitos entre locador e locatário.";
$active = "blog";
include __DIR__ . "/../partials/header.php";
?>

<section class="section">
  <div class="container">
    <article class="post" data-reveal>
      <span class="post-tag">Imobiliário</span>
      <h1>5 cláusulas que todo contrato de aluguel deveria ter</h1>
      <p class="post-card__meta" style="margin-bottom:24px;">Publicado em <?php echo formatPostDate("2026-07-28"); ?></p>

      <p>Muitos conflitos entre proprietários e inquilinos poderiam ser evitados com um contrato de locação bem redigido. É comum ver contratos genéricos, baixados prontos da internet, que deixam de fora pontos que fazem toda a diferença quando um problema aparece. Veja cinco cláusulas que merecem atenção redobrada.</p>

      <h2>1. Responsabilidade por reparos e benfeitorias</h2>
      <p>O contrato deve deixar claro quem arca com o quê: reparos estruturais costumam ser responsabilidade do proprietário, enquanto o desgaste do uso cotidiano geralmente cabe ao inquilino. Sem essa definição clara, é comum que cada parte entenda que a responsabilidade é da outra.</p>

      <h2>2. Garantia locatícia</h2>
      <p>A lei do inquilinato prevê diferentes modalidades de garantia (fiador, caução, seguro-fiança, entre outras) — mas apenas uma pode ser exigida por contrato. É importante que a cláusula de garantia esteja formalizada corretamente, incluindo os dados do fiador (quando for o caso) e as condições para sua liberação ao final do contrato.</p>

      <h2>3. Multa por rescisão antecipada</h2>
      <p>Contratos de locação normalmente têm prazo determinado. Se o inquilino precisar sair antes do fim desse prazo, a multa costuma ser proporcional ao tempo restante — mas essa proporcionalidade precisa estar expressa no contrato para evitar cobranças abusivas ou, no outro extremo, a ausência total de previsão.</p>

      <h2>4. Reajuste e índice aplicável</h2>
      <p>O contrato deve especificar qual índice será usado para reajustar o valor do aluguel (como o IGP-M ou o IPCA) e a periodicidade desse reajuste (em geral, anual). A ausência dessa cláusula gera insegurança para as duas partes sobre quando e como o valor pode mudar.</p>

      <h2>5. Condições de entrega e vistoria do imóvel</h2>
      <p>Um laudo de vistoria detalhado, feito na entrada e assinado por ambas as partes, é a principal prova em caso de discussão sobre danos ao final do contrato. Vale registrar o estado do imóvel com fotos e descrições específicas, evitando termos genéricos como "bom estado".</p>

      <h2>Por que vale a pena revisar antes de assinar</h2>
      <p>Um contrato revisado por um advogado antes da assinatura custa muito menos do que resolver um conflito depois que o problema já apareceu — seja você o proprietário ou o inquilino. Pequenos ajustes de texto podem evitar meses de disputa judicial.</p>

      <div class="disclaimer">
        Este conteúdo tem caráter informativo e não substitui a análise individual de um advogado sobre o seu contrato específico. Cada locação tem particularidades que merecem revisão dedicada.
      </div>

      <div class="text-center" style="margin-top:40px;">
        <a class="btn btn--primary" target="_blank" rel="noopener"
           href="<?php echo waLink($whatsappNumber, 'Olá! Gostaria de ajuda com um contrato de aluguel.'); ?>">
          Falar sobre meu contrato no WhatsApp
        </a>
      </div>
    </article>
  </div>
</section>

<?php include __DIR__ . "/../partials/footer.php"; ?>
