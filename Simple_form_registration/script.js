let visits = document.getElementById('visits');
let visitsDisplayerButton = document.getElementById('visitsDisplayerButton');

visitsDisplayerButton.addEventListener('click', () =>{
   if(visits.style.display == 'none'){
    visits.style.display = 'block';
    visits.style.fontSize = '22px';
    visits.style.border = '6px solid lightblue';
    visits.style.borderRadius = '20px';

    visitsDisplayerButton.innerHTML = '<i class="fi fi-rr-angle-up"></i>'
    
    visitsDisplayerButton.style.color = 'red';
    visitsDisplayerButton.style.minWidth = '90px';
    visitsDisplayerButton.style.border = '6px solid lightblue';
    visitsDisplayerButton.style.fontFamily = 'cursive';
    visitsDisplayerButton.style.borderRadius = '20px';
    visitsDisplayerButton.style.fontWeight = 'bold';
    visitsDisplayerButton.style.fontSize = '22px';
    visits.style.backgroundColor = 'black';
    visitsDisplayerButton.style.backgroundColor = 'black';
    visitsDisplayerButton.style.textAlign = 'center';
   }
   
   else{
    visits.style.display = 'none';
    visitsDisplayerButton.innerHTML = '<i class="fi fi-rr-angle-down">'
   }
})
let logout = document.getElementById('logout');
let confirmForm = document.getElementById('confirmForm');
let denyButton = document.getElementById('denyButton');

logout.addEventListener('click', () =>{
   confirmForm.style.display = 'block';
   logout.addEventListener('mouseover', () =>{
      logout.style.backgroundColor = 'rgba(130, 125, 127, 0.89)';
      
   })
   logout.addEventListener('mouseout', () =>{
      logout.style.backgroundColor = 'black';
   })
})

denyButton.addEventListener('click', () =>{
   confirmForm.style.display = 'none';
   logout.style.backgroundColor = 'black';
   
   logout.addEventListener('mouseover', () =>{
      logout.style.backgroundColor = 'whitesmoke';
   })
})

