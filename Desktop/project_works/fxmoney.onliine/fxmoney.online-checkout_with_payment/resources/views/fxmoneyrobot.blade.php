<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FXMoney Robot| Product</title>
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{ URL('css/fxmoneyrobot.css') }}">
</head>
<body >
    <div class="showcase" id="showcase">
        <header id="main-header">
            <a href="#" id="logo">FXMoney Robot <span>.</span></a>
                 
            
              
            
            <div class="portfolio" ><p id = "portfolio">FXMoney</p></div>
            
            <div class="nav-links1">
            <span><a href="#"> Pro</a></span> 
            <a href="/" class="{{ request()-> is('/') ? 'active' : '' }}">Home</a>
            <a href="/checkout" class="{{ request()-> is('/checkout') ? 'active' : '' }}">Cart</a>
                <a href="#">eBooks</a>
                <a href="#">Tutorials</a>
                <a href="#">Services</a>
            
            </div>
            <div class="join">
               <button id="meet" onclick="clickNavLink()">Contact Us</button>
            </div>
        

            

        </header>

        <div id="slider">
          <ul id="slideWrap"> 
            <li><img src="{{ asset('img/pexels-john-guccione-wwwadvergroupcom-3483098.jpg') }}" alt=""></li>
            <li><img src="{{ asset('img/robo-trader2.jpg') }}" alt=""></li>
            <li><img src="{{ asset('img/winning-man.png') }}" alt=""></li>
            <li><img src="{{ asset('img/pexels-john-guccione-wwwadvergroupcom-3483098.jpg') }}" alt=""></li>
            <li><img src="{{ asset('img/pexels-john-guccione-wwwadvergroupcom-3483098.jpg') }}" alt=""></li>
          </ul>
          <a id="prev" href="#">&#8810;</a>
           
          <a id="next" href="#">&#8811;</a>
          <h1 style="color: #ffff;text-align:center;position: absolute;bottom:60%;left:5%" >$6.6 TRILLION EVERDAY!</h1>
        </div>
    
          
    </div>
     <!-- Section 1 -->
     
        <div class="child-1">
        
                
                    <div class="img-container">
                      <a href="./projects.html">
                        <img src="{{ asset('img/bitcoin.png') }}" alt="">
                      </a>
                        <!-- <h2>Graphic Design</h2> -->
                       
                        <!-- <button class="button" id="post-card">Post a request</button> -->
                    </div>
                   
                 
                

                <div class="banner">
                    <h2>Get a Complete FX Training Kit Now!</h2>
                    <p>WhatsApp:</p>
                </div>

        </div>
        
        <!-- Second 2 -->
        
        {{-- <div class="child-0"> --}}
        
        <div class="child-0">

            
           
            
              
            <div class="card" id="card-1">
                <div class="img-container">
                  <!-- <a href="./projects.html"> -->

                    <img src="{{ asset('img/small_bitc.jpg') }}" alt="hero image">
                  <!-- </a> -->
                </div>
                <div class="summary-container"> 
                   <h3>Forex For Beginners 1</h3>
                   <p>
                     Get professional Forex Trading Skills,and lots more.Call me now!
                   </p>
                 <div class="pricing-plan">
                  
                   <div class="details">
                    <p>Price </p>
                    <p>  $35 +</p>
                  </div>
                  <a href="{{ route('cart.add', ['price'=>35.00, 'desc'=>'Forex For Beginners 1']) }}"> Add to Cart</a>
                 </div>
                 <!-- call to action -->
                 <button type="submit" id="proceed" formaction="{{ route('checkout') }}"> 
                  Proceed to Checkout
                 </button>
                 <button id="cancel"> Or Cancel Order</button>
                </div>
              </div>

    

              <div class="card">
                <div class="img-container">
                  <img src="{{ asset('img/pexels-john-guccione-wwwadvergroupcom-3483098.jpg') }}" alt="hero image">
                </div>
                <div class="summary-container"> 
                   <h3>Forex For Beginners 2</h3>
                   <p>
                     Get amazing leverage!
                   </p>
                 <div class="pricing-plan">
                   
                   <div class="details">
                    <p>Price </p>
                    <p>  $35 </p>
                  </div>
                  <a href="{{ route('cart.add', ['price'=>35.00, 'desc'=>'Forex For Beginners 2']) }}">Add to Cart</a>
                 </div>
                 <!-- call to action -->
                 <button type="submit" id="proceed" formaction="{{ route('checkout') }}"> 
                  Proceed to Checkout
                 </button>
                 <button id="cancel">Or Cancel Order</button>
                </div>
              </div>

    

              <div class="card">
                <div class="img-container">
                  <img src="{{ asset('img/pexels-artem-beliaikin-929277.jpg') }}" alt="hero image">
                </div>
                <div class="summary-container"> 
                   <h3>How To Trade EUR/USD</h3>
                   <p>
                     Learn amazing secrets of trade!
                   </p>
                 <div class="pricing-plan">
                   
                   <div class="details">
                    <p>Price </p>
                    <p>  $25</p>
                  </div>
                  <a href="{{ route('cart.add', ['price'=>25.00, 'desc'=>'How To Trade EUR-USD']) }}"> Add to Cart</a>
                 </div>
                 <!-- call to action -->
                 <button type="submit" id="proceed" formaction="{{ route('checkout') }}"> 
                  Proceed to Checkout
                 </button>
                 <button id="cancel">Or Cancel Order</button>
                </div>
              </div>

    
              <div class="card">
                <div class="img-container">
                  <img src="{{ asset('img/pexels-tima-miroshnichenko-6693646.jpg') }}" alt="hero image">
                </div>
                <div class="summary-container"> 
                   <h3>How To Trade GBP/USD</h3>
                   <p>
                    You can now learn trading skills that work!
                   </p>
                 <div class="pricing-plan">
                   
                   <div class="details">
                    <p>Price </p>
                    <p>  $25</p>
                  </div>
                  <a href="{{ route('cart.add', ['price'=>25.00, 'desc'=>'How To Trade GBP-USD']) }}"> Add to Cart</a>
                 </div>
                 <!-- call to action -->
                 <button type="submit" id="proceed" formaction="{{ route('checkout') }}">  
                  Proceed to Checkout
                 </button>
                 <button id="cancel">Or Cancel Order</button>
                </div>
              </div>
        </div>
              {{-- Section 3 --}}
              <div class="child-0">

            
            
              <div class="card">
                  <div class="img-container">
                    <img src="{{ asset('img/new-2.jpg') }}"  alt="hero image">
                  </div>
                  <div class="summary-container"> 
                     <h3>How To Trade USD/JPY</h3>
                     <p>
                      You can now learn all about forex trading in this amazing book!
                     </p>
                   <div class="pricing-plan">
                     
                     <div class="details">
                      <p>Pricing</p>
                      <p>  $25</p>
                    </div>
                    <a href="{{ route('cart.add', ['price'=>25.00, 'desc'=>'How To Trade USD-JPY']) }}"> Add to Cart</a>
                   </div>
                   <!-- call to action -->
                   <button id="proceed"> 
                    Proceed to Checkout
                   </button>
                   <button id="cancel"> Cancel Order</button>
                  </div>
                </div>
                <div class="card">
                  <div class="img-container">
                    <img src="{{ asset('img/new-3.jpg') }}"  alt="hero image">
                  </div>
                  <div class="summary-container"> 
                     <h3>How To Trade AUD/USD</h3>
                     <p>
                      You can get all you need, in this book!
                     </p>
                   <div class="pricing-plan">
                     
                     <div class="details">
                      <p>Price </p>
                      <p>  $25</p>
                    </div>
                    <a href="{{ route('cart.add', ['price'=>25.00, 'desc'=>'How To Trade AUD-USD']) }}"> Add to Cart</a>
                   </div>
                   <!-- call to action -->
                   <button id="proceed"> 
                    Proceed to Checkout
                   </button>
                   <button id="cancel"> Cancel Order</button>
                  </div>
                </div>
                <div class="card">
                  <div class="img-container">
                    <img src="{{ asset('img/new-4.jpg') }}"  alt="hero image">
                  </div>
                  <div class="summary-container"> 
                     <h4>How To Trade FX For Indices Traders</h4>
                     <p>
                      You can get all you need, in this book!
                     </p>
                   <div class="pricing-plan">
                     
                     <div class="details">
                      <p>Price </p>
                      <p>  $25</p>
                    </div>
                    <a href="{{ route('cart.add', ['price'=>25.00, 'desc'=>'How To Trade FX For Indices Traders']) }}">Add to Cart</a>
                   </div>
                   <!-- call to action -->
                   <button id="proceed"> 
                    Proceed to Checkout
                   </button>
                   <button id="cancel"> Cancel Order</button>
                  </div>
                </div>
                 <div class="card">
                    <div class="img-container">
                      <img src="{{ asset('img/new-5.jpg') }}"  alt="hero image">
                    </div>
                    <div class="summary-container"> 
                      <h2>How To Trade Gold Traders</h2>
                      <p>
                        You can get all you need, in this book!
                      </p>
                    <div class="pricing-plan">
                      
                      <div class="details">
                        <p>Pricing </p>
                        <p>  $30</p>
                      </div>
                      <a href="{{ route('cart.add', ['price'=>30.00, 'desc'=>'How To Trade Gold Traders']) }}">Add to Cart</a>
                    </div>
                    <!-- call to action -->
                    <button id="proceed"> 
                      Proceed to Checkout
                    </button>
                    <button id="cancel"> Cancel Order</button>
                    </div>
          </div>
              
                 <div class="card">
                    <div class="img-container">
                      <img src="{{ asset('img/new-5.jpg') }}"  alt="hero image">
                    </div>
                    <div class="summary-container"> 
                      <h2>How To Trade Oil</h2>
                      <p>
                        You can get all you need, in this book!
                      </p>
                    <div class="pricing-plan">
                      
                      <div class="details">
                        <p>Pricing </p>
                        <p>  $30</p>
                      </div>
                      <a href="{{ route('cart.add', ['price'=>30.00, 'desc'=>'How To Trade Oil']) }}">Add to Cart</a>
                    </div>
                    <!-- call to action -->
                    <button id="proceed"> 
                      Proceed to Checkout
                    </button>
                    <button id="cancel"> Cancel Order</button>
                    </div>
                </div>
              
              </div>
              
    <script src="{{asset('js/iziToast.min.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    @if (session('success-msg'))
        <script>
          iziToast.success({
              title: 'Success',
              message: "{{session('success-msg')}}",
              position: 'topRight'
          });
        </script>
    @endif

</body>
</html>