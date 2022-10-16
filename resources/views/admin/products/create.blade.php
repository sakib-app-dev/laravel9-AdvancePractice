<x-master>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">

					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<x-form.error/>
							<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
								  <x-form.input type="text" name="title" label="Product Title" required placeholder="Product Title...." />
								</div>


								{{-- select with component --}}

								{{-- Category --}}
								
								<x-form.select class="form-select form-select-lg mb-3 form-control" name="category" label="Category"   :list=$list />
								
								{{-- Brand --}}
								@php
									
									$list = ['Kids' => 'Kids', 'Men' => 'Men','Women'=>'Women'];
								@endphp
								<x-form.select class="form-select form-select-lg mb-3 form-control" name="brand" label="Brand"   :list=$list />
								
								{{-- color --}}
								@php
									
									$list = ['Kids' => 'Kids', 'Men' => 'Men','Women'=>'Women'];
								@endphp
								<x-form.select class="form-select form-select-lg mb-3 form-control" name="color" label="Color"   :list=$list />
								
								
								
								<div class="form-gorup">
									<x-form.input name='image'  type='file' label='Image'/>
								</div>

								<div class="form-check">
								  {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_active">
								  <label class="form-check-label" for="exampleCheck1">Is Active ?</label> --}}
								  <x-form.radio name="is_active" class="form-check-input" type="checkbox" label="Is Active ?" />
								</div>
								<div class="form-group">
									{{-- <label for="description">Description</label>
									<textarea class="form-control" name="description" id="description" cols="30" rows="4"></textarea> --}}
									<x-form.textarea name="description" class="form-control" id="" cols="30" rows="4" label="Description"/>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
					</div>

				</div>
			</div>
		</div>
</x-master>