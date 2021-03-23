let menu=document.getElementById('menu') // Content block declaration for the menu
let hamburger=document.getElementById('hamburger') // Burger button declaration
let close=document.getElementById('close') // Announcement of the menu close button (cross)
hamburger.addEventListener('click',function(){menu.classList.remove('display_none_Mobile')}) // Opening the menu when you press the burger button
close.addEventListener('click',function(){menu.classList.add('display_none_Mobile')}) // Closing the menu by clicking on the close button