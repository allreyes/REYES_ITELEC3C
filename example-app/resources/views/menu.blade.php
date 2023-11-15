<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        h1 {
            font-size: 2em;
        }
        .menu {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .item-name {
            font-size: 1.2em;
            font-weight: bold;
        }
        .item-description {
            font-size: 1em;
        }
        .item-price {
            font-size: 1.2em;
            font-weight: bold;
            color: #ff5733;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        nav {
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Menu</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="menu">Menu</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="about">About</a></li>
            <li><a href="cart">Cart</a></li>
        </ul>
    </nav>
    <div class="menu">
        <ul>
            <li>
                <span class="item-name">Item 1</span>
                <p class="item-description">Description of Item 1</p>
                <span class="item-price">$10.99</span>
                <button class="add-to-cart">Add to Cart</button>
            </li>
            <li>
                <span class="item-name">Item 2</span>
                <p class="item-description">Description of Item 2</p>
                <span class="item-price">$12.99</span>
                <button class="add-to-cart">Add to Cart</button>
            </li>
            <li>
                <span class="item-name">Item 3</span>
                <p class="item-description">Description of Item 3</p>
                <span class="item-price">$8.99</span>
                <button class="add-to-cart">Add to Cart</button>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>

    <!-- JavaScript to handle the 'Add to Cart' button click -->
    <script>
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                // You can add your cart logic here, e.g., updating a shopping cart or displaying a confirmation message.
                alert('Item added to the cart!');
            });
        });
    </script>
</body>
</html>

