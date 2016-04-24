
<!DOCTYPE HTML>
<html>
<head>
    <title>Resultado da Pesquisa</title>
    <link rel="stylesheet" href="{{ URL::asset('css/cardlayout.css') }}">

    {{----}}
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

    <!-- Google Fonts -->
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600'  ) }}  ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' ) }} ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('http://fonts.googleapis.com/css?family=Raleway:400,100') }}  ">
    <link rel='stylesheet' type='text/css' href="{{ URL::asset('https://fonts.googleapis.com/css?family=Exo+2') }}" >
</head>





<body >



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


                                                {{--Comeca aqui codigo--}}



<div class="body-resultado">
<p> </p>


    <div class="card-esquerdo">
    <div class="col-md-4">
        <div class="single-sidebar">
            <h2 class="sidebar-title">Search Products</h2>
            <form action="#">
                <input type="text" placeholder="Search products...">
                <input type="submit" value="Search">
            </form>
        </div>

        <div class="single-sidebar">
            <h2 class="sidebar-title">Products</h2>
            <div class="thubmnail-recent">
                <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                </div>
            </div>
            <div class="thubmnail-recent">
                <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                </div>
            </div>
            <div class="thubmnail-recent">
                <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                </div>
            </div>
            <div class="thubmnail-recent">
                <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                <div class="product-sidebar-price">
                    <ins>$700.00</ins> <del>$800.00</del>
                </div>
            </div>
        </div>

        <div class="single-sidebar">
            <h2 class="sidebar-title">Recent Posts</h2>
            <ul>
                <li><a href="#">Sony Smart TV - 2015</a></li>
                <li><a href="#">Sony Smart TV - 2015</a></li>
                <li><a href="#">Sony Smart TV - 2015</a></li>
                <li><a href="#">Sony Smart TV - 2015</a></li>
                <li><a href="#">Sony Smart TV - 2015</a></li>
            </ul>
        </div>
    </div>
</div>
            @if (count($produtos) === 0)
   <h3>Desculpa mas nenhum resultado foi encontrado</h3>

    @elseif (count($produtos) >= 1)

        <h2 class="resultado">Resultados da pesquisa relacionado a  "{{ $query }}"</h2>
    @foreach($produtos as $produto)
                <!-- block-4 strat here-->

   <p> </p>



<div class="block-3-right">

    <div class="wine-img1">
        <h4>{{ $produto->titulo }}</h4>

        <img src="{{ $produto->local }}" alt="" class="imagem-resultado">
        <p>({{ $produto->descricao }})</p>
        <div class="block-rit-btn">
           Categoria: <a class="popup-with-zoom-anim" href="#small-dialog1">Celulares</a>
        </div>
    </div>

</div>
    <p> </p>
                @endforeach
@endif

</div>
<p class="pagina">{!! $produtos->render() !!}</p>


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

</body>
</html>