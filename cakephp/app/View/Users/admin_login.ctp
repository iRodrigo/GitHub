<?php 
echo $this->Session->flash(); 
echo $this->Session->flash('auth'); 
 
echo $this->Form->create('User'); 
  echo $this->Form->input('email'); 
  echo $this->Form->input('paswword'); 
echo $this->Form->end('Entrar'); 
?> 