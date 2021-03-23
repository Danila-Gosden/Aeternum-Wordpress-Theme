let menu=document.getElementById('menu') // Объявление блока с контентом для меню меню   
let hamburger=document.getElementById('hamburger') // Объявление кнопки бургера    
let close=document.getElementById('close') // Объявление кнопки закрытия меню (крестик)
hamburger.addEventListener('click',function(){menu.classList.remove('display_none_Mobile')}) // Открытие меню при нажатии на кнопку бургера
close.addEventListener('click',function(){menu.classList.add('display_none_Mobile')}) // Закрытие меню при нажатии на ктопку закрытия