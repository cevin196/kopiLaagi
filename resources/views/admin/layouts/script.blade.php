<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });

    var option = {
        animation: true,
        delay: 2000
    };

    function Toasty(info) {        
        var toastHTMLElement = document.getElementById('EpicToast');
        var toastBody = document.getElementById('toastBody');
        var toastElement = new bootstrap.Toast(toastHTMLElement, option);
        toastBody.innerHTML = info;
        toastElement.show();
    }

</script>
@if (\Session::has('success'))
    <script>
        Toasty("{!! \Session::get('success') !!}")
    </script>
@endif