const input = document.getElementById("arquivo");
const divImg = document.getElementById('div-img-preview');

const reader = new FileReader;

//evemto p quando algo (nesse caso input) mudar
input.addEventListener('change', event => {
    const imagem = document.getElementById('imagem-selecionada')
    if(imagem)
    {
        imagem.remove();
    }

    reader.onload = function(event)
    {
        let preview = document.createElement('img');
        preview.className = "mb-2 mt-2 ms-1 rounded shadow-lg border border-2 border-primary";
        preview.id = 'imagem-selecionada';

        preview.onload = () => {
            let maxSize = 150;

            let largura = preview.naturalWidth;
            let altura = preview.naturalHeight;

            let proporcao = Math.min(maxSize / largura, maxSize / altura);

            preview.width = largura * proporcao;
            preview.height = altura * proporcao;
        };              

        preview.style.objectFit = "contain";
        preview.id = 'imagem-selecionada';
        preview.src = event.target.result;
        divImg.insertAdjacentElement('afterend', preview);
                    
    }
reader.readAsDataURL(input.files[0])
});