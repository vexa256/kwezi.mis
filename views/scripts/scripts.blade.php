<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/flexselect.js') }}"></script>
<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('js/tinyMCE.js') }}"></script>
<script type="text/javascript" src="{{ asset('dt/datatables.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script type="text/javascript" src="{{ url('dist/js/lightbox.min.js') }}"></script>

<script src="{{ asset('js/swal2.js') }}"></script>

@include('nots.notifications')

@isset($PDFJS)
    <script defer src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
    <script type="text/javascript" src="{{ asset('js/pdf.js') }}"></script>
@endisset
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
