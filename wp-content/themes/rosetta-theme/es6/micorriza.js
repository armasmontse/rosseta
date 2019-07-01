import {$, w} from './constants'
import './slider'
import './menu'
import './animate-body'
import './active-menu-section'
// import './masonry'
// import './modal'
// import './page-top'
// import './view-more'
// import './view-more-xs'
// import './scrollit'
// import { renderYoutube } from './video'

w.load(() => {
    //renderYoutube();
    new WOW().init();
});

$(document).ready(function() {
    console.log('Hello world from El Cultivo!')
})