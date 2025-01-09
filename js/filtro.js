//colora di default il bottone "tutti"
document.addEventListener('DOMContentLoaded', function () {
    aggiornaStilePulsanti('tutti'); // Imposta il pulsante "tutti" come selezionato di default
});

// Aggiungi gli event listener per ogni bottone
document.getElementById('tutti').addEventListener('click', function () {
    mostraCard('tutti');
    aggiornaStilePulsanti('tutti');
});
document.getElementById('branding').addEventListener('click', function () {
    mostraCard('branding');
    aggiornaStilePulsanti('branding');
});
document.getElementById('commissionati').addEventListener('click', function () {
    mostraCard('commissionati');
    aggiornaStilePulsanti('commissionati');
});
document.getElementById('grafica').addEventListener('click', function () {
    mostraCard('grafica');
    aggiornaStilePulsanti('grafica');
});
document.getElementById('personali').addEventListener('click', function () {
    mostraCard('personali');
    aggiornaStilePulsanti('personali');
});
document.getElementById('altro').addEventListener('click', function () {
    mostraCard('altro');
    aggiornaStilePulsanti('altro');
});
document.getElementById('sperimentazione').addEventListener('click', function () {
    mostraCard('sperimentazione');
    aggiornaStilePulsanti('sperimentazione');
});
document.getElementById('editoria').addEventListener('click', function () {
    mostraCard('editoria');
    aggiornaStilePulsanti('editoria');
});
document.getElementById('packaging').addEventListener('click', function () {
    mostraCard('packaging');
    aggiornaStilePulsanti('packaging');
});
document.getElementById('montaggio-video').addEventListener('click', function () {
    mostraCard('montaggio-video');
    aggiornaStilePulsanti('montaggio-video');
});

// Funzione per mostrare le card in base alla categoria
function mostraCard(categoria) {
    // Nascondi tutte le card
    const tutteLeCard = document.querySelectorAll('.card-progetto');
    tutteLeCard.forEach(card => {
        card.style.display = 'none';
    });

    // Se è "tutti", mostra tutte le card
    if (categoria === 'tutti') {
        tutteLeCard.forEach(card => {
            card.style.display = 'block';
        });
    } else {
        // Mostra solo le card che appartengono alla categoria selezionata
        const cardCategoria = document.querySelectorAll(`.card-progetto .card-body .card-category.${categoria}`);
        cardCategoria.forEach(cardCat => {
            const cardProgetto = cardCat.closest('.card-progetto');
            cardProgetto.style.display = 'block';
        });
    }
}

// Funzione per aggiornare lo stile dei pulsanti
function aggiornaStilePulsanti(categoriaSelezionata) {
    const pulsanti = document.querySelectorAll('.filter-btn'); // Seleziona tutti i pulsanti
    pulsanti.forEach(btn => {
        if (btn.id === categoriaSelezionata) {
            // Se il pulsante è selezionato
            btn.style.border = '2px solid black'; // Colora il bordo di nero
            btn.style.color = 'black'; // Testo nero
        } else {
            // Altrimenti, stile predefinito
            btn.style.border = '1px solid #6d6d6d'; // Bordo grigio chiaro
            btn.style.color = '#6d6d6d'; // Testo grigio
        }
    });
}
