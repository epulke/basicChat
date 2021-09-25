
<!DOCTYPE html>
<html>
<head>
    <link href="index.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title">Previous comments</h1>
        <?php foreach($commentBase->getCommentsAll() as $comment):
        /** @var Comment $comment */?>
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="human.jpeg">
                    <img src="human.jpeg" alt="" class="be-ava-comment">
                </a>
            </div>
            <div class="be-comment-content">

				<span class="be-comment-name">
					<a><b><?= $comment->getName();?></b></a>
					</span>
                <span class="be-comment-time">
					<i class="fa fa-clock-o"></i>
					<?= $comment->getDate()?>
				</span>

                <p class="be-comment-text">
                    <?= $comment->getComment()?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>

        <form class="form-block" method="post" action="#">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group fl_icon">
                        <input class="form-input" type="text" placeholder="Your name" name="usrname">
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea class="form-input" required="" placeholder="Your text" name="comment"></textarea>
                    </div>
                </div>
                <input type="submit" name="submit">

            </div>
        </form>
    </div>
</div>

</body>
</html>
