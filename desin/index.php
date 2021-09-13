<!DOCTYPE html>


<html>

<head>
    <title>
        desin
    </title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>user</th>
            <th>email</th>
        </tr>
         <?php  include "conecct_db.php";?>

        <?php $data = Alidata(); ?>

        <?php foreach ($data as $user) : ?>
            <tr>
                <td> <?= $user['id'] ?> </td>
                <td> <?= $user['name'] ?> </td>
                <td> <?= $user['email'] ?> </td>
            </tr>
        <?php endforeach;   ?>
        
    </table>
</body>

</html>