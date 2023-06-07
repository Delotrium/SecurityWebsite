<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>
    <style>

        body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #313131;
        }

        .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
        position: relative;
        opacity: 0.99;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        }
        .bgimg-1 {
        background-image: url("./Images/homebg1.png");
        min-height: 100%;
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
        letter-spacing: 10px;
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
        </style>
        
        <!-- Container element -->
        <div class="parallax"></div>

<body>
    <div class="bgimg-1">
        <div class="caption">
            <span class="border">Welcome to OSINTech!</span>
        </div>
    </div>
    <div style="color: #888888;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">What is this?</h3>
        <p>Welcome to OSINTech, your go-to destination for online security! Our website is designed to provide you with peace of mind while browsing the internet. We understand the importance of protecting your personal information and data, which is why we offer a unique service that allows you to verify the safety of links, files, and URLs before clicking on them.

            Our easy-to-use platform enables you to insert any link, file, or URL and quickly receive a detailed report on its safety. With OSINTech, you can verify the legitimacy of any website, check the safety of downloaded files, and ensure that any links you receive are safe to click on.</p>
    </div>
    <div class="bgimg-2">
        <div class="caption">
            <span class="border">File Malware Scanner</span>
        </div>
    </div>
    <div style="color: #888888;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;"></h3>
        <p>Our Secure File Scanner is a robust online tool designed to ensure the safety of your digital files by scanning them for potential malware threats. With the ever-increasing risk of malicious software, it is essential to take proactive measures to protect your sensitive data.

            Using our service is simple and efficient. Our advanced scanning algorithms meticulously analyze files, detecting a wide range of malware, including viruses, worms, Trojans, and ransomware. We constantly update our malware database to stay ahead of emerging threats. Within seconds, you'll receive a detailed report on the scan results, enabling you to make informed decisions about the safety of your files.
            
            Our Secure File Scanner supports various file formats, including documents, images, archives, and executables. You can confidently upload different file types, knowing that our service is equipped to handle them. We prioritize your privacy and data security, treating all uploaded files with the utmost confidentiality. Once the scanning process is complete, files are automatically deleted from our servers, ensuring your data remains secure.</p>
    </div>
    <div class="bgimg-3">
        <div class="caption">
            <span class="border">URL Scanner</span>
        </div>
    </div>
    <div style="color: #888888;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;"></h3>
        <p>Our URL Scanner is a powerful online tool that helps safeguard your online experience by scanning URLs for potential threats and malicious content. In today's digital landscape, where cyber threats are rampant, it's crucial to have a reliable mechanism in place to ensure the safety of the websites you visit.

            Using our service is quick and straightforward. Simply enter the URL you want to scan, and our advanced scanning algorithms will analyze the website for any signs of malware, phishing attempts, or suspicious activity. We continuously update our threat intelligence database to stay ahead of emerging threats, providing you with the most up-to-date protection.</p>
    </div>
    <div class="bgimg-1">
    </div> 
    <?php include("footer.php"); ?>
</body>
</html>