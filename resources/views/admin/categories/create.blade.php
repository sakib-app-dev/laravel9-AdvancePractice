<x-master>
{{-- {{ dd('sfs') }} --}}
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">

					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<x-form.error/>
							<form action="{{ route('admin.category.store') }}" method="POST">
								@csrf
								<div class="form-group">
								  <x-form.input type="text" name="title" label="Product Title" required placeholder="Category Title...." />
								</div>

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