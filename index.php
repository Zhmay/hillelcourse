<?php
    session_start();

    if(!empty($_POST)) {
        $_SESSION = $_POST;
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-info">
            <tr>
                <th>Имя</th>
                <th>Пароль</th>
                <th>E-mail</th>
                <th>Дата рождения</th>
                <th>Пол</th>
                <th>Любимый цвет</th>
            </tr>

            <tr>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['name']?></td>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['password']?></td>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['email']?></td>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['date']?></td>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['gender']?></td>
                <td><?php if(!empty($_SESSION)) echo $_SESSION['color']?></td>
            </tr>
        </table>
        <div class="holder" style="max-width: 560px; margin: 0 auto">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date of birth</label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>
                <div class="mb-3">
                    <div class="form-label">Gender</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="male" checked="checked">
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Favorite color</label>
                    <input type="text" name="color" class="form-control" id="color">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
