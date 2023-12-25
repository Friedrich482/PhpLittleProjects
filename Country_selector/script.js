let p = document.getElementById('para');

let div = document.getElementById('flag');
let flag = document.getElementById('flag');
let country = new URLSearchParams(window.location.search).get("country");
p.textContent = `Here is the flag of your country, that is ${country}`

switch (country) {
    case "United States America" : 
        flag.src="Flags/usa.png";
        flag.style.visibility = 'visible'
        break;
    
    case "Canada" : 
        flag.src="Flags/canada.png";
        flag.style.visibility = 'visible'
        break;

    case "United Kingdom" : 
        flag.src="Flags/united_kingdom.png";
        flag.style.visibility = 'visible'
        break;
    
    case "France" : 
        flag.src="Flags/france.png";
        flag.style.visibility = 'visible'
        break;

    case "Spain" : 
        flag.src="Flags/spain.png";
        flag.style.visibility = 'visible'
        break;

    case "China" : 
        flag.src="Flags/china.png";
        flag.style.visibility = 'visible'
        break;

    case "Japan" : 
        flag.src="Flags/japan.png";
        flag.style.visibility = 'visible'
        break;

    case "Nigeria" : 
        flag.src="Flags/nigeria.png";
        flag.style.visibility = 'visible'
        break;

    case "SouthAfrica" : 
        flag.src="Flags/south_afica.png";
        flag.style.visibility = 'visible'
        break;
    
    case "Algeria" : 
        flag.src="Flags/algeria.png";
        flag.style.visibility = 'visible'
        break;

    case "Algeria" : 
        flag.src="Flags/algeria.png";
        flag.style.visibility = 'visible'
        break;

    case "Brasil" : 
        flag.src="Flags/brasil.png";
        flag.style.visibility = 'visible'
        break;

    default:
        flag.src="Flags/dot.jpg";
        flag.style.visibility = 'visible'
        break;
}