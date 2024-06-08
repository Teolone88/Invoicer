<?php if ($this->user->hasProjectAccess('metadata', 'index', $project['id'])): ?>
    <ul>
        <li>
        <i class="fa fa-file-pdf-o fa-fw"></i>
        <?= $this->url->link(t('Create Invoice'), 'InvoiceModalController', 'printProjectInvoice', ['plugin' => 'Invoicer', 'task_id' => $task['id'], 'project_id' => $project['id']]) ?>
        </li>
    </ul>
<?php endif ?>