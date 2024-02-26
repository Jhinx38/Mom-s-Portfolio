<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <style>
        .headers {
            background-color: blue;
            height: 130px;
        }

        #logo {
            width: 100px;
            height: 70px;
        }

        button {
            border: 0;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center headers">
        <ul class="nav">
            <li class="d-flex justify-content-center align-items-center">
                <img src="items/ezLogo.jpg" alt="Logo" id="logo">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>

    <!-- Bootstrap JS (optional, but required if you're using Bootstrap JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>