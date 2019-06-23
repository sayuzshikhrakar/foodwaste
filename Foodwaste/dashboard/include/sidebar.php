<body>
<div class="col-sm-3 col-md-3 sidebar">
          <ul class="nav nav-sidebar">
                       <?php
            if($type == 'admin')
            {
                ?>
                <li><a href="dashboard.php"> <i class="fa fa-dashboard"></i>  Dashboard</a></li>
                <li><a href="feedback.php"> <i class="fa fa-comment"></i>Feedback</a></li>
                <li><a href="bargraph.php"> <i class="fa fa-bar-chart"></i> Analysis</a></li>
                <?php
            } 
            else
            {
            ?>
            <li><a href="dashboard.php"> <i class="fa fa-dashboard"></i>  Dashboard</a></li>
            <li><a href="user.php"> <i class="fa fa-calendar"></i>My Schedule</a></li>
            <li><a href="bargraph.php"> <i class="fa fa-bar-chart"></i> Analysis</a></li>

            
            
         <?php
            } ?>
  
        </div>
</body>

<script>
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}
</script>
?<script src="../js/bootstrap.min.js"></script>
<script src='../js/jquery-ui.min.js' type='text/javascript'></script>
        
        <script type='text/javascript'>
     $(document).ready(function(){
       var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();

            $('#datepicker').datepicker({
                dateFormat: "yy-mm-dd",
                maxDate:'auto',
                minDate: 0

            });
        });

  $(document).ready(function(){
       var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
            // Date Object
            $('#datepicker1').datepicker({
                dateFormat: "yy-mm-dd",
                minDate: 0

            });

            });



        </script>
</html>

