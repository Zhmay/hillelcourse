<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Posts</title>
</head>
<body>
    <div class="container">
        <h1>I'm Posts List</h1>
        <form action="#" method="post" style="margin: 0 0 30px">
            <label for="id">Id:</label>
            <input type="text" name="id" placeholder="Id">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" placeholder="Subject">
            <label for="detail">Detail:</label>
            <input type="text" name="detail" placeholder="Detail">
            <label for="author">Author:</label>
            <input type="text" name="author" placeholder="User">
            <button type="Submit">Send</button>
        </form>

        <?php if(!empty($data)) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $key => $row) : ?>
                        <tr>
                            <?php foreach($row as $value) : ?>
                                <td><?php echo $value?></td>
                            <?php endforeach; ?>
                            <td>
                                <a class="btn btn-primary btn-sm" href="update?id=<?=$row['id']?>">Update</a>
                                <a class="btn btn-danger btn-sm" href="delete?id=<?=$row['id']?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else:?>
            <p>По вашему запросу ничего не найдено</p>
        <?php endif;?>
        <div class="row">
            <div class="col-sm-12 align-self-end">
                <a class="btn btn-success btn-lg" style="width: 150px;" href="create">Create</a>
            </div>
        </div>
    </div>
</body>
</html>
