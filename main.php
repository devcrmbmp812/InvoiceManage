<div class="content-wrapper">
    <div id="page-wrap">

      <textarea id="header">INVOICE</textarea>
      
      <div id="identity">
    
            <div style="text-align: center;">
                <img id="image" src="images/logo2.jpg" alt="logo" />
              </div>
      
      </div>
      
      <div style="clear:both"></div>
      <form id="_form" action="ajax/export_csv.php" method="POST">
        <div id="customer">
          <textarea id="customer-title">Demo customer name</textarea>
          <table id="meta">
              <tr>
                  <td class="meta-head">Date</td>
                  <td><textarea id="date">December 15, 2009</textarea></td>
              </tr>
          </table>
        </div>
        
        <table id="items">
          <tr>
              <th>Line Description</th>
              <th>Unit of measure</th>
            <th>Price per unit($)</th>
              <th>Qty</th>
              <th>Total</th>
          </tr>
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea name="line_description[]">Regular Meter Delivery - Treated</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
              <td class="description"><input type="text" value="AF" name="unit_of_measure[]"></td>
              <td><input type="text" class="cost" value="$1145.00" name="price_per_unit[]"></input></td>
              <td><input type="text" class="qty" value="2496.30" name="qty_item[]"></td>
              <td><span class="price">$2858263.50</span><input type="hidden" class="price" name="total[]" value="$2858263.50"></td>

          </tr>
          
          <tr class="item-row">
              <td class="item-name"><div class="delete-wpr"><textarea name="line_description[]">Regular Meter Delivery - Untreated</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
              <td class="description"><input type="text" value="AF" name="unit_of_measure[]"></td>
              <td><input type="text" class="cost" value="$855.00" name="price_per_unit[]"></input></td>
              <td><input type="text" class="qty" value="13970.50" name="qty_item[]"></td>
              <td><span class="price">$11944777.50</span><input type="hidden" class="price_input" name="total[]" value="$11944777.50"></td>
          </tr>
          
          <tr id="hiderow">
            <td colspan="5"><a id="addrow" href="javascript:;" title="Enter a new line">Enter A New Line</a></td>
          </tr>
        
          <tr>
              <td colspan="2" class="blank"> </td>
              <td colspan="2" class="total-line">Total</td>
              <td class="total-value"><div id="total">$14803041.00</div></td>
          </tr>
        </table>
        <input type="submit" id="export" value="Save Invoice" class="button" style="float: right;">
      </form>
    </div>
  </div>