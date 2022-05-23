<?php
include "header.php";
?>
<div class="mb-3">
  <label for="varCSV" class="form-label">Example label</label>
  <input onchange="getTabla()" onkeyup="getTabla()" type="text" class="form-control" id="varCSV" placeholder="Example input placeholder">
</div>


<div id="contenido" name="contenido"></div>

<?php
include "footer.php";
?>