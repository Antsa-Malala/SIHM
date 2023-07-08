<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="padding-left:30px;font-size:20px">
        <h3>Name : </h3><p> <?php echo $client['name'] ?> </p>  
        <h3>Adress : </h3><p> <?php echo $client['address'] ?> </p>
        <h3>Zip Code : </h3><p> <?php echo $client['zip code'] ?> </p>
        <h3>Phone : </h3><p> <?php echo $client['phone'] ?> </p>
        <h3>City :  </h3><p> <?php echo $client['city'] ?> </p>
        <h3>Country :  </h3><p> <?php echo $client['country'] ?> </p>
        <h3>Notes : </h3><p> <?php echo $client['notes'] ?> </p>
        <h3>SID :</h3><p> <?php echo $client['SID'] ?> </p> 
    </div>
</body>
</html>