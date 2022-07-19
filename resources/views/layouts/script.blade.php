<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {

        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');

        $(document).on("click", ".open-AddUrlDialog", function(e) {
            e.preventDefault();
            var id = $(this).attr('type');
            var Url = $(this).data('id');
            var Signature = $(this).attr('id');
            $("#floatinglink").val(Url);
            $("#floatingSignature").val(Signature);
            $('#formId').attr('action', "update-link/" + id);
            $('#formButton').text('Обновить');
        });

        $(document).on("click", "#addUrl", function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $("#floatinglink").val("");
            $("#floatingSignature").val("");
            $('#formId').attr('action', "add-link/" + id);
            $('#formButton').text('Добавить');
        });

    });
</script>
