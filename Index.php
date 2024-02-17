
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> grocery shopping center </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>grocery</a>

        <form action="" class="search-box-container">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-2">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="Home.html" target="_blank">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#contact">contact</a>
         
        </nav>

        <div class="deluser">
            <a href="Deleteuseraccount.html" target="_blank">Delete User Account</a>
        </div>
       
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="home-img.png" >
    </div>

    <div class="content">
        <span>fresh and organic</span>
        <h3>your daily need products</h3>
        <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="banner-1.jpg" alt="">
        <div class="content">
            <h3>special offer</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="banner-2.jpg" alt="">
        <div class="content">
            <h3>limited offer</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <h1 class="heading">shop by <span>category</span></h1>

    <div class="box-container">

        <div class="box">
            <h3>vegitables</h3>
            <p>upto 50% off</p>
            <img src="category-1.png" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>juice</h3>
            <p>upto 44% off</p>
            <img src="category-2.png" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>meat</h3>
            <p>upto 35% off</p>
            <img src="category-3.png" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>fruite</h3>
            <p>upto 12% off</p>
            <img src="category-4.png" alt="">
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

 <form action="carthanddler.php" method="POST">

    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-33%</span>
           
            <img src="product-1.png" alt="">
            <h3>organic banana</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity" id="quantity" type="number" min="1" max="1000" value="1" name="banana">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-45%</span>
            
            <img src="product-2.png" alt="">
            <h3>organic tomato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-52%</span>
            
            <img src="product-3.png" alt="">
            <h3>organic orange</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-13%</span>
           
            <img src="product-4.png" alt="">
            <h3>natural mild</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            
            <img src="product-5.png" alt="">
            <h3>organic grapes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
        
            <img src="product-6.png" alt="">
            <h3>natural almonts</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-55%</span>
            
            <img src="product-7.png" alt="">
            <h3>organic apple</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn"id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-30%</span>
           
            <img src="product-8.png" alt="">
            <h3>natural butter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn" id="s1">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            
            <img src="product-9.png" alt="">
            <h3>organic carrot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input class="quantity"  id="quantity" type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a onclick="location.href='carthanddler.php?price=10.50&qty=1'" target="_blank" class="btn" id="s1">add to cart</a>
        </div>

    </div>
 </form>
</section>

<!-- product section ends -->






</body>
</html>