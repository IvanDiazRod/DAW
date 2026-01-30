document.addEventListener("DOMContentLoaded", () => {

  const greeting = document.getElementById("greeting");

  const userJSON = localStorage.getItem("user");

  if (userJSON) {

    const user = JSON.parse(userJSON);
    
    greeting.textContent = `Hello ${user.firstname}`;
  
  } else {
    
    greeting.textContent = "Hello guest";
  
  }

  const cardsData = [
  
    {
    
      title: "Career Coaching",
    
      subtitle: "Advance your profession",
    
      description:"Personalized guidance to help you grow professionally and reach your career goals.",
    
      bgColor: "bg-orange-500",
    
      textColor: "text-orange-400",
    
      icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" /></svg>`
  },
  
  {
    
    title: "Personal Growth",
    
    subtitle: "Build confidence and clarity",
    
    description: "Develop self-awareness and skills to improve your personal and professional life.",
    
    bgColor: "bg-green-600",
    
    textColor: "text-green-400",
    
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14"><path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" /></svg>
    `
  },

  {
    
    title: "Business Strategy",
    
    subtitle: "Grow your business",
    
    description: "Strategic coaching to help you make better decisions and achieve sustainable growth.",
    
    bgColor: "bg-blue-600",
    
    textColor: "text-blue-400",
    
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" /></svg>
    `
  },

];

  const container = document.getElementById("cards-container");

  cardsData.forEach(card => {
    
    const cardElement = document.createElement("div");

    cardElement.className = `group bg-gray-800 rounded-2xl shadow-lg overflow-hidden transition hover:-translate-y-2 hover:shadow-2xl`;

    cardElement.innerHTML = `
      
    <div class="flex items-center justify-center text-white ${card.bgColor} py-8">
        
    ${card.icon}
      
    </div>
      
    <div class="p-6 text-center">
        
    <h3 class="text-white text-2xl font-semibold mb-2">
          
    ${card.title}
        
    </h3>
    
    <p class="${card.textColor} text-lg mb-3">
          
    ${card.subtitle}
        
    </p>
    
    <p class="text-gray-300">
          
    ${card.description}
        
    </p>
      
    </div>

    `;

    container.appendChild(cardElement);
  
  });

});