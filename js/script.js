/* INIZIO SMOOTH SCROLL */
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou 
    direction: 'vertical', // vertical, horizontal 
    gestureDirection: 'vertical', // vertical, horizontal, both 
    smooth: true,
    mouseMultiplier: 1,
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
})

//get scroll value 
lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
    console.log({ scroll, limit, velocity, direction, progress })
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
/* FINE SMOOTH SCROLL */



/* INIZIO CURSORE */
// Seleziona l'elemento del cursore personalizzato
const cursor = document.getElementById('cursor');

// Posizione attuale e precedente del cursore
let cursorX = 0, cursorY = 0;
let targetX = 0, targetY = 0;
let prevX = 0, prevY = 0;

// Velocità del movimento fluido
const speed = 0.1;

// Variabile per la velocità del movimento
let velocity = 0;

// Variabili per il colore del cursore e il bordo
let cursorColor = "#f7f7f7"; // Colore predefinito del cursore
let cursorStroke = "none";   // Bordo predefinito (nessun bordo)

// Aggiorna la posizione target in base al movimento del mouse
document.addEventListener('mousemove', (e) => {
    // Posizione attuale del mouse
    targetX = e.pageX;
    targetY = e.pageY;

    // Calcola la velocità come distanza tra la posizione attuale e quella precedente
    const deltaX = targetX - prevX;
    const deltaY = targetY - prevY;
    velocity = Math.sqrt(deltaX ** 2 + deltaY ** 2);

    // Amplifica la velocità per aumentare la sensibilità
    velocity *= 15; // Amplifica del 50% per rendere più sensibile l'effetto

    // Aggiorna la posizione precedente
    prevX = targetX;
    prevY = targetY;
});

// Cambia il colore e il bordo del cursore quando il mouse entra su un elemento con la classe "card"
document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        cursorColor = "#ffffff"; // Cambia colore quando sopra una card
        //cursorStroke = "1px solid #000000"; // Aggiungi bordo nero
    });
    card.addEventListener('mouseleave', () => {
        cursorColor = "#ffffff"; // Ripristina colore predefinito quando esce
        cursorStroke = "none"; // Rimuovi il bordo
    });
});

// Funzione per aggiornare la posizione del cursore
function updateCursor() {
    // Interpolazione lineare verso la posizione target
    cursorX += (targetX - cursorX) * speed;
    cursorY += (targetY - cursorY) * speed;

    // Aggiorna la dimensione del cursore in base alla velocità
    const size = Math.min(15 + velocity / 3, 50); // Dimensione minima 15px, massima 50px
    cursor.style.width = `${size}px`;
    cursor.style.height = `${size}px`;

    // Imposta il colore del cursore
    cursor.style.backgroundColor = cursorColor;

    // Imposta il bordo del cursore
    cursor.style.border = cursorStroke;

    // Imposta la posizione del cursore
    cursor.style.left = `${cursorX}px`;
    cursor.style.top = `${cursorY}px`;

    // Richiama la funzione al prossimo frame
    requestAnimationFrame(updateCursor);
}

// Avvia l'animazione del cursore
updateCursor();
/* FINE CURSORE */

/* INIZIO - NASCONDERE IL CURSORE SU I DISPOSITIVI TOUCH */
function updateCursorVisibility() {
    const body = document.body;
    
    // Rileva se il dispositivo ha touch
    const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

    if (isTouch) {
        body.classList.add("no-custom-cursor"); // Nasconde il cursore personalizzato
    }

    // Rileva se l'utente usa il mouse
    window.addEventListener("mousemove", () => {
        body.classList.remove("no-custom-cursor"); // Mostra il cursore se si muove il mouse
    });

    // Rileva se l'utente usa il touchscreen
    window.addEventListener("touchstart", () => {
        body.classList.add("no-custom-cursor"); // Nasconde il cursore se tocca lo schermo
    });
}

// Chiama la funzione all'avvio
updateCursorVisibility();

document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    let hasMouse = false;
    let isTouch = false;

    function setTouchMode() {
        isTouch = true;
        body.classList.add("no-custom-cursor"); // Nasconde il cursore
    }

    function setMouseMode() {
        if (!isTouch) {
            hasMouse = true;
            body.classList.remove("no-custom-cursor"); // Mostra il cursore solo se non è un dispositivo touch
        }
    }

    // Controlla se il dispositivo è touch all'avvio
    if ("ontouchstart" in window || navigator.maxTouchPoints > 0) {
        setTouchMode();
    }

    // Se viene rilevato un movimento del mouse → attiva modalità mouse
    window.addEventListener("mousemove", setMouseMode, { once: true });

    // Se viene rilevato un tocco → forza la modalità touch
    window.addEventListener("touchstart", setTouchMode, { passive: true });
});

/* FINE - NASCONDERE IL CURSORE SU I DISPOSITIVI TOUCH */

/* INIZIO - PROGRESS BAR ANIMATION */
document.addEventListener("DOMContentLoaded", function () {
    let progressBar = document.querySelector(".reading-progress-bar");

    function updateProgressBar() {
        let scrollTop = window.scrollY;
        let documentHeight = document.documentElement.scrollHeight - window.innerHeight;
        let progress = (scrollTop / documentHeight) * 100;
        progressBar.style.width = progress + "%";
    }

    window.addEventListener("scroll", updateProgressBar);
});
/* FINE - PROGRESS BAR ANIMATION */