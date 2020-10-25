@extends('master')
@section('content')
<div class="container  container-carosel">
		<div class="row">
			
			<div class="col-md-3 col-lg-6" >
				<img src="images/ca.jpg" >

				
			</div>
			<div class="col-md-3 col-lg6">
				<img src="{{asset('mytemplateassets/images/cb.jpg')}}" >

				
			</div>
			<div class="col-md-3 col-lg-6">
				<img src="{{asset('mytemplateassets/images/cc.jpg')}}" >

				
			</div>
			<div class="col-md-3 col-lg-6">
				<img src="{{asset('mytemplateassets/images/cd.jpg')}}">
			</div>
			
		</div>
		
	</div>
	 
	<div class="container my-5 pt-5">
    <h1>Item List</h1>
		<hr class="divider my-2"/>
	</div>
     <!-- show data -->
     <div class="container my-5">
     	<div class="row">
     		<div class="col-md-4 pt-5">
     			<div class="card">
     				<div class="card_img">
     					<img src="{{asset('mytemplateassets/images/o1.jpg')}}" class="image card-img-top border" alt="...">
     					<div class="add_button" data-target="#detailModal" data-toggle="modal">
     						<span class="btn fa-stack fa-lg" title="View Detail">
     							<i class="fas fa-circle fa-stack-2x"></i>
     							<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
     						</span>
     					</div>
     				</div>

     				<div class="card-body text-center">
     					<p class="my-2">Oil-Color</p>
     					<hr class="item-divider my-1"/>
     					<p class="my-2">$250</p>
     					<button class="btn btn-outline-dark btn-block">Add to Card</button>

     				</div>
     			</div>
     		</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/w1.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal2" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Water-Color</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$200</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/d1.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal3" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">3D</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$20</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/o2.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal4" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Oil-Color</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$25</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/w2.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal5" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">Water_Color</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$30</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/d2.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal6" data-toggle="modal"> 
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>

					<div class="card-body text-center">
						<p class="my-2">3D</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$15</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/o3.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal7" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Oil-Color</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$40</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/w3.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal8" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">Water-Color</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$40</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5">
				<div class="card">
					<div class="card_img">
						<img src="{{asset('mytemplateassets/images/d3.jpg')}}" class="image card-img-top border" alt="...">
						<div class="add_button" data-target="#detailModal9" data-toggle="modal">
							<span class="btn fa-stack fa-lg" title="View Detail">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
						</div>
					</div>
					<div class="card-body text-center">
						<p class="my-2">3D</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">$15</p>
						<button class="btn btn-outline-dark btn-block">Add to Card</button>

					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/o1.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1101</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :Oil-Color</p>
        			<p>Price     :$250</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="detailModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/w1.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1102</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :Water-Color</p>
        			<p>Price     :$250</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/d1.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1103</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :3D</p>
        			<p>Price     :$20</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal4">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Deatil</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="images/o2.jpg" class="img-fluid">

						</div>
						<div class="col-md-6">
							<h3>Detail</h3>
							<p>Item Code:1104</p>
							<p>Size     :10in x 15in</p>
							<p>Type     :Oil-Color</p>
							<p>Price     :$25</p>
							<button class="btn-outline-dark">Buy </button>
							<button class="btn-outline-dark">Add to cart </button>


						</div>

					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="detailModal5">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/w2.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1105</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :Water-Color</p>
        			<p>Price     :$250</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal6">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/d2.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1106</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :3D</p>
        			<p>Price     :$15</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal7">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/o3.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1107</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :Oil-Color</p>
        			<p>Price     :$40</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal8">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/w3.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1108</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :Water-Color</p>
        			<p>Price     :$40</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal9">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h3>Deatil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<img src="images/d3.jpg" class="img-fluid">
        			
        		</div>
        		<div class="col-md-6">
        			<h3>Detail</h3>
        			<p>Item Code:1101</p>
        			<p>Size     :10in x 15in</p>
        			<p>Type     :3D</p>
        			<p>Price     :$15</p>
        	<button class="btn-outline-dark">Buy </button>
        	<button class="btn-outline-dark">Add to cart </button>
        		
        			
        		</div>
        		
        	</div>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection