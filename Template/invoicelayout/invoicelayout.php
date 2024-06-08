<section id="main" class="public-project">
    <a style=" display: inline-block; font-size:12px; text-align: left; width: 100%; word-wrap: break-word;"> 
	 <?= $this->hook->render('Invoicer:invoicelayout:beforeinvoice') ?>
    <?= $this->render('Invoicer:invoiceayout/invoice', array(
        'project' => $project,
        'values' => $values,
    	'tasks' => $tasks,
        'editable' => false,
        'invoicelayoutprintlayout' => true,
    )) ?>
	<?= $this->hook->render('Invoicer:invoicelayout:bottomoflayout') ?>
    </a>
    <br>
</section>
