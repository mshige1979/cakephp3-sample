<h1>Add Post</h1>
<?php
echo $this->Form->create('Posts');
echo $this->Form->input('Posts.title');
echo $this->Form->input('Posts.body', array('rows' => '3'));
echo $this->Form->submit('Save Post');
echo $this->Form->end();
?>

<br />
<br />
<a href="/posts">一覧へ戻る</a>
