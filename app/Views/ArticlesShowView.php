<html lang="en">
<style>
    input[type=text] {
        width: 25%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

</style>
<body>
<button onclick="document.location='/'">Back</button>
<h1><?php echo $article->title(); ?></h1>
<p><?php echo $article->content(); ?></p>
<p>
    <small>
        <b><?php echo $article->createdAt(); ?></b>
    </small>
</p>
<hr>
<?php if (!empty($comments)) { ?>
    <ul>
        <?php foreach ($comments as $comment) { ?>
            <li>
                <b><?php echo $comment->name(); ?></b> <?php echo $comment->content(); ?><br>
                <small><?php echo $comment->createdAt(); ?></small>
            </li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <strong>No comments!</strong>
<?php } ?>
<hr>
<form method="post" action="/articles/<?php echo $article->id(); ?>/comments">
    <label for="name"></label><br>
    <input type="text" id="name" name="name" placeholder="Name.."><br>

    <label for="comment"></label><br>
    <textarea id="comment" name="comment" placeholder="Comment.." style="height: 20%; width: 25%"></textarea><br>

    <button type="submit">Comment</button>
</form>
</body>
</html>