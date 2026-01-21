document.addEventListener("DOMContentLoaded", () => {

    function cabecera() {

        return `
        
            <header>
            
                <div class="logo">

                    <h1>Logo de mi empresa</h1>

                </div>

                <nav>

                    <ul>
                    
                        <li><a href="#">Elemento1</a></li>

                        <li><a href="#">Elemento2</a></li>

                        <li><a href="#">Elemento3</a></li>

                        <li><a href="#">Elemento4</a></li>
                    
                    </ul>

                </nav>
            
            </header>
        
        `;

    }

    function elementoInput() {

        return `
        
        <form action="#" method="post" enctype="multipart/form-data">
        
            <input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario">
        
            <input type="email" id="correo" name="correo" placeholder="Correo electrónico"> 
        
        </form>
        
        `;

    }

    document.body.innerHTML += cabecera();

    /*document.body.innerHTML += elementoInput();*/

});