@extends('chuckcms-module-pos::layouts.donuttello')
@section('content')
    <div class="wrapper container-fluid p-0 d-flex">
        <div class="main col-8">
            <div class="header row">
                <div class="container d-flex">
                    <div class="col-4">
                        <img class="logo" alt="logo" src="{{asset('chuckbe/chuckcms-module-pos/donuttello-logo.png')}}"/>
                    </div>
                    <div class="col-8 headerSearchArea d-flex justify-content-end">
                        <div class="text-right d-flex justify-content-end align-items-center h-100">
                            <form action="#">
                                <input type="search" id="headerSearch" name="headerSearch">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="text-right d-flex justify-content-end align-items-center h-100">
                            <button type="button" class="btn btn-light align-self-center">
                                <i class="far fa-question-circle"></i> Help
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menuArea row">
                <div class="container">
                {{-- {{ dd( Auth::user()->name )}} --}}
                    <nav>
                        <ul class="nav nav-pills" id="navigationTab" role="tablist">
                          <li class="nav-item mr-3">
                            <a class="nav-link active" id="navtiagtionDonutsTab" href="#donuts" role="tab" data-toggle="tab" aria-controls="donutsTab" aria-selected="true">Donuts</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="navtiagtionSnoepTab" href="#snoep" role="tab" data-toggle="tab" aria-controls="snoepTab" aria-selected="false">Snoep</a>
                          </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="menuItemArea row">
                <div class="container pl-5 pr-5 d-flex">
                    <div class="tab-content" id="navigationTabContent">
                        <div class="tab-pane fade show active" id="donuts" role="tabpanel" aria-labelledby="donutsTab">
                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="snoep" role="tabpanel" aria-labelledby="snoepTab">
                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="text-line"> </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-line"> </div>
                                                </div>
                                                <div class="col-6"> 
                                                    <div class="preloadimage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="handlerArea row">
                <div class="container pl-5 pr-5 pt-4">
                    <div class="row">

                        <div class="col-5 p-1">
                            <div class="card shadow kassieriInfomatie">
                                <div class="card-body">
                                  <h5 class="card-title">Kassierinfomatie</h5>
                                  <div class="row pb-2 align-items-center">
                                      {{-- <div class="col-3">
                                        <img src="{{asset('chuckbe/chuckcms-module-pos/send-money-in-person-from-jamaica-resp.webp')}}" class="img-fluid" alt="handler">
                                      </div> --}}
                                      <div class="col-7 m-0 py-1 px-3">
                                        <p class="card-text mb-1">{{ucwords(Auth::user()->name)}}</p>
                                        {{-- <button class="btn btn-sm">textje</button> --}}
                                      </div>
                                      <div class="col-5 m-0 py-0 px-3 d-flex justify-content-end">
                                        <a href="{{URL::to('/logout')}}" class="btn">Ontkoppelen</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 p-1">
                            <div class="card shadow promoInformatie">
                                <div class="card-body">
                                  <h5 class="card-title">Promo-code toevoegen</h5>
                                  <div class="row pb-3 align-items-center">
                                    <div class="col-4">
                                        <button class="btn w-100">Promo</button>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn w-100">Promo</button>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn w-100">Promo</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestelling col-4">
            <div class="bestelHeader row align-items-center">
                <div class="col-6 text-left h-100">
                    <h4 class="bestelHeaderTitle">Bestelling</h4>
                </div>
                <div class="col-6 text-right bestelHeaderInstellingen h-100">
                    <button type="button" class="btn shadow-sm">Verwijder alles</button>
                    <button type="button" class="btn shadow-sm"><i class="fas fa-cog"></i></button>
                </div>
            </div>
            <div class="bestelTabHandler row">
                <nav class="nav nav-pills flex-column flex-sm-row" id="bestelNavigationTab" role="tablist">       
                    <a class="flex-sm-fill text-sm-center nav-link"  id="bestelNavigationnNieuweBestellingTab" href="#nieuweBestelling" aria-selected="false">
                        <span><i class="fas fa-plus"></i><span>
                        <span>nieuwe order</span>
                    </a>
                    <a class="flex-sm-fill text-sm-center nav-link active" id="bestelNavigationbestelcode0123Tab" href="#bestelcode0123" role="tab" data-toggle="tab" aria-controls="bestelcode0123Tab" aria-selected="true">
                        <span>bestelcode: #0123</span>
                        <span class="remove-tab"><i class="fas fa-times-circle"></i></span>
                    </a>
                </nav>
            </div>
            <div class="bestelTabArea row">
                <div class="tab-content" id="bestelNavigationTabContent">
                    <div class="tab-pane fade show active" id="bestelcode0123"  role="tabpanel" aria-labelledby="bestelcode0123Tab">
                        <div class="bestelOrder row align-items-center">
                            <div class="col-5 bestelOrderDetails">
                                <div class="col bestelOrderImg">
                                    <div class="preloadimage"></div>
                                    {{-- <img src="{{asset('chuckbe/chuckcms-module-pos/donuttello_discovery_box_1-01.jpg')}}" class="img-fluid" alt="orderImage"> --}}
                                </div>
                                <div class="col bestelOrderTitle">
                                    <div class="text-line"> </div>
                                    {{-- <span>Doosje van 6</span> --}}
                                </div> 
                            </div>
                            <div class="col-4 bestelOrderQuantity">
                                <div class="bestelOrderQuantityControl trash">
                                    <a href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                                <input type="text" id="quantity" name="quantity" value="1">
                                <div class="bestelOrderQuantityControl">
                                    <a href="#">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 bestelOrderPrice">
                              {{-- € 15,00 --}}
                              <div class="text-line" style="width: 50%"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="klantArea row">
                <div class="container">
                    <div class="card shadow-sm">
                        <div class="card-body">
                          <h5 class="card-title">Klantgegevens</h5>
                          <div class="row">
                              <div class="col-7 klantDetails">
                                  <div class="col-2 klantIcon">
                                    <i class="fas fa-user-circle"></i>
                                  </div>
                                  <div class="col-10 klantGegevens">
                                      <p>Klanten ID</p>
                                      <p>063757157628791</p>
                                  </div>
                              </div>
                              <div class="col-5 klantKoppeler">
                                <button class="btn w-100">Ontkoppelen</button>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="priceCalculatorArea row">
                <div class="container">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="subtotaal row">
                              <div class="col-6 text-left">Subtotaal</div>
                              <div class="col-6 text-right">€ 120,00</div>
                            </div>
                            <div class="korting row">
                                <div class="col-6 text-left">Korting</div>
                                <div class="col-6 text-right">- € 12,00</div>
                            </div>
                            <div class="btw row">
                                <div class="col-6 text-left">BTW</div>
                                <div class="col-6 text-right">€ 25,20</div>
                            </div>
                            <hr class="priceCalculatorDivider"/>
                            <div class="totaal row">
                                <div class="col-6 text-left">Totaal</div>
                                <div class="col-6 text-right">€ 133,20</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="betaalArea row">
                <div class="container">
                    <button class="btn text-center d-block">Betalen</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
