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
          <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Share
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Facebook</a>
      <a class="dropdown-item" href="#">Instagram</a>
      <a class="dropdown-item" href="#">Snapchat</a>
    </div>
  </div>
          </div>
    </section>