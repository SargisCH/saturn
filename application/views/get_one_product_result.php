<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body><br>
<br>
<br>
          <table>
              <th>id</th>
              <th>title</th>
              <th>description</th>
              <th>image_url</th>
              <th>views</th>
                 <?php foreach ($products as $item):?>
                 <tr>
                        <td><?=$item['id'];?></td>
                        <td><?=$item['title'];?></td>
                        <td><?=$item['description'];?></td>
                        <td><?=$item['image_url'];?></td>
                        <td><?=$item['views'];?></td>    
                 </tr>
		    <?php endforeach;?>
          </table>
        
</body>
</html>