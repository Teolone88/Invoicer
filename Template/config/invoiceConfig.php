<div class="panel"><h1>Invoicer Options</h1>
    <br>
    <h2><?= t('Invoice Font') ?>:</h2>
    <?= $this->form->radio('invoicer_cjk', t('Normal Font set when creating PDFs'), 1, isset($values['invoicer_cjk'])&& $values['invoicer_cjk']==1) ?>
    <?= $this->form->radio('invoicer_cjk', t('CJK Font set when creating PDFs'), 2, isset($values['invoicer_cjk'])&& $values['invoicer_cjk']==2) ?>
    <br>
    <h2><?= t('Embed Task Files Options') ?>:</h2>
	<?= $this->form->radio('invoicer_embed_task', t('Embed Files when creating a PDF for a Task'), 1, isset($values['invoicer_embed_task'])&& $values['invoicer_embed_task']==1) ?>
    <?= $this->form->radio('invoicer_embed_task', t('Do not embed Files when creating a PDF for a Task'), 2, isset($values['invoicer_embed_task'])&& $values['invoicer_embed_task']==2) ?>
    <?= $this->form->radio('invoicer_embed_projects', t('Embed Files when creating a PDF for all Open Tasks in a Project'), 1, isset($values['invoicer_embed_projects'])&& $values['invoicer_embed_projects']==1) ?>
    <?= $this->form->radio('invoicer_embed_projects', t('Do Not Embed Files when creating a PDF for all Open Tasks in a Project'), 2, isset($values['invoicer_embed_projects'])&& $values['invoicer_embed_projects']==2) ?>
    <br>
    <h2><?= t('Invoice Retrieval Options') ?>:</h2>
	<?= $this->form->radio('invoicer_attachment', t('Show PDF inline Browser'), 1, isset($values['invoicer_attachment'])&& $values['invoicer_attachment']==1) ?>
    <?= $this->form->radio('invoicer_attachment', t('Download pdf'), 2, isset($values['invoicer_attachment'])&& $values['invoicer_attachment']==2) ?>
	<?= $this->form->radio('invoicer_attachment', t('Save pdf path'), 3, isset($values['invoicer_attachment'])&& $values['invoicer_attachment']==3) ?>
	<?= $this->form->radio('invoicer_attachment', t('Return pdf path'), 4, isset($values['invoicer_attachment'])&& $values['invoicer_attachment']==4) ?>
</div>