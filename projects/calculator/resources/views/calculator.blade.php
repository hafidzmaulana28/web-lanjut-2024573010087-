<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel calculator</title>
</head>
<body>
    <h1>Kalkulator sederhana</h1>

    @if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('calculator.calculate') }}">
        @csrf
        <input type="number" name="number1" value="{{ old('number1', $number1 ?? '') }}" placeholder="angka pertama" required>

        <select name="operator" required>
            <option value="add" {{ ($operator ?? '') == 'add' ? 'selected' : '' }}>+</option>
            <option value="sul" {{ ($operator ?? '') == 'sul' ? 'selected' : '' }}>-</option>
            <option value="mul" {{ ($operator ?? '') == 'mul' ? 'selected' : '' }}>*</option>
            <option value="div" {{ ($operator ?? '') == 'div' ? 'selected' : '' }}>/</option>
        </select>

        <input type="number" name="number2" value=" {{ old('number2', $number2 ?? '') }}" placeholder="angka kedua" required>
        <button type="submit">hitung</button>
    </form>

    @isset($result)
            <h3>Hasil : {{$result}}</h3>
    @endisset
</body>
</html>