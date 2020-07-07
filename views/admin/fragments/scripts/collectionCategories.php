<script>
    $(function() {
        $(".search").submit(function(e) {
            e.preventDefault();

            var categories = $(".categories");
            var form = $(this);

            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "post",
                dataType: "json",
                success: function(callback) {

                    if (callback.message) {
                        categories.html(callback.message).fadeIn();
                    } else {
                        categories.html(callback.categories).fadeIn();
                    }
                }
            });
        });

        $(".create-category").submit(function(e) {
            e.preventDefault();

            var categories = $(".categories");
            var form = $(this);
            var alert = $(".alert-form-object");
            var input = $("#category-name-input");

            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "post",
                dataType: "json",
                success: function(callback) {
                    alert.html(callback.alert).fadeIn();

                    if (callback.success) {
                        input.val("");
                        categories.prepend(callback.category).fadeIn();
                        $('.modal').modal('hide');
                    }
                }
            });
        });
    });
</script>