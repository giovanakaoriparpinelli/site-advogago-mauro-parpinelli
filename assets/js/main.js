document.addEventListener("DOMContentLoaded", function () {
  var toggle = document.querySelector(".nav__toggle");
  var links = document.querySelector(".nav__links");

  if (toggle && links) {
    toggle.addEventListener("click", function () {
      links.classList.toggle("is-open");
      var expanded = toggle.getAttribute("aria-expanded") === "true";
      toggle.setAttribute("aria-expanded", String(!expanded));
    });

    links.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        links.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  var yearEl = document.getElementById("current-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // ---------- Scroll reveal ----------
  var revealEls = document.querySelectorAll("[data-reveal]");
  if ("IntersectionObserver" in window && revealEls.length) {
    var revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
    );
    revealEls.forEach(function (el, i) {
      el.style.transitionDelay = (i % 3) * 70 + "ms";
      revealObserver.observe(el);
    });
  } else {
    revealEls.forEach(function (el) { el.classList.add("is-visible"); });
  }

  // ---------- Card cursor glow ----------
  document.querySelectorAll(".card").forEach(function (card) {
    card.addEventListener("mousemove", function (e) {
      var rect = card.getBoundingClientRect();
      card.style.setProperty("--mx", ((e.clientX - rect.left) / rect.width) * 100 + "%");
      card.style.setProperty("--my", ((e.clientY - rect.top) / rect.height) * 100 + "%");
    });
  });

  // ---------- Animated stat counters ----------
  var stats = document.querySelectorAll("[data-count]");
  if ("IntersectionObserver" in window && stats.length) {
    var statObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          var el = entry.target;
          var target = parseFloat(el.getAttribute("data-count"));
          var decimals = el.getAttribute("data-count").includes(".") ? 1 : 0;
          var duration = 1200;
          var start = null;

          function step(ts) {
            if (!start) start = ts;
            var progress = Math.min((ts - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = (target * eased).toFixed(decimals);
            if (progress < 1) requestAnimationFrame(step);
          }
          requestAnimationFrame(step);
          statObserver.unobserve(el);
        });
      },
      { threshold: 0.5 }
    );
    stats.forEach(function (el) { statObserver.observe(el); });
  }
});
