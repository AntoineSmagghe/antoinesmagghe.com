class SayHello
{
    constructor(btn, text)
    {
        this.btn = btn;
        this.text = text;
    }

    hello()
    {
        this.btn.addEventListener('click', ()=>{
            alert(this.text);
        });
    }

    init()
    {
        this.hello();
    }
}