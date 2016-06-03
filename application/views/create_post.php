<?php
    echo form_open(base_url().'blog'.DIRECTORY_SEPARATOR.'create_post');

?>
    <div class="form-group">
       <?php  echo form_label('Post Title', 'post_title');
        echo form_input(array(
            'name'          => 'post_title',
            'value'         => set_value('post_title'),
            'class'         => 'form-control',
            'maxlength'     => '100',
            'size'          => '50',
            'style'         => 'width:50%'
        ));
      echo form_error('post_title');
       ?>
    </div>
    <div class="form-group">
        <?php  echo form_label('Post Desciption', 'post_description');
        echo form_textarea(array(
            'name'          => 'post_description',
            'value'         => set_value('post_description'),
            'class'         => 'form-control',
            'maxlength'     => '100',
            'size'          => '50',
            'style'         => 'width:50%'
        ));

        echo form_error('post_description');
        ?>
    </div>

  <?php echo form_submit('Add Post','Add Post',array(
      'name'          => 'submit',
      'class'         => 'btn btn-default',

  )); ?>

<?php form_close() ?>

