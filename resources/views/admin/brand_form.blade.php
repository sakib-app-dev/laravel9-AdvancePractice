<x-master>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">

					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<x-form.error/>
							<form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
								  

								  <x-form.input type="text" name="title" label="Brand Title" required placeholder="Brand Title...." />
								</div>
								<div class="form-group">
								  

								  <x-form.input type="file" name="logo" label="Brand Logo"/>
								</div>


								
								@php
									foreach ($color as $key => $data) {
										# code...
										dd($color);
										$list = ['{{ $key }}' => '{{ $data }}',];
									}
								@endphp
								<x-form.select class="form-select form-select-lg mb-3 form-control" name="color" label="Color"   :list=$color />
								
								
								
								

								<div class="form-check">
								  
								  <x-form.radio name="is_active" class="form-check-input" type="checkbox" label="Is Active ?" />
								</div>
								
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
					</div>

				</div>
			</div>
		</div>
</x-master>