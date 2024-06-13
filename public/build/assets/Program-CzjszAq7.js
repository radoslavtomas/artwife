import{c as _,Q as m,o,a as r,g as u,w as v,b as e,n as f,t as l,u as t,l as p,i as k,e as x,f as y,Z as w,h as g,F as N,r as V}from"./app-BNEpAI_I.js";import{g as c,_ as B}from"./MainLayout-CyK5qCYw.js";const L={class:"col-12 col-md-6 col-lg-4"},T={class:"card p-2 h-100"},C={class:"card-body event-card p-0 fs-3 lh-sm"},E={class:"fs-1 lh-1 text-uppercase"},F={key:0,class:""},I={key:1,class:"h6 pb-2"},M={class:"card-footer fs-4 teaser-footer p-0 m-1"},j={class:"row"},A={class:"col"},H={class:"m-0 mt-1"},P={class:"col",style:{"text-align":"right"}},S={class:"m-0 mt-1"},W={__name:"EventCard",props:{event:Object,year:Number},setup(n){const i=_(()=>m().props.locale).value,a=n,d=c(a.event.title,i).title,s=c(a.event.type,i).type;return(b,$)=>(o(),r("div",L,[u(t(k),{href:`/program/${n.year}/${n.event.slug}`},{default:v(()=>[e("div",T,[e("div",{class:"teaser-img-container-program",style:f({backgroundImage:`url(/storage/${n.event.image})`})},null,4),e("div",C,[e("header",null,[e("h2",E,l(t(d)),1)]),t(s)?(o(),r("p",F,l(t(s)),1)):p("",!0),a.event.place?(o(),r("p",I,l(t(c)(a.event.place,t(i)).place),1)):p("",!0)]),e("div",M,[e("div",j,[e("div",A,[e("span",H,l(n.event.date_start),1)]),e("div",P,[e("span",S,l(n.event.time_start),1)])])])])]),_:1},8,["href"])]))}},Z={id:"festival"},z={id:"festival-title",class:"display-2 lh-1 mb-1"},D={class:"uppercase"},O=["innerHTML"],Q={id:"year-programming",class:"mt-2"},R={key:0,class:"col-12"},q={class:"card p-2"},G={key:1,class:"row g-2"},U={__name:"Program",setup(n){const i=_(()=>m().props.locale).value,a=_(()=>m().props.edition).value.data,d=_(()=>m().props.events).value.data;let s={edition_key:null,title:null,body:null,year:null,hero_img:null,no_events:i==="sk"?"Zatiaľ žiadne eventy, program len pripravujeme...":"No events yet, we are working on it..."};return s.edition_key=a.edition_key,s.title=c(a.title,i).title,s.body=c(a.body,i).body,s.year=a.year,s.hero_img=a.image,x(()=>{}),(b,$)=>(o(),y(B,null,{default:v(()=>[u(t(w),{title:"Program"}),e("div",Z,[e("div",{class:"teaser-img-container-large",style:f({backgroundImage:`url(/storage/${t(s).hero_img})`})},null,4),e("header",z,[u(t(k),{href:"/festival"},{default:v(()=>[g("ArtWife")]),_:1}),g(" / "),e("span",D,"ARTWIFE "+l(t(s).year)+": "+l(t(s).title),1)]),e("div",{id:"festival-body",class:"fs-3 lh-sm",innerHTML:t(s).body},null,8,O)]),e("div",Q,[t(d).length===0?(o(),r("div",R,[e("div",q,l(t(s).no_events),1)])):(o(),r("div",G,[(o(!0),r(N,null,V(t(d),h=>(o(),y(W,{event:h,year:t(a).year,key:h.id},null,8,["event","year"]))),128))]))])]),_:1}))}};export{U as default};
