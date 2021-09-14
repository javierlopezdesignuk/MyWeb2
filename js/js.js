    
    
// dark light mode toggle

    const toggle = document.querySelector("#themeToggle");
    toggle.addEventListener("click", modeSwitch);

    let isLight = true;

    function modeSwitch() {
        isLight = !isLight;
        // isLight ? toggle.innerText = "🌞" : toggle.innerText = "🌚";
        isLight ? toggle.innerHTML = '<span id="toggleIcon" style="color: white;" class="iconify" data-icon="icon-park-outline:sun"></span>' : toggle.innerHTML = '<span id="toggleIcon" style="color: white;" class="iconify" data-icon="bx:bx-moon"></span>';
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
const target = document.querySelector('#boxcards__process__horizontalScroll');

// Check if boxcards exists
if(target != null){
    target.addEventListener('wheel', event => {
      const toLeft  = event.deltaY < 0 && target.scrollLeft > 0
      const toRight = event.deltaY > 0 && target.scrollLeft < target.scrollWidth - target.clientWidth
    
      if (toLeft || toRight) {
        event.preventDefault()
        target.scrollBy({ left: event.deltaY * 100000000 })
      }
    });

};



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




// cookie functions__________________________________________________________________________

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    window.location.href = "<?php echo $_SERVER['PHP_SELF'];?>";
    return false;
}  

function createCookie() {
    console.log("Cookie created");
    document.cookie = "cookiesAccepted=yes; path=/";
    document.location.reload(true);
};