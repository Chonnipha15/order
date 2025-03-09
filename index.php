<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            color: white;
            padding: 20px;
            font-size: 24px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        section {
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .product {
            background: white;
            padding: 20px;
            margin: 15px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
            transition: transform 0.3s ease-in-out;
        }
        .product:hover {
            transform: scale(1.05);
        }
        button {
            padding: 10px 20px;
            background: #ff5733;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #c70039;
        }
    </style>
</head>
<body>
    <header>
        <h1>🛒 Trendy Online Store</h1>
    </header>
    <section>
        <div class="product">
            <h2>🎧 Product A</h2>
            <p>Price: 500 THB</p>
            <button onclick="orderProduct('Product A', 500)">Order Now</button>
        </div>
        <div class="product">
            <h2>📱 Product B</h2>
            <p>Price: 800 THB</p>
            <button onclick="orderProduct('Product B', 800)">Order Now</button>
        </div>
    </section>
    <script>
        function orderProduct(productName, price) {
            alert("You have ordered " + productName + " for " + price + " THB");
        }
    </script>
</body>
</html>
