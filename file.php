<!DOCTYPE html>
<html>
<?php include("header.php"); ?>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            text-align: center;
        }

        h1 {
            color: #333333;
            margin-top: 0;
        }

        h2 {
            color: #555555;
        }

        .upload-form {
            margin-top: 30px;
            text-align: center;
        }

        .upload-form input[type="file"] {
            display: none;
        }

        .upload-form label {
            display: inline-block;
            padding: 12px 20px;
            background-color: #337ab7;
            color: #ffffff;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .upload-form label:hover {
            background-color: #286090;
        }

        .upload-form label::before {
            content: "\f07b";
            font-family: FontAwesome;
            margin-right: 10px;
        }

        .result-text {
            width: 100%;
            height: 200px;
            margin-top: 30px;
            padding: 10px;
            resize: none;
            border: 1px solid #dddddd;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #555555;
            font-size: 14px;
            overflow-y: auto;
        }
        body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #313131;
        }

        .files, .bgimg-2, .bgimg-3, .bgimg-4, .encryption-2 {
        position: relative;
        opacity: 0.99;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .files  {
        background-image: url("./Images/Files.png");
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

    .upload-form {
            margin-top: 30px;
            text-align: center;
        }

        .upload-form input[type="file"] {
            display: none;
        }

        .upload-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            margin: 0 auto;
            border-radius: 50%;
            background-color: #337ab7;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upload-button:hover {
            background-color: #286090;
        }

        .upload-button i {
            font-size: 80px;
        }
        input[type="file"] {
            display: none;
        }

        /* Style the custom upload button */
        .upload-file-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #337ab7;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upload-file-button:hover {
            background-color: #286090;
        }
        textarea {
            resize: none;
            width: 100%;
            height: 200px;
            padding: 10px;
            border: 1px solid #e2e2e2;
            border-radius: 4px;
            font-family: Arial, sans-serif;
            font-size: 30x;
            outline: none;
            transition: border-color 0.3s;
        }

        textarea:hover {
            border-color: #337ab7;
        }

        textarea:focus {
            border-color: #337ab7;
        }
        .textarea:read-only {
    cursor: not-allowed;
    background-color: #f9f9f9;
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body>
    <div class="files">
        <div class="caption">
            <span class="border">File Scanner</span>
        </div>
    </div>
    <div style="color: #888888;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Scan any FILE below</h3>
        <div class="search-container">
        </div>
    <div>
    <?php
    // Function to check if the uploaded file is malware using Cloudmersive API
    function checkFileForMalware($file)
    {
        // Cloudmersive API endpoint
        $url = 'https://api.cloudmersive.com/virus/scan/file';

        // API Key for Cloudmersive (replace with your own API key)
        $apiKey = 'ff52632b-8d38-4fd9-bd8a-e07daaf692ef';

        // Create a new cURL resource
        $curl = curl_init();

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'file' => curl_file_create($file)
            ),
            CURLOPT_HTTPHEADER => array(
                'Apikey: ' . $apiKey
            )
        ));

        // Execute the cURL request
        $response = curl_exec($curl);

        // Check for cURL errors
        if ($response === false) {
            echo 'cURL error: ' . curl_error($curl);
            return false;
        }

        // Get the response status code
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // Close cURL resource
        curl_close($curl);

        // Check the response status code
        if ($statusCode === 200) {
            return $response;
        } else {
            echo 'API request failed with status code: ' . $statusCode;
            return false;
        }
    }

    // Check if a file was uploaded
    if (isset($_FILES['uploaded_file'])) {
        $file = $_FILES['uploaded_file']['tmp_name'];

        // Check if the file was successfully uploaded
        if (is_uploaded_file($file)) {
            // Call the function to check the file for malware
            $result = checkFileForMalware($file);

            if ($result) {
                // Decode the API response
                $response = json_decode($result);

                // Check if the file is clean or contains viruses
                if ($response->CleanResult) {
                    $message = "The file is clean and not detected as malware.";
                } else {
                    $viruses = $response->FoundViruses;
                    $message = "The file contains viruses:";
                    foreach ($viruses as $virus) {
                        $message .= "\nFile: " . $virus->FileName . ", Virus: " . $virus->VirusName;
                    }
                }

                // Display the result in a text box
                echo '<textarea rows="4" cols="50" readonly>' . $message . '</textarea>';
            }
        } else {
            echo 'File upload failed.';
        }
    }
    ?>
    </div>
    <div class="container">
        <h2>Upload a File</h2>

        <!-- File upload form -->
        <form method="POST" enctype="multipart/form-data" class="upload-form">
            <label for="file-input" class="upload-button">
                <i class="fas fa-cloud-upload-alt"></i>
                <h1>Upload File</h1>
            </label>
            <input id="file-input" type="file" name="uploaded_file" required>
            <input type="submit" value="Scan" class="upload-file-button">
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</div>
    <div class="files">
    </div>
    
    <?php include("./footer.php")?>
</body>
</html>
