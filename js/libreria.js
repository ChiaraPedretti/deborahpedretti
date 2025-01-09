
const books = document.querySelectorAll('.book');
const bookshelf = document.querySelector('.bookshelf');
const tooltipLibrary = document.getElementById('tooltipLibrary');
const cmToPx = 37.795;
const scale = 0.5;

// Imposta dimensioni e immagini dei libri
books.forEach(book => {
  const image = book.dataset.image;
  const heightCm = parseFloat(book.dataset.heightCm);
  const widthCm = parseFloat(book.dataset.widthCm); // Larghezza specificata in cm

  const heightPx = heightCm * cmToPx * scale;
  const widthPx = widthCm * cmToPx * scale; // Calcola larghezza in px
  //const widthPx = heightPx / 8.5;

  book.style.backgroundImage = `url(${image})`;
  book.style.height = `${heightPx}px`;
  book.style.width = `${widthPx}px`;
});

// Funzione per aggiungere scaffali dinamicamente
function addShelves() {
  const shelfHeight = 30; // Altezza uniforme dello scaffale
  let lastRowBottom = -1; // Traccia la posizione della riga precedente

  // Rimuovi scaffali dinamici precedenti
  document.querySelectorAll('.dynamic-shelf').forEach(shelf => shelf.remove());

  books.forEach((book, index) => {
    const bookRect = book.getBoundingClientRect(); // Ottieni posizione e dimensioni del libro
    const bookBottom = bookRect.bottom; // La base del libro

    // Aggiungi scaffale se una nuova riga inizia
    if (bookBottom > lastRowBottom) {
      const shelf = document.createElement('div');
      shelf.className = 'shelf dynamic-shelf';
      shelf.style.position = 'absolute';
      shelf.style.width = '100%';
      shelf.style.height = `${shelfHeight}px`;
      shelf.style.top = `${book.offsetTop + book.offsetHeight}px`;

      // Aggiungi scaffale alla libreria
      bookshelf.appendChild(shelf);
      lastRowBottom = bookBottom;
    }
  });
}



// tooltipLibrary al passaggio del mouse
books.forEach(book => {
  book.addEventListener('mouseover', (e) => {
    const title = book.dataset.title;
    const author = book.dataset.author;
    const publisher = book.dataset.publisher;
    const year = book.dataset.year;

    tooltipLibrary.style.display = 'block';
    tooltipLibrary.style.left = `${e.pageX + 10}px`;
    tooltipLibrary.style.top = `${e.pageY + 10}px`;
    tooltipLibrary.style.width = `auto`;
    tooltipLibrary.innerHTML = `<strong>${title}</strong><br>di ${author}<br>${publisher}, ${year}`;
  });

  book.addEventListener('mouseout', () => {
    tooltipLibrary.style.display = 'none';
  });
});

// Aggiorna scaffali all'avvio e al ridimensionamento
window.addEventListener('load', addShelves);
window.addEventListener('resize', addShelves);