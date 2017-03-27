import React    from 'react';
import ReactDOM from 'react-dom';
// import App      from './Components/AppProto';
import App   from './App';
import '../styles/main.scss';

ReactDOM.render(
  <App />,
  document.getElementById('app')
);

if(DEVELOPMENT && module.hot){
    module.hot.accept();
}
