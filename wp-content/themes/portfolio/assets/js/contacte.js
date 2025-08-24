(
    function () {
        const app = {
            nameInputElt: document.querySelector("#lastName"),
            spanElt : document.getElementById("aidePseudo"),
            init(){
                console.log('test');
                this.addEvenListernrs();

            },
            addEvenListernrs(){
                this.nameInputElt.addEventListener("focus",  (evt) => {
                    this.spanElt.textContent = "Entrez votre pseudo";
                    this.spanElt.style.color = "white";
                });
                this.nameInputElt.addEventListener("blur",  (evt)=> {
                    this.spanElt.textContent = "";
                    this.spanElt.style.color = "white";
                });
            }
        }
        app.init();
    }
)()