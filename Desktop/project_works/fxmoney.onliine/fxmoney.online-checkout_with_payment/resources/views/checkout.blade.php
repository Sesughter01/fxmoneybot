<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <title>Checkout Page</title>
</head>
<body class="px-40 py-10 bg-gray-100">
    <h1 class="font-bold text-5xl">Shopping Cart</h1>
    <div class="flex flex-row space-x-2 mt-4 font-semibold text-sm text-gray-600 mb-10">
        <div>
            <a href="/">Homepage</a> /
        </div>
        <div>
            <a href="/fxmoneyrobot">Products</a> /
        </div>
        <div>
            <a href="#">Cart</a>
        </div>
    </div>

    <div class="flex flex-row space-x-10">
        <div class="w-3/5">
            <div class="rounded-lg bg-white flex flex-row space-x-6 p-4 items-center">
                <span class="text-white bg-black font-bold py-2 px-4 rounded-full">
                    A
                </span>
                <p class="text-lg">
                    Customer Details
                </p>
            </div>

            <div class="w-full mt-10">
                <form action="{{route('payout')}}" method="post">
                    @csrf
    
                    <div class="flex flex-col space-y-4 pr-10">
                        <div class="flex flex-row space-x-4">
                            <div class="w-1/2 flex flex-col space-y-1">
                                <label for="" class="text-sm">First Name</label>
                                <input type="text" name="fnmae" required id="fname" placeholder="First Name" class="p-3 rounded-md">
                            </div>
    
                            <div class="w-1/2 flex flex-col space-y-1">
                                <label for="" class="text-sm">Last Name</label>
                                <input type="text" name="lnmae" required id="lname" placeholder="Last Name" class="p-3 rounded-md">
                            </div>
                        </div>

                        <div class="w-full flex flex-col space-y-1">
                            <label for="" class="text-sm">Address</label>
                            <input type="text" name="address" id="address" placeholder="Address" class="p-3 rounded-md">
                        </div>

                        <div class="flex flex-row space-x-4">
                            <div class="w-1/2 flex flex-col space-y-1">
                                <label for="" class="text-sm">Email</label>
                                <input type="email" name="email" required id="email" placeholder="Email" class="p-3 rounded-md">
                            </div>
    
                            <div class="w-1/2 flex flex-col space-y-1">
                                <label for="" class="text-sm">Phone Number</label>
                                <input type="tel" name="phone" id="phone" required placeholder="Phone" class="p-3 rounded-md">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="px-8 py-3 bg-black text-white font-semibold rounded-lg">Checkout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-2/5">
            <div class="rounded-lg bg-white flex flex-col space-y-4 py-4 px-8">
                <div class="flex flex-row space-x-6 items-center pb-4 border-b border-gray-200">
                    <span class="text-white bg-black font-bold py-2 px-4 rounded-full">
                        B
                    </span>
                    <p class="text-lg">
                        Order Details
                    </p>
                </div>

                @if (session('cart'))
                @php
                    $total = 0;
                @endphp
                    @foreach (session('cart') as $product)
                        @php
                            $total += $product['price'];
                        @endphp

                        <div class="flex flex-col space-y-1 mb-3 border-b border-gray-100 py-4">
                            <h6 class="font-semibold">{{$product['desc']}}</h6>
                            <div class="flex flex-row space-x-8">
                                <div class="flex flex-row font-semibold space-x-2">
                                    <span class="text-gray-400">Price:</span>
                                    <span class="">${{number_format($product['price'], 2)}}</span>
                                </div>

                                <div class="flex flex-row font-semibold space-x-2">
                                    <span class="text-gray-400">Qty:</span>
                                    <span class="">1</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex flex-row font-semibold text-2xl mt-2 space-x-20">
                        <span>Total</span>
                        <span>${{number_format($total, 2)}}</span>
                    </div>
                @else
                    <div>
                        <p class="text-sm text-gray-600">Your cart is empty.</p>
                    </div>
                @endif
                <div>
                    
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="{{asset('js/iziToast.min.js')}}"></script>
@if (session('success-msg'))
    <script>
        iziToast.success({
            title: 'Success',
            message: "{{session('success-msg')}}",
            position: 'topRight'
        });
    </script>
@endif
</html>