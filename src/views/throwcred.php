<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>embed</title>
</head>

<body>
    <script>
        const credentials = localStorage.getItem("credentials");
        // Inside the iframe
        if (credentials !== null) {
            window.parent.postMessage({ type: "localStorageChange", credentials: credentials }, "*");
        } else {

        }
    </script>
</body>

</html>