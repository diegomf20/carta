
<html>
  <head>
    <meta charset="utf-8">
    <title>A La Carta</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/materialize.min.css">
    <style media="screen">
      .container{
        display: flex;
      }
      .cartilla{
        position: relative;
        border: 2px dashed #fff;
        border-radius: 5px;
        margin:0px;
        margin-top: 25px;
        padding: 20px;
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


      /*modificacion de framework*/
      .card.horizontal .card-image {
        max-width: 20%
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body class="/**red lighten-5**/">
    <div class="container orange lighten-1">
          <div class="card  transparent">
            <div class="card-tabs">
              <ul class="tabs tabs-transparent">
                <li class="tab">
                  <a href="#tab1" class="active">PLATOS A LA CARTA</a>
                </li>
                <li class="tab">
                  <a href="#tab2" class="active">PIZZAS</a>
                </li>
                <li class="tab">
                  <a href="#tab3" class="active">HELADOS</a>
                </li>

              </ul>
            </div>
            <div class="card-content ">
              <div id="tab1" class="cartilla">
                <div class="titulo">
                  PLATOS A LA CARTA
                </div>
                <div class="row">
                  <div class="col s12 m6 l4">
                    <div class="card">
                      <div class="card-image">
                        <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-mixta.jpg">
                        <a class="btn-floating halfway-fab waves-effect waves-light orange lighten-1 modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
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
              <div id="tab3" class="cartilla">
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
                  <div class="col s12 m12">
                    <div class="card horizontal">
                      <div class="card-image">
                        <img src="http://www.pizzaspiccolo.com.co/wp-content/uploads/2015/11/productos-pizza-mixta.jpg">
                      </div>
                      <div class="card-action center-align">
                        <div class="row">
                          <div class="col l6">
                            <h6>PIZZA AMERICANA</h6>
                          </div>
                          <div class="col l4">
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
                          <div class="col l2">
                              <a class="halfway-fab waves-effect waves-light orange lighten-1 btn"><i class="material-icons">add</i></a>
                          </div>
                        </div>
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
            </div>
          </div>
    </div>
    <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" data-target="modal1" >Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>PIZZA AMERICANA</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js">

    </script>
    <script type="text/javascript" src="vendor/js/materialize.min.js">

    </script>
    <script type="text/javascript">
    $(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});

    </script>
  </body>
</html>
