<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'WatchShop'; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

        $sql = "SELECT id, name, description, price, image FROM products";
        $result = $conn->query($sql);   
?>

<?php require_once "../template/header.php" ?>

<main class="main">
    <section class="main__header-name">
        <div class="container">
            <div class="header-name--inner">
                <h1>Products</h1>
                <p>356 Total Products</p>
            </div>
        </div>
    </section>

    <aside class="main__search search">
        <div class="container">
            <div class="search--inner">
                <div class="search__type search__default">
                    <h6>Search</h6>
                    <input type="text" placeholder="Type Here">
                </div>
                <div class="search__line"></div>
                <div class="search__select search__default">
                    <h6>Select Products</h6>
                    <div class="search__select-button">
                        <div class="saerch__select-item"><button>Watches</button></div>
                        <div class="saerch__select-item"><button>Straps</button></div>
                    </div>
                </div>
                <div class="search__line"></div>
                <div class="search__price search__default">
                    <h6>Price Range</h6>
                    <div class="search__price-button">
                        <button>50$</button>
                        <button>100$</button>
                        <button>150$</button>
                    </div>
                </div>
                <div class="search__line"></div>
                <div class="search__color search__default">
                    <h6>Case Color</h6>
                    <div class="searct__color-button">
                        <button style="background: linear-gradient(211deg, #555 0%, #0a0a0a 100%);"></button>
                        <button style="background: linear-gradient(211deg, #e3e3e3 0%, #7b838f 100%);"></button>
                        <button style="background: linear-gradient(211deg, #58b2ce 0%, #023c96 100%);"></button>
                    </div>
                </div>
                <div class="search__line"></div>
                <div class="search__filter search__default">
                    <div class="search__filter-color">
                        <button style="background: linear-gradient(211deg, #d39138 0%, #b95371 100%);"></button>
                        <button style="background: linear-gradient(211deg, #2d9b87 0%, #af29cb 100%);"></button>
                        <button style="background: linear-gradient(211deg, #2184ce 0%, #9020ad 100%);"></button>
                        <button style="background: linear-gradient(211deg, #707885 0%, #363636 100%);"></button>
                    </div>
                    <button class="search__filter-button">Apply Filters</button>
                </div>
            </div>
        </div>
    </aside>

    <section class="main__showcase showcase">
        <div class="container">
            <div class="showcase-inner">
                <div class="showcase__products">
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<a href='#' class='showcase__products-item'>";
                            echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                            echo "<h2>" . $row['name'] . "</h2>";
                            echo "<p>" . $row['description'] . "</p>";
                            echo "<p>Цена: $" . $row['price'] . "</p>";
                            echo "</a>";
                        }
                    } else {
                        echo "<p>Товары не найдены.</p>";
                    }
                    $conn->close();
                ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "../template/footer.php" ?>