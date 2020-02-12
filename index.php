<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li>
<select id="select">
    <option value=""></option>
    <option value="choose1">choose1</option>
    <option value="choose2">choose2</option>
    <option value="choose3">choose3</option>
</select>
</li>
  
</ul>
<div class="tab-content" id="myTabContent">
  
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
var counter = 0;
var index = 0

    function delRow(index){
        var delet = document.getElementsByTagName('tbody');
        $(delet).parents('tr').remove();
    }

    function addRow(counter){
    
        var isiRow = '<tr id="tr"><td><input type="text"></td><td><button id="btnDelete'+index+'"  type="button" class="btn btn-danger btn_delete">-</button></td></tr>';

        $('#table'+counter+ ' tbody').append(isiRow);

        index++;

    }

    $(document).on('click', '.btn_delete', function(){
		$(this).parents('#tr').remove();
	});

    



$(document).on('change','#select',function(){
    var name = $(this).find('option:selected').text();
    var tab = '<li class="nav-item" id="nav-item'+counter+'"><button id="'+counter+'"  type="button" class="btn btn-secondary btnHapus">-</button><a class="nav-link" id="nav-link'+counter+'" data-toggle="tab" href="#table'+counter+'" role="tab" aria-controls="contact" aria-selected="false">'+name+'</a></li>';

    var homemenu = '<a id="link'+counter+'" class="nav-item nav-link" data-toggle="tab" href="#ctable'+counter+'" role="tab" aria-controls="nav-profile" aria-selected="false"> <button id="'+counter+'" class="removelink">X</button>'+name+'</a>';

    var table = ' <div id="table'+counter+'" class="tab-pane fade" role="tabpanel" aria-labelledby="1"><table class="table table-bordered" id="tabel'+counter+'"><thead><tr><td>Tabel</td><td>Action</td></tr></thead><tbody></tbody><tfoot><tr><td></td><td><button id="'+counter+'" onclick="addRow('+counter+');" type="button" class="btn btn-info">+</button></td></tr></tfoot></table></div>';

    $(document).on('click', '.btnHapus', function(){  
        var hapusId = $(this).attr("id");   
        $('#nav-item'+hapusId+'').remove();
        $('#table'+hapusId+'').remove();

    });
    
    $('#myTab').append(tab);
    $('#myTabContent').append(table);

    counter++;

});







</script>

</body>
</html>