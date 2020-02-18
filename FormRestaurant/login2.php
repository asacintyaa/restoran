<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<fieldset>
    <table>
    <tr>
    <td>u s e r n a m e</td>   <td>: <?php echo $_POST['username'] ?? '-' ?></td> 
    </tr>

    <tr>
    <td>p a s s w o r d</td>    <td>: <?php echo $_POST ['password'] ?? '-' ?></td>
    </tr>
    
    </table>
    </fieldset>
</body>
</html>