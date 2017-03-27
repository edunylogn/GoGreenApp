var style = require('./style/globalStyle.css');


var messages = require('./messages');

import Bg from './bg';
import Logo from './logo';

var newMessages = () => (`
    <p class="${style.box}">${messages.hi} ${messages.event}</p>
    ${Bg}
    ${Logo}
    ${DEVELOPMENT}
    <div id="menu">
        <button id="load-page-1">Load Page 1</button>
        <button id="load-page-2">Load Page 2</button>
    </div>
    <div id="content">
        Home
    </div>
`);

var app = document.getElementById('app');
app.innerHTML = newMessages();

document.getElementById('load-page-1').addEventListener('click', () => {
    System.import('./page1')
        .then(pageModule => {
            document.getElementById('content').innerHTML = pageModule.default;
        })
});

document.getElementById('load-page-2').addEventListener('click', () => {
    System.import('./page2')
        .then(pageModule => {
            document.getElementById('content').innerHTML = pageModule.default;
        })
});



if(DEVELOPMENT){
    if(module.hot){
        module.hot.accept();
    }
}
