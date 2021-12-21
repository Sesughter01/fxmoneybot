



   

     
         @extends('layouts.app')
         <title>FXMoney | Home</title>
         @section('content')
                 {{-- <body> --}}
                {{-- <div id="main"   > --}}
                     {{-- <div class="container" id="landing-page">      --}}
                        <div class="container" id="landing-page">
        
                        <div id="main-header">
                            @include('layouts.header')
                        </div>
                      <h1>EXTRA INCOME WITH LEVERAGED TRADING</h1> 
                        {{-- <div id="arrow-svg">
                          <svg width="36" height="114" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" stroke-width="6" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M18 3v100M3 95.484l15 15 15-15"/></g></svg>
                        </div>
                   --}}
                        {{-- <img src="{{ URL('storage/lanscape-2 1.png') }}" alt="orange">  --}}
                        
                        <div class="message-1 position-1">
                            <div class="lemon-header">
                               <p>LET FXMONEY ROBOT DO THE TRADING FOR YOU</p>
                               <button  class="fx-btn" >FXMONEY ROBOT</button>
                            </div>
                            <div id="lang-trans">
                                <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_11_42)">
                                    <path d="M33.22 0H0V20.86H33.22V0Z" fill="#DB2E2E"/>
                                    <path d="M33.22 6.77V14.71L20.22 14.66H20.21H19.5L9.15 20.86H0V0H7.63L18.97 6.59L33.22 6.77Z" fill="#248E31"/>
                                    <path d="M33.22 5.46V7.51H19.04L6.57999 0H10.88L19.96 5.46H33.22Z" fill="white"/>
                                    <path d="M9.97 10.57L0 17.23V4.32001L9.97 10.57Z" fill="#28292B"/>
                                    <path d="M33.22 14.33V20.86H10.05L20.21 14.66H20.22L20.56 14.45L33.22 14.33Z" fill="#2E4593"/>
                                    <path d="M33.22 13.53V15.58H19.96L11.19 20.86H6.89001L19.04 13.53H33.22Z" fill="white"/>
                                    <path d="M12.76 10.47L0 18.28V15.68L8.51 10.46L0 5.21003V2.59003L12.76 10.47Z" fill="#FFF915"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_11_42">
                                    <rect width="33.22" height="20.86" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    <svg width="35" height="22" viewBox="0 0 35 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_11_65)">
                                        <path d="M34.27 6.52002H0V8.15002H34.27V6.52002Z" fill="#DB2E2E"/>
                                        <path d="M34.27 3.26001H0V4.89001H34.27V3.26001Z" fill="#DB2E2E"/>
                                        <path d="M34.27 0H0V1.63H34.27V0Z" fill="#DB2E2E"/>
                                        <path d="M34.27 9.78003H0V11.41H34.27V9.78003Z" fill="#DB2E2E"/>
                                        <path d="M34.27 13.04H0V14.67H34.27V13.04Z" fill="#DB2E2E"/>
                                        <path d="M34.27 16.3H0V17.93H34.27V16.3Z" fill="#DB2E2E"/>
                                        <path d="M34.27 19.55H0V21.18H34.27V19.55Z" fill="#DB2E2E"/>
                                        <path d="M34.27 4.89001H0V6.52001H34.27V4.89001Z" fill="white"/>
                                        <path d="M34.27 1.63H0V3.26H34.27V1.63Z" fill="white"/>
                                        <path d="M34.27 8.15002H0V9.78002H34.27V8.15002Z" fill="white"/>
                                        <path d="M34.27 11.4H0V13.03H34.27V11.4Z" fill="white"/>
                                        <path d="M34.27 14.67H0V16.3H34.27V14.67Z" fill="white"/>
                                        <path d="M34.27 17.93H0V19.56H34.27V17.93Z" fill="white"/>
                                        <path d="M12.81 0.0499878H0V9.91999H12.81V0.0499878Z" fill="#2E4593"/>
                                        <path d="M10.71 2.00996L10.84 2.38996L10.52 2.14996L10.2 2.38996L10.33 2.00996L10 1.78996H10.4L10.51 1.39996L10.63 1.78996H10.64H11.04L10.71 2.00996H10.7H10.71Z" fill="white"/>
                                        <path d="M10.71 4.00995L10.84 4.38995L10.52 4.14995L10.2 4.38995L10.33 4.00995V3.99995L10 3.77995H10.4L10.51 3.38995L10.63 3.77995H10.64H11.04L10.71 3.99995H10.7L10.71 4.00995Z" fill="white"/>
                                        <path d="M10.71 5.99995L10.84 6.37995L10.52 6.13995L10.2 6.37995L10.33 5.99995L10 5.76995H10.4L10.51 5.38995L10.63 5.76995H10.64H11.04L10.71 5.99995H10.7H10.71Z" fill="white"/>
                                        <path d="M10.71 7.98994L10.84 8.36994L10.52 8.12994L10.2 8.36994L10.33 7.98994L10 7.75994H10.4L10.51 7.37994L10.63 7.75994V7.76994L10.64 7.75994H11.04L10.71 7.98994H10.7H10.71Z" fill="white"/>
                                        <path d="M8.59 2.00996L8.73 2.38996L8.4 2.14996L8.08 2.38996L8.21 2.00996L7.88 1.78996H8.28L8.39001 1.39996L8.52001 1.78996H8.51H8.52001H8.92L8.59 2.00996H8.58H8.59Z" fill="white"/>
                                        <path d="M8.59 4.00995L8.73 4.38995L8.4 4.14995L8.08 4.38995L8.21 4.00995V3.99995L7.88 3.77995H8.28L8.39001 3.38995L8.52001 3.77995H8.51H8.52001H8.92L8.59 3.99995H8.58L8.59 4.00995Z" fill="white"/>
                                        <path d="M8.59 5.99995L8.73 6.37995L8.4 6.13995L8.08 6.37995L8.21 5.99995L7.88 5.76995H8.28L8.39001 5.38995L8.52001 5.76995H8.51H8.52001H8.92L8.59 5.99995H8.58H8.59Z" fill="white"/>
                                        <path d="M8.59 7.98994L8.73 8.36994L8.4 8.12994L8.08 8.36994L8.21 7.98994L7.88 7.75994H8.28L8.39001 7.37994L8.52001 7.75994L8.51 7.76994L8.52001 7.75994H8.92L8.59 7.98994H8.58H8.59Z" fill="white"/>
                                        <path d="M6.47001 2.00996L6.61001 2.38996L6.28001 2.14996L5.96001 2.38996L6.09001 2.00996H6.10001H6.09001L5.76001 1.78996H6.16001L6.27001 1.39996L6.40001 1.78996H6.39001H6.40001H6.80001L6.47001 2.00996Z" fill="white"/>
                                        <path d="M6.47001 4.00995L6.61001 4.38995L6.28001 4.14995L5.96001 4.38995L6.09001 4.00995L6.10001 3.99995H6.09001L5.76001 3.77995H6.16001L6.27001 3.38995L6.40001 3.77995H6.39001H6.40001H6.80001L6.47001 3.99995V4.00995Z" fill="white"/>
                                        <path d="M6.47001 5.99995L6.61001 6.37995L6.28001 6.13995L5.96001 6.37995L6.09001 5.99995H6.10001H6.09001L5.76001 5.76995H6.16001L6.27001 5.38995L6.40001 5.76995H6.39001H6.40001H6.80001L6.47001 5.99995Z" fill="white"/>
                                        <path d="M6.47001 7.98994L6.61001 8.36994L6.28001 8.12994L5.96001 8.36994L6.09001 7.98994H6.10001H6.09001L5.76001 7.75994H6.16001L6.27001 7.37994L6.40001 7.75994L6.39001 7.76994L6.40001 7.75994H6.80001L6.47001 7.98994Z" fill="white"/>
                                        <path d="M4.39001 2.00996L4.52001 2.38996L4.20001 2.14996L3.87001 2.38996L4.01001 2.00996L3.67001 1.78996H4.08001L4.19001 1.39996L4.31001 1.78996H4.72001L4.38001 2.00996H4.39001Z" fill="white"/>
                                        <path d="M4.39001 4.00995L4.52001 4.38995L4.20001 4.14995L3.87001 4.38995L4.01001 4.00995V3.99995L3.67001 3.77995H4.08001L4.19001 3.38995L4.31001 3.77995H4.72001L4.38001 3.99995L4.39001 4.00995Z" fill="white"/>
                                        <path d="M4.39001 5.99995L4.52001 6.37995L4.20001 6.13995L3.87001 6.37995L4.01001 5.99995L3.67001 5.76995H4.08001L4.19001 5.38995L4.31001 5.76995H4.72001L4.38001 5.99995H4.39001Z" fill="white"/>
                                        <path d="M4.39001 7.98994L4.52001 8.36994L4.20001 8.12994L3.87001 8.36994L4.01001 7.98994L3.67001 7.75994H4.08001L4.19001 7.37994L4.31001 7.75994V7.76994V7.75994H4.72001L4.38001 7.98994H4.39001Z" fill="white"/>
                                        <path d="M2.3 2.00996L2.43 2.38996L2.11 2.14996L1.79 2.38996L1.92 2.00996L1.59 1.78996H1.99L2.1 1.39996L2.23 1.78996H2.63L2.3 2.00996H2.29H2.3Z" fill="white"/>
                                        <path d="M2.3 4.00995L2.43 4.38995L2.11 4.14995L1.79 4.38995L1.92 4.00995V3.99995L1.59 3.77995H1.99L2.1 3.38995L2.23 3.77995H2.63L2.3 3.99995H2.29L2.3 4.00995Z" fill="white"/>
                                        <path d="M2.3 5.99995L2.43 6.37995L2.11 6.13995L1.79 6.37995L1.92 5.99995L1.59 5.76995H1.99L2.1 5.38995L2.23 5.76995H2.63L2.3 5.99995H2.29H2.3Z" fill="white"/>
                                        <path d="M2.3 7.98994L2.43 8.36994L2.11 8.12994L1.79 8.36994L1.92 7.98994L1.59 7.75994H1.99L2.1 7.37994L2.23 7.75994V7.76994V7.75994H2.63L2.3 7.98994H2.29H2.3Z" fill="white"/>
                                        <path d="M11.74 3.00995L11.87 3.38995L11.55 3.14995L11.22 3.38995L11.36 3.00995V2.99995L11.03 2.77995H11.43L11.54 2.38995L11.66 2.77995H12.07L11.73 2.99995L11.74 3.00995Z" fill="white"/>
                                        <path d="M11.74 4.99995L11.87 5.37995L11.55 5.13995L11.22 5.37995L11.36 4.99995L11.03 4.76995H11.43L11.54 4.38995L11.66 4.76995H12.07L11.73 4.99995H11.74Z" fill="white"/>
                                        <path d="M11.74 6.99994L11.87 7.37994L11.55 7.13994L11.22 7.37994L11.36 6.99994V6.98994L11.03 6.76994H11.43L11.54 6.37994L11.66 6.76994H12.07L11.73 6.98994L11.74 6.99994Z" fill="white"/>
                                        <path d="M11.74 8.98994L11.87 9.37994L11.55 9.12994L11.22 9.37994L11.36 8.98994L11.03 8.76994H11.43L11.54 8.37994L11.66 8.76994H12.07L11.73 8.98994H11.74Z" fill="white"/>
                                        <path d="M11.74 1.01997L11.87 1.39997L11.55 1.16997V1.15997V1.16997L11.22 1.39997L11.36 1.01997L11.03 0.789973H11.43L11.54 0.409973L11.66 0.789973V0.799973V0.789973H12.07L11.73 1.01997H11.74Z" fill="white"/>
                                        <path d="M9.66001 3.00995L9.80001 3.38995L9.48001 3.14995L9.15001 3.38995L9.29001 3.00995V2.99995L8.95001 2.77995H9.36001L9.47001 2.38995L9.59001 2.77995H10L9.66001 2.99995V3.00995Z" fill="white"/>
                                        <path d="M9.66001 4.99995L9.80001 5.37995L9.48001 5.13995L9.15001 5.37995L9.29001 4.99995L8.95001 4.76995H9.36001L9.47001 4.38995L9.59001 4.76995H10L9.66001 4.99995Z" fill="white"/>
                                        <path d="M9.66001 6.99994L9.80001 7.37994L9.48001 7.13994L9.15001 7.37994L9.29001 6.99994V6.98994L8.95001 6.76994H9.36001L9.47001 6.37994L9.59001 6.76994H10L9.66001 6.98994V6.99994Z" fill="white"/>
                                        <path d="M9.66001 8.98994L9.80001 9.37994L9.48001 9.12994L9.15001 9.37994L9.29001 8.98994L8.95001 8.76994H9.36001L9.47001 8.37994L9.59001 8.76994H10L9.66001 8.98994Z" fill="white"/>
                                        <path d="M9.66001 1.01997L9.80001 1.39997L9.48001 1.16997V1.15997V1.16997L9.15001 1.39997L9.29001 1.01997L8.95001 0.789973H9.36001L9.47001 0.409973L9.59001 0.789973V0.799973V0.789973H10L9.66001 1.01997Z" fill="white"/>
                                        <path d="M7.50999 3.00995L7.64999 3.38995L7.31999 3.14995L6.99999 3.38995L7.12999 3.00995V2.99995L6.79999 2.77995H7.19999L7.30999 2.38995L7.42999 2.77995H7.43999H7.83999L7.50999 2.99995H7.49999L7.50999 3.00995Z" fill="white"/>
                                        <path d="M7.50999 4.99995L7.64999 5.37995L7.31999 5.13995L6.99999 5.37995L7.12999 4.99995L6.79999 4.76995H7.19999L7.30999 4.38995L7.42999 4.76995H7.43999H7.83999L7.50999 4.99995H7.49999H7.50999Z" fill="white"/>
                                        <path d="M7.50999 6.99994L7.64999 7.37994L7.31999 7.13994L6.99999 7.37994L7.12999 6.99994V6.98994L6.79999 6.76994H7.19999L7.30999 6.37994L7.42999 6.76994H7.43999H7.83999L7.50999 6.98994H7.49999L7.50999 6.99994Z" fill="white"/>
                                        <path d="M7.50999 8.98994L7.64999 9.37994L7.31999 9.12994L6.99999 9.37994L7.12999 8.98994L6.79999 8.76994H7.19999L7.30999 8.37994L7.42999 8.76994H7.43999H7.83999L7.50999 8.98994H7.49999H7.50999Z" fill="white"/>
                                        <path d="M7.50999 1.01997L7.64999 1.39997L7.31999 1.16997V1.15997V1.16997L6.99999 1.39997L7.12999 1.01997L6.79999 0.789973H7.19999L7.30999 0.409973L7.42999 0.789973V0.799973L7.43999 0.789973H7.83999L7.50999 1.01997H7.49999H7.50999Z" fill="white"/>
                                        <path d="M5.4 3.00995L5.54 3.38995L5.21 3.14995L4.89 3.38995L5.02 3.00995L5.03 2.99995H5.02L4.69 2.77995H5.09L5.2 2.38995L5.33 2.77995H5.73L5.4 2.99995V3.00995Z" fill="white"/>
                                        <path d="M5.4 4.99995L5.54 5.37995L5.21 5.13995L4.89 5.37995L5.02 4.99995H5.03H5.02L4.69 4.76995H5.09L5.2 4.38995L5.33 4.76995H5.73L5.4 4.99995Z" fill="white"/>
                                        <path d="M5.4 6.99994L5.54 7.37994L5.21 7.13994L4.89 7.37994L5.02 6.99994L5.03 6.98994H5.02L4.69 6.76994H5.09L5.2 6.37994L5.33 6.76994H5.73L5.4 6.98994V6.99994Z" fill="white"/>
                                        <path d="M5.4 8.98994L5.54 9.37994L5.21 9.12994L4.89 9.37994L5.02 8.98994H5.03H5.02L4.69 8.76994H5.09L5.2 8.37994L5.33 8.76994H5.73L5.4 8.98994Z" fill="white"/>
                                        <path d="M5.4 1.01997L5.54 1.39997L5.21 1.16997V1.15997V1.16997L4.89 1.39997L5.02 1.01997H5.03H5.02L4.69 0.789973H5.09L5.2 0.409973L5.33 0.789973V0.799973V0.789973H5.73L5.4 1.01997Z" fill="white"/>
                                        <path d="M3.34 3.00995L3.47 3.38995L3.15 3.14995L2.82 3.38995L2.96 3.00995V2.99995L2.63 2.77995H3.03L3.14 2.38995L3.26 2.77995H3.67L3.33 2.99995L3.34 3.00995Z" fill="white"/>
                                        <path d="M3.34 4.99995L3.47 5.37995L3.15 5.13995L2.82 5.37995L2.96 4.99995L2.63 4.76995H3.03L3.14 4.38995L3.26 4.76995H3.67L3.33 4.99995H3.34Z" fill="white"/>
                                        <path d="M3.34 6.99994L3.47 7.37994L3.15 7.13994L2.82 7.37994L2.96 6.99994V6.98994L2.63 6.76994H3.03L3.14 6.37994L3.26 6.76994H3.67L3.33 6.98994L3.34 6.99994Z" fill="white"/>
                                        <path d="M3.34 8.98994L3.47 9.37994L3.15 9.12994L2.82 9.37994L2.96 8.98994L2.63 8.76994H3.03L3.14 8.37994L3.26 8.76994H3.67L3.33 8.98994H3.34Z" fill="white"/>
                                        <path d="M3.34 1.01997L3.47 1.39997L3.15 1.16997V1.15997V1.16997L2.82 1.39997L2.96 1.01997L2.63 0.789973H3.03L3.14 0.409973L3.26 0.789973V0.799973V0.789973H3.67L3.33 1.01997H3.34Z" fill="white"/>
                                        <path d="M1.24 3.00995L1.38 3.38995L1.05 3.14995L0.729999 3.38995L0.859999 3.00995L0.869999 2.99995H0.859999L0.529999 2.77995H0.929999L1.04 2.38995L1.16 2.77995H1.57L1.24 2.99995V3.00995Z" fill="white"/>
                                        <path d="M1.24 4.99995L1.38 5.37995L1.05 5.13995L0.729999 5.37995L0.859999 4.99995H0.869999H0.859999L0.529999 4.76995H0.929999L1.04 4.38995L1.16 4.76995H1.57L1.24 4.99995Z" fill="white"/>
                                        <path d="M1.24 6.99994L1.38 7.37994L1.05 7.13994L0.729999 7.37994L0.859999 6.99994L0.869999 6.98994H0.859999L0.529999 6.76994H0.929999L1.04 6.37994L1.16 6.76994H1.57L1.24 6.98994V6.99994Z" fill="white"/>
                                        <path d="M1.24 8.98994L1.38 9.37994L1.05 9.12994L0.729999 9.37994L0.859999 8.98994H0.869999H0.859999L0.529999 8.76994H0.929999L1.04 8.37994L1.16 8.76994H1.57L1.24 8.98994Z" fill="white"/>
                                        <path d="M1.24 1.01997L1.38 1.39997L1.05 1.16997V1.15997V1.16997L0.729999 1.39997L0.859999 1.01997H0.869999H0.859999L0.529999 0.789973H0.929999L1.04 0.409973L1.16 0.789973V0.799973V0.789973H1.57L1.24 1.01997Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_11_65">
                                        <rect width="34.27" height="21.18" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
                                        <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_11_260)">
                                            <path d="M33.27 0H0V20.86H33.27V0Z" fill="#43AF50"/>
                                            <path d="M33.27 0H17.27V20.86H33.27V0Z" fill="#43AF50"/>
                                            <path d="M22.3 0.0300293H11.06V20.78H22.3V0.0300293Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_11_260">
                                            <rect width="33.27" height="20.86" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_11_315)">
                                                <path d="M33.39 16.66H0V20.87H33.39V16.66Z" fill="#DB2E2E"/>
                                                <path d="M33.39 12.57H0V16.78H33.39V12.57Z" fill="white"/>
                                                <path d="M33.39 8.38H0V12.59H33.39V8.38Z" fill="#DB2E2E"/>
                                                <path d="M33.39 4.19H0V8.4H33.39V4.19Z" fill="white"/>
                                                <path d="M33.39 0H0V4.21H33.39V0Z" fill="#DB2E2E"/>
                                                <path d="M0.019989 20.82V0.0100098L14.39 10.42L0.019989 20.82Z" fill="#2B4BA5"/>
                                                <path d="M6.08001 10.64L6.83001 12.74L5.04001 11.42V11.41V11.42L3.25001 12.74L4.00001 10.64L4.02001 10.63H4.01001L2.17001 9.38002L4.38001 9.39002L4.99001 7.27002L5.67001 9.38002V9.39002H5.68001L7.91001 9.38002L6.07001 10.63H6.06001L6.08001 10.64Z" fill="white"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_11_315">
                                                <rect width="33.39" height="20.87" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                                <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_11_334)">
                                                    <path d="M33.27 0H0V20.86H33.27V0Z" fill="#43AF50"/>
                                                    <path d="M33.27 0H17.27V20.86H33.27V0Z" fill="#FFA92C"/>
                                                    <path d="M22.3 0.0300293H11.06V20.78H22.3V0.0300293Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_11_334">
                                                    <rect width="33.27" height="20.86" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                
                            </div>
                            <div id="choose-lang">

                                <select name="language" id="language" >
                                    <option value="English">English</option>
                                    <option value="French">Spanish</option>
                                    <option value="German">German</option>
                                    <option value="Russian">Russian</option>
                                    <option value="Mandarin">Mandarin</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Japanese">Japanese</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="English">Afrikaans</option>
                                    <option value="English">English</option>
                                    <option value="English">English</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="text-header top">
                                  <h3>Enjoy High Leverage Trading With FXMoney Robot</h3>
                            </div>
                            <iframe id="u-frame" width="853" height="480" src="https://www.youtube.com/embed/sLN9HmkTWl0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="text-header bottom">
                                <h3>What FXMoney Robot will Do For You</h3>
                          </div>
                            <p class="body-text">
                                On Smart Algo Trade you will find a guide to learn the basics regarding Forex Algo Trading and Forex Robots that will help you become a profitable trader! On this website, you will find FXMoney Robots, designed to help you on your journey to have some level of financial freedom through Forex Trading.
                            </p>
                            <p class="body-text">
                                Smart Algo Trade is a software house that develops robots based algorithm for Automated Forex Trading – Algo Trading.
                            </p>
                            <p class="body-text">
                                The purpose of this website is to introduce anyone who wants, to the world of algorithmic trading and investment in general and help to make money in Forex market with algorithmic trading
                            </p>
                            <p class="body-text">
                                If you don’t have any knowledge of Automated Trading and investments in general, we recommend starting with a guide written especially for you How to Make Money in the Forex Market with Algo Trading                            </p>
                            <p class="body-text">
                                This guide will help you understand all the ways in which investments can be exposed to the world in general and in particular Automated Forex Trading in reasonable time and knowledge.                            </p>
                            <p class="body-text">
                                Website content will be changed from time to time and new opportunities will be uploaded on this website, for example, new Forex Robots we are working on, have the development of trade cooperation and engineers from around the world, and investments opportunities of PAMM products other record companies cooperation                            </p>
                            <p class="body-text">
                                Let us do the work for you and we will bring you investments opportunities that do not require much knowledge or effort.                            </p>
                            <p class="body-text">
                                We invite you to visit the website regularly to see if new opportunities have been added.                            </p>
                            <p class="body-text">
                                In addition, we will be happy if you share the social network friends by clicking on the buttons on the sides and also introduce them to the world of algorithmic trading and help them to make some money in Forex market with Automated Forex Trading.                            </p>
                          </div>
        
        
                        <div class="message-1 position-2">
                            <div class="lemon-header">
                                <p>LET FXMONEY ROBOT DO THE TRADING FOR YOU</p>
                                <p class="advisory">FXMONEY EXPERT ADVISORY </p> 
                             </div>
                             <div class="grid">
                                 <div class="cards card-1">

                                     <h3>Learn Forex Trading</h3> 
                                      <p>Forex algorithmic trading is highly volatile. <br> This kind of investment is considered to <br> have a relatively high degree of risk.<br> Past returns that are presented on this website <br>do not guarantee the same return in the future.<br> The broker is not liable for any trading performances.
                           
                                       <br>Trading Forex/CFDs carries a risk of capital loss.</p>
                                 </div>
                                 <div class="cards card-2">

                                     <h3>Advantages of Leveraged Trading</h3> 
                                      <p>Forex algorithmic trading is highly volatile. <br> This kind of investment is considered to <br> have a relatively high degree of risk.<br> Past returns that are presented on this website <br>do not guarantee the same return in the future.<br> The broker is not liable for any trading performances.
                           
                                       <br>Trading Forex/CFDs carries a risk of capital loss.</p>
                                 </div>
                                 <div class="cards card-3">

                                     <h3>How FXMoney Robot Works</h3> 
                                      <p>Forex algorithmic trading is highly volatile. <br> This kind of investment is considered to <br> have a relatively high degree of risk.<br> Past returns that are presented on this website <br>do not guarantee the same return in the future.<br> The broker is not liable for any trading performances.
                           
                                       <br>Trading Forex/CFDs carries a risk of capital loss.</p>
                                 </div>
                                 <div class="cards card-4">

                                     <h3>Trading Adv</h3> 
                                      <p>Forex algorithmic trading is highly volatile. <br> This kind of investment is considered to <br> have a relatively high degree of risk.<br> Past returns that are presented on this website <br>do not guarantee the same return in the future.<br> The broker is not liable for any trading performances.
                           
                                       <br>Trading Forex/CFDs carries a risk of capital loss.</p>
                                 </div>
                              </div>
                          </div>
        
        
                    


  
              {{-- </body> --}}
          @endsection


