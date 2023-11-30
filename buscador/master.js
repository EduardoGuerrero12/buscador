document.getElementById("serchInput").addEventListener("keyup", function(){
    serchTable()
       
})
function serchTable(){
    let input, filter, table, tr, td, i,j,  txtValue
    input = document.getElementById("serchInput")
    filter = input.value.toUpperCase()
    table = document.getElementById("myTable")
    tr = table.getElementsByTagName("tr")



    for (i=0; i<tr.length; i++) {
        td = tr[i].getElementsByTagName("td")
        for (j=0; j<td.length; j++) {

            txtValue = td[j].textContent || td[j].innerText
            

        if(txtValue.toUpperCase().indexOf(filter)> -1) {
            tr[i].style.display = ""
            break;

        }else{
            tr[i].style.display = "none"
        }

    }
}
}