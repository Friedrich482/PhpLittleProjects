let visits = document.getElementById('visits');
let visitsDisplayerButton = document.getElementById('visitsDisplayerButton');

visitsDisplayerButton.addEventListener('click', () =>{
   if(visits.style.display == 'none'){
    visits.style.display = 'block';
    visits.style.fontSize = '22px';
    visits.style.border = '6px solid lightblue';
    visits.style.borderRadius = '20px';

    visitsDisplayerButton.textContent = '\u2191'
    
    visitsDisplayerButton.style.color = 'red';
    visitsDisplayerButton.style.minWidth = '90px';
    visitsDisplayerButton.style.border = '6px solid lightblue';
    visitsDisplayerButton.style.fontFamily = 'cursive';
    visitsDisplayerButton.style.borderRadius = '20px';
    visitsDisplayerButton.style.fontWeight = 'bold';
    visitsDisplayerButton.style.fontSize = '22px';
    visits.style.backgroundColor = 'black';
    visitsDisplayerButton.style.backgroundColor = 'black'
   }
   
   else{
    visits.style.display = 'none';
    visitsDisplayerButton.textContent = '\u2193'
   }
})