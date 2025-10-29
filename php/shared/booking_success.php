<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <style>
        body {
            background-color: #f0f9ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 100, 255, 0.2);
        }

        h1 {
            color: #28a745;
            margin-bottom: 10px;
            font-size: 2em;
        }

        p {
            color: #555;
            font-size: 1.1em;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 25px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .checkmark {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkmark">&#10004;</div>
        <h1>Booking Confirmed!</h1>
        <p>Thank you for booking with Road Squad. Your ride has been successfully scheduled.</p>
        <a class="btn" href="cars.php">Back to Cars</a>
    </div>
</body>
</html>
