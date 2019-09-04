
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
     // ctx.canvas.width = 200;
     //  ctx.canvas.height = 200;
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
        // var ctx = document.getElementById('myBarChart').getContext('2d');
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
        // var ctx = document.getElementById('scatterChart').getContext('2d');
        new Chart(document.getElementById("cateChart"), {
            type: 'line',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [{
                    data: [<?php
                        $j=0;
                        for ($i = 1; $i <= 7; $i++){
                            if (count($day_income)>$j){
                                if ($day_income[$j]->day == $i){
                                    echo $day_income[$j]->amount .",";
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
                        ?>],
                    label: "Income",
                    //backgroundColor: "#3498DB";
                    backgroundColor: "#6bd098",
                    fill: false
                }, {
                    data: [<?php
                        $j=0;
                        for ($i = 1; $i <= 7; $i++){
                            if(count($day_equity)>$j){
                                if ($day_equity[$j]->day == $i){
                                    echo $day_equity[$j]->amount . ",";
                                }else{
                                    echo 0;
                                    echo ",";
                                }
                            }else{
                                echo 0;
                                echo ",";
                            }
                        }
                        ?>],
                    label: "Equity",
                    backgroundColor: "#3498DB",
                    fill: false
                }, {
                    data: [<?php
                        $j=0;
                        for ($i = 1; $i <= 7 ; $i++){
                            if (count($day_expense)>$j){
                                if ($day_expense[$j]->day == $i){
                                    echo $day_expense[$j]->amount . ",";
                                }else {
                                    echo 0;
                                    echo ",";
                                }
                            }else {
                                echo 0;
                                echo ",";
                            }
                        }
                        ?>],
                    label: "Expense",
                    backgroundColor: "#f17e5d",
                    fill: false
                }, {
                    data: [<?php
                        $j=0;
                        for ($i = 1; $i <= 7 ; $i++){
                            if (count($day_lability)>$j){
                                if ($day_lability[$j]->day == $i){
                                    echo $day_lability[$j]->amount . ",";
                                }else {
                                    echo 0;
                                    echo ",";
                                }
                            }else {
                                echo 0;
                                echo ",";
                            }
                        }
                        ?>],
                    label: "Lability",
                    backgroundColor: "#fbc658",
                    fill: false
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
        var ctx = document.getElementById('cateChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
        Datase
    </script>
    <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>