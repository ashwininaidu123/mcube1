 <script type="text/javascript">
      google.charts.setOnLoadCallback(drawChartmpop);
  function drawChartmpop() {
	  var graphcontent = new Array();
          <?php   foreach ($groupwise_missedcalls as $k) { ?>
		  graphcontent.push(['<?=$k['gname']?>',<?=$k['cnt']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
		    var options = {
			 'title':'Missed Calls By Group',
			 'is3D': true,
			 'width' : 850,
			 	'height': 350,
			  pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			data.addRows(graphcontent);
        var chart = new google.visualization.PieChart(document.getElementById('groupwise_missedcallspop'));
        chart.draw(data, options);
	 }
</script>
<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $module['title'];?></h4>
			</div>
			<div class="modal-body">
                <div id="groupwise_missedcallspop"></div>
			</div>
		</div>
	</div>

