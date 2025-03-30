<?php
$name = $_POST['name'];
$price = $_POST['price'];
$albom = $_POST['albom'];
$title = $_POST['title'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product.css">
    <link rel="icon" href="src/logo.png" type="image/png">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="src/logo.png" alt="логотип" class="logo ">
                <span class="fs-4 text-center">Онлайн магазин: SublimaAr</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active nav__button" aria-current="page">Басты
                        бет</a></li>
            </ul>
        </header>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <img id="mainImage" src="src/1.jpeg" class="product-img" alt="Товар">
            </div>
            <div class="col-md-6">
                <div class="product-card">
                    <h2><?php echo $name ?></h2>
                    <p class="fs-4">Бағасы: <?php echo $price ?> тг</p>
                    <h4>Сурет тандаңыз:</h4>
                    <div class="d-flex gap-2 product-flex">
                        <img src="src/1.jpeg" class="variant-img selected" onclick="changeImage(this)" alt="1">
                        <img src="src/2.jpeg" class="variant-img" onclick="changeImage(this)" alt="2">
                        <img src="src/3.jpeg" class="variant-img" onclick="changeImage(this)"
                            alt="3">
                        <img src="src/4.jpeg" class="variant-img" onclick="changeImage(this)"
                            alt="4">
                    </div>
                    <?php
                    if ($name == 'Футболка') {
                        echo    '<div class="mb-3 mt-5">
                            <label for="size" class="form-label">Футболка өлшемі</label>
                            <select class="form-control" id="size" name="size">
                                <option value="1" class="type__option">XS</option>
                                <option value="2" class="type__option">S</option>
                                <option value="3" class="type__option">M</option>
                                <option value="4" class="type__option">L</option>
                                <option value="3" class="type__option">XL</option>
                                <option value="4" class="type__option">XXL</option>
                            </select>
                        </div>';
                    } else if ($name == 'Шоппер') {
                        echo    '<div class="mb-3 mt-5">
                               <label for="size" class="form-label">Шоппер өлшемі</label>
                               <select class="form-control" id="size" name="size">
                                   <option value="1" class="type__option">20 × 25 × 10 см</option>
                                   <option value="2" class="type__option">30 × 35 × 10 см</option>
                                   <option value="3" class="type__option">40 × 45 × 12 см</option>
                               </select>
                           </div>';
                    } else if ($name == 'Кружка') {
                        echo    '<div class="mb-3 mt-5">
                               <label for="size" class="form-label">Кружка өлшемі</label>
                               <select class="form-control" id="size" name="size">
                                   <option value="1" class="type__option">90 мл</option>
                                   <option value="1" class="type__option">300 мл</option>
                                   <option value="1" class="type__option">450 мл</option>
                               </select>
                           </div>';
                    } else if ($name == 'Брелок') {
                        echo    '<div class="mb-3 mt-5">
                               <label for="size" class="form-label">Брелок пішіні</label>
                               <select class="form-control" id="size" name="size">
                                   <option value="1" class="type__option">Тікбұрышты</option>
                                   <option value="1" class="type__option">Дөңгелек</option>
                                   <option value="1" class="type__option">Фигуралы</option>
                               </select>
                           </div>';
                    } else if ($name == 'Тарелке') {
                        echo    '<div class="mb-3 mt-5">
                               <label for="size" class="form-label">Тарелке өлшемі (диаметр)</label>
                               <select class="form-control" id="size" name="size">
                                   <option value="1" class="type__option">10–15 см</option>
                                   <option value="1" class="type__option">18–22 см</option>
                                   <option value="1" class="type__option">24–28 см</option>
                               </select>
                           </div>';
                    } else {
                        echo    '<div class="mb-3 mt-5">
                               <label for="size" class="form-label">Термокружка өлшемі</label>
                               <select class="form-control" id="size" name="size">
                                   <option value="1" class="type__option">300 мл</option>
                                   <option value="1" class="type__option">450 мл</option>
                                   <option value="1" class="type__option">600 мл</option>
                               </select>
                           </div>';
                    }
                    ?>
                    <button class="btn btn-buy mt-4" id="BuyContact" type="submit">Сатып алу</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <div class="col">
                <div class="card img">
                    <img src="<?php echo 'src/' . $albom . '/1.jpeg'; ?>" class="card-img-top" alt="Картинка 2">
                </div>
            </div>
            <div class="col">
                <div class="card img">
                    <img src="<?php echo 'src/' . $albom . '/2.jpeg'; ?>" class="card-img-top" alt="Картинка 2">
                </div>
            </div>
            <div class="col">
                <div class="card img">
                    <img src="<?php echo 'src/' . $albom . '/3.jpeg'; ?>" class="card-img-top" alt="Картинка 2">
                </div>
            </div>
            <?php
            if ($albom == 'kruzhka' || $albom == 'termo' || $albom == 'brelok') {
                echo '<div class="col">
            <div class="card img">
                <img src="src/' . $albom . '/4.jpeg" class="card-img-top" alt="Картинка 4">
            </div>
          </div>
          <div class="col">
            <div class="card img">
                <img src="src/' . $albom . '/5.jpeg" class="card-img-top" alt="Картинка 5">
            </div>
          </div>
          <div class="col">
            <div class="card img">
                <img src="src/' . $albom . '/6.jpeg" class="card-img-top" alt="Картинка 6">
            </div>
          </div>';
            }
            ?>

        </div>
    </div>
    <div class="row mt-5">
        <dialog class="col-md-6 offset-md-3" style="margin-top: 200px" id="contact">
            <div class="card">
                <span class="close-btn" id="CloseContact">&times;</span>
                <div class="card-body">
                    <h5 class="card-title text-center text-dark">Тапсырыс беру</h5>
                    <form action="mail.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label" name="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="Email почтаны енгізіңіз" required>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label" name="location">Мекен жай</label>
                            <input type="text" name="location" class="form-control" id="location"
                                placeholder="Мекен жай енгізіңіз" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label" type="number">Номер телефона</label>
                            <input type="tel" name="phone" class="form-control" id="phone"
                                placeholder="Телефон нөмірді енгізіңіз" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Түрі</label>
                            <select class="form-control" id="type" name="type">
                                <option value="1" class="type__option">1</option>
                                <option value="2" class="type__option">2</option>
                                <option value="3" class="type__option">3</option>
                                <option value="4" class="type__option">4</option>
                            </select>
                        </div>

                        <input type="hidden" name="name" value="<?php echo $name ?>">
                        <button type="submit" class="btn btn-primary w-100" id="ButtonContact">Жіберу</button>
                    </form>
                </div>
            </div>
        </dialog>
    </div>
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h5>Контактілер</h5>
                    <p>Телефон: +7 756 456 45 21</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="modal.js"></script>
    <script src="product.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>