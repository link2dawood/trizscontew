import {
  getUserData,getWithdrawal
}
from'../ajax.js';
import {
  withdraw
}
from'./withdraw.js';
import {
  activityTracker
}
from'../activityTracker.js';
import {
  loadChartData
}
from'../investment/growth.js';
const assetsDiv=document["querySelector"]('.asset-div');
export const preloader=document['getElementById']("preloader");
export const verifIcon=document['querySelectorAll']('.verif-icon');
export const sideOpener=document['querySelectorAll']('.side-opener');
export const depBtn=document["getElementById"]("dep-btn");
export const withBtn=document['getElementById']('with-btn');
export const loanBtn=document['getElementById']("loan-btn");
export const dropDownRef=document["querySelector"](".dropdown-ref");
export const balanceCont=document["querySelector"](".balance-cont");
export const cryptoCont=document["querySelectorAll"](".crypto-cont");
export const balanceCrypto=document["querySelector"]('.balance-crypto');
export const availBalanceCont=document["querySelectorAll"](".avail-balance-cont");
export const availCryptoCont=document['querySelector'](".avail-crypto-cont");
export const totalChangeCont=document['querySelectorAll'](".total-change");
export const totalChangeMainCont=document['querySelector'](".total-change-main");
export const changeArrow=document["querySelector"](".change-arrow");
export const pendReqAppend=document["querySelector"](".pend-req-append");
export const availBalBar=document["querySelector"](".avail-bal-bar");
export const fullNameCont=document["querySelector"](".navbar-profile-menu__text");
export const platformName=document['querySelector'](".platform-name")["innerHTML"]['trim']();
export const refPercent=document["querySelector"](".referral-percent")['innerHTML']["trim"]();
export const refInstance=document["querySelector"]('.referral-instance')["innerHTML"]['trim']();
export const verifDep=document['querySelector']('.verif-dep')["innerHTML"]['trim']();
export const verifWithd=document["querySelector"](".verif-withd")["innerHTML"]["trim"]();
export const verifInv=document["querySelector"](".verif-inv")["innerHTML"]["trim"]();
export const investmentPass=document["querySelector"](".investment-pass")["innerHTML"]["trim"]();
export const loanPass=document["querySelector"](".loan-pass")["innerHTML"]["trim"]();
export const buysellPass=document['querySelector'](".buysell-pass")['innerHTML']['trim']();
export const p2psendPass=document['querySelector'](".p2psend-pass")['innerHTML']["trim"]();
export const coinpaymentsPass=document['querySelector'](".coinpayments-pass")["innerHTML"]["trim"]();
export const flutterwavePass=document["querySelector"](".flutterwave-pass")['innerHTML']["trim"]();
export const coingatePass=document['querySelector']('.coingate-pass')['innerHTML']["trim"]();
export const brandUrl=document['querySelector'](".end_detail")['innerHTML']["trim"]();
export const adminEmail=document["querySelector"](".admin-support")["innerHTML"]['trim']();
export const userEmail=document['getElementById']("user_email")["innerHTML"]["trim"]();
export const userId=Number(document['getElementById']("user_id")["innerHTML"]["trim"]());
export const userPhone=document['getElementById']("user_phone")["innerHTML"]["trim"]();
export const userFname=document["getElementById"]("user_fname")["innerHTML"]["trim"]();
export const userLname=document["getElementById"]("user_lname")["innerHTML"]['trim']();
export const vComplete=document["getElementById"]("verif_complete")['innerHTML']["trim"]();
export const vStatus=document['getElementById']("verif_status")['innerHTML']["trim"]();
export const userAccDetails=document["getElementById"]("user_account_detail")["innerHTML"]["trim"]()?document["getElementById"]("user_account_detail")['innerHTML']["trim"]():[];
export const refEarnings=document["getElementById"]("referral_earnings")["innerHTML"]["trim"]()?document['getElementById']("referral_earnings")["innerHTML"]["trim"]():[];
export const refCode=document['getElementById']("ref_code")["innerHTML"]["trim"]();
export const adminWallet=document['getElementById']("admin_wallet")["innerHTML"]['trim']()?document["getElementById"]("admin_wallet")["innerHTML"]["trim"]():[];
export const currencyCode=document['getElementById']("currency_code")["innerHTML"]["trim"]()?document["getElementById"]("currency_code")["innerHTML"]["trim"]():"USD";
export const toScreenshot=document["getElementById"]('screen')["innerHTML"]["trim"]()?document['getElementById']("screen")['innerHTML']["trim"]():'none';
export const page="wallet";
export const toggleScreen=(_0xa6bdd5,_0x54d91d)=> {
  if(_0x54d91d==="fade")_0xa6bdd5["classList"]["remove"]('go'),setTimeout(()=> {
    _0xa6bdd5["classList"]["add"]("hido");
    
  }
  ,0x3e8);
  else _0x54d91d==="render"&&(_0xa6bdd5['classList']["remove"]('hido'),setTimeout(()=> {
    _0xa6bdd5["classList"]["add"]('go');
    
  }
  ,0x3e8));
  
};
export const formatFigure=_0x22c911=> {
  return Number(_0x22c911["toFixed"](0x2))["toLocaleString"]('en-US');
  
};
const defaultAssetSymbols=['BTC','ETH','USDT','BNB'];
const normalizeSymbol=_0x2f28bb=>String(_0x2f28bb||'')['trim']()["toUpperCase"]()['replace'](/[^A-Z]/g,'');
const getAssetSymbols=()=> {
  const _0x12b7d9=Array['isArray'](window.cryptoSymbols)?window.cryptoSymbols:[];
  if(_0x12b7d9["length"]>0x0)return _0x12b7d9['map'](normalizeSymbol)["filter"](_0x3887bb=>_0x3887bb);
  const _0x51bc98=window.cryptoApiIds||{},_0x259fab=Object["keys"](_0x51bc98)["map"](normalizeSymbol)["filter"](_0x3887bb=>_0x3887bb);
  if(_0x259fab["length"]>0x0)return _0x259fab;
  return defaultAssetSymbols;
  
};
const buildAssetMap=_0x5bde34=> {
  const _0x241a4c={};
  (Array['isArray'](_0x5bde34)?_0x5bde34:[])['forEach'](_0x26a4d1=> {
    const _0x4d4f72=normalizeSymbol(_0x26a4d1?.["shortname"]);
    _0x4d4f72&&(_0x241a4c[_0x4d4f72]=_0x26a4d1);
    
  }
  );
  return _0x241a4c;
  
};
const buildCryptoMap=_0x2d814e=> {
  const _0x32c36d={};
  (Array['isArray'](_0x2d814e)?_0x2d814e:[])["forEach"](_0x5bd581=> {
    const _0x3221b2=normalizeSymbol(_0x5bd581?.["coincode"]||_0x5bd581?.["coin"]);
    _0x3221b2&&(_0x32c36d[_0x3221b2]=_0x5bd581);
    
  }
  );
  return _0x32c36d;
  
};
const getAssetIcon=(_0x21260a,_0x57e4a7)=> {
  const _0x52bf9a=window.cryptoIcons||{};
  return _0x52bf9a[_0x21260a]||_0x57e4a7||'';
  
};
const toBoolean=_0x42b2a1=>_0x42b2a1===!![]||_0x42b2a1===0x1||_0x42b2a1==='1';
const buildAssetList=(_0x4f9f0c,_0x3f0e9d,_0x28c113)=> {
  return (_0x28c113||[])['map'](_0x4cc125=> {
    const _0x57c8e8=_0x4f9f0c[_0x4cc125]||{},_0x29d0bf=_0x3f0e9d[_0x4cc125]||{},_0x4a2b6a=Number(_0x57c8e8["value"]||0x0),_0x2d0dc4=Number(_0x57c8e8["price"]||_0x29d0bf["price"]||0x0),_0x2c9a95=Number(_0x57c8e8["currencyValue"]||_0x4a2b6a*_0x2d0dc4),_0x4c7e4e=typeof _0x57c8e8["change"]!=='undefined'?_0x57c8e8["change"]:_0x29d0bf["change1hr"]||0x0,_0x48b3da=typeof _0x57c8e8["pos"]!=='undefined'?_0x57c8e8["pos"]:_0x29d0bf["changePos"]||0x0;
    return {
      ..._0x57c8e8,
      'name':_0x57c8e8["name"]||_0x29d0bf["coin"]||_0x4cc125,'shortname':_0x4cc125,'value':_0x4a2b6a,'price':_0x2d0dc4,'currencyValue':_0x2c9a95,'change':Number(_0x4c7e4e||0x0),'pos':toBoolean(_0x48b3da),'img':getAssetIcon(_0x4cc125,_0x57c8e8["img"]||_0x29d0bf["coinimage"]||'')
    };
    
  }
  );
  
};
const reDisplayDefaults=_0x329d41=>displayDefaults(_0x329d41);
export const init=_0x476e07=> {
  _0x476e07==='yes'?(availBalanceCont['forEach'](_0x372cd9=> {
    _0x372cd9["classList"]["add"]("blurers");
    
  }
  ),cryptoCont["forEach"](_0x17507d=> {
    _0x17507d['classList']["add"]('blurers');
    
  }
  ),balanceCont["classList"]["add"]("blurers"),availCryptoCont["classList"]["add"]("blurers")):(availBalanceCont["forEach"](_0x5594c4=> {
    _0x5594c4['classList']["remove"]("blurers");
    
  }
  ),cryptoCont["forEach"](_0x45aa96=> {
    _0x45aa96["classList"]["remove"]("blurers");
    
  }
  ),balanceCont['classList']['remove']('blurers'),availCryptoCont["classList"]["remove"]("blurers"));
  ;
  reDisplayDefaults(_0x476e07);
  
};
export const displayDefaults=async _0x3fd631=> {
  preloader['style']["display"]="none",preloader['classList']["add"]("hido");
  const _0xe4451d=await getUserData(userEmail),[_0x37e0e9,_0x2010bc,_0x5313e8,_0x20cfc4,_0x57c09a,_0x527cc6,_0x1de1e9,_0x452acf,_0x45750d,_0x6e69df,_0x3750c3,_0x14987b,_0x5276b0]=loadChartData( {
    'userEmail':userEmail,'userId':userId
  }
  ,_0xe4451d);
  refPercent==='0'?dropDownRef['classList']['add']("hido"):dropDownRef["classList"]['remove']('hido');
  ;
  const _0x2be774=_0xe4451d["myCryptoAssets"],_0x420bae=await getWithdrawal(userEmail),_0x4204b4=_0x420bae?_0x420bae:[],_0x3d65c1=_0x4204b4['filter'](_0x934492=>_0x934492[0x4]==="Pending"),_0x59e08a=_0x2be774['map'](_0x18e1ee=> {
    return {
      ..._0x18e1ee
    };
    
  }
  );
  if(_0x3d65c1?.["length"]>0x0) {
    const _0x2094c9=_0x3d65c1[0x0][0x2],[_0x34b5e3,_0x4f45ac]=_0x2094c9["split"]('\x20'),_0x3efa11=_0x59e08a["find"](_0x425631=>_0x425631['shortname']===_0x34b5e3),_0xb5bd20=_0x59e08a["indexOf"](_0x3efa11),_0x3b471a=Number(_0x59e08a[_0xb5bd20]["value"])-Number(_0x4f45ac);
    _0x59e08a[_0xb5bd20]['value']=Number(_0x3b471a),_0x59e08a[_0xb5bd20]["currencyValue"]=Number(_0x3b471a)*Number(_0x59e08a[_0xb5bd20]['price'])*_0xe4451d["curValue"];
    
  };
  const _0x4c1f92=buildAssetMap(_0x2be774),_0x5b8f83=buildAssetMap(_0x59e08a),_0x1a4a47=buildCryptoMap(_0xe4451d["crypto"]),_0x22a5a9=getAssetSymbols(),_0x1c4c3b=buildAssetList(_0x5b8f83,_0x1a4a47,_0x22a5a9),_0x2cb3bf=buildAssetList(_0x4c1f92,_0x1a4a47,_0x22a5a9)["filter"](_0xa3901b=>_0xa3901b['value']!==0x0),_0x50840d=_0x1c4c3b["filter"](_0x2e5623=>_0x2e5623["value"]!==0x0);
  let _0x3be0b0=[];
  _0x1c4c3b["length"]>0x0&&(_0x1c4c3b['forEach']((_0x3c3184,_0x41f2a9)=> {
    let _0x5d0cb0;
    _0x3fd631==="yes"?_0x5d0cb0="blurers":_0x5d0cb0='';
    ;
    let _0x53a6d5;
    _0x3c3184["pos"]===!![]?_0x53a6d5='bullish':_0x53a6d5='bearish';
    ;
    _0x3be0b0[_0x41f2a9]='\x0a\x20\x20\x20\x20\x20\x20<div\x20class=\x22standard-card\x20standard-card--type-6-v1\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22container\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22standard-card__content\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22standard-card__content-head\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22standard-card__content-currency\x22><img\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20src=\x22'+_0x3c3184['img']+"\" alt=\"\"\n                              class=\"standard-card__content-currency-icon\">\n                          <p class=\"standard-card__content-currency-name\">"+_0x3c3184["shortname"]+'</p>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<p\x20class=\x22standard-card__content-percentage\x20text-'+_0x53a6d5+'\x22>'+_0x3c3184["change"]+"%</p>\n                  </div>\n                  <p class=\"standard-card__content-price-1 "+_0x5d0cb0+'\x22>'+_0x3c3184["value"]["toFixed"](0x5)+"</p>\n                  <p class=\"standard-card__content-price-2 "+_0x5d0cb0+'\x22>'+_0xe4451d["curSymbol"]+formatFigure(_0x3c3184["currencyValue"])+'</p>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22standard-card__content-chart-wrapper\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20id=\x22standard-card__content-chart-7\x22\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20class=\x22standard-card__content-chart-render\x22></div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20';
    
  }
  ),assetsDiv['innerHTML']=_0x3be0b0['join']("</div>"));
  ;
  if(_0x50840d&&_0x50840d?.["length"]>0x0) {
    const _0x20ba90=_0x50840d["map"](_0x31d093=>_0x31d093?.["currencyValue"])['reduce']((_0x598a0b,_0x4df797)=>_0x598a0b+_0x4df797),_0x153ca7=_0x2cb3bf["map"](_0x17bf6f=>_0x17bf6f?.['currencyValue'])['reduce']((_0x3af880,_0x22797b)=>_0x3af880+_0x22797b);
    availBalanceCont["forEach"](_0x5b0e4d=> {
      _0x5b0e4d["innerHTML"]=formatFigure(_0x20ba90)+'\x20'+_0xe4451d["currency"];
      
    }
    ),balanceCont["innerHTML"]=formatFigure(_0x153ca7)+'\x20'+_0xe4451d["currency"];
    const _0x3bec94=_0x50840d["map"](_0x5df753=>_0x5df753?.["change"])["reduce"]((_0x36cff7,_0x55fddd)=>_0x36cff7+_0x55fddd),_0xfee211=_0x50840d["sort"]((_0x10137b,_0x235d9a)=>_0x235d9a["change"]-_0x10137b["change"]),_0xd18cce=_0xfee211['splice'](0x0,0x1),_0xde26b9=_0xd18cce[0x0]['pos'];
    let _0x636f10;
    _0xde26b9===!![]?_0x636f10='+':_0x636f10='-';
    ;
    totalChangeCont["forEach"](_0x37c740=> {
      _0x37c740["innerHTML"]=''+_0x636f10+Number(_0x3bec94)["toFixed"](0x2)+'%';
      
    }
    ),changeArrow["classList"]['remove']("hido");
    _0xde26b9===!![]?(totalChangeMainCont['classList']["add"]("text-bullish"),changeArrow["src"]="../assets/media/images/icons/green-arrow-up.svg"):(totalChangeMainCont["classList"]["add"]("text-bearish"),changeArrow["src"]="../assets/media/images/icons/red-arrow-down.svg");
    ;
    totalChangeMainCont["innerHTML"]=Number(_0x3bec94)["toFixed"](0x2)+'%';
    
  };
  fullNameCont["innerHTML"]=_0xe4451d['fname']+'\x20'+_0xe4451d["lname"],activityTracker( {
    'page':page,'userEmail':userEmail,'userId':userId,'formatFigure':formatFigure,'toggleScreen':toggleScreen,'toScreenshot':_0x3fd631
  }
  ,_0xe4451d);
  
};
export const withdrawWallet=async _0x101d4c=> {
  withdraw(_0x101d4c);
  
};

