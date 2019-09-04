        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="card-header">
                                    <h4 class="card-title">Transactions</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="card-header">
                                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Transactions</button>
                                    <!--begin:Modal Start-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Transactions</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="<?php echo base_url('transactions')?>">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Amount:</label>
                                                            <input type="text" name="amount" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="expense-type-text" class="col-form-label">Transaction Type:</label>
                                                            <select name="transaction_type_id" class="form-control" required>
                                                                <option value="">Select Transaction Type</option>
                                                                <?php foreach ($transaction_types as $transaction_type) { ?>
                                                                    <option value="<?php echo $transaction_type->id?>"><?php echo $transaction_type->transaction_name?></option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="expense-type-text" class="col-form-label">Category Type:</label>
                                                            <select name="category_id" class="form-control" required>
                                                                <option value="">Select Category Type</option>
                                                                <?php foreach ($categories as $category) { ?>
                                                                    <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="expense-type-text" class="col-form-label">Date:</label>
                                                            <input type="date" name="date" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Description:</label>
                                                            <input type="text" name="transaction_description" class="form-control" required>
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
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered dt-responsive" style="width:100%">
                                    <thead>
                                    <tr class="text-center">
                                        <th>Ser.No</th>
                                        <th>Amount</th>
                                        <th>Transaction Type</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach ($transactions as $transaction){?>
                                    <tr class="text-center">
                                        <td><?php echo $i?></td>
                                        <td><?php echo$transaction->amount?></td>
                                        <td><?php echo$transaction->transaction_name?></td>
                                        <td><?php echo$transaction->name?></td>
                                        <td><?php echo$transaction->date?></td>
                                        <td><?php echo$transaction->transaction_description?></td>
                                    </tr>
                                    <?php $i++; }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
