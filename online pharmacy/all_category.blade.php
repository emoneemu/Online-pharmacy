@extends('admin_layout')
@section('admin_content')
			

			<p class="alert-success">
				<?php
				$message=Session::get('message');
				if($message)
				{
					echo $message;
					Session::put ('message',null);
				}
				?>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category ID</th>
								  <th>Category Name</th>
								  <th>Category Description</th>
					              <th>Actions</th>
							  </tr>
						  </thead>  
						  @foreach($all_category_info as $v_category) 
						  <tbody>
							<tr>
								
								<td>{{$v_category->category_id}}</td>
								<td class="center">{{$v_category->category_name}}</td>
								<td class="center">{{$v_category->category_description}}</td>
								
					                <td class="center">
                             
									<a class="btn btn-info" href="{{URL::to('/edit-category/'.$v_category->category_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_category->category_id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							</tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection	