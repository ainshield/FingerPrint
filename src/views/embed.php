<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>embed</title>
</head>

<body>
    <script>
        // Inside the iframe
        const credentials = localStorage.getItem("credentials");
        window.parent.postMessage({ type: "localStorageChange", credentials: credentials }, "*");

    </script>
</body>

</html>