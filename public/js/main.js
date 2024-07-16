
function toggleFunction() {
    var hiddenArea = document.querySelector('#hidden-area');
    let val = window.getComputedStyle(hiddenArea).getPropertyValue('display');
    var displayDiv = {
        display: 'block'
    }
    var hideDiv = {
        display: 'none'
    }
    // console.log(val);
    if (val === 'none') {
        Object.assign(hiddenArea.style, displayDiv);
    }
    else {
        Object.assign(hiddenArea.style, hideDiv);
    }
    // console.log('clicked');
}