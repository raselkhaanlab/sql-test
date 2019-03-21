<!DOCTYPE html>
<html>
<head>
	<title>sql-test</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
   <div class="container-fluid">
   	<div class="row">
   		<div class="col-md-12">
   			<div class="card bg-primary my-2 text-center text-white">
   				<div class="card-body">
   					 <div class="card-text">
   					 	My-question
   					 </div>
   					 <hr>
   					<div class="card-text">
 						Write a mysql query to show Campaigns id, name, lander count and total
						revenue. Tables structure and some sample data provided in the
						below.
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   	<div class="row mt-5">
   		
   		<div class="col-md-4">
   			<div class="table-responsive">
   				<table class="table table-bordered table-striped">
   					<thead class="thead-dark">
   						<tr> <th colspan="2" class="text-center"> campaigns table data</th></tr>
   						<tr>
   						<th>id</th>
   						<th>name</th>
   						
   				
   						</tr>
   					</thead>
   					<tbody>
   						<?php foreach($campaigns as $campaign): ?>
   							<tr> <td><?= $campaign->id ?></td> <td><?= $campaign->name?></td></tr>
   						<?php endforeach; ?> 
   					</tbody>
   				</table>

   			</div>
   		</div>
   		<div class="col-md-4">
   			<div class="table-responsive">
   				<table class="table table-bordered table-striped">
   					<thead class="thead-dark">
   						<tr> <th colspan="3" class="text-center"> landers table data</th></tr>
   						<tr>
   						<th>id</th>
   						<th>name</th>
   						<th>campaign_id</th>
   				
   						</tr>
   					</thead>
   					<tbody>
   						<?php foreach($landers as $lander): ?>
   							<tr> <td><?= $lander->id ?></td> <td> <?= $lander->campaign_id ?></td><td><?= $lander->name?></td></tr>
   						<?php endforeach; ?> 
   					</tbody>
   				</table>

   			</div>
   		</div>
   		<div class="col-md-4">
   			<div class="table-responsive">
   				<table class="table table-striped table-bordered table-hover">
   					
   					<thead class="thead-dark">
   						<tr> <th colspan="4" class="text-center"> Conversions table data</th></tr>
   						<tr>
   						<th>id</th>
   						<th>revenue</th>
   						<th>campaign_id</th>
   						<th>revenue_d</th>
   						</tr>
   					</thead>
   					<tbody>
   						<?php foreach($conversions as $conversion): ?>
   							<tr> 
								<td><?= $conversion->id?></td>
								<td><?= $conversion->revenue ?></td>
								<td><?= $conversion->campaign_id ?></td>
								<td><?= $conversion->lander_id ?></td>
   							</tr>
   						<?php endforeach; ?>
   					</tbody>
   				</table>

   			</div>
   		</div>
   	</div>
    <div class="row">
    	 <div class="col-md-10 mx-auto mb-3">
    	 	
    	 		<div class="card border-success text-center">
    	 			<div class="card-body bg-primary text-light">
    	 				<div class="card-text">
    	 					now you wll getting the result base on the upper 3 table . as the question set.
    	 				</div>
    	 			</div>
    	 		</div>
    	 	</div>
    	 
    </div>
   	<div class="row">
   		
   		 <div class="col-md-8 mx-auto">
   		 	
			<div class="table-responsive">
				
				<table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr><td colspan="4" class="text-center">Result table</td></tr>
						<tr>
						<td>campaign_id</td>
						<td>name</td>
						<td>lander count</td>
						<td> total revenue</td></tr>
					</thead>

					<tbody>
						<?php foreach($exec_results as $result): ?>
							<tr>
								<td><?= $result->campaign_id ?></td>
							<td><?= $result->name ?></td>
							<td><?= $result->lander_count?></td>
							<td><?= $result->total_revenue ?></td>
							</tr>
						<?php endforeach ; ?> 
					</tbody>
				</table>
			</div>

   		 </div>
   	</div>
   </div>
   <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
