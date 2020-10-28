<?php

    require 'views/header.php';
?>

<div id="app">
  <form id="payment" @submit.prevent="submitPayment">
          <div class="row no-gutters">

            <div class="col-xl-4 order-xl-1 pl-xl-2">
              <div class="card mb-3">
                <div class="card-header bg-light btn-reveal-trigger d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Resumen</h5><a class="btn btn-link btn-sm btn-reveal text-600" href="../e-commerce/shopping-cart.html"><svg class="svg-inline--fa fa-pencil-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg><!-- <span class="fas fa-pencil-alt"></span> --></a>
                </div>

                <div class="card-body">

                  <table class="table table-borderless fs--1 mb-0">
                    <tbody>

                      <tr class="border-bottom" v-for="product in products">
                        <th class="pl-0 pt-0">{{ product.name }} x {{ product.Qty}}
                          <div class="text-400 font-weight-normal fs--2">Sku: {{ product.Sku }} | Cat: {{ product.catalog }}</div>
                        </th>
                        <th class="pr-0 text-right pt-0">$ {{ product.Amount * product.Qty }}</th>
                      </tr>
                    
                    <tr class="border-bottom">
                      <th class="pl-0">Subtotal</th>
                      <th class="pr-0 text-right">$ {{ totalAmount }}</th>
                    </tr>
                    <tr class="border-bottom">
                      <th class="pl-0">Descuento: 
                        <span class="text-success" v-if="desc > 0">30OFF</span>
                      </th>
                      <th class="pr-0 text-right">-$ {{ desc }} </th>
                    </tr>
                    <tr class="border-bottom">
                      <th class="pl-0">Envío</th>
                      <th class="pr-0 text-right">$ 0.00</th>
                    </tr>
                   
                  </tbody></table>
                </div>

                <div class="card-footer d-flex justify-content-between bg-100">
                  <div class="font-weight-semi-bold">Total estimado</div>
                  <div class="font-weight-bold">${{ totalPayment }}</div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 pr-xl-2">
              <div class="card mb-3">
                <div class="card-header bg-light">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto">
                      <h5 class="mb-2 mb-sm-0">Dirección de envío</h5>
                    </div>
                    <div class="col-sm-auto">
                      <a class="btn btn-falcon-default btn-sm" href="#!">Nueva dirección</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <div class="custom-control custom-radio radio-select">
                        <input class="custom-control-input" id="address-1" type="radio" name="clientName" checked="">
                        <label class="custom-control-label font-weight-bold d-block" for="address-1">Julio Villalta
                          <span class="radio-select-content">
                            <span> 7901 4th St N STE 300,<br>St. Petersburg,<br>FL 33702 
                              <span class="d-block mb-0 pt-2">+(518) 712-9886</span>
                            </span>
                          </span>
                        </label>
                        <a class="mt-2 fs--1" href="#!">Editar</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="position-relative">
                        <div class="custom-control custom-radio radio-select">
                          <input class="custom-control-input" id="address-2" type="radio" name="clientName">
                          <label class="custom-control-label font-weight-bold d-block" for="address-2">Julio Villalta
                            <span class="radio-select-content">
                              <span>7901 4th St N STE 300,<br>St. Petersburg, <br>FL, 33702
                                <span class="d-block mb-0 pt-2">+(518) 712-9886</span>
                              </span>
                            </span>
                          </label>
                          <a class="mt-2 fs--1" href="#!">Editar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header bg-light">
                  <h5 class="mb-0">Forma de pago</h5>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="col-12">
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input radio-collapse" type="radio" name="payment-method" id="credit-card" checked="checked">
                        <label class="custom-control-label" for="credit-card">
                          <span class="d-flex align-items-center mb-2 fs-1">Tarjeta</span>
                        </label></div>
                    </div>
                    <div class="col-12 pl-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-row align-items-center">
                            <div class="col">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">Numero</label>
                                <input v-model="bin" class="form-control" type="text" placeholder="•••• •••• •••• ••••" maxlength="16" pattern="[0-9]{16}"></div>
                            </div>
                          </div>
                          <div class="form-row align-items-center">
                            <div class="col-6">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">Fecha Exp</label>
                                <input v-model="fechaExp" class="form-control" type="text" placeholder="mm/yyyy">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label class="ls text-uppercase text-600 font-weight-semi-bold mb-0">CVV<a class="d-inline-block" href="#"><svg class="svg-inline--fa fa-question-circle fa-w-16 ml-2" data-toggle="tooltip" data-placement="top" title="" aria-labelledby="svg-inline--fa-title-XXIufAzF0TVt" data-prefix="fa" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" data-original-title="Card verification value"><title id="svg-inline--fa-title-XXIufAzF0TVt">Card verification value</title><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fa fa-question-circle ml-2" data-toggle="tooltip" data-placement="top" title="Card verification value"></span> --></a></label>
                                  <input v-model="CVV" class="form-control" type="text" placeholder="123" maxlength="3" pattern="[0-9]{3}">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 text-center pt-2 d-none d-sm-block">
                          <div class="rounded p-2 mt-3 bg-100">
                            <div class="text-uppercase fs--2 font-weight-bold">Acceptamos</div><img src="https://prium.github.io/falcon/v2.7.3/default/assets/img/icons/icon-payment-methods-grid.png" alt="" width="120">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                 
                  
                  <div class="row">                    
                    <div class="col-md-5 col-xl-12 col-xxl-5 pl-lg-4 pl-xl-2 pl-xxl-5 text-center text-md-left text-xl-center text-xxl-left">
                      <hr class="border-dashed d-block d-md-none d-xl-block d-xxl-none my-4">
                      <div class="fs-2 font-weight-semi-bold">Total: 
                        <span class="text-primary">${{ totalPayment }}</span>
                      </div>
                      <button class="btn btn-success mt-3 px-5" type="submit">Confirmar &amp; Pagar</button>
                      <p class="fs--1 mt-3 mb-0">Al continuar <strong>Confirmar &amp; Pagar </strong>aceptas nuestros <a href="#!">Terminos y Condiciones</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </form>
