<?php

namespace Kanboard\Plugin\Invoicer\Controller;

require __DIR__.'/../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
use Kanboard\Controller\BaseController;
use Kanboard\Model\UserMetadataModel;
use Kanboard\Model\ProjectModel;
use Kanboard\Model\CommentModel;
use Kanboard\Model\TaskLinkModel;
use Kanboard\Model\ColumnModel;
use Kanboard\Model\ColorModel;
use Kanboard\Model\TaskTagModel;
use Kanboard\Model\TaskFileModel;
use Kanboard\Model\TaskModel;
use Kanboard\Filter\TaskProjectFilter;
/*use FPDF; */
/* include __DIR__.'/../vendor/konekt/pdf-invoice/src/InvoicePrinter.php';*/
/* include __DIR__.'/../vendor/setasign/phpinvoice.php'; */

class InvoiceModalController extends BaseController
{

    public function printProjectInvoice($project, $values)
    {
    
    	$options = new Options();
		$options->set('defaultFont', 'Helvetica');
    	$options->set('defaultMediaType', 'all');
		$options->set('isFontSubsettingEnabled', true);
    	$options->set('isHtml5ParserEnabled', true);
		$dompdf = new Dompdf($options);
        $dompdf->setBasePath('/var/www/app/data/');
    
    	/* $html_all = '<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>body { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; text-align: center; color: #777; } body h1 { font-weight: 300; margin-bottom: 0px; padding-bottom: 0px; color: #000; } body h3 { font-weight: 300; margin-top: 10px; margin-bottom: 20px; font-style: italic; color: #555; } body a { color: #06f; } .invoice-box { max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); font-size: 16px; line-height: 24px; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; color: #555; } .invoice-box table { width: 100%; line-height: inherit; text-align: left; border-collapse: collapse; } .invoice-box table td { padding: 5px; vertical-align: top; } .invoice-box table tr td:nth-child(2) { text-align: right; } .invoice-box table tr.top table td { padding-bottom: 20px; } .invoice-box table tr.top table td.title { font-size: 45px; line-height: 45px; color: #333; } .invoice-box table tr.information table td { padding-bottom: 40px; } .invoice-box table tr.heading td { background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; } .invoice-box table tr.details td { padding-bottom: 20px; } .invoice-box table tr.item td { border-bottom: 1px solid #eee; } .invoice-box table tr.item.last td { border-bottom: none; } .invoice-box table tr.total td:nth-child(2) { border-top: 2px solid #eee; font-weight: bold; } @media only screen and (max-width: 600px) { .invoice-box table tr.top table td { width: 100%; display: block; text-align: center; } .invoice-box table tr.information table td { width: 100%; display: block; text-align: center; } }</style><body>'; */
		$html_style = '<style>body { font-size: 0.75rem; font-weight: 400; color: #000000; margin: 0 auto; position: relative; } #pspdfkit-header { font-size: 0.625rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 400; color: #717885; margin-top: 1rem; margin-bottom: 1rem; width: 100%; } .header-columns { display: flex; justify-content: space-between; padding-left: 2.5rem; padding-right: 2.5rem; } .logo { height: 1.5rem; width: auto; margin-right: 1rem; } .logotype { display: flex; align-items: center; font-weight: 700; } h2 { font-size: 1.25rem; font-weight: 400; } h4 { font-size: 1rem; font-weight: 400; } .page { margin-left: 5rem; margin-right: 5rem; } .intro-table { display: flex; justify-content: space-between; margin: 2rem 0 2rem 0; border-top: 1px solid #000000; border-bottom: 1px solid #000000; } .intro-form { display: flex; flex-direction: column; border-right: 1px solid #000000; width: 50%; } .intro-table-title { font-size: 0.625rem; margin: 0; } .intro-form-item { padding: 1.25rem 1.5rem 1.25rem 1.5rem; } .intro-form-item:first-child { padding-left: 0; } .intro-form-item:last-child { padding-right: 0; } .intro-form-item-border { padding: 0.75rem 0 0.75rem 0.75rem; border-bottom: 1px solid #000000; } .intro-form-item-border:last-child { border-bottom: none; } .form { display: flex; flex-direction: column; margin-top: 1rem; } .no-border { border: none; } .border { border: 1px solid #000000; } input {border:0;outline:0;} input:focus {outline:none!important;} .border-bottom { border: 1px solid #000000; border-top: none; border-left: none; border-right: none; } .signer { display: flex; justify-content: space-between; gap: 2.5rem; margin: 1rem 0 1rem 0; } .signer-item { flex-grow: 1; } input { text-align: left; width: 100%; } textarea#notes { text-align: left; height: 4rem; border:0; outline:0; } input#signature { height: 1rem; border:0;outline:0; outline:none!important; } .intro-text { width: 60%; } .table-box table, .summary-box table { width: 100%; font-size: 0.625rem; } .table-box td:first-child { width: 10%; } .summary-box td:first-child { width: 50%; } .table-box td:last-child, .summary-box td:last-child { text-align: right; } .table-box table td { border-top: 1px solid #000000; border-bottom: 1px solid #000000; height: 1.5rem; } .table-box table tr.item td{ border-bottom: 1px solid #000000; height: 1.5rem; } .table-box table tr.item td, .summary-box table tr.item td { border-bottom: 1px solid #d7dce4; height: 1.5rem; } .summary-box table tr.no-border-item td { border-bottom: none; height: 1.5rem; } .summary-box table tr.total td { border-top: 1px solid #000000; border-bottom: 1px solid #000000; height: 1.5rem; } .summary-box table tr.item td:first-child, .summary-box table tr.total td:first-child { border: none; height: 1.5rem; } #pspdfkit-footer { font-size: 0.5rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 500; color: #717885; margin-top: 1rem; position: absolute; width: 100%; } .footer-columns { display: flex; justify-content: space-between; padding-left: 2.5rem; padding-right: 2.5rem; } .input#addRow { color: green; font-weight: bold; } .input#rm { color: red; font-weight: bold; }</style>';
    	$html_all = '<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Content-Security-Policy" content="font-src \'self\' data:;" />' . '<link rel="stylesheet" href="../../../css/invoice.css">';
    	$script = '<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>';
    	$layout = 'Invoicer:invoicelayout/invoicelayout';
        $status = array(TaskModel::STATUS_OPEN);
    	$task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.title');
    	$values['invAdd'] = array_intersect_key(array_values($task_ids), array_flip($values['invAdd']));
    	// Turn on output buffering

    	$html = $this->template->render($layout, array(
                'project' =>  $project,
        		'values'  => $values,
                'no_layout' => true,
                'auto_refresh' => true,
                'not_editable' => true,
            ));
    	
    	ob_start();
    	$html_all = $html_all . '<body>' . $html;
    	ob_get_clean();

        $dompdf->loadHtml($html_all);
    	$dompdf->render();
		/*echo $html_all;*/
		/*file_put_contents(dirname(__DIR__, 3) . '/data/files/Invoicer/Invoice.html', $html_all);*/
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('a4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();
    	$output = $dompdf->output();
        // Output the generated PDF to Browser inline or as PDF download
         $dompdf->stream($project['id'] . '_' . $project['name'] . '.pdf', array("Attachment" => false)); 
    	exit();
    }

    public function configInvoice()
    {
    	$status = array(TaskModel::STATUS_OPEN);
    	$project = $this->getProject();

    	$task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.title');
    	
        $this->response->html($this->template->render('Invoicer:project_header/createInvoice', array(
        'project' => $project,
        'values' => array(
            	'invRef' 			=> $project['name'] . '-' . $project['id'],
            	'invFromName' 		=>  '1',
            	'invFromAddress1'	=>  '2',
            	'invFromAddress2' 	=>  '3',
            	'invFromCityZip' 	=>  '4',
            	'invFromCountry' 	=>  '5',
            	'invFromVAT' 		=>  '6',
            	'invToName' 		=>  '7',
            	'invToAddress1' 	=>  '8',
            	'invToAddress2' 	=>  '9',
            	'invToCityZip' 		=>  '10',
            	'invToCountry'		=>  '11',
            	'invToVAT' 			=>  '12',
            	'invDate' 			=> date('Y-m-d'),
            	'invDue' 			=> date('Y-m-d',strtotime('+30 days')),
        		'invAdd' 			=> $task_ids,
            ),	
        )));
    }

    public function invoiceProjectOpen($project = null, array $values = array())
    {
        $project = $this->getProject();
    	$values =  $this->request->getValues();                     
                           
    	$this->flash->success(t('Data Submitted'));
        self::printProjectInvoice($project, $values);
    }

    public function printInvoice()
    {
    	$file = 'invRef.pdf';
        $file = dirname(__DIR__, 3) . '/data/files/Invoicer/' . $file;
    	$invoice = new InvoicePrinter('legal', '€', 'en');
 		$invoice->addTitle(html_entity_decode('test' ,ENT_QUOTES, 'windows-1252'));
    	$invoice->SetFont('Courier','',16);
		/* Header Settings */
  		/*$invoice->setLogo('/var/www/begrit.solutions/client-area/plugins/Invoicer/Assets/images/begrit-solutions-high-resolution-logo-transparent.png');*/
  		/*$invoice->setColor('#f9d500');*/
  		/*$invoice->setType(html_entity_decode('Consultancy Services' ,ENT_QUOTES, 'windows-1252'));  */
  		/*$invoice->setReference(html_entity_decode('invRef' ,ENT_QUOTES, 'windows-1252'));  */
  		$invoice->setDate(date('Y-m-d'));
  		$invoice->setDue(date('Y-m-d',strtotime('+30 days')));
  		/* Adding Items in table */
  		$invoice->addItem(html_entity_decode('AMD Athlon' ,ENT_QUOTES, 'windows-1252') , html_entity_decode('cawabonga' ,ENT_QUOTES, 'windows-1252')  , 6, false, 580, false, 3480);
  		/* Add totals */
  		$invoice->addTotal(html_entity_decode('total' ,ENT_QUOTES, 'windows-1252')  , 9460);
  		/* Render */  
    /* https://stackoverflow.com/questions/11731425/data-extraction-from-filter-flatedecode-pdf-stream-in-php */
    /* https://stackoverflow.com/questions/51524318/how-to-decode-pdf-stream-to-downloadable-file-with-php */
    /* https://stackoverflow.com/questions/42963585/parsing-raw-pdf-data-to-create-pdf-using-php */
  	 	$invoice->render($file,'F'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */

	}

	public function downloadInvoice(array $values = array())
    {	
    	self::printInvoice();
    	$file = 'invRef.pdf';
        $filepath = '/Invoicer/' . $file;
        // Test whether the file name contains illegal characters
    	// $this->response->withFileDownload($filepath);  
    	try {
            if (! empty($file)) {
            	base64_encode($this->objectStorage->get($filepath));
            }
        } catch (ObjectStorageException $e) {
            $this->logger->error($e->getMessage());
        }

        return '';
    
   
    }

    public function printProjectOpen()
    {
        $status = array(TaskModel::STATUS_OPEN);

        $project = $this->getProject();
        $task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.id');
        self::printProject($task_ids, $project);
    }

    public function printProjectClosed()
    {
        $status = array(TaskModel::STATUS_CLOSED);

        $project = $this->getProject();
        $task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.id');
        self::printProject($task_ids, $project);
    }

    public function printProjectPerUser()
    {
        $status = array(TaskModel::STATUS_OPEN, TaskModel::STATUS_CLOSED);

        $project = $this->getProject();
        $user = $this->getUser();
        $task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->eq(TaskModel::TABLE.'.owner_id', $user['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.id');
        self::printProject($task_ids, $project);
    }

    public function printProjectPerUserOpen()
    {
        $status = array(TaskModel::STATUS_OPEN);

        $project = $this->getProject();
        $user = $this->getUser();
        $task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->eq(TaskModel::TABLE.'.owner_id', $user['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.id');
        self::printProject($task_ids, $project);
    }

    public function printProjectPerUserClosed()
    {
        $status = array(TaskModel::STATUS_CLOSED);

        $project = $this->getProject();
        $user = $this->getUser();
        $task_ids = $this->db
        ->table(TaskModel::TABLE)
        ->eq(TaskModel::TABLE.'.project_id', $project['id'])
        ->eq(TaskModel::TABLE.'.owner_id', $user['id'])
        ->in(TaskModel::TABLE.'.is_active', $status)
        ->asc(TaskModel::TABLE.'.id')
        ->findAllByColumn(TaskModel::TABLE.'.id');
        self::printProject($task_ids, $project);
    }

    public function printProjectByFilter()
    {
        $project = $this->getProject();
        $search = $this->helper->projectHeader->getSearchQuery($project);
        $tasks = $this->taskLexer->build($search)->withFilter(new TaskProjectFilter($project['id']))->format($this->taskListFormatter);
        $task_ids = array();
        foreach ($tasks as $task) {
            array_push($task_ids, $task['id']);
        }
        self::printProject($task_ids, $project);
    }

    public function printProject($task_ids, $project)
    {
        // instantiate and use t$options = new Options();
        $options = new Options();
        $options->set('isRemoteEnabled', 'true');
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('fontHeightRatio', '.9');
        $options->set('isJavascriptEnabled', 'true');
        set_time_limit(600);
        $dompdf = new Dompdf($options);
        $dompdf->setBasePath('/var/www/app/data/');

        if ($this->configModel->get('task2pdf_cjk', 1) == 1) {
            $html_all = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style>.task-board.color-yellow, .task-summary-container.color-yellow, .color-picker-square.color-yellow, .task-board-category.color-yellow, .table-list-category.color-yellow, .task-tag.color-yellow {background-color: rgb(245, 247, 196);border-color: rgb(223, 227, 45)}td.color-yellow { background-color: rgb(245, 247, 196)}.table-list-row.color-yellow {border-left: 5px solid rgb(223, 227, 45)}.task-board.color-blue, .task-summary-container.color-blue, .color-picker-square.color-blue, .task-board-category.color-blue, .table-list-category.color-blue, .task-tag.color-blue {background-color: rgb(219, 235, 255);border-color: rgb(168, 207, 255)}td.color-blue { background-color: rgb(219, 235, 255)}.table-list-row.color-blue {border-left: 5px solid rgb(168, 207, 255)}.task-board.color-green, .task-summary-container.color-green, .color-picker-square.color-green, .task-board-category.color-green, .table-list-category.color-green, .task-tag.color-green {background-color: rgb(189, 244, 203);border-color: rgb(74, 227, 113)}td.color-green { background-color: rgb(189, 244, 203)}.table-list-row.color-green {border-left: 5px solid rgb(74, 227, 113)}.task-board.color-purple, .task-summary-container.color-purple, .color-picker-square.color-purple, .task-board-category.color-purple, .table-list-category.color-purple, .task-tag.color-purple {background-color: rgb(223, 176, 255);border-color: rgb(205, 133, 254)}td.color-purple { background-color: rgb(223, 176, 255)}.table-list-row.color-purple {border-left: 5px solid rgb(205, 133, 254)}.task-board.color-red, .task-summary-container.color-red, .color-picker-square.color-red, .task-board-category.color-red, .table-list-category.color-red, .task-tag.color-red {background-color: rgb(255, 187, 187);border-color: rgb(255, 151, 151)}td.color-red { background-color: rgb(255, 187, 187)}.table-list-row.color-red {border-left: 5px solid rgb(255, 151, 151)}.task-board.color-orange, .task-summary-container.color-orange, .color-picker-square.color-orange, .task-board-category.color-orange, .table-list-category.color-orange, .task-tag.color-orange {background-color: rgb(255, 215, 179);border-color: rgb(255, 172, 98)}td.color-orange { background-color: rgb(255, 215, 179)}.table-list-row.color-orange {border-left: 5px solid rgb(255, 172, 98)}.task-board.color-grey, .task-summary-container.color-grey, .color-picker-square.color-grey, .task-board-category.color-grey, .table-list-category.color-grey, .task-tag.color-grey {background-color: rgb(238, 238, 238);border-color: rgb(204, 204, 204)}td.color-grey { background-color: rgb(238, 238, 238)}.table-list-row.color-grey {border-left: 5px solid rgb(204, 204, 204)}.task-board.color-brown, .task-summary-container.color-brown, .color-picker-square.color-brown, .task-board-category.color-brown, .table-list-category.color-brown, .task-tag.color-brown {background-color: #d7ccc8;border-color: #4e342e}td.color-brown { background-color: #d7ccc8}.table-list-row.color-brown {border-left: 5px solid #4e342e}.task-board.color-deep_orange, .task-summary-container.color-deep_orange, .color-picker-square.color-deep_orange, .task-board-category.color-deep_orange, .table-list-category.color-deep_orange, .task-tag.color-deep_orange {background-color: #ffab91;border-color: #e64a19}td.color-deep_orange { background-color: #ffab91}.table-list-row.color-deep_orange {border-left: 5px solid #e64a19}.task-board.color-dark_grey, .task-summary-container.color-dark_grey, .color-picker-square.color-dark_grey, .task-board-category.color-dark_grey, .table-list-category.color-dark_grey, .task-tag.color-dark_grey {background-color: #cfd8dc;border-color: #455a64}td.color-dark_grey { background-color: #cfd8dc}.table-list-row.color-dark_grey {border-left: 5px solid #455a64}.task-board.color-pink, .task-summary-container.color-pink, .color-picker-square.color-pink, .task-board-category.color-pink, .table-list-category.color-pink, .task-tag.color-pink {background-color: #f48fb1;border-color: #d81b60}td.color-pink { background-color: #f48fb1}.table-list-row.color-pink {border-left: 5px solid #d81b60}.task-board.color-teal, .task-summary-container.color-teal, .color-picker-square.color-teal, .task-board-category.color-teal, .table-list-category.color-teal, .task-tag.color-teal {background-color: #80cbc4;border-color: #00695c}td.color-teal { background-color: #80cbc4}.table-list-row.color-teal {border-left: 5px solid #00695c}.task-board.color-cyan, .task-summary-container.color-cyan, .color-picker-square.color-cyan, .task-board-category.color-cyan, .table-list-category.color-cyan, .task-tag.color-cyan {background-color: #b2ebf2;border-color: #00bcd4}td.color-cyan { background-color: #b2ebf2}.table-list-row.color-cyan {border-left: 5px solid #00bcd4}.task-board.color-lime, .task-summary-container.color-lime, .color-picker-square.color-lime, .task-board-category.color-lime, .table-list-category.color-lime, .task-tag.color-lime {background-color: #e6ee9c;border-color: #afb42b}td.color-lime { background-color: #e6ee9c}.table-list-row.color-lime {border-left: 5px solid #afb42b}.task-board.color-light_green, .task-summary-container.color-light_green, .color-picker-square.color-light_green, .task-board-category.color-light_green, .table-list-category.color-light_green, .task-tag.color-light_green {background-color: #dcedc8;border-color: #689f38}td.color-light_green { background-color: #dcedc8}.table-list-row.color-light_green {border-left: 5px solid #689f38}.task-board.color-amber, .task-summary-container.color-amber, .color-picker-square.color-amber, .task-board-category.color-amber, .table-list-category.color-amber, .task-tag.color-amber {background-color: #ffe082;border-color: #ffa000}td.color-amber { background-color: #ffe082}.table-list-row.color-amber {border-left: 5px solid #ffa000}</style></head><body>';
        } else {
            $html_all = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style>@font-face {font-family: \'Droid Sans\';font-style: normal;font-weight: 400;src: url(\'/plugins/Task2pdf/font/DroidSansFallback.ttf\') format(\'truetype\');src: url(https://github.com/creecros/Task2pdf/blob/master/font/DroidSansFallback.ttf?raw=true) format(\'truetype\');}@font-face {font-family: \'Droid Sans\';font-style: normal;font-weight: bold;src: url(\'/plugins/Task2pdf/font/DroidSansFallback.ttf\') format(\'truetype\');src: url(https://github.com/creecros/Task2pdf/blob/master/font/DroidSansFallback.ttf?raw=true) format(\'truetype\');}@font-face {font-family: \'Droid Sans\';font-style: normal;font-weight: bold;font-style: italic;src: url(\'/plugins/Task2pdf/font/DroidSansFallback.ttf\') format(\'truetype\');src: url(https://github.com/creecros/Task2pdf/blob/master/font/DroidSansFallback.ttf?raw=true) format(\'truetype\');}* {font-family: Droid Sans, DejaVu Sans, sans-serif;}.task-board.color-yellow, .task-summary-container.color-yellow, .color-picker-square.color-yellow, .task-board-category.color-yellow, .table-list-category.color-yellow, .task-tag.color-yellow {background-color: rgb(245, 247, 196);border-color: rgb(223, 227, 45)}td.color-yellow { background-color: rgb(245, 247, 196)}.table-list-row.color-yellow {border-left: 5px solid rgb(223, 227, 45)}.task-board.color-blue, .task-summary-container.color-blue, .color-picker-square.color-blue, .task-board-category.color-blue, .table-list-category.color-blue, .task-tag.color-blue {background-color: rgb(219, 235, 255);border-color: rgb(168, 207, 255)}td.color-blue { background-color: rgb(219, 235, 255)}.table-list-row.color-blue {border-left: 5px solid rgb(168, 207, 255)}.task-board.color-green, .task-summary-container.color-green, .color-picker-square.color-green, .task-board-category.color-green, .table-list-category.color-green, .task-tag.color-green {background-color: rgb(189, 244, 203);border-color: rgb(74, 227, 113)}td.color-green { background-color: rgb(189, 244, 203)}.table-list-row.color-green {border-left: 5px solid rgb(74, 227, 113)}.task-board.color-purple, .task-summary-container.color-purple, .color-picker-square.color-purple, .task-board-category.color-purple, .table-list-category.color-purple, .task-tag.color-purple {background-color: rgb(223, 176, 255);border-color: rgb(205, 133, 254)}td.color-purple { background-color: rgb(223, 176, 255)}.table-list-row.color-purple {border-left: 5px solid rgb(205, 133, 254)}.task-board.color-red, .task-summary-container.color-red, .color-picker-square.color-red, .task-board-category.color-red, .table-list-category.color-red, .task-tag.color-red {background-color: rgb(255, 187, 187);border-color: rgb(255, 151, 151)}td.color-red { background-color: rgb(255, 187, 187)}.table-list-row.color-red {border-left: 5px solid rgb(255, 151, 151)}.task-board.color-orange, .task-summary-container.color-orange, .color-picker-square.color-orange, .task-board-category.color-orange, .table-list-category.color-orange, .task-tag.color-orange {background-color: rgb(255, 215, 179);border-color: rgb(255, 172, 98)}td.color-orange { background-color: rgb(255, 215, 179)}.table-list-row.color-orange {border-left: 5px solid rgb(255, 172, 98)}.task-board.color-grey, .task-summary-container.color-grey, .color-picker-square.color-grey, .task-board-category.color-grey, .table-list-category.color-grey, .task-tag.color-grey {background-color: rgb(238, 238, 238);border-color: rgb(204, 204, 204)}td.color-grey { background-color: rgb(238, 238, 238)}.table-list-row.color-grey {border-left: 5px solid rgb(204, 204, 204)}.task-board.color-brown, .task-summary-container.color-brown, .color-picker-square.color-brown, .task-board-category.color-brown, .table-list-category.color-brown, .task-tag.color-brown {background-color: #d7ccc8;border-color: #4e342e}td.color-brown { background-color: #d7ccc8}.table-list-row.color-brown {border-left: 5px solid #4e342e}.task-board.color-deep_orange, .task-summary-container.color-deep_orange, .color-picker-square.color-deep_orange, .task-board-category.color-deep_orange, .table-list-category.color-deep_orange, .task-tag.color-deep_orange {background-color: #ffab91;border-color: #e64a19}td.color-deep_orange { background-color: #ffab91}.table-list-row.color-deep_orange {border-left: 5px solid #e64a19}.task-board.color-dark_grey, .task-summary-container.color-dark_grey, .color-picker-square.color-dark_grey, .task-board-category.color-dark_grey, .table-list-category.color-dark_grey, .task-tag.color-dark_grey {background-color: #cfd8dc;border-color: #455a64}td.color-dark_grey { background-color: #cfd8dc}.table-list-row.color-dark_grey {border-left: 5px solid #455a64}.task-board.color-pink, .task-summary-container.color-pink, .color-picker-square.color-pink, .task-board-category.color-pink, .table-list-category.color-pink, .task-tag.color-pink {background-color: #f48fb1;border-color: #d81b60}td.color-pink { background-color: #f48fb1}.table-list-row.color-pink {border-left: 5px solid #d81b60}.task-board.color-teal, .task-summary-container.color-teal, .color-picker-square.color-teal, .task-board-category.color-teal, .table-list-category.color-teal, .task-tag.color-teal {background-color: #80cbc4;border-color: #00695c}td.color-teal { background-color: #80cbc4}.table-list-row.color-teal {border-left: 5px solid #00695c}.task-board.color-cyan, .task-summary-container.color-cyan, .color-picker-square.color-cyan, .task-board-category.color-cyan, .table-list-category.color-cyan, .task-tag.color-cyan {background-color: #b2ebf2;border-color: #00bcd4}td.color-cyan { background-color: #b2ebf2}.table-list-row.color-cyan {border-left: 5px solid #00bcd4}.task-board.color-lime, .task-summary-container.color-lime, .color-picker-square.color-lime, .task-board-category.color-lime, .table-list-category.color-lime, .task-tag.color-lime {background-color: #e6ee9c;border-color: #afb42b}td.color-lime { background-color: #e6ee9c}.table-list-row.color-lime {border-left: 5px solid #afb42b}.task-board.color-light_green, .task-summary-container.color-light_green, .color-picker-square.color-light_green, .task-board-category.color-light_green, .table-list-category.color-light_green, .task-tag.color-light_green {background-color: #dcedc8;border-color: #689f38}td.color-light_green { background-color: #dcedc8}.table-list-row.color-light_green {border-left: 5px solid #689f38}.task-board.color-amber, .task-summary-container.color-amber, .color-picker-square.color-amber, .task-board-category.color-amber, .table-list-category.color-amber, .task-tag.color-amber {background-color: #ffe082;border-color: #ffa000}td.color-amber { background-color: #ffe082}.table-list-row.color-amber {border-left: 5px solid #ffa000}</style></head><body>';
        }

        $files_to_embed = array();

        foreach ($task_ids as $task_id) {
            $task = $this->taskFinderModel->getDetails($task_id);
            $subtasks = $this->subtaskModel->getAll($task['id']);
            $files = $this->taskFileModel->getAllDocuments($task['id']);
            $files_to_embed = array_merge($files_to_embed, $this->taskFileModel->getAll($task['id']));
            $commentSortingDirection = $this->userMetadataCacheDecorator->get(UserMetadataModel::KEY_COMMENT_SORTING_DIRECTION, 'ASC');

            $html = $this->template->render('Task2pdf:printlayout/printlayout_n', array(
                'project' => $this->projectModel->getById($task['project_id']),
                'comments' => $this->commentModel->getAll($task['id'], $commentSortingDirection),
                'subtasks' => $subtasks,
                'files' => $files,
                'images' => $this->taskFileModel->getAllImages($task['id']),
                'links' => $this->taskLinkModel->getAllGroupedByLabel($task['id']),
                'task' => $task,
                'columns_list' => $this->columnModel->getList($task['project_id']),
                'colors_list' => $this->colorModel->getList(),
                'tags' => $this->taskTagModel->getList($task['id']),
                'title' => $task['title'],
                'no_layout' => true,
                'auto_refresh' => true,
                'not_editable' => true,
            ));

            $html_all = $html_all . $html . '<div style="page-break-after: always;"></div>';
        }

        $html_all = $html_all . '</body></html>';
        $dompdf->loadHtml($html_all);


        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('letter', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        if ($this->configModel->get('task2pdf_embed_projects', 1) == 1) {
            $cpdf = $dompdf->get_canvas()->get_cpdf();
            foreach ($files_to_embed as $file) {
                $cpdf->addEmbeddedFile(
                    FILES_DIR. '/' . $file['path'],
                    $file['name'],
                    ''
                );
            }
        }

        // Output the generated PDF to Browser inline or as PDF download
        if ($this->configModel->get('task2pdf_attachment', 1) == 1) {
            $dompdf->stream($project['id'] . '_' . $project['name'] . '.pdf', array("Attachment" => false));
        } else {
            $dompdf->stream($project['id'] . '_' . $project['name'] . '.pdf');
        }
    }
}
?>
