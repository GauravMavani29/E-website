const outdiv = document.querySelector('.outdiv');
const homeimg = document.querySelector('.homeimg');
const head = document.querySelector('#head');
const headerele = document.querySelectorAll('.headerele');
const t1 = new TimelineMax();

t1.fromTo(outdiv,2,{height:"0px"}, {height:"250px"})
t1.fromTo(homeimg,3,{height:"0%"}, {height:"100%"},"-=2")
t1.fromTo(head,1,{opacity:0, x:50}, {opacity:1, x:0},"-=2")
t1.fromTo(headerele,1,{opacity:0, x:30}, {opacity:1, x:0},"-=2")