var GenRandom =  {
	
    Stored: [],
	
	Job: function(){
		var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string
		
        if( !this.Check(newId) ){
            this.Stored.push(newId);
            return newId;
        }
        
        return this.Job();
	},
	
	Check: function(id){
		for( var i = 0; i < this.Stored.length; i++ ){
			if( this.Stored[i] == id ) return true;
		}
		return false;
	}
	
};
$(document).ready(function(){
    $.ajax({
        url: "http://chuck.package/dashboard/pos/data",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            //console.log(res);
            localStorage.setItem('pos-products', JSON.stringify(res));        

            //define a function to set cookies
            function setCookie(name,value,days) {
              var expires = "";
              if (days) {
                  var date = new Date();
                  date.setTime(date.getTime() + (days*24*60*60*1000));
                  expires = "; expires=" + date.toUTCString();
              }
              document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            }

            function ucwords(str,force){
              str=force ? str.toLowerCase() : str;  
                return str.replace(/(\b)([a-zA-Z])/g,
                function(firstLetter){
                    return   firstLetter.toUpperCase();
                });
            }
            // READ STRING FROM LOCAL STORAGE
            var retrievedObject = localStorage.getItem('pos-products');

            // CONVERT STRING TO REGULAR JS OBJECT
            var parsedObject = JSON.parse(retrievedObject);

            // ACCESS DATA
            console.log(parsedObject.collections);
            console.log(parsedObject.products);
            
            if(parsedObject.collections.length > 0) {
              
              $('#navigationTab').empty();

              parsedObject.collections.forEach((category,categoryIndex)=> {
                $('#navigationTab').append(`<li class="nav-item mr-3"><a class="nav-link ${categoryIndex == 0 ? 'active' : ''}" id="navtiagtion${ucwords(category.json.name.toLowerCase())}Tab" href="#${category.json.name.toLowerCase()}" role="tab" data-toggle="tab" aria-controls="donutsTab" aria-selected="true">${category.json.name}</a></li>`)
              });
            }

            if(parsedObject.products.length > 0) {
              $('#navigationTabContent').empty();
              parsedObject.collections.forEach((category,categoryIndex)=> {
                let $tabpanel = $(`<div class="tab-pane fade show ${categoryIndex == 0 ? 'active' : ''}" id="${category.json.name.toLowerCase()}" role="tabpanel" aria-labelledby="${category.json.name.toLowerCase()}Tab"></div>`);
                $('#navigationTabContent').append($tabpanel);
                $(`.tab-pane#${category.json.name.toLowerCase()}`).append(`<div class="row" id="row${category.json.name.toLowerCase()}"></div>`);
                parsedObject.products.forEach((product, productIndex)=> {
                  if(product.json.collection == category.id) {
                    let featured_img = '';
                    for (var key in product.json.images) { 
                      if(product.json.images[key].is_featured === true) {
                        var url = window.location.protocol + "//" + location.host.split(":")[0];
                        featured_img = url+product.json.images[key].url.replace(" ","%20");
                      }
                    }
                    let $card = $(`<div class="col-3 p-1 posproduct ${(product.json.quantity > 0) ? '' : 'unavailable'}" data-pid=${product.id}>
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                          <h5 class="card-title">${product.json.title.nl}</h5>
                                          <div class="row">
                                              <div class="col">
                                                <h6 class="card-subtitle mb-2 text-muted">€ ${parseFloat(product.json.price.final).toFixed(2).replace(".", ",")}</h6>
                                                ${(product.json.quantity > 0) ? '' : '<p style="font-size: 10px; color: #e72870">Niet beschikbaar</p>'}
                                              </div>
                                              <div class="col">
                                                <img src=${featured_img} class="img-fluid" alt=${product.json.title.nl}>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>`);
                    $(`.tab-pane#${category.json.name.toLowerCase()} #row${category.json.name.toLowerCase()}`).append($card);
                  }
                });
              });
            }
        }
    });
    var checkExist = setInterval(function() {
        if ($('.posproduct').length) {
            $( ".posproduct" ).each(function(index) {
                $(this).on("click", function(){
                    var id = $(this).data('pid');
                    addToCart(id);
                });
            });
            clearInterval(checkExist);
        }
    }, 100); // check every 100ms

    // bestel navigation system
    $('#bestelNavigationnNieuweBestellingTab').on("click", function() {
        $('#bestelNavigationTab').children().removeClass("active");
        $('#bestelNavigationTabContent').children().removeClass("active");
        let $randomBestelCode = GenRandom.Job();
        let $newTab = $(`<a class="flex-sm-fill text-sm-center nav-link active" id="bestelNavigationbestelcode${$randomBestelCode}Tab" href="#bestelcode${$randomBestelCode}" role="tab" data-toggle="tab" aria-controls="bestelcode${$randomBestelCode}Tab" aria-selected="true"><span>bestelcode: #${$randomBestelCode}</span><span class="remove-tab"><i class="fas fa-times-circle"></i></span></a>`)
        let $newTabPane = $(`<div class="tab-pane fade show active" id="bestelcode${$randomBestelCode}"  role="tabpanel" aria-labelledby="bestelcode${$randomBestelCode}Tab"></div>`)
        $('#bestelNavigationTab #bestelNavigationnNieuweBestellingTab').after($newTab);
        $('#bestelNavigationTabContent').prepend($newTabPane);
    });
    
    
    $(document).on("click","#bestelNavigationTab .nav-link .remove-tab",function() {
        let $tab = $(this).parent();
        let tabpaneid = $($tab).prop('href').split('#')[1];
        let $nextTab = $tab.next('.nav-link');
        let $nextTabPane = $(`#bestelNavigationTabContent #${tabpaneid}`).next('.tab-pane');
        $nextTab.addClass("active");
        $nextTabPane.addClass("active");
        $(`#bestelNavigationTabContent #${tabpaneid}`).remove();
        $($tab).remove();
    });
    // bestel navigation system ends

    // bestel cart area
    const addToCart = function(id) {
       // console.log(`add ${id} to cart`);
       var local = localStorage.getItem('pos-products');
       var localParsed = JSON.parse(local);
       localParsed.products.forEach((product, productIndex)=> {
           if(product.id == id){
               console.log(product.json.page_title.nl);

           }
       });

    }

    // bestel cart area ends
});
</script>
@endsection