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
    var currentCurrency = 'huf';
    updatePrices(currentCurrency);

    $('.menu-button').on('click', function() {
        var currency = $(this).text().toLowerCase();
        updatePrices(currency);
        updateTotal();
    });

    $('#currency').on('change', function() {
        updateTotal();
    });

    function updatePrices(currency) {
        $('.menu-price span').hide();

        var priceElement = $('#price-' + currency);
        var currencySymbol = getCurrencySymbol(currency);
        priceElement.text(currencyPrices[currency] + ' ' + currencySymbol).show();
        currentCurrency = currency;
    }

    function getCurrencySymbol(currency) {
        switch (currency) {
            case 'huf':
                return 'Ft';
            case 'eur':
                return 'EUR';
            case 'rsd':
                return 'RSD';
            default:
                return ''; 
        }
    }
});


  
/*=============== POPUP ===============*/ 
function showPopup() {
    var popup = document.getElementById('popup');
    var overlay = document.getElementById('overlay');
    popup.classList.add('show');
    overlay.classList.add('show');
  }
  
  document.getElementById('close-btn').addEventListener('click', function () {
    var popup = document.getElementById('popup');
    var overlay = document.getElementById('overlay');
    popup.classList.remove('show');
    overlay.classList.remove('show');
  });

/*=============== VEGOSSZEG ===============*/ 
function updateTotal() {
    var elsoMenu = document.getElementById("elsomenu").valueAsNumber || 0;
    var masodikMenu = document.getElementById("masodikmenu").valueAsNumber || 0;
    var harmadikMenu = document.getElementById("harmadikmenu").valueAsNumber || 0;

    var vegosszeg = elsoMenu + masodikMenu + harmadikMenu;

    var selectedCurrency = document.getElementById("currency").value;
    var convertedVegosszeg = vegosszeg * currencyPrices[selectedCurrency];

    document.getElementById("totalPrice").innerText = convertedVegosszeg + ' ' + selectedCurrency.toUpperCase();
}
