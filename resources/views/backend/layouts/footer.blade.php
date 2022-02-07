<!-- Javascript -->
<script src="{{asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend/assets/bundles/morrisscripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/bundles/knob.bundle.js')}}"></script>

{{--Dropify--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>{{--summernote--}}
<script src="{{asset('backend/assets/summernote/summernote.js')}}"></script>
<script src="{{asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/ui/sortable-nestable.js')}}"></script>
<script src="{{asset('backend/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('backend/assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js')}}"></script>
<script src="{{asset('backend/assets/js/index.js')}}"></script>
<script src="{{asset('backend/assets/js/jquery.multifield.min.js')}}"></script>


@yield('scripts')

<script>
    setTimeout(function () {
        $('#alert').slideUp();
    },4000);

    $('.dropify').dropify();

    $(document).ready(function() {
        $('.description').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });
    });
</script>

{{--Create auto slug --}}
<script>
    $("#title").focusout(function(e){
        var title = $("#title").val();
        var createdSlug = convertToSlug(title.trim());
        var slug = $("#slug").val(createdSlug);
    });

    function convertToSlug(Text){
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-')
            ;
    }
</script>
