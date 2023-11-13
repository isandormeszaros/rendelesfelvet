/*=============== SWIPER ===============*/
$(document).ready(function () {
    var swiper = new Swiper(".swiper", {
        loop: true,
        effect: 'fade',
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
});

/*=============== CURRENCY ===============*/
  $(document).ready(function() {
    var currencyValues = {
      'huf': '4500 Ft',
      'eur': '10 EUR',
      'rsd': '100 RSD'
    };
  
    var currentCurrency = 'huf'; 
    updatePrices(currentCurrency);
  
    $('.menu-button').on('click', function() {
      var currency = $(this).text().toLowerCase();
      updatePrices(currency);
    });
  
    function updatePrices(currency) {
      $('.menu-price span').hide();
  
      $('#price-' + currency).text(currencyValues[currency]).show();
      currentCurrency = currency;
    }
  });
  
/*=============== POPUP ===============*/ 
function showPopup() {
    var popup = document.getElementById('popup');
    popup.classList.add('show');
  }
  
  document.getElementById('close-btn').addEventListener('click', function () {
    var popup = document.getElementById('popup');
    popup.classList.remove('show');
  });

/*=============== VEGOSSZEG ===============*/ 
function updateTotal() {
    var elsoMenu = document.getElementById("elsomenu").valueAsNumber || 0;
    var masodikMenu = document.getElementById("masodikmenu").valueAsNumber || 0;
    var harmadikMenu = document.getElementById("harmadikmenu").valueAsNumber || 0;

    var vegosszeg = elsoMenu + masodikMenu + harmadikMenu;

    var selectedCurrency = document.getElementById("currency").value; 
    var currencyValues = {
        'huf': 4500,
        'eur': 10,
        'rsd': 100
    };

    var convertedVegosszeg = vegosszeg * currencyValues[selectedCurrency];


    // document.getElementById("totalPrice").innerText = (selectedCurrency === 'huf') ?
    // convertedVegosszeg + ' HUF' :
    // convertedVegosszeg + ' ' + selectedCurrency;

    document.getElementById("totalPrice").innerText = (selectedCurrency === 'huf') ?
    convertedVegosszeg + ' HUF' :
    (selectedCurrency === 'rsd') ?
    convertedVegosszeg + ' RSD' :
    convertedVegosszeg + ' EUR';

}
