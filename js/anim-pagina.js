$(document).ready(function () {
  var fadeOverlay = $('<div class="fade-overlay"></div>').appendTo('body'),
      targetUrl = null;

  // Animazione di uscita al click del link
  $('body').on('click', 'a', function (e) {
    if ($(this).hasClass('no-anim')) {
      return;
    }

    e.preventDefault();
    targetUrl = $(this).attr('href');

    // Mostra l'overlay con transizione
    fadeOverlay.addClass('visible');
    setTimeout(() => {
      window.location.href = targetUrl; // Cambia pagina dopo la dissolvenza
    }, 500); // Durata ridotta a 0.5 secondi
  });

  // Gestione dell'animazione di ingresso quando si torna indietro nella cronologia
  $(window).on('pageshow', function (event) {
    if (event.originalEvent.persisted) {
      fadeOverlay.addClass('visible'); // Overlay visibile
    } else {
      fadeOverlay.removeClass('visible'); // Rimuove la dissolvenza se non è una navigazione indietro
    }
    
    setTimeout(() => {
      fadeOverlay.removeClass('visible'); // Rimuove la dissolvenza dopo un breve tempo
    }, 500); // Durata ridotta a 0.5 secondi
  });

  // Animazione di ingresso quando la pagina è caricata
  $(window).on('load', function () {
    fadeOverlay.addClass('visible'); // Overlay visibile all'inizio
    setTimeout(() => {
      fadeOverlay.removeClass('visible'); // Rimuove la dissolvenza
    }, 500); // Durata ridotta a 0.5 secondi
  });
});