</div>

<!-- production version, optimized for size and speed -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>

var app = new Vue({
  el: '#app',
  data: {
    products: [],
    subtotal: 0,
    total: 0,
    bin: '',
    desc: '0',
    fechaExp: '',
    CVV: ''
  },
  watch: {
    bin: function (newBin, oldBin) {
      this.desc = '0'
      this.debouncedGetDesc()
    }
  },
  created: function () { 
    this.debouncedGetDesc = _.debounce(this.getDesc, 500)
  },
  methods: {
    getDesc: function () {
      if (this.bin.startsWith('489983')||this.bin.startsWith('402738')) {        

        //obtengo el monto total de descuento
        var vm = this
        axios.get('<?=URL;?>api/desc')
          .then(function (response) {
            vm.desc = _.capitalize(response.data.desc)
          })
          .catch(function (error) {
            vm.desc = 'Error! Could not reach the API. ' + error
          })           
      } else {
        this.desc = '0'
        return        
      } 


    },
    submitPayment: function () {
      
      console.log({ products: this.products, subtotal: this.totalAmount, total: this.totalPayment, desc: this.desc, bin: this.bin, dechaExp: this.fechaExp});
      
      axios.post('<?=URL;?>checkout/new',{
                    order: this.random,
                    products: this.products, 
                    subtotal: this.totalAmount, 
                    total: this.totalPayment, 
                    desc: this.desc, 
                    bin: this.bin, 
                    dechaExp: this.fechaExp                  
                })
      .then(response => this.responseData = response.data)
      .catch(error => {});   

      alert("Pago procesado! tarjeta: "+ this.bin.substr(0, 6) + " FechaExp: " + this.fechaExp); 
    },
    init(){
      axios.get('<?=URL;?>api/cart')
      .then(response => {
                this.products = response.data;
      })
    }
  },
  mounted() {
    this.init();
  },
  computed: {
    totalAmount: function () {
                    var sum = 0;
                    this.products.forEach(e => {
                        sum += e.Amount * e.Qty;
                    });
                    return sum
                },

    totalPayment: function () {
      let total = 0;
      total = this.totalAmount - this.desc;
      return total
    }
  }

})

</script>

<?php
    require 'views/footer.php';

?>