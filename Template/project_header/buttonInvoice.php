        <?php if ($this->user->isAdmin()): ?>
            <li>
                <?= $this->modal->large('file-pdf-o', t('Create Invoice'), 'InvoiceModalController', 'configInvoice', array('plugin' => 'Invoicer', 'project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>