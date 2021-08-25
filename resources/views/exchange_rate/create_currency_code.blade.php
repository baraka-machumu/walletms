

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="create-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{url('add-currency-code')}}">

        {{csrf_field()}}
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header modal-background">
                    <h5 class="modal-title" id="exampleModalLabel">Create Currency Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">


                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <label for="service_name">Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Currency Name">

                                            </div>


                                        </div>

                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <label for="currency_code">Currency Code</label>
                                                <input type="text" class="form-control" name="currency_code" id="currency_code" placeholder="Currency Code">

                                            </div>


                                        </div>



                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>
