<!DOCTYPE html>
<html lang="kz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="src/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Басты бет</title>
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            height: 400px;

        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            height: 100%;
            min-width: 320px;
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom header__content">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="src/logo.png" alt="логотип" class="logo">
                <span class="fs-4 text-center fst-italic">Онлайн магазин: SublimaAr</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active nav__button" aria-current="page">Басты бет</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-10  slider__content">
                <swiper-container class="mySwiper " pagination="true" autoplay-delay="2000" loop="true">
                    <swiper-slide><img src="src/bg/1.png" alt="" class="slider__img"></swiper-slide>
                    <swiper-slide><img src="src/shopper/2.jpeg" alt="" class="slider__img"></swiper-slide>
                    <swiper-slide><img src="src/termo/5.jpeg" alt="" class="slider__img"></swiper-slide>
                    <swiper-slide><img src="src/bg/2.png" alt="" class="slider__img"></swiper-slide>
                    <swiper-slide><img src="src/bg/3.png" alt="" class="slider__img"></swiper-slide>
                    <swiper-slide><img src="src/bg/4.png" alt="" class="slider__img"></swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-center product">
                    <img src="src/shopper.jpg" class="card-img-top" alt="Товар 1">
                    <div class="card-body">
                        <h5 class="card-title">Шоппер</h5>
                        <p class="fw-bold">Бағасы: 3800 тг</p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Шоппер">
                            <input type="hidden" name="price" value="3800">
                            <input type="hidden" name="title" value="Шоппер">
                            <input type="hidden" name="albom" value="shopper">

                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center product">
                    <img src="src/futbolka.png" class="card-img-top" alt="Товар 2">
                    <div class="card-body">
                        <h5 class="card-title">Футболка</h5>
                        <p class="fw-bold">Бағасы: 3500 тг

                        </p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Футболка">
                            <input type="hidden" name="price" value="3500">
                            <input type="hidden" name="title" value="Футболка">
                            <input type="hidden" name="albom" value="futbolka">
                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center product">
                    <img src="src/kruzhka.png" class="card-img-top" alt="Товар 3">
                    <div class="card-body">
                        <h5 class="card-title">Кружка</h5>
                        <p class="fw-bold">Бағасы: 1700 тг</p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Кружка">
                            <input type="hidden" name="price" value="1700">
                            <input type="hidden" name="title" value="Кружка">
                            <input type="hidden" name="albom" value="kruzhka">
                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center product">
                    <img src="src/brelok.png" class="card-img-top" alt="Товар 1">
                    <div class="card-body">
                        <h5 class="card-title">Брелок</h5>
                        <p class="fw-bold">Бағасы: 500 тг</p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Брелок">
                            <input type="hidden" name="price" value="500">
                            <input type="hidden" name="title" value="Брелок">
                            <input type="hidden" name="albom" value="brelok">
                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center product">
                    <img src="src/tarelke.jpg" class="card-img-top" alt="Товар 2">
                    <div class="card-body">
                        <h5 class="card-title">Тарелке</h5>
                        <p class="fw-bold">Бағасы: 500 тг</p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Тарелке">
                            <input type="hidden" name="price" value="500">
                            <input type="hidden" name="title" value="Тарелке">
                            <input type="hidden" name="albom" value="tarelke">

                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center product">
                    <img src="src/termo.png" class="card-img-top" alt="Товар 3">
                    <div class="card-body">
                        <h5 class="card-title">Термокружка</h5>
                        <p class="fw-bold">Бағасы: 2000 тг</p>
                        <form action="product.php" method="POST">
                            <input type="hidden" name="name" value="Термокружка">
                            <input type="hidden" name="price" value="2000">
                            <input type="hidden" name="title" value="Термокружка">
                            <input type="hidden" name="albom" value="termo">
                            <button type="submit" class="btn btn-primary buy">Сатып алу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-2">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h5>Контактілер</h5>
                    <p>Телефон: +7 756 456 45 21</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
