<?php
$title = "Advocacia em Cornélio Procópio/PR";
$description = "Advocacia consultiva em Cornélio Procópio/PR — atendimento em todas as áreas do direito, com 5,0★ em 35 avaliações no Google. Fale agora pelo WhatsApp.";
$active = "";
include __DIR__ . "/partials/header.php";
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__layout">
      <div data-reveal>
        <span class="hero__rating"><span class="stars-inline">★★★★★</span> 5,0 · 35 avaliações no Google</span>
        <h1>Direito exige atenção.<br>Cada história, <em>também</em>.</h1>
        <p class="lede">Escuto antes de agir. Cada caso recebe análise cuidadosa e orientação clara sobre o que esperar em cada etapa — sem juridiquês, sem promessas vazias.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" target="_blank" rel="noopener"
             href="<?php echo waLink($whatsappNumber, 'Olá! Gostaria de agendar uma conversa com o Dr. Mauro.'); ?>">
            Agendar conversa no WhatsApp
          </a>
          <a class="btn btn--ghost" href="#areas">Ver áreas de atuação</a>
        </div>

        <p class="trust-bar">
          <strong><?php echo $oab; ?></strong> &middot;
          <strong>Cornélio Procópio/PR</strong> &middot;
          <strong>Atendimento em todas as áreas do direito</strong>
        </p>

        <div class="stat-row">
          <div class="stat"><span class="stat__value" data-count="5.0">0</span><span class="stat__label">Avaliação no Google</span></div>
          <div class="stat"><span class="stat__value" data-count="35">0</span><span class="stat__label">Avaliações verificadas</span></div>
          <div class="stat"><span class="stat__value" data-count="5">0</span><span class="stat__label">Áreas de atuação</span></div>
        </div>
      </div>

      <div class="hero__portrait" data-reveal>
        <?php
        $photoPath = null;
        foreach (["mauro-foto.webp", "mauro-foto.png", "mauro-foto.jpg", "mauro-foto.jpeg"] as $f) {
          if (file_exists(__DIR__ . "/assets/img/" . $f)) { $photoPath = "/assets/img/" . $f; break; }
        }
        ?>
        <?php if ($photoPath): ?>
          <img src="<?php echo $photoPath; ?>" alt="Dr. Mauro Jr Parpinelli, advogado em Cornélio Procópio/PR">
        <?php else: ?>
          <div class="hero__portrait-placeholder">Foto do Dr. Mauro em breve<br><small>(salvar em assets/img/mauro-foto.jpg)</small></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- ÁREAS DE ATUAÇÃO -->
