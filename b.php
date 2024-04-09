<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/fastbootstrap@2.2.0/dist/css/fastbootstrap.min.css" rel="stylesheet" integrity="sha256-V6lu+OdYNKTKTsVFBuQsyIlDiRWiOmtC8VQ8Lzdm2i4=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        h1 {
            transition: .2s;
            cursor: pointer;

        }

        h1:hover {
            font-size: 50px;
            color: #fff;
            transition: .2s;
            cursor: pointer;

        }

        .toast-container {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding: 20px;
        }

        .text-bg-success {
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: .2s;
            display: inline-block;
            margin-top: 20px;
        }

        .fa-circle-check {
            color: #fff;
            margin-right: 10px;
        }

        .badge {
            transition: box-shadow 0.2s ease-in-out;
            padding: 0px 6px;
            border-radius: 10px;
        }

        .badge.clicked {
            box-shadow: 0 0 300px white;
        }

        body {
            user-select: none;
        }
    </style>
</head>

<body style="background-color: #000000;  font-family: Inter, sans-serif;">