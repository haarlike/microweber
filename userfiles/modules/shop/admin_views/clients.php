

<script type="text/javascript">


$(document).ready(function(){
  Rotator = mwd.getElementById('clients-rotator');
  mw.tools.simpleRotator(Rotator);

})




  mw.on.hashParam("clientorder", function(){
    if(this!=false){
        mwd.getElementById('mw-clientorder').setAttribute('data-order-id', this);
        mw.load_module('shop/orders/client_inner','#mw-clientorder', function(){
            Rotator.go(1)
        });
     }
     else{
       mw.reload_module('#mw-clients-orders');
        Rotator.go(0)
     }
  });
</script>


<div class="mw-simple-rotator">
    <div class="mw-simple-rotator-container" id="clients-rotator">

<module id="mw-clients-orders" type="shop/orders/clients" />

<div id="mw-clientorder"></div>

    </div>
</div>



