<script type="text/javascript">
    function fun_view()
    {
        var view_url = $("#hidden_view").val();
        $.ajax({
            url: view_url,
            type:"GET",
//            data: {"id":id},
            success: function(result){
                //console.log(result);
                $("#view_fname").text(result.first_name);
                $("#view_lname").text(result.last_name);
                $("#view_email").text(result.email);
                $("#view_school").text(result.school);
            }
        });
    }

    function fun_edit(id)
    {
        var view_url = $("#hidden_view").val();
        $.ajax({
            url: view_url,
            type:"GET",
//            data: {"id":id},
            success: function(result){
                //console.log(result);
                $("#edit_id").val(result.id);
                $("#edit_first_name").val(result.first_name);
                $("#edit_last_name").val(result.last_name);
                $("#edit_email").val(result.email);
                $("#edit_school").val(result.school);
            }
        });
    }

    function fun_delete()
    {
        var conf = confirm("Are you sure want to delete??");
        if(conf){
            var delete_url = $("#hidden_delete").val();
            $.ajax({
                url: delete_url,
                type:"POST",
                data: {_token: "{{ csrf_token() }}", _method: "DELETE"},
                success: function(response){
                    alert(response);
                    location.reload();
                }
            });
        }
        else{
            return false;
        }
    }
</script>
