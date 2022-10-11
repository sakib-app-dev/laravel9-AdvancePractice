    <x-master>
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h2 class="title1">Tables</h2>
                    <div class="panel-body widget-shadow">
                        <h4>Product View:</h4>
                        <div class="container text-center">
                            <div class="row">
                                <div class="offset-md-3 col-md-6">
                                    <h1>Product Title: {{ $product->title ?? 'Not Available' }}</h1>
                                    <img src="{{ asset('storage/products/'.$product->image ) }}" alt="" srcset="" height="200px">
                                    <p>Description: {{ $product->description ?? 'Not Available' }}</p>
                                    <p>Category: {{ $product->category ?? 'Not Available' }}</p>
                                    <p>Is Active: {{ $product->is_active ? 'Active' : 'Not Active' }}</p>
                                    
                                </div>
                            </div>
                        </div>
                            
    
                         
                    </div>
    
                </div>
            </div>
        </div>
    </x-master>
    

