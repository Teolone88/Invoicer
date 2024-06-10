  // ARRAY FOR HEADER.
  const arrHead = ['','Description', 'Total'];
  // SIMPLY ADD OR REMOVE VALUES IN THE ARRAY FOR TABLE HEADERS.
  
  // FIRST CREATE A TABLE STRUCTURE BY ADDING A FEW HEADERS AND
  // ADD THE TABLE TO YOUR WEB PAGE.

  // ADD A NEW ROW TO THE TABLE
  function addRow() {
      var empTab = document.getElementById('empTable');
  
      var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
      var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
      tr = empTab.insertRow(rowCnt);
  
      for (var c = 0; c < arrHead.length; c++) {
          var td = document.createElement('td');          // TABLE DEFINITION.
          td = tr.insertCell(c);
  
          if (c == 0) {           // FIRST COLUMN.
              // ADD A BUTTON.
              var button = document.createElement('input');
  
              // SET INPUT ATTRIBUTE.
              button.setAttribute('type', 'button');
              button.setAttribute('value', 'Remove');
              button.setAttribute('id', 'rm');
  
  
              // ADD THE BUTTON's 'onclick' EVENT.
              button.setAttribute('onclick', 'removeRow(this)');
  
              td.appendChild(button);
          }
          else {
              // CREATE AND ADD TEXTBOX IN EACH CELL.
              var ele = document.createElement('input');
              ele.setAttribute('type', 'text');
              ele.setAttribute('value', '');
  
              td.appendChild(ele);
          }
      }
  }
  
  // DELETE TABLE ROW.
  function removeRow(oButton) {
      var empTab = document.getElementById('empTable');
      empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
  }
  
  
  // EXTRACT AND SUBMIT TABLE DATA.
  function sumbit() {
      var myTab = document.getElementById('empTable');
      var values = new Array();
  
      // LOOP THROUGH EACH ROW OF THE TABLE.
      for (row = 1; row < myTab.rows.length - 1; row++) {
          for (c = 0; c < myTab.rows[row].cells.length; c++) {                  // EACH CELL IN A ROW.
              var element = myTab.rows.item(row).cells[c];
              if (element.childNodes[0].getAttribute('type') == 'text') {
                  values.push(element.childNodes[0].value);
                  
              }
          }
      }
      console.log('Data send:\n' + values);
  
  }