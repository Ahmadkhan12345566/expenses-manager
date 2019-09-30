
    <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
<!--            <nav class="footer-nav">-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <a href="ht" target="_blank">Creative Tim</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </nav>-->
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made by Tritechteal
              </span>
            </div>
        </div>
    </div>
</footer>
    </div>
</div>


<!--   Core JS Files   -->
  <script src="application/assets/js/core/jquery.min.js"></script>
  <script src="application/assets/js/core/popper.min.js"></script>
  <script src="application/assets/js/core/bootstrap.min.js"></script>
  <script src="application/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

 <!--begin: DataTable js links -->
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

 <!--end: DataTable js links -->

  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="application/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="application/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="application/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="application/assets/demo/demo.js"></script>
 <script>
     $(document).ready(function() {
         $('#example').DataTable();
     } );
 </script>
    <script>
     var ctx = document.getElementById('myChart').getContext('2d');
     var myChart = new Chart(ctx, {
         type: 'pie',
         data: {
             labels: ['Income  <?php echo(($total_income->amount*100)/$total->amount);?>%) ', 'Equity (<?php echo(($total_equity->amount*100)/$total->amount);?>%)) ',
                 'Expense (<?php echo (($total_expense->amount*100)/$total->amount);?>%)', 'Lability (<?php echo (($total_lability->amount*100)/$total->amount);?>%)'],
             datasets: [{
                 data: [<?php echo $total_income->amount;?>, <?php echo $total_equity->amount;?>,
                     <?php echo $total_expense->amount;?>, <?php echo $total_lability->amount;?>],
                 backgroundColor: [
                     '#6bd098',
                     '#3498DB',
                     '#ef8157',
                     '#fbc658'
                 ],
                 borderWidth: 1
             }]
         },
         options: {
             legend: false,
             responsive: false,
             maintainAspectRatio: false,

         },

     });

    </script>
    <script>
        new Chart(document.getElementById("myBarChart"), {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May","June", "July", "August", "Semptamber", "October", "November", "December"],
                datasets: [
                    {
                        label: "Income",
                        backgroundColor: "#6bd098",
                        data: [<?php
                            $j = 0;
                            for ($i = 1; $i <= 12; $i++) {
                                if (count($graph_total_income) > $j) {

                                    if ($graph_total_income[$j]->month == $i) {
                                        echo $graph_total_income[$j]->amount . ",";
                                        $j++;
                                    } else {
                                        echo 0;
                                        echo ",";
                                    }
                                } else {
                                    echo 0;
                                    echo ",";
                                }
                            }
                            ?>]
                    },
                    {
                        label: "Equity",
                        backgroundColor: "#3498DB",
                        data: [<?php
                            $j=0;
                            for ($i=1; $i <= 12; $i++) {
                                if (count($graph_total_equity)>$j){

                                    if ($graph_total_equity[$j]->month == $i){
                                        echo $graph_total_equity[$j]->amount . ",";
                                        $j++;
                                    } else {
                                        echo 0;
                                        echo ",";
                                    }
                                    } else {
                                        echo 0;
                                        echo ",";
                                }
                            }
                            ?>]
                    },
                    {
                        label: "Expenses",
                        backgroundColor: "#f17e5d",
                        data: [<?php
                            $j = 0;
                            for ($i = 1; $i <= 12; $i++) {
                                if(count($graph_total_expense)>$j){

                                    if ($graph_total_expense[$j]->month == $i) {
                                        echo $graph_total_expense[$j]->amount . ",";
                                        $j++;
                                    } else {
                                        echo 0;
                                        echo ",";
                                    }
                                } else {
                                    echo 0;
                                    echo ",";
                                }
                            }
                            ?>]
                    },
                    {
                        label: "Lability",
                        backgroundColor: "#fbc658",
                        data: [
                            <?php
                            $j=0;
                            for ($i=1; $i <= 12; $i++){
                                if (count($graph_total_lability)>$j){

                                    if ($graph_total_lability[$j]->month == $i){
                                        echo $graph_total_lability[$j]->amount . ",";
                                        $j++;
                                    }else{
                                        echo 0;
                                        echo ",";
                                    }
                                }else{
                                    echo 0;
                                    echo ",";
                                }
                            }
                            ?>
                        ]
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: ''
                }
            }
        });
    </script>
    <script>
        new Chart(document.getElementById("categoryBarChart"), {
            type: 'bar',
            data: {
                labels: [<?php
                    $j=0;
                    foreach ($category_amount as $name) {
                        echo   "\" $name->name \" ". ",";
                    }
                    ?>],
                datasets: [

                    {
                        label: "Categories",
                        backgroundColor: "#ef8157",
                        data: [<?php
                            $j=0;
                            for ($i=0; $i < sizeof($category_amount); $i++) {
                               if($category_amount[$i]->amount) {
                                   echo $category_amount[$i]->amount . ",";
                               }else{
                                   echo 0 . ",";
                               }
                            }
                            ?>]
                    },

                ]
            },
            options: {
                title: {
                    display: true,
                    text: ''
                }
            }
        });
    </script>
    <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>