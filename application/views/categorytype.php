<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="card-header">
                            <h4 class="card-title">Category Type</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="card-header">
                            <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Category</button>
                            <!--begin:Modal Start-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?php echo base_url('categorytype')?>">
                                                <div class="form-group">
                                                    <label>Category Name</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" name="description" class="form-control" rows="3" required></textarea>
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
                            <th scope="col">Category Name</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $category){?>
                        <tr class="text-center">
                            <td><?php echo $category->id ?></td>
                            <td><?php echo $category->name ?></td>
                            <td><?php echo $category->description ?></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
        </div>
    </div>
</footer>
</div>
</div>