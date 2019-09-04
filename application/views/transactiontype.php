<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="card-header">
                            <h4 class="card-title">Transaction Type</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="card-header">
                            <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Transaction</button>
                            <!--begin:Modal Start-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Transaction</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?php echo base_url('transactiontype')?>">
                                                <div class="form-group">
                                                    <label>Transaction Name</label>
                                                    <input type="text" name="transaction_name" class="form-control" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Transaction Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($transaction_types as $transaction_type){?>
                        <tr class="text-center">
                            <td><?php echo $transaction_type->id ?></td>
                            <td><?php echo $transaction_type->transaction_name ?></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
