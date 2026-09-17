<?php
$siteName = "Advocacia Mauro Jr Parpinelli";
$siteUrl  = "https://advmauro.com.br";
$phoneDisplay = "(43) 99636-4940";
$whatsappNumber = "5543996364940";
$address = "Rua Colombo, 560, Centro, Cornélio Procópio/PR";
$oab = "OAB/PR 84.908";

$pageTitle = isset($title) ? $title . " | " . $siteName : $siteName;
$pageDescription = isset($description) ? $description
  : "Advocacia consultiva em Cornélio Procópio/PR. Atendimento em todas as áreas do direito, com escuta atenta e orientação clara em cada etapa do processo.";
$activeNav = isset($active) ? $active : "";

function waLink($number, $text) {
  return "https://wa.me/" . $number . "?text=" . rawurlencode($text);
}

function icon($name) {
  $icons = [
    "scale" => '<path d="M12 3v3"/><path d="M5 8h14"/><path d="M7 8l-3.5 7a3.5 3.5 0 0 0 7 0L7 8Z"/><path d="M17 8l-3.5 7a3.5 3.5 0 0 0 7 0L17 8Z"/><circle cx="12" cy="4.5" r="1.5"/><path d="M6 21h12"/>',
    "pin"   => '<path d="M21 10c0 6-9 13-9 13s-9-7-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/>',
    "phone" => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z"/>',
  ];
  $path = $icons[$name] ?? "";
  return '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

function googleLogo($size = 18) {
  return '<svg class="google-logo" width="' . $size . '" height="' . $size . '" viewBox="0 0 48 48" aria-hidden="true">
    <path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/>
    <path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/>
    <path fill="#FBBC05" d="M11.69 28.18A13.96 13.96 0 0 1 10.9 24c0-1.45.25-2.86.69-4.18v-5.7H4.34A21.98 21.98 0 0 0 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"/>
    <path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/>
  </svg>';
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($siteUrl . $_SERVER['REQUEST_URI']); ?>">

<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:locale" content="pt_BR">

<link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
<meta name="theme-color" content="#090b10">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,500&family=Manrope:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Attorney",
  "name": "<?php echo $siteName; ?>",
  "url": "<?php echo $siteUrl; ?>",
  "telephone": "+<?php echo $whatsappNumber; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Rua Colombo, 560, Centro",
    "addressLocality": "Cornélio Procópio",
    "addressRegion": "PR",
    "addressCountry": "BR"
  },
  "areaServed": "Cornélio Procópio e região",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "35"
  }
}
</script>
</head>
<body>

<header class="site-header">
  <div class="container">
    <a href="/" class="brand">
      <span class="brand__mark" aria-hidden="true">M</span>
      <span class="brand__name">
        Mauro Jr Parpinelli
        <small>Advocacia · <?php echo $oab; ?></small>
      </span>
    </a>

    <nav class="nav">
      <button class="nav__toggle" aria-label="Abrir menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <div class="nav__links">
        <a href="/#areas" class="<?php echo $activeNav === 'areas' ? 'is-active' : ''; ?>">Áreas de Atuação</a>
        <a href="/#sobre" class="<?php echo $activeNav === 'sobre' ? 'is-active' : ''; ?>">Sobre</a>
        <a href="/#depoimentos" class="<?php echo $activeNav === 'depoimentos' ? 'is-active' : ''; ?>">Depoimentos</a>
        <a href="/jurifacil.php" class="<?php echo $activeNav === 'jurifacil' ? 'is-active' : ''; ?>">Jurifácil</a>
        <a href="/blog/" class="<?php echo $activeNav === 'blog' ? 'is-active' : ''; ?>">Blog</a>
        <a href="/#contato" class="<?php echo $activeNav === 'contato' ? 'is-active' : ''; ?>">Contato</a>
      </div>
      <a class="btn btn--primary btn--sm btn--header" target="_blank" rel="noopener"
         href="<?php echo waLink($whatsappNumber, 'Olá! Gostaria de agendar uma conversa com o Dr. Mauro.'); ?>">
        Agendar conversa
      </a>
    </nav>
  </div>
</header>

<main>
