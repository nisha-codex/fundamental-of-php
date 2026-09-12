<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 500px;
            width: 500px;
        }
    </style>
</head>
<body>
    <h1>Displaying Image</h1>
    <?php $num = readline("Enter your number : ").PHP_EOL; ?>
    <?php if($num%2==0){ ?>
        <h3>CAT image will shown</h3>
        <img src="./image/dog.jpg" >
    <?php }else{ ?>
        <h3>DOG image will be shown</h3>
        <img src="./image/cat.jpg" alt="">
    <?php } ?>
</body>
</html>