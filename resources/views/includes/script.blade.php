  <!-- General JS Scripts -->
  <script src="{{ asset('template/dist/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('template/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->c
  <script src="{{ asset('template/dist/assets/js/page/index-0.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('template/dist/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('template/dist/assets/js/custom.js') }}"></script>

  <script src="{{ asset('template/dist/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/js/page/modules-datatables.js') }}"></script>



  <script>
    // JavaScript code to prevent going back after logout
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      @if(Session::has('success'))
          Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: '{{ Session::get('success') }}',
              showConfirmButton: false,
              timer: 1500
          });
      @endif
  });
</script>


<script>
  function confirmDelete(id) {
      Swal.fire({
          title: 'Apakah Anda yakin?',
          text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Ya, hapus!',
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('deleteForm' + id).submit();
          }
      });
  }
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('logoutLink').addEventListener('click', function(event) {
          event.preventDefault();

          Swal.fire({
              icon: 'warning',
              title: 'Konfirmasi Logout',
              text: 'Apakah Anda yakin ingin logout?',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Ya, Logout!'
          }).then((result) => {
              if (result.isConfirmed) {
                  document.getElementById('logout-form').submit();
              }
          });
      });
  });
</script>