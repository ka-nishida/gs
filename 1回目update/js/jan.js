
let a="NG";
let b=0;
let i=0;
let hp=1000;

function hantei(){
    i++;
    console.log(i);
    const r = Math.floor(Math.random()*3+1);
    console.log(r);
    let c=0;
    let d="";
    const dm = Math.floor(Math.random()*300+1);

    if(r == 1){
        c="グー";
    }else if(r==2){
        c="チョキ";
    }else if(r==3){
        c="パー";
    }
   $("#pc_hands").html(c);
    
    console.log("Bは"+b);
    console.log("Cは"+c);
    
        if(a=="グー" && c=="グー"){
            d="睨み合っている";
        }else if(a=="グー" && c=="チョキ"){
            d="かち ダメージ"+dm+"をあたえた";
            hp=hp-dm;
        }else if(a=="グー" && c=="パー"){
            d="ダメージをあたえられなかった";
        }else if(a=="チョキ" && c=="グー"){
            d="ダメージをあたえられなかった";
        }else if(a=="チョキ" && c=="チョキ"){
            d="睨み合っている";
        }else if(a=="チョキ" && c=="パー"){
            d="かち ダメージ"+dm+"をあたえた";
            hp=hp-dm;
        }else if(a=="パー" && c=="グー"){
            d="かち ダメージ"+dm+"をあたえた";
            hp=hp-dm;
        }else if(a=="パー" && c=="チョキ"){
            d="ダメージをあたえられなかった";
        }else if(a=="パー" && c=="パー"){
            d="睨み合っている";
        }
    console.log("dは"+d);
    $("#judgment").html(d).css("color","#FF0000");
    $(".wrapper2").html("HP："+hp);
    if(hp>0){
    $(".count").html(i+"戦目")
    }else{
        $(".img1").attr('src','img/clear.jpeg');
        $(".wrapper2").html("倒した！清く美しくなった").css("fontSize","50px");
    }
}


$("#gu_btn").on("click",function(){
    a="グー";
    b=1;
    console.log("aは"+a);
    hantei();
});

$("#cho_btn").on("click",function(){
    a="チョキ";
    b=2;
    console.log("aは"+a);
    hantei();
});
$("#par_btn").on("click",function(){
    a="パー";
    b=3;
    console.log("aは"+a);
    hantei();
});