<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php //Sottotitolo
    if ($_GET["id"] == "luci-e-ombre") {
        echo $project[0][1];
    } else if ($_GET["id"] == "auth-79") {
        echo $project[1][1];
    } else if ($_GET["id"] == "sovracoperta") {
        echo $project[2][1];
    } else if ($_GET["id"] == "trailer-titanic") {
        echo $project[3][1];
    } else if ($_GET["id"] == "layers") {
        echo $project[4][1];
    } else if ($_GET["id"] == "sperimentazione-tipografica") {
        echo $project[5][1];
    } else if ($_GET["id"] == "pillole-sul-graphic-design") {
        echo $project[6][1];
    } else if ($_GET["id"] == "manifesti-supsi") {
        echo $project[7][1];
    } else if ($_GET["id"] == "slurp-farm") {
        echo $project[8][1];
    } else if ($_GET["id"] == "sperimentazione-3d") {
        echo $project[9][1];
    } else if ($_GET["id"] == "pronto-in-pagina") {
        echo $project[10][1];
    } else if ($_GET["id"] == "ca-stella") {
        echo $project[11][1];
    } else if ($_GET["id"] == "less-is-more_more-is-more") {
        echo $project[12][1];
    } else if ($_GET["id"] == "village-037") {
        echo $project[13][1];
    } else if ($_GET["id"] == "ISPA") {
        echo $project[14][1];
    } ?>" />

    <title>Deborah Pedretti | Detail</title>
    <link rel="icon" href="src/Icons/X-icon.svg" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- INIZIO SMOOTH SCROLL -->
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.16/dist/lenis.css">
    <!-- FINE SMOOTH SCROLL -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
    </style>
</head>

