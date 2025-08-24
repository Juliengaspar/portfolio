(
    function () {
        const app ={
            init(){
                console.log("test");
                this.addEventListenerKey();
                this.addEventListenerMouse();
            },
            addEventListenerKey(){
                document.addEventListener('keyup', (evt) =>{
                    if (evt.key === 'Tab') {
                        document.documentElement.classList.add('keyboard-nav');
                    }
                });
            } ,
            addEventListenerMouse(){
                document.addEventListener('mousedown', ()=> {
                    document.documentElement.classList.remove('keyboard-nav');
                });
            }
        }

        app.init();
    }
)()

