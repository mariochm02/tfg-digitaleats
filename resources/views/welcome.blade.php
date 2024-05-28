<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .background {
      background: radial-gradient(circle at top, #111, #000); /* Establece el fondo negro */
      color: white; /* Cambia el color del texto para que sea legible en negro */
      min-height: 100vh; /* Asegura que el fondo negro ocupe todo el viewport */
      font-family: sans-serif; /* Agrega una fuente predeterminada para el texto */
    }

    .border-degrade {
      border-image: linear-gradient(to bottom right, #FFD700, #FFAC00) 1;
      
    }

    .superpuesto {
      margin-top: -100px
    }

  </style>
</head>
<body class="background text-white font-sans">
  
  <div class="container mx-auto p-4">
    <div class="text-center text-4xl font-bold mb-8">DIGITAL.EATS</div>
    <div class=" flex justify-center items-center space-x-8">
      <!-- Customer Section -->
      <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-80">
        <div class="text-center">
          <div class="superpuesto bg-yellow-500 w-24 h-24 rounded-full mx-auto mb-4 flex items-center justify-center">
            <svg class="w-20 h-20 bg-black rounded-full p-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C10.3431 2 9 3.34315 9 5C9 6.65685 10.3431 8 12 8C13.6569 8 15 6.65685 15 5C15 3.34315 13.6569 2 12 2ZM12 10C9.79086 10 8 11.7909 8 14V18H16V14C16 11.7909 14.2091 10 12 10ZM6 20V14C6 10.6863 8.68629 8 12 8C15.3137 8 18 10.6863 18 14V20H6Z" fill="#F59E0B"/>
            </svg>
          </div>
          <div class="text-2xl font-semibold mb-2">trabajador</div>
          <div class="text-sm mb-4">LON 25.1</div>
          <div class="space-y-2">
            <input type="text" placeholder="Username" class="w-full p-2 rounded bg-gray-700 text-yellow-500">
            <input type="password" placeholder="Password" class="w-full p-2 rounded bg-gray-700 text-yellow-500">
            <button class="w-full p-2 bg-yellow-500 text-black font-semibold rounded">LOGIN</button>
          </div>
        </div>
      </div>
      
      <!-- Middle Icons -->
      <div class="space-y-4">
        <button class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2ZM12 20C7.589 20 4 16.411 4 12C4 7.589 7.589 4 12 4C16.411 4 20 7.589 20 12C20 16.411 16.411 20 12 20Z"/>
            <path d="M11 11H13V7H11V11Z"/>
            <path d="M11 15H13V13H11V15Z"/>
          </svg>
        </button>
        <button class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3C8.13401 3 5 6.13401 5 10C5 12.6856 6.422 15.053 8.5 16.1964V21H15.5V16.1964C17.578 15.053 19 12.6856 19 10C19 6.13401 15.866 3 12 3ZM10 19V15H14V19H10ZM17 10C17 12.4853 15.4853 14 13 14H11C8.51472 14 7 12.4853 7 10C7 7.51472 8.51472 6 11 6H13C15.4853 6 17 7.51472 17 10Z"/>
          </svg>
        </button>
        <button class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center">
          <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 22V2L20 12L3 22Z"/>
          </svg>
        </button>
      </div>
      
      <!-- Worker Section -->
      <div class=" border-degrade border border-gray-300 rounded-lg shadow-md p-6  p-8 rounded-lg shadow-lg w-80">
        <div class="text-center">
          <div class="superpuesto bg-purple-500 w-24 h-24 rounded-full mx-auto mb-4 flex items-center justify-center">
            <svg class="w-20 h-20 bg-black rounded-full p-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C10.3431 2 9 3.34315 9 5C9 6.65685 10.3431 8 12 8C13.6569 8 15 6.65685 15 5C15 3.34315 13.6569 2 12 2ZM12 10C9.79086 10 8 11.7909 8 14V18H16V14C16 11.7909 14.2091 10 12 10ZM6 20V14C6 10.6863 8.68629 8 12 8C15.3137 8 18 10.6863 18 14V20H6Z" fill="#8B5CF6"/>
            </svg>
          </div>
          <div class="text-2xl font-semibold mb-2">cliente</div>
          <div class="text-sm mb-4">LPEN 25.1</div>
          <div class="space-y-2">
            <input type="text" placeholder="Username" class="w-full p-2 rounded bg-gray-700 text-purple-500">
            <input type="password" placeholder="Password" class="w-full p-2 rounded bg-gray-700 text-purple-500">
            <button class="w-full p-2 bg-purple-500 text-black font-semibold rounded">LOGIN</button>
            
          </div>
          
        </div>
      </div>
    </div>
    
</div>
  </div>
</body>
</html>
