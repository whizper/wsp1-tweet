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