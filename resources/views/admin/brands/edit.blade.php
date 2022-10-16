<x-master>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div> 
				@endif
				<div class="forms">
					{{-- @dd($product->category = 'Men'); --}}
					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<form action="{{ route('admin.product.update',$product->id) }}" method="POST">
								@csrf
								@method('patch')

								{{--  
								<div class="form-group">
								  <label for="product_title">Title</label>
								  <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter Product Title...." value="{{ old('title', $product->title ) }}">
								  @error('title')
								  <span class="form-text text-danger">{{ $message }}</span>
								  @enderror
								</div>
								{{ $product->category }}
								<select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" name="category">
									
									
									<option value='kids' @if($product->category =='kids') selected @endif> Kids</option>
									<option value='Men' @if($product->category =='Men') selected @endif>Men</option>
									<option value='Women' @if($product->category == 'Women') selected @endif>Women</option>
									
								</select>
								
								

								<div class="form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_active" {{ $product->is_active== '1'? 'checked':'' }} >
								  
								  <label class="form-check-label" for="exampleCheck1">Is Active ?</label>
								</div>
								<div class="form-group">
									<label for="description">Description</label>
									<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $product->description }}</textarea>
								</div>

								--}}
								<div class="form-group">
									
									<x-form.input type="text" name="title" label="Product Title" value="{{ old('title', $product->title ) }}" required placeholder="Product Title...." />
								</div>

							
								@php
									
									$list = ['Kids' => 'Kids', 'Men' => 'Men','Women'=>'Women'];
								@endphp
								<x-form.select class="form-select form-select-lg mb-3 form-control" name="category"   :list=$list />

								<div class="form-check">
								  
								  <x-form.radio name="is_active" class="form-check-input"  type="checkbox" label="Is Active ?"/>
								</div>

								<div class="form-group">
									<x-form.textarea name="description" class="form-control" id="" cols="30" rows="4" label="Description" text="{{ $product->description }}"/>
								</div>
								
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
					</div>

				</div>
			</div>
		</div>
</x-master>