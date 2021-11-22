<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Post Update</title>
</head>
<body>
<div class="container">
    <h1>Post Update</h1>
    <form action="#" name="update" method="post" style="margin: 0 0 30px">
        <input type="text" name="id" value="<?=$data['id']?>" hidden>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" value="<?=$data['subject']?>" placeholder="Subject">
        <label for="detail">Detail:</label>
        <input type="text" name="detail" value="<?=$data['detail']?>" placeholder="Detail">
        <label for="author">Author:</label>
        <input type="text" name="author" value="<?=$data['author']?>" placeholder="User">
        <button class="btn btn-primary" type="Submit">Update</button>
    </form>
</div>
</body>
</html>


