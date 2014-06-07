<a href="/posts">一覧へ戻る</a>
<br />
<br />

<h1><?php echo h($post->title); ?></h1>
<p><small>Created: <?php echo $post->created->format('Y-m-d H:i:s'); ?></small></p>
<p><?php echo h($post->body); ?></p>

<br />
<a href="/posts">一覧へ戻る</a>
