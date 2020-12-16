gsap.registerPlugin(ScrollTrigger);

gsap.from('header',{
    opacity:0,
    duration: 1
});


var bannerAnim = gsap.timeline();

bannerAnim
 .from('.banner-text', {
     scaleY: 0,
     duration: 1,
     transformOrigin: 'bottom',
 })

 .from('.banner-text p',{
     x: -600,
     opacity: 0,
     duration: 1,
 })

 .from('.banner-text h3', {
     x: -600,
     opacity: 0,
     duration: 1,
 });


gsap.to('.intro-img img', {
    scrollTrigger: {
        trigger:".intro",
        start: 'top center+=10px',
        toggleActions: 'play reset restart reverse',
    },
    scale: 1,
    duration: 0.8,
    opacity:1,
});


gsap.from('.intro-text h3', {
    scrollTrigger: {
        trigger:".intro",
        start: 'top center+=10px',
        toggleActions: 'play reset restart reverse',
    },
    x:70,
    opacity: 0,
});


gsap.from('.intro-text p', {
    scrollTrigger: {
        trigger:".intro",
        start: 'top center+=30px',
        toggleActions: 'play reset restart reverse',
    },
    y: -20,
    opacity: 0,
    duration: 1,
})

gsap.from('.intro-text a', {
    scrollTrigger: {
        trigger:".intro",
        start: 'top center-=140px',
        toggleActions: 'play reset restart reverse',
    },
    y: -20,
    opacity: 0,
    duration: 1,

})


gsap.to('.prd-sing img', {
    scrollTrigger: {
        trigger:".prd-lst",
        // markers: true,
        start: 'top center+=20%',
        toggleActions: 'play reset restart reverse',
    },
    opacity: 1,
    scale: 1,
    duration: 1.2,
    
})  ;


gsap.from('.part-img', {
    scrollTrigger: {
        trigger: ".partner-logo",
        start: 'top bottom-=20%',
        toggleActions: 'play reset restart reverse',
    
    },
    opacity: 0,
    y: 40,
    duration: 0.5,
    stagger: 0.3,
});

gsap.from('.choose-bps' ,{
    scrollTrigger:{
    trigger:'.choose-bps',
    scrub: true,
    toggleActions: 'play reset restart reverse',
    start: 'top center+=30%',
    end: 'top center +=50%'
    }, 
    scaleX: 0.85,
    backgroundColor: '#013528',
})



const animHeads = document.querySelectorAll('.anim-head');
animHeads.forEach((head) => {
    gsap.from(head, {
            scrollTrigger: {
                trigger: head.querySelector('h5'),
                toggleActions: 'play reset restart reverse',
                start: 'top center+=30%',
            },
            opacity: 0,
            x: 100,
            duration: 1,
            
        });
});





const chooseList = document.querySelectorAll('.choose-bps ul li');

chooseList.forEach(function(list) {
    gsap.from(list, {
        opacity: 0,
        y: 100,
        duration: 1.2,
        scrollTrigger: {
            trigger: list.querySelector('li h3'),
            start: 'top center+=40%',
            toggleActions: 'play reset restart reverse',
        },

    });
});



gsap.from('.prs-big-img' , {
    scrollTrigger: {
        trigger: '.product-slider',
        start: 'top bottom',
        toggleActions: 'play reset restart reverse',


    },
    autoAlpha: 0,
    duration:1,
    x: 100,

    });

gsap.from('.prs-small-img' , {
    scrollTrigger: {
        trigger: '.product-slider',
        start: 'top center+=10%',
        toggleActions: 'play reset restart reverse',
    
    },
    autoAlpha: 0,
    duration:1,
    delay: 0.2,
    x: 100,
 
    });

gsap.from('.prs-desc' , {
    scrollTrigger: {
        trigger: '.product-slider',
        start: 'top center+=10%',
        toggleActions: 'play reset restart reverse',

    },
    autoAlpha: 0,
    duration:1,
    delay: 0.3,
    x: 100,
   
    });


gsap.from('.f-si',{
    scrollTrigger: {
        trigger: 'footer',
        start: 'top center+=30%',
        toggleActions: 'play none none none',
    
    
    },
    opacity: 0,
    y: -100,
    duration: 0.8,
    stagger: 0.2,
});


// gsap.from('.pr-ls-sing', {
//     scrollTrigger: {
//         trigger: ('.pr-ls-sing'),

//     },
//     opacity:0,
//     stagger: 0.2,
//     duration: 1,
// });


gsap.from('.prd-filter label', {
    scrollTrigger: {
        trigger: ('.prd-filter'),

    },
    opacity:0,
    x:20,
    stagger: 0.2,
    duration: 0.5,
});

gsap.from ('.in-br h4', {
    opacity: 0,
    stagger:0.3,
    yPercent:-50,
    duration:0.8,
});

gsap.from ('.in-br p', {
    opacity: 0,
    y:-20,
    delay: 0.3,
    stagger: 0.3,
    duration:0.8,
});

gsap.from('.contact-wrap', {
    opacity: 0,
    y: 50,
    duration: 0.8,
})

gsap.from('.asso-sing img', {
    scrollTrigger: {
        trigger: '.asso-sing',
        start: 'top center+=30%',
        toggleActions: 'play none none none',
    
    
    },
    opacity: 0,
    y: -30,
    duration: 0.8,
    stagger: 0.2,
})

gsap.from('.asso-sing h4', {
    scrollTrigger: {

        trigger: '.asso-sing',
        start: 'top center+=30%',
        toggleActions: 'play none none none',
   
    
    
    },
    opacity: 0,
    y: -30,
    duration: 0.8,
    stagger: 0.2,
})

gsap.from('.asso-sing p', {
    scrollTrigger: {

        trigger: '.asso-sing h4',
        start: 'top center+=30%',
        toggleActions: 'play none none none',

    
    
    },
    opacity: 0,
    y: -30,
    duration: 0.3,
    stagger: 0.1,
})

