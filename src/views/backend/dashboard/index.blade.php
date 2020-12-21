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
                                      <div class="col-7 m-0 py-1 px-3">
                                        <p class="card-text mb-1">{{ucwords(Auth::user()->name)}}</p>
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
                    <button type="button" class="btn shadow-sm deletealles">Verwijder alles</button>
                    <button type="button" class="btn shadow-sm"><i class="fas fa-cog"></i></button>
                </div>
            </div>
            <div class="bestelTabHandler row">
                <nav class="nav nav-pills flex-column flex-sm-row" id="bestelNavigationTab" role="tablist">       
                    <a class="flex-sm-fill text-sm-center nav-link"  id="bestelNavigationnNieuweBestellingTab" data-target="nieuweBestelling" href="#nieuweBestelling" aria-selected="false">
                        <span><i class="fas fa-plus"></i><span>
                        <span>nieuwe order</span>
                    </a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link active" id="bestelNavigationbestelcode0123Tab" data-bestel-id="bestelcode0123" href="#bestelcode0123" role="tab" data-toggle="tab" aria-controls="bestelcode0123Tab" aria-selected="true">
                        <span>bestelcode: #0123</span>
                        <span class="remove-tab"><i class="fas fa-times-circle"></i></span>
                    </a> --}}
                </nav>
            </div>
            <div class="bestelTabArea row">
                <div class="tab-content" id="bestelNavigationTabContent">
                    <div class="tab-pane fade show active" id="bestelcode0123"  role="tabpanel" aria-labelledby="bestelcode0123Tab"  data-bestel-id="bestelcode0123"></div>
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
                              <div class="col-6 text-right st-value">€ 0,00</div>
                            </div>
                            <div class="korting row">
                                <div class="col-6 text-left">Korting</div>
                                <div class="col-6 text-right ko-value">€ 0,00</div>
                            </div>
                            <div class="btw row">
                                <div class="col-6 text-left">BTW</div>
                                <div class="col-6 text-right btw-value">€ 0,00</div>
                            </div>
                            <hr class="priceCalculatorDivider"/>
                            <div class="totaal row">
                                <div class="col-6 text-left">Totaal</div>
                                <div class="col-6 text-right tot-value">€ 0,00</div>
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
{{-- <script src="{{asset('chuckbe/chuckcms-module-pos/scripts/app.js')}}"></script> --}}
<script>
let online = true;
setInterval(function(){
    let img = new Image();
    img.onerror=function() {
        online = false;
    }
    img.src="https://donuttello.com/img/donuttello-logo.png?rnd="+new Date().getTime();
}, 3000);
var cart = [];
if (localStorage.getItem("cart") !== null) {
  let storedCart = JSON.parse(localStorage.getItem('cart'));
  cart = storedCart;
  console.log(storedCart);
  storedCart.forEach((billItem)=> {
      let bestelNavigation = $('#bestelNavigationTab');
      let $tab = $(`<a class="flex-sm-fill text-sm-center nav-link" id="bestelNavigation${billItem.rekening}Tab" href="#${billItem.rekening}" role="tab" data-toggle="tab" aria-controls="${billItem.rekening}Tab" aria-selected="true" data-bestel-id="${billItem.rekening}"><span>bestelcode: #${(billItem.rekening).match(/\d/g).join("")}</span><span class="remove-tab"><i class="fas fa-times-circle"></i></span></a>`);
      let $tabPane = $(`<div class="tab-pane fade show" id="${billItem.rekening}"  role="tabpanel" aria-labelledby="${billItem.rekening}Tab" data-bestel-id="${billItem.rekening}"></div>`)  
      $('#bestelNavigationTab #bestelNavigationnNieuweBestellingTab').after($tab);
      $('#bestelNavigationTabContent').prepend($tabPane);
      let bestelPane = $('#bestelNavigationTabContent').find(`[data-bestel-id='${billItem.rekening}']`);
      if(bestelPane.attr("data-bestel-id") == billItem.rekening) {
        bestelPane.empty();
        billItem.products.map(function(product) {
            let featured_img = '';
            for( let key in product.productData.json.images) {
                if(product.productData.json.images[key].is_featured === true) {
                    let url = window.location.protocol + "//" + location.host.split(":")[0];
                    featured_img = url+product.productData.json.images[key].url.replace(" ","%20");
                }
            }
            let newOrder = 
            $(`
                <div class="bestelOrder row align-items-center" data-product-id=${product.productData.id}>
                    <div class="col-5 bestelOrderDetails">
                        <div class="col bestelOrderImg">
                            <img src="${featured_img}" class="img-fluid" alt="${product.productData.json.title.nl}">
                        </div>
                        <div class="col bestelOrderTitle">
                            <span>${product.productData.json.title.nl}</span>
                        </div> 
                    </div>
                    <div class="col-4 bestelOrderQuantity">
                        <div class="bestelOrderQuantityControl trash">
                            <div class="deletebtn">
                                ${(product.quantity > 1) ? '<i class="fas fa-minus"></i>': '<i class="fas fa-trash"></i>'}
                            </div>
                        </div>
                        <input type="text" id="quantity_product${product.productData.id}" name="quantity" value="${product.quantity}">
                        <div class="bestelOrderQuantityControl">
                            <div class="addbtn"><i class="fas fa-plus"></i></div>
                        </div>
                    </div>
                    <div class="col-3 bestelOrderPrice">
                        € ${parseFloat(product.productData.json.price.final * product.quantity).toFixed(2).replace(".", ",")}
                    </div>
                </div>
            `);
            //console.log(parseFloat(product.productData.json.price.final * product.quantity).toFixed(2).replace(".", ","));
            bestelPane.append(newOrder);
        });
      }
      if(billItem.state === 'active') {
          $('#bestelNavigationTab').children().removeClass("active");
          $('#bestelNavigationTabContent').children().removeClass("active");
          $tab.addClass("active");
          $tabPane.addClass("active");
          let amountCalc = [];
          $('#bestelNavigationTabContent .active .bestelOrder').each(function(){
              amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
          });
          let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
          //console.log(total, amountCalc);
          $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`)
      }
  });

}
let GenRandom =  {
    Stored: [],
	
	Job: function(){
		let newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string
		
        if( !this.Check(newId) ){
            this.Stored.push(newId);
            return newId;
        }
        
        return this.Job();
	},
	
	Check: function(id){
		for( let i = 0; i < this.Stored.length; i++ ){
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
            localStorage.setItem('pos-products', JSON.stringify(res));        
            function ucwords(str,force){
              str=force ? str.toLowerCase() : str;  
                return str.replace(/(\b)([a-zA-Z])/g,
                function(firstLetter){
                    return   firstLetter.toUpperCase();
                });
            }
            // READ STRING FROM LOCAL STORAGE
            let retrievedObject = localStorage.getItem('pos-products');

            // CONVERT STRING TO REGULAR JS OBJECT
            let parsedObject = JSON.parse(retrievedObject);

            // ACCESS DATA
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
                    parsedObject.products.forEach((product)=> {
                        if(product.json.collection == category.id) {
                            let featured_img = '';
                            for (let key in product.json.images) { 
                                if(product.json.images[key].is_featured === true) {
                                    let url = window.location.protocol + "//" + location.host.split(":")[0];
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
    let checkExist = setInterval(function() {
        if ($('.posproduct').length) {
            $( ".posproduct" ).each(function(index) {
                $(this).on("click", function(){
                    let id = $(this).data('pid');
                    addToCart(id);
                });
            });
            clearInterval(checkExist);
        }
    }, 100); // check every 100ms

    // bestel navigation system
    if($("#bestelNavigationTab").children().length < 2){
        let $randomBestelCode = GenRandom.Job();
        let $newTab = $(`<a class="flex-sm-fill text-sm-center nav-link active" id="bestelNavigationbestelcode${$randomBestelCode}Tab" href="#bestelcode${$randomBestelCode}" role="tab" data-toggle="tab" aria-controls="bestelcode${$randomBestelCode}Tab" aria-selected="true" data-bestel-id="bestelcode${$randomBestelCode}"><span>bestelcode: #${$randomBestelCode}</span><span class="remove-tab"><i class="fas fa-times-circle"></i></span></a>`)
        let $newTabPane = $(`<div class="tab-pane fade show active" id="bestelcode${$randomBestelCode}"  role="tabpanel" aria-labelledby="bestelcode${$randomBestelCode}Tab" data-bestel-id="bestelcode${$randomBestelCode}"></div>`)
        $('#bestelNavigationTab #bestelNavigationnNieuweBestellingTab').after($newTab);
        $('#bestelNavigationTabContent').prepend($newTabPane);
        cart.push({
            'rekening': `bestelcode${$randomBestelCode}`,
            'state': 'active',
            'products': []
        });
        localStorage.setItem('cart', JSON.stringify(cart));
    };

    // creates new tab
    $('#bestelNavigationnNieuweBestellingTab').on("click", function(e) {
        e.preventDefault();
        $('#bestelNavigationTab').children().removeClass("active");
        $('#bestelNavigationTabContent').children().removeClass("active");
        let $randomBestelCode = GenRandom.Job();
        let $newTab = $(`<a class="flex-sm-fill text-sm-center nav-link active" id="bestelNavigationbestelcode${$randomBestelCode}Tab" href="#bestelcode${$randomBestelCode}" role="tab" data-toggle="tab" aria-controls="bestelcode${$randomBestelCode}Tab" aria-selected="true" data-bestel-id="bestelcode${$randomBestelCode}"><span>bestelcode: #${$randomBestelCode}</span><span class="remove-tab"><i class="fas fa-times-circle"></i></span></a>`)
        let $newTabPane = $(`<div class="tab-pane fade show active" id="bestelcode${$randomBestelCode}"  role="tabpanel" aria-labelledby="bestelcode${$randomBestelCode}Tab" data-bestel-id="bestelcode${$randomBestelCode}"></div>`)
        $('#bestelNavigationTab #bestelNavigationnNieuweBestellingTab').after($newTab);
        $('#bestelNavigationTabContent').prepend($newTabPane);
        cart.forEach((cartItem,cartIndex)=>{
            cartItem.state = 'inactive';
        })
        cart.push({
            'rekening': `bestelcode${$randomBestelCode}`,
            'state': 'active',
            'products': []
        });
        localStorage.setItem('cart', JSON.stringify(cart));
        let activeRekeningId = `bestelcode${$randomBestelCode}`;
        let amountCalc = [];
        $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
            amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
        });
        let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
        $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`)
    });
    
    // removes products
    $(document).on("click","#bestelNavigationTab .nav-link .remove-tab",function(event) {
        event.preventDefault();
        event.stopPropagation();
        let $tab = $(this).parent();
        let tabpaneid = $($tab).prop('href').split('#')[1];
        let $nextTab = $tab.next('.nav-link');
        let $prevTab = $tab.prev('.nav-link');
        let $activeBestelId = ($nextTab.length == 0) ? $prevTab.attr('data-bestel-id') : $nextTab.attr('data-bestel-id');
        if($nextTab.length == 0){
            let $prevTabPane = $(`#bestelNavigationTabContent #${tabpaneid}`).prev('.tab-pane');
            if($prevTab.attr('data-target') != 'nieuweBestelling'){
                $prevTab.addClass("active");
                $prevTabPane.addClass("active");
            }
        }else{
            let $nextTabPane = $(`#bestelNavigationTabContent #${tabpaneid}`).next('.tab-pane');
            $nextTab.addClass("active");
            $nextTabPane.addClass("active");
        }
        $(`#bestelNavigationTabContent #${tabpaneid}`).remove();
        $($tab).remove();
        for (i = 0; i < cart.length; i++) {
            if(cart[i].rekening == $activeBestelId){
                cart[i].state = 'active';
            }
            if(cart[i].rekening == `${tabpaneid}`){
                cart = cart.filter(item => item !== cart[i]) //remove element from array;
            }
        }
        console.log($activeBestelId);
        localStorage.setItem('cart', JSON.stringify(cart));
        let activeRekeningId = $activeBestelId;
        let amountCalc = [];
        $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
            amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
        });
        let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
        console.log($('.priceCalculatorArea .st-value'));
        console.log(`€ ${total.toFixed(2).replace(".", ",")}`)
        $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`);
    });
    // bestel navigation system ends

    // bestel cart area
    let local = localStorage.getItem('pos-products');
    let localParsed = JSON.parse(local);
    // add to cart btn on tapping the product
    const addToCart = function(id) {
        localParsed.products.forEach((product)=> {
            if(product.id == id){
                if(!$.isEmptyObject(product.json.combinations)){
                    console.log("product with combination");
                    let $wrapper = $('.wrapper');
                    let $modal = $(`<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`);
                    $wrapper.append($modal);
                    $('#exampleModal').modal('show');
                }else{
                    let activeRekeningId = $("#bestelNavigationTabContent .tab-pane.active").attr('data-bestel-id');
                    cart.forEach((cartItem)=>{
                        if(cartItem.rekening == activeRekeningId){
                            cartItem.state = 'active';
                            if(cartItem.products.length === 0){
                                cartItem.products.push({
                                    'productData': product,
                                    'quantity': 1
                                });
                                localStorage.setItem('cart', JSON.stringify(cart));
                            }else {
                                let isProductPresent = cartItem.products.some(el => el.productData.id === id);
                                if(isProductPresent){
                                    cartItem.products.forEach((cartproduct)=>{
                                        if(cartproduct.productData.id === id){
                                            cartproduct.quantity = cartproduct.quantity+1;
                                            localStorage.setItem('cart', JSON.stringify(cart));
                                        }
                                    });
                                }else{
                                    cartItem.products.push({
                                        'productData': product,
                                        'quantity': 1
                                    });
                                    localStorage.setItem('cart', JSON.stringify(cart));
                                }
                                
                            }
                            localStorage.setItem('cart', JSON.stringify(cart));
                        }else{
                            cartItem.state = 'inactive';
                            localStorage.setItem('cart', JSON.stringify(cart));
                        }
                        
                    });
                }
            }
        });
        cart.forEach( cartItem=>{
            let bestelPane = $('#bestelNavigationTabContent').find(`[data-bestel-id='${cartItem.rekening}']`);
            if(bestelPane.hasClass('active')){
                if(bestelPane.attr("data-bestel-id") == cartItem.rekening) {
                    bestelPane.empty();
                    cartItem.products.map(function(product) {
                        let featured_img = '';
                        for( let key in product.productData.json.images) {
                            if(product.productData.json.images[key].is_featured === true) {
                                let url = window.location.protocol + "//" + location.host.split(":")[0];
                                featured_img = url+product.productData.json.images[key].url.replace(" ","%20");
                            }
                        }
                        let newOrder = 
                        $(`
                            <div class="bestelOrder row align-items-center" data-product-id=${product.productData.id}>
                                <div class="col-5 bestelOrderDetails">
                                    <div class="col bestelOrderImg">
                                        <img src="${featured_img}" class="img-fluid" alt="${product.productData.json.title.nl}">
                                    </div>
                                    <div class="col bestelOrderTitle">
                                        <span>${product.productData.json.title.nl}</span>
                                    </div> 
                                </div>
                                <div class="col-4 bestelOrderQuantity">
                                    <div class="bestelOrderQuantityControl trash">
                                        <div class="deletebtn">
                                            ${(product.quantity > 1) ? '<i class="fas fa-minus"></i>': '<i class="fas fa-trash"></i>'}
                                        </div>
                                    </div>
                                    <input type="text" id="quantity_product${product.productData.id}" name="quantity" value="${product.quantity}">
                                    <div class="bestelOrderQuantityControl">
                                        <div class="addbtn"><i class="fas fa-plus"></i></div>
                                    </div>
                                </div>
                                <div class="col-3 bestelOrderPrice">
                                    € ${parseFloat(product.productData.json.price.final * product.quantity).toFixed(2).replace(".", ",")}
                                </div>
                            </div>
                        `);
                        bestelPane.append(newOrder);
                        let activeRekeningId = cartItem.rekening;
                        let amountCalc = [];
                        $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
                            amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
                        });
                        let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
                        $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`);
                    });
                }
            }

        });
    }
    //delete btn below
    $(document).on('click', '.bestelOrderQuantityControl .deletebtn', function(event) {
        let tab = $(this).parents()[3];
        let orderId = $(tab).attr('id');
        let productrow = $(this).parents()[2];
        let productId = $(productrow).attr('data-product-id');
        let bestelOrderQuantity = $(this).parent().siblings('input').val();
        //console.log(bestelOrderQuantity);
        if(bestelOrderQuantity <= 2){
            let deletebtn = $(this);
            deletebtn.html('<i class="fas fa-trash"></i>')
        }
        cart.forEach((cartItem)=>{
            if(orderId == cartItem.rekening){
                cartItem.state = 'active';
                //console.log("delete this item: ",cartItem);
                cartItem.products.forEach((product)=>{
                    if(product.productData.id == productId){
                        //console.log("delete this item: ", product);
                        if(product.quantity > 1){
                            product.quantity = product.quantity - 1;
                            localStorage.setItem('cart', JSON.stringify(cart));
                            $(this).parent().siblings(`input#quantity_product${product.productData.id}`).val(product.quantity);
                            let pricecontainer = $(productrow).children('.bestelOrderPrice');
                            pricecontainer.text(`€ ${parseFloat(product.productData.json.price.final * product.quantity).toFixed(2).replace(".", ",")}`);
                        } else{
                            if(confirm("Are you sure you want to delete this?")){
                                cartItem.products = jQuery.grep(cartItem.products, function(value) {
                                    return value != product;
                                });
                                ($(this).parents()[2]).remove();
                                localStorage.setItem('cart', JSON.stringify(cart));
                            }
                        }
                        let activeRekeningId = cartItem.rekening;
                        let amountCalc = [];
                        $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
                            amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
                        });
                        let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
                        $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`);
                    }
                });
            }else{
                cartItem.state = 'inactive';
            }
            localStorage.setItem('cart', JSON.stringify(cart));
        });
    });

    //add btn below
    $(document).on('click', '.bestelOrderQuantityControl .addbtn', function(event){
        let tab = $(this).parents()[3];
        let orderId = $(tab).attr('id');
        let productrow = $(this).parents()[2];
        let productId = $(productrow).attr('data-product-id');
        cart.forEach((cartItem)=>{
            if(orderId == cartItem.rekening){
                cartItem.state = 'active';
                cartItem.products.forEach((product)=>{
                    if(product.productData.id == productId){
                        product.quantity = product.quantity + 1;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        $(this).parent().siblings(`input#quantity_product${product.productData.id}`).val(product.quantity);
                        let pricecontainer = $(productrow).children('.bestelOrderPrice');
                        pricecontainer.text(`€ ${parseFloat(product.productData.json.price.final * product.quantity).toFixed(2).replace(".", ",")}`);
                    }
                });
                let activeRekeningId = cartItem.rekening;
                let amountCalc = [];
                $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
                    amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
                });
                let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
                $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`);
            } else {
                cartItem.state = 'inactive';
            }
            localStorage.setItem('cart', JSON.stringify(cart));
        });
    });

    // delete all btn
    $(document).on('click', '.bestelHeaderInstellingen .deletealles', function(event){
        $('#bestelNavigationTab').children().each(function () {
            if(this.getAttribute('data-toggle') == 'tab'){
                let id = this.getAttribute('data-bestel-id');
                let tabpane = $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${id}]`);
                //console.log(tabpane, this);
                tabpane.remove();
                this.remove(); 
                cart = []
                localStorage.setItem('cart', JSON.stringify(cart));
            }
        });;
        
    });
    
    //active tab switcher
    $(document).on('click', '#bestelNavigationTab a.nav-link[data-toggle="tab"]', function(event){
        event.preventDefault();
        let activeRekeningId = $(this).attr('data-bestel-id');
        cart.forEach(cartItem=>{
            if(cartItem.rekening === activeRekeningId){
                cartItem.state = 'active';
            } else {
                cartItem.state = 'inactive'
            }
        });
        localStorage.setItem('cart', JSON.stringify(cart));
        let amountCalc = [];
        $(`#bestelNavigationTabContent .tab-pane[data-bestel-id=${activeRekeningId}] .bestelOrder`).each(function(){
            amountCalc.push(parseFloat($(this).find('.bestelOrderPrice').text().replace(',', '.').match(/[\d\.]+/)));
        });
        let total = amountCalc.reduce((pv,cv)=>{ return pv + (parseFloat(cv)||0) },0);
        //console.log(total, amountCalc);
        $('.priceCalculatorArea .st-value').text(`€ ${total.toFixed(2).replace(".", ",")}`)
    });


    // bestel cart area ends
    $('#bestelNavigationTab a.nav-link[data-toggle="tab"]').change(function () {
        console.log("something changes", this);
    });
});
</script>
@endsection