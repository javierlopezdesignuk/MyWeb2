    
    
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


    