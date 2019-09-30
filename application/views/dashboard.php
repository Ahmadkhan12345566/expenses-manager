
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-credit-card text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Income</p>
                            <p class="card-title">Rs <?php echo $total_income->amount;?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Expense</p>
                      <p class="card-title">Rs <?php echo $total_expense->amount;?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Lability</p>
                      <p class="card-title">Rs <?php echo $total_lability->amount;?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> In the last hour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Equity</p>
                      <p class="card-title">Rs <?php echo $total_equity->amount;?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update now
                </div>
              </div>
            </div>
          </div>
        </div>

<!--          <div class="row">-->
<!--          <div class="col-md-12">-->
<!--              <div class="card card-chart">-->
<!--                  <div class="card-header">-->
<!--                      <h5 class="card-title">Weekly Performece</h5>-->
<!--                      <p class="card-category">Line Chart with Points</p>-->
<!--                  </div>-->
<!--                  <div class="card-body">-->
<!--                      <canvas id="cateChart" width="400" height="150"></canvas>-->
<!--                  </div>-->
<!--                  <div class="card-footer">-->
<!--                      <div class="chart-legend">-->
<!--                          <i class="fa fa-circle text-success"></i> Income-->
<!--                          <i class="fa fa-circle text-primary"></i> Equity-->
<!--                          <i class="fa fa-circle text-danger"></i> Expenses-->
<!--                          <i class="fa fa-circle text-warning"></i> Lability-->
<!--                      </div>-->
                      <!--                <hr/>-->
                      <!--                <div class="card-stats">-->
                      <!--                  <i class="fa fa-check"></i> Data information certified-->
                      <!--                </div>-->
<!--                  </div>-->
<!--              </div>-->
<!--          </div>-->
<!--        </div>-->
          <div class="row">
              <div class="col-md-12">
                  <div class="card ">
                      <div class="card-header ">
                          <h5 class="card-title">Users Monthly Behavior</h5>
                          <!--                          <p class="card-category">24 Hours performance</p>-->
                      </div>
                      <div class="card-body ">
                          <canvas id="categoryBarChart" width="400" height="100"></canvas>
                      </div>
                      <div class="card-footer ">
                          <hr>
                          <div class="stats">
                              <i class="fa fa-history"></i> Updated Whole Year
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card ">
                      <div class="card-header ">
                          <h5 class="card-title">Users Yearly Behavior</h5>
<!--                          <p class="card-category">24 Hours performance</p>-->
                      </div>
                      <div class="card-body ">
                          <canvas id="myBarChart" width="400" height="100"></canvas>
                      </div>
                      <div class="card-footer ">
                          <hr>
                          <div class="stats">
                                  <i class="fa fa-history"></i> Updated Whole Year
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <div class="col-md-4">

            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Month Statistics</h5>
                <p class="card-category">Last Month Performance</p>
              </div>
              <div class="card-body ">
                  <canvas id="myChart"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Income
                  <i class="fa fa-circle text-success"></i> Equality
                  <i class="fa fa-circle text-danger"></i> Expenses
                  <i class="fa fa-circle text-warning"></i> Lability
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of monthly statistics
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>