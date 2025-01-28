<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deborah Pedretti - Graphic designer con esperienza nel settore moda e design." />
    <title>Deborah Pedretti</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- SMOOTH SCROLL -->
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.16/dist/lenis.css">
    <!-- ANIM PAGINA -->
    <link rel="stylesheet" href="css/anim-pagina.css">
</head>
<style>
    /* Animazione titoli scorrevoli */
    .wrapper {
        max-width: 100%;
        overflow: hidden;
    }

    .marquee {
        white-space: nowrap;
        overflow: hidden;
        display: inline-block;
        animation: marquee 12s linear infinite;
    }

    .marquee p {
        display: inline-block;
    }

    @keyframes marquee {
        0% {
            transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(-50%, 0, 0);
        }
    }
</style>

<body>
    <?php include_once('components/cursor.php'); ?>
    <?php include_once('components/nav.php'); ?>
    <header>
        <div class="container-fluid">
            <h1 id="h1-width" class="text-center">Deborah Pedretti</h1>
            <div class="wrapper">
                <div class="marquee">
                    <h2 class="h3">• Branding&nbsp;• Logo&nbsp;• Advertising&nbsp;• Campagne istituzionali&nbsp;• Montaggio
                        video&nbsp;• Editoria&nbsp;• Tipografia&nbsp;• Packaging design&nbsp;•
                        Sperimentazione&nbsp;• Graphic design&nbsp;• Branding&nbsp;• Logo&nbsp;• Advertising&nbsp;•
                        Campagne istituzionali&nbsp;• Montaggio video&nbsp;• Editoria&nbsp;• Tipografia&nbsp;• Packaging
                        design&nbsp;•
                        Sperimentazione&nbsp;• Graphic design&nbsp;•
                    </h2>
                </div>
            </div>
            <?php include_once('components/project-carosello.php'); ?>
        </div>
    </header>
    <section id="Intro-about">
        <div class="container-fluid">
            <h3 class="lead mt-5 mb-3">About</h3>
            <h2 text-split words-slide-from-right style="line-height: 1.1">
                Il mio nome è Deborah Pedretti e sono una graphic designer.
                Ho maturato la mia esperienza professionale prevalentemente nel settore della moda e del graphic design.
                Questo percorso mi ha permesso di sviluppare una spiccata sensibilità estetica e un approccio versatile,
                con una particolare attenzione ai dettagli.
                <a href="about.php">
                    <img class="circle-about" src="src/Icons/Arrow-right.svg" alt="Arrow-right">
                </a>
            </h2>
        </div>
    </section>
    <section id="Intro-projects">
        <div class="container-fluid">
            <h3 class="lead mt-5 mb-3">Progetti</h3>
            <div class="nav nav-pills d-flex flex-nowrap overflow-x-scroll">
                <div class="filter-buttons">
                    <button class="filter-btn btn mb-2" id="tutti">Tutti</button>
                    <button class="filter-btn btn mb-2" id="branding">Branding</button>
                    <button class="filter-btn btn mb-2" id="commissionati">Commissionati</button>
                    <button class="filter-btn btn mb-2" id="editoria">Editoria</button>
                    <button class="filter-btn btn mb-2" id="grafica">Grafica</button>
                    <button class="filter-btn btn mb-2" id="montaggio-video">Montaggio video</button>
                    <button class="filter-btn btn mb-2" id="packaging">Packaging</button>
                    <button class="filter-btn btn mb-2" id="personali">Personali</button>
                    <button class="filter-btn btn mb-2" id="sperimentazione">Sperimentazione</button>
                    <button class="filter-btn btn mb-2" id="altro">Altro</button>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <?php include_once('components/project-cards.php'); ?>
            </div>
        </div>
    </section>
    <section id="Intro-services">
        <div class="container-fluid">
            <h3 class="lead mt-5 mb-3">Servizi</h3>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Branding.svg" alt="Branding">
                            <h4 class="card-title">Branding</h4>
                            <p class="card-text">Loghi, identità visiva, abbinamenti cromatici, font pairing,...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Grafica.svg" alt="Grafica">
                            <h4 class="card-title">Grafica</h4>
                            <p class="card-text">Poster, tipografia, packaging design, brochure,...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Editoria.svg" alt="Editoria">
                            <h4 class="card-title">Editoria</h4>
                            <p class="card-text">Cataloghi, brand manual, dossier, libri,...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Marketing.svg" alt="Marketing">
                            <h4 class="card-title">Marketing</h4>
                            <p class="card-text">Campagne istituzionali, advertising, storytelling,... </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Montaggio-video.svg" alt="Montaggio video">
                            <h4 class="card-title">Montaggio video</h4>
                            <p class="card-text">Assemblaggio clip e traccie già fornite, storytelling,...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card rounded-0 border-0">
                        <div class="card-body">
                            <img class="pb-3 icon-large" src="src/Icons/Sperimentazione.svg" alt="Sperimentazione">
                            <h4 class="card-title">Sperimentazione</h4>
                            <p class="card-text">Tecniche varie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('components/footer.php'); ?>

    <div class="ripple-wrap">
        <div class="ripple"></div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"> /*jQuery*/</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">/*Bootstrap*/</script>
<script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js">/*Smooth scroll*/</script>
<script src="js/script.js">/*Smooth scroll*/</script>
<script src="js/filtro.js">/*Per far funzionare il filtro delle categorie*/</script>
<script src="js/anim-pagina.js">/*Animazione cambio pagina*/</script>
<script src="https://cdn.jsdelivr.net/gh/timothydesign/script/split-type.js">/*Trasforma il testo in span*/</script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"> /*GSAP*/</script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js">/*Scroll Trigger*/</script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js">/* GSAP */</script>
<script>
    /* INIZIO ANIMAZIONE TITOLI */
    window.addEventListener("DOMContentLoaded", (event) => {
        // Split text into spans
        let typeSplit = new SplitType("[text-split]", {
            types: "words, chars",
            tagName: "span"
        });

        // Link timelines to scroll position
        function createScrollTrigger(triggerElement, timeline) {
            // Reset tl when scroll out of view past bottom of screen
            ScrollTrigger.create({
                trigger: triggerElement,
                start: "top bottom",
                onLeaveBack: () => {
                    timeline.progress(0);
                    timeline.pause();
                }
            });
            // Play tl when scrolled into view (60% from top of screen)
            ScrollTrigger.create({
                trigger: triggerElement,
                start: "top 80%",
                onEnter: () => timeline.play()
            });
        }

        $("[words-slide-from-right]").each(function (index) {
            let tl = gsap.timeline({ paused: true });
            tl.from($(this).find(".word"), { opacity: 0, x: "1em", duration: 0.6, ease: "power2.out", stagger: { amount: 0.4 } });
            createScrollTrigger($(this), tl);

            gsap.set(".circle-about", { opacity: 0 });
            tl.to('.circle-about', { opacity: 1 });
        });

        // Avoid flash of unstyled content
        gsap.set("[text-split]", { opacity: 1, duration: 1 });
    });
</script>

</html>