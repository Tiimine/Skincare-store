@extends('master')
@section("product")
<section id="products" >
    <div class="container my-4">
        <div class="d-flex justify-content-between">
            <div class="text-muted m-2" id="res">Showing 44 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-2 m-1">
                    <span class="text-muted px-2">Sort by</span>
                    <select name="sort" id="sort">
                        <option value="popularity"><b>Popularity</b></option>
                        <option value="prcie"><b>Price</b></option>
                        <option value="rating"><b>Rating</b></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-4 ">
                <div class="card">
                    <img class="card-img-top" src="https://static.wixstatic.com/media/92e661_dcee04770865423f8cc9acd18b335191~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_dcee04770865423f8cc9acd18b335191~mv2.webp">
                    <div class="card-body">
                        <h5><b>Jeju Cherry Blossom Cream 50ml</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">68 000R</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;">Add to cart</button>      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img class="card-img-top" src="https://static.wixstatic.com/media/92e661_52ac64578bba4e29a32936cdcafa0903~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_52ac64578bba4e29a32936cdcafa0903~mv2.webp">
                    <div class="card-body">
                        <h5><b>Green Tea seed cream 50ml</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted ">68 000R</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;">Add to cart</button>      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" >
                    <img class="card-img-top" src="https://static.wixstatic.com/media/92e661_f7ba23c74dcc4c68a18194339cb2f357~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_f7ba23c74dcc4c68a18194339cb2f357~mv2.webp">
                    <div class="card-body">
                        <h5><b>Green Tea Balancing cream</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">68 000R</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;">Add to cart</button>      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img class="card-img-top" src="https://static.wixstatic.com/media/92e661_26e2b40fdf8548dab236b36cfe14121c~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_26e2b40fdf8548dab236b36cfe14121c~mv2.webp">
                    <div class="card-body">
                        <h5><b>Olive Real Power cream 50ml</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">68 000R</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;">Add to cart</button>      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card">
                    <img class="card-img-top" src="https://static.wixstatic.com/media/92e661_aee6174e6dcf4cabbff8e682b70c4278~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_aee6174e6dcf4cabbff8e682b70c4278~mv2.webp">
                    <div class="card-body">
                        <h5><b>Jeju Orchid Enchanted cream</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">65 000R</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;">Add to cart</button>      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative">
                    <img class="card-img-top" src=https://static.wixstatic.com/media/92e661_4dae1c53e2264bb69a59c802ab3e3704~mv2.jpg/v1/fill/w_419,h_419,al_c,q_80,usm_0.66_1.00_0.01/92e661_4dae1c53e2264bb69a59c802ab3e3704~mv2.webphttps://images.pexels.com/photos/3570/morning-breakfast-croissant.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <div class="card-body">
                        <h5><b>Perfect 9 repair cream EX 60ml</b> </h5>
                        <div class="rounded bg-white discount" id="orange">10% off</div>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted price"><del>68 000R</del>&nbsp;60 000R/piece</div>
                            <div class="ml-auto">
                                <button class="border rounded bg-white sign mx-3"><span class="fa fa-plus" id="orange"></span></button>
                                <span class="px-sm-1 me-3">1</span>
                                <button class="border rounded bg-white sign"><span class="fa fa-minus" id="orange"></span></button>
                            </div>
                        </div> 
                        <button class="btn w-100 rounded my-2" style="background-color:antiquewhite;" >Add to cart</button>      
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>
@endsection