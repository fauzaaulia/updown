</main>

<!-- Essential javascripts for application to work-->
<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="<?= base_url('assets/'); ?>js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/chart.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
   $('#sampleTable').DataTable();
</script>

<script type="text/javascript">
   var data_hari = [];
   var data_jml = [];

   $.post("<?= base_url('admin/getDataUpload') ?>",
      function(data) {
         var obj = JSON.parse(data);
         $.each(obj, function(key, value) {
            data_jml.push(value.total);
            data_hari.push(value.hari_upload);
         });

         var data = {
            labels: data_hari,
            datasets: [{
               label: "Upload",
               fillColor: "rgba(151,187,205,0.2)",
               strokeColor: "rgba(151,187,205,1)",
               pointColor: "rgba(151,187,205,1)",
               pointStrokeColor: "#fff",
               pointHighlightFill: "#fff",
               pointHighlightStroke: "rgba(151,187,205,1)",
               data: data_jml
            }]
         };

         var ctxl = $("#lineChartDemo").get(0).getContext("2d");
         var lineChart = new Chart(ctxl).Line(data);

      });
</script>

<!-- Google analytics script-->
<script type="text/javascript">
   if (document.location.hostname == 'pratikborsadiya.in') {
      (function(i, s, o, g, r, a, m) {
         i['GoogleAnalyticsObject'] = r;
         i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
         }, i[r].l = 1 * new Date();
         a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
         a.async = 1;
         a.src = g;
         m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
   }
</script>
</body>

</html>