<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>

<div>
    <p>
        <div>Tahun</div>
        <select name="" id="">
            <?php for ($i=1980; $i <= date("Y"); $i++) : ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
    </p>
</div>
    
</body>
</html>