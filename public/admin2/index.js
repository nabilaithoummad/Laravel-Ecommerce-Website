

let menu = document.getElementById('menu_btn');
let main = document.getElementById('main');
let nav = document.getElementById('nav');
let dashboard = document.getElementById('dashboard');
let categories =document.getElementById('categories')
let clients =document.getElementById('clients')
let orders =document.getElementById('orders')
let products =document.getElementById('products')
let sp1 = document.getElementById('sp1')
let sp2 = document.getElementById('sp2')
let sp3 = document.getElementById('sp3')
let sp4 = document.getElementById('sp4')
let sp5 = document.getElementById('sp5')
let i1 = document.getElementById('i1')
let i2 = document.getElementById('i2')
let i3 = document.getElementById('i3')
let i4 = document.getElementById('i4')
let i5 = document.getElementById('i5')




let a = 0;

menu.addEventListener('click',function(){
    if(a==0){
        nav.style.width='30%'
        nav.style.zIndex="100000000000"
        sp1.style.display='block'
        sp1.style.marginRight='10px'
        sp2.style.display='block'
        sp2.style.marginRight='10px'
        sp3.style.display='block'
        sp3.style.marginRight='10px'
        sp4.style.display='block'
        sp4.style.marginRight='10px'
        sp5.style.display='block'
        sp5.style.marginRight='10px'

        i1.style.width='auto'
        i1.style.marginRight='15px'
        i1.style.paddingLeft='15px'

        i2.style.width='auto'
        i2.style.marginRight='15px'
        i2.style.paddingLeft='15px'

        i3.style.width='auto'
        i3.style.marginRight='15px'
        i3.style.paddingLeft='15px'

        i4.style.width='auto'
        i4.style.marginRight='15px'
        i4.style.paddingLeft='15px'

        i5.style.width='auto'
        i5.style.marginRight='15px'
        i5.style.paddingLeft='15px'

        a=1
    }else{
        if(a==1){
            nav.style.width='9%'
            sp1.style.display='none'
            sp2.style.display='none'
            sp3.style.display='none'
            sp4.style.display='none'
            sp5.style.display='none'
            i1.style.width='100%'
            i1.style.marginRight='0px'
            i1.style.paddingLeft='0px'

            i2.style.width='100%'
            i2.style.marginRight='0px'
            i2.style.paddingLeft='0px'

            i3.style.width='100%'
            i3.style.marginRight='0px'
            i3.style.paddingLeft='0px'

            i4.style.width='100%'
            i4.style.marginRight='0px'
            i4.style.paddingLeft='0px'

            i5.style.width='100%'
            i5.style.marginRight='0px'
            i5.style.paddingLeft='0px'
            a=0
        }
    }
})
