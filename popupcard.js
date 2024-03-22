let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.sld').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.sld').prepend(items[items.length - 1])
})


document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('popupBtn').addEventListener('click', function() {
        document.getElementById('popupContainer').style.display = 'block';
    });

    document.getElementById('closeBtn').addEventListener('click', function() {
        document.getElementById('popupContainer').style.display = 'none';
    });
});
