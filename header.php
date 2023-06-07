<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
    }

    /* Header styles */
    .header {
      background-color: #fff;
      color: #555;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
    }

    /* Logo styles */
    .header__logo {
      font-size: 24px;
      font-weight: bold;
    }

    /* Navigation styles */
    .header__nav {
      display: flex;
      align-items: center;
    }

    /* Button styles */
    .header__button {
      background-color: transparent;
      color: #555;
      border: none;
      cursor: pointer;
      font-size: 16px;
      padding: 10px;
      margin-left: 10px;
      text-decoration: none;
      transition: color 0.3s ease;
      position: relative;
    }

    /* Button icon styles */
    .header__button i {
      margin-right: 5px;
    }

    /* Button hover styles */
    .header__button:hover {
      color: #007bff;
    }

    /* Button underline effect */
    .header__button::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #007bff;
      transform: scaleX(0);
      transition: transform 0.3s ease;
      transform-origin: bottom left;
    }

    /* Button underline effect on hover */
    .header__button:hover::before {
      transform: scaleX(1);
    }
  </style>
</head>
<body>
  <header class="header">
    <h1 class="header__logo">OSINTech</h1>
    <nav class="header__nav">
      <a href="./url.php" class="header__button"><i class="fas fa-link"></i>URL Scanner</a>
      <a href="./file.php" class="header__button"><i class="fas fa-file"></i>File Scanner</a>
      <a href="osint.html" class="header__button"><i class="fas fa-search"></i>OSINT</a>
      <a href="./index.php" class="header__button"><i class="fas fa-home"></i>HOME</a>
    </nav>
  </header>
</body>
</html>
