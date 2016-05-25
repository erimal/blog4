<h1>Login</hi>
<?= $this->Form->create();?>
<?= $this->Form->input('email');?>
<?= $this->Form->input('password');?>
<?= $this->Form->button('Login');?>
<?= $this->Form->end();?>