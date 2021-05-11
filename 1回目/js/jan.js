
let a="NG";
let b=0;

function hantei(){
    const r = Math.floor(Math.random()*3+1);
    console.log(r);
    let c=0;
    let d="";
    
    if(r == 1){
        c="グー";
    }else if(r==2){
        c="チョキ";
    }else if(r==3){
        c="パー";
    }
    const com1=document.querySelector("#pc_hands");
    com1.innerHTML=c;
    
    console.log("Bは"+b);
    console.log("Cは"+c);
    
        if(a=="グー" && c=="グー"){
            d="あいこ";
        }else if(a=="グー" && c=="チョキ"){
            d="かち";
        }else if(a=="グー" && c=="パー"){
            d="まけ";
        }else if(a=="チョキ" && c=="グー"){
            d="まけ";
        }else if(a=="チョキ" && c=="チョキ"){
            d="あいこ";
        }else if(a=="チョキ" && c=="パー"){
            d="かち";
        }else if(a=="パー" && c=="グー"){
            d="かち";
        }else if(a=="パー" && c=="チョキ"){
            d="まけ";
        }else if(a=="パー" && c=="パー"){
            d="あいこ";
        }
    console.log("dは"+d);
    const com2=document.querySelector("#judgment");
    com2.innerHTML=d;
}


const btn1=document.querySelector("#gu_btn");
btn1.onclick = function (e){
    a="グー";
    b=1;
    console.log("aは"+a);
    hantei();
}
const btn2=document.querySelector("#cho_btn");
btn2.onclick = function (e){
    a="チョキ";
    b=2;
    console.log("aは"+a);
    hantei();
}
const btn3=document.querySelector("#par_btn");
btn3.onclick = function (e){
    a="パー";
    b=3;
    console.log("aは"+a);
    hantei();
}

