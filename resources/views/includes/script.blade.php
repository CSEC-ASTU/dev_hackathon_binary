<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('assets/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bs-custom-file-input/1.3.4/bs-custom-file-input.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Custom js -->
<script src="{{ asset('assets/custom-jquery.js')}}"></script>
<script>
  $(function () {
    $("#dataTable").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    })
    $('.duallistbox').bootstrapDualListbox()

    $('.select2bs4').select2({
        theme: 'bootstrap4',
        placeholder: 'Select a choice',
        allowClear: true
    })
    $('#issuedate').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#startdate').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#enddate').datetimepicker({ icons: { time: 'far fa-clock' } });
    bsCustomFileInput.init();
  });
  $('#messageNav').css('width', $('.col-md-6').width());
  @error('username')
        $('#modal-signin').modal('show');
    @enderror

    @error('password')
        $('#modal-signin').modal('show');
    @enderror

    @error('new_email')
        $('#modal-signup').modal('show');
    @enderror

    @error('new_password')
        $('#modal-signup').modal('show');
    @enderror

    @error('new_password_confirmation')
        $('#modal-signup').modal('show');
    @enderror

    @error('new_username')
        $('#modal-signup').modal('show');
    @enderror

    @if (Session::get('login-error'))
    $('#modal-signin').modal('show');
    @endif
</script>
