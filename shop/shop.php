  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>The 3DToyBox Shop</title>
      <link rel="stylesheet" href="style.css" />
      <script src="script.js" defer></script>
    </head>
    <body>
      <script
        src="https://kit.fontawesome.com/805e2252e6.js"
        crossorigin="anonymous"
      ></script>
      <?php include "../header/header.php"; ?>
      <main>
        <div id="search" class="search">
          <form action="" method="get" class="search-form">
            <div class="searchbar">
              <input
                type="text"
                name="search"
                id="search"
                placeholder="Search products"
              />
              <button type="submit">
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
              </button>
            </div>
          </form>
          <button class="see-all">
            See All<i class="fa-solid fa-angles-right fa-lg"></i>
          </button>
        </div>
        <div id="categories" class="categories">
          <h2>Search Categories</h2>
          <ul>
            <li class="new-category">
              <a href="">New</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="featured-category">
              <a href="">Featured</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Miniature-Figurines</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Collectibles</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Keychains</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Home Decor</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Pins</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <a href="">Toys</a>
              <i class="fa-solid fa-chevron-right"></i>
            </li>
          </ul>
        </div>
        <div id="promotions" class="promotions" data-carousel>
          <button class="carousel-button prev" data-carousel-button="prev">
              <i class="fa-solid fa-circle-chevron-left fa-lg"></i></i>
          </button>
          <button class="carousel-button next" data-carousel-button="next">
            <i class="fa-solid fa-circle-chevron-right fa-lg"></i>
          </button>
          <div class="carousel">
            <ul data-slides>
              <li class="promotional-slide" data-active>
                <img
                  src="https://dummyimage.com/1920x1080/000/ffffff.png&text=Image+1"
                  alt=""
                  class="promotion-img"
                />
              </li>
              <li class="promotional-slide">
                <img
                  src="https://dummyimage.com/1920x1080/000/ffffff.png&text=Image+2"
                  alt=""
                  class="promotion-img"
                />
              </li>
              <li class="promotional-slide">
                <img
                  src="https://dummyimage.com/1920x1080/000/ffffff.png&text=Image+3"
                  alt=""
                  class="promotion-img"
                />
              </li>
            </ul>
          </div>
        </div>
        <div id="brands" class="brands">
          <h2>Shop By Brands</h2>
          <ul class="scroller">
              <li>
                  <img class="brand-image" src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Xbox_one_logo.svg" alt="xbox">
              </li>
              <li>
                  <img class="brand-image" src="https://upload.wikimedia.org/wikipedia/commons/0/00/PlayStation_logo.svg" alt="">
              </li>
              <li>
                  <img class="brand-image" src="https://media.discordapp.net/attachments/1085644871508971680/1103701655146467479/Batman_Logo_PNG25.png?width=551&height=310" alt="">
              </li>
              <li>
                  <img class="brand-image" src="https://upload.wikimedia.org/wikipedia/en/5/5d/Genshin_Impact_logo.svg" alt="">
              </li>
              <li>
                  <img class="brand-image" src="https://media.discordapp.net/attachments/1085644871508971680/1103750701210935469/nintendo-2-logo-png-transparent.png?width=677&height=677" alt="">
              </li>
              <li>
                  <img class="brand-image" src="https://media.discordapp.net/attachments/1085644871508971680/1103702232114929675/Demon-Slayer-Logo-PNG3.png?width=551&height=310" alt="">
              </li>
          </ul>
        </div>
        <section id="new" class="category-group new">
          <h2>New Products</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="featured" class="category-group featured">
          <h2>Featured Products</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="mini-figures" class="category-group mini-figures">
          <h2>Mini-Figures</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="Collectibles" class="category-group Collectibles">
          <h2>Collectibles</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="keychains" class="category-group keychains">
          <h2>Keychains</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="home-decor" class="category-group home-decor">
          <h2>Home Decor</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="pins" class="category-group pins">
          <h2>Pins</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <section id="toys" class="category-group toys">
          <h2>Toys</h2>
          <ul class="scroller product-scroller">
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
            <li class="product-card">
              <img src="https://media.discordapp.net/attachments/1085644871508971680/1097870354766114837/terryc_2_cute_cats_sitting_innocently_cheeks_full_of_food_larfe_9716cf63-74de-4603-922a-b24273e474e0.png?width=677&height=677" alt="product-image">
              <div class="add-to-wishlist">
                <i class="fa-regular fa-heart"></i>
              </div>
              <p class="product-name">Product Name</p>
              <p class="product-desc">
                This is the product description
              </p>
              <p class="product-price">
                R299.99
              </p>
              <button class="add-to-cart">Add to Cart</button>
            </li>
          </ul>
        </section>
        <div id="news" class="news">News</div>
      </main>
      <?php include "../footer/footer.php" ?>
    </body>
  </html>