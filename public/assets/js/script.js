window.addEventListener('load', function () {
    const myFisrtButton = document.querySelector('#btn-dark1');
    //const mySecondButton = document.querySelector('#btn-dark2');
    //const icon = document.querySelector('#myImg');
    const myHeader = document.querySelector('#header');
    const myFooter = document.querySelector('#footer');
    const sousBody = document.querySelector('body');
    //const dashboardButton = document.querySelector('.triangleBis')
    const labelButton = document.querySelectorAll('.btn-outline-secondary');
    const otherButton = document.querySelectorAll('.btn-primary');
    //console.log(labelButton);


    myFisrtButton.addEventListener("click", function (){
        myHeader.classList.toggle("dark-mode-header-footer");
        myFooter.classList.toggle('dark-mode-header-footer');
        sousBody.classList.toggle('sousBody-dark');
        //dashboardButton.classList.toggle('accueilDark');

        labelButton.forEach(element => element.classList.toggle('btn-outline-secondary-dark'));
        otherButton.forEach(element => element.classList.toggle('btn-primary-dark'));
        //console.log(labelButton.forEach(element => element.classList))

        if(myHeader.classList.contains('dark-mode-header-footer')){
            localStorage.setItem('header_theme_dark','dark-mode-header-footer');
            localStorage.setItem('footer_theme_dark','dark-mode-header-footer');
            localStorage.setItem('body_theme_dark','sousBody-dark');
            localStorage.setItem('labelButton_dark', 'btn-outline-secondary-dark');
            localStorage.setItem('otherButton_dark', 'btn-primary-dark');
            //localStorage.setItem('dashboardButton_dark', 'accueilDark');

        }else{
            localStorage.setItem('header_theme_dark','default');
            localStorage.setItem('footer_theme_dark','default');
            localStorage.setItem('body_theme_dark','default');
            localStorage.setItem('labelButton_dark','default');
            localStorage.setItem('otherButton_dark','default');
           // localStorage.setItem('dashboardButton_dark', 'default');
        }
    });

    function retrieve_dark(){
        let darkHeader = localStorage.getItem('header_theme_dark');
        let darkFooter = localStorage.getItem('footer_theme_dark');
        let darkBody = localStorage.getItem('body_theme_dark');
        let darklabelB = localStorage.getItem('labelButton_dark');
        let darkotherB = localStorage.getItem('otherButton_dark');
        //let dashboardButtonB = localStorage.getItem('dashboardButton_dark')

        if(darkHeader != null && darkFooter != null && darkBody != null){
            myHeader.classList.remove('default', 'dark-mode-header-footer');
            myHeader.classList.add(darkHeader);
            myFooter.classList.remove('default', 'dark-mode-header-footer');
            myFooter.classList.add(darkFooter);
            sousBody.classList.remove('default', 'sousBody-dark');
            sousBody.classList.add(darkBody);
            //dashboardButton.classList.remove('default', 'sousBody-dark');
            //dashboardButton.classList.add(dashboardButtonB);
            labelButton.forEach(element => element.classList.remove('default','btn-outline-secondary-dark'));
            labelButton.forEach(element => element.classList.add(darklabelB));
            otherButton.forEach(element => element.classList.remove('default','btn-primary-dark'));
            otherButton.forEach(element => element.classList.add(darkotherB));
        }
    }

    retrieve_dark();

    window.addEventListener("storage",function(){
        //retrieve_funky();
        retrieve_dark();
    },false);
})


/*
const mySecondButton = document.querySelector('.btn-dark2');
mySecondButton.addEventListener('click', function () {
    myHeader.classList.toggle("dark-mode-header-funky");
    myFooter.classList.toggle('dark-mode-header-funky');
    sousBody.classList.toggle('sousBody-funky');

    labelButton.forEach(element => element.classList.toggle('btn-outline-secondary-funky'));
    otherButton.forEach(element => element.classList.toggle('btn-primary-funky'));
    //console.log(labelButton);
    //console.log(otherButton);
    if (myHeader.classList.contains('dark-mode-header-funky')) {
        localStorage.setItem('header_theme', 'dark-mode-header-funky');
        localStorage.setItem('footer_theme', 'dark-mode-header-funky');
        localStorage.setItem('body_theme', 'sousBody-funky');
        localStorage.setItem('labelButton', 'btn-outline-secondary-funky');
        localStorage.setItem('otherButton', 'btn-primary-funky');

    } else {
        localStorage.setItem('header_theme', 'default');
        localStorage.setItem('footer_theme', 'default');
        localStorage.setItem('body_theme', 'default');
        localStorage.setItem('labelButton', 'default');
        localStorage.setItem('otherButton', 'default');

    }
});  */
/*function retrieve_funky(){
    let funkyheader = localStorage.getItem('header_theme');
    let funkyFooter = localStorage.getItem('footer_theme');
    let funkyBody = localStorage.getItem('body_theme');
    let funkylabelB = localStorage.getItem('labelButton_dark');
    let funkyotherB = localStorage.getItem('otherButton_dark');
    if(funkyheader != null && funkyFooter != null && funkyBody != null){
        myHeader.classList.remove('default', 'dark-mode-header-funky');
        myHeader.classList.add(funkyheader);
        myFooter.classList.remove('default', 'dark-mode-header-funky');
        myFooter.classList.add(funkyFooter);
        sousBody.classList.remove('default', 'sousBody-funky');
        sousBody.classList.add(funkyBody);
        labelButton.forEach(element => element.classList.remove('default','btn-outline-secondary-dark'));
        labelButton.forEach(element => element.classList.add(funkylabelB));
        otherButton.forEach(element => element.classList.remove('default','btn-primary-dark'));
        otherButton.forEach(element => element.classList.add(funkyotherB));
    }
}
retrieve_funky();*/