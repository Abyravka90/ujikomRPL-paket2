<div class="fixed-bottom text-center">
    <b>created by:</b>&nbsp;Asep Cahya Nugraha
</div>
<script src="../../assets/js/jquery-3.5.1.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>  
<!-- DATATABLES -->
<script type="text/javascript" src="../../assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../assets/js/jszip.min.js"></script>
<script type="text/javascript" src="../../assets/js/pdfmake.min.js"></script>
<script type="text/javascript" src="../../assets/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../../assets/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../../assets/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>