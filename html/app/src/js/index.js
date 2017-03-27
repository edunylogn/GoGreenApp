import React    from 'react';
import ReactDOM from 'react-dom';
import App      from './Components/AppProto';
import '../styles/sass/main.scss';

ReactDOM.render(
  <App />,
  document.getElementById('app')
);

if(DEVELOPMENT && module.hot){
    module.hot.accept();
}
