<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php foreach ($products as $item):?>
            <input type="text" name="title" value="<?=$item['title'];?>"><br><br>
            <textarea name="description"  cols="30" rows="10"><?=$item['description'];?></textarea><br><br>
            <input type="file" value="<?=$item['image_url'];?>"><br><br>
        <input type="submit" name="submit_update">
        <?php endforeach;?>
    </form>
</body>
</html>