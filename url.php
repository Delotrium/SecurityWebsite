<!DOCTYPE html>
<?php include("header.php"); ?>
    <style>

        body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #313131;
        }

        .encryption-1, .bgimg-2, .bgimg-3, .bgimg-4, .encryption-2 {
        position: relative;
        opacity: 0.99;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .encryption-2  {
        background-image: url("./Images/Encryption2.png");
        min-height: 50%;
        }

        .encryption-1 {
        background-image: url("./Images/Encryption.jpg");
        min-height: 50%;
        }

        .bgimg-2 {
        background-image: url("./Images/homebg2.png");
        min-height: 400px;
        }

        .bgimg-3 {
        background-image: url("./Images/homebg3.png");
        min-height: 400px;
        }

        .bgimg-4 {
        background-image: url("./Images/homebg4.png");
        min-height: 400px;
        }

        .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
        }

        .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 2px;
        }

        h3 {
        letter-spacing: 5px;
        text-transform: uppercase;
        font: 20px "Lato", sans-serif;
        color: #111;
        }

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
        }

    /* Container styles */
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 100px;
    }
    
    /* Search container styles */
    .search-container {
      display: flex;
    }
    
    /* Search input styles */
    .search-container input[type="text"] {
      width: 300px;
      padding: 10px;
      border: 2px solid #000;
      font-size: 16px;
    }
    
    /* Search button styles */
    .search-container button {
      padding: 10px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }
    
    /* Info box styles */
    #info-box {
      margin-top: 20px;
      padding: 10px;
      border: 2px solid #000;
    }
    .highlight {
      color: red;
      font-weight: bold;
    }

        </style>
    <body>  
    <div class="encryption-1">
        <div class="caption">
            <span class="border">URL Scanner</span>
        </div>
    </div>
    <div style="color: #888888;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Scan any URL below</h3>
        <p>Insert a url in the search bar below to view OSINT information.</p>
        <div class="search-container">
    </div>
    <div class="container">
    <form method="POST" action="">
      <div class="search-container">
        <input type="text" name="search-input" placeholder="Search">
        <button type="submit" name="search-button">Search</button>
      </div>
    </form>
    </div>
    <div id="info-box"> 
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search-input"])) {
          // Your API Key
          $key = 'c7KQ45ZFs0nlCMV5XnDInI3DPSvYLfHI';
          
          // Get the URL from the search bar
          $url = $_POST["search-input"];
          
          // Create the API URL
          $apiUrl = "https://www.ipqualityscore.com/api/json/url/{$key}/{$url}";
          
          // Initialize cURL
          $curl = curl_init();
          
          // Set cURL options
          curl_setopt($curl, CURLOPT_URL, $apiUrl);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
          
          // Execute the cURL request
          $response = curl_exec($curl);
          
          // Check if the request was successful
          if ($response === false) {
              // Handle cURL error
              $error = curl_error($curl);
              echo "cURL Error: " . $error;
          } else {
              // Decode the JSON response
              $data = json_decode($response, true);
          
              // Check if the response was valid
              if (isset($data['success']) && $data['success'] === true) {
                // Display the API information
                echo "<h3>Website Safety:</h3>";
                echo "<p>Redirect: " . ($data['redirected'] ? '<span class="highlight">WEBSITE REDIRECTED</span>' : 'No') . "</p>";
                echo "<p>Suspicious: " . ($data['suspicious'] ? '<span class="highlight">WARNING: URL CONTAINS SUSPICIOUS CONTENT</span>' : 'No') . "</p>";
                echo "<p>Phishing: " . ($data['phishing'] ? '<span class="highlight">WARNING: URL CONTAINS PHISING CONTENT</span>' : 'No') . "</p>";
                echo "<p>Malware: " . ($data['malware'] ? '<span class="highlight">WARNING: URL CONTAINS MALWARE CONTENT</span>' : 'No') . "</p>";
                echo "<p>Unsafe: " . ($data['unsafe'] ? '<span class="highlight">WARNING: URL IS UNSAFE</span>' : 'No') . "</p>";
                echo "<p>Parking: " . ($data['parking'] ? '<span class="highlight">WARNING: URL IS PARKING</span>' : 'No') . "</p>";
                echo "<p>Spamming: " . ($data['parking'] ? '<span class="highlight">WARNING: URL IS SPAMMING</span>' : 'No') . "</p>";
                echo "<p>Adult: " . ($data['adult'] ? '<span class="highlight">WARNING: URL IS AN ADULT SITE</span>' : 'No') . "</p>";
                echo "<p>Category: " . ($data['category'] ?? 'N/A') . "</p>";
                echo "<p>Risk Score: " . ($data['risk_score'] ?? 'N/A') . "</p>";
                echo "<h3> Website Information:</h3>";
                echo "<p>Domain: " . ($data['domain'] ?? 'N/A') . "</p>";
                echo "<p>IP Address: " . ($data['ip_address'] ?? 'N/A') ."</p>";
                echo "<p>Country of IP: " . ($data['country_code'] ?? 'N/A') ."</p>";
                echo "<p>Language of IP: " . ($data['language_code'] ?? 'N/A') ."</p>";
                echo "<h3>Server Details:</h3>";
                echo "<p>Server Banner: " . ($data['server'] ?? 'N/A') ."</p>";
                echo "<p>Content Type: " . ($data['content_type'] ?? 'N/A') ."</p>";
                echo "<p>Status Type: " . ($data['status_code'] ?? 'N/A') ."</p>";
                echo "<p>Page Size: " . ($data['page_size'] ?? 'N/A') ." bytes</p>";
                echo "<p>Domain Age: " . ($data['domain_age'][0] ?? 'N/A') ."</p>";                   

           } else {
                // Handle API error
                echo "API Error: " . ($data['message'] ?? 'Unknown error');
            }
          
          // Close the cURL session
          curl_close($curl);
        }
      }
      ?>
    </div> <!-- Information box -->
    </div>
    <div class="encryption-2">
        <div class="caption">
        </div>
    </div>
    </body>
</html>
