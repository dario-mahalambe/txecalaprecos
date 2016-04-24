
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600'  ) }}  ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' ) }} ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Raleway:400,100') }}  ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('https://fonts.googleapis.com/css?family=Exo+2') }}" >
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/searchbox.css') }}">


     <script src="{{URL::asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="{{URL::asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>

</head>
<body>




<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1 class="logoTxecala"><a href="http://localhost:8000/produto"><b>txeca-la precos mz</a></b></h1>
                </div>
            </div>


        </div>
    </div>
</div> <!-- End site branding area -->



<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://localhost:8000/produto">Home</a></li>
                    <li><a href="shop.html">Categorias</a></li>
                    <li><a href="single-product.html">Promocoes</a></li>
                    <li><a href="cart.html">Sobre Nos</a></li>

                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->


    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="img/h4-slide.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            iPhone <span class="primary">6 <strong>Plus</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Compre com Desconto de 20%</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="img/h4-slide2.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Compare os  <span class="primary">precos </span>
                        </h2>
                        <h4 class="caption subtitle">Confira as lojas que estao em Promocao</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="img/h4-slide3.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="img/h4-slide4.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">& Phone</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->





<div class="flexsearch">
    <div class="flexsearch--wrapper">
        <form class="flexsearch--form" action="http://localhost:8000/pesquisa" method="get"><input name="_token" type="hidden" value="{!! csrf_token() !!}" />
            <div class="flexsearch--input-wrapper">
                <input name="search" class="flexsearch--input" type="text" placeholder="O que queres Txecar ?">

            </div>

        </form>
    </div>
</div>
{{--Campo de pesquica Txeca la--}}





    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Produtos Recomendados</h2>
                        <div class="product-carousel">
                            @foreach($produtos as $produto)


                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ $produto->local }}" alt="">
                                    <div class="product-hover">

                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver detalhes</a>
                                    </div>
                                </div>



                                <h2><a href="single-product.html"> {{  $produto->titulo}} </a></h2>
                                <div class="product-carousel-price">
                                   <p> Apartir de:</p> <ins>{{$produto->preco}}</ins>
                                </div>
                            </div>


                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->


{{--Footer Footer Footer Footer--}}

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>txeca-la <span>precos mz</span></h2>
                    <p>Txeca-la precos e um site mocambicano de comparativo de precos de produtos a venda em mocambique
                        o site nao permite qualquer tipo de venda ou reserva de produto apenas prover informacao de precos
                        de produtos desde electrodomesticos, celulares, alimentos, vestuario.
                     </p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categorias</h2>
                    <ul>
                        <li><a href="#">Celulares</a></li>
                        <li><a href="#">Roupas</a></li>
                        <li><a href="#">Computadores</a></li>
                        <li><a href="#">Electrodomesticos</a></li>
                        <li><a href="#">Sapatos</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Promocoes</h2>
                    <p>Deixa o seu email com equipa do txeca-la e fique actualizado das promocoes</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Digite o email">
                            <input type="submit" value="Subscrever">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy;Copyright 2016. Todos direitos reservados. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>


        </div>
    </div>
</div> <!-- End footer bottom area -->






<!-- Latest jQuery form server -->
<script src="{{URL::asset('https://code.jquery.com/jquery.min.js')}}"></script>

<!-- Bootstrap JS form CDN -->
<script src="{{URL::asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}"></script>


<!-- jQuery sticky menu -->
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>

<!-- jQuery easing -->
<script src="{{ URL::asset('js/jquery.easing.1.3.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ URL::asset('js/main.js') }}"></script>







<!-- Slider -->
<script type="text/javascript" src="{{ URL::asset('js/bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/script.slider.js') }}"></script>
</body>
</html>