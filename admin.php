<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        .color-box {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to send the selected color to the server
            function sendColor(color) {
                $.ajax({
                    url: 'update_color.php',
                    type: 'POST',
                    data: { color: color },
                    success: function() {
                        console.log('Color updated successfully.');
                    },
                    error: function() {
                        console.log('Error updating color.');
                    }
                });
            }

            // Event listener for color box selection
            $('.color-box').click(function() {
                var color = $(this).css('background-color');
                sendColor(color);
            });
        });
    </script>
</head>
<body>
    <h1>Admin Page</h1>
    <p>Select a color to update the background of the index page:</p>
    <div>
        <div class="color-box" style="background-color: red;"></div>
        <div class="color-box" style="background-color: blue;"></div>
        <div class="color-box" style="background-color: green;"></div>
        <div class="color-box" style="background-color: yellow;"></div>
    </div>
</body>
</html>
