<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
    <style>
        body {
            background-color: black;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to update the background color
            function updateBackgroundColor(color) {
                $('body').css('background-color', color);
            }

            // Long polling to continuously check for color updates
            function checkForUpdates() {
                $.ajax({
                    url: 'update_status.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.updateAvailable) {
                            updateBackgroundColor(response.color);
                        }
                        checkForUpdates();
                    },
                    error: function() {
                        checkForUpdates();
                    }
                });
            }

            // Start checking for updates
            checkForUpdates();
        });
    </script>
</head>
<body>
    <h1>Index Page</h1>
    <p>This is the index page with a real-time background color update.</p>
</body>
</html>
