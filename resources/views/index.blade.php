<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="" method="post">
                @csrf
                <h1>Calculator</h1>
                <div class="card">
                    <div class="input-group">
                        <label for="num1">Number 1:</label>
                        <input type="number" name="num1" id="num1" required>
                    </div>
                    <div class="input-group">
                        <label for="num2">Number 2:</label>
                        <input type="number" name="num2" id="num2" required>
                    </div>
                    <div class="input-group">
                        <label for="operation">Operation:</label>
                        <select name="operation" id="operation">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </div>

                </div>
                <button type="submit">Calculate</button>
            </form>
        </div>
    </div>

   
</body>

</html>
