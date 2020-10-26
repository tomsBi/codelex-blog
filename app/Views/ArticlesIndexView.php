<h1>Articles</h1>

<?php foreach ($articles as $article): ?>
    <h3>
        <a href="/articles/<?php echo $article->id(); ?>">
            <?php echo $article->title(); ?>
        </a>
    </h3>
    <p><?php echo $article->content(); ?></p>
    <p>
        <small>
            <?php echo $article->createdAt(); ?>
        </small>
    </p>
    <form action="/articles/<?php echo $article->id(); ?>" method="post">
        <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
    </form>
<?php endforeach; ?>