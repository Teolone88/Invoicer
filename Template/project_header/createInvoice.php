<div class="page-header">
    <h2><?= 'Invoice for Project: '. $project['name'] ?></h2>
</div>
<form action="<?= $this->url->href('InvoiceModalController', 'invoiceProjectOpen', array('plugin' => 'Invoicer', 'project_id' => $project['id'], 'values' => $values)) ?>" method="post" autocomplete="off">
	<?= $this->form->csrf() ?>
	<?= $this->form->label(t('Reference'), 'invRef') ?>
	<?= $this->form->text('invRef', $values, array('required'), array('placeholder="'.t('invRef').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->label(t('From'), 'invFrom') ?>
	<?= $this->form->text('invFromName', $values,  array('required'), array('placeholder="'.t('Name').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invFromAddress1', $values,  array('required'), array('placeholder="'.t('Address 1').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invFromAddress2', $values,  array('required'), array('placeholder="'.t('Address 2').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invFromCityZip', $values,  array('required'), array('placeholder="'.t('City & Zip').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invFromCountry', $values,  array('required'), array('placeholder="'.t('Country').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invFromVAT', $values,  array('required'), array('placeholder="'.t('VAT').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->label(t('To'), 'invFrom') ?>
	<?= $this->form->text('invToName', $values,  array('required'), array('placeholder="'.t('Name').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invToAddress1', $values,  array('required'), array('placeholder="'.t('Address 1').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invToAddress2', $values,  array('required'), array('placeholder="'.t('Address 2').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invToCityZip', $values,  array('required'), array('placeholder="'.t('City & Zip').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invToCountry', $values,  array('required'), array('placeholder="'.t('Country').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->text('invToVAT', $values,  array('required'), array('placeholder="'.t('VAT').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->label(t('Date'), 'invDate') ?>
	<?= $this->form->date('invDate', $values, array('required'), array('placeholder="'.t('Invoice Date (Y-m-d)').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->label(t('Due'), 'invDue') ?>
	<?= $this->form->date('invDue', $values, array('required'), array('placeholder="'.t('Due Date (Y-m-d)').'"', 'aria-label="'.t('Search').'"')) ?>
	<?= $this->form->label(t('Add'), 'invAdd') ?>
	<?= $this->form->select2(true, 'invAdd', $values['invAdd'], array('required'), array('placeholder="'.t('Add Item').'"', 'aria-label="'.t('Search').'"')) ?>
    <?= $this->modal->submitButtons() ?>
</form>
<br><br>
<?php
