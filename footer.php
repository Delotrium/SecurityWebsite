<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Footer</title>
  <style>
    /* Footer styles */
    .footer {
      position: relative;
      padding: 40px 0;
      color: #fff;
      font-family: Arial, sans-serif;
      background-color: #007bff;
      background-image: linear-gradient(to right, #007bff, #0056b3);
    }

    /* Footer overlay styles */
    .footer::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    /* Footer content styles */
    .footer__content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    /* Footer link styles */
    .footer__link {
      color: #fff;
      text-decoration: none;
      margin: 10px;
      font-size: 14px;
      transition: color 0.3s ease;
    }

    /* Footer link hover styles */
    .footer__link:hover {
      color: #ccc;
    }
  </style>
</head>
<body>
  <footer class="footer">
    <div class="footer__content">
      <a href="#" class="footer__link">Home</a>
      <a href="#" class="footer__link">About</a>
      <a href="#" class="footer__link">Services</a>
      <a href="#" class="footer__link">Contact</a>
      <a href="#" class="footer__link">Terms of Service</a>
      <a href="#" class="footer__link">Privacy Policy</a>
    </div>
  </footer>
</body>
</html>
