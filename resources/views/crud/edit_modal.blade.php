<!-- Edit Modal start -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'Put', 'action'=>'StudentController@update']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="form-group">
                            <label for="edit_first_name">First Name:</label>
                            <input type="text" class="form-control" id="edit_first_name" name="edit_first_name">
                        </div>
                        <div class="form-group">
                            <label for="edit_last_name">Last Name:</label>
                            <input type="text" class="form-control" id="edit_last_name" name="edit_last_name">
                        </div>
                        <div class="form-group">
                            <label for="edit_email">Email address:</label>
                            <input type="email" class="form-control" id="edit_email" name="edit_email">
                        </div>
                        <div class="form-group">
                            <label for="edit_school">School:</label>
                            <input type="text" class="form-control" id="edit_school" name="edit_school">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                    <input type="hidden" id="edit_id" name="edit_id">
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>
<!-- Edit code ends -->
