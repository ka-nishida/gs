//----------------------------------------------
// Firebaseの初期化
//----------------------------------------------
// コンソールの内容をそのままコピペ
var config = {
  apiKey: "AIzaSyAwRLMr7fnydhfWM2MQ8HWtQV_Yv9mTU8k",
  authDomain: "dev20chat-6ae4e.firebaseapp.com",
  databaseURL: "https://dev20chat-6ae4e-default-rtdb.firebaseio.com",
  projectId: "dev20chat-6ae4e",
  storageBucket: "dev20chat-6ae4e.appspot.com",
  messagingSenderId: "664945366312",
  appId: "1:664945366312:web:0163381f7c4a0ae8c9ac1d"
};
firebase.initializeApp(config);

//----------------------------------------------
// ドメインとポート番号
//----------------------------------------------
var domain = document.domain;
var port   = (domain === 'localhost')?  5000:80;