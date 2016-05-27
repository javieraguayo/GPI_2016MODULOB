<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    </head> 
<body>
    <div class="container">
        

        <h3>Buscar Evento</h3>
        <br />
      
        <br />
        <br />
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NOMBRE EVENTO</th>
                    <th>NOMBRE ARTISTA</th>
                    <th>TIPO EVENTO</th>
                    <th>TIPO ENTRADA</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

                <tfoot>
            <tr>
                <th>NOMBRE EVENTO</th>
                <th>NOMBRE ARTISTA</th>
                <th>TIPO EVENTO</th>
                <th>TIPO ENTRADA</th>
            </tr>
            </tfoot>
        </table>
    </div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, 
        "serverSide": true,
        "order": [], 

       
        "ajax": {
            "url": "<?php echo site_url('evento/ajax_list')?>",
            "type": "POST"
        },

        
        "columnDefs": [
        { 
            "targets": [ -1 ],
            "orderable": false, 
        },
        ],

    });

});
</script>
</body>
</html>