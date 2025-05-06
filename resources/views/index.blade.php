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
            <form action="{{ route('calculate') }}" method="get">
                @csrf
                <h1>Calculator</h1>
                <div class="card">
                    <div class="input-group">
                        <label for="num1">Number 1:</label>
                        <input type="number" name="num1" id="num1" value="{{ old('num1') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="num2">Number 2:</label>
                        <input type="number" name="num2" id="num2" value="{{ old('num2') }}" required>
                    </div>
                    <div class="input-group">
                        <label for="operation">Operation:</label>
                        <select name="operation" id="operation">
                            <option value="addition">+</option>
                            <option value="subtraction">-</option>
                            <option value="multiplication">*</option>
                            <option value="division">/</option>
                        </select>
                    </div>

                </div>
                <div class="btn">
                    <button type="submit">Calculate</button>
                    @if(isset($num1)&& isset($num2)&&isset($result)&&isset($symbol))
                        <a href="{{ route('home') }}" class="button">New Calculation</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    @if (isset($num1) && isset($num2) && isset($result) && isset($symbol))
        <div class="result">
            <div class="cardbox">
                <h2>Result</h2>
                <div class="result-box">
                    <span>{{ $num1 }} {{ $symbol }} {{ $num2 }} = {{ $result }}</span>
                </div>
            </div>
        </div>
    @endif

</body>

</html>
