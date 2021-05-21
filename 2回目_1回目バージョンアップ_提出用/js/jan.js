
let a="NG";
let b=0;
let i=0;
let hp=1000;
function hantei(){
    i++;
    const r = Math.floor(Math.random()*3+1);
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
    $("#judgment").html(d).css("color","#FF0000");
    $(".wrapper2").html("HP："+hp);
        let zan=i;
        localStorage.setItem("zan",hp);
        
    if(hp>0){
    $(".count").html(i+"戦目")
    }else{
        $(".img1").attr('src','img/clear.jpeg');
        $(".wrapper2").html("倒した！清く美しくなった").css("fontSize","50px");
    }
        const history = i+"戦目　" + d + '</br>';
        let key=i;
        localStorage.setItem(key,history);
        $("#list").append(history);
        localStorage.setItem("number",i)
}

$("#gu_btn").on("click",function(){
    a="グー";
    b=1;
    hantei();
});

$("#cho_btn").on("click",function(){
    a="チョキ";
    b=2;
    hantei();
});
$("#par_btn").on("click",function(){
    a="パー";
    b=3;
    hantei();
});

//ページ読み込み：保存データ取得表示
for(let a=1; a<localStorage.length; a++){
    const key  = a;
    const value = localStorage.getItem(key);
    const history = value;
    $("#list").append(history);
}
//clear クリックイベント
$("#clear").on("click",function(){
    localStorage.clear();
    $("#list").empty();
    hp=1000;
    i=0
    $(".wrapper2").html("HP："+hp);
    $(".img1").attr('src','img/kazufa.jpg');
});

var zan = localStorage.getItem("zan");
hp=zan;
console.log(zan);
$(".wrapper2").html("HP："+zan);

var number = localStorage.getItem("number")
        i=number;
        console.log(i);

        if(hp<0){
            $(".img1").attr('src','img/clear.jpeg');
            $(".wrapper2").html("倒した！清く美しくなった").css("fontSize","50px");
        }