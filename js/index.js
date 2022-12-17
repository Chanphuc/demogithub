const ListItem = document.querySelector('.headline-list')
// const listproduct = document.querySelector('.products')
const products = document.querySelectorAll('.content-item')

ListItem.addEventListener('change', function() {
    
    for(const product of products){
        if(product.getAttribute('data') == ListItem.value)
            product.style.display ="block"
        else
        product.style.display ="none"
    }
    if(ListItem.value == "0"){
        for(const product of products){
            product.style.display ="block"
        }
    }
})

// tim kiếm
const searchInput = document.querySelector('.header__search')

searchInput.addEventListener('keyup', function(){
    // displayAllProduct()
   var searchVal = searchInput.value
   for(const product of products){
        var productName = product.querySelector('.products-name').innerText.toLowerCase();
        if(productName.toLowerCase().indexOf(searchVal) > -1){
            if(product.getAttribute("data") == ListItem.value)
                product.style.display = ""
        }
        else product.style.display = "none"
   }
})

function displayAllProduct(){
    if(searchInput.value.length == 0){
        for(const product of products){
            product.style.display = ""
       }
    }
}

