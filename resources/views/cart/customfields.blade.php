<div class="card card-profile shadow">
    <div class="px-4">
      <div class="mt-5">
        <h3>Información del Cliente<span class="font-weight-light"></span></h3>
      </div>
      <div class="card-content border-top">
        <br />
        @include('partials.fields',['fields'=>[
          ['ftype'=>'input','name'=>"",'id'=>"nameCustomer",'placeholder'=>"Escribe tu nombre ...",'required'=>true]
        ]])
      </div>
      <br />
      <br />
    </div>
</div>
