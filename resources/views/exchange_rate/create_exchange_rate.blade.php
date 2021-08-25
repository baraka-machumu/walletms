

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="create-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="{{url('add-exchange-rate')}}">

        {{csrf_field()}}
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content">
                <div class="modal-header modal-background">
                    <h5 class="modal-title" id="exampleModalLabel">Create Exchange Rate</h5>
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
                                            <div class="form-group mb-3">
                                                <select name="currency_code_code" class="form-control" required>
                                                    <option value="">Select Currency Code</option>
                                                    @foreach($currency_code as $currency)
                                                        <option value="{{$currency->currency_code}}">{{ucfirst($currency->currency_code)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <select name="exchange_currency_code" class="form-control" required>
                                                    <option value="">Select Exchange Currency Code</option>
                                                    @foreach($currency_code as $currency)
                                                        <option value="{{$currency->currency_code}}">{{ucfirst($currency->currency_code)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <label for="exchange_rate">Exchange Rate</label>
                                                <input type="text" class="form-control" name="exchange_rate" id="exchange_rate" placeholder="Exchange Rate">

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
