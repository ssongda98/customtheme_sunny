/*============SCROLL REVEAL ANIMATIOIN================*/ 
const sr = ScrollReveal({
    distance: '90px',
    duration: 3000,
})

sr.reveal(`.hero_text`, {origin: 'left', delay: 100})
sr.reveal(`.hero_img`, {origin: 'right', delay: 300})

sr.reveal(`.about01`, {distance: '0px', opacity: 0, delay: 100})
sr.reveal(`.team`, {origin: 'bottom'})
