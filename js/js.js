    
    
// dark light mode toggle

    const toggle = document.querySelector("#themeToggle");
    toggle.addEventListener("click", modeSwitch);

    let isLight = true;

    function modeSwitch() {
        isLight = !isLight;
        isLight ? toggle.innerText = "🌞" : toggle.innerText = "🌚";
        var rootElement = document.body;
        rootElement.classList.toggle("lightMode");
    }
// nav menu stuff
    var checkbox = document.querySelector('#toggle-menu');
    var icon = document.querySelector('#menu__nav');

    var listener = function(e) {
        if (e.target != checkbox && e.target != icon) {
            checkbox.checked = false;
            document.removeEventListener('click', listener);
        }
    };

    checkbox.addEventListener('click', function() {
        if (this.checked) {
            document.addEventListener('click', listener);
        }
    });



// Horizontal scroll in process boxcards
const target = document.querySelector('#boxcards__process__horizontalScroll')

target.addEventListener('wheel', event => {
  const toLeft  = event.deltaY < 0 && target.scrollLeft > 0
  const toRight = event.deltaY > 0 && target.scrollLeft < target.scrollWidth - target.clientWidth

  if (toLeft || toRight) {
    event.preventDefault()
    // target.scrollLeft += event.deltaY * 100000
    target.scrollBy({ left: event.deltaY * 100000 })
  }
})



// AJAX contact form

$(function () {
    $('#form').on('submit', function (e) {
        e.preventDefault();
        
        // console.log("form intercepted");

        $.ajax({
            type: 'post',
            url: 'includes/contactform.php',
            // dataType: 'json', 
            data: $('form').serialize(),
            success: function (data) {
                // alert('form was submitted');
                // console.log(data); // show in console the return of php script
                // const obj = JSON.parse(data);
                $('#form').toggle("fast" );
                $('#feedback__contact').toggle( "fast" );
            }
        });
    
    });
});
