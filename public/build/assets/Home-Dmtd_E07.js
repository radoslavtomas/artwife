import{c as _,Q as u,a as n,b as d,g as b,w as f,d as t,p as k,n as q,t as a,u as s,j as h,l as x,f as m,F as y,r as g,o as w,Z as B}from"./app-Csfepi39.js";import{g as i,_ as C}from"./MainLayout-CpoQnFwU.js";const H={class:"col-12"},M={class:"hp-teaser-content p-2"},N={class:"teaser-body-container fs-3"},V={class:"display-3 lh-1 text-uppercase"},j={key:0},z={key:1,class:"h6 pb-2"},D={class:"row schedule"},E={class:"col fs-3 day",style:{"text-align":"left"}},F={class:"col fs-3 time",style:{"text-align":"right"}},I={__name:"EventCardLarge",props:{event:Object,year:Number},setup(v){const l=_(()=>u().props.locale).value,e=v,r=i(e.event.title,l).title,c=i(e.event.teaser,l).teaser,p=i(e.event.type,l).type;return(o,L)=>(n(),d("div",H,[b(s(x),{class:"hp-teaser",href:`/program/${e.year}/${e.event.slug}`},{default:f(()=>[t("article",M,[t("div",{class:"teaser-img-container",style:k({backgroundImage:`url(/storage/${e.event.image})`})},null,4),t("div",N,[t("header",{class:q(e.event.place?"":"pb-3")},[t("h2",V,a(s(r)),1)],2),s(p)?(n(),d("p",j,a(s(p)),1)):h("",!0),e.event.place?(n(),d("p",z,a(s(i)(e.event.place,s(l)).place),1)):h("",!0),t("p",null,a(s(c)),1)]),t("footer",null,[t("div",D,[t("div",E,a(e.event.date_start),1),t("div",F,a(e.event.time_start),1)])])])]),_:1},8,["href"])]))}},O={class:"marquee__content"},S={class:"marquee__content","aria-hidden":"true"},T={__name:"Marquee",props:{event:Object},setup(v){const l=_(()=>u().props.locale).value,e=v,r=i(e.event.title,l).title;return(c,p)=>(n(),m(s(x),{href:`/program/${e.year}/${e.event.slug}`,class:"marquee",style:{"text-decoration":"none"}},{default:f(()=>[t("div",O,[(n(),d(y,null,g(4,o=>t("span",{key:o,class:"fs-2"},"next event → "+a(s(r))+" → "+a(e.event.date_start_day)+" "+a(e.event.time_start)+" →",1)),64))]),t("div",S,[(n(),d(y,null,g(4,o=>t("span",{key:o,class:"fs-2"},"next event → "+a(s(r))+" → "+a(e.event.date_start_day)+" "+a(e.event.time_start)+" →",1)),64))])]),_:1},8,["href"]))}},Q={key:1,id:"featured"},Z={class:"row gx-2 gy-2"},A={id:"festival"},G={id:"festival-title"},J={class:"display-2 lh-1"},K={id:"festival-body",class:"fs-3 lh-sm"},P=["innerHTML"],X={__name:"Home",setup(v){const l=_(()=>u().props.locale).value,e=_(()=>u().props.page).value.data,r=_(()=>u().props.edition).value.data,c=_(()=>u().props.events).value.data,p=l==="sk"?"Domov":"Home";let o={name:null,body:null,hero_img:null,editions:null};return o.name=i(e.name,l).name,o.body=i(e.body,l).body,w(()=>{}),(L,R)=>(n(),m(C,null,{default:f(()=>[b(s(B),{title:s(p)},null,8,["title"]),s(c).length?(n(),m(T,{key:0,event:s(c)[0]},null,8,["event"])):h("",!0),s(c).length?(n(),d("div",Q,[t("div",Z,[(n(!0),d(y,null,g(s(c),$=>(n(),m(I,{event:$,year:s(r).year,key:$.id},null,8,["event","year"]))),128))])])):h("",!0),t("div",A,[t("div",{class:"teaser-img-container-large",style:k({backgroundImage:`url(/storage/${s(r).image})`})},null,4),t("header",G,[t("h1",J,a(s(o).name),1)]),t("div",K,[t("div",{innerHTML:s(o).body},null,8,P)])])]),_:1}))}};export{X as default};
