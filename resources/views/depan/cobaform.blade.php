<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan Form</title>
</head>
<body>
    <h1>Percobaan Form</h1>
    <form action="<?= route('proses-form') ?>" method="GET">
        @csrf
        <label for="kota">Kota: </label>
        <input type="text" name="kota"><br>
        <label for="kota">Propinsi: </label>
        <input type="text" name="propinsi"><br>
        <input type="submit" value="Proses">
    </form>
</body>
</html>