<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
     // Hard code the user for now.
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>