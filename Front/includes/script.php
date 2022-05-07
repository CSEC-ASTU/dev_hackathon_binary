<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- overlayScrollbars -->
<script src="assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- custom js -->
<script src="assets/custom-jquery.js"></script>
<script>
  $(function () {
    $("#dataTable").DataTable({
      "responsive": true,
      "lengthChange": false, 
      "autoWidth": false,
    })
  });
  $('#messageNav').css('width', $('.col-md-6').width());
</script>