<div class="page-header">
    <h2><?= 'Invoice for Project: '. $project['name'] ?></h2>
</div>
<form action="<?= $this->url->href('InvoiceController', 'create', array('project_id' => $project['id'])) ?>" method="post" autocomplete="off">
	<?= $this->form->csrf() ?>
	<?= $this->form->label(t('Reference'), 'invRef') ?>
	<?= $this->form->text('invRef', $values, array('required')) ?>
	<br><br>
	<?= $this->form->label(t('From'), 'invFrom') ?>
	<?= $this->form->text('invFrom', $values,  array('required')) ?>
	<br><br>
	<?= $this->form->label(t('To'), 'invTo') ?>
	<?= $this->form->text('invTo', $values, array('required')) ?>
	<br><br>
	<?= $this->form->label(t('Date'), 'invDate') ?>
	<?= $this->form->text('invDate', $values, array('required')) ?>
	<br><br>
	<?= $this->form->label(t('Due'), 'invDue') ?>
	<?= $this->form->text('invDue', $values, array('required')) ?>
	<br><br>
	<?= $this->form->label(t('Add'), 'invAdd') ?>
	<?= $this->form->text('invAdd', $values, array('required')) ?>
    <?= $this->modal->submitButtons() ?>
</form>

