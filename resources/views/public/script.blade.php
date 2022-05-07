<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- Custom js -->
<script src="{{ asset('assets/custom-jquery.js') }}"></script>
<script>
    $(function() {
        $("#dataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        })
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
