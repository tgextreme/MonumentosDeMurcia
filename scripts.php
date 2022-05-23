<script>

function getTabla(){
    var query= document.getElementById("varCSV").value;
    query=encodeURI(query);


    $("#contenido").load("tabla.php?query="+query);


}

</script>