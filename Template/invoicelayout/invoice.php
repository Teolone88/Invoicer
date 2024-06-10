<div id="wrapper">
    <div id="pspdfkit-header">
      <div class="header-columns">
        <div class="logoty">
          <img class="logo" src="/client-area/?controller=CustomizerFileController&action=image&plugin=customizer&file_id=1" />
        </div>

        <div>
          <p>
          <?= $this->text->e($values['invFromName']) ?><br>
<?= $this->text->e($values['invFromAddress1']) ?><br>
<?= $this->text->e($values['invFromCountry']) ?><br>
<?= t('VAT ID:  ') ?><?= $this->text->e($values['invFromVAT']) ?>
          </p>
        </div>
      </div>
    </div>
    <div class="page" style="page-break-after: always">
      <div>
        <h2><?= t('Invoice #:  ') ?><?= $values['invDate'] . '-' . $this->text->e($project['name']). '-' . $this->text->e($project['id']) ?> <br />
<?= t('Created:  ') ?><?= $values['invDate'] ?></h2>
      </div>

      <div class="intro-table">
        <div class="intro-form intro-form-item">
          <p class="intro-table-title">Billed To:</p>
          <p>
          <?= $this->text->e($values['invToName']) ?><br>
<?= $this->text->e($values['invToAddress1']) ?><br>
<?= $this->text->e($values['invToCountry']) ?><br>
<?= t('VAT ID:  ') ?><?= $this->text->e($values['invToVAT']) ?>
          </p>
        </div>

        <div class="intro-form">
          <div class="intro-form-item-border">
            <p class="intro-table-title">Payment Due:</p>
            <p><?= $values['invDue'] ?></p>
          </div>

          <div class="intro-form-item-border">
            <p class="intro-table-title">Payment Method:</p>
            <p>Bank Transfer</p>
          </div>
        </div>
      </div>

      <div class="table-box">
        <table cellpadding="0" cellspacing="0" id="empTable">
          <tbody>
            <tr class="heading">
              <td></td>
              <td>Description</td>
              <td>Price</td>
            </tr>
            <p>
              <input 
                type="button" 
                id="addRow" 
                value="Add New Item" 
                onclick="addRow()" />
            </p>

            <?php foreach($values['invAdd'] as $task): ?>
<tr class="item">
<td><input type="text"  value="" /></td>
<td><input type="text"  value="<?= t($task) ?>" /></td>
<td><?= t('100') ?></td>
</tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="summary-box">
        <table cellpadding="0" cellspacing="0">
          <tbody>
            <tr class="item">
              <td></td>
              <td>Subtotal:</td>
              <td><input type="text"  value="" /></td>
            </tr>

            <tr class="item">
              <td></td>
              <td>Discount:</td>
              <td><input type="text"  value="" /></td>
            </tr>

            <tr class="item">
              <td></td>
              <td>Subtotal Less Discount:</td>
              <td><input type="text"  value="" /></td>
            </tr>

            <tr class="item">
              <td></td>
              <td>Total Tax:</td>
              <td><input type="text"  value="" /></td>
            </tr>

            <tr class="no-border-item">
              <td></td>
              <td>Total Due:</td>
              <td><input type="text"  value="" /></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <div class="page" style="page-break-after: always">
      <div class="form">
        <label for="notes" class="label"> Notes: </label>
        <input type="text" id="notes" class="border-bottom" value="" />
      </div>

      <div class="signer">
        <div class="form signer-item">
          <label for="date" class="label">Date:</label>
          <input type="text" id="date" class="border-bottom" value="01/01/2021" />
        </div>

        <div class="form signer-item">
          <label for="signature" class="label">Issued by:</label>
          <input type="text" id="signature" class="border" value="Sign Here" />
        </div>
      </div>
    </div>

    <div id="pspdfkit-footer">
      <div class="footer-columns">
        <span>Invoice</span>
      </div>
    </div>
  </div>
