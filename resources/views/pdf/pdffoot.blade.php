<!DOCTYPE html>
<html>
<head>
    <style>
        .page-number:after {
            content: counter(page);
        }
    </style>
</head>
<body>
    <div class="page-number"></div>
    <script>
        // Set the initial page number to 1
        var pageNumber = 1;

        // Update the page number on each page
        window.onload = function() {
            var pages = document.querySelectorAll('.page');

            for (var i = 0; i < pages.length; i++) {
                pages[i].setAttribute('data-page-number', pageNumber);
                pageNumber++;
            }
        };
    </script>
</body>
</html>
