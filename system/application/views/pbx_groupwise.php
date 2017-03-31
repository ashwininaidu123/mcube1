<script type="text/javascript">
      google.charts.setOnLoadCallback(drawChart_pbxpop);
   function drawChart_pbxpop () {
	  var graphcontent = new Array();
          <?php   foreach ($pbx_recent_calls as $k) { ?>
		  graphcontent.push(['<?=$k['groupname']?>',<?=$k['count']?>]);
          <?php } ?>
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Group');
			data.addColumn('number', 'Calls');
		   var options = {
			 'title':'Group Wise calls',
			 'is3D': true,
			 'width' : 850,
				'height': 350,
			 pieSliceText: 'label',
			 legend: {position: 'top', textStyle: {fontSize: 13}},
			};
			data.addRows(graphcontent);
			
        var chart = new google.visualization.PieChart(document.getElementById('pbx_groupwisecallpop'));
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
                <div id="pbx_groupwisecallpop"></div>
			</div>
		</div>
	</div>
