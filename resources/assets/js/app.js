
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

$(document).ready(function() {
	$('#fullpage').fullpage({
		licenseKey: "OPEN-SOURCE-GPLV3-LICENSE",
		anchors: ['headd', 'about', 'med', 'pes'],
		scrollingSpeed: 1500,
		css3: false,
	});
	//abre galeria 1; fecha meios
	var gal1_aberta = false;

	$("#butgal1").click(function(){
		
		if(gal1_aberta == false){
			$('#gal1').addClass('open');
			$('#meios').addClass('close');
			gal1_aberta = true;
		} 
	});
	//fecha galeria 1; abre meios
	$(".titulo-g").click(function(){
		
		if(gal1_aberta == true){
			$('#gal1').removeClass('open');
			$('#meios').removeClass('close');
			gal1_aberta = false;
		} 
	});
	//abre gal2; fecha meios
	var gal2_aberta = false;

	$("#butgal2").click(function(){
		
		if(gal2_aberta == false){
			$('#gal2').addClass('open');
			$('#meios').addClass('close');
			gal2_aberta = true;
		} 
	});
	//fecha gal2; abre meios
	$(".titulo-g").click(function(){
		
		if(gal2_aberta == true){
			$('#gal2').removeClass('open');
			$('#meios').removeClass('close');
			gal2_aberta = false;
		} 
	});
	//desabilita rolagem em gal 1
	document.getElementById('butgal1').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(false);
	});
	// reabilita rolagem gal 1
	document.getElementById('off1').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(true);
	});
	//desabilita rolagem em gal 2
	document.getElementById('butgal2').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(false);
	});
	//reabilita rolagem em gal 2
	document.getElementById('off2').addEventListener('click', function(){
		fullpage_api.setAllowScrolling(true);
	});
	//botão voltar
	$(document).on('click', '#beck', function(){
		fullpage_api.moveTo('headd');
	});
});