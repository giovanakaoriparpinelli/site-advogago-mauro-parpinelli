</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <h4>Mauro Jr Parpinelli — Advocacia</h4>
        <p>Advocacia consultiva em Cornélio Procópio/PR, com atendimento em todas as áreas do direito. <?php echo $oab; ?>.</p>
        <p><?php echo $address; ?></p>
      </div>
      <div>
        <h4>Navegação</h4>
        <ul class="footer-links">
          <li><a href="/#areas">Áreas de Atuação</a></li>
          <li><a href="/#sobre">Sobre</a></li>
          <li><a href="/#depoimentos">Depoimentos</a></li>
          <li><a href="/jurifacil.php">Jurifácil</a></li>
          <li><a href="/blog/">Blog</a></li>
        </ul>
      </div>
      <div>
        <h4>Contato</h4>
        <ul class="footer-links">
          <li><a href="tel:+<?php echo $whatsappNumber; ?>"><?php echo $phoneDisplay; ?></a></li>
          <li><a target="_blank" rel="noopener" href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações.'); ?>">WhatsApp</a></li>
          <li><a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <span id="current-year">2026</span> <?php echo $siteName; ?>. Todos os direitos reservados.</span>
      <span>Conteúdo informativo — não substitui consulta jurídica individual.</span>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
