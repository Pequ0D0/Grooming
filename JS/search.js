document.querySelector('find').oninput = function(){
    let val = this.value.trim();
    let InfoItems = document.querySelectorAll(Info_2);
    if (val != ''){
        InfoItems.forEach(function(elem){
if(elem.innerText.search(val) == -1) {
    elem.classList.add('hide');
}
else{
    elem.classList.remove('hide');
}
        });
    }
}