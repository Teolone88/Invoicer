<section id="main" class="public-project">
<?= $this->render('Invoicer:invoicelayout/invoice', array(
        'project' => $project,
        'values' => $values,
        'editable' => false
)) ?>
</section>
</body>
<button onclick="Convert_HTML_To_PDF();">Convert HTML to PDF</button>
</html>