<body>
    <?php include_once('components/cursor.php'); ?>
    <?php include_once('components/nav.php'); ?>
    <?php include('components/project-info.php'); ?>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="h1">
                        <?php //Titolo
                        if ($_GET["id"] == "luci-e-ombre") {
                            echo $project[0][0];
                        } else if ($_GET["id"] == "auth-79") {
                            echo $project[1][0];
                        } else if ($_GET["id"] == "sovracoperta") {
                            echo $project[2][0];
                        } else if ($_GET["id"] == "trailer-titanic") {
                            echo $project[3][0];
                        } else if ($_GET["id"] == "layers") {
                            echo $project[4][0];
                        } else if ($_GET["id"] == "sperimentazione-tipografica") {
                            echo $project[5][0];
                        } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                            echo $project[6][0];
                        } else if ($_GET["id"] == "manifesti-supsi") {
                            echo $project[7][0];
                        } else if ($_GET["id"] == "slurp-farm") {
                            echo $project[8][0];
                        } else if ($_GET["id"] == "sperimentazione-3d") {
                            echo $project[9][0];
                        } else if ($_GET["id"] == "pronto-in-pagina") {
                            echo $project[10][0];
                        } else if ($_GET["id"] == "ca-stella") {
                            echo $project[11][0];
                        } else if ($_GET["id"] == "less-is-more_more-is-more") {
                            echo $project[12][0];
                        } else if ($_GET["id"] == "village-037") {
                            echo $project[13][0];
                        } else if ($_GET["id"] == "ISPA") {
                            echo $project[14][0];
                        }

                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section id="Intro-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="sticky-top pt-5">
                        <h3>Categoria:</h3>
                        <?php //Categorie
                        if ($_GET["id"] == "luci-e-ombre") {
                            echo $project[0][3];
                        } else if ($_GET["id"] == "auth-79") {
                            echo $project[1][3];
                        } else if ($_GET["id"] == "sovracoperta") {
                            echo $project[2][3];
                        } else if ($_GET["id"] == "trailer-titanic") {
                            echo $project[3][3];
                        } else if ($_GET["id"] == "layers") {
                            echo $project[4][3];
                        } else if ($_GET["id"] == "sperimentazione-tipografica") {
                            echo $project[5][3];
                        } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                            echo $project[6][3];
                        } else if ($_GET["id"] == "manifesti-supsi") {
                            echo $project[7][3];
                        } else if ($_GET["id"] == "slurp-farm") {
                            echo $project[8][3];
                        } else if ($_GET["id"] == "sperimentazione-3d") {
                            echo $project[9][3];
                        } else if ($_GET["id"] == "pronto-in-pagina") {
                            echo $project[10][3];
                        } else if ($_GET["id"] == "ca-stella") {
                            echo $project[11][3];
                        } else if ($_GET["id"] == "less-is-more_more-is-more") {
                            echo $project[12][3];
                        } else if ($_GET["id"] == "village-037") {
                            echo $project[13][3];
                        } else if ($_GET["id"] == "ISPA") {
                            echo $project[14][3];
                        }
                        ?>
                        <div class="d-flex align-items-baseline mt-5">
                            <h3>Anno:</h3>&nbsp;
                            <h3 class="color-gray">
                                <?php //Anno
                                if ($_GET["id"] == "luci-e-ombre") {
                                    echo $project[0][8];
                                } else if ($_GET["id"] == "auth-79") {
                                    echo $project[1][8];
                                } else if ($_GET["id"] == "sovracoperta") {
                                    echo $project[2][8];
                                } else if ($_GET["id"] == "trailer-titanic") {
                                    echo $project[3][8];
                                } else if ($_GET["id"] == "layers") {
                                    echo $project[4][8];
                                } else if ($_GET["id"] == "sperimentazione-tipografica") {
                                    echo $project[5][8];
                                } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                                    echo $project[6][8];
                                } else if ($_GET["id"] == "manifesti-supsi") {
                                    echo $project[7][8];
                                } else if ($_GET["id"] == "slurp-farm") {
                                    echo $project[8][8];
                                } else if ($_GET["id"] == "sperimentazione-3d") {
                                    echo $project[9][8];
                                } else if ($_GET["id"] == "pronto-in-pagina") {
                                    echo $project[10][8];
                                } else if ($_GET["id"] == "ca-stella") {
                                    echo $project[11][8];
                                } else if ($_GET["id"] == "less-is-more_more-is-more") {
                                    echo $project[12][8];
                                } else if ($_GET["id"] == "village-037") {
                                    echo $project[13][8];
                                } else if ($_GET["id"] == "ISPA") {
                                    echo $project[14][8];
                                }
                                ?>
                            </h3>
                        </div>
                        <div class="d-flex align-items-baseline flex-wrap mt-3">
                            <h3>Tipologia:</h3>&nbsp;
                            <h3 class="color-gray ">
                                <?php //Tipologia
                                if ($_GET["id"] == "luci-e-ombre") {
                                    echo $project[0][9];
                                } else if ($_GET["id"] == "auth-79") {
                                    echo $project[1][9];
                                } else if ($_GET["id"] == "sovracoperta") {
                                    echo $project[2][9];
                                } else if ($_GET["id"] == "trailer-titanic") {
                                    echo $project[3][9];
                                } else if ($_GET["id"] == "layers") {
                                    echo $project[4][9];
                                } else if ($_GET["id"] == "sperimentazione-tipografica") {
                                    echo $project[5][9];
                                } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                                    echo $project[6][9];
                                } else if ($_GET["id"] == "manifesti-supsi") {
                                    echo $project[7][9];
                                } else if ($_GET["id"] == "slurp-farm") {
                                    echo $project[8][9];
                                } else if ($_GET["id"] == "sperimentazione-3d") {
                                    echo $project[9][9];
                                } else if ($_GET["id"] == "pronto-in-pagina") {
                                    echo $project[10][9];
                                } else if ($_GET["id"] == "ca-stella") {
                                    echo $project[11][9];
                                } else if ($_GET["id"] == "less-is-more_more-is-more") {
                                    echo $project[12][9];
                                } else if ($_GET["id"] == "village-037") {
                                    echo $project[13][9];
                                } else if ($_GET["id"] == "ISPA") {
                                    echo $project[14][9];
                                }
                                ?>
                            </h3>
                        </div>
                    </div>
                    <a class="arrow-top mb-5" href="#">
                        <div class="circle">
                            <img src="../src/Icons/Arrow-top.svg" alt="Arrow-top">
                        </div>
                    </a>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <h2 class="mt-5">
                        <?php //Sottotitolo
                        if ($_GET["id"] == "luci-e-ombre") {
                            echo $project[0][1];
                        } else if ($_GET["id"] == "auth-79") {
                            echo $project[1][1];
                        } else if ($_GET["id"] == "sovracoperta") {
                            echo $project[2][1];
                        } else if ($_GET["id"] == "trailer-titanic") {
                            echo $project[3][1];
                        } else if ($_GET["id"] == "layers") {
                            echo $project[4][1];
                        } else if ($_GET["id"] == "sperimentazione-tipografica") {
                            echo $project[5][1];
                        } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                            echo $project[6][1];
                        } else if ($_GET["id"] == "manifesti-supsi") {
                            echo $project[7][1];
                        } else if ($_GET["id"] == "slurp-farm") {
                            echo $project[8][1];
                        } else if ($_GET["id"] == "sperimentazione-3d") {
                            echo $project[9][1];
                        } else if ($_GET["id"] == "pronto-in-pagina") {
                            echo $project[10][1];
                        } else if ($_GET["id"] == "ca-stella") {
                            echo $project[11][1];
                        } else if ($_GET["id"] == "less-is-more_more-is-more") {
                            echo $project[12][1];
                        } else if ($_GET["id"] == "village-037") {
                            echo $project[13][1];
                        } else if ($_GET["id"] == "ISPA") {
                            echo $project[14][1];
                        }
                        ?>
                    </h2>
                    <div class="row mt-3">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <p class="divide">
                                <?php //Descrizione
                                if ($_GET["id"] == "luci-e-ombre") {
                                    echo $project[0][2];
                                } else if ($_GET["id"] == "auth-79") {
                                    echo $project[1][2];
                                } else if ($_GET["id"] == "sovracoperta") {
                                    echo $project[2][2];
                                } else if ($_GET["id"] == "trailer-titanic") {
                                    echo $project[3][2];
                                } else if ($_GET["id"] == "layers") {
                                    echo $project[4][2];
                                } else if ($_GET["id"] == "sperimentazione-tipografica") {
                                    echo $project[5][2];
                                } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                                    echo $project[6][2];
                                } else if ($_GET["id"] == "manifesti-supsi") {
                                    echo $project[7][2];
                                } else if ($_GET["id"] == "slurp-farm") {
                                    echo $project[8][2];
                                } else if ($_GET["id"] == "sperimentazione-3d") {
                                    echo $project[9][2];
                                } else if ($_GET["id"] == "pronto-in-pagina") {
                                    echo $project[10][2];
                                } else if ($_GET["id"] == "ca-stella") {
                                    echo $project[11][2];
                                } else if ($_GET["id"] == "less-is-more_more-is-more") {
                                    echo $project[12][2];
                                } else if ($_GET["id"] == "village-037") {
                                    echo $project[13][2];
                                } else if ($_GET["id"] == "ISPA") {
                                    echo $project[14][2];
                                }
                                ?>
                            </p>
                        </div>

                    </div>
                    <?php //Video
                    if ($_GET["id"] == "luci-e-ombre") {
                        echo $project[0][4];
                    } else if ($_GET["id"] == "auth-79") {
                        echo $project[1][4];
                    } else if ($_GET["id"] == "sovracoperta") {
                        echo $project[2][4];
                    } else if ($_GET["id"] == "trailer-titanic") {
                        echo $project[3][4];
                    } else if ($_GET["id"] == "layers") {
                        echo $project[4][4];
                    } else if ($_GET["id"] == "sperimentazione-tipografica") {
                        echo $project[5][4];
                    } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                        echo $project[6][4];
                    } else if ($_GET["id"] == "manifesti-supsi") {
                        echo $project[7][4];
                    } else if ($_GET["id"] == "slurp-farm") {
                        echo $project[8][4];
                    } else if ($_GET["id"] == "sperimentazione-3d") {
                        echo $project[9][4];
                    } else if ($_GET["id"] == "pronto-in-pagina") {
                        echo $project[10][4];
                    } else if ($_GET["id"] == "ca-stella") {
                        echo $project[11][4];
                    } else if ($_GET["id"] == "less-is-more_more-is-more") {
                        echo $project[12][4];
                    } else if ($_GET["id"] == "village-037") {
                        echo $project[13][4];
                    } else if ($_GET["id"] == "ISPA") {
                        echo $project[14][4];
                    }
                    ?>
                    <?php //Immagini
                    if ($_GET["id"] == "luci-e-ombre") {
                        echo $project[0][5];
                    } else if ($_GET["id"] == "auth-79") {
                        echo $project[1][5];
                    } else if ($_GET["id"] == "sovracoperta") {
                        echo $project[2][5];
                    } else if ($_GET["id"] == "trailer-titanic") {
                        echo $project[3][5];
                    } else if ($_GET["id"] == "layers") {
                        echo $project[4][5];
                    } else if ($_GET["id"] == "sperimentazione-tipografica") {
                        echo $project[5][5];
                    } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                        echo $project[6][5];
                    } else if ($_GET["id"] == "manifesti-supsi") {
                        echo $project[7][5];
                    } else if ($_GET["id"] == "slurp-farm") {
                        echo $project[8][5];
                    } else if ($_GET["id"] == "sperimentazione-3d") {
                        echo $project[9][5];
                    } else if ($_GET["id"] == "pronto-in-pagina") {
                        echo $project[10][5];
                    } else if ($_GET["id"] == "ca-stella") {
                        echo $project[11][5];
                    } else if ($_GET["id"] == "less-is-more_more-is-more") {
                        echo $project[12][5];
                    } else if ($_GET["id"] == "village-037") {
                        echo $project[13][5];
                    } else if ($_GET["id"] == "ISPA") {
                        echo $project[14][5];
                    }
                    ?>
                    <div class="col mt-5">
                        <div class="text-end">
                            <a class="text-decoration-none link-dark" <?php // Link prossimo progetto
                            if ($_GET["id"] == "luci-e-ombre") {
                                echo $project[0][6];
                            } else if ($_GET["id"] == "auth-79") {
                                echo $project[1][6];
                            } else if ($_GET["id"] == "sovracoperta") {
                                echo $project[2][6];
                            } else if ($_GET["id"] == "trailer-titanic") {
                                echo $project[3][6];
                            } else if ($_GET["id"] == "layers") {
                                echo $project[4][6];
                            } else if ($_GET["id"] == "sperimentazione-tipografica") {
                                echo $project[5][6];
                            } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                                echo $project[6][6];
                            } else if ($_GET["id"] == "manifesti-supsi") {
                                echo $project[7][6];
                            } else if ($_GET["id"] == "slurp-farm") {
                                echo $project[8][6];
                            } else if ($_GET["id"] == "sperimentazione-3d") {
                                echo $project[9][6];
                            } else if ($_GET["id"] == "pronto-in-pagina") {
                                echo $project[10][6];
                            } else if ($_GET["id"] == "ca-stella") {
                                echo $project[11][6];
                            } else if ($_GET["id"] == "less-is-more_more-is-more") {
                                echo $project[12][6];
                            } else if ($_GET["id"] == "village-037") {
                                echo $project[13][6];
                            } else if ($_GET["id"] == "ISPA") {
                                echo $project[14][6];
                            }
                            ?>>
                                <div class="d-flex justify-content-end">
                                    <h3 class="text-uppercase">Prossimo progetto</h3>
                                    <img class="icon" src="../src/Icons/Arrow.svg" alt="Arrow">
                                </div>
                                <p>
                                    <?php //Testo prossimo progetto
                                    if ($_GET["id"] == "luci-e-ombre") {
                                        echo $project[0][7];
                                    } else if ($_GET["id"] == "auth-79") {
                                        echo $project[1][7];
                                    } else if ($_GET["id"] == "sovracoperta") {
                                        echo $project[2][7];
                                    } else if ($_GET["id"] == "trailer-titanic") {
                                        echo $project[3][7];
                                    } else if ($_GET["id"] == "layers") {
                                        echo $project[4][7];
                                    } else if ($_GET["id"] == "sperimentazione-tipografica") {
                                        echo $project[5][7];
                                    } else if ($_GET["id"] == "pillole-sul-graphic-design") {
                                        echo $project[6][7];
                                    } else if ($_GET["id"] == "manifesti-supsi") {
                                        echo $project[7][7];
                                    } else if ($_GET["id"] == "slurp-farm") {
                                        echo $project[8][7];
                                    } else if ($_GET["id"] == "sperimentazione-3d") {
                                        echo $project[9][7];
                                    } else if ($_GET["id"] == "pronto-in-pagina") {
                                        echo $project[10][7];
                                    } else if ($_GET["id"] == "ca-stella") {
                                        echo $project[11][7];
                                    } else if ($_GET["id"] == "less-is-more_more-is-more") {
                                        echo $project[12][7];
                                    } else if ($_GET["id"] == "village-037") {
                                        echo $project[13][7];
                                    } else if ($_GET["id"] == "ISPA") {
                                        echo $project[14][7];
                                    }
                                    ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INIZIO PROGRESS BAR -->
    <div class="reading-progress-bar-container">
        <div class="reading-progress-bar"></div>
    </div>
    <!-- FINE PROGRESS BAR -->
    <?php include_once('components/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- INIZIO SMOOTH SCROLL -->
    <script src="https://unpkg.com/lenis@1.1.16/dist/lenis.min.js"></script>
    <script src="../js/script.js"></script>
    <!-- FINE SMOOTH SCROLL -->
</body>

</html>