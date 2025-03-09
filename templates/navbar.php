<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔧 Tech Tools & Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: white;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: white;
            padding: 15px;
        }
        .navbar a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 10px;
            display: block;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        .section {
            background-color: #1e1e1e;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        }
        .section h2 {
            color: #4CAF50;
        }
      
    </style>
</head>
<body>
    <div class="navbar">
        <div class="dropdown">
            <a href="#">Products</a>
            <div class="dropdown-content">
                <a href="#">Product 1</a>
                <a href="#">Product 2</a>
                <a href="#">Product 3</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Documents</a>
            <div class="dropdown-content">
                <a href="#">Docs 1</a>
                <a href="#">Docs 2</a>
                <a href="#">Docs 3</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Manufacturing</a>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Solution</a>
            <div class="dropdown-content">
                <a href="#">Solution 1</a>
                <a href="#">Solution 2</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Support</a>
            <div class="dropdown-content">
                <a href="#">FAQ</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

</body>
</html>
