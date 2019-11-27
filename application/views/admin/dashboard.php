<div class="row">
   <div class="col-md-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
         <div class="info">
            <h4>Member</h4>
            <p><b><?= $totmem['0']['total']; ?></b></p>
         </div>
      </div>
   </div>
   <div class="col-md-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
         <div class="info">
            <h4>Uploades</h4>
            <p><b><?= $totfile['0']['total']; ?></b></p>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-6">
      <div class="tile">
         <h3 class="tile-title">Last week upload</h3>
         <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="lineChartData"></canvas>
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="tile">
         <h3 class="tile-title">Type Data n%</h3>
         <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="pieChartData"></canvas>
         </div>
      </div>
   </div>
</div>