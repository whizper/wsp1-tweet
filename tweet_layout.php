<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($result as $row): ?>
        <section class="card mt-4">
            <h5 class="card title pl-4 mb-0">
                <?= $row['name'] ?>
                <small>
                    <?= $row['created_at'] ?>
                </small>
            </h5>
        <div class="card-body">
          <a href="tweet.php?id=<?=$row['id']?>"> 
            <p class="card-text"><?= $row['body']?></p>
          </a>
        </div>
        <div class="card-footer text-muted">
          <button type="button" class="btn btn-primary">Like</button>
          <button type="button" class="btn btn-primary">Comment</button>
          <button type="button" class="btn btn-primary">Share</button>
        </div>
        </section>
    <?php endforeach ?>
</body>
</html>