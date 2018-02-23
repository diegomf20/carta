
<html>
  <head>
    <meta charset="utf-8">
    <title>A La Carta</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/materialize.min.css">
    <style media="screen">
      .cartilla{
        position: relative;
        border: 2px dashed #fff;
        border-radius: 5px;
        margin:20px;
        margin-top: 40px;
        padding: 5px;
        padding-top: 40px
      }
      .cartilla .titulo{
        font-size: 15px;
        text-align: center;
        font-weight: 700;
        min-width: 200px;
        background-color: #fff;
        position: absolute;
        z-index: 2;
        top: -25px;
        left: calc((100% - 200px)/2);
        padding: 10px 20px;
      }
      .card-action ul{
        margin:0;
      }
      .card-action li{
        display: inline-block;
        padding-left: 5px;
        padding-right: 5px;
      }

      .card-action li:not(:only-child):not(:last-child){
        border-right: 1px solid #111;
      }
      span{
        font-size: 12px;
        display: block;
      }
      h6{
        font-weight: 700
      }
      .bottom-sheet input[type=number]{
        width: 50px
      }

      /*modificacion de framework*/
      .card.horizontal .card-image {
        max-width: 20%
      }
      .card .card-action{
        padding: 16px 10px;
      }
      .carrito-compras{
        position: fixed;
        bottom:  20px;
        right: 20px;
        z-index: 1;
      }
      .modal.bottom-sheet{
        min-height: 100%;
      }
      .modal-close{
          position: absolute;
          top: 10px;
          right: 10px
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body class="brown lighten-5">
    <nav class="brown">
      <div class="container">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><i class="material-icons medium">local_dining</i>La Carta</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">CARTA</a></li>
              <li><a href="#">PEDIDOS</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">Javascript</a></li>
              <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <div class="container orange lighten-1">
      <div class="row">
        <ul class="tabs tabs-transparent">
          <li class="tab">
            <a href="#tab1" class="active">PLATOS A LA CARTA</a>
          </li>
          <li class="tab">
            <a href="#tab2">PIZZAS</a>
          </li>
          <li class="tab">
            <a href="#tab3">BEBIDAS</a>
          </li>
        </ul>
        <div id="tab1" class="cartilla">
          <div class="titulo">
            PLATOS A LA CARTA
          </div>
          <div class="row">
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-mixta.jpg">
                  <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1 modal-trigger seleccionar" href="#modal1"><i class="material-icons">add</i></a>
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-carnes-tocineta.jpg">
                  <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-carnes-tocineta.jpg">
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-carnes-tocineta.jpg">
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-carnes-tocineta.jpg">
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab2" class="cartilla">
          <div class="titulo">
            PLATOS A LA CARTA
          </div>
          <div class="row">
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-napolitana.jpg">
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image">
                  <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-mixta.jpg">
                  <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
                </div>
                <div class="card-action center-align">
                  <h6>PIZZA AMERICANA</h6>
                  <ul>
                    <li>
                      <span>Personal</span>
                      <span>$ 10</span>
                    </li>
                    <li>
                      <span>Mediano</span>
                      <span>$ 20</span>
                    </li>
                    <li>
                      <span>Familiar</span>
                      <span>$ 30</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div id="tab3" class="cartilla">
              <div class="titulo">
                BEBIDAS
              </div>
              <div class="row">
                <div class="col s6 m6 l3">
                  <div class="card">
                    <div class="card-image">
                      <img src="https://plazavea.vteximg.com.br/arquivos/ids/178655-1000-1000/315845.jpg?v=635909118008070000">
                      <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-action center-align">
                      <h6>Gaseosa Inka Kola</h6>
                      <ul>
                        <li>
                          <span>Personal</span>
                          <span>$ 10</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col s6 m6 l3">
                  <div class="card">
                    <div class="card-image">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmP8SLnIgT-BGCm95cBJaHmPuLBy4XooP9vcQJDALamhlyPxd3">
                      <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-action center-align">
                      <h6>Countri Club</h6>
                      <ul>
                        <li>
                          <span>Personal</span>
                          <span>$ 10</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col s6 m6 l3">
                  <div class="card">
                    <div class="card-image">
                      <img src="https://plazavea.vteximg.com.br/arquivos/ids/178655-1000-1000/315845.jpg?v=635909118008070000">
                      <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-action center-align">
                      <h6>Gaseosa Inka Kola</h6>
                      <ul>
                        <li>
                          <span>Personal</span>
                          <span>$ 10</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>
      </div>
    </div>
    <div class="carrito-compras">
        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal2"><i class="material-icons">shopping_basket</i></a>
    </div>


  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h6>PIZZA AMERICANA</h6>
      <p>
        <input name="group1" class="with-gap" type="radio" id="test1" />
        <label for="test1">Pequeña</label>
      </p>
      <p>
        <input name="group1" class="with-gap" type="radio" id="test2" />
        <label for="test2">Mediana</label>
      </p>
      <p>
        <input name="group1" class="with-gap" type="radio" id="test3" />
        <label for="test3">Familiar</label>
      </p>
      <div class="row">
        <div class="input-field col s12 m4">
          <input id="cantidad" type="number" min="1" max="5" name="" value="">
          <label for="cantidad" data-error="wrong" data-success="right">Cantidad:</label>
        </div>
      </div>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
    <!--carrito de compras-->
    <div id="modal2" class="modal bottom-sheet">
      <div class="modal-content">
        <a href="#!" class="modal-close btn-floating black "><i class="material-icons">remove</i></a>
        <h6>DETALLES DE PEDIDO</h6>
        <table>
          <thead>
            <tr>
                <th>Nombre de ITEM</th>
                <th>Tamaño</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Quitar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pizza Americana</td>
              <td>Familiar</td>
              <td><input class="col s2" type="number"></td>
              <td>$20</td>
              <td><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a></td>
            </tr>
            <tr>
              <td>Pizza Americana</td>
              <td>Familiar</td>
              <td><input class="col s2" type="number"></td>
              <td>$20</td>
              <td><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--fin del carrito de compras-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">

    </script>
    <script type="text/javascript" src="vendor/js/materialize.min.js">

    </script>
    <script type="text/javascript">
      $()
      $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
        $(".button-collapse").sideNav();
      });
      var data=[{'nombre':'Hamburguesa extra grande'}];

    </script>
  </body>
</html>
