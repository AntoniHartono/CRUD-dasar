<h1>Ubah Artikel</h1>
 
<?php
echo $this->Form->create('Review',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('order');
echo $this->Form->input('product');
echo $this->Form->input('user');
echo $this->Form->input('rating');
echo $this->Form->input('review');
echo $this->Form->end('Simpan');
?>