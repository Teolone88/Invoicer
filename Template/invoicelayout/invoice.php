<!DOCTYPE html>
<html lang="en">
	<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href='../../Assets/images/begrit-solutions-high-resolution-logo-transparent.png' type="image/x-icon" />
<style>
body {
  @font-face {
    font-family: 'Droid Sans';
    font-style: normal;
    font-weight: 400;
    src: url('/plugins/Invoicer/font/DroidSansFallback.ttf') format('truetype');

    @font-face {
      font-family: 'Droid Sans';
      font-style: normal;
      font-weight: bold;
      src: url('/plugins/Invoicer/font/DroidSansFallback.ttf') format('truetype');

      @font-face {
        font-family: 'Droid Sans';
        font-style: normal;
        font-weight: bold;
        font-style: italic;
        src: url('/plugins/Invoicer/font/DroidSansFallback.ttf') format('truetype');

        * {
          font-family: Droid Sans, DejaVu Sans, sans-serif;
        }

        ;
        color: #777;
      }

      body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
      }

      body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
      }

      body a {
        color: #06f;
      }

      .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;

        @font-face {
          font-family: 'Droid Sans';
          font-style: normal;
          font-weight: 400;
          src: url('/plugins/Invoicer/font/DroidSansFallback.ttf') format('truetype');

          @font-face {
            font-family: 'Droid Sans';
            font-style: normal;
            font-weight: bold;
            src: url('/plugins/Invoicer/font/DroidSansFallback.ttf') format('truetype');

            @font-face {
              font-family: Droid Sans';font-style: normal;font-weight: bold; font-style: italic; src: url(' /plugins/Invoicer/font/DroidSansFallback.ttf) format('truetype');

              * {
                font-family: Droid Sans, DejaVu Sans, sans-serif;
              }

              ;
              color: #555;
            }

            .invoice-box table {
              width: 100%;
              line-height: inherit;
              text-align: left;
              border-collapse: collapse;
            }

            .invoice-box table td {
              padding: 5px;
              vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
              text-align: right;
            }

            .invoice-box table tr.top table td {
              padding-bottom: 20px;
            }

            .invoice-box table tr.top table td.title {
              font-size: 45px;
              line-height: 45px;
              color: #333;
            }

            .invoice-box table tr.information table td {
              padding-bottom: 40px;
            }

            .invoice-box table tr.heading td {
              background: #eee;
              border-bottom: 1px solid #ddd;
              font-weight: bold;
            }

            .invoice-box table tr.details td {
              padding-bottom: 20px;
            }

            .invoice-box table tr.item td {
              border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
              border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
              border-top: 2px solid #eee;
              font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
              .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
              }

              .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
              }
            }
</style>
	<body>
		<div class="invoice-box rtl">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src='../../images/begrit-solutions-high-resolution-logo-transparent.png' alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Invoice no.: <?= $values['invDate'] . '-' . $this->text->e($project['name']) . '-' . $this->text->e($project['id']) ?> <br />
									Created: <?= $values['invDate'] ?>  <br />
									Due: <?= $values['invDue'] ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<?= $this->text->e($values['invFromName']) ?><br />
									<?= $this->text->e($values['invFromAddress1']) ?><br />
									<?= $this->text->e($values['invFromAddress2']) ?><br />
                                    <?= $this->text->e($values['invFromCityZip']) ?><br />
                                    <?= $this->text->e($values['invFromCountry']) ?><br />
                                    <?= $this->text->e($values['invFromVAT']) ?>
								</td>

								<td>
									<?= $this->text->e($values['invToName']) ?><br />
									<?= $this->text->e($values['invToAddress1']) ?><br />
									<?= $this->text->e($values['invToAddress2']) ?><br />
                                    <?= $this->text->e($values['invToCityZip']) ?><br />
                                    <?= $this->text->e($values['invToCountry']) ?><br />
                                    <?= $this->text->e($values['invToVAT']) ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>
				</tr>

				<tr class="details">
					<td>Wire Transfer</td>
				</tr>      
        		<tr class="heading">
            		<td>Item</td>
               		<td>Price</td>	
        		</tr> 
                <?php  foreach($values['invAdd'] as $task): ?>
        			<tr class="item">
            			<td><?= $task?></td>
            			<td>100</td>
        			</tr>               
                <?php endforeach;?>  
                
				<tr class="total">
					<td></td>
					<td>Total: $385.00</td>
				</tr>
			</table>
		</div>
</body>
</html>