<section id="areas" class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Áreas de Atuação</span>
      <h2>Onde posso ajudar</h2>
      <p class="lede">Atuação em todas as áreas do direito, com destaque para os casos mais comuns em Cornélio Procópio e região.</p>
    </div>

    <div class="areas-grid" style="margin-top:40px;">
      <?php
      $areas = [
        ["Cível", "Contratos, indenizações, cobranças e disputas patrimoniais, com estratégia clara desde a primeira conversa."],
        ["Família", "Divórcio, guarda, pensão alimentícia e inventário, conduzidos com sensibilidade para um momento delicado."],
        ["Imobiliário", "Compra, venda, locação e regularização de imóveis, com atenção a cada cláusula do contrato."],
        ["Consumidor", "Cobranças indevidas, produtos com defeito e negativações injustas — defesa dos seus direitos como consumidor."],
        ["Criminal", "Defesa técnica em todas as fases do processo penal, com acompanhamento próximo em cada audiência."],
      ];
      foreach ($areas as $i => $a) {
        [$nome, $desc] = $a;
        $msg = "Olá! Gostaria de falar sobre uma questão de Direito " . $nome . ".";
        echo '<div class="card" data-reveal>';
        echo '<div class="card__icon">' . substr($nome, 0, 1) . '</div>';
        echo '<h3>' . $nome . '</h3>';
        echo '<p>' . $desc . '</p>';
        echo '<a class="card__link" target="_blank" rel="noopener" href="' . waLink($whatsappNumber, $msg) . '">Falar sobre ' . $nome . ' →</a>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- SOBRE -->
<section id="sobre" class="section">
  <div class="container">
    <div class="about">
      <div data-reveal>
        <span class="eyebrow">Sobre o escritório</span>
        <h2>Abordagem consultiva, do início ao fim</h2>
        <p>Sou o Dr. Mauro Jr Parpinelli, advogado em Cornélio Procópio/PR. Acredito que grande parte da ansiedade de quem enfrenta um processo vem da falta de informação — por isso, cada atendimento começa com escuta atenta e termina com um caminho claro do que fazer a seguir.</p>
        <p>Atuo em todas as áreas do direito, sempre com a mesma lógica: entender a fundo a situação antes de propor qualquer estratégia.</p>
      </div>
      <div class="credentials" data-reveal>
        <div><strong><?php echo $oab; ?></strong><br>Inscrição ativa na Ordem dos Advogados do Brasil, Seccional Paraná.</div>
        <div><strong>Atuação generalista</strong><br>Atendimento em todas as áreas do direito, com foco em Cível, Família, Imobiliário, Consumidor e Criminal.</div>
        <div><strong>5,0 de avaliação no Google</strong><br>Nota máxima em 35 avaliações de clientes atendidos.</div>
      </div>
    </div>
  </div>
</section>

<!-- FLUXO DE ATENDIMENTO -->
<section class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Como funciona</span>
      <h2>Fluxo de atendimento</h2>
    </div>
    <div class="steps" style="margin-top:40px;">
      <div class="step" data-reveal>
        <span class="step__num">01</span>
        <h3>Contato inicial</h3>
        <p>Você chama pelo WhatsApp e conta, em poucas palavras, o que está acontecendo.</p>
      </div>
      <div class="step" data-reveal>
        <span class="step__num">02</span>
        <h3>Consulta</h3>
        <p>Analisamos o caso em detalhe, presencial ou remoto, e explico as opções reais disponíveis.</p>
      </div>
      <div class="step" data-reveal>
        <span class="step__num">03</span>
        <h3>Orientação e atuação</h3>
        <p>Definimos juntos a estratégia e eu conduzo o processo, mantendo você informado em cada etapa.</p>
      </div>
    </div>
  </div>
</section>

<!-- DEPOIMENTOS -->
<section id="depoimentos" class="section">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Depoimentos</span>
      <h2>O que dizem os clientes</h2>
    </div>

    <div class="rating-summary google-card" data-reveal>
      <span class="rating-summary__score">5,0</span>
      <div>
        <div class="google-card__stars">★★★★★</div>
        <p class="rating-summary__meta mt-0">35 avaliações —
          <a href="https://www.google.com/search?q=Advocacia+Mauro+Jr+Parpinelli" target="_blank" rel="noopener">ver no Google</a>
        </p>
      </div>
      <div style="margin-left:auto;"><?php echo googleLogo(32); ?></div>
    </div>

    <div class="grid grid--3">
      <?php
      $reviews = [
        "Ótimo profissional. Seriedade e muito comprometimento. Conhece muito. Recomendo!",
        "Excelente advogado, com trabalho honesto e preço justo.",
        "Está sempre um passo à frente do que o processo irá exigir.",
      ];
      foreach ($reviews as $r) {
        echo '<div class="google-card" data-reveal>';
        echo '<div class="google-card__header"><span class="google-card__stars">★★★★★</span>' . googleLogo(20) . '</div>';
        echo '<p class="google-card__text">"' . $r . '"</p>';
        echo '<div class="google-card__footer">' . googleLogo(14) . '<span>Avaliação verificada no <strong>Google</strong></span></div>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- JURIFÁCIL TEASER -->
<section class="section section--alt">
  <div class="container">
    <div class="jurifacil-teaser" data-reveal>
      <div style="max-width:560px;">
        <span class="badge">Novidade</span>
        <h2 style="color:#fff;">Um novo sistema de gestão jurídica está chegando</h2>
        <p><strong style="color:#fff;">Jurifácil</strong> é um sistema para ajudar advogados a organizar tarefas, documentos e minutas de forma simples e segura. Conheça o projeto.</p>
      </div>
      <a class="btn btn--primary" href="/jurifacil.php">Conhecer o Jurifácil →</a>
    </div>
  </div>
</section>

<!-- CONTATO -->
<section id="contato" class="section">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Contato</span>
      <h2>Vamos conversar</h2>
    </div>
    <div class="contact-grid" style="margin-top:32px;">
      <div data-reveal>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('phone'); ?></div>
          <div>
            <strong>WhatsApp / Telefone</strong><br>
            <a href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações.'); ?>" target="_blank" rel="noopener"><?php echo $phoneDisplay; ?></a>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('pin'); ?></div>
          <div>
            <strong>Endereço</strong><br>
            <?php echo $address; ?>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('scale'); ?></div>
          <div>
            <strong><?php echo $oab; ?></strong><br>
            Atendimento em todas as áreas do direito
          </div>
        </div>
        <a class="btn btn--primary" style="margin-top:10px;" target="_blank" rel="noopener"
           href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de agendar uma conversa.'); ?>">
          Falar agora no WhatsApp
        </a>
      </div>
      <div class="map-frame" data-reveal>
        <iframe
          src="https://www.google.com/maps?q=Rua+Colombo,+560,+Centro,+Cornélio+Procópio,+PR&output=embed"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          title="Mapa do escritório — Rua Colombo, 560, Centro, Cornélio Procópio/PR"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- BOTÃO FLUTUANTE WHATSAPP -->
<a class="whatsapp-float" target="_blank" rel="noopener" aria-label="Falar no WhatsApp"
   href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações.'); ?>">
  <svg viewBox="0 0 32 32" aria-hidden="true">
    <path d="M16.001 3C9.373 3 4 8.373 4 15c0 2.34.652 4.53 1.782 6.396L4 29l7.803-1.75A11.94 11.94 0 0 0 16.001 27C22.63 27 28 21.627 28 15S22.63 3 16.001 3Zm6.965 16.845c-.294.826-1.455 1.512-2.386 1.71-.633.13-1.46.235-4.24-.91-3.56-1.462-5.854-5.06-6.033-5.294-.171-.234-1.442-1.918-1.442-3.66 0-1.742.912-2.598 1.234-2.955.322-.357.703-.446.938-.446.234 0 .469.002.674.012.216.01.507-.082.793.605.294.703.998 2.445 1.086 2.622.088.176.147.383.03.617-.117.234-.176.38-.352.585-.176.205-.37.457-.528.615-.176.176-.36.366-.155.72.206.353.914 1.51 1.964 2.446 1.35 1.204 2.488 1.577 2.84 1.752.353.176.557.147.763-.088.206-.235.88-1.026 1.115-1.378.235-.353.47-.294.793-.176.323.117 2.055.97 2.408 1.146.352.176.586.264.674.41.088.147.088.85-.206 1.677Z"/>
  </svg>
</a>

<?php include __DIR__ . "/partials/footer.php"; ?>
