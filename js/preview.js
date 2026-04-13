const entrada = document.getElementById("arquivo");
const divImg = document.getElementById('div-img-preview');

const reader = new FileReader;

//evemto p quando algo (nesse caso input) mudar
entrada.addEventListener('change', event => {
    const imagem = document.getElementById('imagem-selecionada')
    if(imagem)
    {
        console.log("tinha img");
        imagem.remove();
    }

    reader.onload = function(event)
    {
        let preview = document.createElement('img');
        preview.className = "mb-2 mt-2 ms-1 rounded rounded-lg shadow-lg border border-2 border-primary ";
        preview.id = 'imagem-selecionada';

        preview.onload = () => {
            let maxSize = 250;

            let largura = preview.naturalWidth;
            let altura = preview.naturalHeight;

            let proporcao = Math.min(maxSize / largura, maxSize / altura);
            
            preview.width = largura * proporcao;
            preview.height = altura * proporcao;
        };              

        preview.style.objectFit = "cover";
        preview.id = 'imagem-selecionada';
        preview.src = event.target.result;
        divImg.insertAdjacentElement('afterend', preview);
                    
    }
reader.readAsDataURL(entrada.files[0])
});